<?
include "sessionuser.php";
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
	var keyword=document.form1.keyword.value;
	if(search == "" || keyword==""){
alert("กรุณาใส่ข้อมูลให้ครบด้วยครับ !");
}else{	document.form1.submit();
	}
}
</script>
<title>ระบบหนังสือเวียน</title>
<link rel="stylesheet" type="text/css" href="../admin/menu_admin.css">
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
.style24 {
	color: #0000FF;
	font-size: 14px;
}
.style28 {font-size: 14px}
-->
</style>
</head>
<body bgcolor="#999999" leftmargin="0" topmargin="0" >
 <table width="800" height="806" border="0" cellspacing="0" align="center" CELLPADDING=0 > <!--  start table 1 -->
	<tr>
	    <td width="786" height="200" background="../images/head_02.jpg"></td>
   </tr>
   <tr>
	    <td width="786" height="20"  >  <? include "menu_user.php"?></td>							 
   
    <tr bgcolor="#DBDBDB">
		<td width="786" height="413" align="center">
<table width="797" height="412"  border="0" cellpadding="0" cellspacing="0"><!-- start table 2 -->
						 <tr> 
							 <th width="19" scope="col">&nbsp;</th>
						   <th width="183" align="center" valign="top" scope="col">   
								                            
 <table width="155" border="0">
              <tr align="left">
    <td height="28" colspan="2">&nbsp;</td>
  </tr>
  <tr align="left">
    <td height="35" colspan="2"><span class="style24">Main Menu</span><br>
      <hr></td>
    </tr>
  <tr>
    <td width="29" height="25" align="right"><img src="../images/5_06.GIF" /></td>
    <td width="116" align="left"><a href="user_search.php">ค้นหาพนักงาน</a></td>
  </tr>
  <tr>
    <td height="14" align="right"></td>
    <td align="left"> </td>
  </tr>
  <tr>
    <td height="15" align="right"></td>
    <td align="left">  </td>
  </tr>
  <tr>
    <td height="14" align="right"></td>
    <td align="left"> 	</td>
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
    <td height="25" colspan="2" align="center" valign="middle">  <a href="../logout.php" class="style23 style12"> <font color="#FF0000" >ออกจากระบบ </font></a></td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" valign="middle">&nbsp;</td>
  </tr>
</table>	
 <br ><br ><br ><br > </th>
						<th width="16" scope="col">&nbsp;</th>
  <td width="579" align="center" valign="top" bgcolor="#FFFFFF" scope="col">
										<br ><br >

            <FORM METHOD="post" POST ACTION="user_search.php" name="form1">
		      <table width="475" height="85" border="0" cellpadding="0" cellspacing="0">
  <tr align="left" bgcolor="#0099FF">
    <td height="29" colspan="6" align="center"><span class="style28">ค้นหาพนักงาน</span></td>
    </tr>
   <tr align="left">
    <td height="16" colspan="6"><hr  color="#00CCFF"></td>
    </tr>
  <tr align="left">
    <td width="152" height="18">ระบุสิ่งที่ต้องการค้นหา</td>
    <td width="5">&nbsp;</td>
    <td width="126"><select name="search" >
      <option value="">สิ่งที่ต้องการค้นหา</option>
      <option value="user_fname">ชื่อพนักงาน </option>
      <option value="user_surname">นามสกุลพนักงาน</option>
      <option value="user_address">ที่อยู่พนักงาน </option>
    </select></td>
    <td width="8">&nbsp;</td>
    <td width="101"><input type="text" name="keyword" width="100" /></td>
    <td width="83" align="right"><input type="button" value="  ค้นหา   "  onclick="check()" /></td>
    </tr>
  <tr align="left">
    <td height="16" colspan="6"><hr  color="#00CCFF"></td>
    </tr>
</table>
</FORM>      <br><br>
<?                       
if($_POST[keyword]!=""){	 

include "../include/connect.php"; 

 $sql = "select * from user ,position where user.position_id=position.position_id and $_POST[search] like '%$_POST[keyword]%' ";
 $result = mysql_query($sql);  
 $rows=mysql_num_rows($result);//นับแถวที่ได้จากการดึง
 if($rows==0)//เช็คจำนวนแถว(ถ้ามากกว่า 0 แสดงว่าการ login ผ่าน)
			{
			echo "ไม่มีข้อมูลครับ";
			}else{
 while($data = mysql_fetch_array($result))
{
	?>
     <table width="314" border="0" cellspacing="0" cellpadding="0">
  <tr align="center" bgcolor="#0099FF">
    <td height="28" colspan="3" bgcolor="#0099FF">ข้อมูลพนักงาน</td>
    </tr>
  <tr align="left" valign="top">
    <td colspan="3"><hr  color="#00CCFF"></td>
    </tr>
  <tr>
    <td width="62" align="left" valign="top">ชื่อ</td>
    <td width="20" align="left" valign="top">:</td>
    <td width="232" align="left" valign="top"><?=$data[user_fname]?>  </td>
  </tr>
  <tr>
    <td align="left" valign="top">สกุล</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><?=$data[user_surname]?>  </td>
  </tr>
  <tr>
    <td align="left" valign="top">เพศ</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><?=$data[user_sex]?> </td>
  </tr>
  <tr>
    <td align="left" valign="top">เบอร์โทร</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><?=$data[user_tell]?> </td>
  </tr>
  <tr>
    <td align="left" valign="top">E-Mail</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><?=$data[user_email]?> </td>
  </tr>
  <tr>
    <td align="left" valign="top">ที่อยู่</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><?=$data[user_address]?>  </td>
  </tr>
  <tr>
    <td align="left" valign="top">ตำแหน่ง</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><?=$data[position_detail]?></td>
  </tr>
  <tr align="left" valign="top">
    <td colspan="3"><hr  color="#00CCFF"></td>
    </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr></table>  
  <?
  }
}
}
?>

                                <!--  END table 3 -->
                                <br >
							    <br >  
 <!-- END fieldset 3 -->   
                        <br ><br >					</td>
		</tr>
   </table><!-- END table 2 --></tr>
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