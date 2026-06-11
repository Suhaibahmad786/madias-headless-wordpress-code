<?php
header('Content-Type: application/json');
require_once __DIR__ . '/../config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conname = $_POST['contactname'];
    $conemail = $_POST['contactemail'];
    $conconect = $_POST['conconnect'];

    $sql = "INSERT INTO footerdata (contactname, contactemail, conconnect) VALUES ('$conname', '$conemail', '$conconect')";
    if($conn->query($sql)){
        sleep(2);
   echo json_encode(["msg" => "Thanks For Submit"]);
        // header("Location: ../index.php");
        exit();
    }
else{
    echo json_encode(["msg" => "Error: " . $conn->error]);
    exit();
}
}