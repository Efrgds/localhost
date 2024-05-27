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
        </div>
        <div class="container_year">
          <div class="year_menu">
            <ul>
              <li>
                <form action="search.php" method="post">
                  <input type="text" class="text-input" placeholder="Поиск.." name="search-term">
                </form>
                <hr />
              </li>
              <li class="year"><a href="#">2023</a></li>
              <li class="year"><a href="#">2022</a></li>
              <li class="year"><a href="#">2021</a></li>
              <li class="year"><a href="#">2020</a></li>
            </ul>
          </div>
          <div class="year_content">
            <strong>
              <span style="font-size: 22px">Вызовы XXI века: современные направления<br> развития образовательной и воспитательной<br> деятельности в образовательных учреждениях <br>Комитета по культуре Санкт-Петербурга</span>
            </strong>
            <br>
            <br>
            <div class="year_pdf"></div>
            <a class="year_pdf_download" href="directory/article/article.pdf" download="">Скачать полную электронную версию</a>
          </div>

          <p>Дата проведения: <b>04 мая 2023г.</b></p>
          <p>По итогам&nbsp;<b>в течение 4-х дней</b>&nbsp;формируется сборник статей, размещается в Архиве конференций</p>
          </ul>
          <br>

          <div class="year_preview">
            <img class="year_img" src="image/icons8-failed-24.png">
            <a class="" href="preview.php">Информационное письмо</a>
          </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="sod">
          <ol>
            Содержание конференции
            <li> Цифровизация образования: проблемы и перспективы</li>
            <li>Советник по воспитательной работе - современное направление в воспитательной деятельности образовательных учреждений в XXI веке</li>
            <li>Метапредметность и межпредметность: педагогический потенциал в контексте образования в сфере культуры и искусства</li>
            <li>Использование современных педагогических технологий как способ реализации метапредметности и межпредметности в образовательной деятельности СПО в сфере культуры и искусства </li>
            <li> Игра как метод обучения: опыт организации
              и проведения игр по истории и культуре России
              среди учащихся образовательных учреждений,
              подведомственных Комитету по культуре Санкт-Петербурга</li>
            <li>Использование межпредметных связей
              для подготовки библиотечных мероприятий
              СПб ГБПОУ «Санкт-Петербургский техникум библиотечных
              и информационных технологий»</li>
            <li> Межпредметные связи на уроках русского языка
              и литературного чтения в начальной школе </li>
            <li>Интегративный метод обучения музыке </li>
            <li>Юридические науки </li>
            </li>
            </ul>
        </div>
        <script>
          var more = document.querySelectorAll('.more');

          for (var i = 0; i < more.length; i++) {
            more[i].addEventListener('click', function() {
              var showPerClick = 3;

              var card = this.parentNode.querySelectorAll('div.card');
              for (var i = 0; i < showPerClick; i++) {
                if (!card[i]) return this.outerHTML = "";

                card[i].classList.add('box');
                card[i].classList.remove('card');
              }
            });
          }
        </script>

        <div class="cards">
          <div class="card">
            <div class="card_content">
              Панкова Елена Валериевна
              кандидат педагогических наук, директор СПб ГБПОУ
              «Санкт-Петербургский техникум библиотечных и информационных технологий»
              Цифровизация образования: проблемы и перспективы
            </div>
          </div>

          <div class="card">
            <a href="razd2.php" class="card-link">
              <h3>Раздел<br>"Домашнее чтение"</h3>
            </a>
          </div>

          <div class="card">
            <a href="razd3.php" class="card-link">
              <h3> Раздел<br>"Критики о Достоевском"</h3>
            </a>
          </div>
          <div class="card">
            <a href="razd3.php" class="card-link">
              <h3> Раздел<br>"Критики о Достоевском"</h3>
            </a>
          </div>
          <div class="card">
            <a href="razd3.php" class="card-link">
              <h3> Раздел<br>"Критики о Достоевском"</h3>
            </a>
          </div>
          <div class="card">
            <a href="razd3.php" class="card-link">
              <h3> Раздел<br>"Критики о Достоевском"</h3>
            </a>
          </div>
          <div class="card">
            <a href="razd3.php" class="card-link">
              <h3> Раздел<br>"Критики о Достоевском"</h3>
            </a>
          </div>
          <div class="card">
            <a href="razd3.php" class="card-link">
              <h3> Раздел<br>"Критики о Достоевском"</h3>
            </a>
          </div>
          <div class="card">
            <a href="razd3.php" class="card-link">
              <h3> Раздел<br>"Критики о Достоевском"</h3>
            </a>
          </div>
          <div class="card">
            <a href="razd3.php" class="card-link">
              <h3> Раздел<br>"Критики о Достоевском"</h3>
            </a>
          </div>
          <div class="card">
            <a href="razd3.php" class="card-link">
              <h3> Раздел<br>"Критики о Достоевском"</h3>
            </a>
          </div>
          <div class="card">
            <a href="razd3.php" class="card-link">
              <h3> Раздел<br>"Критики о Достоевском"</h3>
            </a>
          </div>
          <div class="card">
            <a href="razd3.php" class="card-link">
              <h3> Раздел<br>"Критики о Достоевском"</h3>
            </a>
          </div>
          <div class="card">
            <a href="razd3.php" class="card-link">
              <h3> Раздел<br>"Критики о Достоевском"</h3>
            </a>
          </div>
          <div class="card">
            <a href="razd3.php" class="card-link">
              <h3> Раздел<br>"Критики о Достоевском"</h3>
            </a>
          </div>
          <div class="card">
            <a href="razd3.php" class="card-link">
              <h3> Раздел<br>"Критики о Достоевском"</h3>
            </a>
          </div>
          <div class="card">
            <a href="razd3.php" class="card-link">
              <h3> Раздел<br>"Критики о Достоевском"</h3>
            </a>
          </div>
        </div>
        <button class="more">Show 3</button>


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