<!--
// ��駤�Ң�ͤ����ʴ����ҷ������������� WEB ��ҹ��ҧ��Ѻ
var d_title="�к�˹ѧ������¹  �س���˹�ҹ���������� : "
var get_time
//get the login time
var login_h=new Date()
var login_ms=login_h.getTime()
function get_current_time(){
var one_sec=1000
current_time=new Date()
current_time.getTime()
//hold the login time of the user 
var login_time=Math.floor((current_time-login_ms)/one_sec)
document.title=d_title+" "+login_time+" "+"�Թҷ�"
//if he pass the minute
if  (login_time>60){
var m=Math.floor(login_time/60)
var s=login_time%60
document.title=d_title+" "+m+" "+"�ҷ� "+s+" "+"�Թҷ�"
	}
}
function loop_time() {
setInterval("get_current_time()",100)
}
window.onload =loop_time
-->
