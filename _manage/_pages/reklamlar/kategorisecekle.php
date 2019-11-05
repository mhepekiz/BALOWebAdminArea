<?

$docroot = $DOCUMENT_ROOT;
$dbfile=$docroot."/admin/_include/mysql-conf.php";
include($dbfile);

//Connect to Database
connecttodb();

?>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr>
		<td><font face="Verdana" size="2"><b>Kategori Seçin</b></font></td>
		<td align="right"><a href="javascript:history.back();"><font face="Verdana" size="2"><b>< GERÝ</b></font></a></td>
	</tr>
	<tr>
		<td>
		<table border="0" cellpadding="2" cellspacing="0" width="100%">
			
<?
$get_cats = mysql_query("select id,ad,tanimlayici from kategori where catof='$catof'");
while(list($cid,$cad,$tan)=mysql_fetch_row($get_cats)){
echo '			<tr><td width="100%"><font size="2" face="Arial"><a href="kategorisecekle.php?catof='.$cid.'">'.$cad.'</font></a></td>
				<td><p align="center"><a href="javascript:window.opener.document.reklamekle.catof.value=\''.$cid.'\'; window.close();"><font size="2" face="Arial">Seç</font></a></td></tr>';

}
?>
		
		</table>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
</table>
<? mysql_close(); ?>