
<?php
//Главная страница---------------------------------------------------------------------
$link = new mysqli('localhost','root','root','project');
$result = $link->query("SELECT * FROM `news` ORDER BY `id` ASC LIMIT 3");//запрос на 3 последние новости.
$result_count_removed_no = $link->query("SELECT * FROM `animals` WHERE `removed` ='Нет'");//запрос на колличество животных в приюте.
$result_count_removed_yes = $link->query("SELECT * FROM `animals` WHERE `removed` ='Да'");//запрос на колличество которых забрали.
$count_no = (mysqli_num_rows($result_count_removed_no));
$count_yes = (mysqli_num_rows($result_count_removed_yes));
if (mysqli_num_rows($result) > 0) {
  $applic = mysqli_fetch_array($result);
    do {
    $a = "-";
    $b = "/";
    $r = [];
    $r = explode($a , $applic['data']);
    $r = array_reverse($r);
    echo implode($b, $r);// Вывод даты.
    }
while ($applic = mysqli_fetch_array($result));
}
echo $count_no . "<br>";//колличество животных в приюте.
echo $count_yes . "<br>"; //колличество взятых животных.
//-------------------------------------------------------------------------------------------

// Страница каталог -------------------------------------------------------------------------
$result_all_animals = $link->query("SELECT * FROM `animals`"); //запрос на всех животных.
if (mysqli_num_rows($result_all_animals) > 0); {
  $card = mysqli_fetch_array($result_all_animals);
  do {
    echo $card['name'] . "<br>"; //вывод имени из бд.
    echo $card['gender'] . "<br>"; //вывод пола из бд.
    echo $card['age'] . "<br>"; //вывод возраста из бд.
  }
while ($card = mysqli_fetch_array($result_all_animals));
}
//---------------------------------------------------------------------------------------------
$rezu = "SELECT*FROM `animal`";
if (isset($_GET['cat']) and (isset($_GET['dog'])) ){
  $rezu .= "WHERE `vid` BETWEEN $cat AND $dog";
  if((isset($_GET['ukol']) and (isset($_GET['sterl'])))){
    $rezu .=" AND `ukol` = $ukol AND `sterl` = $sterl";

  }
  elseif(isset($_GET['ukol'])){
    $rezu .= " AND `ukol`=$ukol";
  }
  elseif(isset($_GET['sterl'])){
    $rezu .= " AND `sterl`=$sterl";
  }

}


elseif (isset($_GET['cat'])) {


  $rezu .= " WHERE `vid` = $cat";
  if((isset($_GET['ukol']) and (isset($_GET['sterl'])))){
    $rezu .=" AND `ukol` = $ukol AND `sterl` = $sterl";

  }
  elseif(isset($_GET['ukol'])){
    $rezu .= " AND `ukol`=$ukol";
  }
  elseif(isset($_GET['sterl'])){
    $rezu .= " AND `sterl`=$sterl";
  }

}

elseif (isset($_GET['dog'])) {

  $rezu .= " WHERE `vid` = $dog";
  if((isset($_GET['ukol']) and (isset($_GET['sterl'])))){
    $rezu .=" AND `ukol` = $ukol AND `sterl` = $sterl";

  }
  elseif(isset($_GET['ukol'])){
    $rezu .= " AND `ukol`=$ukol";
  }
  elseif(isset($_GET['sterl'])){
    $rezu .= " AND `sterl`=$sterl";
  }


}
elseif (isset($_GET['ukol']) and (isset($_GET['sterl'])))
{

  $rezu .= " WHERE `ukol` = $ukol AND `sterl` = $sterl ";
}
elseif (isset($_GET['sterl']))
{

  $rezu .= " WHERE `sterl` = $sterl";
}
elseif (isset($_GET['ukol']))
{

  $rezu .= " WHERE `ukol` = $ukol";
}

?>









 ?>












