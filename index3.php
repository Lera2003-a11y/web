<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="widthadevice-width, initial-scale=1.0">
  <title>Форма авторизации</title>
  <link rel="stylesheet" href="\css\main2.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="wrapper">
   <form method="post" action="/php/lib/autoris.php">
    <h1>Авторизация</h1>
    <div class="input-box">
        <input type="text" placeholder="Логин" required> 
        <i class='bx bx-user'></i>
    </div>

    <div class="input-box">
        <input type="password" placeholder="Пароль" required> 
        <i class='bx bx-lock-alt'></i>
    </div>

    <button type="submit" class="btn">Войти</button>
    <div class="register-link">
        <p>Нет аккаунта? Зарегистрируйтесь <a href="/php/reg.php">Регистрация</a></p>
    </div>
   </form>
</div>
<div class="back-button-container">
    <button class="back-button" onclick="window.history.back();">Вернуться назад</button>
</div>
</body>
</html>