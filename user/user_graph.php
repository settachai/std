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
	var send_m=document.form1.send_m.value;
	var send_y=document.form1.send_y.value;
	if(search == "" || send_m=="" || send_y==""){
alert("��س����͡���������ú���¤�Ѻ !");
}else{	document.form1.submit();
	}
}
</script>

<SCRIPT LANGUAGE="Javascript" SRC="FusionCharts/FusionCharts.js"></SCRIPT>

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
.style5 {font-size: 14px}
.style6 {
	font-size: 16px;
	color: #0033FF;
}
.style7 {font-size: 16px}
.style24 {
	color: #0000FF;
	font-size: 14px;
}
-->
</style>
</head>
<body bgcolor="#999999" leftmargin="0" topmargin="0" >
 <table width="800" height="1014" border="0" cellspacing="0" align="center" CELLPADDING=0 > <!--  start table 1 -->
	<tr>
	    <td width="786" height="200" background="../images/head_02.jpg"></td>
   </tr>
    <tr>
	    <td width="786" height="20"  >  <? include "menu_user.php"?></td>							 
    
   <tr bgcolor="#FFFFFF">
		<td width="786" height="413" align="center">
                 <table width="798" height="688"  border="0" cellpadding="0" cellspacing="0"><!-- start table 2 -->
		   <tr> 
							 <th width="18" height="688" bgcolor="#DBDBDB" scope="col">&nbsp;</th>
						   <th width="184" align="center" valign="top" bgcolor="#DBDBDB" scope="col">   
                              <table width="156" border="0">
              <tr align="left">
    <td height="28" colspan="2">&nbsp;</td>
  </tr>
  <tr align="left">
    <td height="35" colspan="2"><span class="style24">Main Menu</span><br>
      <hr></td>
    </tr>
  <tr>
    <td width="29" height="25" align="right"><img src="../images/5_06.GIF" /></td>
    <td width="117" align="left">	<a href="user_graph.php">��ҿ�ʴ�ʶԵ�</a>		</td>
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
    <td height="25" colspan="2" align="center" valign="middle"> <a href="../logout.php" ><font color="#FF0000" >�͡�ҡ�к� </font> </a></td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" valign="middle">&nbsp;</td>
  </tr>
</table>	


	</th>
						<th width="15" bgcolor="#DBDBDB" scope="col">&nbsp;</th>
<td width="581" align="center" valign="top" bgcolor="#FFFFFF" scope="col">
						
										<br >
<br >
                              <form method=post action="graph_main.php" name="form1" enctype="multipart/form-data" target="ss">
                                        <table width="445" height="143" border="0" cellpadding="0" cellspacing="0">
  <tr align="center">
    <td height="33" colspan="7" bgcolor="#0099FF">ʶԵԡ����˹ѧ������¹</td>
    </tr>
  <tr>
    <td height="18" colspan="7"><hr color="#00CCFF" size="5"></td>
    </tr>
  <tr>
    <td width="113" height="39" align="left">�к���觷���ͧ��ô�ʶԵ�</td>
    <td width="8">&nbsp;</td>
    <td colspan="3" align="left"><select name="search" >
      <option value="">----��觷���ͧ��ô�ʶԵ�----- </option>
      <option value="1">������˹ѧ��� </option>
      <option value="2">���¾�ѡ�ҹ</option>
      <option value="3">��ѡ�ҹ</option>
    </select></td>
    <td width="5">&nbsp;</td>
    <td width="88" align="left">&nbsp;</td>
  </tr>
  <tr>
    <td height="34" align="left">���͡ ��͹��л�</td>
    <td>&nbsp;</td>
    <td width="94" align="left"><select name="send_m" >
      <option value="">�к���͹</option>
      <option value="Jan">���Ҥ�</option>
      <option value="Feb">����Ҿѹ��</option>
      <option value="Mar">�չҤ�</option>
         <option value="Apr">����¹</option>
      <option value="May">����Ҥ�</option>
      <option value="Jun">�Զع�¹</option>
         <option value="July">�á�Ҥ�</option>
      <option value="Aug">�ԧ�Ҥ�</option>
      <option value="Sep">�ѹ��¹</option>
         <option value="Out">���Ҥ�</option>
      <option value="Nov">��Ȩԡ�¹</option>
      <option value="Dec">�ѹ�Ҥ�</option>
    </select></td>
    <td width="6">&nbsp;</td>
    <td width="119" align="left"><select name="send_y" >
      <option value="">�кػա���֡�� </option>
      <option value="2010">2553 </option>
      <option value="2011">2554</option>
      <option value="2012">2555</option>
      <option value="2013">2556</option>
      <option value="2014">2557</option>
    </select></td>
    <td>&nbsp;</td>
    <td align="left"><input type="button" value="  ʶԵ�   " onclick="check()" /></td>
  </tr>
  <tr>
    <td colspan="7" align="left"><hr color="#00CCFF" size="5"></td>
    </tr>
</table>
</FORM>   
            <iframe width="500" height="450" name="ss" frameborder="0"></iframe>                          
                        <br ><br ><br >
							 <!-- END fieldset 3 -->					</td>
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