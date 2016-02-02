<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />

<title>ระบบหนังสือเวียน</title>
<link rel="stylesheet" type="text/css" href="user/menu_user.css">
<style type="text/css">
A:link {COLOR: #CC3366; TEXT-DECORATION: none} 
A:visited {COLOR: #CC3366; TEXT-DECORATION: none} 
A:hover {COLOR: #FF0000; TEXT-DECORATION: underline} 
<!--
.style2 {
	font-size: 14px;
	color: #0000FF;
}
-->
</style>
</head>
<body  bgcolor="#7F7F7F" leftmargin="0" topmargin="0" >
<br ><!-- start fieldset 3 -->
 <?
 include "include/connect.php";
$sql="select * from book , send ,send_detail , user , typebook where send.send_id = '$id' and send_detail.send_id = send.send_id and send.book_id = book.book_id and send.user_id = user.user_id and book.typebook_id = typebook.typebook_id ; ";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
?>
<table width="332" height="348" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr align="left">
    <td height="41" colspan="3" align="center"><span class="style17"><span class="style2">รายละเอียดหนังสือเวียน</span><img src="images/5_01.PNG" width="25" height="25" /></span></td>
  </tr>
  <tr>
    <td width="87" height="20" align="left"><span class="style15"></span></td>
    <td width="24" align="left">&nbsp;</td>
    <td width="213" align="left">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" align="left"><span class="style15">เรื่อง</span></td>
    <td align="left">:</td>
    <td align="left"><?=$data[subject]?></td>
  </tr>
  <tr>
    <td height="30" align="left"><span class="style15">จาก</span></td>
    <td align="left">:</td>
    <td align="left"><?= $data[user_fname].'&nbsp;&nbsp;'.$data[user_surname]?></td>
  </tr>
  <tr>
    <td height="30" align="left" ><span class="style15">ส่งเมื่อ</span></td>
    <td align="left">:</td>
    <td align="left"><?=$data[send_date].'&nbsp;&nbsp;'.$data[send_time]?></td>
  </tr>
  <tr>
    <td height="30" align="left"><span class="style15">ไฟล์แนบ</span></td>
    <td align="left">:</td>
    <td align="left"><?
$user_folder = $data[user_id];
$a = $data[send_date];
$year = substr($a, -5,-1);
$month = substr($a, 4,-6);

$file_name=$data['book_name'];
 echo "<a href=\"pdf/$user_folder/$year/$month/$file_name\" TARGET='_blank'><font color= '#OOFFOO' >	$file_name </a>" ; 
 ?> 
 </td>
  </tr>
  <tr>
    <td height="67" align="left" valign="top"><span class="style15"><br>
      รายละเอียด</span></td>
    <td align="left" valign="top"><br> :</td>
    <td align="left" valign="top"><br><?=$data[book_detail]?></td>
  </tr>
  <tr>
    <td height="30" align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="right"><img src="images/20_06.PNG" width="100" height="100" /></td>
  </tr>
</table>
<BR><BR>
<center>
<input type="button" value="  ปิด  " onClick="window.close()">
</center>
									
								<!--  END table 3 -->
		                        <br >  
			
							
</body>
</html>

