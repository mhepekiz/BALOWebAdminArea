<?
$docroot = $DOCUMENT_ROOT;
$dbfile=$docroot."/admin/_include/mysql-conf.php";
include($dbfile);

//Connect to Database
connecttodb();


$get_msg = mysql_query("select id, adsoyad, rumuz, email, metin, zaman, durum from klist_sk where id='$mesajid'");
list($zid, $zadsoyad, $zemail, $zmesaj, $zzaman, $zdurum)=mysql_fetch_row($get_msg);



?>

<html>

<head>
<meta http-equiv="Content-Language" content="tr">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<title><?=$zadsoyad?></title>
</head>

<body topmargin="0" leftmargin="0">

<table border="0" width="100%" id="table1" cellspacing="1" height="100%">
	<tr>
		<td align="center">
		<table border="0" width="90%" id="table2" height="100%" cellspacing="1">
			<tr>
				<td height="23" valign="top" bgcolor="#EFEFEF">
				<font face="Tahoma" size="2"><?=$zadsoyad?></font></td>
			</tr>
			<tr>
				<td height="23" valign="top" bgcolor="#EFEFEF">
				<font face="Tahoma" size="2"><?=$zemail?></font></td>
			</tr>
			<tr>
				<td height="23" valign="top" bgcolor="#EFEFEF">
				<font face="Tahoma" size="2"><?=$zzaman?></font></td>
			</tr>
			<tr>
				<td valign="top" bgcolor="#E5E5E5"><font face="Tahoma" size="2">
				<?=$zmesaj?></font></td>
			</tr>
			<tr>
				<td bgcolor="#E5E5E5" height="24">
				<p align="center"><b><font face="Tahoma" size="1">
				<a href="javascript:window.close();">PENCEREYİ KAPAT</a></font></b></td>
			</tr>
		</table>
		</td>
	</tr>
</table>

</body>

</html>
