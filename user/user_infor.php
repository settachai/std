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
.style12 {
	font-size: 13px
}
.style14 {color: #0000FF}
.style15 {color: #FF0000}
.style17 {
	color: #000000;
	font-size: 14px;
}
.style24 {
	color: #0000FF;
	font-size: 14px;
}
.style25 {color: #000000}
.style26 {font-size: 14px}
-->
</style>
</head>
<body bgcolor="#999999" leftmargin="0" topmargin="0" >
 <table width="800" height="732" border="0" cellspacing="0" align="center" CELLPADDING=0 > <!--  start table 1 -->
<tr>
	  <td width="786" height="199" background="../images/head_02.jpg"></td>
   </tr>
   <tr>
	    <td width="786" height="20"  ><? include "menu_user.php"?></td>							 
    
    <tr>
		<td width="786" height="413" align="center">
                 <table width="800" height="412"  border="0" cellpadding="0" cellspacing="0"><!-- start table 2 -->
<tr bgcolor="#DBDBDB"> 
							 <th width="15" scope="col">&nbsp;</th>
<th width="191" align="center" valign="top" scope="col">   
			<table width="160" border="0">
<tr align="left">
    <td height="28" colspan="2">&nbsp;</td>
  </tr>
  <tr align="left">
    <td height="38" colspan="2"><span class="style24">Main Menu</span><br>
      <hr></td>
    </tr>
  <tr>
    <td width="24" height="25" align="right"><img src="../images/5_06.GIF" /></td>
    <td width="126" align="left"><a href="user_infor.php">แสดงข้อมูลส่วนตัว</a> </td>
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
</table>								</th>
		  <th width="11" scope="col">&nbsp;</th>
<td width="581" align="left" valign="top" bgcolor="#FFFFFF" scope="col">
						
			<br >
										<br >	<table width="536" border="0">
                                          <tr>
                                            <td width="51" align="left">&nbsp;</td>
                                            <td width="475" height="24" align="left"><span class="style25"><img src="../images/5_01.PNG" width="25" height="25" /><span class="style26">ข้อมูลส่วนตัว</span><BR /> <hr  color="#0099FF"></span></td>
                                          </tr> 
                                        </table>   
										<br >
 <table width="400" height="532" border="0" align="center" cellpadding="0" cellspacing="0" background="../images/codify.png">
  <tr>
    <td>&nbsp;</td>
    <td height="16" align="left">&nbsp;</td>
    <td align="center">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td width="36">&nbsp;</td>
    <td width="91" height="31" align="left"><span class="style25">Username </span></td>
    <td width="34" align="center"><span class="style15">:</span></td>
    <td width="332" align="left"><?=$data[user_name]?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="31" align="left"><span class="style25">Password </span></td>
    <td align="center"><span class="style15">:</span></td>
    <td align="left"><?=$data[user_password]?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="33" align="left"><span class="style25">ชื่อ</span></td>
    <td align="center"><span class="style15">:</span></td>
    <td align="left"><?=$data[user_fname]?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="30" align="left"><span class="style25">นามสกุล</span></td>
    <td align="center"><span class="style15">:</span></td>
    <td align="left"><?=$data[user_surname]?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="31" align="left"><span class="style25">เลขประชาชน </span></td>
    <td align="center"><span class="style15">:</span></td>
    <td align="left"><?=$data[id_card]?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="88" align="left"><span class="style25">ที่อยู่  </span></td>
    <td align="center"><span class="style15">:</span></td>
    <td align="left"><?=$data[user_address]?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="32" align="left"><span class="style25">เบอร์โทร </span></td>
    <td align="center"><span class="style15">:</span></td>
    <td align="left"><?=$data[user_tell]?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="33" align="left"><span class="style25">E-Mail </span></td>
    <td align="center"><span class="style15">:</span></td>
    <td align="left"><?=$data[user_email]?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="28" align="left"><span class="style25">เพศ </span></td>
    <td align="center"><span class="style15">:</span></td>
    <td align="left"><?=$data[user_sex]?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="30" align="left"><span class="style25">ตำแหน่ง </span></td>
    <td align="center"><span class="style15">:</span></td>
    <td align="left"><?=$data[position_detail]?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="37" align="left"><span class="style25">รปูภาพ </span></td>
    <td align="center" height="120"><span class="style15"> : </span></td>
    <td align="left"><CENTER>   <span class="style14"><img src="../pic/<?=$data[user_pic]?>" width="100" height="100" border="2" /></span> </CENTER></td>
  </tr>
</table>
		  <br >  <br >  <br >  				</td>
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