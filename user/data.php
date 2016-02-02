<?
header("content-type:text/xml");
include "connect.php";	
$num = $_GET[num];
$d = explode("/",$num);
$id = $d[0];
$m = $d[1];
$y = $d[2];
if($id =='1'){
	$title = "ประเภทหนังสือเวียน";
}	else if ($id =='2'){
	$title = "ตำแหน่งของพนักงาน";
}else{
		$title = "พนักงาน";
}
?>
<chart yAxisName='จำนวนครั้งที่ส่ง' caption='<?=$title?>' numberPrefix='' useRoundEdges='1' bgColor='FFCCFF,00FFFF' showBorder='0' exportEnabled='1' exportAtClient='1' exportHandler='fcExporter1'>
	
<?


if($id =='1'){

$sql="select * from typebook";
	$res=mysql_query($sql);
	$i=0;
	while($ln=mysql_Fetch_array($res)){
$sql2="select * from book , send where send.book_id=book.book_id and book.typebook_id='$ln[0]'  and send.send_date Like '%$m%' and send.send_date Like '%$y%' ";
	$res2=mysql_query($sql2);
	$count=mysql_num_rows($res2); 
	echo "<set label='$ln[2]' value='$count'  /> ";
	}
	
}	else if ($id =='2'){
	$sql="select * from position";
	$res=mysql_query($sql);
	$i=0;
	while($ln=mysql_Fetch_array($res)){
$sql2="select * from user , send where send.user_id=user.user_id and user.position_id='$ln[0]'  and send.send_date Like '%$m%' and send.send_date Like '%$y%' ";
	$res2=mysql_query($sql2);
	$count=mysql_num_rows($res2); 
	echo "<set label='$ln[2]' value='$count'  /> ";
	}
	}else {


$sql="select * from user";
	$res=mysql_query($sql);
	$i=0;
	while($ln=mysql_Fetch_array($res)){

	$sql2="select * from  send where send.user_id='$ln[0]'  and send.send_date Like '%$m%' and send.send_date Like '%$y%' ";
	$res2=mysql_query($sql2);
	$count=mysql_num_rows($res2); 
	echo "<set label='$ln[3]' value='$count'  /> ";
	}
	}
?>	

</chart>