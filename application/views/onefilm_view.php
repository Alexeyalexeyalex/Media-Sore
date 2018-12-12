  <script type="text/javascript" src="jquery-3.1.0.min.js"></script>
    <section id="banner" >
      <h2><a href="#"></a><?php echo $data['name'];?></h2>
      <h3><a href="" ></a><?php echo $data['statia'];?></h3><br><br>
      <div class="zal"><br><br>
    <article id="main" class="container special">
      <header >
      <link rel="stylesheet" href="/css/style.css" />
<br><br>

<div class="zal1">
<br>
      <div class="dive" >
        <div class="image">
          <a><img  src= "<?php echo $data['image'];?>" alt=""/></a>
        </div>
        <div class="d">

          <div>

          </div>
          <h3 text align="left"><a href="" ></a><?php echo $data['text'];?></h3>
        </div>
        <div>

      </div>
      </div>
      <div class="videof">
      <iframe width="900" height="500" src="<?php echo $data['video'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div><br><br>
    <?php
      if (isset($_SESSION['login'])&&($_SESSION['login']!=''))
      {?>
        <form enctype="multipart/form-data" method="post" id="form">
      <div action="send.php">
      <input class="dws-submit" type="submit" name="submit" value="Сохранить"><br />
      </div><br><br>
    </form>
    <?php  }
?>
      <?php
      ?>


    </div>
  </header><br><br><br><br>
  </div><br><br>
  <a><img  src= "/images/icon.ico" alt=""/></a>
  </section>
