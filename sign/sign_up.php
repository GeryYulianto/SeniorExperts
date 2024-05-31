<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seniorexperts";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function getallval() {
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

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Get All data
    list($username, $pass, $nama, $alamat, $bidang, $cvName, $cvTmpName) = getallval();
    
    $dir = "../experts_cv/";
    if (!is_dir($dir)) {
        mkdir($dir, 0777, TRUE);
    }

    $cvPath = $dir . $username. ".pdf";

    //Saving the pdf file to dir
    $res = move_uploaded_file($cvTmpName, $cvPath);

    //If Successful
    if ($res) {
        //Avoid sql injection
        $stmt = $conn->prepare("INSERT INTO experts VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $username, $nama, $alamat, $bidang, $cvPath, $pass);

        if ($stmt->execute()) {
            echo "Succesfull";
        } else {
            echo "Error:" . $stmt->error;;
        }
    } else {
        echo "Error occured";
    }
}

// Add redirect
$conn->close();

?>