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
  <title>Архив материалов</title>
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
                <form action="search.php" method="get">
                  <input type="search" class="text-input" placeholder="Поиск.." name="query">
                  <button type="submit"><img class="input_img" src="image/icons8-поиск-50.png" width="30px"></button>

                </form>
              </li>

              <br>
              <li class="year"><a href="#">2023</a></li>
              <li class="year"><a href="#">2022</a></li>
              <li class="year"><a href="#">2021</a></li>
              <li class="year"><a href="#">2020</a></li>

            </ul>
          </div><br><br>
          <hr />
          <div class="year_content">
            <strong>
              <?php
              $result = mysqli_query($connect,  "SELECT * FROM `conf` WHERE id_conf='1'");
              $result = mysqli_fetch_all($result);
              foreach ($result as $result) {
                echo '<span style="font-size: 22px">' . $result[1] . '</span>';
              } ?>
            </strong>
            <br>
            <div class="year_pdf"></div>
            <a class="year_pdf_download" href="directory/article/article.pdf" download="">Скачать полную электронную версию</a>
          </div>

          <p>Дата проведения: <b> <?php echo "$result[2]" ?></b></p>
          <p>Место проведения: <b> <?php echo "$result[3]" ?></b></p>
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
        <div class="sod"><b>Содержание конференции</b>
          <ol>
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

        <div class="cards">
          <div class="grid">
            <div class="card">
              <a href="doc.php?id=1">
                <div class="card_content">
                  <?php
                  $foo = mysqli_query($connect,  "SELECT * FROM `report` WHERE id='1'");
                  $foo = mysqli_fetch_all($foo);
                  foreach ($foo as $foo) {
                    echo '<div class="card_pi">
                            <div class="card_pia">
                              <div class="card_p1">' . $foo[1] . '</div>
                              <hr>
                              <div class="card_p4">' . $foo[4] . '</div>
                          </div>
                        </div>';
                  } ?>
                </div>
              </a>
            </div>
            <div class="card">
            <a href="doc.php?id=6">
                <div class="card_content">
                  <?php
                  $foo = mysqli_query($connect,  "SELECT * FROM `report` WHERE id='6'");
                  $foo = mysqli_fetch_all($foo);
                  foreach ($foo as $foo) {
                    echo '<div class="card_pi">
                            <div class="card_pia">
                              <div class="card_p1">' . $foo[1] . '</div>
                              <hr>
                              <div class="card_p4">' . $foo[4] . '</div>
                          </div>
                        </div>';
                  } ?>
                </div>
              </a>
            </div>
            <div class="card">
            <a href="doc.php?id=11">
                <div class="card_content">
                  <?php

                  $foo = mysqli_query($connect,  "SELECT * FROM `report` WHERE id='11'");
                  $foo = mysqli_fetch_all($foo);
                  foreach ($foo as $foo) {
                    echo '<div class="card_pi">
                            <div class="card_pia">
                              <div class="card_p1">' . $foo[1] . '</div>
                              <hr>
                              <div class="card_p4">' . $foo[4] . '</div>
                          </div>
                        </div>';
                  } ?>
                </div>
              </a>
            </div>
            <div class="card">
            <a href="doc.php?id=2">
                <div class="card_content">
                  <?php

                  $foo = mysqli_query($connect,  "SELECT * FROM `report` WHERE id='2'");
                  $foo = mysqli_fetch_all($foo);
                  foreach ($foo as $foo) {
                    echo '<div class="card_pi">
                            <div class="card_pia">
                              <div class="card_p1">' . $foo[1] . '</div>
                              <hr>
                              <div class="card_p4">' . $foo[4] . '</div>
                          </div>
                        </div>';
                  } ?>
                </div>
              </a>
            </div>
            <div class="card">
            <a href="doc.php?id=12">
                <div class="card_content">
                  <?php

                  $foo = mysqli_query($connect,  "SELECT * FROM `report` WHERE id='12'");
                  $foo = mysqli_fetch_all($foo);
                  foreach ($foo as $foo) {
                    echo '<div class="card_pi">
                            <div class="card_pia">
                              <div class="card_p1">' . $foo[1] .
                      '</div>
                              <hr>
                              <div class="card_p4">' . $foo[4] . '</div>
                          </div>
                        </div>';
                  } ?>
                </div>
              </a>
            </div>
            <div class="card">
            <a href="doc.php?id=4">
                <div class="card_content">
                  <?php

                  $foo = mysqli_query($connect,  "SELECT * FROM `report` WHERE id='4'");
                  $foo = mysqli_fetch_all($foo);
                  foreach ($foo as $foo) {
                    echo '<div class="card_pi">
                            <div class="card_pia">
                              <div class="card_p1">' . $foo[1] .
                      '<br>' . $foo[2] .
                      '<br>' . $foo[3] . '</div>
                              <hr>
                              <div class="card_p4">' . $foo[4] . '</div>
                          </div>
                        </div>';
                  } ?>
                </div>
              </a>
            </div>

            <div class="card">
            <a href="doc.php?id=13">
                <div class="card_content">
                  <?php

                  $foo = mysqli_query($connect,  "SELECT * FROM `report` WHERE id='13'");
                  $foo = mysqli_fetch_all($foo);
                  foreach ($foo as $foo) {
                    echo '<div class="card_pi">
                            <div class="card_pia">
                              <div class="card_p1">' . $foo[1] . '</div>
                              <hr>
                              <div class="card_p4">' . $foo[4] . '</div>
                          </div>
                        </div>';
                  } ?>
                </div>
              </a>
            </div>
            <div class="card">
            <a href="doc.php?id=7">
                <div class="card_content">
                  <?php

                  $foo = mysqli_query($connect,  "SELECT * FROM `report` WHERE id='7'");
                  $foo = mysqli_fetch_all($foo);
                  foreach ($foo as $foo) {
                    echo '<div class="card_pi">
                            <div class="card_pia">
                              <div class="card_p1">' . $foo[1] . '</div>
                              <hr>
                              <div class="card_p4">' . $foo[4] . '</div>
                          </div>
                        </div>';
                  } ?>
                </div>
              </a>
            </div>
            <div class="card">
            <a href="doc.php?id=8">
                <div class="card_content">
                  <?php
                  $foo = mysqli_query($connect,  "SELECT * FROM `report` WHERE id='8'");
                  $foo = mysqli_fetch_all($foo);
                  foreach ($foo as $foo) {
                    echo '<div class="card_pi">
                            <div class="card_pia">
                              <div class="card_p1">' . $foo[1] .
                      '<br>' . $foo[2] . '</div>
                              <hr>
                              <div class="card_p4">' . $foo[4] . '</div>
                          </div>
                        </div>';
                  } ?>
                </div>
              </a>
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