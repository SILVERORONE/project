<?php
$link = new mysqli('localhost','root','root','project');
$id = $_GET['id'];
$animal_card = $link->query("SELECT * FROM `animals` WHERE `id` = $id");


    $card = mysqli_fetch_array($animal_card);


?>


<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Карточка животного</title>
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
              <div class="nav-image"><a href="/dist/""><img src="images/logo.svg" alt="Логотип Приют НН"/></a></div>
              <ul class="nav navbar-nav main-navbar-style">
                <li class="nav-item"><a class="nav-link nav-link-style p-0" href="catalog.php">Найти друга</a></li>
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
      <!--animal-card-->
      <section class="bread-crumb">
        <div class="container">
          <p class="bread-crumb-style">Главная \ Найти друга \ Озик</p>
        </div>
      </section>
      <section class="animal-card">
        <div class="container">
          <div class="animal-card-block"><img class="animal-card-images" src="<?php echo $card['img']?>" alt="Первое фото"/>
            <div class="animal-story-style">
              <p class="animal-story-head"><?php echo $card['name']?></p>
              <p class="animal-story-text m-0"> <?php echo mb_strimwidth($card['store'] , 0,350, "..."); ?></p>
            </div>
          </div>
          <p class="animal-stat-head">Параметры животного:</p>
          <div class="row">
            <div class="animal-stat col">
              <div class="animal-param-block">
                <p class="animal-param">Возраст:</p>
                <div class="row">
                  <div class="col">
                    <p class="animal-param-text"><?php echo $card['age'] . "  Года"?></p>
                  </div>
                  <div class="animal-param-img col"><img src="images/icon/calendar-icon.svg" alt="Иконка календаря"/></div>
                </div>
              </div>
              <div class="animal-param-block">
                <p class="animal-param">Пол:</p>
                <div class="row">
                  <div class="col">
                    <p class="animal-param-text"><?php echo $card['gender']?></p>
                  </div>
                  <div class="animal-param-img col">   <img src="images/icon/gender-icon.svg" alt="Иконка пола"/></div>
                </div>
              </div>
              <div class="animal-param-block">
                <p class="animal-param">Окрас:</p>
                <div class="row">
                  <div class="col">
                    <p class="animal-param-text"><?php echo $card['Color']?></p>
                  </div>
                  <div class="animal-param-img col"><img src="images/icon/palette-icon.svg" alt="Иконка палитры"/></div>
                </div>
              </div>
              <div class="animal-param-block">
                <p class="animal-param">Порода:</p>
                <div class="row">
                  <div class="col">
                    <p class="animal-param-text"><?php echo $card['breed']?></p>
                  </div>
                  <div class="animal-param-img col"><img src="images/icon/book.svg" alt="Иконка книги"/></div>
                </div>
              </div>
            </div>
            <div class="animal-stat col">
              <div class="animal-param-block">
                <p class="animal-param">Шерсть:</p>
                <div class="row">
                  <div class="col">
                    <p class="animal-param-text"><?php echo $card['wool']?></p>
                  </div>
                  <div class="animal-param-img col"><img src="images/icon/scissors.svg" alt="Иконка календаря"/></div>
                </div>
              </div>
              <div class="animal-param-block">
                <p class="animal-param">Приучен к лотку:</p>
                <div class="row">
                  <div class="col">
                    <p class="animal-param-text"><?php echo $card['toilet']?></p>
                  </div>
                  <div class="animal-param-img col"><img src="images/icon/toilet.svg" alt="Иконка пола"/></div>
                </div>
              </div>
              <div class="animal-param-block">
                <p class="animal-param">Характер:</p>
                <div class="row">
                  <div class="col">
                    <p class="animal-param-text"><?php echo $card['temper']?></p>
                  </div>
                  <div class="animal-param-img col"><img src="images/icon/tennis-ball.svg" alt="Иконка палитры"/></div>
                </div>
              </div>
              <div class="animal-param-block">
                <p class="animal-param">Социализация:</p>
                <div class="row">
                  <div class="col">
                    <p class="animal-param-text"><?php echo $card['social']?></p>
                  </div>
                  <div class="animal-param-img col"><img src="images/icon/social-icon.svg" alt="Иконка книги"/></div>
                </div>
              </div>
            </div>
            <div class="animal-stat col"><img class="animal-card-images" src="<?php echo $card['img2']?>" alt="Второе фото"/></div>
          </div>
          <div class="row">
            <div class="animal-stat col"><img class="animal-card-images" src="<?php echo $card['img3']?>" alt="Третье фото"/></div>
            <div class="animal-stat col">
              <div class="animal-param-block">
                <p class="animal-param">Необходимые прививки:</p>
                <div class="row">
                  <div class="col">
                    <p class="animal-param-text"><?php echo $card['vaccin']?></p>
                  </div>
                  <div class="animal-param-img col"><img src="images/icon/syringe.svg" alt="Иконка вакцины"/></div>
                </div>
              </div>
              <div class="animal-param-block">
                <p class="animal-param">Размер:</p>
                <div class="row">
                  <div class="col">
                    <p class="animal-param-text"><?php echo $card['size']?></p>
                  </div>
                  <div class="animal-param-img col">   <img src="images/icon/ruler.svg" alt="Иконка линейки"/></div>
                </div>
              </div>
                <?php
echo'
              <a class = "request-button" href="application.php?id=' . $card["id"] . '">Оставить заявку</a>
'?>



            </div>
            <div class="animal-stat col">
              <div class="animal-param-block">
                <p class="animal-param">Стерелизация:</p>
                <div class="row">
                  <div class="col">
                    <p class="animal-param-text"><?php echo $card['sterilization']?></p>
                  </div>
                  <div class="animal-param-img col"><img src="images/icon/denied-icon.svg" alt="Иконка запрета"/></div>
                </div>
              </div>
              <div class="animal-param-block">
                <p class="animal-param">Документация:</p>
                <div class="row">
                  <div class="col">
                    <p class="animal-param-text"><?php echo $card['document']?></p>
                  </div>
                  <div class="animal-param-img col"><img src="images/icon/documents-icon.svg" alt="Иконка пола"/></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--end animal-card-->
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
              </div><a href="/dist/""><img src="images/logo.svg" alt="Логотип Приют НН"/></a>
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
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
  </body>
</html>
