<!DOCTYPE html>
<html lang="ru">

<head>

	<meta name="viewport" content="width=device-width">
	<title>Главная</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php echo "<link rel='stylesheet' href='css/index.css'>" ?>
	<?php echo "<link rel='stylesheet' href='css/reg1.css'>" ?>


</head>

<body>
	<nav class="navbar">
		<input class="nav__check" type="checkbox" id="showmenu" />
		<label class="nav__showmenu" for="showmenu">&#9776;</label>
		<label class="nav__back" for="showmenu"></label>
		<div class="menu">
			<div class="nav_menu">
				<div class="nav_logo"><img src="https://metodcentrespb.ru/wp-content/uploads/2017/12/logo-square-100.png" class="logo"></div>
				<ul class="menu-items">
					<li><a class="menu__item" href="preview.php">Информационное письмо</a></li>
					<li><a class="menu__item" href="#popup">Регистрационная форма участников</a></li>
					<li><a class="menu__item" href="program.php">Программа конференции</a></li>
					<li><a class="menu__item" href="geo.php">Место проведения</a></li>
					<li><a class="menu__item" href="requirements.php">Требования к оформлению доклада</a></li>
					<li><a class="menu__item" href="directory/article/article.pdf">Материалы конференции</a></li>
					<li><a class="menu__item" href="resuls.php">Итоги конференции</a></li>
					<li><a class="menu__item" href="archive.php">Архив конференций</a></li>
					<li><a class="menu__item" href="reference.php">Справка</a></li>

					
					<?php
					if (isset($_SESSION['login'])) {
						echo '<li><a href="player.php">Учатники конференции</a></li>';
						echo '<li><a href="admin.php">Публикация конференций</a></li>';
						echo '<li><a href="logout.php">Выйти</a></li>';
					} else
						echo '<li><a class="menu__item" href="auth.php" class="logon">Войти</a></li>';
					?>
				</ul>
				<div class="footer_menu">
					<p><img src="http://www.spbbt.ru/images/logo21.png" alt="Логотип" class="logo2
				">
						<br>Лиговский пр., д. 70<br> Санкт‑Петербург, Россия <br>info@spbbt.ru
					<div>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<script>
		$(".navbar li ul").hide();
		$(".navbar li:has('.menu__submenu')").hover(
			function() {
				$(".navbar li ul").stop().fadeToggle(300);
			}
		);
	</script>

	<div id="popup" class="popup">
		<div class="popup__body">
			<div class="popup__content">
				<img class="fon" src="image/sankt-peterburg-piter-st-petersburg-russia-dvorcovaya-ploshhad.jpg">
				<div class="popup__title">
					<div class="popup_title text">
						<text class="text__1">Городская научно-практическая конференция «Вызовы XXI века: современные направления развития образовательной и воспитательной деятельности в образовательных учреждениях Комитета по культуре Санкт-Петербурга»
						</text>
					</div>
				</div>

				<div class="popup__text">
					<a href="#" class="popup__close"><img src="image/x.png" width="50%"></a>
					<div class="popup_title text">
						<strong>
							<span style="font-size:16px">РЕГИСТРАЦИОННАЯ ФОРМА<br>УЧАСТНИКОВ</span>
						</strong>​​​​​​​<br>
					</div>
					<form class="form-reg" action="" method="post" name="form">
						<p><label class="label"><img src="image/icons8-имя-50.png" width="40%"></label>
							<input class="form-styling" type="text" name="full_name" id="full_name" placeholder="ФИО*" value="">
						</p>

						<p><label class="label"><img src="image/icons8-академическая-шапка-50.png" width="40%"></label>
							<input class="form-styling" type="text" name="work" id="work" placeholder="Учреждение" value="">
						</p>


						<p><label class="label"><img src="image/icons8-карта-сотрудник-50.png" width="40%"></label>
							<input class="form-styling" type="text" name="place_of_work" id="place_of_work" placeholder="Должность" value="">
						</p>


						<p><label class="label"><img src="image/icons8-телефон-50.png" width="40%"></label>
							<input class="form-styling" type="text" name="phone" id="phone" placeholder="Контактный телефон" value="">
						</p>

						<p>
							<label class="label"><img src="image/icons8-сообщение-50.png" width="40%"></label>
							<input class="form-styling" type="text" name="email" id="email" placeholder="E-mail" value="">
						</p>


						<p>
						<div class="doc">
							<div class="label_check">Я докладчик</div>
							<label class="toggler">
								<input type="checkbox" id="myCheck" onclick="myFunction()">
								<div class="toggler-slider">
									<div class="toggler-knob"></div>
								</div>
							</label>


							<script>
								function myFunction() {
									// Получите флажок
									var checkBox = document.getElementById("myCheck");
									// Получить выходной текст
									var text = document.getElementById("text");
									var radio = document.getElementById("radio");

									// Если флажок проверяется, отобразите выходной текст
									if (checkBox.checked == true) {
										text.style.display = "block";
										radio.style.display = "block";

									} else {
										text.style.display = "none";
										radio.style.display = "none";
									}
								}
							</script>

							<p id="text">
								<label class="label"><img src="image/icons8-тема-50.png" width="40%"></label>
								<input class="form-styling" type="text" name="topic" id="topic" placeholder="Тема доклада" value="">
							</p>
							<div id="radio" class="radio">
								<input type="radio" class="hidden" id="input1" name="radio1">
								<label class="entry" for="input1">
									<div class="design"></div>
									<div class="entry-label1">выступление с докладом</div>
								</label>
								<input type="radio" class="hidden" id="input2" name="radio2">
								<label class="entry" for="input2">
									<div class="design"></div>
									<div class="entry-label2">предоставление материалов для публикации</div>
								</label>
								<div class="highlight"></div>
								<div class="overlay"></div>
							</div>
						</div>
						</p>


						<input id="submit" type="submit" class="submit" value="Отправить" name="submit"><label>Нажимая на кнопку, Вы принимаете <a href="user_agreement.php">пользовательское соглашение</a>.</label>









						<?php require_once("dbconnect.php");
						if (isset($_POST["full_name"])) {
							$full_name = $_POST["full_name"];
						}
						if (isset($_POST["work"])) {
							$work = $_POST["work"];
						}

						if (isset($_POST["place_of_work"])) {
							$place_of_work = $_POST["place_of_work"];
						}

						if (isset($_POST["topic"])) {
							$topic = $_POST["topic"];
						}
						if (isset($_POST["phone"])) {
							$phone = $_POST["phone"];
						}
						if (isset($_POST["email"])) {
							$email = $_POST["email"];
						}


						if (isset($_POST["submit"])) {
							$submit = $_POST["submit"];
						}
						if (isset($submit)) {
							$result = mysqli_query($connect, "INSERT INTO player (full_name, work, place_of_work, topic, phone, email) VALUES ('$full_name','$work','$place_of_work','$topic ','$phone','$email')");
							if ($result) {
								echo "Данные успешно загружены<script>window.location = 'preview.php';</script>";
								exit();
							}
						} else {
							echo "";
						}
						?>

					</form>
				</div>
			</div>
		</div>
	</div>
</body>