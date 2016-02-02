<?
include "session.php";
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
.style9 {color: #0099FF}
.style11 {color: #00CCFF}
.style24 {
	color: #0000FF;
	font-size: 14px;
}
-->
</style>
</head>
<body bgcolor="#999999" leftmargin="0" topmargin="0" >
 <table width="800" height="729" border="0" cellspacing="0" align="center" CELLPADDING=0 > <!--  start table 1 -->
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
    <td align="left"><a href="index.php">เมนูสำหรับผู้ดูแลระบบ</a></td>
  </tr>
  <tr>
    <td height="18" align="right">&nbsp;</td>
    <td align="left">&nbsp;</td>
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
</table>			</th>
						<th width="9" bgcolor="#DBDBDB" scope="col">&nbsp;</th>
					   <td width="563" align="center" valign="top" bgcolor="#FFFFFF" scope="col">
				
										<br >
    <br >
                                        
                                <table width="369" border="0">
  <tr align="left">
    <td height="66" colspan="2">จัดการตำแหน่ง</td>
    </tr>
  <tr>
    <td width="73" align="right"><img src="../images/ch.gif" width="9" height="9" /></td>
    <td width="315" align="left"><a href="">เพิ่มตำแหน่ง</a></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="left"><span class="style11">...........................................................</span></td>
  </tr>
  <tr>
    <td align="right"><img src="../images/ch.gif" width="9" height="9" /></td>
    <td align="left"><a href="">แสดง/ลบ/แก้ไขตำแหน่ง</a></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="left"><span class="style11">...........................................................</span></td>
  </tr>
  <tr>
    <td align="right"><img src="../images/ch.gif" width="9" height="9" /></td>
    <td align="left"><a href="">ค้นหาตำแหน่ง</a></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="left"><span class="style11">...........................................................</span></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td height="61" colspan="2" align="left">จัดการผู้ใช้</td>
    </tr>
  <tr>
    <td align="right"><img src="../images/ch.gif" width="9" height="9" /></td>
    <td align="left"><a href="">เพิ่ม</a></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="left"><span class="style11">...........................................................</span></td>
  </tr>
  <tr>
    <td align="right"><img src="../images/ch.gif" width="9" height="9" /></td>
    <td align="left"><a href="">แสดง/ลบ/แก้ไข</a></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="left"><span class="style11">...........................................................</span></td>
  </tr>
  <tr>
    <td align="right"><img src="../images/ch.gif" width="9" height="9" /></td>
    <td align="left"><a href="">ค้นหา</a></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="left"><span class="style11">...........................................................</span></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td height="59" colspan="2" align="left">จัดการประเภทหนังสือ</td>
    </tr>
  <tr>
    <td align="right"><img src="../images/ch.gif" width="9" height="9" /></td>
    <td align="left"><a href="">เพิ่มประเภทหนังสือเวียน</a></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="left"><span class="style11">...........................................................</span></td>
  </tr>
  <tr>
    <td align="right"><img src="../images/ch.gif" width="9" height="9" /></td>
    <td align="left"><a href="">แสดง/ลบ/แก้ไขประเภทหนังสือเวียน</a></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="left"><span class="style11">...........................................................</span></td>
  </tr>
  <tr>
    <td align="right"><img src="../images/ch.gif" width="9" height="9" /></td>
    <td align="left"><a href="">ค้นหาประเภทหนังสือเวียน</a></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="left"><span class="style11">...........................................................</span></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td height="60" colspan="2" align="left">ส่งหนังสือเวียน</td>
    </tr>
  <tr>
    <td align="right"><img src="../images/ch.gif" width="9" height="9" /></td>
    <td align="left"><a href="">ส่งหนังสือเวียน</a></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="left"><span class="style11">...........................................................</span></td>
  </tr>
  <tr>
    <td align="right"><img src="../images/ch.gif" width="9" height="9" /></td>
    <td align="left"><a href="">ค้นหาหนังสือเวียน</a></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="left"><span class="style11">...........................................................</span></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td height="60" colspan="2" align="left">กราฟสถิติ</td>
    </tr>
  <tr>
    <td align="right"><img src="../images/ch.gif" width="9" height="9" /></td>
    <td align="left"><a href="">กราฟแสดงสถิติ</a></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="left"><span class="style11">...........................................................</span></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
</table>
                                <p><br >
							      <!--  END table 3 --><br >  
						</p>

                         <br >  <br >  <br >  
								<!-- END fieldset 3 --></td>
				</tr>
   </table><!-- END table 2 -->           </tr>
	<tr>
			<td width="786" height="100" background="../images/head_05.jpg" >
					  <div align="right">
					    <p>&nbsp;</p>
					    <p align="center"><span class="style4">
						คณะวิศวกรรมศาสตร์ สาขาคอมพิวเตอร์ มหาวิทยาลัยภาคตะวันออกเฉียงเหนือ อำเภอเมือง จังหวัดขอนแก่น 40000 <BR>
				        โทรศัพท์ 088-0670552  061-0573548 (สายตรง) 
                        <BR>
                        Webmaster : sniper2202ghost@gmail.com </span></p>
					  </div>			 </td>
    </tr>
</table>
<!-- END table 3 -->	
</body>
</html>