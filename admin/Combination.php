	<SCRIPT LANGUAGE="Javascript" SRC="FusionCharts/FusionCharts.js"></SCRIPT>
	<style type="text/css">
	<!--
	body {
		font-family: Arial, Helvetica, sans-serif;
		font-size: 12px;
	}
	-->
	</style>
    
    
    
<?php
include "../include/connect.php";	

$sql3 = "select * from send where send.send_date Like '%$_POST[send_m]%'  and send.send_date Like '%$_POST[send_y]%' ";
	$result3=mysql_query($sql3);//ประมวลผลคำสั่ง SQL จาก บรรทัดที่ 5
//$data=mysql_fetch_array($result); //ดึงข้อมูลมาแสดง
$ro=mysql_num_rows($result3);//นับแถวที่ได้จากการดึง
 if($ro==0)//เช็คจำนวนแถว(ถ้ามากกว่า 0 แสดงว่าการ login ผ่าน)
			{
			echo "ยังไม่มีข้อมูลครับ";
			}else{

include("Includes/FusionCharts.php");

include("Includes/FC_Colors.php");
/*
	
	//Store Quarter Name
	$arrData[0][1] = "Quarter 1";
	$arrData[1][1] = "Quarter 2";
	$arrData[2][1] = "Quarter 3";
	$arrData[3][1] = "Quarter 4";


	//Store revenue data
	$arrData[0][2] = 576000;
	$arrData[1][2] = 448000;
	$arrData[2][2] = 956000;
	$arrData[3][2] = 734000;	
	$arrData[4][2] = 956000;
	$arrData[5][2] = 734000;	


	//Store Quantity
	$arrData[0][3] = 576;
	$arrData[1][3] = 448;
	$arrData[2][3] = 956;
	$arrData[3][3] = 734;

*/



if($_POST[search]=='Typebook'){



	$sql="select * from typebook";
	$res=mysql_query($sql);
	$i=0;
	while($ln=mysql_Fetch_array($res)){

	$sql2="select * from book , send where send.book_id=book.book_id and book.typebook_id='$ln[0]' and send.send_date Like '%$_POST[send_m]%'  and send.send_date Like '%$_POST[send_y]%' ";
	$res2=mysql_query($sql2);
	$count=mysql_num_rows($res2); 
	
		$arrData[$i][1]=$ln[2] ;// ใส่ค่าชื่อของแต่ละแท่ง

	$arrData[$i][2]=$count; //  ใส่ค่าความถี่
	

	$arrData[$i][3]=$count; // ใส่เส้น

		$i++;
	}

	}
	
	else if($_POST[search]=='Position'){


$sql="select * from position";
	$res=mysql_query($sql);
	$i=0;
	while($ln=mysql_Fetch_array($res)){

	$sql2="select * from user , send where send.user_id=user.user_id and user.position_id='$ln[0]' and send.send_date Like '%$_POST[send_m]%'  and send.send_date Like '%$_POST[send_y]%' ";
	$res2=mysql_query($sql2);
	$count=mysql_num_rows($res2); 

	$arrData[$i][1]=$ln[2] ;// ใส่ค่าชื่อของแต่ละแท่ง

	$arrData[$i][2]=$count; //  ใส่ค่าความถี่
	

	$arrData[$i][3]=$count; // ใส่เส้น

		$i++;
	}
	
	}
else {


$sql="select * from user";
	$res=mysql_query($sql);
	$i=0;
	while($ln=mysql_Fetch_array($res)){

	$sql2="select * from  send where  send.user_id='$ln[0]' and send.send_date Like '%$_POST[send_m]%'  and send.send_date Like '%$_POST[send_y]%' ";
	$res2=mysql_query($sql2);
	$count=mysql_num_rows($res2); 

	$arrData[$i][1]=$ln[3] .'&nbsp;'.$ln[4] ;// ใส่ค่าชื่อของแต่ละแท่ง

	$arrData[$i][2]=$count; //  ใส่ค่าความถี่
	

	$arrData[$i][3]=$count; // ใส่เส้น

		$i++;
	}
	
	}




	

	$strXML = "<graph caption='สถิติระบบหนังสือเวียน' PYAxisName='terms' SYAxisName='' numberPrefix='' formatNumberScale='0' showValues='0' decimalPrecision='0' anchorSides='10' anchorRadius='3' anchorBorderColor='FF8000'>";
	

	$strCategories = "<categories>";
	

	$strDataRev = "<dataset seriesName='' color='AFD8F8' >";
	$strDataQty = "<dataset seriesName='$_POST[search]' parentYAxis='S' color='FF8000'>";
	
	
	foreach ($arrData as $arSubData) {
       
        $strCategories .= "<category name='" . $arSubData[1] . "' />";
     
        $strDataRev .= "<set value='" . $arSubData[2] . "' />";
        $strDataQty .= "<set value='" . $arSubData[3] . "' />";		
	}
	
	
	$strCategories .= "</categories>";
	
	
	$strDataRev .= "</dataset>";
	$strDataQty .= "</dataset>";
	
	
	$strXML .= $strCategories . $strDataRev . $strDataQty . "</graph>";
	
	
	echo renderChart("FusionCharts/FCF_MSColumn3DLineDY.swf", "", $strXML, "productSales",500, 300);
	
	}
?>
