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
.style24 {
	color: #0000FF;
	font-size: 14px;
}
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
								                            
        <table width="175" border="0">
                          <tr align="left">
    <td height="28" colspan="2">&nbsp;</td>
  </tr>
  <tr align="left">
    <td height="35" colspan="2"><span class="style24">Main Menu</span><br>
      <hr></td>
    </tr>
  <tr>
    <td width="34" height="25" align="right"><img src="../images/5_06.GIF" /></td>
    <td width="156" align="left"><a href="user_book_in.php">หนังสือเวียนเข้า</a></td>
  </tr>
  <tr>
    <td height="24" align="right"><img src="../images/5_06.GIF" /></td>
    <td align="left">  <a href="user_book_out.php">หนังสือเวียนออก</a></td>
  </tr>
  <tr>
    <td height="26" align="right"><img src="../images/5_06.GIF" /></td>
    <td align="left">  <a href="user_send.php">ส่งหนังสือเวียน</a></td>
  </tr>
  <tr>
    <td height="26" align="right"><img src="../images/5_06.GIF" /></td>
    <td align="left"> 	 <a href="user_search_book.php">ค้นหาหนังสือเวียน</a></td>
  </tr>
   <tr>
    <td height="26" align="right"><img src="../images/5_06.GIF" /></td>
    <td align="left"> 	 <a href="user_check_approve.php">ตรวจสอบสถานะ</a></td>
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
    <td height="25" colspan="2" align="center" valign="middle"> <a href="../logout.php" class="style23 style12"><font color="#FF0000" >ออกจากระบบ </font> </a></td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" valign="middle">&nbsp;</td>
  </tr>
</table>	 </th>
						<th width="16" scope="col">&nbsp;</th>
  <td width="579" align="center" valign="top" bgcolor="#FFFFFF" scope="col">
										<br ><br ><br >
                                <FORM METHOD="post" POST ACTION="user_search_book.php" name="form1">
							   <table width="475" height="70" border="0" cellpadding="0" cellspacing="0">
  <tr align="left" bgcolor="#0099FF">
    <td height="18">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="right">&nbsp;</td>
  </tr>
  <tr align="left">
    <td height="18" colspan="6"><hr  color="#00CCFF"></td>
    </tr>
  <tr align="left">
    <td width="152" height="18">ระบุสิ่งที่ต้องการค้นหา</td>
    <td width="5">&nbsp;</td>
    <td width="126"><select name="search" >
      <option value="">สิ่งที่ต้องการค้นหา</option>
      <option value="user_fname">ชื่อผู้รับ </option>
      <option value="subject">หัวเรื่อง</option>
      <option value="send_date">วันที่ส่ง </option>
    </select></td>
    <td width="8">&nbsp;</td>
    <td width="101"><input type="text" name="keyword" width="100" /></td>
    <td width="83" align="right"><input type="button" value="  ค้นหา   "  onclick="check()" /></td>
    </tr>
  <tr align="left">
    <td height="16" colspan="6"><hr  color="#00CCFF"></td>
    </tr>
</table>
</FORM>    <br><br>
 <?                       
if($_POST[keyword]!=""){	 

include "../include/connect.php"; 

 $sql = "select * from user,send,send_detail,position,book where  user.position_id=position.position_id and user.user_id=send.user_id and send.send_id=send_detail.send_id and send.book_id=book.book_id and send_detail.user_id='$sess_id' and $_POST[search] like '%$_POST[keyword]%' ";
 $result = mysql_query($sql);  
 $rows=mysql_num_rows($result);//นับแถวที่ได้จากการดึง
 if($rows==0)//เช็คจำนวนแถว(ถ้ามากกว่า 0 แสดงว่าการ login ผ่าน)
			{
			echo "ไม่มีข้อมูลครับ";
			}else{

$sql = "select * from user,send,send_detail,position,book where  user.position_id=position.position_id and user.user_id=send.user_id and send.send_id=send_detail.send_id and send.book_id=book.book_id and send_detail.user_id='$sess_id' and $_POST[search] like '%$_POST[keyword]%' ";
 $result = mysql_query($sql);  
 while($data = mysql_fetch_array($result))
{
	?>
     <table width="314" border="0" cellspacing="0" cellpadding="0">
  <tr align="center" bgcolor="#0099FF">
    <td height="28" colspan="3" bgcolor="#0099FF">รายละเอียดหนังสือเวียน</td>
    </tr>
  <tr align="left" valign="top">
    <td colspan="3"><hr  color="#00CCFF"></td>
    </tr>
   <tr>
    <td height="30" align="left"><span class="style15">เรื่อง</span></td>
    <td align="left">:</td>
    <td align="left"><?=$data[subject]?></td>
  </tr>
  <tr>
    <td height="30" align="left"><span class="style15">จาก</span></td>
    <td align="left">:</td>
    <td align="left"><?= $data[user_fname].'&nbsp;&nbsp;'.$data[user_surname]?></td>
  </tr>
  <tr>
    <td height="30" align="left" ><span class="style15">ส่งเมื่อ</span></td>
    <td align="left">:</td>
    <td align="left"><?=$data[send_date].'&nbsp;&nbsp;'.$data[send_time]?></td>
  </tr>
  <tr>
    <td height="30" align="left"><span class="style15">ไฟล์แนบ</span></td>
    <td align="left">:</td>
    <td align="left"><?
$user_folder = $data[0];
	$a = $data[send_date];
$year = substr($a, -5,-1);
$month = substr($a, 4,-6);
		
$file_name=$data['book_name'];
 echo "<a href=\"../pdf/$user_folder/$year/$month/$file_name\" TARGET='_blank'><font color= '#OOFFOO' >	$file_name </a>" ; 
 ?> </td>
  </tr>
  <?
  if ($data[vision] == 1){
  ?>
  <tr>
    <td height="30" align="left"><span class="style15">ไฟล์ลับ</span></td>
    <td align="left">:</td>
    <td align="left">
<?
$name_book=$data[book_name];
?>	
<form action="decode.php?name_book=<?=$name_book?>&user_send_id=<?=$data[send_id]?>" method="post" target="_blank">

 <input type="text" name="key" id="key" style ="width:70px;" >&nbsp;&nbsp;&nbsp;
 <input name="" type="submit" value=" OK " />
</form> </td>
  </tr>
  <?
  }
  ?>
  
  
  <tr>
    <td height="67" align="left" valign="top"><span class="style15"><br>
      รายละเอียด</span></td>
    <td align="left" valign="top"><br> :</td>
    <td align="left" valign="top"><br><?=$data[book_detail]?></td>
  </tr>
  <tr align="left" valign="top">
    <td colspan="3"><hr  color="#00CCFF"></td>
    </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <?
  }

  ?>
</table>    
<?
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