<?php

if (!isset($_SESSION)) session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Канский детский дом им. Ю.А. Гагарина</title>
</head>
<body>
  <img src="assets/images/logo.jpg" class="logo">
  <header class="text-center">
    <h1>Канский детский дом им. Ю.А. Гагарина</h1>
    <h5 class="mb-2">Краевое государственное образовательное учреждение для детей-сирот, оставшихся без попечения родителей</h5>
    <ul class="nav justify-content-center bg-primary">

      <li class="nav-item">
        <a href="index.php" class="nav-link text-light">Главная</a>
      </li>

      <li class="nav-item">
        <a href="history.php" class="nav-link text-light">История</a>
      </li>

      <li class="nav-item">
        <a href="activity.php" class="nav-link text-light">Деятельность</a>
      </li>
      
      <li class="nav-item">
        <a href="achievements.php" class="nav-link text-light">Достижения</a>
      </li>

      <li class="nav-item">
        <a href="graduate.php" class="nav-link text-light text-decoration-underline">Выпускнику</a>
      </li>

      <li class="nav-item">
        <a href="contacts.php" class="nav-link text-light">Контакты</a>
      </li>

      <? if (isset($_SESSION['email'])): ?>
        <li class="nav-item">
          <a href="admin.php" class="nav-link text-light">Админ-панель</a>
        </li>
      <? endif; ?>

    </ul>
  </header>

  <main class="container">
    <h1 class="text-center">Выпускнику</h1>
    <div class="row justify-content-center">

      <img src="assets/images/graduate1.png" class="col-2 mb-3">
      <div class="col-10 mb-3">
        <h5>МЕРЫ СОЦИАЛЬНОЙ ПОДДЕРЖКИ</h5>
        В соответствии с действующим законодательством выпускникам учреждения предоставляются следующие меры социальной поддержки: <br>
        — получение профессионального образования; <br>
        — зачисление на курсы по подготовке к поступлению в учреждения среднего и высшего профессионального образования без взимания платы за обучение; <br>
        — предоставление места в общежитии без взимания платы за проживание;
      </div>

      <img src="assets/images/graduate2.jpg" class="col-2 mb-3">
      <div class="col-10 mb-3">
        <h5>НОВОСТИ</h5>
        С 05.07.2022г. по 31.08.2022г. проходил Всероссийский конкурс «Вперед к знаниям» для выпускников 9, 11 классов, организованный Всероссийской общественной организацией «Содружество выпускников детских домов «Дети всей страны». В нем приняли участие воспитанники КГКУ «Канский детский дом им. Ю.А.Гагарина». Они подготовили видеоэссе «Что наша жизнь? Игра!» и «Дорогу осилит идущий», в которых представили обстоятельства, повлиявшие на их решение о выборе профессии, ожидания от будущей трудовой деятельности, карьерные амбиции. Оба участника стали победителями конкурса.
      </div>
      
      <div class="col-2"></div>
      <div class="col-10 align-self-end mb-3">
        <h5>ПОЛЕЗНЫЕ САЙТЫ</h5>
        http://www.proftime.edu.ru — «Время выбирать профессию, место – Россия», http://засобой.рф — «Всероссийская программа по развитию системы ранней профориентации «Zасобой», <br>
        http://corp.megafon.ru — уникальное электронное приложение для детей-сирот и детей, оставшихся без попечения родителей выпустил федеральный оператор связи «МегаФон» в сотрудничестве с благотворительным фондом «Дети наши» — «Гид по жизни».
      </div>

      <img src="assets/images/graduate3.jpeg" class="col-2 mb-3">
      <div class="col-10 mb-3">
        <h5>КОНСУЛЬТАЦИЯ СПЕЦИАЛИСТОВ</h5>
        Свидетельство о рождении — первый документ, которым мы обзаводимся в самом начале нашего жизненного пути. Оно сопровождает каждого из нас от рождения до смерти и должно быть на руках всю нашу сознательную жизнь. Свидетельство о рождении является основным документом несовершеннолетнего ребенка до получения им паспорта гражданина России. Но даже после достижения четырнадцатилетнего возраста свидетельство о рождении необходимо будет бережно хранить, так как оно может понадобиться при оформлении юридических сделок различного рода.
      </div>

      <div class="col-2"></div>
      <div class="col-10 mb-3">
        <h5>ПРОФЕССИОГРАММЫ</h5>
        Пекарь <a href="assets/links/download1.pptx" download>Скачать</a><br>
        Повар, кондитер <a href="assets/links/download2.pptx" download>Скачать</a><br>
        Мастер отделочных строительных работ <a href="assets/links/download3.pptx" download>Скачать</a><br>
        Парикмахер <a href="assets/links/download4.pptx" download>Скачать</a><br>
        Юрист <a href="assets/links/download5.pptx" download>Скачать</a><br>
        Каменщик <a href="assets/links/download6.pptx" download>Скачать</a><br>
      </div>

    </div>
  </main>

  <footer class="mt-2 p-1 bg-primary w-100">
    <div class="container">
      <div class="row text-center text-light">
        <div class="col-3">
          Канский детский дом <br>
          им. Ю.А. Гагарина <br>
          <a href="admin.php" class="text-light">Страница администратора</a>
        </div>
        <div class="col-3">
          8 (39161) 3 21 76 <br>
          8 (39161) 3 55 20
        </div>
        <div class="col-3">
          kansk.gagarin@yandex.ru
        </div>
        <div class="col-3">
          г.Канск Красноярского края, ул.Куйбышева, д.5
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>