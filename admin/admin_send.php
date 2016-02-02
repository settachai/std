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
function checknum(e){
	//alert(navigator.appName);
	if(navigator.appName == "Microsoft Internet Explorer"){	
		 ek = event.keyCode;
		if( ek < 48 || ek > 57){
			event.returnValue=false;		
			alert("กรุณาใส่ตัวเลขครับ !");		
		}
	}
	if(navigator.appName == "Netscape"){
		ek = e.which;
		if( ek < 48 || ek > 57){
			ln = document.getElementById("num");
			ln.value="";
			alert("กรุณาใส่ตัวเลขครับ !");		
			ln.value="";
		}
	}
}
function checkfile(){
if(! form1.book.value.match("(.pdf|.PDF)")){
		alert("กรุณาใช้ไฟล์ PDF ครับ");
		return;
	}
	else	if(document.form1.user_send_id.value=="0")
	{
	alert("กรุณาเลือกผู้ส่งด้วยครับ");
	document.form1.user_send_id.focus();
	}
		else	if(document.form1.subject.value=="")
	{
	alert("กรุณาเลือกใส่หัวข้อด้วยครับ");
	document.form1.subject.focus();
	}
	else	if(document.form1.typebook_id.value=="0")
	{
	alert("กรุณาเลือกประเภทหนังสือเวียนด้วยครับ");
	document.form1.typebook_id.focus();
	}
		else	if(document.form1.book_detail.value=="")
	{
	alert("กรุณาใส่รายละเอียดหนังสือด้วยครับ");
	document.form1.book_detail.focus();
	}
	
	else{
	
	form1.submit();
	}

}
</script>
<script language="javascript">

function send(){
	num1=document.getElementById("num").value;
	location="admin_send.php?num="+num1;
}
var count=0;
var temp=[];
function kaka(z,y){	
	for(i=0;i<=count;i++){
		if(temp[i] == z){
			alert("ผู้รับคนนี้ ท่านได้เลือกแล้ว กรุณาเลือกคนอื่น");
			form1.user_send[y].value="";
			return;
		}
	}
	temp[count]=z;
	count++;
}


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
 <table width="798" height="770" border="0" cellspacing="0" align="center" CELLPADDING=0 > <!--  start table 1 -->
<tr>
    <td width="798" height="198" background="../images/head_02.jpg"></td>
   </tr>
   <tr>
     <td width="798" height="26"  ><? include "menu_admin.php"?></td>							 
   
   <tr>
		<td width="798" height="413" align="center">
                 <table width="798" height="412"  border="0" cellpadding="0" cellspacing="0"><!-- start table 2 -->
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
</table>
                         	</th>
						<th width="11" bgcolor="#DBDBDB" scope="col">&nbsp;</th>
					   <td width="560" align="center" valign="top" bgcolor="#FFFFFF" scope="col">
						
