<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE> ข้อมูลงพนักงาน </TITLE>
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Description" CONTENT="">
<style type="text/css">
<!--
.style1 {font-size: 18px}
-->
</style>

</HEAD>
<?
  include "../include/connect.php";
 $sql = "select * from user , position  where user.user_id='$id' and user.position_id = position.position_id  ";
$result = mysql_query($sql);
$data = mysql_fetch_array($result);
?>
<style>
div{
	background:#33FF66;
	color:darkblue;
	font-size:15px;
	font-weight:bold;
	width:100%;

}
.span1{
	background:#FDFDFD;
	color:darkblue;
	font-size:14px;
	font-weight:bold;
	width:inherit;

}
.span2{
	/*background:linen;*/
	color:darkblue;
	font-size:14px;
	width:150;
}
</style>
<BODY>
<center>
<table width="304" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="43" colspan="2"><div class="style1">ข้อมูลพนักงาน</div></td>
  </tr>
  <tr>
    <td colspan="2" height="128"><CENTER><img src="../pic/<?=$data[user_pic]?>" width="100" height="100" border="2"></CENTER></td>
  </tr>
  <tr>
    <td width="99" height="27"><span class="span1">ชื่อ-สกุล</span></td>
    <td width="205"><span class="span2"><?=$data[user_fname]?>&nbsp;<?=$data[user_surname]?></span></td>
  </tr>
  <tr>
    <td height="27"><span class="span1">เพศ</span></td>
    <td><span class="span2"><?=$data[user_sex]?></span></td>
  </tr>
  <tr>
    <td height="25"><span class="span1">เบอร์โทร</span></td>
    <td><span class="span2"><?=$data[user_tell]?></span></td>
  </tr>
  <tr>
    <td height="24"><span class="span1">อีเมลล์</span></td>
    <td><span class="span2"><?=$data[user_email]?></span></td>
  </tr>
  <tr>
    <td height="25" valign="top"><span class="span1">ที่อยู่</span></td>
    <td valign="top"><span class="span2"><?=$data[user_address]?></span></td>
  </tr>
    <tr>
    <td height="25"><span class="span1">ตำแหน่ง</span></td>
    <td><span class="span2"><?=$data[position_name]?></span></td>
  </tr>
</table>
</center>
<BR><BR>
<center>
<input type="button" value="  ปิด  " onClick="window.close()">
</center>
</BODY>
</HTML>
