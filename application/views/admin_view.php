<?php

if ($_SESSION['isadmin']=="1")
{
?>
<html lang="ru">
<head>

  <section id="banner">
    <header>
<title>Admin</title>
</header>
</head>
<body>

  <div style="width:300px; margin:auto">
<form action="#" method="post"><br>

<h2> Добавление</h2>
<div class="dws-input">
<input type="text" name="name"  required placeholder="Название">
</div>
<div class="dws-input">
<input type="text" name="statia"  required placeholder="Возрастной рейтинг">
</div>
<div class="dws-input">
<input type="text" name="image"  required placeholder="Картинка">
</div>
<div class="dws-input">
<input type="text" name="video"  required placeholder="Видео">
</div>
<div class="dws-input">
<input type="text" name="text"  required placeholder="Описание">
</div>
<div>
  <select name="comb">
  <option disabled>Выберите таблицу</option>
  <option value="films">Фильмы</option>
  <option value="games">Гамесы</option>
</select>
</div><br><br>
<div>
<input class="dws-submit" type="submit" name="submit" value="Добавить"><br />
</div>
</form>
</body>
  <?php
  if (isset($_POST['submit']))
  {
    ini_set('display_errors',0);
    include('connection.php');
    if (isset($_POST['name'])){$name = $_POST['name'];}
    if (isset($_POST['statia'])){$statia = $_POST['statia'];}
    if (isset($_POST['image'])){$image = $_POST['image'];}
    if (isset($_POST['video'])){$video = $_POST['video'];}
    if (isset($_POST['text'])){$text = $_POST['text'];}
    if ($_POST['comb'] == "films"){
    $queryInsert = $pdo->prepare('insert into films (name,statia,image,video,text) values(?,?,?,?,?)');
  }
  else {
    $queryInsert = $pdo->prepare('insert into games (name,statia,image,video,text) values(?,?,?,?,?)');
  }
    $queryInsert->execute([$name,$statia,$image,$video,$text]);
    header ("Location: http://localhost/admin");
  }

?>
</section>
<?php
}
else
  {
      header ("Location: http://localhost/404");
  }
?>
