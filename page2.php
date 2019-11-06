<?php
  $words = $_POST['words'];
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
				</section>
			</div>	
		<h3> Введите название марки: </h3> 
           <form name="search"  method="POST">
                  <input type="text" required name="words">
                  <button type="submit" name="bsearch" value="Поиск"></button>
           </form>


  <?php 
		  if (isset($_POST['bsearch'])){ //работаем с кнопкой "Поиск"
			  $dt_avto = mysqli_query($mysqli, "SELECT * FROM `tb_kompany` WHERE tb_kompany.namekomp='$words'");  //Из бд работаем с указанной таблицей и получаем все найденные слова
			  $num_rows = mysqli_num_rows($dt_avto); //проверка на корректный ввод(найдены ли значения)
			  if ($num_rows!==0){
				  while ($tb_kompany = mysqli_fetch_array($dt_avto)) { // получаем данные из данной таблицы 
						   $id = $tb_kompany['id']; //связываем с ад 
						   echo " <p> Название марки: {$tb_kompany['namekomp']} </p>";  // выводим название из бд
						   $query = mysqli_query($mysqli, "SELECT * FROM `tb_avtom` WHERE tb_avtom.id_kompany='$id'");; //запрос в след таблицу и получения ад
							while ($tb_avtom = mysqli_fetch_array($query)) { //получаем данные из данной таблицы
								echo "
									   <p> Название машины: {$tb_avtom['nameavto']}</p>
									   <p> Технические характеристики: {$tb_avtom['texopic']}</p>
									   <p> Год: {$tb_avtom['year']}</p>
									 <img src='{$tb_avtom['foto']}'width='30%'>	"; //выводим все данные из бд
							}
							echo "</table></div><br>";
				  }
			 }
			else {echo  '<br> Ничего не найдено';}			  
		 }
		   ?>
</body>
</html>