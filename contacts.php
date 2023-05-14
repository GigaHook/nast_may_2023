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
        <a href="graduate.php" class="nav-link text-light">Выпускнику</a>
      </li>

      <li class="nav-item">
        <a href="contacts.php" class="nav-link text-light text-decoration-underline">Контакты</a>
      </li>

      <? if (isset($_SESSION['email'])): ?>
        <li class="nav-item">
          <a href="admin.php" class="nav-link text-light">Админ-панель</a>
        </li>
      <? endif; ?>

    </ul>
  </header>

  <main class="container">
    <h1 class="text-center">Контакты</h1>
    <div class="row justify-content-center">

      <img src="assets/images/contacts1.jpeg" class="col-4">
      <div class="col-8 mb-3">
        Краевое государственное казенное учреждение для детей-сирот и детей, оставшихся без попечения родителей <br>
        «Канский детский дом им.Ю.А.Гагарина» <br><br>
        Адрес: 663604, г.Канск Красноярского края, ул.Куйбышева, д.5 <br>
        Телефоны: Директор, приемная – 8 (39161) 3 21 76 <br>
        Вахта спального корпуса, Центр по устройству детей в семью — 8 (39161) 3 55 20 <br>
        Электронный адрес: kansk.gagarin@yandex.ru
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