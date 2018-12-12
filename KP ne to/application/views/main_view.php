<!-- Banner -->

    	<link rel="stylesheet" href="/css/style.css" />
  <section id="banner">
    <header>
      <h2>Приветствую на сайте MediaSore,<strong>
        <?php

          if (isset($_SESSION['login'])&&($_SESSION['login']!=''))
          {?>
                  <?php
          echo $_SESSION['login'];
          }
          else {?>
          <a href="/registr" class=button9>гость </a>
          <?php
          }?>
      </strong>.</h2>
      <p>
      Здесь ты сможешь посмотреть обзоры на новинки развлекательной индустрии
    </p><br>

      <div>
        <form action="/" method="post">
        <div class="d21"	>
        <div style=" width: 700px;">
          <input type="text" name="iskat" placeholder="Искать здесь...">
          <select name="combobox">
          <option disabled>Выберите Возрастной рейтинг</option>
          <option value="vse">Все</option>
          <option value="+12">+12</option>
          <option value="+16">+16</option>
          <option value="+18">+18</option>
        </select>
        </div>
        <div style="margin-left:10px; margin-top: 30px;">
        <?php
        if(isset($_POST['iskat'])){
        ?>
          </form>
          <form action="/" method="post">

          <input href="/" class="dws-submit" type="submit"  value="Обновить"><br />

          <?php
}
else {
  ?>

  <input href="/" class="dws-submit" type="submit"  value="Поиск"><br />

  <?php
}
          ?>
</div>
      </div>


    </div>
      </div>

    </header>
  </section>

<!-- Carousel -->
  <section class="carousel">
    <div class="reel">

      <?php
      include('connection.php');
      if(isset($_POST['iskat'])&&($_POST['iskat']!=""))
      {
      $query = $pdo->prepare("select * from films where name like concat(?,'%')");
      $query->execute([$_POST['iskat']]);
      }
      else{
        if((isset($_POST['combobox']))&&($_POST['combobox'] == "+16")){
          $query = $pdo->prepare("select * from films where statia = ?");
          $query->execute([$_POST['combobox']]);
        }
        else{
          if((isset($_POST['combobox']))&&($_POST['combobox'] == "+18")){
            $query = $pdo->prepare("select * from films where statia = ?");
            $query->execute([$_POST['combobox']]);
          }
          else{
            if((isset($_POST['combobox']))&&($_POST['combobox'] == "+12")){
              $query = $pdo->prepare("select * from films where statia = ?");
              $query->execute([$_POST['combobox']]);
            }
            else{
      $query = $pdo->query('select * from films ');
    }
    }
  }
  }
      $res = $query->fetchAll();
      foreach ($res as $key ) {
      ?>
      <article>
        <a href="/main/film/<?=$key['id_films']?>" class="image featured"><img  src= "<?php echo $key['image']?>" alt=""/></a>
        <header>
          <h3><a href="/main/film/<?=$key['id_films']?>"><?php echo $key['name'];?></a></h3>
        </header>
        <p><?php echo $key['statia'];?></p>
      </article>
  <?php
}
?>
    </div>
  </section>

<!-- Main -->
  <div class="zal">

    <article id="main" class="container special">
<br><br><br>
<!-- <div class="dive">
<div>
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad0512ccbedaa2737202d1e2ae223fe685d5e504fe85c9c99ffd7b70585e2a58b&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script> -->
<!-- <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad0512ccbedaa2737202d1e2ae223fe685d5e504fe85c9c99ffd7b70585e2a58b&amp;width=1280&amp;height=720&amp;lang=ru_RU&amp;scroll=true"></script> -->
<!-- </div>
<div class="dv">
<h2 align="center">Alex corparation</h2>
</div>
</div> -->
      <header>
      </header>

    </article>
  </div>
  </div>
