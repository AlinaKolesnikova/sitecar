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
				</section>
			</div>	
		<h3>Добавить компанию и марку машины <!--работаем с 1 формой  -->
		            <p>Добавить компанию:</p> </h3>
		                <form method="POST" action="new 1.php">  <br> <!--переход на новую пустую стр,где хранится информация о занесении данных -->
                  <input type="text" name="namekomp"  required placeholder="Название компании"><br><br>
                  <input type="text" name="country" required placeholder="Страна"><br><br>
                  <input type="submit"  value="Добавить">
				        </form>
		      <h3> <p>Добавить марку машины:</p> </h3>
			  <?php //работаем с 2 формой ввода
			  $tb_kompany = get_dt_avto($mysqli); ?>
		                <form method="GET" action="new 1.php"> 
                          Выберите компанию:<br>
                          <div> <br> <select  name="id_kompany"   > 
				   						
			<?php foreach ($tb_kompany as $avtoru):?> <!--получаем id из 1 таблицы и связываем со 2  -->
			<a> <option value="<?=$avtoru['id']?>"><?=$avtoru['namekomp']?></a></option>
            <?php endforeach; ?> 
								     </select></div> </br>
                <br>
                  <input type="text" name="nameavto" required placeholder="Название марки"><br>
				<br>
                  <input type="text" name="texopic" required placeholder="Технические характеристики"><br>
                <br>
                  <input type="number"  name="year" min="1800" max="2020" required placeholder="Год"><br>
                <br>
                  <input type="url" name="foto" required placeholder="URL-адрес"><br>
                <br>
                  <input  type="submit"  value="Добавить"><br>
			              </form> <!--вводим данные во 2 форму  -->
<br>
<br>
<div id="footer">
                     &copy; <strong>Институт Энергетики и автоматизированных систем,кафедра бизнес-информатики и информационных технологий, Апоб-16, Землянская Юлия .<strong>
                </div>
</body>
</html>