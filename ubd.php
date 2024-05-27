<?php
session_start();
if ($_SESSION['role'] != '1') {
	header('Location: auth.php');
}
?>

<?php
require_once("dbconnect.php");
$id_player = $_GET['id_player'];
$query = "SELECT * FROM `player` WHERE `id_player` = '$id_player'";
$result = mysqli_query($connect, $query);
$result = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Редактор</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php echo "<link rel='stylesheet' href='css/index.css'>" ?>
	<?php echo "<link rel='stylesheet' href='css/preview.css'>" ?>
	<?php echo "<link rel='stylesheet' href='css/admin.css'>" ?>
</head>

<body>
	<div class="wrapper">
		<div class="header">
			<nav class="navbar">
				<?php require_once("header.php"); ?>
			</nav>
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
              <span style="font-size: 38px">РЕДАКТОР УЧАСТНИКОВ</span>
            </strong>​​​​​​​<br>
          </p>
        </div>
				<div> <a href="player.php" class="nazad">
						<img src="image/icons8-назад-50.png" alt="Назад" width="25" height="35">
					</a> </div>
				<br>
				<div class="form_update">
					<form method='POST' action="update.php" class="container_registS">
						<input type="hidden" name="id_player" value="<?= $result['id_player'] ?>">

						<h5>ФИО пользователя</h5>
						<input type="text" class="input_update" name="full_name" value="<?= $result['full_name'] ?>">

						<h5>Учебное заведение пользователя</h5>
						<input type="text" class="input_update" placeholder="Изменить место работы" name="place_of_work" value="<?= $result['place_of_work'] ?>">

						<h5>Должность пользователя</h5>
						<input type="text" class="input_update" placeholder="Изменить должность" name="work" value="<?= $result['work'] ?>">

						<h5>Тема доклада пользователя</h5>
						<input type="text" class="input_update" placeholder="Изменить тему доклада" name="topic" value="<?= $result['topic'] ?>">

						<input class="submitt" name="submit" type="submit" value='Заменить данные пользователя'>

					</form>
				</div>
			</div>
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
</body>

</html>