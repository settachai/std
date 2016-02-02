<?
include "sessionuser.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<script language="javascript" src="../include/time.js">
</script>
<script language="javascript" src="../include/1.js">
</script>
<title>ระบบหนังสือเวียน</title>
<link rel="stylesheet" type="text/css" href="menu_user.css">
<style type="text/css">
<!--
A:link {COLOR: #000000; TEXT-DECORATION: none} 
A:visited {COLOR: #000000; TEXT-DECORATION: none} 
A:hover {COLOR: #FF0000; TEXT-DECORATION: underline} 

.style4 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #FFFFFF;
}
.style10 {color: #000000}
.style12 {
	font-size: 13px
}
.style14 {
	font-size: 14px;
	color: #000000;
}
.style24 {
	color: #0000FF;
	font-size: 14px;
}
.style25 {font-size: 14px}
-->
</style>
</head>
<body bgcolor="#999999" leftmargin="0" topmargin="0" >
 <table width="798" height="891" border="0" cellspacing="0" align="center" CELLPADDING=0 > <!--  start table 1 -->
<tr>
    <td width="798" height="200" background="../images/head_02.jpg"></td>
   </tr>
   <tr>
	    <td width="798" height="20"  ><? include "menu_user.php"?></td>							 
   
   <tr>
		<td width="798" height="565" align="center">
<table width="801" height="565"  border="0" cellpadding="0" cellspacing="0"><!-- start table 2 -->
<tr> 
							 <th width="18" height="565" bgcolor="#DBDBDB" scope="col">&nbsp;</th>
<th width="186" align="center" valign="top" bgcolor="#DBDBDB" scope="col">   
 <table width="169" border="0">
<tr align="left">
    <td height="28" colspan="2">&nbsp;</td>
  </tr>
  <tr align="left">
    <td height="38" colspan="2"><span class="style24">Main Menu</span><br>
      <hr></td>
    </tr>
  <tr>
    <td height="25" align="right"><img src="../images/5_06.GIF" /></td>
    <td align="left"><a href="user_infor.php">แสดงข้อมูลส่วนตัว</a> </td>
  </tr>
  <tr>
    <td height="24" align="right"><img src="../images/5_06.GIF" /></td>
    <td align="left"><a href="user_edit.php">แก้ไขข้อมูลส่วนตัว</a></td>
  </tr>
   <tr>
    <td height="24" align="right"><img src="../images/5_06.GIF" /></td>
    <td align="left"><a href="user_edit_key.php">แก้ไขรหัสเปิดไฟล์</a></td>
  </tr>
 <tr>
    <td height="46" colspan="2" align="left" valign="top"><p class="style22">.</p>      </td>
    </tr>
  <tr>
    <td height="42" colspan="2" align="left" valign="top"><span class="style24">Hello User</span><br>
      <hr></td>
  </tr>
  <tr>
    <td height="33" colspan="2" align="center" valign="top">
      <? 

 include "../include/connect.php";
$sql = "select * from user , position  where user.user_id='$sess_id' and user.position_id = position.position_id  ";
mysql_query("set names tis620");
$result = mysql_query($sql);
$data = mysql_fetch_array($result);

						echo "<B>  $sess_fname&nbsp;&nbsp; $sess_surname <br><br> $data[position_detail]";
?>    </td>
  </tr>
  <tr>
    <td height="135" colspan="2" align="center" valign="middle"><img src="../pic/<?=$data[user_pic]?>" width="100" height="100" border="2" bordercolor="#FFFFFF" /></td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" valign="middle"> <a href="../logout.php" class="style23 style12"><font color="#FF0000" >ออกจากระบบ </font>  </a></td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" valign="middle">&nbsp;</td>
  </tr>
</table>				</th>
						<th width="14" bgcolor="#DBDBDB" scope="col">&nbsp;</th>
<td width="579" align="left" valign="top" bgcolor="#FFFFFF" scope="col">
							
			<br >
										<br >	<table width="536" border="0">
                                          <tr>
                                            <td width="51" align="left">&nbsp;</td>
                                            <td width="475" height="24" align="left"><span class="style25"><img src="../images/5_01.PNG" width="25" height="25" />แก้ไขข้อมูลส่วนตัว<BR /> <hr  color="#0099FF"></span></td>
                                          </tr>
                                        </table>   
										<br >
<form method=post action="user_edit_main.php" name="form1" enctype="multipart/form-data" >
 <table width="399" height="550" border="0" align="center" cellpadding="0" cellspacing="0" background="../images/codify.png">
  <tr>
    <td>&nbsp;</td>
    <td height="19" align="left">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td width="22">&nbsp;</td>
    <td width="75" height="38" align="left"><span class="style10">Username </span></td>
    <td width="10" align="center">:</td>
    <td width="292" align="left"><span class="style9">&nbsp;&nbsp;
      <input type="text" name="user_name" id="user_name" onChange="checkuser()" style ="width:150px;" value="<?=$data[user_name]?>">  &nbsp;&nbsp;<span class="style10">(ไม่ตำ่กว่า 5 อักษร)</span></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="31" align="left"><span class="style10">Password </span></td>
    <td align="center">:</td>
    <td align="left"><span class="style9">&nbsp;&nbsp;
      <input type="password" name="user_password" id="user_password" onChange="checkpass()"style ="width:150px;" value="<?=$data[user_password]?>">  &nbsp;&nbsp;<span class="style10">(ไม่ตำ่กว่า 5 อักษร)</span></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="33" align="left"><span class="style10">ชื่อ </span></td>
    <td align="center">:</td>
    <td align="left"><span class="style9">&nbsp;&nbsp;
      <input type="text" name="user_fname"  id="user_fname" onKeyPress="checktext()" style ="width:150px;" value="<?=$data[user_fname]?>"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="30" align="left"><span class="style10">นามสกุล </span></td>
    <td align="center">:</td>
    <td align="left"><span class="style9">&nbsp;&nbsp;
      <input type="text" name="user_surname" id="surname" onKeyPress="checktext()" style ="width:150px;" value="<?=$data[user_surname]?>"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="31" align="left"><span class="style10">เลขประชาชน </span></td>
    <td align="center">:</td>
    <td align="left"><span class="style9">&nbsp;&nbsp;
      <input type="text" name="id_card" id="id_card" onKeyPress="checknum()" maxlength="13" onChange="checkid_card()" style ="width:150px;" value="<?=$data[id_card]?>"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="79" align="left"><span class="style10">ที่อยู่ </span></td>
    <td align="center">: </td>
    <td align="left"><span class="style9">&nbsp;&nbsp;
      <textarea name="user_address" rows="4" cols="3" style ="width:200px;" ><?=$data[user_address]?></textarea>
    </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="32" align="left"><span class="style10">เบอร์โทร</span></td>
    <td align="center"> :</td>
    <td align="left"><span class="style9">&nbsp;&nbsp;
      <input type="text" name="user_tell" onKeyPress="checknum()" maxlength="10" onChange="checktell()" style ="width:150px;" value="<?=$data[user_tell]?>"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="33" align="left"><span class="style10">E-Mail </span></td>
    <td align="center">:</td>
    <td align="left"><span class="style9">&nbsp;&nbsp;
      <input type="text" name="user_email" id="user_email" onChange="checkmail()" style ="width:150px;" value="<?=$data[user_email]?>"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="28" align="left"><span class="style10">เพศ </span></td>
    <td align="center">:</td>
    <td align="left">
	<?
$value=$data[user_sex];
if ($value=="ชาย"){
	?>
   <span class="style9">&nbsp;&nbsp;
   <INPUT TYPE="radio" NAME="user_sex" value="ชาย" checked>
        <span class="style10">ชาย</span>&nbsp;&nbsp;
        <INPUT TYPE="radio" NAME="user_sex" value="หญิง">
        <span class="style10">หญิง</span></span>
		<?
	  }else{
			?>
		  <span class="style9">&nbsp;&nbsp;<INPUT TYPE="radio" NAME="user_sex" value="ชาย" >
        <span class="style10">ชาย</span>&nbsp;&nbsp;
        <INPUT TYPE="radio" NAME="user_sex" value="หญิง" checked>
        <span class="style10">หญิง</span></span>
			<?
	}
		?>		</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="30" align="left"><span class="style10">ตำแหน่ง </span></td>
    <td align="center">:</td>
    <td align="left">&nbsp;&nbsp;<?=$data[position_detail]?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="37" align="left"><span class="style10">รปูภาพ </span></td>
    <td align="center">:</td>
    <td align="left"><span class="style9">&nbsp;&nbsp;
      <input name="pic" type="file" style ="width:235px;"  /></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="33" align="left">&nbsp;</td>
    <td align="center"></td>
    <td align="left">&nbsp;&nbsp;
      <input type="hidden" name="user_id" value="<?=$_GET[user_id]?>"><input type="button" value= "OK"  onClick="checkeditmember()"style = "width:80;" >&nbsp;&nbsp;<input type="reset" value="เคลียร์"></td>
  </tr>
</table>
</form>			  <!--  END table 3 -->
                                        <br >  <br >  <br >  
		  </td>
		</tr>
   </table><!-- END table 2 -->           </tr>
	<tr>
			<td width="798" height="100" background="../images/head_05.jpg" >
<div align="right">
					    <p>&nbsp;</p>
					    <p align="center"><span class="style4">
						คณะวิทยาการสื่อสาร มหาวิทยาลัยสงขลานครินทร์ วิทยาเขตปัตตานี อำเภอเมือง จังหวัดปัตตานี 94000 <BR>
				        โทรศัพท์ 0 7334 9692 (สายตรง)   0 7331 3930-50 ต่อ 1380-2 โทรสาร 0 7334 9692 <BR>
						Webmaster : s4920610136@pn.psu.ac.th  </span></p>
					  </div>			 </td>
   </tr>
</table>
<!-- END table 3 -->	
</body>
</html>