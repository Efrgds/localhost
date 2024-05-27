<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>

  <meta name="description" content="" />
  <meta name="keywords" content="" />

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Регистрация</title>
</head>
<?php echo "<link rel='stylesheet' href='css/admin.css'>" ?>

<body>

  <div class="singin">
    <div class="singin_body">
      <div class="singin_container">
        <div class="title">Регистрация</div>
        <form class="form" action="auth.php" method="post" name="form">
          <div class="auth">
            <label><img src="image/icons8-имя-50.png" width="25px"></label>
            <input class="form-styling" type="text" name="name" placeholder="Имя">
            <label><img src="image/2493513.png" width="20px"></label>
            <input class="form-styling" type="text" name="login" placeholder="Email">
            <label><img src="image/free-icon-lock-5525365.png" width="30px"></label>
            <input class="form-styling" type="text" name="password" placeholder="Пароль">
            <input class="submit" type="submit" name="submit" value="Зарегистрироваться">
          </div>
        </form>
      </div>
    </div>
  </div>





  <?php
  require_once("dbconnect.php");

  if (isset($_POST["name"])) {
    $name = $_POST["name"];
  }
  if (isset($_POST["login"])) {
    $login = $_POST["login"];
  }
  if (isset($_POST["password"])) {
    $password = md5($_POST["password"]);
  }
  if (isset($_POST["confirmpassword"])) {
    $confirmpassword = md5($_POST["confirmpassword"]);
  }


  if (isset($_POST["submit"])) {
    $submit = $_POST["submit"];
  }
  if (isset($submit)) {
    $result = mysqli_query($connect, "INSERT INTO user (login, password, role) VALUES ('$login','$password', '2')");
    if ($result) {
      echo "<script>window.location = 'auth.php';</script>";
      exit();
    }
  } else {
    echo "";
  }
  ?>
  <script>
    var myInput = document.getElementById("password");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    // Когда пользователь нажимает на поле пароля, показать окно сообщения
    myInput.onfocus = function() {
      document.getElementById("message").style.display = "block";
    }

    // Когда пользователь нажимает на за пределами поля пароля, скрыть окно сообщения
    myInput.onblur = function() {
      document.getElementById("message").style.display = "none";
    }

    // Когда пользователь начинает вводить что-то внутри поля пароля
    myInput.onkeyup = function() {
      // Проверьте строчные буквы
      var lowerCaseLetters = /[a-z]/g;
      if (myInput.value.match(lowerCaseLetters)) {
        letter.classList.remove("invalid");
        letter.classList.add("valid");
      } else {
        letter.classList.remove("valid");
        letter.classList.add("invalid");
      }

      // Проверка заглавных букв
      var upperCaseLetters = /[A-Z]/g;
      if (myInput.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
      } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
      }

      // Проверка номеров
      var numbers = /[0-9]/g;
      if (myInput.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
      } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
      }

      // Проверка длины
      if (myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
      } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
      }
    }
  </script>