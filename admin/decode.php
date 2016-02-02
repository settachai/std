<?
  include "functionavp32.php";
if($f!=""){

		header("location:../pdf/$u/$y/$m/$f");
}
?>
<HTML>
<HEAD>
<TITLE> ∂Õ¥√À— </TITLE>
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Description" CONTENT="">
</HEAD>

<BODY>
<?
 include "../include/connect.php";
?>

</BODY>
</HTML>
<?
//if($_FILES[file][name]!=""){

//	copy($_FILES[file][tmp_name],"file/".$_FILES[file][name]);

$sql3 = "select * from send where send_id = '$_GET[user_send_id]'";
  $result3 = mysql_query($sql3);
   $data3 = mysql_fetch_array($result3);
   $user_s = $data3[user_id];
   $date_f = $data3[send_date];
$user_key = $data3[send_key];

$key = AVP32($user_key);
$aa=$_GET[name_book];

//$fd = substr($date_f , 4);
$year = substr( $date_f , -5,-1);
$month = substr( $date_f , 4,-6);


	$fp=fopen("../pdf/$user_s/$year/$month/$aa","r+");
	$i=1;
	while($ln=fgets($fp)){
		if(eregi("filename=",$ln)){
			list($a,$filename)=explode("=",$ln);
			$line=$i;
			break;
		}
		$i++;
	}
$fp=fopen("../pdf/$user_s/$year/$month/$aa","r+");
	$i=1;
while($ln=fgets($fp)){
	if($i>$line){
		$x=explode(" ",$ln);
		for($j=0;$j<count($x)-1;$j++){
			$num = $x[$j]/$key;
			$num = $num ^ 100;
			$num = chr($num);
			$str .= $num;	
		}
	}
	//echo "$str<br>";
	$i++;
}
//fclose($fp);
// begin set extent file
if(eregi(".png",$filename))
	$filename="ex.png";
if(eregi(".doc",$filename))
	$filename="ex.doc";
if(eregi(".jpg",$filename))
	$filename="ex.jpg";
if(eregi(".avi",$filename))
	$filename="ex.avi";
if(eregi(".ppt",$filename))
	$filename="ex.ppt";
if(eregi(".xls",$filename))
	$filename="ex.xls";
if(eregi(".mp3",$filename))
	$filename="ex.mp3";
if(eregi(".bmp",$filename))
	$filename="ex.bmp";
if(eregi(".php",$filename))
	$filename="ex.php";
if(eregi(".html",$filename))
	$filename="ex.html";
if(eregi(".pdf",$filename))
	$filename="ex.pdf";
if(eregi(".gif",$filename))
	$filename="ex.gif";
// end set exten file

$fp2=fopen("../pdf/$user_s/$year/$month/".$filename,"w+");
fwrite($fp2,$str);
//echo "filename=$filename";
echo "<script>location='decode.php?f=$filename&u=$user_s&y=$year&m=$month';</script>";
fclose($fp2);
//unlink($filename);
//}
?>