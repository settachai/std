<?
session_start();
if(!$_SESSION["sess_name"] ) 
{
echo "<script>alert('�س�ѧ����� Login ��Ѻ');</script>";
echo "<script>location.href='../login.php';</script>";
}
?>