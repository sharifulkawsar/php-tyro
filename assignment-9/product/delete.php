<?php
include 'conn.php';
$productId = isset($_POST['id']) ? $_POST['id'] : 'Empty ID';
if (!empty($productId)) {
    $query = $conn->prepare("DELETE FROM posts WHERE id = '$productId'");
    $query->execute();
    $data['status'] = 'success';
    echo json_encode($data);
    return true;
} else {
    return false;
}
