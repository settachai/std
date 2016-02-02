<?
include "sessionuser.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<script language="javascript" src="../include/time.js">
</script>
<script language="javascript" src="../include/1.js">
</script>
<script language="Javascript" type="text/javascript" src="tooltip.js"></script>
<script language="Javascript" type="text/javascript" src="ajax.js"></script>


<title>ระบบหนังสือเวียน</title>

<style type="text/css">
/* พื้นที่ tooltip */
#lyrtooltip {
     position:absolute;
     border:1px solid #FFA500;
     background-color: white;
     padding:3px;
     text-align:left;
}
</style>

<link rel="stylesheet" type="text/css" href="menu_user.css">
<style type="text/css">
<!--
A:link {COLOR: #000000; TEXT-DECORATION: none} 
A:visited {COLOR: #000000; TEXT-DECORATION: none} 
A:hover {COLOR: red; TEXT-DECORATION: underline} 

.style4 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #FFFFFF;
}
.style12 {
	font-size: 13px
}
.style15 {color: #ECE9D8}
.style16 {color: #ECE9D8; font-size: 13px; }
.style24 {
	color: #0000FF;
	font-size: 14px;
}
-->
</style>
</head>
<body bgcolor="#999999" leftmargin="0" topmargin="0"  >
 <table width="799" height="822" border="0" align="center" CELLPADDING=0 cellspacing="0" bgcolor="#FFFFFF" > <!--  start table 1 -->
<tr>
    <td width="799" height="200" background="../images/head_02.jpg"></td>
   </tr>
   <tr>
     <td width="799" height="26"  ><? include "menu_user.php"?></td>
   
   <tr bgcolor="#DBDBDB">
	  <td width="799" height="413" align="center">
                 <table width="794" height="412"  border="0" cellpadding="0" cellspacing="0"><!-- start table 2 -->
<tr> 
							 <th width="18" bgcolor="#DBDBDB" scope="col">&nbsp;</th>
<th width="175" align="center" valign="top" bgcolor="#DBDBDB" scope="col">   
                          
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
</table>		</th>
		  <th width="23" scope="col">&nbsp;</th>
<td width="578" align="center" valign="top" bgcolor="#FFFFFF" scope="col">
										<br >
		<form name="frmMain" action="user_delete_book_in.php" method="post" OnSubmit="return onDelete();">								
			<table width="542" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
  <tr align="center">
    <td colspan="7">&nbsp;</td>
    </tr>
  <tr align="center" bgcolor="#0099FF">
    <td width="117" ><span class="style16">เรื่อง</span></td>   
       <td width="106"><span class="style16">วันที่ส่ง</span></td> 
    <td width="84" height="51" align="center"><span class="style16">จำนวนผู้รับ</span></td>
    <td width="56" bgcolor="#0099FF"><span class="style16">เข้าร่วม</span></td>
    <td width="58" bgcolor="#0099FF"><span class="style16">ไม่เข้า</span></td>
    <td width="46" bgcolor="#0099FF"><span class="style16">รอ</span></td>
    <td width="59"><span class="style16">ไฟล์ลับ</span><span class="style15"></span></td>
  </tr>
  
  <?
 include "../include/connect.php";
 
 (!isset($_REQUEST[”page”])) ? $page = 1 : $page=$_REQUEST[”page”];
 $a = $sess_id;
	$sql="select * from book , send ,send_detail , user , typebook where send.user_id = $a and send_detail.send_id = send.send_id and send.book_id = book.book_id and send_detail.user_id = user.user_id and book.typebook_id = typebook.typebook_id order by send.send_id ";
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
	$sql1="select * from  send  where send.user_id = $a  order by send.send_id DESC LIMIT $start, $pagesize;";
	$result1=mysql_query($sql1);
	mysql_query("set names tis620");
	   $i = 0;
	while($data1=mysql_fetch_array($result1)) {
	$sql2="select * from book, send ,send_detail where  send_detail.send_id=$data1[send_id] and send.send_id=send_detail.send_id and book.book_id=send.book_id";
	$result2=mysql_query($sql2);
	$data2=mysql_fetch_array($result2);
	$rows=mysql_num_rows($result2);
if($i%2 == 0){
?>
<tr bgcolor="#99FFFF">
<?
}else{
?>
<tr bgcolor="#D7FBFB">
<?
}
?>
<td height="31" align=left> <font color="#CC0000" ><?=$data2[subject] ?></font></td>
<td align=left><?=$data2[send_date] ?>  </td>
<td align="center"><?=$rows?> </td>
<td align="center">
<?
	$sql4="select * from book, send ,send_detail where  send_detail.send_id=$data1[send_id] and send.send_id=send_detail.send_id and book.book_id=send.book_id and send_detail.approve='2'";
	$result4=mysql_query($sql4);
	$rows4=mysql_num_rows($result4);
	echo "$rows4";
?> </td>
<td align="center">
<?
	$sql5="select * from book, send ,send_detail where  send_detail.send_id=$data1[send_id] and send.send_id=send_detail.send_id and book.book_id=send.book_id and send_detail.approve='3'";
	$result5=mysql_query($sql5);
	$rows5=mysql_num_rows($result5);
	echo "$rows5";
?></td>
<td align="center">
<?
	$sql6="select * from book, send ,send_detail where  send_detail.send_id=$data1[send_id] and send.send_id=send_detail.send_id and book.book_id=send.book_id and send_detail.approve='1'";
	$result6=mysql_query($sql6);
	$rows6=mysql_num_rows($result6);
	echo "$rows6";
?></td>
<?
$name_book=$data2[book_name];
?>

<td width="59" align="center">
<?
	if($data2[vision] >=1 ){
echo "มีไฟล์ลับ";
}   
?></td>
<? 
$i++;
  }
  ?>
   <tr >
    <td width="117" height="26" align="center">&nbsp;</td>
    <td width="106" align="left"></td>
    <td width="84" align="left" ></td>
    <td width="56" align="left"></td>
    <td width="58" align="left"></td>
    <td width="46" align="left"></td>
    <td width="59" align="left"></td>
   </tr>
   <tr >
    <td width="117" align="center">&nbsp;</td>
    <td width="106" align="left"></td>
    <td width="84" align="left" ></td>
    <td width="56" align="left">&nbsp;</td>
    <td width="58" align="left">&nbsp;</td>
    <td width="46" align="left">&nbsp;</td>
    <td width="59" align="left"><?
echo "หน้าที่&nbsp;&nbsp;";
for ($i=1; $i<=$totalpage; $i++) {
if ($i == $pageid) {
echo $i . "&nbsp;";
}
else {
echo "[<a href=\"user_book_in.php?pageid=$i\">$i</a>]&nbsp;";
}
}
?></td>
   </tr>
</table>
</form>

								<!--  END table 3 -->
				                    <br >  
<!-- END fieldset 3 -->   
                        <br ><br >					</td>
				</tr>
  </table><!-- END table 2 -->           </tr>
	<tr>
	  <td width="799" height="100" background="../images/head_05.jpg" >
<div align="right">
					    <p>&nbsp;</p>
					    <p align="center"><span class="style4">
						คณะวิทยาการสื่อสาร มหาวิทยาลัยสงขลานครินทร์ วิทยาเขตปัตตานี อำเภอเมือง จังหวัดปัตตานี 94000 <BR>
				        โทรศัพท์ 0 7334 9692 (สายตรง)   0 7331 3930-50 ต่อ 1380-2 โทรสาร 0 7334 9692 <BR>
						Webmaster : s4920610136@pn.psu.ac.th  </span></p>
	  </div>			 </td>
   </tr>
</table>
</body>
</html>