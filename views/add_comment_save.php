<?php

$host = 'localhost';
$dbname = 'db_local';
$username = 'root';
$password = 'root';

$name = $_POST['name'];
$age = $_POST['age'];
$comment = $_POST['comment'];

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO comment (name, age, comment) VALUES ('$name', '$age', '$comment')";
    $conn->exec($sql);
    echo "New record created successfully";
    echo "<br> name: $name, age: $age, comment: $comment";

} catch (PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}

$conn = null;

?>

<div>
    <a href="/">back</a>
</div>

