<?
session_start();
if(!$_SESSION["sess_fname"] ) 
{
echo "<script>alert('คุณยังไม่ได้ Login ครับ');</script>";
echo "<script>location.href='../login.php';</script>";
}
?>