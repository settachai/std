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
<script language="javascript">
function showuser(id){
	document.open("user_showuser.php?id="+id,"","height=450,width=300");
}

function onDelete()
	{
		if(confirm('Do you want to delete ?')==true)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

</script>
<title>ระบบหนังสือเวียน</title>
<link rel="stylesheet" type="text/css" href="menu_user.css">
<style type="text/css">
<!--
A:link {COLOR: #00000; TEXT-DECORATION: none} 
A:visited {COLOR: #000000; TEXT-DECORATION: none} 
A:hover {COLOR: #000000; TEXT-DECORATION: underline} 

.style4 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #FFFFFF;
}
.style12 {
	font-size: 13px
}
.style24 {
	color: #0000FF;
	font-size: 14px;
}
.style29 {color: #FFFFFF}
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
						 <tr bgcolor="#DBDBDB"> 
							 <th width="18" scope="col">&nbsp;</th>
							<th width="189" align="center" valign="top" scope="col">   
				                       
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
</table>			</th>
						<th width="11" scope="col">&nbsp;</th>
					   <td width="582" align="center" valign="top" bgcolor="#FFFFFF" scope="col">
						
										<br >
		<form name="frmMain" action="user_delete_book_out.php" method="post" OnSubmit="return onDelete();">								
										<table width="518" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
  <tr>
    <td colspan="6">&nbsp;</td>
    </tr>
  <tr bgcolor="#0099FF">
    <td width="56" height="39"><span class="style29">เปิดอ่าน</span></td>
    <td width="126" bordercolor="#FFFFFF"><span class="style29">ผู้รับ</span></td>
    <td width="110" ><span class="style29">เรื่อง</span></td>
    <td width="95"><span class="style29">วันที่ส่ง</span></td>
    <td ><span class="style29">ไฟล์ลับ</span></td>
    <td width="61"><span class="style29">สถานะ</span></td>
  </tr>
  
  <?
 include "../include/connect.php";
 
 (!isset($_REQUEST[”page”])) ? $page = 1 : $page=$_REQUEST[”page”];
 $a = $sess_id;
 //echo "$a";
$sql="select * from book , send ,send_detail , user , typebook where user.user_id = '$a' and send_detail.send_id = send.send_id and send.book_id = book.book_id and send.user_id = user.user_id and book.typebook_id = typebook.typebook_id;";  
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

//echo "$totalrecord";

	$sql="select * from book , send ,send_detail , user , typebook where send.user_id = $a and send_detail.send_id = send.send_id and send.book_id = book.book_id and send_detail.user_id = user.user_id and book.typebook_id = typebook.typebook_id order by send.send_id DESC LIMIT $start, $pagesize;";
	$result=mysql_query($sql);
		   $i = 0;
	while($data=mysql_fetch_array($result)) {


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
<td align=rigth>
<?
if ($data[open]==0){
echo "NO</td>";
}else{
echo "YES";
}
?>
<td align=left > 
<?
echo    " <a href=\"javascript:showuser('$data[user_id]')\">$data[user_fname] &nbsp;$data[user_surname] </A></td>";
?>
<td align=left ><A HREF='user_show_book_out.php?send_id=<?=$data[send_id]?>&rab=<?=$data[user_id]?>'><?=$data[subject]?> </A> </td>
<td> <?=$data[send_date] ?></td>
<td height=38 align="center" valign="middle">
<?
if ($data[vision]==0){
echo "ไม่มี";
}else if($data[vision]==1){
echo "เห็น";
}else{
echo "ไม่เห็น";
}
?></td>
<td> 
<?
if($data[approve] ==1){
echo "รอ"; 
}else if ($data[approve] ==2){
echo "เข้าร่วม";
}else if ($data[approve] ==3){
echo "ไม่เข้า";
}else{
echo "_ ";
}
echo "</td>";
echo  "</tr>";

$i++;
  }
  ?>
   <tr >
    <td width="56" height="25"></td>
    <td width="126"></td>
    <td width="110" ></td>
    <td width="95"></td>
    <td width="56"></td>
    <td width="61"></td>
   </tr>
   <tr >
    <td width="56"></td>
    <td width="126"></td>
    <td width="110" ></td>
    <td width="95" ></td>
    <td width="56" align="right"></td>
    <td width="61" align="right">
	<?
echo "หน้าที่&nbsp;&nbsp;";
for ($i=1; $i<=$totalpage; $i++) {
if ($i == $pageid) {
echo $i . "&nbsp;";
}
else {
echo "[<a href=\"user_book_out.php?pageid=$i\">$i</a>]&nbsp;";
}
}
?>
</td>
   </tr>
</table>
</form><!--  END table 3 -->
 <br > <br ><br ></td></tr>
   </table><!-- END table 2 --> </tr>
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