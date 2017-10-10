<?
$db = mysql_connect("sql108.0fees.us","0fe_18620687","iloveyou25") or mysql_error();
mysql_select_db("0fe_18620687_users", $db);
mysql_set_charset("UTF-8");

if(isset($_GET['login']) and isset($_GET['pass']) and !isset($_COOKIE['id']))
{
	$login = htmlspecialchars($_GET['login']);
	$pass = htmlspecialchars($_GET['pass']);
	if(empty($login) or empty($pass))
	{
		echo 'вы пропустили важные поля';
	}
	else
	{
		$CheckUser = mysql_query("SELECT * FROM users WHERE login='".$login."' and password='".$pass."' LIMIT 30");
		$CheckUserNum = mysql_num_rows($CheckUser);
		if($CheckUserNum == 0)
		{
			echo 'Неверный логин или пароль';
		}
		if($CheckUserNum == 1)
		{
			$CheckUserRow = mysql_fetch_array($CheckUser);
			setcookie("id",$CheckUserRow['id'],time()+36000);
			echo '<meta http-equiv="refresh" content="0;URL=/test.php" />';
		}
	}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>test</title>
<body>
<?
if(!isset($_COOKIE['id']))
{
echo '<form action="test.php" method="GET">
<table width="100%" border="1">
  <tr>
    <td height="29" align="center" style="background-color:red;"><strong>Авторизация</strong></td>
  </tr>
  <tr>
    <td align="center">Логин:&nbsp; &nbsp;<input type="text" name="login" /></td>
  </tr>
  <tr>
    <td align="center">Пароль: <input type="password" name="pass" /></td>
  </tr>
  <tr>
    <td align="center"><input type="submit" value="Войти" /> или <a href="reg.php">Регистрация</a></td>
  </tr>
</table>
</form>';
}
if(isset($_COOKIE['id']))
{
	echo 'Вы уже авторизованый ';
}
?>
</body>
</head>
</html>