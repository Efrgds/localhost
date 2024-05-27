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
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php echo "<link rel='stylesheet' href='css/index.css'>" ?>
	<?php echo "<link rel='stylesheet' href='css/article.css'>" ?>
	<?php echo "<link rel='stylesheet' href='css/preview.css'>" ?>


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
							<span style="font-size: 38px">АРХИВ МАТЕРИАЛОВ</span>
						</strong>​​​​​​​<br>
					</p>
					<div class="container_year">
						<div class="year_menu">
							<ul>
								<li>

									<form name="search" method="post" action="search.php">
										<input type="search" class="text-input" name="query" placeholder="Поиск">
										<button type="submit"><img class="input_img" src="image/icons8-поиск-50.png" width="30px"></button>
									</form>

								</li>

								<br>
								<li class="year"><a href="archive.php">2023</a></li>
								<li class="year"><a href="#">2022</a></li>
								<li class="year"><a href="#">2021</a></li>
								<li class="year"><a href="#">2020</a></li>

							</ul>
						</div><br><br>
						<hr />
						<div class="year_content">
							<div class="cards">
								<div class="grid">
									<div class="card">
										<a href="doc.php?id=<?= $row[0] ?>">
											<div class="card_content">
												<?php
												$search =  $_GET["query"];
												$result = mysqli_query($connect,  "SELECT `player`, `player2`, `player3`, `title` 
											FROM `report` 
											WHERE (`player` LIKE '%$search%' 
											   OR `player2` LIKE '%$search%' 
												OR `player3` LIKE '%$search%' 
												OR `title` LIKE '%$search%')");
												$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

												foreach ($rows as $row) {
													echo '<div class="card_pi">
                                         <div class="card_pia">
                                             <div class="card_p1">' . $row['player'] . '</div>
                                             <hr>
                                             <div class="card_p4">' . $row['title'] . '</div>
                                         </div>
                                       </div><br><br>';
												}
												?>
											</div>
										</a>
									</div>
								</div>
							</div>

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
</body>

</html>