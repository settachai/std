<?
include "sessionuser.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<script language="javascript" src="../include/time.js">
</script>
<script language="javascript">
function check(){
	var search=document.form1.search.value;
	var keyword=document.form1.keyword.value;
	if(search == "" || keyword==""){
alert("��س������������ú���¤�Ѻ !");
}else{	document.form1.submit();
	}
}
</script>
<title>�к�˹ѧ������¹</title>
<link rel="stylesheet" type="text/css" href="../admin/menu_admin.css">
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
.style24 {
	color: #0000FF;
	font-size: 14px;
}
.style28 {font-size: 14px}
-->
</style>
</head>
<body bgcolor="#999999" leftmargin="0" topmargin="0" >
 <table width="800" height="806" border="0" cellspacing="0" align="center" CELLPADDING=0 > <!--  start table 1 -->
	<tr>
	    <td width="786" height="200" background="../images/head_02.jpg"></td>
   </tr>
   <tr>
	    <td width="786" height="20"  >  <? include "menu_user.php"?></td>							 
   
    <tr bgcolor="#DBDBDB">
		<td width="786" height="413" align="center">
<table width="797" height="412"  border="0" cellpadding="0" cellspacing="0"><!-- start table 2 -->
						 <tr> 
							 <th width="19" scope="col">&nbsp;</th>
						   <th width="183" align="center" valign="top" scope="col">   
								                            
 <table width="155" border="0">
              <tr align="left">
    <td height="28" colspan="2">&nbsp;</td>
  </tr>
  <tr align="left">
    <td height="35" colspan="2"><span class="style24">Main Menu</span><br>
      <hr></td>
    </tr>
  <tr>
    <td width="29" height="25" align="right"><img src="../images/5_06.GIF" /></td>
    <td width="116" align="left"><a href="user_search.php">���Ҿ�ѡ�ҹ</a></td>
  </tr>
  <tr>
    <td height="14" align="right"></td>
    <td align="left"> </td>
  </tr>
  <tr>
    <td height="15" align="right"></td>
    <td align="left">  </td>
  </tr>
  <tr>
    <td height="14" align="right"></td>
    <td align="left"> 	</td>
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
    <td height="25" colspan="2" align="center" valign="middle">  <a href="../logout.php" class="style23 style12"> <font color="#FF0000" >�͡�ҡ�к� </font></a></td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" valign="middle">&nbsp;</td>
  </tr>
</table>	
 <br ><br ><br ><br > </th>
						<th width="16" scope="col">&nbsp;</th>
  <td width="579" align="center" valign="top" bgcolor="#FFFFFF" scope="col">
										<br ><br >

            <FORM METHOD="post" POST ACTION="user_search.php" name="form1">
		      <table width="475" height="85" border="0" cellpadding="0" cellspacing="0">
  <tr align="left" bgcolor="#0099FF">
    <td height="29" colspan="6" align="center"><span class="style28">���Ҿ�ѡ�ҹ</span></td>
    </tr>
   <tr align="left">
    <td height="16" colspan="6"><hr  color="#00CCFF"></td>
    </tr>
  <tr align="left">
    <td width="152" height="18">�к���觷���ͧ��ä���</td>
    <td width="5">&nbsp;</td>
    <td width="126"><select name="search" >
      <option value="">��觷���ͧ��ä���</option>
      <option value="user_fname">���;�ѡ�ҹ </option>
      <option value="user_surname">���ʡ�ž�ѡ�ҹ</option>
      <option value="user_address">������边ѡ�ҹ </option>
    </select></td>
    <td width="8">&nbsp;</td>
    <td width="101"><input type="text" name="keyword" width="100" /></td>
    <td width="83" align="right"><input type="button" value="  ����   "  onclick="check()" /></td>
    </tr>
  <tr align="left">
    <td height="16" colspan="6"><hr  color="#00CCFF"></td>
    </tr>
</table>
</FORM>      <br><br>
<?                       
if($_POST[keyword]!=""){	 

include "../include/connect.php"; 

 $sql = "select * from user ,position where user.position_id=position.position_id and $_POST[search] like '%$_POST[keyword]%' ";
 $result = mysql_query($sql);  
 $rows=mysql_num_rows($result);//�Ѻ�Ƿ����ҡ��ô֧
 if($rows==0)//�礨ӹǹ��(����ҡ���� 0 �ʴ���ҡ�� login ��ҹ)
			{
			echo "����բ����Ť�Ѻ";
			}else{
 while($data = mysql_fetch_array($result))
{
	?>
     <table width="314" border="0" cellspacing="0" cellpadding="0">
  <tr align="center" bgcolor="#0099FF">
    <td height="28" colspan="3" bgcolor="#0099FF">�����ž�ѡ�ҹ</td>
    </tr>
  <tr align="left" valign="top">
    <td colspan="3"><hr  color="#00CCFF"></td>
    </tr>
  <tr>
    <td width="62" align="left" valign="top">����</td>
    <td width="20" align="left" valign="top">:</td>
    <td width="232" align="left" valign="top"><?=$data[user_fname]?>  </td>
  </tr>
  <tr>
    <td align="left" valign="top">ʡ��</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><?=$data[user_surname]?>  </td>
  </tr>
  <tr>
    <td align="left" valign="top">��</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><?=$data[user_sex]?> </td>
  </tr>
  <tr>
    <td align="left" valign="top">������</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><?=$data[user_tell]?> </td>
  </tr>
  <tr>
    <td align="left" valign="top">E-Mail</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><?=$data[user_email]?> </td>
  </tr>
  <tr>
    <td align="left" valign="top">�������</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><?=$data[user_address]?>  </td>
  </tr>
  <tr>
    <td align="left" valign="top">���˹�</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><?=$data[position_detail]?></td>
  </tr>
  <tr align="left" valign="top">
    <td colspan="3"><hr  color="#00CCFF"></td>
    </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr></table>  
  <?
  }
}
}
?>

                                <!--  END table 3 -->
                                <br >
							    <br >  
 <!-- END fieldset 3 -->   
                        <br ><br >					</td>
		</tr>
   </table><!-- END table 2 --></tr>
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