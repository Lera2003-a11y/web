<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="widthadevice-width, initial-scale=1.0">
  <title>Регистрация</title>
  <link rel="stylesheet" href="\css\main.css">
</head>
<body>
    <div class="wrapper">
 <header class="cotainer"> 
    <nav>
        <ul>
            <li><a href="index4.php">Вакансии</a></li>
            <li><a href="index2.php">О нас</a></li>
            <li class="btn"><a href="index3.php">Войти в личный кабинет</a></li>
        </ul>
    </nav>
 </header>
 <div class="contact-info">
    <p>Телефон: +7 (123) 456-78-90</p>
    <p>Email: info@example.com</p>
</div>
<div class="feedback">
<div class="container">
            <h2>Кабинет пользователя</h2>
            <p>Здравствуйте: <b></b><?= $_COOKIE['login'] ?></b>,</p>
    </div>
</div>
    <?php require_once "/locaserver/openserver/domains/test1/blocks/foother.php"; ?>
</body>
</html>