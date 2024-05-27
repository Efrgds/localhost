<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>

  <meta name="description" content="" />
  <meta name="keywords" content="" />

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Авторизация</title>
</head>
<?php echo "<link rel='stylesheet' href='css/player.css'>" ?>

<body>

  <div class="singin">
    <div class="singin_body">
      <div class="singin_container">
        <div class="title">Авторизация</div>
        <form class="form" action="auth.php" method="post" name="form">
          <div class="auth">
            <label><img src="image/2493513.png" width="30px"></label>
            <input class="form-styling" type="text" name="login" placeholder="Email">
            <label><img src="image/free-icon-lock-5525365.png" width="30px"></label>
            <div class="password">
              <input type="password" id="password-input" placeholder="Введите пароль" name="password">
            </div>
          </div>
          <input class="submit" type="submit" name="submit" value="Войти">
      </div>

      <?php
      require_once("dbconnect.php");
      mysqli_query($connect, "SET NAMES UTF8");
      if (isset($_POST["login"])) {
        $login = $_POST["login"];
      }
      if (isset($_POST["password"])) {
        $password = md5($_POST["password"]);
      }
      if (isset($_POST["submit"])) {
        $submit = $_POST["submit"];
      }
      if (isset($submit)) {
        $result = mysqli_query($connect, "SELECT * FROM user WHERE login = '$login' AND password = '$password'");
        if (mysqli_num_rows($result) < 1) {
          echo "";
        } else {
          while ($v = mysqli_fetch_array($result)) {
            $role = $v['role'];
          }
          $_SESSION['login'] = $login;
          $_SESSION['password'] = $password;
          $_SESSION['role'] = $role;
          $_SESSION['success'] = "";
          echo "Авторизация прошла успешно!<script>window.location = 'red_arh.php';</script>";
        }
      } else {
        echo "";
      } ?>
      </form>
    </div>
  </div>
  </div>
</body>

</html>