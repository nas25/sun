<?
$db = mysql_connect("localhost","u0251747","_V9gGs6Q") or mysql_error(); 
mysql_select_db("u0251747_default", $db); 
mysql_set_charset(utf8); 
if(isset($_POST['strot']) and isset($_POST['regot']) and isset($_POST['strnaz']) and isset($_POST['gruzopod']) and isset($_POST['gruzopod1']) and ($_POST['obkuz']) and ($_POST['obkuz1']) and ($_POST['typekuz']) and ($_POST['typezag']) and ($_POST['datezag']) and ($_POST['datezag1']) and ($_POST['oplata']) and ($_POST['fio']) and ($_POST['tel']) and ($_POST['pochta'])and ($_POST['nazorg']))
{
$strot = strip_tags($_POST['strot']);
$regot = strip_tags($_POST['regot']);  
$strnaz = strip_tags($_POST['strnaz']); 
$gruzopod = strip_tags($_POST['gruzopod']); 
$gruzopod1 = strip_tags($_POST['gruzopod1']); 
$obkuz = strip_tags($_POST['obkuz']);
$obkuz1 = strip_tags($_POST['obkuz1']);
$typekuz = strip_tags($_POST['typekuz']);
$typezag = strip_tags($_POST['typezag']);
$datezag = strip_tags($_POST['datezag']);
$datezag1 = strip_tags($_POST['datezag1']);
$oplata = strip_tags($_POST['oplata']);
$fio = strip_tags($_POST['fio']);
$tel = strip_tags($_POST['tel']);
$pochta = strip_tags($_POST['pochta']);
$nazorg = strip_tags($_POST['nazorg']);
if(empty($strnaz) or empty($gruzopod) or empty($gruzopod1) or empty($obkuz) or empty($obkuz1) or empty($typekuz) or empty($typezag) or empty($datezag) or empty($datezag1) or empty($oplata) or empty($fio) or empty($tel) or empty($pochta) or empty($nazorg)) 
{ 
echo 'Вы пропустили важные поля'; 
} 
else{ 
$register = mysql_query("INSERT INTO transport(`strot`,`regot`,`strnaz`,`gruzopod`,`gruzopod1`,`obkuz`,`obkuz1`,`typekuz`,`typezag`,`datezag`,`datezag1`,`oplata`,`fio`,`tel`,`pochta`,`nazorg`) VALUES('$strot','$regot','$strnaz','$gruzopod','$gruzopod1','$obkuz','$obkuz1','$typekuz','$typezag','$datezag','$datezag1','$oplata','$fio','$tel','$pochta','$nazorg')") or die(mysql_error());
if($register == true) 
{ 
echo '<p class="kn">Вы добавили транспорт</p>'; 

} 
else{ 
echo 'Ошибка'; 
} 
} 
} 
?>
<!DOCTYPE html> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
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
.kn {
color:  green;
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
	background-image: url(http://www.smac.ru.com/doroga.jpg);
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
<div id="poisk"><h3> Добавить транспорт </h3>
<br>
<form action="addtrans.php" method="post">
		<label>Страна отправления</label> <br>
<input type="text" name="strot" required placeholder="Страна отправления"  > <br>
		<label>Регион</label> <br>
<input type="text" name="regot" required placeholder="Регион" > <br>
		<label>Страна назначения</label> <br>
<input type="text" name="strnaz" required placeholder="Страна назначения"  > <br>
		<label>Грузоподъемность</label> <br>
От: <input type="text" name="gruzopod" required placeholder="От"> <br>
До: <input type="text" name="gruzopod1" required placeholder="До"> <br>
<label>Объем кузова (м3)</label> <br>
От: <input type="text" name="obkuz" required placeholder="От"> <br>
До: <input type="text" name="obkuz1" required placeholder="До"> <br>
<label>Тип кузова:</label>
<select name="typekuz" size="1">
	<option select value="Борт"> Борт
	<option select value="Термоз"> Термоз
	<option select value="Тент"> Тент
	<option select value="Целнометалический">Целнометалический
	<option select value="Рефежират"> Рефежират
</select> <br>
<label>Тип загрузки:</label>
<select name="typezag" size="1">
	<option select value="Задняя"> Задняя
	<option select value="Верхняя"> Верхняя
	<option select value="Боковая"> Боковая
	<option select value="Любая"> Любая
</select><br>
<label>Дата загрузки</label> <br>
От: <input type="text" name="datezag" required placeholder="От"> <br>
До: <input type="text" name="datezag1" required placeholder="До"> <br>
<label>Способ оплаты:</label>
<select name="oplata" size="1">
	<option select value="Наличными"> Наличными
	<option select value="Безналичный"> Безналичный
	<option select value="На выезде"> На выезде
	<option select value="Любой"> Любой
</select> <br>
	<label>ФИО</label>
<input type="text" name="fio" required placeholder="ФИО"  > <br>
	<label>Телефон</label> 
<input type="text" name="tel" required placeholder="Телефон"  > <br>
	<label>Электронная почта</label> 
<input type="text" name="pochta" required placeholder="Электронная почта"  > <br>
	<label>Назввание организации(или ФИО)</label> <br>
<input type="text" name="nazorg" required placeholder="Название организации"  > <br>
<button type="buttom" class="buttom">Добавить транспорт</button>
</form>

</body> 
</html>