<?php
header('Content-Type: application/json');
require_once __DIR__ . '/../config/config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'status' => 'error',
        'msg' => 'Invalid request'
    ]);
    exit;
}

$fotemail = $_POST['footersub'] ?? '';

if ($fotemail == '') {
    echo json_encode([
        'status' => 'error',
        'msg' => 'Email required'
    ]);
    exit;
}

/* ⚠️ column name WITHOUT quotes */
$sql = "INSERT INTO footeruser (footersub) VALUES ('$fotemail')";

if ($conn->query($sql)) {
    echo json_encode([
        'status' => 'success',
        'msg' => 'Subscribe successfully'
    ]);
} else {
    echo json_encode([
        'status' => 'error',
        'msg' => 'Database error'
    ]);
}
