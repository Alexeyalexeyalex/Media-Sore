<!-- Banner -->
  		<link rel="stylesheet" href="/css/style1.css" />
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
      <form action="/games" method="post">
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
        <form action="/games" method="post">

        <input href="/games" class="dws-submit" type="submit"  value="Обновить"><br />

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
    </form>
    </div>
    <div style="margin-top: 30px; margin-left: 5px;">

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
      $query = $pdo->prepare("select * from games where name like concat(?,'%')");
      $query->execute([$_POST['iskat']]);
      }
      else{
        if((isset($_POST['combobox']))&&($_POST['combobox'] == "+16")){
          $query = $pdo->prepare("select * from games where statia = ?");
          $query->execute([$_POST['combobox']]);
        }
        else{
          if((isset($_POST['combobox']))&&($_POST['combobox'] == "+18")){
            $query = $pdo->prepare("select * from games where statia = ?");
            $query->execute([$_POST['combobox']]);
          }
          else{
            if((isset($_POST['combobox']))&&($_POST['combobox'] == "+12")){
              $query = $pdo->prepare("select * from games where statia = ?");
              $query->execute([$_POST['combobox']]);
            }
            else{
      $query = $pdo->query('select * from games ');
    }
    }
  }
  }
      $res = $query->fetchAll();
      foreach ($res as $key ) {
      ?>
      <article>
        <a href="/games/game/<?=$key['id_games']?>" class="image featured"><img  src= "<?php echo $key['image']?>" alt=""/></a>
        <header>
          <h3><a href="/games/game/<?=$key['id_games']?>"><?php echo $key['name'];?></a></h3>
        </header>
        <p><?php echo $key['statia'];?></p>
      </article>
  <?php
}
?>
    </div>
  </section>

<!-- Main -->

    </article>
  </div>
  </div>
