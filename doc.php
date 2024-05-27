<?php
require_once("dbconnect.php");
mysqli_query($connect, "SET NAMES UTF8");
?>

<!DOCTYPE html>
<html lang="ru">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title><?php
				$id = $_GET['id'];
				$foo = mysqli_query($connect,  "SELECT * FROM `report` WHERE `id`='$id'");
				$foo = mysqli_fetch_all($foo);
				foreach ($foo as $foo) {
					echo 'Архив конференций | ' . $foo[4] . '';
				} ?>
	</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php echo "<link rel='stylesheet' href='css/index.css'>" ?>
	<?php echo "<link rel='stylesheet' href='css/article.css'>" ?>
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
						<strong> <span style="font-size: 38px">АРХИВ МАТЕРИАЛОВ</span>

						</strong>​​​​​​​<br>
					</p>
					<hr />
					<div class="doc">
						<div class="doc_content">
							<div class="year_content">
								<strong>
									<?php
									echo '<span style="font-size: 22px">' . $foo[4] . '</span>';
									echo '<div class="card_text"><p>';
									echo substr($foo[5], 0, 770);
									echo '</p></div>';
									?>
								</strong>
								<br>
								<br>

								<div class="arr1">
									<div class="spoiler close">
										<div class="spoiler_title s_title">
											<?php echo '<p><b>Авторы: </b><br><i>'  . $foo[1] . '</i></p>'; ?>
											<?php
											$result = mysqli_query($connect,  "SELECT * FROM `conf` WHERE id_conf='1'");
											$result = mysqli_fetch_all($result);
											foreach ($result as $result) {
												echo '<p><b>Конференция:</b><br><i> ' . $result[1] . '</i></p>';
											} ?>
										</div>
									</div>
								</div>
								<?php
								$id = $_GET['id'];
								$foo = mysqli_query($connect,  "SELECT * FROM `report` WHERE `id`='$id'");
								$foo = mysqli_fetch_all($foo);
								foreach ($foo as $foo) {

									echo '<div class="card_text"><p>';
									echo substr(nl2br("{$foo[5]}"), 772, null);
									echo '</p></div>';
								}

								?>
							</div>
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