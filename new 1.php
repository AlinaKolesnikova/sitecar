<?php
    ini_set('display_errors','On');
    error_reporting(E_ALL | E_STRICT);
	require_once 'base.php';
    require_once 'include/operation.php';
 
?>



<!DOCTYPE>
<html>
<head>
	<link rel="icon" type="image/png" href="images/r0.jpg" />
	<link rel="stylesheet" href='2str.css' type="text/css"/>
	<meta name="description" content="Компании"/>
	<meta name="keywords" content="Марки" />
	<meta charset="utf-8">
	<title>Компании</title>	
<header>
</head>
<body>
	<div>
		<div class = "title"> <p class ="stil">Автомобильные компании</p></div>
			<div>
				<section>
					<div class="menu">
						<ul class="main-menu">		
						<li> <a href="home.php">Главная </a></li>
						<li> <a href="page1.php"> Добавление </a></li>
						<li> <a href="page2.php">Просмотр </a></li>
						</ul>
					</div>
<?php 
if (isset($_POST['namekomp']) && isset($_POST['country'])){

    // Переменные с формы
    $namekomp = $_POST['namekomp'];
    $country = $_POST['country'];
    $db_table = "tb_kompany"; // Имя Таблицы БД
    
    // Подключение к базе данных
    $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

    // Если есть ошибка соединения, выводим её и убиваем подключение
	if ($mysqli->connect_error) {
	    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
    
    $result = $mysqli->query("INSERT INTO ".$db_table." (namekomp, country) VALUES ('$namekomp','$country')");
	
    if ($result == true){
    	echo '<div style="text-align: center;"><font size="6" color="green" style="vertical-align: inherit;"> 
		Информация о компаниях занесена в базу данных! <font style="vertical-align: inherit;"> 
		</font></font></div><br>';
    }else{
    	echo '<div style="text-align: center;"><font size="6" color="red" style="vertical-align: inherit;"> 
		Информация не занесена в базу данных! <font style="vertical-align: inherit;"> </font></font></div><br>';
    }
}?>
<hr style='height: 4'>  
<?php
if (isset($_GET['id_kompany']) && isset($_GET['nameavto']) && isset($_GET['texopic'])&& isset($_GET['year'])&& isset($_GET['foto'])){

    // Переменные с формы
    $id_kompany = (INT)$_GET['id_kompany'];
    $nameavto = $_GET['nameavto'];
    $texopic = $_GET['texopic'];
	$year = $_GET['year'];
    $foto = $_GET['foto'];
    

    $db_table = "tb_avtom"; // Имя Таблицы БД
    
    // Подключение к базе данных
    $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

    // Если есть ошибка соединения, выводим её и убиваем подключение
	if ($mysqli->connect_error) {
	    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

    $result = $mysqli->query("INSERT INTO ".$db_table." (id_kompany,nameavto,texopic,year,foto) VALUES ('$id_kompany','$nameavto','$texopic','$year','$foto')");
    
    if ($result == true){
    	echo '<div style="text-align: center;"><font size="6" color="green" style="vertical-align: inherit;"> Информация o марках машины занесена в базу данных!<font style="vertical-align: inherit;"> </font></font></div><br>';
    }else{
    	echo '<div style="text-align: center;"><font size="6" color="red" style="vertical-align: inherit;"> Информация не занесена в базу данных! <font style="vertical-align: inherit;"> </font></font></div><br>';
    }
}?>
	<a href ="page1.php" class="knopka">Вернуться назад</a> 
	<style> 
	a.knopka {
  color: #fff; /* цвет текста */
  text-decoration: none; /* убирать подчёркивание у ссылок */
  user-select: none; /* убирать выделение текста */
  background: rgb(212,75,56); /* фон кнопки */
  padding: .7em 1.5em; /* отступ от текста */
  outline: none; /* убирать контур в Mozilla */
} 
a.knopka:hover { background: rgb(232,95,76); } /* при наведении курсора мышки */
a.knopka:active { background: rgb(152,15,0); } /* при нажатии */
	</style>

 </div>
</body>
</html>