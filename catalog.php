<?php
$sql = "SELECT * FROM `animals`";
$link = new mysqli('localhost','root','root','project');
$gender = $_GET['gender'];
$age = $_GET['age'];
$cat = $_GET['type_cat'];
$dog = $_GET['type_dog'];
$name = $_GET['name'];
if (isset($_GET['name'])){
    $sql .= " WHERE `name` = '$name'";
}
else {



if (isset($_GET['gender'])) {
    $sql .= " WHERE `gender` = '$gender'";
    if (isset($_GET['age'])) {

        if ($_GET['age'] != 0) {
            $sql .= " AND (`age` = $age)";

        }
    }

}
    elseif (isset($_GET['age'])) {
        $sql .= " WHERE `age` = '$age'";
        if ($_GET['age'] != 0) {
            $sql .= " AND (`age` = $age)";

        }
        else {
            $sql = "SELECT * FROM `animals`";
        }


    }





    elseif (isset($_GET['type_cat']) and (isset($_GET['type_dog']))) {
        $sql .= " WHERE (`type_animals` BETWEEN '$cat' AND '$dog')";
        if (isset($_GET['gender'])) {
            $sql .= " AND (`gender` = '$gender')";
        }
        if (isset($_GET['age'])) {
            if ($_GET['age'] != 0) {
                $sql .= " AND (`age` = $age)";
            }
        }
    } elseif (isset($_GET['type_cat'])) {
        $sql .= " WHERE `type_animals` = '$cat'";
        if (isset($_GET['gender'])) {
            $sql .= " AND (`gender` = '$gender')";
            if (isset($_GET['age'])) {
                $sql .= " AND (`age` = '$age')";
            }
        }
        if (isset($_GET['age'])) {
            if ($_GET['age'] != 0) {
                $sql .= " AND (`age` = $age)";
            }
        }
    } elseif (isset($_GET['type_dog'])) {
        $sql .= " WHERE `type_animals` = '$dog'";
        if (isset($_GET['gender'])) {
            $sql .= " AND (`gender` = '$gender')";
            if (isset($_GET['age'])) {
                $sql .= " AND (`age` = '$age')";
            }
        }
        if (isset($_GET['age'])) {
            if ($_GET['age'] != 0) {
                $sql .= " AND (`age` = $age)";
            }
        }
    }

}
$result_all_animals = $link->query($sql);
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
      <!--catalog-filter-->
      <section class="filter-catalog">
        <div class="container">
          <form action="catalog.php" method="get">
            <div class="row m-0 filter-up">
              <div class="filter-up-width">
                <div class="checkbox">
                  <input class="custom-checkbox" type="checkbox" id="inlineCheckbox1" name="type_dog" value="Собака"/>
                  <label for="inlineCheckbox1">Собака</label>
                  <input class="custom-checkbox" type="checkbox" id="inlineCheckbox2" name="type_cat" value="Кошка"/>
                  <label class="custom-checkbox-style" for="inlineCheckbox2">Кошка</label>
                </div>
                <div class="radio">
                  <input class="custom-radio" type="radio" id="inlineRadio1" name="gender" value="Мальчик"/>
                  <label for="inlineRadio1">Мужской</label>
                  <input class="custom-radio" type="radio" id="inlineRadio2" name="gender" value="Девочка"/>
                  <label for="inlineRadio2">Женский</label>
                </div>
              </div>
              <div class="filter-up-position">

                <select class="spisok-style" name="age">
                  <option value="0">Возраст</option>
                  <option value="1">До 1 года</option>
                  <option value="2">2 года</option>
                  <option value="3">3 года</option>
                  <option value="5">более 5 лет</option>
                </select>
                <button class="filter-up-btn" type="submit">Применить</button>
              </div>
            </div>
          </form>
          <form action="catalog.php" method="get">
            <div class="row filter-down">
              <div class="col">
                <input class="filter-down-serch" type="text" name="name" placeholder="Поиск по кличке"/>
                <button class="filter-down-serch-btn" type="submit"> </button>
              </div>
            </div>
          </form>
        </div>
      </section>
      <!--end catalog-filter-->
      <!--catalog-cards-->
      <section class="bread-crumb-catalog">
        <div class="container">
          <p class="bread-crumb-catalog-style">Главная \ Найти друга</p>
        </div>
      </section>
      <section class="catalog">
        <div class="container">
          <div class="row">
<?php
if (mysqli_num_rows($result_all_animals) > 0); {
    $card = mysqli_fetch_array($result_all_animals);
    do {

        echo '
            <div class="catalog-cards row">
              <div class="catalog-cards-img col-6 p-0"><img class="cards-img" src='.$card["img"].' alt=""/></div>
              <div class="catalog-cards-text col-6 p-0">
                <p class="catalog-card-text-title">'.$card["name"].'</p>
                <p class="catalog-card-text-info">Пол: <span>'.$card["gender"].'</span></p>
                <p class="catalog-card-text-info">Возраст: <span>'.$card["age"].'</span></p>
                <div class="btn-catalog-div"><a class="btn-catalog-style" href="card.php?id='.$card["id"].'">Подробнее</a></div>
              </div>
            </div>
';
                    }
    while ($card = mysqli_fetch_array($result_all_animals));
}
?>
          </div>
        </div>
      </section>
      <!--end catalog-cards-->
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
  </body>
</html>
