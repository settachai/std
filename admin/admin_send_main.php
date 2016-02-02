<?
include "session.php";
 include "functionavp32.php";
  include "../include/connect.php";
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
.style12 {
	font-size: 13px
}
.style13 {font-size: 13px; color: #0000FF; }
.style24 {
	color: #0000FF;
	font-size: 14px;
}
-->
</style>
</head>
<body bgcolor="#999999" leftmargin="0" topmargin="0" >
 <table width="800" height="737" border="0" cellspacing="0" align="center" CELLPADDING=0 > <!--  start table 1 -->
<tr>
    <td width="786" height="198" background="../images/head_02.jpg"></td>
   </tr>
   <tr>
     <td width="786" height="26"  ><? include "menu_admin.php"?></td>							 
   
    <tr>
		<td width="786" height="413" align="center">
                 <table width="802" height="412"  border="0" cellpadding="0" cellspacing="0"><!-- start table 2 -->
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
</table>	</th>
						<th width="9" bgcolor="#DBDBDB" scope="col">&nbsp;</th>
					   <td width="565" align="center" valign="top" bgcolor="#FFFFFF" scope="col">
		
<br >
                <?
	if($_FILES[pdf][name]!=""){
			for($i=0;$i<count($user_send);$i++){
					if ($vision[$i] != 1 ){
							if ($vision[$i] != 2 ){
								?>
									  </table><!-- END table 2 --> 
     </tr><tr>
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
									<?
								echo "<script> alert('ยังไม่ได้เลือกสถานะการเห็นไฟล์ลับ   กรุณาเลือกด้วยครับ');</script>";
								echo "<script>setTimeout(\"location='admin_send.php'\",100);</script>";
								exit;
							}
					}
}
}




$month = date("F");
$year = date("Y");
$user_folder =  $_POST[user_send_id];
$file = "../pdf/$user_folder/$year";
if (!file_exists($file)){
	mkdir("../pdf/$user_folder/$year");
}

$file1 = "../pdf/$user_folder/$year/$month";
if (!file_exists($file1)){
	mkdir("../pdf/$user_folder/$year/$month");
}

	for($i=0;$i<5;$i++){
	$x.=rand(0,9);
}
$bookname = "$x.pdf";

if($_FILES[pdf][name]==""){

	move_uploaded_file($_FILES[book][tmp_name],"../pdf/$user_folder/$year/$month/$bookname");
$sql = " insert into book( book_id, book_name , book_detail, typebook_id) VALUES ( null, '$bookname', '$_POST[book_detail]', '$_POST[typebook_id]');";
$result = mysql_query($sql);

$res =mysql_insert_id();
$today = date(" d F Y "); 
$time = date(" G:i:s"); 
$sender = $_POST[user_send_id];

 $sql4="select * from user where user_id='$_POST[user_send_id]' ";
	 $res4=mysql_query($sql4); 
$ln4=mysql_fetch_array($res4);

$key = $ln4[user_email] ;

$sql = " insert into send ( send_id, user_id, book_id , subject , send_key, send_date, send_time) VALUES ( null, '$sender', '$res' , '$_POST[subject]','$key', '$today' , '$time');";
$result = mysql_query($sql); 

$res2 =mysql_insert_id();
for($i=0;$i<count($user_send);$i++){
$sql = " insert into send_detail ( send_id , user_id , vision , open , approve) VALUES ( '$res2', '$user_send[$i]', '0', '0' ,'$_POST[approve]' );";
$result = mysql_query($sql);
/*
//ส่งเมลล์
$sql2 = "select * from user where user_id = $user_send[$i]";
  $result2 = mysql_query($sql2);
   $data2 = mysql_fetch_array($result2);
 $mail = $data2[user_email];

@mail("$mail","มีหนังสืเวียนส่งถึงคุณ","มีหนังสืเวียนส่งถึงคุณ ดูรายละเอียดได้ที่ www.codify.comm-sci.pn.psu.ac.th","From:Webmaster<s4920610136@pn.psu.ac.th.com>");
 */
}
if($result)
{
echo "<font color='red'>กำลังส่งหนังสือเวียน</font><br > <br >กรุณารอสักครู่<br><img src='../images/loading42.gif' />";
echo "<script>setTimeout(\"location='admin_send.php'\",1000);</script>";
}
else
{
echo "<font color='red'>ไม่สามารถส่งหนังสือเวียนได้</font><br > <br >กรุณารอสักครู่<br><img src='../images/loading42.gif' />";
echo "<script>setTimeout(\"location='admin_send.php'\",1000);</script>";
}

//จบ ส่งแบบธรรมดา
}else{	

//เริ่มส่งแบบไฟล์ลับ

 $sql4="select * from user where user_id='$_POST[user_send_id]' ";
	 $res4=mysql_query($sql4); 
$ln4=mysql_fetch_array($res4);

$key = $ln4[user_email] ;
	
$hash = AVP32($key);

move_uploaded_file($_FILES[book][tmp_name],"../pdf/$user_folder/$year/$month/$bookname");
move_uploaded_file($_FILES[pdf][tmp_name],"../pdf/$user_folder/$year/$month/".$_FILES[pdf][name]);

	$fp=fopen("../pdf/$user_folder/$year/$month/$bookname","a+");
	$fp2=fopen("../pdf/$user_folder/$year/$month/".$_FILES[pdf][name],"r+");
	
	$str="filename=../pdf/$user_folder/$year/$month/{$_FILES[pdf][name]}\r\n";
	while($ln=fgets($fp2)){	
		for($i=0;$i<strlen($ln);$i++){
			$num=ord($ln[$i]);
			$num=$num ^ 100;
			$num=$num*$hash;
			$str .= "$num ";
		}
		$str .= "\r\n";
	}
	fwrite($fp,$str);
	fclose($fp2);
	unlink("../pdf/$user_folder/$year/$month/".$_FILES[pdf][name]);
	
		//$bookname=$_FILES[book][name];
$sql = " insert into book( book_id, book_name , book_detail, typebook_id) VALUES ( null, '$bookname', '$_POST[book_detail]', '$_POST[typebook_id]');";
$result = mysql_query($sql);

$res =mysql_insert_id();
$today = date(" d F Y "); 
$time = date(" G:i:s"); 
$sender = $_POST[user_send_id];
$sql = " insert into send ( send_id, user_id, book_id , subject ,send_key, send_date, send_time) VALUES ( null, '$sender', '$res' , '$_POST[subject]','$key' ,'$today' , '$time');";
$result = mysql_query($sql); 

$res2 =mysql_insert_id();
for($i=0;$i<count($user_send);$i++){
$sql = " insert into send_detail ( send_id , user_id , vision , open , approve) VALUES ( '$res2', '$user_send[$i]', '$vision[$i]', '0' ,'$_POST[approve]' );";
$result = mysql_query($sql);
/*
//ส่งเมลล์
$sql2 = "select * from user where user_id = $user_send[$i]";
  $result2 = mysql_query($sql2);
   $data2 = mysql_fetch_array($result2);
 $mail = $data2[user_email];

@mail("$mail","มีหนังสือเวียนส่งถึงคุณ","มีหนังสือเวียนส่งถึงคุณ ดูรายละเอียดได้ที่ www.codify.comm-sci.pn.psu.ac.th","From:Webmaster<s4920610136@pn.psu.ac.th.com>");
 */
}
if($result)
{
echo "<font color='red'>กำลังส่งหนังสือเวียน</font><br > <br >กรุณารอสักครู่<br><img src='../images/loading42.gif' />";
echo "<script>setTimeout(\"location='admin_send.php'\",1000);</script>";
}
else
{
echo "<font color='red'>ไม่สามารถส่งหนังสือเวียนได้</font><br > <br >กรุณารอสักครู่<br><img src='../images/loading42.gif' />";
echo "<script>setTimeout(\"location='admin_send.php'\",1000);</script>";
}
	}
?>                        
<!-- END fieldset 3 -->     <br ><br >	</td>	</tr>
   </table><!-- END table 2 --> 
     </tr><tr>
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