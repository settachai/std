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
.style8 {color: #FF0000}
.style9 {color: #0000FF}
.style11 {
	color: #00FF00;
	font-size: 18px;
}
.style12 {
	font-size: 14px;
	color: #0099FF;
}
.style24 {
	color: #0000FF;
	font-size: 14px;
}
-->
</style>
<script language="javascript">
function showuser(id){
	document.open("showuser.php?id="+id,"","height=550,width=400");
}
</script>
</head>
<body bgcolor="#999999" leftmargin="0" topmargin="0" >
 <table width="800" height="762" border="0" cellspacing="0" align="center" CELLPADDING=0 > <!--  start table 1 -->
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
    <td align="left"><a href="add_position.php">เพิ่มตำแหน่ง</a></td>
  </tr>
  <tr>
    <td height="24" align="right"><img src="../images/5_06.GIF" /></td>
    <td align="left"> <a href="view_position.php">แสดง/ลบ/แก้ไข ตำแหน่ง</a></td>
  </tr>
  <tr>
    <td height="26" align="right"><img src="../images/5_06.GIF" /></td>
    <td align="left"> <a href="search_position.php">ค้นหาตำแหน่ง</a></td>
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
</table>	
<br /><br />	<br>	</th>
						<th width="9" bgcolor="#DBDBDB" scope="col">&nbsp;</th>
					   <td width="563" align="center" valign="top" bgcolor="#FFFFFF" scope="col">
						 <br > <br ><br > <br >		
								   <form method=post action="search_position.php" name="form1" enctype="multipart/form-data">
                                 <table width="351" border="0" cellspacing="0" cellpadding="0">
                                   <tr align="left" bgcolor="#0099FF">
    <td height="18" colspan="5">&nbsp;</td>
    </tr>
  <tr align="left">
    <td height="16" colspan="6"><hr  color="#00CCFF" /></td>
  </tr>
  <tr>
    <td width="190">ระบุตำแหน่งที่ต้องการค้นหา</td>
    <td width="11">&nbsp;</td>
    <td width="133"> <SELECT name="position_id" style ="width:120px;" onchange="form1.submit()" >
<option value="">---ตำแหน่ง---
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
</SELECT></td>
    <td width="7">&nbsp;</td>
    <td width="10"></td>
  </tr>
  <tr align="left">
    <td height="16" colspan="6"><hr  color="#00CCFF"></td>
    </tr>
</table>
					     </form>
     <?                       
if($_POST[position_id]!=""){	  				   
           ?> 
             <br > <br >  
           <span class="style11"><span class="style12">-----------------------------------------------</span></span><br >
				<br >  
                               <table width="235" height="107" border="0" cellpadding="0" cellspacing="0">
                                   <?	   
  $position_id = $_POST[position_id];
 $sql = "select * from  position  where position_id='$position_id' ;  ";
$result = mysql_query($sql);
$data=mysql_fetch_array($result);
?>
  <tr>
    <td colspan="3"><span class="style9">รายชือพนักงานตำแหน่ง </span>: &nbsp;<?=$data[position_detail]?></td>
    </tr>
  <tr>
    <td width="71" height="18">&nbsp;</td>
    <td width="28">&nbsp;</td>
    <td width="136">&nbsp;</td>
  </tr>
  <?
    $position_id = $_POST[position_id];
 $sql = "select * from user , position  where position.position_id='$position_id' and user.position_id = position.position_id;  ";
$result2 = mysql_query($sql);
$rows=mysql_num_rows($result2);
if ($rows==0){
?>
<tr>
  <td colspan="3">ไม่มีพนักงานในตำแหน่งนี้ครับ</td>
  </tr>
<?
}else {
     $i = 0;
while ($data=mysql_fetch_array($result2))  
   {
   $i++;
  ?>
<tr>
    <td height="32">ลำดับที่ &nbsp; <?=$i?></td>
    <td>:</td>
    <td align="left">
	<?
	echo "<a href=\"javascript:showuser('$data[user_id]')\">$data[user_fname]&nbsp;&nbsp;$data[user_surname]</A> ";
	?>    </td>
  </tr>
  <?
 }
 ?>
   <tr>
    <td width="71" height="18">&nbsp;</td>
    <td width="28">&nbsp;</td>
    <td width="136"></td>
  </tr>
  <tr align="center">
    <td height="18" colspan="3"><span class="style8">***คลิกที่ชื่อเพื่อดูรายละเอียด***</span></td>
    </tr> 
     <?
 }
  ?>
</table>
<?
  }
  ?>
  <br ><br >	<br > <br ><br > 	<br >
	</td>
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