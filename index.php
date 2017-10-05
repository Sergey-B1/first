<?php
//Задание №1
$name = Сергей;
$age = 25;
echo "Меня зовут $name ";
echo "Мне $age лет";
/* С 1 по 11 класс я учился в трёх разных школах. с 1 по 8 год
в школе 40, 9 год в школе 76,
с 10 по 11 год в школе 32*/
$shcool40 = '7';
$shcool76 = '1';
$shcool32 = '2';
$summa = $shcool40+$shcool76+$shcool32;
echo " Я учился в 40 школе $school40 лет, в 76 школе $shcool76 год, в 32 школе $shcool32 года. Всё это заняло $summa долгих лет";
echo "<br/> <br/>";

// Задание №2
$name2 = "Сергей";
$age2 = "25";
echo "Меня зовут $name2 ";
echo "Мне $age2 лет";
echo "<br/> <br/>";

// Задание №3
define("g",9.81);
if (defined(g)); echo "Константа g существует ";
echo g;
echo "<br/>";
/* g на Земле равно 9,81, на луне 1,7. Где оно больше*/
define("g_luna",1.7);
if (g > g_luna)
{echo "g на земле больше чем на луне и равно ";
echo g;}
else {
  echo "g на луне больше чем на земле и равно ";
  echo g_luna;
};
echo "<br/> <br/>";

//Задание №4
$age4 = 4;
if (!is_numeric($age4)) echo "Неизвестный возраст";
elseif ($age4 <= 65 and $age4 >= 18)
{echo "Вам еще работать и работать";}
  elseif ($age4 > 65) {
  echo "Вам пора на пенсию";
  }
  else {
    echo "Вам ещё рано работать";
  };
  echo "<br/>";

/*Осуществляется примитивный прогноз погоды на основании изменения атмосферного
давления между текущим значением $p0 и значением 12 часов назад $p_12*/
$p0 = 760;  //сейчас
$p_12 = 763;  //12 часов назад
$dp = $p0 - $p_12;
if ($dp <= -5) echo "Возможен дождь";
  elseif ($dp >= 5) {
    echo "Ожидается солнечная погода";
  } else {
    echo "Существенных изменений не ожидается";
  }

echo "<br/> <br/>";
//Задание №5
$day = 5;
switch ($day) {
  case (1): echo "Это рабочий день";
  break;
  case (2): echo "Это рабочий день";
  break;
  case (3): echo "Это рабочий день";
  break;
  case (4): echo "Это рабочий день";
  break;
  case (5): echo "Это рабочий день";
  break;
  case (6): echo "Это выходной";
  break;
  case (7): echo "Это выходной";
  break;
  default: echo "Неизвестный день";
  break;
}
echo "<br/> <br/>";

//Задание №6
$bmw["model"]="X5";
$bmw["speed"]="120";
$bmw["doors"]="5";
$bmw["year"]="2015";

$toyota["model"]="Corola";
$toyota["speed"]="130";
$toyota["doors"]="7";
$toyota["year"]="2013";

$opel["model"]="Astra";
$opel["speed"]="140";
$opel["doors"]="8";
$opel["year"]="2007";

echo "bmw"; echo "&nbsp;&nbsp;&nbsp;";
echo $bmw["model"]; echo "&nbsp;&nbsp;&nbsp;";
echo $bmw["speed"]; echo "&nbsp;&nbsp;&nbsp;";
echo $bmw["doors"]; echo "&nbsp;&nbsp;&nbsp;";
echo $bmw["year"]; echo "<br/>";

echo "toyota"; echo "&nbsp;&nbsp;&nbsp;";
echo $toyota["model"]; echo "&nbsp;&nbsp;&nbsp;";
echo $toyota["speed"]; echo "&nbsp;&nbsp;&nbsp;";
echo $toyota["doors"]; echo "&nbsp;&nbsp;&nbsp;";
echo $toyota["year"]; echo "<br/>";

echo "opel"; echo "&nbsp;&nbsp;&nbsp;";
echo $opel["model"]; echo "&nbsp;&nbsp;&nbsp;";
echo $opel["speed"]; echo "&nbsp;&nbsp;&nbsp;";
echo $opel["doors"]; echo "&nbsp;&nbsp;&nbsp;";
echo $opel["year"]; echo "<br/>";


?>
