<?
include "session.php";
include "../include/connect.php";




if ($_FILES[pic][name]==""){
$sql = "select * from user where user_id='$_POST[user_id]'";
  $result = mysql_query($sql);
while($data=mysql_fetch_array($result))  
   {
$pic = $data[user_pic];
   }
}else{
move_uploaded_file($_FILES[pic][tmp_name],"../pic/".$_FILES[pic][name]);
$pic=$_FILES[pic][name];
}
$sql = "update user set user_name='$_POST[user_name]',user_password='$_POST[user_password]',user_fname='$_POST[user_fname]',user_surname='$_POST[user_surname]',id_card='$_POST[id_card]',user_address='$_POST[user_address]',user_sex='$_POST[user_sex]',user_email='$_POST[user_email]', user_tell='$_POST[user_tell]', user_pic='$pic' ,user_key='$_POST[user_key]' , position_id='$position_id' where user_id='$_POST[user_id]'";
mysql_query("set names tis620");
$result = mysql_query($sql);  // ประมวลผลคำสั่ง sql ที่มาจาก $sql
if($result)
{
echo "<script>setTimeout(\"location='view_user.php'\",100);</script>";
}
else
{
echo "<CENTER>แก้ไขข้อมูลไม่ได้</CENTER>";
echo "<script>setTimeout(\"location='view_user.php'\",100);</script>";
}
?>