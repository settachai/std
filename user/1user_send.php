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

function checknum(e){
	//alert(navigator.appName);
	if(navigator.appName == "Microsoft Internet Explorer"){	
		 ek = event.keyCode;
		if( ek < 48 || ek > 57){
			event.returnValue=false;		
			alert("��س�������Ţ��Ѻ !");		
		}
	}
	if(navigator.appName == "Netscape"){
		ek = e.which;
		if( ek < 48 || ek > 57){
			ln = document.getElementById("num");
			ln.value="";
			alert("��س�������Ţ��Ѻ !");		
			ln.value="";
		}
	}
}
function checkfile(){
	if(! form1.book.value.match("(.pdf|.PDF)")){
		alert("��س������ PDF ��Ѻ");
		return;
	}
		else	if(document.form1.subject.value=="")
	{
	alert("��س����͡�����Ǣ�ʹ��¤�Ѻ");
	document.form1.subject.focus();
	}
	else	if(document.form1.typebook_id.value=="0")
	{
	alert("��س����͡������˹ѧ������¹���¤�Ѻ");
	document.form1.typebook_id.focus();
	}
		else	if(document.form1.book_detail.value=="")
	{
	alert("��س������������´˹ѧ��ʹ��¤�Ѻ");
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
	location="user_send.php?num="+num1;
}
var count=0;
var temp=[];
function kaka(z,y){	
	for(i=0;i<=count;i++){
		if(temp[i] == z){
			alert("����Ѻ����� ��ҹ�����͡���� ��س����͡�����");
			form1.user_send[y].value="";
			return;
		}
	}
	temp[count]=z;
	count++;
}

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
.style12 {
	font-size: 13px
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
 <table width="800" height="737" border="0" cellspacing="0" align="center" CELLPADDING=0 > <!--  start table 1 -->
<tr>
    <td width="786" height="198" background="../images/head_02.jpg"></td>
   </tr>
   <tr>
     <td width="786" height="26"  ><? include "menu_user.php"?></td>							 
   
    <tr bgcolor="#DBDBDB">
		<td width="786" height="413" align="center">
                 <table width="799" height="412"  border="0" cellpadding="0" cellspacing="0"><!-- start table 2 -->
<tr> 
							 <th width="19" scope="col">&nbsp;</th>
							<th width="183" align="center" valign="top" scope="col">   
        <table width="175" border="0">
                          <tr align="left">
    <td height="28" colspan="2">&nbsp;</td>
  </tr>
  <tr align="left">
    <td height="35" colspan="2"><span class="style24">Main Menu</span><br>
      <hr></td>
    </tr>
  <tr>
    <td width="34" height="25" align="right"><img src="../images/5_06.GIF" /></td>
    <td width="156" align="left"><a href="user_book_in.php">˹ѧ������¹���</a></td>
  </tr>
  <tr>
    <td height="24" align="right"><img src="../images/5_06.GIF" /></td>
    <td align="left">  <a href="user_book_out.php">˹ѧ������¹�͡</a></td>
  </tr>
  <tr>
    <td height="26" align="right"><img src="../images/5_06.GIF" /></td>
    <td align="left">  <a href="user_send.php">��˹ѧ������¹</a></td>
  </tr>
  <tr>
    <td height="26" align="right"><img src="../images/5_06.GIF" /></td>
    <td align="left"> 	 <a href="user_search_book.php">����˹ѧ������¹</a></td>
  </tr>
   <tr>
    <td height="26" align="right"><img src="../images/5_06.GIF" /></td>
    <td align="left"> 	 <a href="user_check_approve.php">��Ǩ�ͺʶҹ�</a></td>
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
    <td height="25" colspan="2" align="center" valign="middle"> <a href="../logout.php" class="style23 style12"><font color="#FF0000" >�͡�ҡ�к� </font> </a></td>
  </tr>
  <tr>
    <td height="25" colspan="2" align="center" valign="middle">&nbsp;</td>
  </tr>
</table>	 <br ><br >			</th>
		  <th width="15" scope="col">&nbsp;</th>
					   <td width="582" align="left" valign="top" bgcolor="#FFFFFF" scope="col"><br >
<br ><form action="user_send_main.php" method="post" name="form1" enctype="multipart/form-data">
										  <table width="485" height="533" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#97D6FF" >
  <tr bgcolor="#42B4FF">
    <td align="left" bgcolor="#42B4FF">&nbsp;</td>
    <td height="30" align="left" bgcolor="#42B4FF">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td width="12" align="left">&nbsp;</td>
    <td width="104" height="25" align="left">�ҡ</td>
    <td width="10">:</td>
    <td width="359" align="left">
    <?
			echo " $data[user_fname]&nbsp;&nbsp;$data[user_surname] ";
	?>    </td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td height="39" align="left"><p>�кبӹǹ����Ѻ<br>
    </p>      </td>
    <td>:</td>
    <td align="left"><label>
      <input type="text" name="num" id="num"  onKeyPress="checknum(event)"/>&nbsp;&nbsp;<input name="" type="button" value="&nbsp;&nbsp;OK&nbsp;&nbsp;" onClick="send()" />
      (���ǡ� OK )   </label></td>
  </tr>
  <tr bgcolor="#42B4FF">
    <td align="left">&nbsp;</td>
    <td height="21" align="left">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left"></td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">��ª��ͼ���Ѻ</td>
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
    <td height="36" align="left">	����Ѻ��� :<?=($i+1)?></td>
    <td>&nbsp;</td>
    <td align="left"><?
		echo"&nbsp;";
	 	$sql3="select * from user , position where user.position_id = position.position_id ";
		$res3=mysql_query($sql3);
		echo "<select name='user_send[]' id ='user_send' onchange='kaka(this.value,$i)'>";
		echo "<option value=''>--�ô���͡����Ѻ-- ";
		while($ln3=mysql_fetch_array($res3)){
		echo "<option value='$ln3[user_id]'>$ln3[user_fname] &nbsp;$ln3[user_surname]&nbsp;$ln3[position_detail]";
		}
		echo "</select>";
		echo"&nbsp;&nbsp;";

		echo "<select name='vision[]'>";
		echo "<option value=0>���������Ѻ";
		echo "<option value=1>���";
		echo "<option value=2>������";
	
		echo "</select>";
		}
		}
		?></td>
  </tr>
    <tr bgcolor="#42B4FF">
      <td align="left">&nbsp;</td>
      <td height="18" align="left">&nbsp;</td>
      <td>&nbsp;</td>
      <td align="left">&nbsp;</td>
    </tr>
    <tr>
      <td align="left">&nbsp;</td>
    <td height="34" align="left">��Ǣ��</td>
    <td>:</td>
    <td align="left"><label>
      <input type="text" name="subject" id="subject" />
    </label></td>
  </tr>
    <tr>
      <td align="left">&nbsp;</td>
    <td height="47" align="left">�����������</td>
    <td>:</td>
    <td align="left"><label>
   <input name="approve" type="radio" value="0"  checked="checked"/>��������ҹ   <input name="approve" type="radio" value="1" />�����͵ͺ�Ѻ
    </label></td>
  </tr>
    <tr>
      <td align="left">&nbsp;</td>
      <td height="44" align="left">������˹ѧ������¹</td>
      <td>:</td>
      <td align="left">
      <?
	   $sql5="select * from typebook  , position , user where user.user_id = '$sess_id' and user.position_id = position.position_id ";
	   	 $res5=mysql_query($sql5); 
		 $data = mysql_fetch_array($res5);
	  if ($data[position_id] ==1){
	   $sql4="select * from typebook ";
	 $res4=mysql_query($sql4); 
	echo "<select name='typebook_id' >";
		echo "<option value=''>--�ô���͡������˹ѧ������¹-- ";
	 while($ln4=mysql_fetch_array($res4)){
	 
		echo "<option value='$ln4[typebook_id]'>$ln4[typebook_detail] ";
	 }
	  }else{
	  
	  $sql4="select * from typebook  , position , user where user.user_id = '$sess_id' and user.position_id = position.position_id and position_name = typebook_name  ";
	 $res4=mysql_query($sql4); 
	echo "<select name='typebook_id'>";
	 while($ln4=mysql_fetch_array($res4)){
	 
		echo "<option value='$ln4[typebook_id]'>$ln4[typebook_detail] ";
	 }
	 }
	  ?>      </td>
    </tr>
    <tr>
      <td align="left">&nbsp;</td>
    <td height="86" align="left">��������´</td>
    <td>:</td>
    <td align="left"><label>
      <textarea name="book_detail" id="book_detail" cols="20" rows="4"></textarea>
    </label></td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td height="37" align="left">���Ṻ</td>
    <td>:</td>
    <td align="left"><input name="book" type="file" ></td>
  </tr>
   <tr>
     <td align="left">&nbsp;</td>
    <td height="37" align="left">����Ѻ</td>
    <td>:</td>
    <td align="left"><input name="pdf" type="file" >&nbsp;&nbsp;&nbsp;(&nbsp; ����� &nbsp;)</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td height="41" align="left">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left"><INPUT TYPE="button" value="   ��   " onclick="checkfile()">  </td>
  </tr>
  <tr bgcolor="#42B4FF">
    <td align="left">&nbsp;</td>
    <td height="22" align="left">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left">&nbsp;</td>
  </tr>
</table>
										</form>

								<!--  END table 3 -->
		                        <br >  
		                        <br >  
	<!-- END fieldset 3 -->   
                        <br ><br >					</td>
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