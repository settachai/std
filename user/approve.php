<?
include "sessionuser.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?
include "../include/connect.php";
$sql = "update send_detail set approve ='$_GET[approve]' where send_id='$_GET[send_id]' and user_id = '$_SESSION[sess_id]' ";
mysql_query("set names tis620");
$result = mysql_query($sql);  
if($result)
{

echo "<script>setTimeout(\"location='user_show_book_in.php?send_id=$_GET[send_id]'\",500);</script>";
}else{

  echo "<script>setTimeout(\"location='user_show_book_in.php?send_id=$_GET[send_id]'\",500);</script>";
}
?>
</body>
</html>
