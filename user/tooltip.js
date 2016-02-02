var arrowheadimg=["arrow_b.gif", "arrow_t.gif"]; /* path ของรูปหัวลูกศร ล่าง, บน */
var arrowheadheight=15; /* ความสูงของลูกศร */
var transparent=100; /* ความโปร่งใสของ tooltip 0-จาง, 100-ทึบ */
var speed=30;
var delayin=10; /* หน่วงเวลาก่อนแสดง tooltip */
var delayout=10; /* หน่วงเวลแสดงผลก่อนออก */
var autohidedelay=5000; /* จับเวลาเพื่อซ่อน tooltip อัตโนมัติ */
var lyrtooltip='lyrtooltip'; /* id ของ tooltip สำหรับกำหนด style ด้วย CSS */

/* ตัวแปรที่ใช้ในโปรแกรม */
var tooltip_parent;
var tooltip_text;
var tooltip_ie=document.all;
var fadevalue=0;
var fade_status='';
var tooltip_showdelay=0;
var tooltip_hidedelay=0;
var tooltip_autohidedelay=0;

/* ซ่อน tooltip */
function hidetooltip() {
     clearTimeout(tooltip_showdelay);
     clearTimeout(tooltip_hidedelay);
     tooltip_hidedelay=setTimeout("tooltip_hide()", delayout);
}

/* แสดง tooltip */
function displaytooltip(obj, val) {
     if (val!="") {
          tooltip_parent=obj;
          tooltip_text=val;
          clearTimeout(tooltip_showdelay);
          tooltip_showdelay=setTimeout("tooltip_show()", delayin);
     };
}

function tooltip_getposOffset(overlay, offsettype){
     var totaloffset=(offsettype=="left")? overlay.offsetLeft : overlay.offsetTop;
     var parentEl=overlay.offsetParent;
     while (parentEl!=null) {
          totaloffset=(offsettype=="left")? totaloffset+parentEl.offsetLeft : totaloffset+parentEl.offsetTop;
          parentEl=parentEl.offsetParent;
     }
     return totaloffset;
};

function tooltip_iecompattest(){
     return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
};

function tooltip_show() {
     clearTimeout(tooltip_autohidedelay);
     clearTimeout(tooltip_hidedelay);
     /* กำหนดข้อความภายใน tooltip */
     dropmenuobj.innerHTML=tooltip_text;
     var windowedgeX=tooltip_ie && !window.opera? tooltip_iecompattest().scrollLeft : window.pageXOffset;
     var windowedgeY=tooltip_ie && !window.opera? tooltip_iecompattest().scrollTop+tooltip_iecompattest().clientHeight-15 : window.pageYOffset+window.innerHeight-18;
     /* ตำแหน่งแกน X */
     var left=tooltip_getposOffset(tooltip_parent, "left");
     if (left<windowedgeX) left=windowedgeX;
     dropmenuobj.style.left=left+"px";
     /* ตำแหน่งแกน Y */
     var ypos=tooltip_getposOffset(tooltip_parent, "top");
     var top=ypos+tooltip_parent.offsetHeight;
     if (top+dropmenuobj.offsetHeight+arrowheadheight>windowedgeY) {
          tooltip_arrowpos=0;
          top=ypos-arrowheadheight;
          dropmenuobj.style.top=top-dropmenuobj.offsetHeight+1+"px";
     } else {
          tooltip_arrowpos=1;
          dropmenuobj.style.top=top+arrowheadheight-1+"px";
     }

     /* ตำแหน่งหัวลูกศร */
    // arrowobj.style.top=top+"px";
  //   arrowobj.style.left=left+5+"px";
     /* รูปหัวลูกศร */
  //   arrowobj.src=arrowheadimg[tooltip_arrowpos];
     /* แสดง tooltip */
     tooltip_fadeIn();
}

function tooltip_hide() {
     clearTimeout(tooltip_showdelay);
     /* ซ่อน tooltip */
     tooltip_fadeOut();
};

