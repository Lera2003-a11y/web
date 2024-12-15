<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="widthadevice-width, initial-scale=1.0">
  <title>Вакансии</title>
  <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <div class="wrapper">
 <header class="cotainer"> 
    <nav>
        <ul>
            <li><a href="index7.php">Главная</a></li>
            <li><a href="index6.php">О нас</a></li>
            <li class="btn"><a href="#">Мой кабинет</a></li>
        </ul>
    </nav>
 </header>

 <div class="container work">
    <h2>Вакансии для пользователя</h2>
    <div class="blocks">
        <div class="block">
            <h3>Работник отдела кадров</h3>
        <p>Требования:</p>
        <p>Высшее образование в области управления персоналом, менеджмента или смежной сфере</p>
        <p>Опыт работы в сфере управления персоналом не менее 3 лет</p>
        <p>Навыки подбора, оценки и развития персонала</p>
        <p>Опыт ведения кадрового документооборота</p>
        <p>Заработная плата: от 40 000 руб</p>
        <button id="applyButton">Откликнуться на вакансию</button>
        </div>

        <div class="block">
            <h3>Менеджер по продажам</h3>
            <p>Требования:</p>
            <p>Опыт работы в продажах не менее 2 лет</p>
            <p>Коммуникабельность и умение работать в команде</p>
            <p>Знание основ маркетинга</p>
            <p>Заработная плата: от 50 000 руб</p>
            <button id="applyButton">Откликнуться на вакансию</button>
        </div>

        <div class="block">
            <h3>Программист</h3>
            <p>Требования:</p>
            <p>Высшее образование в информационной сфере</p>
            <p>Коммуникабельность и умение работать в команде</p>
            <p>Опыт работы не менее 2 лет</p>
            <p>Заработная плата: от 50 000 руб</p>
            <button id="applyButton">Откликнуться на вакансию</button>
        </div>

    </div>
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Форма отклика</h2>
            <form id="resumeForm">
                <label for="name">Имя:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="resume">Резюме:</label>
                <input type="file" id="resume" name="resume" required>
                <button type="submit">Отправить</button>
            </form>
        </div>
    </div>
    
</div>
    <div class="contact-info">
        <p>Телефон: +7 (123) 456-78-90</p>
        <p>Email: info@example.com</p>
    </div>
    <footer>
        <hr>
        <p>© 2024 Острогожский Районный Потребительский Кооператив. Все права защищены.</p>
    </footer>
    <script>
     var modal = document.getElementById("modal");
var btn = document.getElementById("applyButton");
var span = document.getElementsByClassName("close")[0];


// Открываем модальное окно при нажатии на кнопку
btn.onclick = function() {
    modal.style.display = "block";
}



// Закрываем модальное окно при нажатии на "x"
span.onclick = function() {
    modal.style.display = "none";
}

// Закрываем модальное окно при клике вне его
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
    </script>
</body>
</html>