<?
include "session.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<script language="javascript" src="../include/time.js">
</script>

<script language="javascript">
function check(){
	var search=document.form1.search.value;
	var send_m=document.form1.send_m.value;
	var send_y=document.form1.send_y.value;
	if(search == "" || send_m=="" || send_y==""){
alert("กรุณาเลือกข้อมูลให้ครบด้วยครับ !");
}else{	document.form1.submit();
	}
}
</script>

<SCRIPT LANGUAGE="Javascript" SRC="FusionCharts/FusionCharts.js">
</SCRIPT>

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
.style6 {
	font-size: 16px;
	color: #0033FF;
}
.style7 {font-size: 16px}
.style24 {
	color: #0000FF;
	font-size: 14px;
}
-->
</style>
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
    <td align="left">	<a href="graph.php">กราฟแสดงสถิติ</a>	</td>
  </tr>
  <tr>
    <td height="18" align="right">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td height="18" align="right">&nbsp;</td>
    <td align="left">&nbsp;</td>
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
</table>	</th>
						<th width="9" bgcolor="#DBDBDB" scope="col">&nbsp;</th>
					   <td width="563" align="center" valign="top" bgcolor="#FFFFFF" scope="col">
										<br > 
										<br >
                          <form method=post action="graph_main.php" name="form1" enctype="multipart/form-data" target="ss">
                                       <table width="445" height="143" border="0" cellpadding="0" cellspacing="0">
  <tr align="center">
    <td height="33" colspan="7" bgcolor="#0099FF">สถิติการส่งหนังสือเวียน</td>
    </tr>
  <tr>
    <td height="18" colspan="7"><hr color="#00CCFF" size="5"></td>
    </tr>
  <tr>
    <td width="112" height="39" align="left">ระบุสิ่งที่ต้องการดูสถิติ</td>
    <td width="8">&nbsp;</td>
    <td colspan="3" align="left"><select name="search" >
      <option value="">----สิ่งที่ต้องการดูสถิติ----- </option>
      <option value="1">ประเภทหนังสือ </option>
      <option value="2">ฝ่ายพนักงาน</option>
      <option value="3">พนักงาน</option>
    </select></td>
    <td width="5">&nbsp;</td>
    <td width="88" align="left">&nbsp;</td>
  </tr>
  <tr>
    <td height="34" align="left">เลือก เดือนและปี</td>
    <td>&nbsp;</td>
    <td width="94" align="left"><select name="send_m" >
      <option value="">ระบุเดือน</option>
      <option value="Jan">มกราคม</option>
      <option value="Feb">กุมภาพันธ์</option>
      <option value="Mar">มีนาคม</option>
         <option value="Apr">เมษายน</option>
      <option value="May">พฤษภาคม</option>
      <option value="Jun">มิถุนายน</option>
         <option value="July">กรกฎาคม</option>
      <option value="Aug">สิงหาคม</option>
      <option value="Set">กันยายน</option>
         <option value="Out">ตุลาคม</option>
      <option value="Nov">พฤศจิกายน</option>
      <option value="Dec">ธันวาคม</option>
    </select></td>
    <td width="6">&nbsp;</td>
    <td width="119" align="left"><select name="send_y" >
      <option value="">ระบุปีการศึกษา </option>
      <option value="2010">2553 </option>
      <option value="2011">2554</option>
      <option value="2012">2555</option>
      <option value="2013">2556</option>
      <option value="2014">2557</option>
    </select></td>
    <td>&nbsp;</td>
    <td align="left"><input type="button" value="  สถิติ   " onclick="check()" /></td>
  </tr>
  <tr>
    <td colspan="7" align="left"><hr color="#00CCFF" size="5"></td>
    </tr>
</table>
</FORM>
    <br > <br >   
    <iframe width="500" height="450" name="ss" frameborder="0"></iframe>                              	
					<br ><br ><br ><br >
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