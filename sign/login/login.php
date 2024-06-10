<?php
require "../misc/header.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seniorexperts";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $form_type = $_POST['form_type'];
    if ($form_type === 'user') {
        $userName = $_POST['username'];
        $password = md5($_POST['password']);

        $stmt = $conn->prepare("SELECT * FROM experts WHERE username = ? AND 'password' = ?");
        $stmt->bind_param("ss", $userName, $password);
        $stmt->execute();
        $res = $stmt->get_result();
        if ($res->num_rows>0) {
            $nama = $res['nama_experts'];
            $_SESSION['nama'] = $nama;
            $_SESSION['is_employer'] = FALSE;
            echo '<div class="alert alert-success mt-3" role="alert">';
            echo "Sign Up Successful! Redirecting you back to home page in 3 Seconds!";
            echo '</div>';
        } else {
            echo '<div class="alert alert-danger mt-3" role="alert">';
            echo "Wrong pass or username!";
            echo '</div>';
            exit();
        }
    } else {
        $id_perusahaan = $_POST['id_perusahaan'];
        $password = md5($_POST['password']);

        $stmt = $conn->prepare("SELECT * FROM perusahaan WHERE username = ? AND 'password' = ?");
        $stmt->bind_param("ss", $id_perusahaan, $password);
        $stmt->execute();
        $res = $stmt->get_result();

        if ($res->num_rows>0) {
            $nama = $res['nama_perusahaan'];
            $_SESSION['nama'] = $nama;
            $_SESSION['is_employer'] = TRUE;
            echo '<div class="alert alert-success mt-3" role="alert">';
            echo "Sign Up Successful! Redirecting you back to home page in 3 Seconds!";
            echo '</div>';
        } else{
            echo '<div class="alert alert-danger mt-3" role="alert">';
            echo "Wrong pass or username!";
            echo '</div>';
            exit();
        }
    }
}

$stmt->close();
$conn->close();
echo header('refresh:3;../home/index.php');

?>