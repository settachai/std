<?
     header("content-type: application/x-javascript; charset=tis-620");

     //ค่าที่รับมา
     $module=$_POST["module"];
     $category=$_POST["category"];
     $wb_id=$_POST["wb_id"];
     
     echo "ข้อมูลที่ส่งมา<br />";
     echo "module=$module<br />";
     echo "category=$category<br />";
     echo "wb_id=$wb_id<br />";
     echo "เอาไป query แล้วมาแสดงผลที่หน้า getdata.php"
     
     //W3C Pass
?>