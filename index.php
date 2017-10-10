<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="yandex-verification" content="e790e22ef8fcbc51" />
<title>Smac.ru.com-Грузоперевозки</title> 
</head> 
<style type="text/css">
	* {
	margin: 0;
	padding: 0;
	outline: none;
}
html {height: 100%}
body {
   width: 100%;
   height: 100%;
   background-color:  white;
   color: #f6fafa;
   font-family: "Segoe UI", Arial, sans-serif;
   font-size: 1em;
   line-height: 135%;
   float: left;
}


/* стили для шаапки */
header {
width: 98%;
height: 20px;
float: left;
padding: 1%;
background-color: black;
}
.logo {
	float: center;
}
header #regAuth {
     
	width: 20%;
	float: right;
	text-align: left;
	font-size: 1.0em;
}
header #regAuth a{
color:white;
text-decoration: none;
}
/* стили для меню*/

.menu ul ul {
	display: none;
	position: absolute;
	
}
.menu ul li{
	display: inline-block;
}
.menu ul {
	position: relative;
	margin: 0;
	padding: 0;
}
.menu li:hover ul{
	display: block;
}
.menu li:hover li{
	display: block;
}
.menu ul li{
padding: 20px;
margin-right:50px;
}
.menu ul ul a{
text-decoration: none;
color: black;
}
.menu ul a{
	text-decoration: none;
	color: black;
}
.menu ul li{
margin-right:30px;
}
#poisk {
	background-image: url(http://www.smac.ru.com/gruz.jpg);
		background-repeat: no-repeat;
		width:700px; 
		height:800px;
		text-align: center;
		 margin: auto auto;
}
.submit {
width: 170px;
height: 30px;
 background: #4D778B;
 color:white;
}
.buttom {
width: 170px;
height: 30px;
 background: #4D778B;
 color:white;
}
.nad {
	float: right;
	font-weight: 60px;
	width: 80%;
    font-size: 40px;
}

 h4{
	color:  #4D778B;
	 margin-top: 8px;
	
	line-height: 0.9em;
}
.ok1 {
	width: 40px;
}
.ok2 {
	width: 40px;
}
.ok3 {
	width: 40px;
}
.ok4 {
	width: 40px;
}
.n {
width: 170px;
}
</style>
<body> 
<header> 
<div id="regAuth"> 
<a href="regs.php"> Регистрация</a>|<a href="auth.php">Авторизация</a> 
</div> 
</header> 
<div class="nad"><h4>Российская Информационная Система Малотоннажных и Среднетоннажных Грузоперевозок<h4></div>
<div class="logo"> 
<img src="https://smac.ru.com/logo.png"  with="80" height="100" 
 alt="logo" title=”logo” id="logot">
</div>
<nav class="menu">
	<ul>
	<li><a href="index.php">Главная</a></li>
<li><a href="trans.php">Транспорт</a></li>
 <li><a href="addtrans.php">Добавить транспорт+</a></li> 
<li>  <a href="gruzy.php">Груз</a></li>
 <li> <a href="addgruzy.php">Добавить груз+</a></li> 
<li>   <a href="rash.php">Расчёт расстояния</a></li>
 <li>  <a href="kub.php">Личный кабинет</a></li>
 <li><a href="/">Еще</a>
<ul>
<li> <a href="wapr.php">Часто задаваемые вопросы(FAQ)</a></li>
<li><a href="aboutsis.php">О системе</a></li>
<li><a href="rek.php">Реклама на сайте</a></li> 
<li><a href="kon.php">Контактная информация</a></li>
<li><a href="users.php">Участники</a></li>
<li><a href="mobil.php">Мобильная версия</a></li>	
</ul>
 </li>
	</ul>
</nav>
<div id="poisk"><h3> Найти груз или транспорт </h3>
<br>
<form name="search" method="GET" action="search.php">
<input type="search" class="n" name="gorot" placeholder="Откуда"> <br>
<input type="search" class="n" name="gornaz" placeholder="Куда"><br>
<input type="search" class="n" name="dateotgruz" placeholder="Дата:день.месяц.год"> <br>  
Вес т от: <input type="search" name="ves" placeholder="От" class="ok1">
 <input type="search" name="ves" placeholder="До" class="ok3"> <br>
Объем, м3 от: <input type="search" name="obkuz" placeholder="От" class="ok2"> 
 <input type="search" name="obkuz1" placeholder="До" class="ok4"> <br>
<button type="submit" class="submit">Найти груз</button> <br>
</form>
<br>
<form name="search" method="GET" action="searchtransport.php">
<input type="search" class="n" name="strot" placeholder="Откуда"> <br>
<input type="search" class="n" name="strnaz" placeholder="Куда"><br>
<input type="search" class="n" name="datezag" placeholder="Дата:день.месяц.год"> <br>  
Тип загрузки: <input type="search" name="typezag" placeholder="Тип загрузки"> <br>
Объем кузова м3 от: <input type="search" name="obkuz" placeholder="От" class="ok2"> 
 <input type="search" name="obkuz1" placeholder="До" class="ok4"> <br>
<button type="buttom" class="buttom">Найти транспорт</button>
</form>
</div>

</body> 
</html>