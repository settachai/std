<?
     header("content-type: application/x-javascript; charset=tis-620");
?>
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
  $id=$wb_id;
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
<table width="246" border="0" cellspacing="0" cellpadding="0">
  <tr align="left" bgcolor="#00CCFF">
    <td height="25" colspan="3"><div class="style1">ข้อมูลพนักงาน</div></td>
  </tr>
  <tr align="left">
    <td height="128" colspan="3"><CENTER><img src="../pic/<?=$data[user_pic]?>" width="100" height="100" border="2"></CENTER></td>
  </tr>
  <tr>
    <td width="33" align="left">&nbsp;</td>
    <td width="80" height="27" align="left"><span class="span1">ชื่อ-สกุล</span></td>
    <td width="179" align="left"><span class="span2"><?=$data[user_fname]?>&nbsp;<?=$data[user_surname]?></span></td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td height="27" align="left"><span class="span1">เพศ</span></td>
    <td align="left"><span class="span2"><?=$data[user_sex]?></span></td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td height="25" align="left"><span class="span1">เบอร์โทร</span></td>
    <td align="left"><span class="span2"><?=$data[user_tell]?></span></td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td height="24" align="left"><span class="span1">อีเมลล์</span></td>
    <td align="left"><span class="span2"><?=$data[user_email]?></span></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td height="25" align="left" valign="top"><span class="span1">ที่อยู่</span></td>
    <td align="left" valign="top"><span class="span2"><?=$data[user_address]?></span></td>
  </tr>
    <tr>
      <td align="left">&nbsp;</td>
    <td height="25" align="left"><span class="span1">ตำแหน่ง</span></td>
    <td align="left"><span class="span2"><?=$data[position_detail]?></span></td>
  </tr>
</table>
</center>
</BODY>
</HTML>

<?
/*
     //ค่าที่รับมา
     $module=$_POST["module"];
     $category=$_POST["category"];
     $wb_id=$_POST["wb_id"];
     
     echo "ข้อมูลที่ส่งมา<br />";
     echo "module=$module<br />";
     echo "category=$category<br />";
     echo "wb_id=$wb_id<br />";
     echo "เอาไป query แล้วมาแสดงผลที่หน้า getdata.php"
     

	 */
     //W3C Pass
?>