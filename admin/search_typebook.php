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
.style8 {
	color: #0099FF;
	font-size: 16px;
}
.style9 {font-size: 16px}
.style10 {font-size: 12px}
.style24 {
	color: #0000FF;
	font-size: 14px;
}
-->
</style>
</head>
<body bgcolor="#999999" leftmargin="0" topmargin="0" >
 <table width="800" height="738" border="0" cellspacing="0" align="center" CELLPADDING=0 > <!--  start table 1 -->
	<tr>
	    <td width="786" height="199" background="../images/head_02.jpg"></td>
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
    <td align="left"><a href="add_typebook.php">เพิ่มประเภทหนังสือเวียน</a></td>
  </tr>
  <tr>
    <td height="24" align="right"><img src="../images/5_06.GIF" /></td>
    <td align="left"> <a href="view_typebook.php">แสดง/ลบ/แก้ไข ประเภท</a></td>
  </tr>
  <tr>
    <td height="26" align="right"><img src="../images/5_06.GIF" /></td>
    <td align="left"> <a href="search_typebook.php">ค้นหาประเภทหนังสือเวียน</a></td>
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
  <td height="43" colspan="2" align="center"><a href="../logout.php" ><font color="#FF0000" >ออกจากระบบ </font></a></td>
	  </tr>
</table>	<br>
<br /><br />		</th>
						<th width="9" bgcolor="#DBDBDB" scope="col">&nbsp;</th>
					   <td width="563" align="center" valign="top" bgcolor="#FFFFFF" scope="col">
		
										<br > <br >
								   <form method=post action="search_typebook.php" name="form1" enctype="multipart/form-data">
                                 <table width="396" border="0" cellspacing="0" cellpadding="0">
              <tr align="left" bgcolor="#0099FF">
    <td height="18" colspan="5">&nbsp;</td>
    </tr>
   <tr align="left">
    <td height="16" colspan="6"><hr  color="#00CCFF"></td>
    </tr>
  <tr>
    <td width="222">ระบุประเภทหนังสือเวียนที่ต้องการค้นหา</td>
    <td width="9">&nbsp;</td>
    <td width="151"> <SELECT name="typebook_id" style ="width:140px;" onchange="form1.submit()" >
<option value="">---ประเภทหนังสือ---
<?
include "../include/connect.php";
$sql="select * from typebook";  
$result =mysql_query("set names tis620");   
$result=mysql_query($sql);   
while($data=mysql_fetch_array($result)) 
{

echo "<option value=$data[typebook_id]>$data[typebook_detail]";
 }
?>
</SELECT></td>
    <td width="8">&nbsp;</td>
    <td width="22"></td>
  </tr>
   <tr align="left">
    <td height="16" colspan="6"><hr  color="#00CCFF"></td>
    </tr>
</table>
    </form>
       <?                       
if($_POST[typebook_id]!=""){	  			
			   
           ?> 
 
          <br >           
           <span class="style11"><span class="style12 style8">-----------------------------------------------</span></span><span class="style9"><br >
			</span><br >  
                                      
    <table width="290" height="91" border="0" cellpadding="0" cellspacing="0">
                                   <?
  $typebook_id = $_POST[typebook_id];
 $sql = "select * from  typebook  where typebook_id='$typebook_id' ;  ";
$result = mysql_query($sql);
$data=mysql_fetch_array($result);
?>
  <tr>
    <td height="35" colspan="3"><span class="style10">รายชือหนังสือเวียนประเภท : &nbsp;<font color="#0000FF">
      <?=$data[typebook_detail]?>
    </font></span></td>
    </tr>
  <tr>
    <td width="82" height="18" >&nbsp;</td>
    <td width="18">&nbsp;</td>
    <td width="293">&nbsp;</td>
  </tr>
  <?
    $typebook_id = $_POST[typebook_id];
 $sql = "select * from book , typebook  where typebook.typebook_id='$typebook_id' and typebook.typebook_id = book.typebook_id;  ";
$result = mysql_query($sql);
$rows=mysql_num_rows($result);
if ($rows==0){
?>
  <tr>
    <td height="18" colspan="3" align="center" >ไม่มีหนังสือเวียน ประเภทนี้</td>
    <?
 }
     $i = 0;
while ($data=mysql_fetch_array($result))  
   {

   $i++;
  ?>
<tr>
    <td valign="top" height="25">ลำดับที่ 
      <?=$i?>      &nbsp;</td>
    <td valign="top">:</td>
    <td align="left" valign="top">
<?
$file_name=$data['book_name'];
 echo "<a href=\"../pdf/$file_name\" TARGET='_blank'>	$file_name </a>" ; 
 ?>  </td>
  </tr>
  <?
  }
  ?>
</table>
  <?
  }
  ?>
                                
                        <br >
							<br > 
                            <br >
							<br > 
						 <!-- END fieldset 3 -->					</td>
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