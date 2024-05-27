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
							<span style="font-size: 38px">ПУБЛИКАЦИЯ МАТЕРИАЛОВ</span>
						</strong>​​​​​​​<br>
					</p>
				</div>

				<div class="class">
					<div class="spoiler_title s_title">
						<div class="form">
							<form method='POST'>
								<p><label class="label"><img src="image/icons8-имя-50.png" width="50%"></label>
									<input id="player" type="text" placeholder="Введите имя автора" name="player" required>
								</p>
								<p><label class="label"><img src="image/icons8-имя-50.png" width="50%"></label>
									<input id="player2" type="text" placeholder="Введите имя автора" name="player2">
								</p>
								<p><label class="label"><img src="image/icons8-имя-50.png" width="50%"></label>
									<input id="player3" type="text" placeholder="Введите имя автора" name="player3">
								</p>
								<p><label class="label"><img src="image/icons8-тема-50.png" width="50%"></label>
									<input id="title" type="text" placeholder="Введите название доклада" name="title" required>
								</p>
								<p>
									<textarea type="text" class="input_update" name="text" placeholder="Введите текст доклада" required></textarea>
									<br>
									<input class="submit" name="send" type="submit" value='Внести данные'></p>
							</form>


						</div>
					</div>
					<?php
					if (isset($_POST['send'])) {
						$id = $_POST["id"];
						$player = $_POST["player"];
						$player2 = $_POST["player2"];
						$player3 = $_POST["player3"];
						$title = $_POST["title"];
						$text = $_POST["text"];
						
						$result = "INSERT INTO `report` (`id`, `player`, `player2`, `player3`, `title`,`text`)
						  VALUES ('$id','$player','$player2','$player3','$title',  '$text')";
						mysqli_query($connect, $result) or die("Error1" . mysqli_error($connect));
						echo "<script>window.location = 'red_arh.php';</script>";
					}
					?>
					<div class="editor">
						<table class="features-table ">
							<tbody>
								<thead>
									<tr>
										<th>ID</th>
										<th>Автор 1</th>
										<th>Автор 2</th>
										<th>Автор 3</th>
										<th>Название</th>
										<th class="tr1">Текст доклада</th>
										<th>Изменить</th>
										<th>Удалить</th>

									</tr>
								</thead>
								<?php
								$row = mysqli_query($connect,  "SELECT * FROM `report`");
								$row = mysqli_fetch_all($row);
								foreach ($row as $row) {
								?>
  
									<tr>
										<td><?= $row['0'] ?></td>
										<td><?= $row['1'] ?></td>
										<td><?= $row['2'] ?></td>
										<td><?= $row['3'] ?></td>
										<td class="td2"><?= $row['4'] ?></td>
										<td class="td1"><?= $row['5'] ?></td>
										<td><a href="upd1.php?id=<?= $row[0] ?>">
												<img src="image/icons8-red.png" width="25px"></a></td>
										<td><a href="delete1.php?id=<?= $row[0] ?>">
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