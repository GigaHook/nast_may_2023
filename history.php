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
        <a href="history.php" class="nav-link text-light text-decoration-underline">История</a>
      </li>

      <li class="nav-item">
        <a href="activity.php" class="nav-link text-light">Деятельность</a>
      </li>
      
      <li class="nav-item">
        <a href="achievements.php" class="nav-link text-light">Достижения</a>
      </li>

      <li class="nav-item">
        <a href="graduate.php" class="nav-link text-light">Выпускнику</a>
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
    <h1 class="text-center">История</h1>
    <div class="row justify-content-center">

      <ul>
        <li>Галерея успешных выпускников</li>
        <li>Детскому дому 66 лет</li>
        <li>Музей</li>
        <li>Наши традиции</li>
      </ul>

      <img src="assets/images/history1.png" class="col-2 mb-3">
      <div class="col-10 mb-3">
        <h5>НЕУМЕРЖИЦКИЙ ВАЛЕНТИН ТАРАСОВИЧ</h5>
        Выпускник школы-интерната 1962 года. Учился Валентин прилежно, в классных журналах только отличные и хорошие оценки. Особенно нравились школьные предметы математика и физика. Активно занимался разными видами спорта, общественной работой, был избран  секретарем комсомольской организации. Увлекался авиацией, благодаря своей настойчивости стал инструктором по парашютному спорту. В 1962–1963 гг. служил в спортивном клубе в городе  Хабаровске Дальневосточного военного округа. Мастер спорта по вольной борьбе. В 1967 году окончил Высшее военно-авиационное училище и стал инструктором, готовил военных летчиков. В 1970 году прошел отборочную комиссию в отряд космонавтов, но по не зависящим от него причинам в отряд зачислен не был. В 1973 году принимал участие в арабо-израильской войне. Награжден правительством Сирии орденом «За боевые заслуги», правительством России – орденом «Воин-интернационалист».
      </div>

      <img src="assets/images/history2.png" class="col-2 mb-3">
      <div class="col-10 mb-3">
        <h5>САМКОВ АНАТОЛИЙ ПЕТРОВИЧ</h5>
        Выпускник школы-интерната 1964 года. В школьные годы посещал авиамодельный  кружок, конструировал летающие планеры. Участвовал в художественной самодеятельности  (танцевальный и театральный кружки). Активно занимался спортом, входил в сборные команды по футболу, баскетболу, настольному теннису. Окончил школу-интернат с золотой медалью, механический факультет Красноярского политехнического института с дипломом с отличием. Далее был призван на военную службу в ряды СА. Окончил Высшие курсы КГБ СССР и продолжил службу в органах государственной безопасности (КГБ и ФСБ).
      </div>

      <img src="assets/images/history3.jpg" class="col-2 mb-3">
      <div class="col-10 mb-3">
        <h5>Детскому дому 66 лет</h5>
        В 1956 году в городе Канске, в числе первых трех в Красноярском крае, открылось совершенно новое для того времени учебно-воспитательное учреждение – школа-интернат, которая была создана решением Правительства страны (Постановлением Совета Министров РСФСР №508 от 26 июля 1956 года) для детей-сирот, детей из многодетных семей, детей одиноких матерей, словом, для тех детей, кому нужна была неотложная государственная помощь
      </div>

      <img src="assets/images/history4.png" class="col-2 mb-3">
      <div class="col-10 mb-3">
        <h5>Музей</h5>
        Достойное место в музее заняли воспоминания о боевом пути, письма ветеранов Великой Отечественной войны, материалы встреч воспитанников с ветеранами 382-й стрелковой дивизии и 510 гаубичного полка, собранные группой «Поиск»в 70-80-ых годах прошлого века. Группу «Поиск» создала Голубь Алевтина Васильевна – учитель начальных классов Канской школы — интерната им. Ю.А. Гагарина, участник Великой Отечественной войны, Отличник просвещения РСРФСР, Ветеран детского дома.
      </div>

      <img src="assets/images/history5.jpg" class="col-2 mb-3">
      <div class="col-10 mb-3">
        <h5>Наши традиции</h5>
        Коллектив педагогов и воспитанников детского дома продолжает традиции, заложенные поколениями гагаринцев, бережно относится к своей истории, с гордостью несёт имя первого космонавта планеты — Юрия Алексеевича Гагарина, и подтверждает это своими делами, успехами и достижениями. 
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