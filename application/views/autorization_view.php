<html lang="ru">
<head>

  <section id="banner">
    <header>
<title>Вход</title>
</header>
</head>
<body>

  <div style="width:300px; margin:auto">

<form action="#" method="post"><br>

<h2> Авторизация </h2>
<div class="dws-input">
<input  type="text" required maxlength="16" name="log" placeholder="Логин">
</div>
<div class="dws-input">
<input  type="password" required maxlength="16" name="pass" placeholder="Пароль"><br><br>
</div>
<div>
<input class="dws-submit" type="submit" name="submit" value="ВОЙТИ"><br />
</div>
</form>
</body>
  <?php
  if (isset($_POST['submit']))
  {
ini_set('display_errors',1);
$login = $_POST['log'];
$password = $_POST['pass'];
include('connection.php');
$querylogin = $pdo->prepare('select * from user where username = ?');
$querylogin->execute([$login]);
$result = $querylogin->fetchAll();
foreach ($result as $k)
{
if ($k['password']==$password)
{
  session_start();
  $_SESSION['login'] = $login;
  $_SESSION['email']=$email;
  $isadmin = $pdo->prepare('select isadmin from user where username = ? and password = ?');
  $isadmin->execute([$login,$password]);
  $res = $isadmin->fetchAll();
  foreach($res as $adm){
  $_SESSION['isadmin'] = $adm['isadmin'];
  }
  header ("Location: http://localhost");
}
else {
?>

  <?php
}
}
}
?>
</div>
</div>

</section>
