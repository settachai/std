<?
function AVP32($data)
{
	$crc=0xFFFF;
	for ($i=0; $i<strlen($data); $i++)
	{
		$x=($crc^0111111111) ^ord($data[$i]);
		$crc ^=$x;
	}
	return $crc;
}


/*$text= "lawan";
echo AVP32 (text)."<br>";
echo decbin (65535)."<br>";
$a=decbin(10);
echo $a."<br>";
echo decbin ($a<<2);*/
?>