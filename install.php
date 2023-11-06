<?php


require __DIR__ . '/app/db_connection.php';

if ($conn) {

    echo "Connection established successfully\n";

    $sql = "CREATE TABLE IF NOT EXISTS `db_local`.`comment` (
            `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `firstname` VARCHAR(40),
            `age` INT(3),
            `comment` VARCHAR(256)
        )";

    $conn->exec($sql);

    echo "Create table";
} else {
    echo 'Connection failed';
}
