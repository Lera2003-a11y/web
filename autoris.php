<?php
$login= trim(filter_var($_POST{'login'}, FILTER_SANITIZE_SPECIAL_CHARS));
$password= trim(filter_var($_POST{'password'}, FILTER_SANITIZE_SPECIAL_CHARS));

if(strlen($login) < 4) {
    echo "Ошибка, логин не может быть меньше четырех символов";
    exit;
    }

    if(strlen($password) < 4) {
        echo "Ошибка, пароль не может быть меньше четырех символов";
        exit;
        }

        //DB
        require "db.php";

        //Auth users
        $sql = 'SELECT id FROM users WHERE login = ? AND password = ?';
        $query = $pdo->prepare($sql);
        $query->execute([$login, $password]);

        if($query->rowCount() == 0)
        echo "Такого пользователя нет";
    else {
        setcookie('login', $login, time() + 3600 * 24 * 30, "/");
        header('Location: /user.php');
    }
    