<?
include "session.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<script language="javascript" src="../include/time.js">
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
.style9 {color: #FFFFFF}
.style10 {font-size: 13px; color: #FFFFFF; }
.style24 {
	color: #0000FF;
	font-size: 14px;
}
-->
</style>
</head>
<body bgcolor="#999999" leftmargin="0" topmargin="0" >
 <table width="800" height="749" border="0" cellspacing="0" align="center" CELLPADDING=0 > <!--  start table 1 -->
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
  <td height="43" colspan="2" align="center"><a href="../logout.php" class="style23 style9"><font color="#FF0000" >ออกจากระบบ </font></a></td>
	  </tr>
</table>	<br>
<br /><br />		</th>
						<th width="9" bgcolor="#DBDBDB" scope="col">&nbsp;</th>
					   <td width="563" align="center" valign="top" bgcolor="#FFFFFF" scope="col" >
			
										<br > <br >

     <table width="413"  border="1"  bordercolor="#00CCFF"  style="border-collapse: collapse" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#0099FF">
    <th width="163" height="43" scope="row"><span class="style10">ชื่อประเภทหนังสือเวียน</span></th>
    <th width="170"><span class="style10">รายละเอียด</span></th>
    <th width="72"><span class="style10">แก้ไข/ลบ</span></th>
  </tr>  
  <?  
 (!isset($_REQUEST[”page”])) ? $page = 1 : $page=$_REQUEST[”page”];
include "../include/connect.php"; 
$sql="select * from typebook";  
$result =mysql_query("set names tis620");  
$result=mysql_query($sql);  

$totalrecord = mysql_num_rows($result);
$pagesize = 15;  
$totalpage = (int) ($totalrecord / $pagesize);
if (($totalrecord % $pagesize) != 0) {
$totalpage += 1;
}
if (isset($pageid)) {
$start = $pagesize * ($pageid - 1);
}
else {
$pageid = 1;
$start = 0;
} 
  $sql = "SELECT * FROM typebook order by typebook_id  LIMIT $start, $pagesize;";
  $result = mysql_query($sql);
   $i = 0;
while($data=mysql_fetch_array($result))  
   {
     
if($i%2 == 0){
?>
<tr bgcolor="#6DE0ED">
<?
}else{
?>
<tr bgcolor="#D7FBFB">
<?
}
?>
<td width=163 height="35" align=left >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$data[typebook_name]?>
<td align=left >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$data[typebook_detail]?>
<th>  <A HREF="edit_typebook.php?typebook_id=<?=$data[typebook_id]?>"><img src="../images/edit.gif" border="0" /></A>&nbsp;&nbsp;&nbsp;<A HREF="delete_typebook_main.php?typebook_id=<?=$data[typebook_id]?>" onclick=" return confirm
			 ('ยืนยัลบข้อมูล <?=$data[typebook_name]?> ออกจากระบบ' ) " ><img src="../images/del.gif"  border="0"/></A></tr >
<?
 $i++;
}
?>
</table>
  		<!--  END table 3 -->
<?
echo "<br >หน้าที่&nbsp;&nbsp;";
for ($i=1; $i<=$totalpage; $i++) {
if ($i == $pageid) {
echo $i . "&nbsp;";
}
else {
echo "[<a href=\"view_typebook.php?pageid=$i\">$i</a>]&nbsp;";
}
}
?>
							<br ><br >  
	
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