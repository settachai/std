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
.style15 {color: #FF0000}
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
                 <table width="798" height="412"  border="0" cellpadding="0" cellspacing="0"><!-- start table 2 -->
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
<br /><br />	</th>
						<th width="9" bgcolor="#DBDBDB" scope="col">&nbsp;</th>
					   <td width="561" align="center" valign="top" bgcolor="#FFFFFF" scope="col">
										<br > <br >
                                    
                                        <?
 include "../include/connect.php";
 

$str="select * from user where user_name='$_POST[user_name]'  ;";
		$res=mysql_query($str);
		$rows=mysql_num_rows($res);
		if($rows==1){		
		echo "<span class='style15'>Username นี้มีแล้วครับ ไม่สามารถเพิ่มซ้ำได้</span> <br > <br ><img src='../images/progress_dot_line.gif' />";
		echo "<script>setTimeout(\"location='add_user.php'\",3500);</script>";	
			exit();		
}

$str="select * from user where  id_card='$_POST[id_card]';";
		$res=mysql_query($str);
		$rows=mysql_num_rows($res);
		if($rows==1){			
		echo "<span class='style15'>ประจำตัวประชาชนนี้มีแล้วครับ ไม่สามารถเพิ่มซ้ำได้</span> <br > <br ><img src='../images/progress_dot_line.gif' />";
		echo "<script>setTimeout(\"location='add_user.php'\",3500);</script>";			
				exit();	
			}

$str="select * from user where user_email='$_POST[user_email]' ;";
		$res=mysql_query($str);
		$rows=mysql_num_rows($res);
		if($rows==1){		
			echo "<span class='style15'>E -Mail นี้มีแล้วครับ ไม่สามารถเพิ่มซ้ำได้</span> <br > <br ><img src='../images/progress_dot_line.gif' />";
		echo "<script>setTimeout(\"location='add_user.php'\",3500);</script>";
				exit();
			}

$sql ="select * from admin where admin_name='$_POST[user_name]' ";
$res=mysql_query($sql);
$rows=mysql_num_rows($res);
if($rows==1){
			echo "<span class='style15'>username นี้ ไม่สามารถเพิ่มได้ครับ</span> <br > <br ><img src='../images/progress_dot_line.gif' />";
		echo "<script>setTimeout(\"location='add_user.php'\",3500);</script>";
			exit();
}			
			
$str="select * from user where  user_fname='$_POST[user_fname]' and user_surname='$_POST[user_surname]'  ;";
		$res=mysql_query($str);
		$rows=mysql_num_rows($res);
		if($rows==1){			
				echo "<span class='style15'>ชื่อ-สกุล นี้มีแล้วครับ ไม่สามารถเพิ่มซ้ำได้</span> <br > <br ><img src='../images/progress_dot_line.gif' />";
		echo "<script>setTimeout(\"location='add_user.php'\",3500);</script>";
				exit();
}
if ($_FILES[pic][name]==""){
$pic = "other.png";
}else{


	move_uploaded_file($_FILES[pic][tmp_name],"../pic/".$_FILES[pic][name]);
		$pic=$_FILES[pic][name];
		}
			for($i=0;$i<5;$i++){
		$user_key.=rand(0,9);
				}
		
$sql = " INSERT INTO `user`( `user_name`, `user_password`, `user_fname`, `user_surname`,`id_card`, `user_address`,`user_sex`, `user_email`, `user_tell`, `user_pic`,`user_key`, `position_id`) VALUES ( '$_POST[user_name]', '$_POST[user_password]', '$_POST[user_fname]', '$_POST[user_surname]', '$_POST[id_card]', '$_POST[user_address]','$_POST[user_sex]', '$_POST[user_email]','$_POST[user_tell]','$pic','$user_key','$_POST[position_id]');";
mysql_query("set names tis620"); // ทำให้อ่านภาษาไทยได้
$result = mysql_query($sql);  // ประมาณคำสั่ง sql ที่มาจาก $sql
if($result)
{
$user =mysql_insert_id();
$a ="../pdf";
mkdir($a ."/". $user);
	echo "<span class='style15'>เพิ่มพนักงานเรียบร้อยแล้ว</span> <br > <br ><img src='../images/progress_dot_line.gif' />";
echo "<script>setTimeout(\"location='view_user.php'\",3000);</script>";
}
else
{
	echo "<span class='style15'>ไม่สามารถเพิ่มพนักงานเรียบร้อยแล้ว</span> <br > <br ><img src='../images/progress_dot_line.gif' />";
echo "<script>setTimeout(\"location='add_user.php'\",3000);</script>";
}
?>
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