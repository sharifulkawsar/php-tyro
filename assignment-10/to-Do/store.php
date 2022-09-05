<?php
if (isset($_POST['submit'])) {
    if (empty($_POST['task'])) {
        $errors = "You must fill in the task";
    } else {
        $task = $_POST['task'];
        $priority = rand(1, 3);
        $status = 0;

        $query = 'INSERT INTO tasks (task,priority,status)
        VALUES (:task,:priority,:status)';
        $statement = $conn->prepare($query);
        $statement->bindValue(':task', $task);
        $statement->bindValue(':priority', $priority);
        $statement->bindValue(':status', $status);
        $statement->execute();

        header('location: index.php');
    }
}
