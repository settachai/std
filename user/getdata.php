<?
     header("content-type: application/x-javascript; charset=tis-620");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE> �����ŧ��ѡ�ҹ </TITLE>
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Description" CONTENT="">
<style type="text/css">
<!--
.style1 {font-size: 18px}
-->
</style>

</HEAD>
<?
  include "../include/connect.php";
  $id=$wb_id;
 $sql = "select * from user , position  where user.user_id='$id' and user.position_id = position.position_id  ";
$result = mysql_query($sql);
$data = mysql_fetch_array($result);
?>
<style>
div{
	background:#33FF66;
	color:darkblue;
	font-size:15px;
	font-weight:bold;
	width:100%;

}
.span1{
	background:#FDFDFD;
	color:darkblue;
	font-size:14px;
	font-weight:bold;
	width:inherit;

}
.span2{
	/*background:linen;*/
	color:darkblue;
	font-size:14px;
	width:150;
}
</style>
<BODY>
<center>
<table width="246" border="0" cellspacing="0" cellpadding="0">
  <tr align="left" bgcolor="#00CCFF">
    <td height="25" colspan="3"><div class="style1">�����ž�ѡ�ҹ</div></td>
  </tr>
  <tr align="left">
    <td height="128" colspan="3"><CENTER><img src="../pic/<?=$data[user_pic]?>" width="100" height="100" border="2"></CENTER></td>
  </tr>
  <tr>
    <td width="33" align="left">&nbsp;</td>
    <td width="80" height="27" align="left"><span class="span1">����-ʡ��</span></td>
    <td width="179" align="left"><span class="span2"><?=$data[user_fname]?>&nbsp;<?=$data[user_surname]?></span></td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td height="27" align="left"><span class="span1">��</span></td>
    <td align="left"><span class="span2"><?=$data[user_sex]?></span></td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td height="25" align="left"><span class="span1">������</span></td>
    <td align="left"><span class="span2"><?=$data[user_tell]?></span></td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td height="24" align="left"><span class="span1">�������</span></td>
    <td align="left"><span class="span2"><?=$data[user_email]?></span></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td height="25" align="left" valign="top"><span class="span1">�������</span></td>
    <td align="left" valign="top"><span class="span2"><?=$data[user_address]?></span></td>
  </tr>
    <tr>
      <td align="left">&nbsp;</td>
    <td height="25" align="left"><span class="span1">���˹�</span></td>
    <td align="left"><span class="span2"><?=$data[position_detail]?></span></td>
  </tr>
</table>
</center>
</BODY>
</HTML>

<?
/*
     //��ҷ���Ѻ��
     $module=$_POST["module"];
     $category=$_POST["category"];
     $wb_id=$_POST["wb_id"];
     
     echo "�����ŷ������<br />";
     echo "module=$module<br />";
     echo "category=$category<br />";
     echo "wb_id=$wb_id<br />";
     echo "���� query �������ʴ��ŷ��˹�� getdata.php"
     

	 */
     //W3C Pass
?>