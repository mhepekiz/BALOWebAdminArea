<?


function seo($sef){
$sef = strtolower($sef);
$degis1 = array('�','�','�','�','�','�','�','�','�','�','�','�','_',' ','--','---','�');
$degis2 = array('i','o','u','g','c','s','o','u','g','c','s','o','-','-','-','-','i');
$sef    =str_replace($degis1,$degis2,$sef);
$sef    =preg_replace("@[^A-Za-z0-9\-_]+@i","",$sef);
return $sef;
}



?>

<html>

<head>
<meta http-equiv="Content-Language" content="tr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">
<title><? echo"Mamut : &#304;&#231;erik Y&#246;netim Sistemi"; ?></title>


<style>

<!--

a:active     { color: #253B54; text-decoration:none }

a:link       { color: #253B54; text-decoration:none }

a:visited    { color: #253B54; text-decoration:none }

a:hover      { color: #91000A }

-->

</style>


<style type="text/css"><!--
  .btn   { BORDER-WIDTH: 1; width: 26px; height: 24px; }
  .btnDN { BORDER-WIDTH: 1; width: 26px; height: 24px; BORDER-STYLE: inset; BACKGROUND-COLOR: buttonhighlight; }
  .btnNA { BORDER-WIDTH: 1; width: 26px; height: 24px; filter: alpha(opacity=25); }
--></style>
<!-- END : EDITOR HEADER -->
<!-- ---------------------------------------------------------------------- -->



<style type="text/css"><!--
  body, td { font-family: arial; font-size: 12px; }
  .headline { font-family: arial black, arial; font-size: 28px; letter-spacing: -2px; }
  .subhead  { font-family: arial, verdana; font-size: 12px; let!ter-spacing: -1px; }
-->



#sortable-list        { padding:0; }
li.sortme            { padding:4px 8px; color:#000; cursor:move; list-style:none; width:500px; background:#ddd; margin:10px 0; border:1px solid #999; }
#message-box        { background:#fffea1; border:2px solid #fc0; padding:4px 8px; margin:0 0 14px 0; width:500px; }


</style>


<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>




</head>

<body topmargin="0" leftmargin="0">








<table border="0" width="100%" id="table1" cellspacing="0" height="100%" cellpadding="0">
	<tr>
		<td valign="top">
		<table border="0" width="100%" id="table2" cellspacing="0" cellpadding="0" height="0">
			<tr>
				<td valign="top" height="100" background="/admin/_media/head_bg.gif">
				<a href="/admin/_manage/"><img border="0" src="/admin/_media/head.gif" border="0"> </td>
			</tr>
			<tr>
				<td valign="top" height="125">
                
               <?
               
			   
$menufile=$docroot."/admin/_manage/_include/menu.php";
include($menufile);



?>

                
		  </td></tr><tr><td valign="top">