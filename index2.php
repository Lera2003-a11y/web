<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="widthadevice-width, initial-scale=1.0">
  <title>Главная страница</title>
  <link rel="stylesheet" href="\css\main.css">
</head>
<body>
    <div class="wrapper">
 <header class="cotainer"> 
    <nav>
        <ul>
            <li><a href="index4.php">Вакансии</a></li>
            <li><a href="index.php">Главная</a></li>
            <li class="btn"><a href="index3.php">Войти в личный кабинет</a></li>
        </ul>
    </nav>
 </header>
    
 <div class="hero--about container">
    <div class="info">
        <h1>Острогожский районный потребительский кооператив</h1>
        <p>Острогожский районный потребительский кооператив был основан в 1923 году в ответ на потребности местных жителей в доступных товарах и услугах. С момента своего создания кооператив прошел через множество этапов развития, адаптируясь к меняющимся условиям рынка и потребительским запросам. Важное значение кооператива заключается в его социально-экономической роли в регионе, обеспечении рабочими местами и предоставлении необходимых товаров и услуг. Целевой аудиторией РАЙПТК являются местные бизнесы, нуждающиеся в поставках продуктов и товаров. </p>
   <button class="btn" onclick="location.href='/php/reg.php'">Зарегистрироваться</button>
    </div>
    <div class="container work">
        <h2>Почему нам следует доверять?</h2>
        <div class="blocks">
            <div class="block">
                <h3>29 лет на рынке</h3>
                <p>Острогожский РАЙПТК работает с клиентами по Воронежской области уже более двадцати лет и является надежным, стабильным предприятием на рынке труда. Благодаря своему многолетнему опыту мы способны помочь решить любые вопросы.</p>
            </div>

            <div class="block">
                <h3>С нами работают более 100 магазинов</h3>
                <p>Более ста магазинов, расположенных по всей Воронежской области, получают поставки продукции различного назначения от Острогожского районного потребительского кооператива.</p>
            </div>

            <div class="block">
                <h3>Предприятие имеет 42 дополнительных вида деятельности</h3>
                <p>Помимо розничной торговли незамороженными продуктами, включая напитки и табачные изделия, в неспециализированных магазинах (47.11.2), Острогожский РАЙПТК может предложить клиенту сотрудничество с поставщиками других товаров, таких как одежда, обувь, хозяйственная продукция и многое другое.</p>
            </div>

        </div>
    </div>
    <div class="container hero-contacts">
        <h1>Наше местоположение</h1>
        <div class="map">
        <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/10679/ostrogozhsk/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Острогожск</a><a href="https://yandex.ru/maps/10679/ostrogozhsk/house/ulitsa_karla_marksa_2/Z0AYdg9kS0IOQFtqfXR0eHRkbA==/?ll=39.084278%2C50.859878&source=exp-counterparty_entity&utm_medium=mapframe&utm_source=maps&z=16" style="color:#eee;font-size:12px;position:absolute;top:14px;">Улица Карла Маркса, 2 — Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/?ll=39.084278%2C50.859878&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgoxNjg5NjU2MzI3EnDQoNC-0YHRgdC40Y8sINCS0L7RgNC-0L3QtdC20YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsINCe0YHRgtGA0L7Qs9C-0LbRgdC6LCDRg9C70LjRhtCwINCa0LDRgNC70LAg0JzQsNGA0LrRgdCwLCAyIgoNTVYcQhWDcEtC&source=exp-counterparty_entity&z=16" width="800" height="600" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
    </div>
</div>

<div class="container-ots">
    <h1>Отзывы</h1>
    <div class="reviews-container">
        <div class="reviews-list" id="reviewList">
            <!-- Отзывы будут отображаться здесь -->
        </div>
        <div class="review-form">
            <h2>Оставить отзыв</h2>
            <form id="feedbackForm">
                <input type="text" id="name" placeholder="Ваше имя" required>
                <textarea id="review" placeholder="Ваш отзыв" required></textarea>
                <button type="submit" id="submitReview">Отправить отзыв</button>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const reviewList = document.getElementById('reviewList');
    const nameInput = document.getElementById('name');
    const reviewInput = document.getElementById('review');
    const submitButton = document.getElementById('submitReview');
    const feedbackForm = document.getElementById('feedbackForm');

    // Функция для отображения отзывов
    function displayReviews() {
        reviewList.innerHTML = '';
        const reviews = JSON.parse(localStorage.getItem('reviews')) || [];
        reviews.forEach(review => {
            const reviewDiv = document.createElement('div');
            reviewDiv.classList.add('review');
            reviewDiv.innerHTML = `<strong>${review.name}</strong><p>${review.text}</p>`;
            reviewList.appendChild(reviewDiv);
        });
    }

    // Обработчик события для кнопки отправки
    feedbackForm.addEventListener('submit', (event) => {
        event.preventDefault(); // Предотвращаем перезагрузку страницы
        const name = nameInput.value;
        const text = reviewInput.value;

        if (name && text) {
            const reviews = JSON.parse(localStorage.getItem('reviews')) || [];
            reviews.push({ name, text });
            localStorage.setItem('reviews', JSON.stringify(reviews));
            nameInput.value = '';
            reviewInput.value = '';
            displayReviews();
        }
    });

    // Отображение отзывов при загрузке страницы
    displayReviews();
});
</script>

 </div>
 <div class="contact-info">
    <p>Телефон: +7 (123) 456-78-90</p>
    <p>Email: info@example.com</p>
 </div>

 <?php require_once "/locaserver/openserver/domains/test1/blocks/foother.php"; ?>

</body>
</html>