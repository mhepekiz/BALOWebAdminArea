<?
$get_kur_usd = mysql_query("select parite from kurlar where id='1'");
list($parite_usd)=mysql_fetch_row($get_kur_usd);
$get_kur_euro = mysql_query("select parite from kurlar where id='2'"); 
list($parite_euro)=mysql_fetch_row($get_kur_euro);

$parite_usd = number_format($parite_usd,3,'.','');
$parite_euro = number_format($parite_euro,3,'.','');
?>
<table border="0" width="100%" id="table7" cellspacing="0" cellpadding="0" height="100%">
					<tr>
						<td valign="top" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px"><!--Start Contents-->
						
												<table border="0" width="100%" id="table8" cellspacing="0" cellpadding="0">
							<tr>
								<td style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
								<img border="0" src="/admin/_media/title_spacer.gif" width="15" height="56" style="border: medium none"></td>
								<td width="100%" bgcolor="#FFFFFF" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
								<font face="Arial" size="4">Döviz Kurlarý</font></td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td valign="top" bgcolor="#CCCCCC" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
						<img border="0" src="/admin/_media/_blank.gif" width="1" height="1" style="border: medium none"></td>
					</tr>
					<tr>
						<td valign="top" height="100%" bgcolor="#F9F8F8" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
						<table border="0" width="100%" id="table9" cellspacing="0" cellpadding="4">
							<tr>
								<td><table width="100%" cellspacing="0" cellpadding="0" border="0"><tr><td>
<fieldset>

<legend>Kur Yönetimi</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
		<table border="0" id="table10" cellspacing="0" cellpadding="0" width="167">
			<tr>
				<td width="60">
				<img border="0" src="/admin/_media/euro.gif" width="60" height="50"></td>
				<td>
				<p align="center">
				<img border="0" src="/admin/_media/dolar.gif" width="60" height="50"></td>
			</tr>
			<tr>
				<td width="60">
				<p align="center">
				<a href="/admin/_manage/kurlar/kurlar.php?kur_id=2">EURO</a></td>
				<td>
				<p align="center">
				<a href="/admin/_manage/kurlar/kurlar.php?kur_id=1">DOLAR</a></td>
			</tr>
		</table>
		<div class="paging">			


</td></tr></table></fieldset>

	</td></tr></table>&nbsp;<table width="100%" cellspacing="0" cellpadding="0" border="0"><tr><td>
<fieldset>

<legend>Mecvut Deðerler</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
		<table border="0" width="100%" id="table11" cellspacing="0" cellpadding="2">
			<tr>
				<td>EURO</td>
				<td>:</td>
				<td width="100%"><?=$parite_euro?> TL</td>
			</tr>
			<tr>
				<td>DOLAR</td>
				<td>:</td>
				<td width="100%"><?=$parite_usd?> TL</td>
			</tr>
		</table>
		<div class="paging">			


</td></tr></table></fieldset>

	</td></tr></table>
</td>
							</tr>
						</table>
						</td>
					</tr>
				</table>