<?php
$link = new mysqli('localhost','root','root','project');
$result_count_removed_no = $link->query("SELECT * FROM `animals` WHERE `removed` ='Нет'");//запрос на колличество животных в приюте.
$result_count_removed_yes = $link->query("SELECT * FROM `animals` WHERE `removed` ='Да'");//запрос на колличество которых забрали.
$count_no = (mysqli_num_rows($result_count_removed_no));
$count_yes = (mysqli_num_rows($result_count_removed_yes));
$result = $link->query("SELECT * FROM `news` ORDER BY `id` ASC LIMIT 3");//запрос на 3 последние новости.
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
              <div class="nav-image"><a href="/dist/"><img src="images/logo.svg" alt="Логотип Приют НН"/></a></div>
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
      <!--top-slider-->
      <section class="top-slider">
        <div class="slider-inner js-topslider">
          <div class="slider-item">
            <div class="slider-img-2">
              <div class="slider-content container">
                <div class="slider-title">Наши сердца</div>
                <div class="slider-text">в ваших руках</div>
                <div class="btn slider-btn">Подробнее</div>
              </div>
            </div>
          </div>
          <div class="slider-item">
            <div class="slider-img-1">
              <div class="slider-content container">
                <div class="slider-title">Забери своего</div>
                <div class="slider-text">нового друга</div>
                <div class="btn slider-btn">Подробнее</div>
              </div>
            </div>
          </div>
          <div class="slider-item">
            <div class="slider-img-3">
              <div class="slider-content container">
                <div class="slider-title">Будь в ответе</div>
                <div class="slider-text">за тех, кого приручил</div>
                <div class="btn slider-btn">Подробнее</div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--end top-slider-->
      <!--stats-block-->
      <section class="stat-block">
        <div class="container">
          <h2 class="block-head">Статистика:</h2>
          <div class="stat-block-style">
            <p class="stat-block-text user-select-none">Как уличное животное обретает дом? Редко, когда человек, встретивший бездомыша, за несколько минут решается взять его к себе. Чаще всего за этим стоят десятки людей. А само животное проходит большой путь — километры дороги и несколько лет жизни в приютах в ожидании хозяина.</p>
            <div class="stat-block-style">
              <div class="stat-block-info">
                <div class="stat-block-img"><img src="images/icon/stat-paw-icon.svg" alt="Лапка"/></div>
                <div class="stat-block-items"><span class="stat-block-info-span"><?php echo $count_no;?></span>
                  <p class="stat-block-info-p">Сейчас в приюте</p>
                </div>
              </div>
              <div class="stat-block-info">
                <div class="stat-block-img"><img src="images/icon/stat-home-icon.svg" alt="Домик"/></div>
                <div class="stat-block-items"><span class="stat-block-info-span"><?php echo $count_yes; ?></span>
                  <p class="stat-block-info-p">Нашли свой дом</p>
                </div>
              </div>
            </div>
            <p class="stat-block-text user-select-none">При появлении в доме собаки или кошки ваш образ жизни кардинально изменится! Вы будете подстраиваться под ритм вашего питомца, отказываться от выходных и позднего подъема. Животные - источник тепла и ласки, а так же огромного количества положительных эмоций!</p>
          </div>
        </div>
      </section>
      <!--end stats-->
      <!--about-us-->
      <section class="index-about-us">
        <div class="container">
          <div class="row">
            <div class="index-about-us-title-text col-5">
              <h3 class="index-about-us-title">О приюте:</h3>
              <p class="index-about-us-text">Приют Нижнего Новгорода - это организация, чья деятельность направлена на помощь животным Нижнего Новгорода в целом и бездомным животным в частности.</p>
            </div>
          </div>
        </div>
      </section>
      <!--end about-us-->
      <!--slide sponsors-->
      <section class="bot-slider">
        <h2 class="block-head">Спонсоры:</h2>
        <div class="bot-slider-bg">
          <div class="slider-inner multiple-items container">
            <div class="slider-item slider-item-style">
              <div class="slider-img-botom"><img src="images/sponsors/sponsor_6.png" alt=""/></div>
            </div>
            <div class="slider-item slider-item-style">
              <div class="slider-img-botom"><img src="images/sponsors/sponsor_3.png" alt=""/></div>
            </div>
            <div class="slider-item slider-item-style">
              <div class="slider-img-botom"><img src="images/sponsors/sponsor_4.png" alt=""/></div>
            </div>
            <div class="slider-item slider-item-style">
              <div class="slider-img-botom"><img src="images/sponsors/sponsor_5.png" alt=""/></div>
            </div>
            <div class="slider-item slider-item-style">
              <div class="slider-img-botom"><img src="images/sponsors/sponsor_1.png" alt=""/></div>
            </div>
            <div class="slider-item slider-item-style">
              <div class="slider-img-botom"><img src="images/sponsors/sponsor_7.png" alt=""/></div>
            </div>
            <div class="slider-item slider-item-style">
              <div class="slider-img-botom"><img src="images/sponsors/sponsor_8.png" alt=""/></div>
            </div>
            <div class="slider-item slider-item-style">
              <div class="slider-img-botom"><img src="images/sponsors/sponsor_9.png" alt=""/></div>
            </div>
            <div class="slider-item slider-item-style">
              <div class="slider-img-botom"><img src="images/sponsors/sponsor_11.png" alt=""/></div>
            </div>
            <div class="slider-item slider-item-style">
              <div class="slider-img-botom"><img src="images/sponsors/sponsor_2.png" alt=""/></div>
            </div>
            <div class="slider-item slider-item-style">
              <div class="slider-img-botom"><img src="images/sponsors/sponsor_14.png" alt=""/></div>
            </div>
            <div class="slider-item slider-item-style">
              <div class="slider-img-botom"><img src="images/sponsors/sponsor_15.png" alt=""/></div>
            </div>
          </div>
        </div>
      </section>
      <!--end slide sponsros-->
      <!--information-->
      <section class="news">
        <div class="container">
          <h2 class="block-head">Информация:</h2>
          <div class="news-content-row">
              <?php if (mysqli_num_rows($result) > 0) {
                  $applic = mysqli_fetch_array($result);
                  do {
                      $a = "-";
                      $b = "/";
                      $r = [];
                      $r = explode($a, $applic['data']);
                      $r = array_reverse($r);
                          echo "<div class=\"col news-content-col m-0\">
                                  <p class=\"news-content-date\">"; echo implode($b, $r); echo "</p>
                                  <p class=\"news-content-title\">"; echo $applic['header']; echo "</p>
                                  <p class=\"news-content-content\">"; echo mb_strimwidth($applic['text'] , 0,200, "..."); echo "</p>
                                </div>";
                      }
                          while ($applic = mysqli_fetch_array($result));
                  }
              ?>
          </div>
        </div>
      </section>
      <!--end information-->
      <!--feedback-->
      <section class="feedback">
        <div class="container">
          <h2 class="feedback-name">Обратная связь:</h2>
          <div class="feedback-form">
            <form method="POST" action="massage.php">
                <div class="row feedback-row">
                  <div class="col-3 feedback-col">
                    <p class="form-title">Ваше ФИО:</p>
                    <input class="form-input" type="text" placeholder=" Готлиб Артем Артемович" name="fio"/>
                  </div>
                  <div class="col-6 feedback-col">
                    <p class="form-title">Сообщение:</p>
                    <textarea class="form-input" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                  </div>
                  <div class="col-3 feedback-col">
                    <p class="form-title">Телефон:</p>
                    <input class="form-input" type="text" placeholder=" +7 800 555 35 35" name="number"/>
                  </div>
                </div>
                <div class="row feedback-row btn-feedback">
                  <button class="button-feedback-submit" type="submit">Отправить</button>
                </div>
            </form>
          </div>
        </div>
      </section>
      <!--end feedback-->
      <!--map-->
      <section class="map">
        <h2 class="block-head">Мы на карте:</h2>
        <div class="global-map">
          <script type="text/javascript" charset="utf-8" async="async" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ae631862a9969335335d22a1c99614cf71bcbe842d02962601aedee76925473dc&amp;amp;width=100%25&amp;amp;height=525&amp;amp;lang=ru_RU&amp;amp;scroll=folse"></script>
        </div>
      </section>
      <!--end map-->
      <!--footer-->
      <footer class="main-footer">
        <div class="container">
          <div class="navbar-collapse nav main-nav-style main-footer-style">
            <section class="footer-item">
              <ul class="nav navbar-nav main-navbar-style">
                <li class="nav-item footer-nav-item-style"><a class="nav-link footer-nav-link p-0" href="catalog.php">Найти друга</a></li>
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
              </div><a href="/dist/"><img src="images/logo.svg" alt="Логотип Приют НН"/></a>
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
