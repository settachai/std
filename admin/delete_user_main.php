<?
include "session.php";
include "../include/connect.php";
$sql="delete from user where user_id='$_GET[user_id]' ";
$result=mysql_query($sql);
if($result)
{
echo "<script>setTimeout(\"location='view_user.php'\",100);</script>";
}
else
{
echo "<B><CENTER>ลบข้อมูลไม่ได้</CENTER></B>";
echo "<script>setTimeout(\"location='view_user.php'\",100);</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>ระบบหนังสือเวียน</title>
</head>
<body >
</body>
</html>