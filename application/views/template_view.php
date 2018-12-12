<!DOCTYPE HTML>
<html>
	<head>
  <link rel="shortcut icon" href="/images/icon.ico" type="image/x-icon">
	  		<link rel="stylesheet" href="/css/style.css" />
		<title>MediaSore</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
		<noscript><link rel="stylesheet" href="/css/noscript.css" /></noscript>
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="/" id="logo">Media Sore</a></h1>
								<hr />
								<p>Развлекательный сервис</p>
							</header>
							<footer>
								<a href="#banner" class="button circled scrolly">Начать</a>
							</footer>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<!-- <li><a href="/">Admin</a></li> -->
								<li>
									<a href="/">Контент</a>
									<ul>
										<li><a href="/">Фильмы</a></li>
										<li><a href="/games">Игры</a></li>
										<!-- <li><a href="#">Комиксы</a></li> -->
										<li>
									</ul>
								</li>
                <?php
  session_start();
if (isset($_SESSION['login'])&&($_SESSION['login']!=''))
{
	if ($_SESSION['isadmin']=="1")
	{
		?>
		<li><a href="/admin">Адмен</a></li>
		<?php
	}
	?>
	<li><a></a><?php echo $_SESSION['login']?></li>
<li><a href="/delete_session">Выход</a></li>
<?php }
else{?>
<li><a href="/autorization">Авторизация</a></li>
<li><a href="/registr">Регистрация</a></li>
<?php };?>

								<!-- <li><a href="#">No Sidebar</a></li> -->

							</ul>
						</nav>

				</div>
 <div>
			  <?php include 'application/views/'.$content_view; ?>
 </div>
			<!-- Footer -->
				<div id="footer" style="height: 600px;">
				 <!-- <div class="container"> -->
					 <!-- <div class="row">
					</div> -->
						 <!-- <hr /> -->
						 <!-- <div class="row">
							<div class="col-12"> -->


								<!-- Contact -->
									<section class="contact">
										<div class="dive">
										<div class="d">
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad0512ccbedaa2737202d1e2ae223fe685d5e504fe85c9c99ffd7b70585e2a58b&amp;width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
<!-- <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad0512ccbedaa2737202d1e2ae223fe685d5e504fe85c9c99ffd7b70585e2a58b&amp;source=constructor" width="500" height="400" frameborder="0"></iframe> -->
										</div>
										<div class="dv">
										<h2 align="center">Alex corparation</h2><br><br>
										<div class="dive">
										<div class="d2">
										<a href="/">Фильмы</a><br><br>
										<a href="/games">Игры</a>
										</div>
										<div class="d1">
											<?php

			if (isset($_SESSION['login'])&&($_SESSION['login']!=''))
			{
				if ($_SESSION['isadmin']=="1")
				{
					?>
					<a href="/admin">Адмен</a><br><br>
					<?php
				}
				?>
			<a href="/delete_session">Выход</a>
			<?php }
			else{?>
				<a href="/autorization">Вход</a><br><br>
				<a href="/registr">Регистрация</a>
			<?php };?>

										</div>
									</div>
									<br><br><br>
										<h3>По всем вопросам обращайтесь:</h3>
									<p>8 (977) 577 12 96</p>

										</div>
										</div>

										<div class="d">

									</div>


									</section>
							</div>

						</div>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/jquery.dropotron.min.js"></script>
			<script src="/js/jquery.scrolly.min.js"></script>
			<script src="/js/jquery.scrollex.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>
