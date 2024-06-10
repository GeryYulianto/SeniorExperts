<?php session_start();
ob_start();
require "../misc/header.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seniorexperts";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function getallval($form_type) {
    if ($form_type === 'user') {
        $username = $_POST['username'];
        $pass = md5($_POST['pass']);
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $bidang = $_POST['bidang'];
    
        //PDF File
        $cvName = $_FILES['file']['name'];
        $cvTmpName = $_FILES['file']['tmp_name'];
    
        return array($username, $pass, $nama, $alamat, $bidang, $cvName, $cvTmpName);
    } 
    else if ($form_type === 'company') {
        $idPerusahaan = $_POST['idPerusahaan'];
        $pass = md5($_POST['pass']);
        $namaPerusahaan = $_POST['nama'];
        $alamatPerusahaan = $_POST['alamat'];

        return array($idPerusahaan, $pass, $namaPerusahaan, $alamatPerusahaan);
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $form_type = $_POST['form_type'];
    if ($form_type === 'user') {
        list($username, $pass, $nama, $alamat, $bidang, $cvName, $cvTmpName) = getallval($form_type);

        // Check username already exist
        $stmt = $conn->prepare("SELECT * FROM experts WHERE username_experts = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            ob_start();
            
            echo '<div class="alert alert-danger mt-3" role="alert">';
            echo "Username Already Exists! Redirecting you back to Login Form in 3 Seconds!";
            echo '</div>';
            
            ob_flush();
            
            header("refresh:3;url='sign_up_experts.php'");
        }

        // If not exist
        $dir = "../experts_cv/";
        if (!is_dir($dir)) {
            mkdir($dir, 0777, TRUE);
        }

        $cvPath = $dir . $username. ".pdf";

        //Saving the pdf file to dir
        $res = move_uploaded_file($cvTmpName, $cvPath);

        if ($res) {
            $stmt = $conn->prepare("INSERT INTO experts VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $username, $nama, $alamat, $bidang, $cvPath, $pass);

            if ($stmt->execute()) {
                echo '<div class="alert alert-success mt-3" role="alert">';
                echo "Sign Up Successful! Redirecting you back to home page in 3 Seconds!";
                echo '</div>';
                $_SESSION['nama'] = $nama;
            } else {
                echo "Error:" . $stmt->error;
            }
        } else {
            echo "Error occured";
        }
    } 
    else {
        list($idPerusahaan, $pass, $namaPerusahaan, $alamatPerusahaan) = getallval($form_type);
        $stmt = $conn->prepare("SELECT * FROM perusahaan WHERE id_perusahaan = ?");
        $stmt->bind_param("i", $idPerusahaan);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            ob_start();
            
            echo '<div class="alert alert-danger mt-3" role="alert">';
            echo "ID Perusahaan Already Exists! Redirecting you back to Login Form in 3 Seconds!";
            echo '</div>';
            
            ob_flush();
            
            header("refresh:3;url='sign_up_admin.php'");
        }

        $stmt = $conn->prepare("INSERT INTO perusahaan VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssis", $namaPerusahaan, $alamatPerusahaan, $idPerusahaan, $pass);

        if ($stmt->execute()) {
            echo '<div class="alert alert-success mt-3" role="alert">';
            echo "Sign Up Successful! Redirecting you back to home page in 3 Seconds!";
            echo '</div>';
            $_SESSION['nama'] = $namaPerusahaan;
        } else {
            echo "Error:" . $stmt->error;
        }
    }
}

// Add redirect
$stmt->close();
$conn->close();
ob_start();

echo header('refresh:3;../home/index.php');

ob_end_flush();
?>