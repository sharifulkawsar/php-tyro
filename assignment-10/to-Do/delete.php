<?php
if (isset($_GET['del_task'])) {
    $id = $_GET['del_task'];
    $query = $conn->prepare("DELETE FROM tasks WHERE id = '$id'");
    $query->execute();

    header('location: index.php');
}
?>