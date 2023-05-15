<?php

require 'db.php';

if (!isset($_SESSION)) session_start();

if (isset($_GET['logout'])) {
  session_destroy();
  header('Location: index.php');
} 

if (isset($_POST['email']) && isset($_POST['password'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  $result = mysqli_query($con, $query);
  if (!$result) die("Ошибка выполнения запроса: " . mysqli_error($con));
  if (mysqli_num_rows($result) == 1) $_SESSION['email'] = $email;
  else $error = "Неверный логин или пароль";
  mysqli_close($con);
}

if (isset($_POST['name']) && isset($_POST['text']) && isset($_FILES['image'])) {
  $name = $_POST['name'];
  $text = $_POST['text'];
  $date = date('m/d/Y h:i:s a', time());
  $image = $_FILES["image"];
  $destination = 'assets/uploads/';
  $imageName = $image["name"];
  $imageTemp = $image["tmp_name"];
  $imageDestination = $destination . time() . $imageName;
  move_uploaded_file($imageTemp, $imageDestination);
  $query = "INSERT INTO posts (name, text, image, date) VALUES ('$name', '$text', '$imageDestination', '$date')";
  $result = mysqli_query($con, $query);
  if (!$result) die("Ошибка выполнения запроса: " . mysqli_error($con));
  $added = 1;
  mysqli_close($con);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
        <a href="contacts.php" class="nav-link text-light">Контакты</a>
      </li>

      <li class="nav-item">
        <a href="admin.php" class="nav-link text-light text-decoration-underline">Админ-панель</a>
      </li>

    </ul>
  </header>

  <main class="container position-relative">
    <? if(!isset($_SESSION['email'])): ?>
      <h1 class="text-center">Войти как администратор</h1>
    <? else: ?>
      <h1 class="text-center">Добавить пост</h1>
    <? endif; ?>

    <div class="row justify-content-center">
      <? if(!isset($_SESSION['email'])): ?>
        <form method="post" class="col-6">
        
          <label for="email" class="form-label">Адрес электронной почты</label>
          <input type="email" name="email" class="form-control mb-3" required>
        
          <label for="password" class="form-label">Пароль</label>
          <input type="password" name="password" class="form-control mb-3" required>
        
          <button type="submit" class="btn btn-primary mb-3">Войти</button>
        
          <? if (isset($error)): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert"><?= $error ?></div>
            <script>
              setTimeout(function() {
                $('.alert').alert('close');
              }, 5000);
            </script>
          <? endif; ?>
        
        </form>
      <? else: ?>
        <form method="post" class="col-6" enctype="multipart/form-data">

          <label for="name" class="form-label">Заголовок поста</label>
          <input type="text" name="name" class="form-control mb-3" required>

          <label for="text" class="form-label">Содержание</label>
          <textarea rows="5" name="text" class="form-control mb-3" required></textarea>

          <label for="image" class="form-label">Изображение</label>
          <input type="file" name="image" class="form-control mb-3" required accept=".png,.jpg,.jpeg">

          <button type="submit" class="btn btn-primary mb-3">Добавить</button>

        </form>

        <? if (isset($added)): ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">Запись добавлена</div>
          <script>
            setTimeout(function() {
              $('.alert').alert('close');
            }, 5000);
          </script>
        <? endif; ?>

        <form method="GET" class="position-absolute bottom-0">
          <button type="submit" name="logout" class="btn btn-primary mb-3">Выйти</button>
        </form>
      <? endif; ?>
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