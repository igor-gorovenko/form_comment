<?php

require 'views/all_comments.php';

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
} catch (PDOException $error) {
    echo "Ошибка: " . $error->getMessage();
}

// Закрываем соединение
$conn = null;

?>