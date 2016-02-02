<?
include "sessionuser.php";
 include "../include/connect.php";

for($i=0;$i<count($_POST["chkDel"]);$i++)
	{
		if($_POST["chkDel"][$i] != "")
		{
			$strSQL = "DELETE FROM send_detail ";
			$strSQL .="WHERE send_id = '".$_POST["chkDel"][$i]."' and user_id = '$sess_id'  ";
			$objQuery = mysql_query($strSQL);
		}
	}

echo "<script>setTimeout(\"location='user_book_in.php'\",100);</script>";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>ระบบหนังสือเวียน</title>
</head>
<body  >
</body>
</html>