var popback = "#FFFFFF";
var popbord = "#e1e1e1";

Xoffset=-120;    // modify these values to ...
Yoffset=-130 ;    // change the popup position.
XoffsetRight=0;    // modify these values to ...
YoffsetRight=0;    // change the popup position.

var old,skn,iex=(document.all),yyy=-1000;
var ns4=document.layers
var ns6=document.getElementById&&!document.all
var ie4=document.all

if (ns4)
skn=document.dek
else if (ns6)
skn=document.getElementById("dek").style
else if (ie4)
skn=document.all.dek.style
if(ns4)document.captureEvents(Event.MOUSEMOVE);
else{
skn.visibility="visible"
skn.display="none"
}
document.onmousemove=get_mouse;

function pop(title,msg,bord,bak,yof,xof)
{
var content ="<table width=180 border=0 cellpadding=0 cellspacing=0><tr><td class=usttb align=center height=20>"+title+"</td></tr><tr><td class=orta bgcolor=#FFFFFF>"+msg+"</td></tr><tr><td height=4><img src=/_media/table180alt.gif></td></tr></table>";
yyy=Yoffset+yof;
 if(ns4){skn.document.write(content);skn.document.close();skn.visibility="visible"}
 if(ns6){document.getElementById("dek").innerHTML=content;skn.display=''}
 if(ie4){document.all("dek").innerHTML=content;skn.display=''}
Xoffset=Xoffset+xof;
}

function fpop(title,msg,bord,bak,yof,xof)
{
var content ="<table width=240 border=0 cellpadding=0 cellspacing=0><tr><td class=fust align=center height=20>"+title+"</td></tr><tr><td class=forta bgcolor=#FFFFFF>"+msg+"</td></tr><tr><td height=4><img src=/_media/table240alt.jpg></td></tr></table>";
yyy=Yoffset+yof;
 if(ns4){skn.document.write(content);skn.document.close();skn.visibility="visible"}
 if(ns6){document.getElementById("dek").innerHTML=content;skn.display=''}
 if(ie4){document.all("dek").innerHTML=content;skn.display=''}
Xoffset=Xoffset+xof;
}

function get_mouse(e){
var x=(ns4||ns6)?e.pageX:event.x+document.body.scrollLeft;
skn.left=x+Xoffset;
var y=(ns4||ns6)?e.pageY:event.y+document.body.scrollTop;
skn.top=y+yyy;
}

function kill(){
yyy=-1000;
Xoffset=-120;
if(ns4){skn.visibility="hidden";}
else if (ns6||ie4)
skn.display="none"
}
