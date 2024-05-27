<?php
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
    <title>Публикация конференции</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php echo "<link rel='stylesheet' href='css/index.css'>" ?>
    <?php echo "<link rel='stylesheet' href='css/admin.css'>" ?>
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
                            <span style="font-size:38px">ПУБЛИКАЦИЯ СТАТЕЙ </span>
                        </strong>​​​​​​​<br>
                    </p>
                </div>
                <div class="class">
						<div class="spoiler_title s_title">
							<div class="form">
								<form method='POST' class="container_AD">
									<input id="player" type="text" placeholder="Введите имя автора" name="player" required>
									<input id="title" type="text" placeholder="Введите название доклада" name="title" required>
									<input id="text1" type="text" placeholder="Введите текст доклада" name="text" required>
									<br>
									<input class="submit" name="send" type="submit" value='Внести данные'>
								</form>


						</div>
					</div>
					<?php

					require_once("dbconnect.php");
					mysqli_query($connect, "SET NAMES UTF8");
					if (isset($_POST['send'])) {
						$id = $_POST["id"];
						$player = $_POST["player"];
						$title = $_POST["title"];
						$text = $_POST["text"];

						$resalt = "INSERT INTO `report` (`id`, `player`, `title`,`text`)
						  VALUES ('$id', '$player'  ,'$title',  '$text')";
						mysqli_query($connect, $resalt) or die("Error1" . mysqli_error($connect));
						echo "<script>window.location = 'red_arh.php';</script>";
					}
					?>
					<div class="editor">
						<table class="features-table ">
							<thead>
								<tr>
									<th>ID</th>
									<th>Автор 1</th>
									<th>Автор 2</th>
									<th>Автор 3</th>
									<th>Название</th>
									<th>Текст доклада</th>
									<th>Изменить</th>
									<th>Удалить</th>

								</tr>
							</thead>

							<?php
							$foo = mysqli_query($connect,  "SELECT * FROM `report`");
							$foo = mysqli_fetch_all($foo);
							foreach ($foo as $foo) {
							?>
								<tr>
									<th><?= $foo['0'] ?></th>
									<th><?= $foo['1'] ?></th>
									<th><?= $foo['2'] ?></th>
									<th><?= $foo['3'] ?></th>
									<th><?= $foo['4'] ?></th>
									<th><?= $foo['5'] ?></th>
									<td><a href="upd1.php?id=<?= $foo[0] ?>">
											<img src="image/icons8-red.png" width="25px"></a></td>
									<td><a href="delete1.php?id=<?= $foo[0] ?>">
											<img src="image/x.png" width="25px"></a></td>
								</tr>
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