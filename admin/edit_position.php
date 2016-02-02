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
.style5 {font-size: 14px}
.style8 {color: #0000FF}
.style9 {color: #CC6600}
.style10 {
	font-size: 10px;
	color: #993300;
}
.style24 {
	color: #000000;
	font-size: 12px;
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
							<th width="211" align="center" valign="top" bgcolor="#DBDBDB" scope="col">   
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
</table>	<br>
<br /><br />						</th>
						<th width="9" bgcolor="#DBDBDB" scope="col">&nbsp;</th>
					   <td width="562" align="center" valign="top" bgcolor="#FFFFFF" scope="col"> <br > <br > <br > <br >		    
                   <?
		   include "../include/connect.php";
		   $sql = "select  *  from position where position_id='$_GET[position_id]' ";
			mysql_query("set names tis620");
			$result = mysql_query($sql);
			$data = mysql_fetch_array($result);
		   ?>
               <FORM METHOD=POST ACTION="edit_position_main.php" name="form1" enctype="multipart/form-data">  
                 <table width="383" height="293" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th height="50" colspan="2" bgcolor="#0099FF" scope="col">
        <span class="style8 style5">โปรดแก้ไขข้อมูลที่ต้องการ</span> <br >
        <span class="style10">(กรุณากรอกข้อมูลให้ครบทุกช่อง)</span></th>
    </tr>
  <tr>
    <th height="18" colspan="2" scope="row"><hr color="#00CCFF" size="7"></th>
    </tr>
  <tr>
    <th width="115" align="right" scope="row"><span class="style24">ชื่อตำแหน่ง :</span> </th>
    <td width="268" align="left"> &nbsp;&nbsp;&nbsp; <input type="text" name="position_name" onKeyPress="checktext()" style ="width:200px;" value="<?=$data[position_name]?>"></td>
  </tr>
  <tr>
    <th align="right" scope="row"><span class="style24">รายละเอียด : 	</span></th>
    <td align="left">&nbsp;&nbsp;&nbsp; <textarea name="position_detail" rows="5" cols="5" style ="width:200px;" ><?=$data[position_detail]?></textarea></td>
  </tr>
  <tr>
    <th height="10" colspan="2" scope="row"><hr color="#00CCFF" size="5"></th>
    </tr>
  <tr>
    <th height="29" scope="row">&nbsp;</th>
    <td align="center">&nbsp;&nbsp;&nbsp; <input type="button" value= "OK"  onClick="checkposition()"style = "width:80;" >&nbsp;&nbsp;<input type="reset" value="เคลียร์"><input type="hidden" name="position_id" value="<?=$_GET[position_id]?>"></td>
  </tr>
  <tr>
    <th height="9" colspan="2" scope="row"><hr color="#00CCFF" size="5"></th>
    </tr>
</table>
               </form><br ><br >				
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