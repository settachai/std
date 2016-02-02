<?
 include "../include/connect.php";
 include "sessionuser.php";
 include "functionavp32.php";

	if($_FILES[pdf][name]!=""){
			for($i=0;$i<count($user_send);$i++){
					if ($vision[$i] != 1 ){
							if ($vision[$i] != 2 ){
								echo "<script> alert('ยังไม่ได้เลือกสถานะการเห็นไฟล์ลับ   กรุณาเลือกด้วยครับ');</script>";
								echo "<script>setTimeout(\"location='user_send.php'\",100);</script>";
								exit;
																}
									}
			}
}
$month = date("F");
$year = date("Y");
$user_folder = $_SESSION["sess_id"] ;
$file = "../pdf/$user_folder/$year";
if (!file_exists($file)){
	mkdir("../pdf/$user_folder/$year");
}
$file1 = "../pdf/$user_folder/$year/$month";
if (!file_exists($file1)){
	mkdir("../pdf/$user_folder/$year/$month");
}

for($i=0;$i<5;$i++){
	$x.=rand(0,9);
}		
$bookname = "$x.pdf";

if($_FILES[pdf][name]==""){


	move_uploaded_file($_FILES[book][tmp_name],"../pdf/$user_folder/$year/$month/$bookname");
$sql = " insert into book( book_id, book_name , book_detail, typebook_id) VALUES ( null, '$bookname', '$_POST[book_detail]', '$_POST[typebook_id]');";
$result = mysql_query($sql);

$res =mysql_insert_id();
$today = date(" d F Y "); 
$time = date(" G:i:s"); 
$sender = $sess_id;
$key = $_SESSION["sess_email"] ;

$sql = " insert into send ( send_id, user_id, book_id , subject , send_key, send_date, send_time) VALUES ( null, '$sender', '$res' , '$_POST[subject]','$key', '$today' , '$time');";
$result = mysql_query($sql); 

$res2 =mysql_insert_id();
for($i=0;$i<count($user_send);$i++){
$sql = " insert into send_detail ( send_id , user_id , vision , open , approve) VALUES ( '$res2', '$user_send[$i]', '0', '0' ,'$_POST[approve]' );";
$result = mysql_query($sql);
/*
//ส่งเมลล์
$sql2 = "select * from user where user_id = $user_send[$i]";
  $result2 = mysql_query($sql2);
   $data2 = mysql_fetch_array($result2);
 $mail = $data2[user_email];

@mail("$mail","มีหนังสืเวียนส่งถึงคุณ","มีหนังสืเวียนส่งถึงคุณ ดูรายละเอียดได้ที่ www.codify.comm-sci.pn.psu.ac.th","From:Webmaster<s4920610136@pn.psu.ac.th.com>");
 */
}
if($result)
{
echo "<script>setTimeout(\"location='user_send.php'\",100);</script>";
}else{
echo	 "<script>alert('ไม่สามารถส่งหนังสือเวียนได');</script>";
echo "<script>location.href='user_send.php';</script>";
}

//จบ ส่งแบบธรรมดา
}else{	

//เริ่มส่งแบบไฟล์ลับ

$key = $_SESSION["sess_email"];
$hash = AVP32($key);

move_uploaded_file($_FILES[book][tmp_name],"../pdf/$user_folder/$year/$month/$bookname");
move_uploaded_file($_FILES[pdf][tmp_name],"../pdf/$user_folder/$year/$month/".$_FILES[pdf][name]);

	$fp=fopen("../pdf/$user_folder/$year/$month/$bookname","a+");
	$fp2=fopen("../pdf/$user_folder/$year/$month/".$_FILES[pdf][name],"r+");
	
	$str="filename=../pdf/$user_folder/$year/$month/{$_FILES[pdf][name]}\r\n";
	while($ln=fgets($fp2)){	
		for($i=0;$i<strlen($ln);$i++){
			$num=ord($ln[$i]);
			$num=$num ^ 100;
			$num=$num*$hash;
			$str .= "$num ";
		}
		$str .= "\r\n";
	}
	fwrite($fp,$str);
	fclose($fp2);
	unlink("../pdf/$user_folder/$year/$month/".$_FILES[pdf][name]);
	
		//$bookname=$_FILES[book][name];
$sql = " insert into book( book_id, book_name , book_detail, typebook_id) VALUES ( null, '$bookname', '$_POST[book_detail]', '$_POST[typebook_id]');";
$result = mysql_query($sql);

$res =mysql_insert_id();
$today = date(" d F Y "); 
$time = date(" G:i:s"); 
$sender = $sess_id;
$sql = " insert into send ( send_id, user_id, book_id , subject ,send_key, send_date, send_time) VALUES ( null, '$sender', '$res' , '$_POST[subject]','$key' ,'$today' , '$time');";
$result = mysql_query($sql); 
$res2 =mysql_insert_id();
for($i=0;$i<count($user_send);$i++){
$sql = " insert into send_detail ( send_id , user_id , vision , open , approve) VALUES ( '$res2', '$user_send[$i]', '$vision[$i]', '0' ,'$_POST[approve]' );";
$result = mysql_query($sql);
/*
//ส่งเมลล์
$sql2 = "select * from user where user_id = $user_send[$i]";
  $result2 = mysql_query($sql2);
   $data2 = mysql_fetch_array($result2);
 $mail = $data2[user_email];

@mail("$mail","มีหนังสือเวียนส่งถึงคุณ","มีหนังสือเวียนส่งถึงคุณ ดูรายละเอียดได้ที่ www.codify.comm-sci.pn.psu.ac.th","From:Webmaster<s4920610136@pn.psu.ac.th.com>");
 */
}
if($result)
{
echo "<script>setTimeout(\"location='user_book_out.php'\",100);</script>";
}else{
echo	 "<script>alert('ไม่สามารถส่งหนังสือเวียนได้');</script>";
echo "<script>location.href='user_send.php';</script>";
}
	}
?>