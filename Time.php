<?php
 $file = fopen("image/mini_1.jpg","r");
  if(!file)
    {
      echo("Ошибка открытия файла");
    }
//логин и пароль
$login = "Не известно";
$age = "Не известно";
if (isset($_GET['login'])){ 
$login = $_GET['login'];
}
if (isset($_GET['age'])){ 
$age = $_GET['age'];
}
echo"Ваш логин: $login <br> Ваш пароль: $age <br />";

//Загрузка картинок на сервер
print_r($_FILES);

$blacklist = array(".php", ".phtml", ".php3", ".php4", ".html", ".htm");
  foreach ($blacklist as $item)
    if(preg_match("/$item\$/i", $_FILES['somename']['name'])) exit;
  $type = $_FILES['somename']['type'];
  $size = $_FILES['somename']['size'];
  if (($type != "image/jpg") && ($type != "image/jpeg")) exit;
  if ($size > 142400) exit;
  $uploadfile = "images/".$_FILES['somename']['name'];
  move_uploaded_file($_FILES['somename']['tmp_name'], $uploadfile);
?>