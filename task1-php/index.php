<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Основы PHP</title>
  </head>

  <body>
    <h1>Освоение PHP</h1>

    <h2>array_unique</h2>
    <?php
      $arr = array("1", "2", "1", "3");
      $result = array_unique($arr);
      print_r($result);
    ?>

    <h2>foreach</h2>
    <?php
      $arr = array("a", "b", "c");
      foreach ($arr as $key => $value) {
        echo $key . " - " . $value . "<br>";
      }
    ?>

    <h2>Global variables</h2>
    <?php
      $number = 123;

      function foo() {
        $number = 10;
        echo $number . "<br>" . $GLOBALS['number'] . "<br>";
      }

      foo();
    ?>

    <h2>Классы, пространства имён и прочее</h2>
    <form id="testForm" method="post">
      <input type="text" name="firstname" placeholder="Имя"><br>
      <input type="text" name="secondname" placeholder="Фамилия"><br>
      <input type="submit" name="submit" value="Кнопка 'Отправить'"><br>
    </form>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
