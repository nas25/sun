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
.ssilka{
color:white;
text-decoration: none;
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
<div id="poisk"><h3>Тут вы можете посмотреть информацию о себе</h3>
<br>
<?
if(isset($_COOKIE['id'])) {
$db = mysql_connect("localhost","u0251747","_V9gGs6Q") or mysql_error(); 
mysql_select_db("u0251747_default", $db); 
mysql_set_charset(utf8);
$q = mysql_query("SELECT * FROM users WHERE id='$_COOKIE[id]'"); 
$myrow = mysql_fetch_array($q); 
//$up = mysql_query("UPDATE users SET login='$login', face_name='$face_name', number='$number', email='email', WHERE id='$_COOKIE[id]'"); 
echo '<table width="50%" border="1">
  <tr>
    <td height="29" align="center"><strong>Личная информация</strong></td>
  </tr>
  <tr>
    <td align="center">Логин: <font color="white">'.$myrow['login'].'</font></td>
  </tr>
  <tr>
    <td align="center" id="id">Ваш ID: <font color="white" id="id_font">'.$myrow['id'].'</font></td>
  </tr>
 <tr>
    <td align="center" id="id">Ваше имя: <font color="white" id="id_font">'.$myrow['fice_name'].'</font></td>
  </tr>
  <tr>
    <td align="center" id="id">Ваш телефон: <font color="white" id="id_font">'.$myrow['number'].'</font></td>
  </tr>
  <tr>
    <td align="center" id="id">Ваш e-mail: <font color="white" id="id_font">'.$myrow['email'].'</font></td>
  </tr>
</table>
</form>';
}
else {
	echo'<a href="auth.php" class="ssilka">Авторизуйтесь</a>';
}
?>
</div>
</body> 
</html>