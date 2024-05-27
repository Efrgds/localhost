<?php
session_start();
if ($_SESSION['role'] != '1') {
  header('Location: auth.php');
}
?>

<?php
require_once("dbconnect.php");
mysqli_query($connect, "SET NAMES UTF8");
$id = $_GET['id'];
$query = "SELECT * FROM `report` WHERE `id` = '$id'";
$result = mysqli_query($connect, $query);
$result = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Редактор материалов</title>
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
              <span style="font-size: 38px">РЕДАКТОР МАТЕРИАЛОВ</span>
            </strong>​​​​​​​<br>
          </p> 
        </div>
        <a href="red_arh.php" class="nazad">
          <img src="image/icons8-назад-50.png" alt="Назад" width="35" height="35">
        </a>
        <div class="class">
          <div class="spoiler_title1 s_title">
            <div class="form">
              <form method='POST' action="update1.php">
                <input type="hidden" name="id" value="<?= $result['id'] ?>">

                <p><label class="label"><img src="image/icons8-имя-50.png" width="50%"></label>
                <input type="text" class="input_update" name="player" value="<?= $result['player'] ?>">
                </p>
                <p><label class="label"><img src="image/icons8-имя-50.png" width="50%"></label>
                <input type="text" class="input_update" name="player2" value="<?= $result['player2'] ?>">
                </p>
                <p><label class="label"><img src="image/icons8-имя-50.png" width="50%"></label>
                <input type="text" class="input_update" name="player3" value="<?= $result['player3'] ?>">
                </p>
                <p><label class="label"><img src="image/icons8-тема-50.png" width="50%"></label>
                <input type="text" class="input_update" name="title" value="<?= $result['title'] ?>">

                <textarea type="text" class="input_update" name="text" value=""><?= $result['text'] ?></textarea>


                <input class="submitt" name="submit" type="submit" value='Заменить данные'>

              </form>
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