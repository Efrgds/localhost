<!DOCTYPE html>
<html lang="ru">

<head>
	<meta name="viewport" content="width=device-width">
	<title>Требования к оформлению доклада</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php echo "<link rel='stylesheet' href='css/preview.css'>" ?>
	<?php echo "<link rel='stylesheet' href='css/requirements.css'>" ?>
</head>

<body>
	<div class="wrapper">
		<div class="header">
			<?php require_once("header.php"); ?>
		</div>
		<div class="section">
			<div class="content">
				<div class="title">
					<p>
						<span style="color:#A9A9A9">
							<strong>
								<span style="font-size:17px">
									Н А У Ч Н А Я&emsp;К О Н Ф Е Р Е Н Ц И Я
								</span>
							</strong>
						</span>
						<br>
						<strong>
							<span style="font-size:38px">ТРЕБОВАНИЯ К ОФОРМЛЕНИЮ ДОКЛАДА</span>
						</strong>​​​​​​​<br>
					</p>
				</div>

				<p><a href="directory/requirements/requirements.pdf">Версия для печати</a>
					<!--<a href="#box">Отправить доклад на почту</a>-->
				</p>
				<b>Параметры документа:</b>
				<ul class="text_1">
					<li>формат файла с текстом доклада – DOC, DOCX. Все виды иллюстраций (векторные
						рисунки, графики и таблицы) также должны быть созданы в текстовом редакторе MS Word;</li>
					<li>формат страниц - А4;</li>
					<li>ориентация страниц – книжная;</li>
					<li>объем одного доклада - не более 6 страниц;</li>
					<li>все страницы доклада должны быть не нумерованные;</li>
					<li>размеры полей: левое – 3 см, правое – 1,5 см, верхнее и нижнее – по 2 см,</li>
				</ul>
				<b>Требования к оформлению текста:</b>
				<ul class="text_1">
					<li>выравнивание абзацев с заголовочной частью доклада и заголовком спискаисточников – по середине рабочей области, абзацев текста доклада - по ширине рабочей области;</li>
					<li>начертание темы (названия) доклада – полужирное, данные об участниках, заголовок
						списка источников и текст доклада – обычное (не курсивное, не подчеркнутое)</li>
					<li>отступ первых строк абзацев текста доклада – 1,25 см;</li>
					<li>междустрочное расстояние внутри и между абзацами текста доклада – 1,5 интервала, внутри абзацев с темой (названием) доклада, данных об авторах и руководителях, с заголовком списка источников – 1 интервал, после этих абзацев – 2 интервал (12 пт);</li>
					<li>стиль шрифта – Times New Roman;</li>
					<li> размер шрифта – 14 пт;</li>
					<li>автоматический перенос в словах должен быть отключен</li>
				</ul>



				<div class="conte">
					<div class="sod">
						<b>Требования к содержанию текста:</b>
						<ol class="text_2">

							<li>Заголовочная часть доклада должна содержать следующие элементы:
								<ul class="text_1">
									<li>тема (название) доклада - заглавными буквами (полностью);</li>
									<li>фамилия, имя и отчество автора (полностью), должность;</li>
									<li>полное наименование образовательного учреждения;</li>
									<li>каждый элемент заголовочной части должен начинаться с новой строки.</li>
								</ul>
							</li>
							<li>Основной текст доклада:
								<ul class="text_1">
									<li>ссылки на источники информации должны быть даны непосредственно в тексте доклада в <br>квадратных скобках, с указанием номера источника в списке к докладу и страниц, на<br> которых находится цитируемый фрагмент текста источника (для печатных документов).</li>
									<li>обычные и концевые сноски, с данными об источниках информации, не
										допускаются.</li>
								</ul>
							</li>
							<li>Список источников:
								<ul class="text_1">
									<li>располагается после текста доклада;</li>
									<li>имеет заголовок «Список источников»;</li>
									<li>включает источники, использованные при подготовке текста доклада, в порядке их цитирования<br> в тексте;</li>
									<li>представляет собой библиографический список, описания источников в котором составлены в <br>соответствии с требованиями ГОСТ Р 7.0.100-2018.</li>
								</ul>
							</li>
						</ol>
					</div>
					<div class="form_container">
						<img class="img" src="image/94.png" alt="Snow">
						<form class="form_wrapp">
							<div class="form_title">
								<strong>
									<span style="font-size:17px">
										О Т П Р А В И Т Ь&emsp;Д О К Л А Д
									</span>
								</strong>
							</div>
							<div class="form_content">
								<div class="form_input">
									<input id="title" type="text" placeholder="Название доклада" name="title" autocomplete="off"><br>
								</div>
								<div class="form_input">
									<input id="player" type="text" placeholder="ФИО" name="player"><br>
								</div>
								<div class="input__wrapper">
									<input name="file" type="file" id="input__file" class="input input__file" multiple>
									<label for="input__file" class="input__file-button">
										<span class="input__file-icon-wrapper"><img class="input__file-icon" src="image/icons8-скрепка-50.png" alt="Выбрать файл" width="25"></span>
										<span class="input__file-button-text">Выберите файл</span>
									</label>
								</div>
								<input id="submit" type="submit" class="form_submit" value="Отправить" name="submit">
								<label style="font-size: 10px; padding-left: 80px;">Нажимая на кнопку, Вы принимаете <a href="user_agreement.php" style="padding-left: 80px;">
										пользовательское соглашение</a>.</label>
							</div>
						</form>
					</div>
				</div>
			</div>

			<script>
				let inputs = document.querySelectorAll('.input__file');
				Array.prototype.forEach.call(inputs, function(input) {
					let label = input.nextElementSibling,
						labelVal = label.querySelector('.input__file-button-text').innerText;

					input.addEventListener('change', function(e) {
						let countFiles = '';
						if (this.files && this.files.length >= 1)
							countFiles = this.files.length;

						if (countFiles)
							label.querySelector('.input__file-button-text').innerText = 'Выбрано файлов: ' + countFiles;
						else
							label.querySelector('.input__file-button-text').innerText = labelVal;
					});
				});
			</script>


			<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


		
		<div class="footer">
			<div class="footer_text">
				<p class="text">© 2023 Санкт-Петербургское государственное бюджетное образовательное учреждение
					<br>дополнительного профессионального образования
					<br>Учебно-методический центр развития образования в сфере культуры и искусства Санкт-Петербурга
				</p>

			</div>
		</div>
	</div>

	</div>
	</div>

</body>