<?php
include 'conn.php';
$productId = isset($_POST['id']) ? $_POST['id'] : 'hello';
$query = $conn->prepare("SELECT * FROM posts WHERE id = '$productId'");
$query->execute();
$data = $query->fetchAll(\PDO::FETCH_ASSOC);
echo json_encode($data);
return;

?>