<?
session_start();	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<script language="javascript" src="include/time.js">
</script>
<script language="javascript" src="include/1.js">
</script>
<title>ระบบหนังสือเวียน</title>
<link rel="stylesheet" type="text/css" href="include/menu.css">
<link rel="stylesheet" type="text/css" href="include/style.css">
<style type="text/css">
<!--
.style6 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
	color: #FFFFFF;
}
.style14 {
	font-size: 12px;
	color: #FF0000;
}
.style16 {font-size: 12px; color: #000000; }
-->
</style>
</head>
<body bgcolor="#999999" leftmargin="0" topmargin="0">
 <table width="800" height="722" border="0" cellspacing="0" align="center" CELLPADDING=0 >
<tr>
				 <td width="786" height="200" background="images/head_02.jpg"></td>
	     </tr>
		 <tr>
				  <td width="786" height="20" >
                        <div id="tabsJ">
                                   <!-- CSS Tabs -->
								<li><a href="index.php"><span>---หน้าแรก---</span></a></li>
								<li><a href="login.php"><span>----เข้าสู่ระบบ---</span></a></li>
								<li><a href="infor_admin.php"><span>---ติดต่อผู้ดูแลระบบ---</span></a></li>
                       </div>				</td>							 
	    <tr>
				<td width="786" height="30" bgcolor="#FFFFFF" ></td>							 
		 </tr>
		 <tr>
		   <td width="786" height="365" align="center" bgcolor="#FFFFFF">	
             <table width="428" height="224" border="0" align="center" cellpadding="0" cellspacing="0" background="images/log.jpg">
  <tr>
    <th height="75" colspan="4" align="center" scope="col">    </th>
    </tr>
      <?
include "include/connect.php";
$sql="select * from user where user_name='$_POST[username]' and user_password='$_POST[password]'";
$result=mysql_query("set names tis620");
$result=mysql_query($sql);
$data=mysql_fetch_array($result); 
$rows=mysql_num_rows($result);

$sql2="select * from admin where admin_name='$_POST[username]' and admin_password='$_POST[password]' ";
$result2=mysql_query($sql2);
$data2=mysql_fetch_array($result2);		
$rows2=mysql_num_rows($result2);

 if($rows==1)
			{
$_SESSION["sess_email"] = $data[user_email];
$_SESSION["sess_id"] = $data[user_id];
$_SESSION["sess_fname"] = $data[user_fname];
$_SESSION["sess_surname"] = $data[user_surname];
?>
<tr >
    <th height="43" colspan="4"  scope="row"><span class="style14">กำลังเข้าสู่ระบบ หนังสือเวียน</span></th>
    </tr>
    <?
echo "<script>setTimeout(\"location='user/index.php'\",1000);</script>";
			}

else if($rows2==1)
		{
$_SESSION["sess_name"] = $data2[admin_name];
?>
<tr >
    <th height="43" colspan="4"  scope="row"><span class="style14">กำลังเข้าสู่ระบบ ADMIN</span></th>
    </tr>
    <?
echo "<script>setTimeout(\"location='	admin/index.php'\",1000);</script>";
			}
else
			{  
		?>
<tr >
    <th height="43" colspan="4"  scope="row"><span class="style14">username หรือ password ผิดพลาด 
    </span></th>
    </tr>
    <?
echo "<script>setTimeout(\"location='login.php'\",1000);</script>";
			}
?>			
  <tr>
    <th height="41" colspan="4" scope="row"><span class="style16">โปรดรอสักครู่</span><br>
      <img src="images/progress_dot_line.gif" /></th>
    </tr>
  <tr>
    <th width="91" height="31" scope="row">&nbsp;</th>
    <td width="110" align="left">&nbsp;</td>
    <td width="27" align="left">&nbsp;</td>
    <td width="200" align="left">&nbsp;</td>
  </tr>
  <tr>
    <th height="31" scope="row">&nbsp;</th>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
</table>		   </tr>
			 <tr>
					<td width="786" height="100" background="images/head_05.jpg"  ><div align="right">
					    <p>&nbsp;</p>
										    <p align="center"><span class="style6">คณะวิทยาการสื่อสาร มหาวิทยาลัยสงขลานครินทร์ วิทยาเขตปัตตานี อำเภอเมือง จังหวัดปัตตานี 94000 <BR>
				        โทรศัพท์ 0 7334 9692 (สายตรง)   0 7331 3930-50 ต่อ 1380-2 โทรสาร 0 7334 9692 
                        <BR>Webmaster : s4920610136@pn.psu.ac.th  </span></p>
					  </div>					</td>
			 </tr>
</table>	
</body>
</html>