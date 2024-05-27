<?php
require_once("dbconnect.php");
mysqli_query($connect, "SET NAMES UTF8");
session_start();
if ($_SESSION['role'] != '1') {
	header('Location: auth.php');
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>Публикация материалов</title>
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
							<span style="font-size: 38px">СВЕДЕНИЯ О КОНФЕРЕНЦИИ</span>
						</strong>​​​​​​​<br>
					</p>
				</div>

				<div class="class">
					<div class="spoiler_title s_title">
						<div class="form">
							<form method='POST'>
								<p><label class="label"><img src="image/icons8-тема-50.png" width="50%"></label>
									<input id="title" type="text" placeholder="Введите название конференции" name="title" required>
								</p>
								<p><label class="label"><img src="image/icons8-имя-50.png" width="50%"></label>
									<input id="geo" type="text" placeholder="Введите место проведения" name="geo" required>
								</p>
								<p>
									<input id="date" type="date" name="date">
								</p>

								<p><input class="submit" name="send" type="submit" value='Внести данные'></p>

							</form>


						</div>
					</div>
					<?php
					if (isset($_POST['send'])) {
						$id_conf = $_POST["id_conf"];
						$title = $_POST["title"];
						$date = $_POST["date"];
						$geo = $_POST["geo"];

						$result = "INSERT INTO `conf` (`id_conf`, `title`, `date`, `geo`)
						  VALUES ('$id_conf','$title','$date','$geo')";
						mysqli_query($connect, $result) or die("Error1" . mysqli_error($connect));
						echo "<script>window.location = 'red_arh.php';</script>";
					}
					?>
					<div class="editor">
						<table class="features-table">
							<tbody>
								<thead>
									<tr>
										<th>ID</th>
										<th>Название конференции</th>
										<th>Дата проведения</th>
										<th>Место проведения</th>
										<th>Изменить</th>
										<th>Удалить</th>

									</tr>
								</thead>
								<?php
								$row = mysqli_query($connect,  "SELECT * FROM `conf`");
								$row = mysqli_fetch_all($row);
								foreach ($row as $row) {
								?>
									<tr>
										<td><?= $row['0'] ?></td>
										<td><?= $row['1'] ?></td>
										<td><?= $row['2'] ?></td>
										<td><?= $row['3'] ?></td>
										<td><a href="upd2.php?id=<?= $row[0] ?>">
												<img src="image/icons8-red.png" width="25px"></a></td>
										<td><a href="delete2.php?id=<?= $row[0] ?>">
												<img src="image/x.png" width="25px"></a></td>
									</tr>
							</tbody>
						<?php
								}	?>


						</table>
					</div>
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