<br >	
										<br >	<br ><form action="admin_send_main.php" method="post" name="form1" enctype="multipart/form-data">
										  <table width="514" height="512" border="0" cellpadding="0" cellspacing="0" bordercolor="#84B5FF" bgcolor="#97D6FF">
  <tr align="left" bgcolor="#42B4FF">
    <td height="33" colspan="4">&nbsp;</td>
    </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td height="48" align="left"><p>ระบุจำนวนผู้รับ<br>
    </p>      </td>
    <td>:</td>
    <td align="left"><label>
      <input type="text" name="num" id="num" onKeyPress="checknum(event)"/>&nbsp;&nbsp;<input name="" type="button" value="&nbsp;&nbsp;OK&nbsp;&nbsp;" onClick="send()"/>
      (แล้วกด OK )   </label></td>
  </tr>
  <tr align="left" bgcolor="#42B4FF">
    <td height="16" colspan="4">&nbsp;</td>
    </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">รายชื่อผู้รับ</td>
    <td>:</td>
    <td align="left">   </td>
  </tr>
  
    
    	<?
    if($num!=""){
	for($i=0;$i<$num;$i++){
	$count++;
	?>
    <tr>
      <td align="left">&nbsp;</td>
    <td height="36" align="left">	ผู้รับที่ :<?=($i+1)?></td>
    <td>&nbsp;</td>
    <td align="left"><?
		include "../include/connect.php"; 
		echo"&nbsp;";
		$sql3="select * from user , position where user.position_id = position.position_id ";
		$res3=mysql_query($sql3);
		echo "<select name='user_send[]'  id ='user_send' onchange='kaka(this.value,$i)'>";
		echo "<option value=''>--โปรดเลือกผู้รับ-- ";
		while($ln3=mysql_fetch_array($res3)){
		echo "<option value='$ln3[user_id]'>$ln3[user_fname] &nbsp;$ln3[user_surname]&nbsp;ตำแหน่ง$ln3[position_detail]";
		}
		echo "</select>";
		echo"&nbsp;&nbsp;";

		echo "<select name='vision[]'>";
		echo "<option value=0>ไม่มีไฟล์ลับ";
		echo "<option value=1>เห็น";
		echo "<option value=2>ไม่เห็น";
	
		echo "</select>";
		}
		}
		?></td>
  </tr>
    <tr align="left" bgcolor="#42B4FF">
      <td height="16" colspan="4">&nbsp;</td>
      </tr>
     <tr>
       <td width="14" align="left">&nbsp;</td>
    <td width="112" height="46" align="left">จาก</td>
    <td width="11">:</td>
    <td width="377" align="left">
      <SELECT name="user_send_id" >
      <option value="0">-----กรุณาเลือกผู้ส่ง------
    <?
	include "../include/connect.php"; 
			$sql="select * from user,position where user.position_id = position.position_id ";
			$res=mysql_query($sql);
	
		while($data=mysql_fetch_array($res)){
			echo "<option value=$data[user_id]> $data[user_fname]&nbsp;&nbsp;$data[user_surname]&nbsp;&nbsp; $data[position_detail]";
		}
	?>   
    </SELECT>     </td>
  </tr>
    <tr>
      <td align="left">&nbsp;</td>
    <td height="34" align="left">หัวข้อ</td>
    <td>:</td>
    <td align="left"><label>
      <input type="text" name="subject" id="subject" />
    </label></td>
  </tr>
     <tr>
      <td align="left">&nbsp;</td>
    <td height="47" align="left">ประเภทการส่ง</td>
    <td>:</td>
    <td align="left"><label>
   <input name="approve" type="radio" value="0"  checked="checked"/>ส่งเพื่ออ่าน   <input name="approve" type="radio" value="1" />ส่งเพื่อตอบรับ
    </label></td>
  </tr>
    <tr>
      <td align="left">&nbsp;</td>
      <td height="44" align="left">ประเภทหนังสือเวียน</td>
      <td>:</td>
      <td align="left">
      <?

	   $sql4="select * from typebook ";
	 $res4=mysql_query($sql4); 
	echo "<select name='typebook_id'>";
		echo "<option value='0'>--โปรดเลือกประเภทหนังสือเวียน-- ";
	 while($ln4=mysql_fetch_array($res4)){
	 
		echo "<option value='$ln4[typebook_id]'>$ln4[typebook_detail] ";
	 }
	  ?>      </td>
    </tr>
    <tr>
      <td align="left">&nbsp;</td>
    <td height="86" align="left">รายละเอียด</td>
    <td>:</td>
    <td align="left"><label>
      <textarea name="book_detail" id="book_detail" cols="20" rows="4"></textarea>
    </label></td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td height="37" align="left">ไฟล์แนบ</td>
    <td>:</td>
    <td align="left"><input name="book" type="file" ></td>
  </tr>
   <tr>
     <td align="left">&nbsp;</td>
    <td height="37" align="left">ไฟล์ลับ</td>
    <td>:</td>
    <td align="left"><input name="pdf" type="file" >&nbsp;&nbsp;&nbsp;(&nbsp; ถ้ามี &nbsp;)</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td height="41" align="left">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left"><INPUT TYPE="button" value="   ส่ง   " onclick="checkfile()">  </td>
  </tr>
  <tr align="left" bgcolor="#0099FF">
    <td height="20" colspan="4" bgcolor="#42B4FF">&nbsp;</td>
    </tr>
</table>
			</form><!--  END table 3 -->
 <br >    <br >    <br ><br >					</td>
				</tr>
   </table><!-- END table 2 -->           </tr>
	<tr>
			<td width="798" height="100" background="../images/head_05.jpg" >
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