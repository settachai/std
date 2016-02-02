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
.style14 {color: #0000FF; font-size: 13px; }
.style15 {color: #3900FF}
.style16 {color: #0000FF}
-->
</style>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" >
 <table width="800" height="770" border="0" cellspacing="0" align="center" CELLPADDING=0 > <!--  start table 1 -->
<tr>
		 <td  width="7" height="198" background="../images/shadowl.jpg"></td>
    <td width="786" height="198" background="../images/head_02.jpg"></td>
    <td width="7" height="198" background= "../images/shadowr.jpg"  ></td>
   </tr>
   <tr>
	    <td  width="7" height="26" background="../images/shadowl.jpg"></td>
	 <td width="786" height="26"  ><? include "menu_admin.php"?></td>							 
	 <td width="7"   height="26"background= "../images/shadowr.jpg"></td>
   <tr>
		<td  width="7" height="24" background="../images/shadowl.jpg"></td>
		<td width="786" height="24" ></td>							 
		<td width="7"   height="24"background= "../images/shadowr.jpg"></td>
   </tr>
    <tr>
		<td  width="7" height="413" background="../images/shadowl.jpg"></td>
        <td width="786" height="413" align="center">
                 <table width="786" height="412"  border="0" cellpadding="0" cellspacing="0"><!-- start table 2 -->
						 <tr> 
							 <th width="19" bgcolor="#FFFFFF" scope="col">&nbsp;</th>
							<th width="211" align="center" valign="top" scope="col">   
					  <fieldset style="border:2px  double #33CCFF; padding:10; width:200px;  ">   <!-- start fieldset 1 -->
										<legend>หนังสือเวียน</legend>  
                                        
                                          <table width="200" border="0">
  <tr>
    <td width="34" height="18" align="right">&nbsp;</td>
    <td width="156" align="left">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" align="right"><img src="../images/5_06.GIF" /></td>
    <td align="left"><a href="user_book_in.php">หนังสือเวียนเข้า</a></td>
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
    <td height="18" align="right">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
</table>	
 </fieldset>   <!-- end fieldset 1 -->            
									<br ><br >
								<fieldset style="border:2px  double #33CCFF; padding:10; width:200px;  "><!-- start fieldset 2 -->
									<legend>ยินดีต้อนรับ</legend>
									 <p> <span class="style22">
									 
<? 

 include "../include/connect.php";
$sql = "select * from user , position  where user.user_id='$sess_id' and user.position_id = position.position_id  ";
mysql_query("set names tis620");
$result = mysql_query($sql);
$data = mysql_fetch_array($result);

						echo "<B>  $sess_fname&nbsp;&nbsp; $sess_surname <br><br> $data[position_detail]";
?>
                        </span>
									 <br > <br > 
                                     <img src="../pic/<?=$data[user_pic]?>" width="100" height="100" border="2" bordercolor="#FFFFFF">
                                     <br > <br >
									 <a href="../logout.php" class="style23 style12"><font color="#FF0000" >ออกจากระบบ </font></a>
									 <br ><br >
									 </p>
							 </fieldset> <br ><br >  <br ><br > <!-- end fieldset 2 -->						</th>
						<th width="10" bgcolor="#FFFFFF" scope="col">&nbsp;</th>
					   <td width="550" align="center" valign="top" scope="col">
								<fieldset style="border:2px  double #33CCFF; padding:10; width:500px;  "><!-- start fieldset 3 -->
									<legend>หนังสือเวียนออก</legend>
										<br >
		<form name="frmMain" action="user_delete_book_out.php" method="post" OnSubmit="return onDelete();">								
										<table width="491" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="5">&nbsp;</td>
    </tr>
  <tr bgcolor="#CCFFFF">
    <td width="59"><span class="style15">เปิดอ่าน</span></td>
    <td width="114"><span class="style14">ผู้รับ</span></td>
    <td width="114" ><span class="style14">เรื่อง</span></td>
    <td width="120"><span class="style14">วันที่ส่ง</span></td>
    <td width="66"><span class="style16">ไฟล์ลับ</span></td>
  
  </tr>
  
  <?
 include "../include/connect.php";
 
 (!isset($_REQUEST[”page”])) ? $page = 1 : $page=$_REQUEST[”page”];
 $a = $sess_id;
$sql="select * from book , send ,send_detail , user , typebook where send_detail.user_id = $a and send_detail.send_id = send.send_id and send.book_id = book.book_id and send.user_id = user.user_id and book.typebook_id = typebook.typebook_id;";  
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



	$sql="select * from book , send ,send_detail , user , typebook where send.user_id = $a and send_detail.send_id = send.send_id and send.book_id = book.book_id and send_detail.user_id = user.user_id and book.typebook_id = typebook.typebook_id order by send.send_id DESC LIMIT $start, $pagesize;";
	$result=mysql_query($sql);
	while($data=mysql_fetch_array($result)) {


echo "  <tr>";
echo    "<td align=rigth>";
if ($data[open]==0){
echo "NO</td>";
}else{
echo "YES</td>";
}
echo    "<td align=left valign='top'>  <a href=\"javascript:showuser('$data[user_id]')\">$data[user_fname] &nbsp;$data[user_surname] </A></td>";
echo    "<td align=left valign='top'><A HREF='user_show_book_out.php?send_id=$data[send_id]'>$data[subject] </A> </td>";
echo    "<td> $data[send_date] </td>";
echo    "<td width=66 height=20>";
if ($data[vision]==0){
echo "ไม่มี";
}else if($data[vision]==1){
echo "เห็น";
}else{
echo "ไม่เห็น";
}

echo "</td>";
echo  "</tr>";

  }
  ?>
   <tr >
    <td width="59">&nbsp;</td>
    <td width="114"></td>
    <td width="114" ></td>
    <td width="120"></td>
    <td width="66">&nbsp;</td>
   
   </tr>
   <tr >
    <td width="59">&nbsp;</td>
    <td width="114"></td>
    <td width="114" ></td>
    <td width="120" >&nbsp;</td>
    <td width="66" align="right"><?
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
						</fieldset> <!-- END fieldset 3 -->   
                        <br ><br >					</td>
				</tr>
		</table><!-- END table 2 -->
           <td width="7" height="413" background= "../images/shadowr.jpg"  ></td>
   </tr>
	<tr>
			<td  width="7" height="100" background="../images/shadowl.jpg" ></td>
			<td width="786" height="10" background="../images/head_05.jpg" >
					  <div align="right">
					    <p>&nbsp;</p>
					    <p align="center"><span class="style4">
						คณะวิทยาการสื่อสาร มหาวิทยาลัยสงขลานครินทร์ วิทยาเขตปัตตานี อำเภอเมือง จังหวัดปัตตานี 94000 <BR>
				        โทรศัพท์ 0 7334 9692 (สายตรง)   0 7331 3930-50 ต่อ 1380-2 โทรสาร 0 7334 9692 <BR>
						Webmaster : s4920610136@pn.psu.ac.th  </span></p>
					  </div>			 </td>
			 <td width="7" height="100" background= "../images/shadowr.jpg"  ></td>
	</tr>
</table>
<!-- END table 3 -->	
</body>
</html>