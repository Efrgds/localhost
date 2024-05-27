<!DOCTYPE html>
<html lang="ru">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Главная</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php echo "<link rel='stylesheet' href='css/popup.css'>" ?>

</head>
<a class="menu__item" href="#popup">Регистрационная форма участников</a></li>


<div id="popup" class="popup">
		<div class="popup__body">
			<div class="popup__content">
				<div class="popup__text">
					<a href="#" class="popup__close"><img src="image/x.png" width="50%"></a>
					<div class="popup_title text">
						<strong>
							<span style="font-size:16px">РЕГИСТРАЦИОННАЯ ФОРМА<br>УЧАСТНИКОВ</span>
							<br>
							<span style="font-size:12px">Городской научно-практической конференции «Вызовы XXI века: современные направления развития образовательной и воспитательной деятельности в образовательных учреждениях Комитета по культуре Санкт-Петербурга»</span>
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






