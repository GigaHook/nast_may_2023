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
        <a href="activity.php" class="nav-link text-light text-decoration-underline">Деятельность</a>
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
    <h1 class="text-center ">Деятельность</h1>
    <div class="row justify-content-center">

      <img src="assets/images/activity1.jpg" class="col-2 mb-3">
      <div class="col-10 mb-3">
        <h5>ПОСТИНТЕРНАТНОЕ СОПРОВОЖДЕНИЕ ВЫПУСКНИКОВ</h5>
        ПОБЕДИЛИ ВО ВСЕРОССИЙСКОМ КОНКУРСЕ! С 05.07.2022г. по 31.08.2022г. проходил Всероссийский конкурс «Вперед к знаниям» для выпускников 9, 11 классов, организованный Всероссийской общественной организацией «Содружество выпускников детских домов «Дети всей страны». В нем приняли участие воспитанники КГКУ «Канский детский дом им. Ю.А.Гагарина». Они подготовили видеоэссе «Что наша жизнь? Игра!» и «Дорогу осилит идущий», в которых представили обстоятельства, повлиявшие на их решение о выборе профессии, ожидания от будущей трудовой деятельности, карьерные амбиции. Оба участника стали победителями конкурса.
      </div>

      <img src="assets/images/activity2.jpg" class="col-2 mb-3">
      <div class="col-10 mb-3">
        <h5>ПИЛОТНАЯ ПЛОЩАДКА</h5>
        В честь дня рождения любимого города Канска воспитанники КГКУ «Канский детский дом им. Ю.А. Гагарина» в содружестве с КГБПОУ «Канский техникум отраслевых технологий и сельского хозяйства» в городском парке 03.09.2022г. приняли активное участие в организации и проведении мастер-класса по гончарному делу. На площадке этой профессиональной образовательной организации Диана К., Валерий Л. и Владислав Н., занявшие призовые места в региональном чемпионате профессионального мастерства среди людей с ограниченными возможностями здоровья «Абилимпикс», обучали всех желающих изготовлению кувшинов, чашек и кружек из глины. Гости праздника с увлечением работали на гончарном круге, создавая настоящие шедевры, которые потом получали в дар на память.
      </div>

      <img src="assets/images/activity3.jpg" class="col-2 mb-3">
      <div class="col-10 mb-3">
        <h5>СПОРТ! СПОРТ! СПОРТ!</h5>
        В преддверии Дня Физкультурника в ДОЛ «Гагаринец» приехали гости, сотрудники МО МВД «Канский», чтобы провести с ребятами спортивные мероприятия. Программа включала в себя футбольный матч «Динамо» — «Гагаринец», турнир по настольному теннису, и «Весёлые старты». А началось всё с дружной спортивной разминки на свежем воздухе. Гагаринцы и полицейские быстро нашли общий язык, ведь физкультура и спорт объединяют все поколения. Участники мероприятия надолго запомнят головокружительные эстафеты и прикольные конкурсы «Весёлых стартов», нешуточные, но равные футбольные баталии, эмоции болельщиков, теннисные поединки. В пылу спортивной борьбы, и ребята, и взрослые стали единой большой командой, доказывающей, что «В здоровом теле – здоровый дух»!
      </div>

      <img src="assets/images/activity4.png" class="col-2 mb-3">
      <div class="col-10 mb-3">
        <h5>НАУЧНО-ВНЕДРЕНЧЕСКАЯ ПЛОЩАДКА</h5>
        На базе детского дома совместно с краевым государственным педагогическим университетом им. В.П. Астафьева создана и действует научно-внедренческая площадка по реализации проекта «Ранняя профессионализация детей в контексте постинтернатного сопровождения: от дошкольника до выпускника» . Проект реализуется под руководством директора института психолого-педагогического образования КГПИ им.В.П.Астафьева, кандидата педагогических наук, доцента Н.А.Старосветской и директора детского дома, кандидата педагогических наук, Почетного работника общего образования РФ, Заслуженного педагога Красноярского края А.Г.Свириденко при поддержке учредителя Министерства образования Красноярского края
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