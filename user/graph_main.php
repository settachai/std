<html>
<head>
	<title>
	ระบบหนังสือเวียน
	</title>
	<script language="JavaScript" src="Charts/FusionCharts.js"></script>
	<script language="JavaScript" src="Charts/FusionChartsExportComponent.js"></script>
</head>

<body>
<?
include "connect.php";	
$search = $_POST[search];
$send_m = $_POST[send_m];
$send_y = $_POST[send_y];

$go ="$search/$send_m/$send_y";

?>
<div id="chartdiv" align="center">The chart will appear within this DIV. This text will be replaced by the chart.</div>
   <script type="text/javascript">
   	//Create the chart.
	//Note that you necessarily need to set the registerWithJS attribute as 1, as JavaScript is used for client-
	//side communication between the chart and FusionCharts Exporter Component.
	var myChart = new FusionCharts("Charts/Column2D.swf", "myChartId", "1200", "400", "0", "1");
	myChart.setDataURL("data.php?num=<?=$go?>");
	myChart.render("chartdiv");
   </script>

	<!-- We also create a DIV to contain the FusionCharts client-side exporter component -->
	<!--<div id="fcexpDiv" align="center"><font size='3' color='blue'><b>ระบบหนังสือเวียน</b></font></div>-->
		<div id="fcexpDiv" align="center"></div>
</body>
</html>
