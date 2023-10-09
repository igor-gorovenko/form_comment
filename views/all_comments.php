<h1>View comment</h1>

<div>
    <a href="/">back</a>
</div>
<?php

$host = 'localhost';
$dbname = 'db_local';
$username = 'root';
$password = 'root';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Устанавливаем режим ошибок PDO на исключения
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Ошибка соединения: " . $e->getMessage());
}

try {
    $sql = "SELECT * FROM comment";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Устанавливаем режим выборки результата в ассоциативный массив
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    // Выводим данные на странице
    while ($row = $stmt->fetch()) {
        echo $row["id"] . ". " . $row["name"] . " (" . $row["age"] . ")" . ": " . $row["comment"] . "<br>";
    }
} catch (PDOException $e) {
    echo "Ошибка: " . $e->getMessage();
}

// Закрываем соединение
$conn = null;
?>