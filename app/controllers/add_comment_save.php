<?php

$name = $_POST['name'];
$age = $_POST['age'];
$comment = $_POST['comment'];

try {
    $sql = "INSERT INTO comment (name, age, comment) VALUES ('$name', '$age', '$comment')";
    $conn->exec($sql);
    echo "New record created successfully";
    echo "<br> name: $name, age: $age, comment: $comment";
} catch (PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}

$conn = null;

require '../app/templates/add_comment_save.php';
