function Inint_AJAX() {
   try { return new ActiveXObject("Msxml2.XMLHTTP");  } catch(e) {} //IE
   try { return new ActiveXObject("Microsoft.XMLHTTP"); } catch(e) {} //IE
   try { return new XMLHttpRequest();          } catch(e) {} //Native Javascript
   alert("XMLHttpRequest not supported");
   return null;
};

function loadtooltip(obj, id) {
     //AJAX
     var req = Inint_AJAX();
     req.onreadystatechange = function () { 
          if (req.readyState==4) {
               if (req.status==200) {
                    displaytooltip(obj, req.responseText);
               } 
          } 
     };
     //สร้าง connection
     req.open("POST", "getdata.php", true); 
     req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
     req.send("wb_id="+id); //ส่งค่า
};