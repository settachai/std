<?
include "session.php";
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
<link rel="stylesheet" type="text/css" href="menu_admin.css">
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
.style9 {font-size: 14px}
.style24 {
	color: #0000FF;
	font-size: 14px;
}
.style25 {font-size: 12px}
-->
</style>
</head>
<body bgcolor="#999999" leftmargin="0" topmargin="0" >
 <table width="800" height="729" border="0" cellspacing="0" align="center" CELLPADDING=0 > <!--  start table 1 -->
	<tr>
	    <td width="786" height="196" background="../images/head_02.jpg"></td>
   </tr>
   <tr>
	    <td width="786" height="20"  >  <? include "menu_admin.php"?></td>							 
    
    <tr>
		<td width="786" height="413" align="center">
                 <table width="800" height="412"  border="0" cellpadding="0" cellspacing="0"><!-- start table 2 -->
						 <tr> 
							 <th width="18" bgcolor="#DBDBDB" scope="col">&nbsp;</th>
							<th width="210" align="center" valign="top" bgcolor="#DBDBDB" scope="col">   
                 <table width="175" border="0">
                          <tr align="left">
    <td height="28" colspan="2">&nbsp;</td>
  </tr>
  <tr align="left">
    <td height="35" colspan="2"><span class="style24">Main Menu</span><br>
      <hr></td>
    </tr>
<tr>
    <td height="25" align="right"><img src="../images/5_06.GIF" /></td>
    <td align="left"><a href="add_user.php">เพิ่มพนักงาน</a></td>
  </tr>
  <tr>
    <td height="24" align="right"><img src="../images/5_06.GIF" /></td>
    <td align="left"> <a href="view_user.php">แสดง/ลบ/แก้ไข พนักงาน</a></td>
  </tr>
  <tr>
    <td height="26" align="right"><img src="../images/5_06.GIF" /></td>
    <td align="left"> <a href="search_user.php">ค้นหาพนักงาน</a></td>
  </tr>
  <tr>
    <td height="43" align="right">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
   <tr>
    <td height="42" colspan="2" align="left" valign="top"><span class="style24">Hello Admin</span><br>
      <hr></td>
  </tr>
  <tr>
   <td height="43" colspan="2" align="center"> <span class="style22">	Admin </span></td>
  <tr>
    <td height="43" colspan="2" align="center"><img src="../images/admin.png" width="100" height="100" /></td>
  <tr>
  <td height="43" colspan="2" align="center"><a href="../logout.php" class="style23 style9"><font color="#FF0000" >ออกจากระบบ </font></a></td>
	  </tr>
</table>	<br>
<br /><br />		</th>
						<th width="9" bgcolor="#DBDBDB" scope="col">&nbsp;</th>
					   <td width="559" align="center" valign="top" bgcolor="#FFFFFF" scope="col">
	
										<br > <br >
                  
 <?
include "../include/connect.php";
$sql = "select  *  from user where user_id='$_GET[user_id]' ";
mysql_query("set names tis620");
$result = mysql_query($sql);
$data = mysql_fetch_array($result);
?>
   <form method=post action="edit_user_main.php" name="form1" enctype="multipart/form-data">
   
  
 <table width="400" height="552" border="0" align="center" cellpadding="0" cellspacing="0" background="../images/codify.png">
  <tr>
    <td height="46" colspan="4" align="center"><span class="style7 style9">โปรดแก้ไขข้อมูลที่ต้องการ</span></td>
    </tr>
  <tr>
    <td width="7">&nbsp;</td>
    <td width="89" height="31">Username</td>
    <td width="4"> :</td>
    <td width="300" align="left"><span class="style9">&nbsp;&nbsp;
      <input type="text" name="user_name" id="user_name" onChange="checkuser()" style ="width:150px;" value="<?=$data[user_name]?>">  &nbsp;<span class="style10 style25">(ไม่ตำ่กว่า 5 อักษร)</span></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="31">Password </td>
    <td>:</td>
    <td align="left"><span class="style9">&nbsp;&nbsp;
      <input type="password" name="user_password" id="user_password" onChange="checkpass()"style ="width:150px;" value="<?=$data[user_password]?>">  &nbsp;<span class="style10 style25">(ไม่ตำ่กว่า 5 อักษร)</span></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="33">ชื่อ</td>
    <td> :</td>
    <td align="left"><span class="style9">&nbsp;&nbsp;
      <input type="text" name="user_fname"  id="user_fname" onKeyPress="checktext()" style ="width:150px;" value="<?=$data[user_fname]?>"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="30">นามสกุล </td>
    <td>:</td>
    <td align="left"><span class="style9">&nbsp;&nbsp;
      <input type="text" name="user_surname" id="surname" onKeyPress="checktext()" style ="width:150px;" value="<?=$data[user_surname]?>"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="31">เลขประชาชน </td>
    <td>:</td>
    <td align="left"><span class="style9">&nbsp;&nbsp;
      <input type="text" name="id_card" id="id_card" onKeyPress="checknum()" maxlength="13" onChange="checkid_card()" style ="width:150px;" value="<?=$data[id_card]?>"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="79">ที่อยู่ </td>
    <td> :</td>
    <td align="left"><span class="style9">&nbsp;&nbsp;
      <textarea name="user_address" rows="4" cols="3" style ="width:200px;" ><?=$data[user_address]?></textarea>
    </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="32">เบอร์โทร </td>
    <td>:</td>
    <td align="left"><span class="style9">&nbsp;&nbsp;
      <input type="text" name="user_tell" onKeyPress="checknum()" maxlength="10" onChange="checktell()" style ="width:150px;" value="<?=$data[user_tell]?>"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="33">E-Mail</td>
    <td> :</td>
    <td align="left"><span class="style9">&nbsp;&nbsp;
      <input type="text" name="user_email" id="user_email" onChange="checkmail()" style ="width:150px;" value="<?=$data[user_email]?>"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="28">เพศ </td>
    <td>:</td>
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
    <td height="30">ตำแหน่ง </td>
    <td>:</td>
    <td align="left"><span class="style9">
    
    
   &nbsp;&nbsp; 
   <SELECT name="position_id" style ="width:100px;" >
 
    <?

$sql2="select * from position";  
$result2=mysql_query($sql2); 
while($data2=mysql_fetch_array($result2)) {

	if($data[position_id]==$data2[position_id]){
			echo"<option value='$data2[position_id]' selected>$data2[position_detail]";
			}else{
			 echo"<option value='$data2[position_id]'>$data2[position_detail]";
			    }
}

?>
</SELECT>
    </span></td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td height="32">รหัสเปิดไฟล์ลับ </td>
    <td>:</td>
    <td align="left"><span class="style9">&nbsp;&nbsp;
      <input type="text" name="user_key" style ="width:100px;" value="<?=$data[user_key]?>"></span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="37">รปูภาพ</td>
    <td> :</td>
    <td align="left"><span class="style9">&nbsp;&nbsp;
      <input name="pic" type="file" style ="width:235px;"  /></span></td>
  </tr>
  <tr>
    <td></td>
    <td height="33"></td>
    <td></td>
    <td align="left">&nbsp;&nbsp;
      <input type="hidden" name="user_id" value="<?=$_GET[user_id]?>">&nbsp;&nbsp;
      <input type="button" value= "OK"  onclick="checkeditmember()"style = "width:80;" />
      <input type="reset" value="เคลียร์"></td>
  </tr>
</table>
   </form>   

<br ><br >
						<br >  

                        <br ><br >					</td>
				</tr>
   </table><!-- END table 2 -->           </tr>
	<tr>
			<td width="786" height="100" background="../images/head_05.jpg" >
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