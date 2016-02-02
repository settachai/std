// เช็ค login  หน้า login.php
function checktesting(){
	var username=document.form1.username.value;
	var password=document.form1.password.value;
	if(username == "" || password==""){
alert("กรุณาเติมข้อมูลให้ครบด้วยครับ !");
}else{	document.form1.submit();
	}
}

// เช็ค user_name หน้า add_user.php
	function checkuser(){
	var user_name = document.form1.user_name.value;
	//var pass = document.form1.pass.value;
	if(user_name.length<5 ){
	document.form1.user_name.value="";
	//document.form1.pass.value="";
	alert("กรุณาใช้ไม่ต่ำกว่า 5 ตัวอักษร");
	}
	}

// เช็ค text  หน้า add_user.php
	function checktext(){
		var ek=event.keyCode;
		if(ek != 13 && ek < 48 || ek > 57){
			;
		}else{
			alert("ห้ามป้อนตัวเลขครับ");
			event.returnValue=false;
		}
	}

	function checkpass(){
	//var user = document.form1.user.value;
	var user_password = document.form1.user_password.value;
	if( user_password.length<5){
	//document.form1.user.value="";
	alert("กรุณาใช้ไม่ต่ำกว่า 5 ตัวอักษร");
	document.form1.user_password.value="";
	}
	}

	function checknum(){
var ek = event.keyCode;
if(ek != 13 && ek < 48 || ek > 57){
event.returnValue=false;
alert("กรุณาใส่ตัวเลขครับ !");
}
}

	function checkid_card(){
	var id_card = document.form1.id_card.value;
			if(id_card.length != 13){
			alert("หมายเลขบัตรประชาชนไม่ครบ 13 หลัก");
			document.form1.id_card.value="";
			}
	}

		function checkmail(){
	var user_email = document.form1.user_email.value;
	if(user_email.indexOf('@')<0 || user_email.indexOf('.')<0){
	alert("รูแบบของอีเมลล์ไม่ถูกต้อง");
	document.form1.user_email.value="";
	document.form1.user_email.focus();
	return false;
		}	
	}

		function checktell(){
	var user_tell = document.form1.user_tell.value;
			if(user_tell.length != 10){
			alert("เบอร์โทรศัพท์ไม่ครบ 10 หลัก");
			document.form1.user_tell.value="";
			}
	}

		function checkmember(){
	var user_name = document.form1.user_name.value;
	var user_password = document.form1.user_password.value;
	var user_fname = document.form1.user_fname.value;
	var user_surname = document.form1.user_surname.value;
	var id_card = document.form1.id_card.value;
	var user_address = document.form1.user_address.value;
	var user_email = document.form1.user_email.value;
	var user_tell = document.form1.user_tell.value;
	var user_sex = document.form1.user_sex.value;
//	var pic = document.form1.pic.value;
	var position_id = document.form1.position_id.value;
	if(user_name=="" || user_password=="" || user_fname=="" || user_surname=="" || id_card=="" || user_address=="" || user_email=="" || user_tell=="" || user_sex=="" || position_id=="" ){
	alert("กรุณากรอกข้อมูลให้ครบด้วยครับ !");
	}else{
		document.form1.submit();
	}
	}
	
			function checkeditmember(){
	var user_name = document.form1.user_name.value;
	var user_password = document.form1.user_password.value;
	var user_fname = document.form1.user_fname.value;
	var user_surname = document.form1.user_surname.value;
	var id_card = document.form1.id_card.value;
	var user_address = document.form1.user_address.value;
	var user_email = document.form1.user_email.value;
	var user_tell = document.form1.user_tell.value;
	var user_sex = document.form1.user_sex.value;
	//var pic = document.form1.pic.value;
	//var position_id = document.form1.position_id.value;
	if(user_name=="" || user_password=="" || user_fname=="" || user_surname=="" || id_card=="" || user_address=="" || user_email=="" || user_tell=="" || user_sex==""){
	alert("กรุณากรอกข้อมูลให้ครบด้วยครับ !");
	}else{
		document.form1.submit();
	}
	}

	function checkposition(){
	var position_name=document.form1.position_name.value;
	var position_detail=document.form1.position_detail.value;
	if(position_name == "" || position_detail==""){
alert("กรุณาเติมข้อมูลให้ครบด้วยครับ !");
}else{	document.form1.submit();
	}
}

	function checktypebook(){
	var typebook_name=document.form1.typebook_name.value;
	var typebook_detail=document.form1.typebook_detail.value;
	if(typebook_name == "" || typebook_detail==""){
alert("กรุณาเติมข้อมูลให้ครบด้วยครับ !");
}else{	document.form1.submit();
	}
}