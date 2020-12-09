<?php
$link = new mysqli('localhost','root','root','project');
$id = $_GET['id'];
$result_app = $link->query("SELECT * FROM `animals` WHERE `id` ='$id'");
$application = mysqli_fetch_array($result_app);

?>


<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Приют НН</title>
    <!--css-->
    <link rel="stylesheet" href="./css/styles.min.css"/>
    <!--ff-->
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
  </head>
  <body>
    <div class="wrapper">
      <!--header-->
      <header class="main-header">
        <nav class="navbar navbar-expand-sm main-navigation">
          <div class="container">
            <div class="navbar-collapse main-nav-style">
              <div class="nav-image"><a href="index.html"><img src="images/logo.svg" alt="Логотип Приют НН"/></a></div>
              <ul class="nav navbar-nav main-navbar-style">
                <li class="nav-item"><a class="nav-link nav-link-style p-0" href="catalog.html">Найти друга</a></li>
                <li class="nav-item"><a class="nav-link nav-link-style p-0" href="">Информация</a></li>
                <li class="nav-item"><a class="nav-link nav-link-style p-0" href="">О нас</a></li>
                <li class="nav-item"><a class="nav-link nav-link-style p-0" href="">Пожертвования</a></li>
              </ul>
              <div class="nav-phone"><img src="images/icon/phone.svg"/><a class="number-phone" href="tel:88005553535">8 800 555 35 35</a></div>
            </div>
          </div>
        </nav>
      </header>
      <!--end header-->
      <!--application-card-->
      <section class="bread-crumb">
        <div class="container">
          <p class="bread-crumb-style">Главная \ Найти друга \ Озик \ Оставить заявку</p>
        </div>
      </section>
      <section class="application">
        <div class="container">
          <h1 class="application-title">Оставить заявку:</h1>
          <div class="application-block">
            <p class="application-block-title">В скором времени с вами свяжутся</p>
            <form action="application_script.php" method="post">
              <div class="row m-0">
                <div class="col-4 application-block-form">
                  <p class="application-block-form-text">Ваше ФИО:</p>
                  <input class="application-form-input" type="text" name="fio" placeholder=" Готлиб Артем Артемович"/>
                  <p class="application-block-form-text">E-mail:</p>
                  <input class="application-form-input" type="email" name="mail" placeholder=" example@mail.ru"/>
                  <p class="application-block-form-text">Телефон:</p>
                  <input class="application-form-input" type="text" name="number" placeholder=" +7 800 555 35 35"/>
                    <input class="application-form-input d-none " type="text" name="id" value="<?php echo $application['id'] ?>" />
                </div>
                <div class="col application-block-card">
                  <div class="application-block-card-images"><img class="application-images" src="<?php echo $application['img']?>" alt=""/>
                    <div class="application-block-card-icon"><img class="application-icon" src="images/icon/paw-logo.svg" alt=""/></div>
                    <p class="application-block-card-name"><?php echo $application['name']?></p>
                  </div>
                </div>
              </div>
              <div class="row p-0 m-0 application-button">
                <button class="application-button-submit" type="submit">Отправить заявку</button>
              </div>
            </form>
          </div>
        </div>
      </section>
      <!--end application-card-->
      <!--footer-->
      <footer class="main-footer">
        <div class="container">
          <div class="navbar-collapse nav main-nav-style main-footer-style">
            <section class="footer-item">
              <ul class="nav navbar-nav main-navbar-style">
                <li class="nav-item footer-nav-item-style"><a class="nav-link footer-nav-link p-0" href="">Найти друга</a></li>
                <li class="nav-item footer-nav-item-style"><a class="nav-link footer-nav-link p-0" href="">Информация</a></li>
                <li class="nav-item footer-nav-item-style"><a class="nav-link footer-nav-link p-0" href="">О нас</a></li>
                <li class="nav-item footer-nav-item-style"><a class="nav-link footer-nav-link p-0" href="">Пожертвования</a></li>
              </ul>
            </section>
            <section class="footer-item">
              <div class="nav nav-footer-style">
                <div class="nav-image"><a href=""><img src="images/social/twitter.svg" alt="Наш twitter"/></a></div>
                <div class="nav-image"><a href=""><img src="images/social/odnoklassniki.svg" alt="Наш odnoklassniki"/></a></div>
                <div class="nav-image"><a href=""><img src="images/social/vk.svg" alt="Наш vk"/></a></div>
                <div class="nav-image"><a href=""><img src="images/social/instagram.svg" alt="Наш instagram"/></a></div>
                <div class="nav-image"><a href=""><img src="images/social/facebook.svg" alt="Наш facebook"/></a></div>
              </div><a href=""><img src="images/logo.svg" alt="Логотип Приют НН"/></a>
            </section>
            <section class="footer-item">
              <div class="our-contacts-footer"><img src="images/icon/phone.svg"/><a class="number-phone" href="tel:88005553535">8 800 555 35 35</a>
                <p>priutnn@mail.ru</p>
              </div>
              <div class="our-adress">
                <p class="m-0">Проспект Бусыгина, д. 16</p>
                <p class="m-0">Ул. Сергея Есенина, д. 38</p>
                <p class="m-0">Ул. Глеба Успенского, д. 1</p>
              </div>
            </section>
          </div>
        </div>
        <section class="footer-copyright">
          <div class="container">
            <p class="footer-copyright-text m-0">
              <nobr>© Приют НН Все права на любые материалы, защищены в соответствии с российским и международным законодательствами об авторском праве и смежных правах.</nobr>
            </p>
          </div>
        </section>
      </footer>
      <!--end footer-->
    </div>
  </body>
</html>
