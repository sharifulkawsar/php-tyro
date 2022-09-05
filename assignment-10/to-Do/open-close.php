<?php
if (isset($_GET['done_task'])) {
    $id = $_GET['done_task'];
    $status = 1;
    $query = "UPDATE tasks SET status=:status WHERE id = '$id'";
    $statement = $conn->prepare($query);
    $statement->bindValue(':status', $status);
    $statement->execute();

    header('location: index.php');
}

if (isset($_GET['reopen_task'])) {
    $id = $_GET['reopen_task'];
    $status = 0;
    $query = "UPDATE tasks SET status=:status WHERE id = '$id'";
    $statement = $conn->prepare($query);
    $statement->bindValue(':status', $status);
    $statement->execute();

    header('location: index.php');
}
