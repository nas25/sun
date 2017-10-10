<?
if(!isset($_COOKIE['login'])) 
{ 
echo 
' 
'; 

if(isset($_POST['login']) and isset($_POST['pass']) and isset($_POST['email']) and ($_POST['face_name']) and ($_POST['number'])) 
{ 
$login = strip_tags($_POST['login']); 
$pass = strip_tags($_POST['pass']); 
$email = strip_tags($_POST['email']); 
$face_name = strip_tags($_POST['face_name']);
$number = strip_tags($_POST['number']);
if(empty($login) or empty($pass) or empty($email) or empty($face_name) and empty($number)) 
{ 
echo 'Вы пропустили важные поля'; 
} 
else{ 
if(!preg_match("|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i", $email)) 
{ 
echo 'Неверный E-mail. Проверьте правильно ли указана почта'; 
} 
else{ 
$ip = $_SERVER["REMOTE_ADDR"]; 
$check = mysql_query("SELECT * FROM users WHERE login='$login'"); 
$num = mysql_num_rows($check); 
if($num > 0) 
{ 
echo 'Такой логин уже зарегистрирован'; 
} 
if($num == 0) 
{ 

$register = mysql_query("INSERT INTO users(`login`,`pass`,`email`,`face_name',`number`) VALUES('$login','$pass','$email','$face_name','$number')");
if($register == true) 
{ 
echo 'Теперь Авторизуйтесь'; 
echo '<meta http-equiv="refresh" content="0;URL=/auth.php"/>'; 
} 
else{ 
echo 'Ошибка'; 
} 
} 
} 
} 
} 

} 

if(isset($_COOKIE['login'])) 
{ 
echo 'Вы уже зарегистрированы'; 
echo '<meta http-equiv="refresh" content="5;URL=/auth.php />'; 
} 
?> 
</table> 
</div> 
</body> 
</html>

















<? 
if(isset($_GET['exit'])) 
{ 
setcookie("login",""); 
setcookie("id",""); 
echo '<meta http-equiv="refresh" content="1;URL=/" />'; 
} 
if(isset($_POST['login']) and isset($_POST['pass'])) 
{ 
$login = $_POST['login']; 
$pass = $_POST['pass']; 
if(!empty($login) and !empty($pass)) 
{ 
require("db.php"); 
$query = mysql_query("SELECT * FROM users WHERE login='$login' and pass='$pass'"); 
$num = mysql_num_rows($query); 
if($num > 0) 
{ 
$date = date('d.m.Y'); 
$time = time(); 
$row = mysql_fetch_array($query); 
setcookie("id",$row['id'],time()+36000); 
setcookie("login",$row['login'],time()+36000); 
$ip = $_SERVER["REMOTE_ADDR"]; 
$up = mysql_query("UPDATE users SET time='$time', l_enter='$date', ip='$ip' WHERE id='$_COOKIE[id]'"); 
echo '<meta http-equiv="refresh" content="0;URL=/" />'; 
} 
else 
{ 
echo 'Неверный Логин или Пароль!!!'; 
echo '<meta http-equiv="refresh" content="0;URL=/" />'; 
} 

} 
if(empty($login) or empty($pass)) 
{ 
echo 'Вы пропустили важные поля!!!'; 
echo '<meta http-equiv="refresh" content="0;URL=/" />'; 
} 
} 
?> 

<? 
if(!isset($_COOKIE['login']) and !isset($_POST['login'])) 
{ 
echo ' 

<form method="POST" action="/"> 
<table background="img/bg.png" width="100%" border="1" align="center" cellpadding="2" cellspacing="0"> 
<tr align="center"> 
<td height="40"><b>Авторизация</b></td> 
</tr align="center"> 
<tr> 
<td> 

<table width="100%" cellpadding="2" cellspacing="0" border="0"> 
<tr> 
<td width="41%" align="right"><b>Логин:</b></td> 
<td width="59%" align="left"><input type="text" name="login" /></td> 
</tr> 
</table> 

</td> 
</tr> 
<tr align="center"> 
<td> 

<table width="100%" height="100%" cellpadding="2" cellspacing="0" border="0"> 
<tr> 
<td width="41%" align="right"><b>Пароль:</b></td> 
<td width="59%" align="left"><input type="password" name="pass" /></td> 
</tr> 
</table> 

</td> 
</tr> 
<tr align="center"> 
<td height="20"><input type="submit" value="Войти" /> или <a href="reg.php">Регистрация</a></td> 
</tr align="center"> 
<tr> 
</table> 
</form>'; 
} 



if(isset($_COOKIE['login'])) 
{ 
include("db.php"); 
$q = mysql_query("SELECT * FROM users WHERE id='$_COOKIE[id]'"); 
$myrow = mysql_fetch_array($q); 
$time = time(); 
$date = date('d.m.Y'); 
$ip = $_SERVER["REMOTE_ADDR"]; 
$up = mysql_query("UPDATE users SET time='$time', l_enter='$date', ip='$ip' WHERE id='$_COOKIE[id]'"); 
echo ' 
<table bgcolor="#0f2d33" width="100%" height="100%" border="1" align="center" cellpadding="2" cellspacing="0"> 
<tr align="left"> 
<td><img src="img/life.png">'.$myrow['n_zdorovie'].' <img src="img/energy.png">'.$myrow['n_vinoslivost']; 
$q5 = mysql_query("SELECT * FROM post WHERE too='$_COOKIE[login]' and readd='no' ORDER BY id DESC"); 
$myrow5 = mysql_num_rows($q5); 
if($myrow5 > 0){ 
echo ' <a href="mail.php?p=1"><img src="img/mail.png"></a>'; 
} 
echo '</td> 
</tr align="center"> 
<tr align="left"> 
<td><img src="img/logo.jpg" width="200" height="170"><br> 
<img src="img/ataka.png"> <a href="mission.php">Задания<a/><br> 
<img src="img/baksi.png"> <a href="/">Казино "Четыре Дракона"<a/> 
</td> 
</tr> 
<tr align="left"> 
<td> 
<img src="img/rinok.png"> <a href="rinok.php">Черный Рынок</a><br><img src="img/shop.png"> <a href="shop.php">Магазины</a> 
</td>
</tr> 
<tr align="left"> 
<td> 
<img src="img/clan.png"> <a href="clan.php">Кланы</a> 
</td> 
</tr> 
<tr align="left"> 
<td> 
<a href="user.php"><img src="img/profile.png"> Мой Персонаж</a> 
<br>'; 
if(!empty($myrow['clan'])) 
{ 
echo '<a href="clan.php?id='.$myrow[clan].'"><img src="img/clan.png"> Мой клан</a> <br>'; 
} 
echo ' 
<a href="index.php"><img src="img/arrow.png"> На главную</a> 
</td> 
</tr> 
'; 
include("footer.php"); 
echo'</table>'; 

} 
?> 

</div> 
</body> 
</html>