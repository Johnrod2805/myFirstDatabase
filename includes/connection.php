<?php

$db_server = "mysql:host=localhost;dbname=myFirstDatabase";
$db_username = 'root';
$db_password = '';


try {
    $pdo = new PDO($db_server, $db_username, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connection successed";
    //CREATE DATABASE //
    /*$connexion->exec("CREATE DATABASE myFirstDatabase");
    echo "DB created";*/

    //CREATE TABLE users //
    /*$query = "CREATE TABLE users(
                id INT(11) NOT NULL AUTO_INCREMENT,
                username VARCHAR(30) NOT NULL,
                pwd VARCHAR(255) NOT NULL,
                email VARCHAR(100) NOT NULL,
                created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY(id)
                )";
    $pdo->exec($query);
    echo "Table users successfully created !!";*/

    //CREATE TABLE comments//
    /*$query = "CREATE TABLE comments(
        id INT(11) NOT NULL AUTO_INCREMENT,
        username VARCHAR(30) NOT NULL,
        comment_text TEXT NOT NULL,
        created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
        users_id INT(11),
        PRIMARY KEY(id),
        FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE SET NULL
        )";
    $pdo->exec($query);
    echo "Table comments successfully created !!";*/
} catch (PDOException $e) {
    echo ("Insertion failed : " . $e->getMessage());
};
