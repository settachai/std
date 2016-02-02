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
.style15 {color: #FFFFFF}
.style16 {font-size: 14px; color: #FFFFFF; }
.style20 {color: #0000FF}
.style21 {color: #000000}
.style24 {
	color: #0000FF;
	font-size: 14px;
}
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
<br /><br />			</th>
						<th width="9" bgcolor="#DBDBDB" scope="col">&nbsp;</th>
					   <td width="563" align="center" valign="top" bgcolor="#FFFFFF" scope="col">

										<br > <br >
  <form method=post action="add_user_main.php" name="form1" enctype="multipart/form-data">
 <table width="400" height="527" border="0" align="center" cellpadding="0" cellspacing="0" background="../images/codify.png">
  <tr align="left">
    <td height="58" colspan="3" align="center"><span class="style7 style9 style21">เพิ่มข้อมูลพนักงานใหม่</span> <span class="style21"><br >
    </span></td>
    </tr>
  <tr>
    <td height="16" align="left">&nbsp;</td>
    <td height="16" align="center"><span class="style15"></span></td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td width="86" height="31" align="left"><span class="style21">&nbsp;&nbsp;&nbsp;Username </span></td>
    <td width="13" height="31" align="center"><span class="style16">:</span></td>
    <td width="317" align="left"><span class="style9">
      <input type="text" name="user_name" id="user_name" onChange="checkuser()" style ="width:150px;" >  &nbsp;&nbsp;<span class="style10 style20">(ไม่ตำ่กว่า 5 อักษร)</span></span></td>
  </tr>
  <tr>
    <td height="31" align="left"><span class="style21">&nbsp;&nbsp;&nbsp;Password </span></td>
    <td width="13" height="31" align="center"><span class="style16">:</span></td>
    <td align="left"><span class="style9">
      <input type="password" name="user_password" id="user_password" onChange="checkpass()"style ="width:150px;" >  &nbsp;&nbsp;<span class="style10 style20">(ไม่ตำ่กว่า 5 อักษร)</span></span></td>
  </tr>
  <tr>
    <td height="33" align="left"><span class="style21">&nbsp;&nbsp;&nbsp;ชื่อ </span></td>
    <td width="13" height="33" align="center"><span class="style16">:</span></td>
    <td align="left"><span class="style9">
      <input type="text" name="user_fname"  id="user_fname" onKeyPress="checktext()" style ="width:150px;" ></span></td>
  </tr>
  <tr>
    <td height="31" align="left"><span class="style21">&nbsp;&nbsp;&nbsp;นามสกุล </span></td>
    <td width="13" height="31" align="center"><span class="style16">:</span></td>
    <td align="left"><span class="style9">
      <input type="text" name="user_surname" id="surname" onKeyPress="checktext()" style ="width:150px;" ></span></td>
  </tr>
  <tr>
    <td height="31" align="left"><span class="style21">&nbsp;&nbsp;&nbsp;เลขประชาชน </span></td>
    <td width="13" height="31" align="center"><span class="style16">:</span></td>
    <td align="left"><span class="style9">
      <input type="text" name="id_card" id="id_card" onKeyPress="checknum()" maxlength="13" onChange="checkid_card()" style ="width:150px;" ></span></td>
  </tr>
  <tr>
    <td height="79" align="left"><span class="style21">&nbsp;&nbsp;&nbsp;ที่อยู่ </span></td>
    <td width="13" height="79" align="center"><span class="style16">:</span></td>
    <td align="left" valign="middle">
      <textarea name="user_address" rows="4" cols="3" style ="width:200px;"></textarea>    </td>
  </tr>
  <tr>
    <td height="32" align="left"><span class="style21">&nbsp;&nbsp;&nbsp;เบอร์โทร </span></td>
    <td width="13" height="32" align="center"><span class="style16">:</span></td>
    <td align="left"><span class="style9">
      <input type="text" name="user_tell" onKeyPress="checknum()" maxlength="10" onChange="checktell()" style ="width:150px;" ></span></td>
  </tr>
  <tr>
    <td height="33" align="left"><span class="style21">&nbsp;&nbsp;&nbsp;E-Mail </span></td>
    <td width="13" height="33" align="center"><span class="style16">:</span></td>
    <td align="left"><span class="style9">
      <input type="text" name="user_email" id="user_email" onChange="checkmail()" style ="width:150px;" ></span></td>
  </tr>
  <tr>
    <td height="31" align="left"><span class="style21">&nbsp;&nbsp;&nbsp;เพศ </span></td>
    <td width="13" height="31" align="center"><span class="style16">:</span></td>
    <td align="left"><span class="style9">
      <INPUT TYPE="radio" NAME="user_sex" value="ชาย">
        <span class="style10">ชาย</span>
        <INPUT TYPE="radio" NAME="user_sex" value="หญิง">
        <span class="style10">หญิง</span></span></td>
  </tr>
  <tr>
    <td height="31" align="left"><span class="style21">&nbsp;&nbsp;&nbsp;ตำแหน่ง </span></td>
    <td width="13" height="31" align="center"><span class="style16">:</span></td>
    <td align="left"><span class="style9">
   <SELECT name="position_id" style ="width:100px;" >
<option value="">เลือกตำแหน่ง
<?
include "../include/connect.php";
$sql="select * from position";  
$result =mysql_query("set names tis620");   
$result=mysql_query($sql);   
while($data=mysql_fetch_array($result)) 
{
//echo 	$a=$data[position_id]
echo "<option value=$data[position_id]>$data[position_detail]";
 }
?>
</SELECT>
    
    
    
    </span></td>
  </tr>
  <tr>
    <td height="37" align="left"><span class="style21">&nbsp;&nbsp;&nbsp;รปูภาพ </span></td>
    <td width="13" height="37" align="center"><span class="style16">:</span></td>
    <td align="left"><span class="style9">
      <input name="pic" type="file" style ="width:235px;"  /></span></td>
  </tr>
  <tr>
    <td height="53" align="left"></td>
    <td width="13" height="53" align="center"><span class="style15"></span></td>
    <td align="left" valign="top">
      <input type="button" value= " เพิ่ม "  onClick="checkmember()"style = "width:80;" >&nbsp;&nbsp;<input type="reset" value="เคลียร์"></td>
  </tr>
</table>
  
</form>    
			<br >  	<br >				 <!--  END table 3 -->					  				  
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