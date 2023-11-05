<?php

$firstname = $_POST['firstname'];
$age = $_POST['age'];
$comment = $_POST['comment'];

try {
    $sql = "INSERT INTO comment (firstname, age, comment) VALUES ('$firstname', '$age', '$comment')";
    $conn->exec($sql);
    echo "New record created successfully";
    echo "<br> firstname: $firstname, age: $age, comment: $comment";
} catch (PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}

$conn = null;

require '../app/templates/add_comment_save.php';
