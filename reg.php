<?php
// Проверка существования переменных
$login = isset($_POST['login']) ? trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS)) : '';
$username = isset($_POST['username']) ? trim(filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS)) : '';
$email = isset($_POST['email']) ? trim(filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS)) : '';
$password = isset($_POST['password']) ? trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS)) : '';

// Проверка длины логина
if (strlen($login) < 4) {
    echo "Ошибка, логин не может быть меньше четырех символов";
    exit;
}

// Проверка длины имени
if (strlen($username) < 3) {
    echo "Ошибка, имя не может быть меньше трех символов";
    exit;
}

// Проверка email
if (strlen($email) < 4 || !str_contains($email, '@')) {
    echo "Ошибка, email не может быть меньше четырех символов или не содержит '@'";
    exit;
}

// Проверка длины пароля
if (strlen($password) < 4) {
    echo "Ошибка, пароль не может быть меньше четырех символов";
    exit;
}

// Хеширование пароля
$password = password_hash($password, PASSWORD_DEFAULT);

// Подключение к базе данных
require "db.php";

$sql = 'INSERT INTO users(login, username, email, password) VALUES(?, ?, ?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$login, $username, $email, $password]);

header('Location: /user.php');


            
            
    

