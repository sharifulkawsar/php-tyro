<?php
include 'conn.php';

$title = $_POST['title'] ?? null;
$category = $_POST['category'] ?? null;
$image = $_FILES['image_path'] ?? null;
$authorName = $_POST['author_name'] ?? null;
$publishedAt = $_POST['published_at'] ?? null;
$imagePath = '';

if (!$title) {
    $errors['title'] = 'Post title is required';
}

if (!$category) {
    $errors['category'] = 'Post category is required';
}

if (!$authorName) {
    $errors['author_name'] = 'Post author name is required';
}

if (empty($errors)) {

    if ($image) {
        if (!is_dir('images')) {
            mkdir('images');
        }

        if (!is_dir('images/blogs')) {
            mkdir('images/blogs');
        }

        // $imagePath = 'images/blogs/randomNumber_filename.jpg';
        $imagePath = 'images/blogs/' . uniqid() . '_' . $image['name'];

        move_uploaded_file($image['tmp_name'], $imagePath);
    }

    $query = 'INSERT INTO posts (title,category,image_path,author_name,published_at)
        VALUES (:title,:category,:image_path,:author_name,:published_at)';
    $statement = $conn->prepare($query);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':category', $category);
    $statement->bindValue(':image_path', $imagePath);
    $statement->bindValue(':author_name', $authorName);
    $statement->bindValue(':published_at', $publishedAt);
    $statement->execute();

    $data['status'] = 'success';
    echo json_encode($data);
    return true;
} else {
    return false;
}
