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
<title>�к�˹ѧ������¹</title>
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
.style10 {color: #000000}
.style12 {
	font-size: 13px
}
.style14 {
	font-size: 14px;
	color: #000000;
}
.style24 {
	color: #0000FF;
	font-size: 14px;
}
.style25 {font-size: 14px}
-->
</style>
</head>
<body bgcolor="#999999" leftmargin="0" topmargin="0" >
 <table width="798" height="891" border="0" cellspacing="0" align="center" CELLPADDING=0 > <!--  start table 1 -->
<tr>
    <td width="798" height="200" background="../images/head_02.jpg"></td>
   </tr>
   <tr>
	    <td width="798" height="20"  ><? include "menu_user.php"?></td>							 
   
   <tr>
		<td width="798" height="565" align="center">
<table width="801" height="565"  border="0" cellpadding="0" cellspacing="0"><!-- start table 2 -->
<tr> 
							 <th width="18" height="565" bgcolor="#DBDBDB" scope="col">&nbsp;</th>
<th width="186" align="center" valign="top" bgcolor="#DBDBDB" scope="col">   
 <table width="169" border="0">
<tr align="left">
    <td height="28" colspan="2">&nbsp;</td>
  </tr>
  <tr align="left">
    <td height="38" colspan="2"><span class="style24">Main Menu</span><br>
      <hr></td>
    </tr>
  <tr>
    <td height="25" align="right"><img src="../images/5_06.GIF" /></td>
    <td align="left"><a href="user_infor.php">�ʴ���������ǹ���</a> </td>
  </tr>
  <tr>
    <td height="24" align="right"><img src="../images/5_06.GIF" /></td>
    <td align="left"><a href="user_edit.php">��䢢�������ǹ���</a></td>
  </tr>   
  <tr>
    <td height="24" align="right"><img src="../images/5_06.GIF" /></td>
    <td align="left"><a href="user_edit_key.php">��������Դ���</a></td>
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
    <td height="25" colspan="2" align="center" valign="middle"> <a href="../logout.php" class="style23 style12"><font color="#FF0000" >�͡�ҡ�к� </font>  </a></td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" valign="middle">&nbsp;</td>
  </tr>
</table>				</th>
						<th width="14" bgcolor="#DBDBDB" scope="col">&nbsp;</th>
<td width="579" align="left" valign="top" bgcolor="#FFFFFF" scope="col">
							
			<br >	<br >	<?
$sql = "select * from user  where user_id='$sess_id'  ";
mysql_query("set names tis620");
$result = mysql_query($sql);
$data = mysql_fetch_array($result);
$key_file = $data[user_key];

if($key_file == $_POST[user_key1]){



$sql = "update user set user_key='$_POST[user_key2]' where user_id='$sess_id' ";
mysql_query("set names tis620");
$result = mysql_query($sql);  
if($result)
{
?>
  </td>
		</tr>
   </table><!-- END table 2 -->           </tr>
	<tr>
			<td width="798" height="100" background="../images/head_05.jpg" >
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
<?
echo "<script>alert(' ����������º�������Ǥ�Ѻ   �����Դ������� ��� $_POST[user_key2] ');</script>";
echo "<script>setTimeout(\"location='user_edit_key.php'\",100);</script>";
}
else
{
echo "<CENTER>��䢢����������</CENTER>";
echo "<script>setTimeout(\"location='user.php'\",500);</script>";
}

}else{
?>
  </td>
		</tr>
   </table><!-- END table 2 -->           </tr>
	<tr>
			<td width="798" height="100" background="../images/head_05.jpg" >
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
<?
echo "<script>alert(' �����Դ������ ���١��ͧ��Ѻ');</script>";
echo "<script>setTimeout(\"location='user_edit_key.php'\",100);</script>";

}
?>
                                        <br >  <br >  <br >  
		  </td>
		</tr>
   </table><!-- END table 2 -->           </tr>
	<tr>
			<td width="798" height="100" background="../images/head_05.jpg" >
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