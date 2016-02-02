<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<script language="javascript">
function book_in(id){
	document.open("show_book_in.php?id="+id,"","height=500,width=400");
}
</script>
<script language="javascript" src="include/time.js">
</script>
<title>ระบบหนังสือเวียน</title>
<link rel="stylesheet" type="text/css" href="include/menu.css">
<style type="text/css">
A:link { TEXT-DECORATION: none} 
A:visited { TEXT-DECORATION: none} 
A:hover {COLOR: #FF0000; TEXT-DECORATION: underline} 
.style4 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #FFFFFF;
}
.style5 {color: #00FF00}
.style6 {
	color:#FFF;
	font-size: 12px;
	}
.style9 {font-size: 18px}
.style11 {color: #33CCFF}
-->
</style>
</head>
<body leftmargin="0" topmargin="0"   bgcolor="#999999">
 <table width="800" height="951" border="0" align="center" CELLPADDING=0 cellspacing="0" >
<tr>
				 <td width="786" height="200" background="images/head_02.jpg"></td>
   </tr>
		 <tr>
				  <td width="786" height="20" >
                        <div id="tabsJ">
                                   <!-- CSS Tabs -->
								<li><a href="index.php"><span>---หน้าแรก---</span></a></li>
								<li><a href="login.php"><span>----เข้าสู่ระบบ---</span></a></li>
								<li><a href="infor_admin.php"><span>---ติดต่อผู้ดูแลระบบ---</span></a></li>
                       </div>				</td>							 
	    <tr>
				<td width="786" height="25" bgcolor="#FFFFFF" ></td>							 
   </tr>
		 <tr>
			    <td width="786" height="600" bgcolor="#FFFFFF">									
					<center>
                    <table width="200" height="529" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="34" background="images/bg_index_01.gif">&nbsp;</td>
  </tr>
  <tr>
    <td height="464" background="images/bg_index_02.gif"><table width="689">
<tr align="left" ><td width="32" height="50" >
												<td height="72" background="images/index.jpg"><span class="style9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หนังสือเวียนล่าสุด</span>
                                <td>                                                
<tr>
												<td width="32" height="50" ><td width="600" height="300" align="center" valign="top">
                                                <br>
                                                <br>
                                                <fieldset style="border:0px  double #33CCFF; padding:10; width:600px;  ">
               
          <?
include "include/connect.php";
$sql="select * from book , send , user where  send.book_id = book.book_id and send.user_id = user.user_id   order by send.send_id DESC LIMIT 5 ";

	$result=mysql_query($sql);
	while($data=mysql_fetch_array($result)) {



			
?>
    <table width="445" height="77" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#CCFFFF">
    <td width="167" rowspan="6" bgcolor="#FFFFFF"><img src="pic/<?=$data[user_pic]?>" width="80" height="80" border="2" ><br ><br ><br ></td>
    <td width="361" height="46" align="left" bgcolor="#FFFFFF"><?=$data[subject]?></td>
  </tr>
    <tr> 
   <td height="29" align="left"><span class="style6">โดย</span> : <?=$data[user_fname]?>&nbsp;<?=$data[user_surname]?></td>
      </tr>
  <tr>
     <td align="left"><span class="style6">ส่งเมื่อ</span> : <?=$data[send_date]?>&nbsp;<?=$data[send_time]?>&nbsp;น.</td>
  </tr>
  <tr>
     <td align="left">&nbsp;</td>
  </tr>
   <tr>
     <td align="left">&nbsp;</td>
  </tr>
  <tr>
     <td align="right">
	 <?
	 echo "<a href=\"javascript:book_in('$data[send_id]')\">อ่านต่อ >></A>";
	 ?>	 </td>
  </tr>
</table>
<span class="style5"><span class="style11">************************************************************</span><br>
<br>  </span>
<?
  }
  ?>
												</fieldset>
					  
					                            <td width="41" align="center" valign="top">                                                
</table>
       </td>
  </tr>
  <tr>
    <td height="31" background="images/bg_index_03.gif">&nbsp;</td>
  </tr>
</table>
<br><br>
</center>					</tr>
			 <tr>
					<td width="786" height="100" background="images/head_05.jpg"  >
					 <div align="right" >
					 	<p>&nbsp;</p>
							 <p align="center" ><span class="style6" >คณะวิศวกรรมศาสตร์ สาขาคอมพิวเตอร์ มหาวิทยาลัยภาคตะวันออกเฉียงเหนือ อำเภอเมือง จังหวัดขอนแก่น 40000 <BR>
				        โทรศัพท์ 088-0670552  061-0573548 (สายตรง) 
                       		 <BR>
                        Webmaster : sniper2202ghost@gmail.com </span></p>
					  </div></td>
		     </tr>
</table>	
</body>
</html>