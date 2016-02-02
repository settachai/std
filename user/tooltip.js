var arrowheadimg=["arrow_b.gif", "arrow_t.gif"]; /* path �ͧ�ٻ����١�� ��ҧ, �� */
var arrowheadheight=15; /* �����٧�ͧ�١�� */
var transparent=100; /* ��������ʢͧ tooltip 0-�ҧ, 100-�ֺ */
var speed=30;
var delayin=10; /* ˹�ǧ���ҡ�͹�ʴ� tooltip */
var delayout=10; /* ˹�ǧ����ʴ��š�͹�͡ */
var autohidedelay=5000; /* �Ѻ�������ͫ�͹ tooltip �ѵ��ѵ� */
var lyrtooltip='lyrtooltip'; /* id �ͧ tooltip ����Ѻ��˹� style ���� CSS */

/* ����÷���������� */
var tooltip_parent;
var tooltip_text;
var tooltip_ie=document.all;
var fadevalue=0;
var fade_status='';
var tooltip_showdelay=0;
var tooltip_hidedelay=0;
var tooltip_autohidedelay=0;

/* ��͹ tooltip */
function hidetooltip() {
     clearTimeout(tooltip_showdelay);
     clearTimeout(tooltip_hidedelay);
     tooltip_hidedelay=setTimeout("tooltip_hide()", delayout);
}

/* �ʴ� tooltip */
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
     /* ��˹���ͤ������� tooltip */
     dropmenuobj.innerHTML=tooltip_text;
     var windowedgeX=tooltip_ie && !window.opera? tooltip_iecompattest().scrollLeft : window.pageXOffset;
     var windowedgeY=tooltip_ie && !window.opera? tooltip_iecompattest().scrollTop+tooltip_iecompattest().clientHeight-15 : window.pageYOffset+window.innerHeight-18;
     /* ���˹�᡹ X */
     var left=tooltip_getposOffset(tooltip_parent, "left");
     if (left<windowedgeX) left=windowedgeX;
     dropmenuobj.style.left=left+"px";
     /* ���˹�᡹ Y */
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

     /* ���˹�����١�� */
    // arrowobj.style.top=top+"px";
  //   arrowobj.style.left=left+5+"px";
     /* �ٻ����١�� */
  //   arrowobj.src=arrowheadimg[tooltip_arrowpos];
     /* �ʴ� tooltip */
     tooltip_fadeIn();
}

function tooltip_hide() {
     clearTimeout(tooltip_showdelay);
     /* ��͹ tooltip */
     tooltip_fadeOut();
};

/* fade effect cross browser */
function tooltip_fadeIn() {
     if (fade_status=='fadeOut') return;
     fade_status='fadeIn';
     fadevalue=fadevalue+speed;
     if (fadevalue>=transparent) { /* ����͡���ʴ�����ó����� */
          /* �������÷ӧҹ��͹�ѵ��ѵ� */
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
     else fade_status=""; /* ����ͫ�͹���º�������� */
     tooltip_setOpacity();
}

function tooltip_setOpacity() {
     /* tooltip */
     var el = dropmenuobj.style;
     el.opacity = (fadevalue / 100);
     el.MozOpacity = (fadevalue / 100);
     el.KhtmlOpacity = (fadevalue / 100);
     el.filter = "alpha(opacity=" + fadevalue + ")";
     /* ����١�� */
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

/* ��ҹ title �ͧ�ԧ���ҧ������ҧ tooltip */
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
               links[i].title=""; /* ¡��ԡ tooltip �ͧ Browser */
          }
     };
}

function tooltip_initalize() {
     /* preload image */
     for (i=0; i<arrowheadimg.length; i++) {
          img=new Image();
          img.src=arrowheadimg[i];
     };
     
     /* ��˹� layer ����Ѻ �ʴ��� tooltip */
     dropmenuobj=document.createElement("div");
     dropmenuobj.id=lyrtooltip;
     dropmenuobj.style.position="absolute";
     dropmenuobj.style.visibility='hidden';
     dropmenuobj.style.zIndex=2000;
     document.body.appendChild(dropmenuobj);
     
     /* ���ҧ image ����Ѻ����١�� */
     arrowobj=document.createElement("img");
     arrowobj.style.position="absolute";
     arrowobj.style.visibility='hidden';
     arrowobj.src=arrowheadimg[0];
     arrowobj.style.zIndex=2001;
     document.body.appendChild(arrowobj);
     
     /* ��˹� event ���Ѻ��鹷���ʴ��� tooltip */
     dropmenuobj.onmouseover=function () {
          clearTimeout(tooltip_hidedelay);
     }
     dropmenuobj.onmouseout=hidetooltip;
     
     /* ��ҵ�ͧ�������ԧ������ title �ʴ� toolip ���ѵ��ѵ� */
     autotooltip();
};

if (window.addEventListener) window.addEventListener("load", tooltip_initalize, false)
else if (window.attachEvent) window.attachEvent("onload", tooltip_initalize)
else if (document.getElementById) window.onload=tooltip_initalize