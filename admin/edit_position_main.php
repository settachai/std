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
<title>�к�˹ѧ������¹</title>
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
.style5 {font-size: 14px}
.style7 {font-size: 16px}
.style8 {color: #0000FF}
.style9 {color: #CC6600}
.style13 {color: #CC6600; font-size: 10px; }
.style15 {color: #FF0000}
.style24 {
	color: #0000FF;
	font-size: 14px;
}
-->
</style>
</head>
<body bgcolor="#999999" leftmargin="0" topmargin="0" >
 <table width="800" height="762" border="0" cellspacing="0" align="center" CELLPADDING=0 > <!--  start table 1 -->
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
    <td align="left"><a href="add_position.php">�������˹�</a></td>
  </tr>
  <tr>
    <td height="24" align="right"><img src="../images/5_06.GIF" /></td>
    <td align="left"> <a href="view_position.php">�ʴ�/ź/��� ���˹�</a></td>
  </tr>
  <tr>
    <td height="26" align="right"><img src="../images/5_06.GIF" /></td>
    <td align="left"> <a href="search_position.php">���ҵ��˹�</a></td>
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
  <td height="43" colspan="2" align="center"><a href="../logout.php" class="style23 style9"><font color="#FF0000" >�͡�ҡ�к� </font></a></td>
	  </tr>
</table>	<br>
<br /><br />						</th>
						<th width="9" bgcolor="#DBDBDB" scope="col">&nbsp;</th>
					   <td width="564" align="center" valign="top" bgcolor="#FFFFFF" scope="col">
							<br > <br >	<br ><br >  
								<?
	include "../include/connect.php";
$str="select * from position where position_name='$_POST[position_name]'   and  position_id != '$_POST[position_id]';";
		$res=mysql_query($str);
		$rows=mysql_num_rows($res);
		$data=mysql_fetch_array($res);
		if($rows==1){	
		?>
  									<span class="style15">���˹觹�������Ǥ�Ѻ �������ö�����</span> <br >                               
                                        <br >
                                        <img src="../images/progress_dot_line.gif" />
  <?
echo "<script>setTimeout(\"location='view_position.php'\",500);</script>";	
}else{
$sql = "update position set position_name='$_POST[position_name]', position_detail='$_POST[position_detail]' where position_id='$_POST[position_id]' ";
mysql_query("set names tis620"); // �������ҹ��������
$result = mysql_query($sql);  // ����ҳ����� sql ����Ҩҡ $sql
if($result)
{
?>
   										<span class="style15"> ��䢵��˹����º��������</span><br >                                
                                        <br >
                                        <img src="../images/progress_dot_line.gif" />
  <?
echo "<script>setTimeout(\"location='view_position.php'\",500);</script>";
}else{
?>
   										<span class="style15">�������ö��䢵��˹���</span>                                <br >
                                        <br >
                                        <img src="../images/progress_dot_line.gif" />
  <?
  echo "<script>setTimeout(\"location='add_position.php'\",500);</script>";
}
}
								?>	
							<br >	<br > <br ><br ></td>
				</tr>
   </table><!-- END table 2 -->           </tr>
	<tr>
			<td width="786" height="100" background="../images/head_05.jpg" >
					  <div align="right">
					    <p>&nbsp;</p>
					    <p align="center"><span class="style4">
						����Է�ҡ��������� ����Է�����ʧ��ҹ��Թ��� �Է��ࢵ�ѵ�ҹ� ��������ͧ �ѧ��Ѵ�ѵ�ҹ� 94000 <BR>
				        ���Ѿ�� 0 7334 9692 (��µç)   0 7331 3930-50 ��� 1380-2 ����� 0 7334 9692 <BR>
						Webmaster : s4920610136@pn.psu.ac.th  </span></p>
					  </div>			 </td>
    </tr>
</table>
<!-- END table 3 -->	
</body>
</html>