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
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <?php echo "<link rel='stylesheet' href='css/index.css'>" ?>
  <?php echo "<link rel='stylesheet' href='css/player.css'>" ?>
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
              <span style="font-size: 38px">УЧАСТНИКИ КОНФЕРЕНЦИИ</span>
            </strong>​​​​​​​<br>
          </p>
        </div>

        <div class='table-wrapper'>
          <table class='features-table'>
            <thead>
              <tr>
                <th>ID</th>
                <th>ФИО</th>
                <th>Учебное заведение</th>
                <th>Должность</th>
                <th>Тема доклада</th>
                <th>Изменить</th>
                <th>Удалить</th>
              </tr>
            </thead>

            <?php require_once 'dbconnect.php';
            mysqli_query($connect, "SET NAMES UTF8");

            $result = mysqli_query($connect,  "SELECT * FROM `player`");
            $result = mysqli_fetch_all($result);
            foreach ($result as $result) {
            ?>

              <tr class='features-table'>
                <td><?= $result['0'] ?></td>
                <td><?= $result['3'] ?></td>
                <td><?= $result['4'] ?></td>
                <td><?= $result['5'] ?></td>
                <td><?= $result['6'] ?></td>
                <td><a href="ubd.php?id_player=<?= $result[0] ?>">
                    <img src="image/icons8-red.png" width="25px"></a></td>
                <td><a href="delete.php?id_player=<?= $result[0] ?>">
                    <img src="image/x.png" width="25px"></a></td>

              </tr>


            <?php
            }  ?>

            </tbody>
          </table>
        </div>
        </form>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
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






<!--Array ( 
  [0] => Array ( 
    [0] => 1 
    [1] => 
    [2] => Татьяна Вадимовна Багрий 
    [3] => СПБТБИИТ 
    [4] => техник 
    [5] => 2 
    [6] => 
    [7] => +7921764936 
    [8] => tanyabagry134543@gmail.com ) 
  [1] => Array ( 
    [0] => 5 
    [1] => 
    [2] => Иван Иванович Иванов 
    [3] => Политех 
    [4] => Профессор 
    [5] => 1 
    [6] => Вызовы XX века 
    [7] => +7926449586 [8] => iva@yandex.ru ) [2] => Array ( [0] => 6 [1] => [2] => [3] => [4] => [5] => [6] => [7] => [8] => ) [3] => Array ( [0] => 7 [1] => [2] => wqe [3] => qwe [4] => qwe [5] => [6] => qwe [7] => qwe [8] => qwe ) )