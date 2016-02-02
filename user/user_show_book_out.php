<?
include "sessionuser.php";
 include "../include/connect.php";
 
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
<link rel="stylesheet" type="text/css" href="menu_user.css">
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
.style12 {
	font-size: 13px
}
.style15 {color: #0000FF}
.style17 {color: #0000FF; font-size: 14px; }
.style24 {
	color: #0000FF;
	font-size: 14px;
}
-->
</style>
</head>
<body bgcolor="#999999" leftmargin="0" topmargin="0" >
 <table width="800" height="770" border="0" cellspacing="0" align="center" CELLPADDING=0 > <!--  start table 1 -->
<tr>
    <td width="786" height="198" background="../images/head_02.jpg"></td>
   </tr>
   <tr>
     <td width="786" height="26"  ><? include "menu_user.php"?></td>							 
   
    <tr>
		<td width="786" height="413" align="center">
                 <table width="800" height="412"  border="0" cellpadding="0" cellspacing="0"><!-- start table 2 -->
						 <tr> 
							 <th width="19" bgcolor="#DBDBDB" scope="col">&nbsp;</th>
							<th width="184" align="center" valign="top" bgcolor="#DBDBDB" scope="col">   
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
$data2 = mysql_fetch_array($result);

						echo "<B>  $sess_fname&nbsp;&nbsp; $sess_surname <br><br> $data2[position_detail]";
?>    </td>
  </tr>
  <tr>
    <td height="135" colspan="2" align="center" valign="middle"><img src="../pic/<?=$data2[user_pic]?>" width="100" height="100" border="2" bordercolor="#FFFFFF" /></td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" valign="middle"> <a href="../logout.php" class="style23 style12"><font color="#FF0000" >ออกจากระบบ </font> </a></td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" valign="middle">&nbsp;</td>
  </tr>
</table>		<br >  <br ><br > 			</th>
						<th width="14" bgcolor="#DBDBDB" scope="col">&nbsp;</th>
					   <td width="583" align="center" valign="top" bgcolor="#FFFFFF" scope="col">
						 <br >  
								<br ><br >
						 <fieldset style="border:2px  double #33CCFF; padding:10; width:400px; background-color:#C6FFFF "><br ><!-- start fieldset 3 -->
 <?
 include "../include/connect.php";
$a = $sess_id;
$sql="select * from book , send ,send_detail , user , typebook where send.user_id = $a and send_detail.send_id = send.send_id and send.book_id = book.book_id and send_detail.user_id = user.user_id and book.typebook_id = typebook.typebook_id and send.send_id = '$_GET[send_id]' and user.user_id='$_GET[rab]' ";
$result=mysql_query($sql);
$data=mysql_fetch_array($result);
?>
 <table width="332" height="348" border="0" cellpadding="0" cellspacing="0" bordercolor="#ECFFD5">
  <tr align="left">
    <td height="41" colspan="3" align="center"><span class="style17">รายละเอียดหนังสือเวียนออก<img src="../images/5_01.PNG" width="25" height="25" /></span></td>
    </tr>
  <tr>
    <td width="87" height="20" align="left"><span class="style15"></span></td>
    <td width="24" align="left">&nbsp;</td>
    <td width="213" align="left">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" align="left"><span class="style15">เรื่อง</span></td>
    <td align="left">:</td>
    <td align="left"><?=$data[subject]?></td>
  </tr>
  <tr>
    <td height="30" align="left"><span class="style15">ผู้รับ</span></td>
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
	
	$user_folder = $data2[user_id];
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
<?
$name_book=$data[book_name];
?>

<td align="left">
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
  <tr>
    <td height="30" align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="right"><img src="../images/20_06.PNG" width="100" height="100" /></td>
  </tr>
</table>

									
								<!--  END table 3 -->
		                        <br >  
						</fieldset> 
								<!--  END table 3 -->
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
