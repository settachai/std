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
	var keyword=document.form1.keyword.value;
	if(search == "" || keyword==""){
alert("กรุณาใส่ข้อมูลให้ครบด้วยครับ !");
}else{	document.form1.submit();
	}
}
function book_in(id){
	document.open("admin_show_book.php?id="+id,"","height=500,width=400");
}
</script>
<script language="javascript">
function showuser(id){
	document.open("showuser.php?id="+id,"","height=550,width=400");
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
.style9 {color: #0000FF}
.style13 {font-size: 12px; color: #FFFFFF; }
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
							<th width="209" align="center" valign="top" bgcolor="#DBDBDB" scope="col">   
								                            
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
    <td align="left"><a href="admin_send.php">ส่งหนังสือเวียน</a></td>
  </tr>
  <tr>
    <td height="18" align="right"><img src="../images/5_06.GIF" /></td>
    <td align="left"> <a href="admin_search_book.php">ค้นหาหนังสือเวียน</a></td>
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
</table>						</th>
						<th width="9" bgcolor="#DBDBDB" scope="col">&nbsp;</th>
					   <td width="559" align="center" valign="top" bgcolor="#FFFFFF" scope="col">
										<br ><br ><br >
                                <FORM METHOD="post" POST ACTION="admin_search_book.php" name="form1">
							   <table width="475" height="70" border="0" cellpadding="0" cellspacing="0">
  <tr align="left" bgcolor="#0099FF">
    <td height="18" bgcolor="#0099FF">&nbsp;</td>
    <td>&nbsp;</td>
    <td bgcolor="#0099FF">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right">&nbsp;</td>
  </tr>
  <tr align="left">
    <td height="18" colspan="6"><hr  color="#00CCFF" /></td>
    </tr>
  <tr align="left">
    <td width="152" height="18">ระบุสิ่งที่ต้องการค้นหา</td>
    <td width="5">&nbsp;</td>
    <td width="126">
    <select name="search" >
      <option value="">สิ่งที่ต้องการค้นหา</option>
      <option value="user_fname">ชื่อผู้ส่ง </option>
      <option value="user_rab">ชื่อผู้รับ </option>
      <option value="subject">หัวเรื่อง</option>
      <option value="send_date">วันที่ส่ง </option>
    </select></td>
    <td width="8">&nbsp;</td>
    <td width="101"><input type="text" name="keyword" width="100" /></td>
    <td width="83" align="right"><input type="button" value="  ค้นหา   "  onclick="check()" /></td>
    </tr>
  <tr align="left">
    <td height="16" colspan="6"><hr  color="#00CCFF" /></td>
  </tr>
</table>
</FORM>    <br ><br >
 <?                       
if($_POST[keyword]!=""){	
if ($_POST[search]=='user_fname'){
$search = "ชื่อผู้ส่ง";
} else if ($_POST[search]=='user_rab'){
$search = "ชื่อผู้รับ";
} else if ($_POST[search]=='subject'){
$search = "หัวเรื่อง";
} else {
$search = "วันที่ส่ง";
}
echo "ค้นหาตาม <u> $search </u> คำค้นคือ <u>$_POST[keyword]</u><br><br>";

include "../include/connect.php"; 
if($_POST[search]=="user_rab"){
	$sql = "select * from send,send_detail,user,position,book where  user.position_id=position.position_id and user.user_id=send_detail.user_id and send.send_id=send_detail.send_id and send.book_id=book.book_id and user.user_fname like '%$_POST[keyword]%' ";	
 }else{
  $sql = "select * from send_detail,user,send,position,book where  user.position_id=position.position_id and user.user_id=send.user_id and send.send_id=send_detail.send_id and send.book_id=book.book_id and $_POST[search] like '%$_POST[keyword]%' ";
 }
 $result = mysql_query($sql);  
 $rows=mysql_num_rows($result);//นับแถวที่ได้จากการดึง
 if($rows==0)//เช็คจำนวนแถว(ถ้ามากกว่า 0 แสดงว่าการ login ผ่าน)
			{
			echo "ไม่มีข้อมูลครับ<br><br>";
			}else{
			?>
 <table width="508" height="108">
  <tr bgcolor="#0099FF">
    <td width="123" height="38"><span class="style13">ผู้ส่ง</span></td>
    <td width="120"><span class="style13">ผู้รับ</span></td>
    <td width="106"><span class="style13">เรื่อง</span></td>
    <td width="90"><span class="style13">วันที่ส่ง</span></td>
  </tr> 
<?
   $i = 0;
	 while($data = mysql_fetch_array($result))
{
    if($i%2 == 0){
?>
<tr align="left" bgcolor="#D4D4D4">
<?
}else{
?>
<tr align="left" bgcolor="#AAAAAA">
<?
}
  	if($_POST[search]=="user_rab"){
	$sql2 = "select * from user where user_id=$data[1]  ";
 $result2 = mysql_query($sql2);  
$data2 = mysql_fetch_array($result2);
	?>
    <td height="29">&nbsp;&nbsp;<?= $data2[user_fname].'&nbsp;&nbsp;'.$data2[user_surname]?></td>
    <td>&nbsp;&nbsp;<?= $data[user_fname].'&nbsp;&nbsp;'.$data[user_surname]?></td>
    <td>&nbsp;&nbsp;
    <?
  //  echo "<a href=\"javascript:book_in('$data[send_id]')\">$data[subject] </A>";
	 echo "<a href=\"show_book.php?send_id=$data[0] & send=$data2[user_id] & rab=$data[8]\" target='_blank'>$data[subject] </A>";
	?>	</td>
    <td><?=$data[send_date] ?></td>
</tr>
  <?
  }else{
  $sql2 = "select * from user where user_id=$data[1]  ";
 $result2 = mysql_query($sql2);  
$data2 = mysql_fetch_array($result2);
  ?>
  <td height="27">&nbsp;&nbsp;<?=$data[user_fname].'&nbsp;&nbsp;'.$data[user_surname]?></td>
    <td>&nbsp;&nbsp;<?= $data2[user_fname].'&nbsp;&nbsp;'.$data2[user_surname]?></td>
    <td>&nbsp;&nbsp; 
	<?
	//  echo "<a href=\"javascript:book_in('$data[send_id]')\">$data[subject] </A>";
    echo "<a href=\"show_book.php?send_id=$data[0] & rab=$data2[user_id] & send=$data[5]\" target='_blank'>$data[subject] </A>";
	?>    </td>
    <td><?=$data[send_date] ?></td>
    </tr>
    <? 	 
	}
	$i++;
	}
	?>
</table>
<?
 } 
}
?>
<br > <br >   <!--  END table 3 -->  
	
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