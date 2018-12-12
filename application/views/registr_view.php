<html lang="ru">
<head>

  <section id="banner">
    <header>
<title>Регистрация</title>
</header>
</head>
<body>

  <div style="width:300px; margin:auto">
<form action="#" method="post"><br>

<h2> Регистрация </h2>
<div class="dws-input">
<input  type="text" required maxlength="30" name="login" placeholder="Логин">
</div>
<div class="dws-input">
<input  type="password" required maxlength="16" name="password1" placeholder="Пароль">
</div>
<div class="dws-input">
<input  type="password" required maxlength="16" name="password2" placeholder="Подтверждение пароля">
</div>
<div class="dws-input">
<input  type="email" name="email" placeholder="Email"><br><br>
</div>
<div>
<input class="dws-submit" type="submit" name="submit" value="Зарегестрироваться"><br />
</div>
</form>
</body>
  <?php
  if (isset($_POST['submit']))
  {
    ini_set('display_errors',0);
    include('connection.php');
    if (isset($_POST['login'])){$login = $_POST['login'];}
    if (isset($_POST['email'])){$email = $_POST['email'];}
    if (isset($_POST['password1'])){$password1 = $_POST['password1'];}
    if (isset($_POST['password2'])){$password2 = $_POST['password2'];}
    if ($password1 == $password2)
    {
    $queryInsert = $pdo->prepare('insert into user (username,password,isadmin,email) values(?,?,?,?)');
    $queryInsert->execute([$login,$password1,'0',$email]);
    header ("Location: http://localhost/autorization");
    }
    else {
    echo "Введеные пароли не совпадают";
    }
  }

?>
</section>
