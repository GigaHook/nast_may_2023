<?php
$con = mysqli_connect("localhost", "root", "root", "orphanage");
if (!$con) {
  die("Ошибка подключения: " . mysqli_connect_error());
}