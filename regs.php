<? 
$db = mysql_connect("localhost","u0251747","_V9gGs6Q") or mysql_error(); 
mysql_select_db("u0251747_default", $db); 
mysql_set_charset(utf8); 

if(isset($_POST['login']) and isset($_POST['pass']) and isset($_POST['email']) and ($_POST['face_name']) and ($_POST['number'])) 
{ 
	$login = strip_tags($_POST['login']); 
	$pass = strip_tags($_POST['pass']); 
	$email = strip_tags($_POST['email']); 
	$face_name = strip_tags($_POST['face_name']); 
	$number = strip_tags($_POST['number']); 
	if(empty($login) or empty($pass) or empty($email) or empty($face_name) or empty($number)) 
	{ 
		echo 'Вы пропустили важные поля'; 
	} 
	else
	{ 
		if(!preg_match("|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i", $email)) 
		{ 
			echo 'Неверный E-mail. Проверьте правильно ли указана почта'; 
		} 
		else
		{ 
			$ip = $_SERVER["REMOTE_ADDR"]; 
			$check = mysql_query("SELECT * FROM users WHERE login='$login'"); 
			$num = mysql_num_rows($check); 
			if($num > 0) 
			{ 
				echo 'Такой логин уже зарегистрирован'; 
			} 
			if($num == 0) 
			{ 

				$register = mysql_query("INSERT INTO users(`login`,`password`,`email`,`fice_name`,`number`) VALUES('$login','$pass','$email','$face_name','$number')") or die(mysql_error()); 
				if($register == true) 
				{ 
					echo 'Теперь Авторизуйтесь'; 
					echo '<meta http-equiv="refresh" content="0;URL=/regs.php"/>'; 
				} 
				else
				{ 
					echo 'Ошибка'; 
				} 
			} 
		} 
	} 
} 


if(isset($_COOKIE['login'])) 
{ 
echo '<p class="kn">Вы уже зарегистрированы</p>'; 

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
background-color: white; 
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
.kn {
color: green;
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
color: #4D778B; 
margin-top: 8px; 

line-height: 0.9em; 
} 
.ok1 { 
width: 70px; 
} 
.ok2 { 
width: 70px; 
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
<img src="https://smac.ru.com/logo.png" with="80" height="100" 
alt="logo" title=”logo” id="logot"> 
</div> 
<nav class="menu"> 
<ul> 
<li><a href="index.php">Главная</a></li> 
<li><a href="trans.php">Транспорт</a></li> 
<li><a href="addtrans.php">Добавить транспорт+</a></li> 
<li> <a href="gruzy.php">Груз</a></li> 
<li> <a href="addgruzy.php">Добавить груз+</a></li> 
<li> <a href="rash.php">Расчёт расстояния</a></li> 
<li> <a href="kub.php">Личный кабинет</a></li> 
<li><a
href="/">Еще</a> 
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
<div id="poisk"><h3>Регистрация</h3> 
<br> 
<? 
if(!isset($_COOKIE['login'])) 
{ 
echo '<form action="regs.php" method="post"> 
<label>Введите ваш логин</label> <br> 
<input type="text" name="login" required placeholder="Ввидите ваш логин" > <br> 
<label>Введите ваш email</label><br> 
<input type="text" name="email" required placeholder="Введите ваш email" > <br> 
<label>Введите ваше имя и фамилию</label><br> 
<input type="text" name="face_name" required placeholder="Введите имя и фамиию" > <br> 
<label>Введите ваш телефон</label><br> 
<input type="text" name="number" required placeholder="Введите телефон" > <br> 
<label>Введите пароль</label><br> 
<input type="password" name="pass" required placeholder="Введите пароль" > <br> 
<input type="submit" name="buttom" value="Зарегистрироваться" /> 
</form>'; 
} 
?> 
<div> 
</body> 
</html>