/* fade effect cross browser */
function tooltip_fadeIn() {
     if (fade_status=='fadeOut') return;
     fade_status='fadeIn';
     fadevalue=fadevalue+speed;
     if (fadevalue>=transparent) { /* เมื่อการแสดงสมบูรณ์แล้ว */
          /* เริ่มการทำงานซ่อนอัตโนมัติ */
          tooltip_autohidedelay=setTimeout("tooltip_fadeOut()", autohidedelay);
          return;
     }
     setTimeout("tooltip_fadeIn()", 10);
     tooltip_setOpacity();
}

function tooltip_fadeOut() {
     fade_status='fadeOut';
     fadevalue=fadevalue-speed;
     if (fadevalue>0) setTimeout("tooltip_fadeOut()", 2);
     else fade_status=""; /* เมื่อซ่อนเรียบร้อยแล้ว */
     tooltip_setOpacity();
}

function tooltip_setOpacity() {
     /* tooltip */
     var el = dropmenuobj.style;
     el.opacity = (fadevalue / 100);
     el.MozOpacity = (fadevalue / 100);
     el.KhtmlOpacity = (fadevalue / 100);
     el.filter = "alpha(opacity=" + fadevalue + ")";
     /* หัวลูกศร */
     var ah = arrowobj.style;
     ah.opacity = (fadevalue / 100);
     ah.MozOpacity = (fadevalue / 100);
     ah.KhtmlOpacity = (fadevalue / 100);
     ah.filter = "alpha(opacity=" + fadevalue + ")";
     
     if (fadevalue<1) {
          el.visibility='hidden';
          ah.visibility='hidden';
     } else {
          el.visibility='visible';
          ah.visibility='visible';
     }
}
/* fade effect */

/* อ่าน title ของลิงค์ต่างๆมาสร้าง tooltip */
function autotooltip() {
     if (document.all) var links=document.all.tags("A")
     else if (document.getElementById) var links=document.getElementsByTagName("A")
     var total=links.length
     for (i=0;i<total;i++){
          if  (links[i].title!="") {
               links[i].onmouseover=function() {
                    displaytooltip(this, this.tooltip);
               }
               links[i].onmouseout=hidetooltip;
               links[i].onclick=hidetooltip;
               links[i].tooltip=links[i].title;
               links[i].title=""; /* ยกเลิก tooltip ของ Browser */
          }
     };
}

function tooltip_initalize() {
     /* preload image */
     for (i=0; i<arrowheadimg.length; i++) {
          img=new Image();
          img.src=arrowheadimg[i];
     };
     
     /* กำหนด layer สำหรับ แสดงผล tooltip */
     dropmenuobj=document.createElement("div");
     dropmenuobj.id=lyrtooltip;
     dropmenuobj.style.position="absolute";
     dropmenuobj.style.visibility='hidden';
     dropmenuobj.style.zIndex=2000;
     document.body.appendChild(dropmenuobj);
     
     /* สร้าง image สำหรับหัวลูกศร */
     arrowobj=document.createElement("img");
     arrowobj.style.position="absolute";
     arrowobj.style.visibility='hidden';
     arrowobj.src=arrowheadimg[0];
     arrowobj.style.zIndex=2001;
     document.body.appendChild(arrowobj);
     
     /* กำหนด event ให้กับพื้นที่แสดงผล tooltip */
     dropmenuobj.onmouseover=function () {
          clearTimeout(tooltip_hidedelay);
     }
     dropmenuobj.onmouseout=hidetooltip;
     
     /* ถ้าต้องการให้ลิงค์ที่มี title แสดง toolip โดยอัตโนมัติ */
     autotooltip();
};

if (window.addEventListener) window.addEventListener("load", tooltip_initalize, false)
else if (window.attachEvent) window.attachEvent("onload", tooltip_initalize)
else if (document.getElementById) window.onload=tooltip_initalize