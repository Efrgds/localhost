<!DOCTYPE html>
<html lang="ru">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" media="screen,projection" href="/css/ui.totop.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css" />
  <title>Архив конференций | Discuss</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <?php echo "<link rel='stylesheet' href='css/preview.css'>" ?>

</head>

<body>
  <div class="row">
    <div class="col-4">
      <?php require_once("header.php"); ?>
      </nav>
    </div>
    <div class="col-8">
      <div class="content">


        <!--
        <h2>Архив конференций</h2>
        Название конференции<input type="text" id="text-to-find" value=""><br>
        <input type="button" onclick="javascript: FindOnPage('text-to-find'); return false;" value="Искать" />
        <br /><i>Введите слово или фразу для поиска.</i>
        <center>
          <h3>Информатика
          </h3>
          <embed src="https://www.influenza.spb.ru/files/File/grippAH1N1.pdf" width="600px" height="600px" />
          <h3>Математика </h3>
          <embed src="https://www.influenza.spb.ru/files/File/ingaron.pdf" width="600px" height="600px" />
          <h3>Проектная деят</h3>
          <embed src="https://www.influenza.spb.ru/files/File/metodptichgripp.pdf" width="600px" height="600px" />
          <h3>письмо </h3>
          <embed src="https://www.influenza.spb.ru/files/File/pokkletmet.pdf" width="600px" height="600px" />
          <h3>по материалам </h3>
          <embed src="https://www.influenza.spb.ru/files/File/usnaszagrippom.pdf" width="600px" height="600px" />
        </center>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    var lastResFind = "";
    var copy_page = "";

    function TrimStr(s) {
      s = s.replace(/^\s+/g, '');
      return s.replace(/\s+$/g, '');
    }

    function FindOnPage(inputId) {
      var obj = window.document.getElementById(inputId);
      var textToFind;
      if (obj) {
        textToFind = TrimStr(obj.value);
      } else {
        alert("Введенная фраза не найдена");
        return;
      }
      if (textToFind == "") {
        alert("Вы ничего не ввели");
        return;
      }
      if (document.body.innerHTML.indexOf(textToFind) == "-1")
        alert("Ничего не найдено, проверьте правильность ввода!");
      if (copy_page.length > 0)
        document.body.innerHTML = copy_page;
      else copy_page = document.body.innerHTML;
      document.body.innerHTML = document.body.innerHTML.replace(eval("/name=" + lastResFind + "/gi"), " ");
      document.body.innerHTML = document.body.innerHTML.replace(eval("/" + textToFind + "/gi"), "<a name=" + textToFind + " style='background:red'>" + textToFind + "</a>");
      lastResFind = textToFind;
      window.location = '#' + textToFind;
    }
  </script>-->



</body>

</html>