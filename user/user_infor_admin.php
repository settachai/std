<?
include "sessionuser.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<script language="javascript" src="../include/time.js">
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
	font-size: 13px;
	color: #FF0000;
}
.style19 {color: #FFFFFF}
.style20 {color: #000000}
.style22 {color: #999999}
.style23 {color: #666666}
.style24 {
	color: #0000FF;
	font-size: 14px;
}
.style32 {font-size: 14px}
-->
</style>
</head>
<body bgcolor="#999999" leftmargin="0" topmargin="0" >

 <table width="800" height="855" border="0" align="center" CELLPADDING=0 cellspacing="0" bgcolor="#FFFFFF" > <!--  start table 1 -->
<tr>
    <td width="786" height="200" background="../images/head_02.jpg" class="style19 style20"></td>
   </tr>
   <tr>
	    <td width="786" height="20" class="style19 style20"  ><? include "menu_user.php"?></td>							 
   
    <tr>
	  <td width="786" height="413" align="center" class="style19 style20">
               <table width="798" height="412"  border="0" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC"><!-- start table 2 -->
<tr> 
							 <th width="17" bgcolor="#DBDBDB" scope="col">&nbsp;</th>
<th width="178" align="center" valign="top" bgcolor="#DBDBDB" scope="col">   
			       
                                        
            <table width="176" height="443" border="0">
  <tr align="left">
    <td height="28" colspan="2">&nbsp;</td>
  </tr>
  <tr align="left">
    <td height="38" colspan="2"><span class="style24">Main Menu</span><br>
      <hr></td>
    </tr>
  <tr>
    <td width="34" height="18" align="right"><img src="../images/5_06.GIF" /></td>
    <td width="156" align="left"><a href="user_infor_admin.php" class="style23" >ผู้ดูแลระบบ</a><br></td>
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
    <td height="18" align="right">&nbsp;</td>
    <td align="left">&nbsp;</td>
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
    <td height="25" colspan="2" align="center" valign="middle"> <a href="../logout.php" class="style23 style12"> <font color="#FF0000" >ออกจากระบบ </font></a></td>
  </tr>
</table>	
		  </th>
						<th width="22" bgcolor="#DBDBDB" scope="col">&nbsp;</th>
    <td width="581" align="left" valign="top" scope="col">
   <br>   <br>
<CENTER>
<table width="531" height="443" border="0" background="../images/bg_infor.gif">
                     
<tr>
                        <th height="82" colspan="3" align="left" scope="col"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/support.png" /><span class="style32">ผู้ดูแลระบบ</span><br>
                  <hr color="#000000" width="450" ></th>
                </tr>
                     <tr>
                      <td width="231" rowspan="5" align="right"><img src="../images/yyyy.jpg" width="191" height="140" /></td>
                       <th width="20" align="left" bgcolor="#FFFFFF" scope="col">&nbsp;</th>
                       <th width="266" height="30" align="left" scope="col"><span class="style20">:: นายยะยา เปาะลอ </span></th>
           </tr>
                     <tr>
                       <td align="left" bgcolor="#FFFFFF">&nbsp;</td>
                       <td height="29" align="left"><span class="style20">:: รหัส4920610136 </span></td>
           </tr>
                     <tr>
                       <td align="left" bgcolor="#FFFFFF">&nbsp;</td>
                       <td height="29" align="left"><span class="style20">:: เอกICTM คณะวิทยาการสื่อสาร </span></td>
           </tr>
                     <tr>
                       <td align="left" bgcolor="#FFFFFF">&nbsp;</td>
                       <td height="26" align="left"><span class="style20">:: e-mail lawan_ict@hotmail.com </span></td>
           </tr>
                     <tr>
                       <td align="left" bgcolor="#FFFFFF">&nbsp;</td>
                       <td height="27" align="left"><span class="style20">:: มหาวิทยาสงขลานคริทร์วิทยาเขตปัตตานี </span></td>
           </tr>
                     <tr>
                      <td align="left">&nbsp;</td>
                       <td align="left" bgcolor="#FFFFFF">&nbsp;</td>
                       <td height="18" colspan="3">&nbsp;</td>
                </tr>
                     <tr>
                       <td rowspan="5" align="right"><img src="../images/ddd.jpg" width="192" height="140" /></td>
                       <th width="20" align="left" bgcolor="#FFFFFF" scope="col">&nbsp;</th>
                       <th width="266" height="30" align="left" scope="col"><span class="style20">:: นายฆอยรี ดือราแม </span></th>
           </tr>
                     <tr>
                       <td align="left" bgcolor="#FFFFFF">&nbsp;</td>
                       <td height="24" align="left"><span class="style20">:: รหัส4920610018</span></td>
           </tr>
                     <tr>
                       <td align="left" bgcolor="#FFFFFF">&nbsp;</td>
                       <td height="27" align="left"><span class="style20">:: เอกICTM คณะวิทยาการสื่อสาร </span></td>
           </tr>
                     <tr>
                       <td align="left" bgcolor="#FFFFFF">&nbsp;</td>
                       <td height="24" align="left"><span class="style20">:: e-mail adek_jubjub@hotmail.com </span></td>
           </tr>
                     <tr>
                       <td align="left" bgcolor="#FFFFFF">&nbsp;</td>
                       <td height="23" align="left"><span class="style20">:: มหาวิทยาสงขลานคริทร์วิทยาเขตปัตตานี </span></td>
                </tr>
                     <tr>
                       <td height="18" colspan="3" align="center">&nbsp;</td>
                </tr>
                     <tr>
                       <td height="18" colspan="3" align="center">&nbsp;</td>
                     </tr>
               </table>
              <p>&nbsp;</p>
                   <h4>&nbsp;</h4>
            </CENTER><!-- END fieldset 3 -->   
          <br ><br >					</td>
				</tr>
   </table><!-- END table 2 -->      </tr>
	<tr>
			<td width="786" height="100" background="../images/head_05.jpg" class="style19 style20" >
					  <div align="right">
					    <p>&nbsp;</p>
					    <p align="center"><span class="style4">
						คณะวิทยาการสื่อสาร มหาวิทยาลัยสงขลานครินทร์ วิทยาเขตปัตตานี อำเภอเมือง จังหวัดปัตตานี 94000 <BR>
				        โทรศัพท์ 0 7334 9692 (สายตรง)   0 7331 3930-50 ต่อ 1380-2 โทรสาร 0 7334 9692 <BR>
						Webmaster : s4920610136@pn.psu.ac.th  </span></p>
					  </div>			 </td>
    </tr>
</table>
<span class="style19 style20">
 <!-- END table 3 -->	
 </span>
</body>
</html>