<script>
function urun_a()
{
urun_ara.submit();
}

function confirmDelete(delUrl) {
  if (confirm("Bu ürünü silmek istediðinize emin misiniz?")) {
    document.location = delUrl;
  }
}

</script>
<table border="0" width="100%" id="table7" cellspacing="0" cellpadding="0" height="100%">
					<tr>
						<td valign="top" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px"><!--Start Contents-->
						
												<table border="0" width="100%" id="table8" cellspacing="0" cellpadding="0">
							<tr>
								<td style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
								<img border="0" src="/admin/_media/title_spacer.gif" width="15" height="56" style="border: medium none"></td>
								<td width="100%" bgcolor="#FFFFFF" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
								<table id="table11" cellSpacing="0" cellPadding="0" width="100%" border="0">
									<tr>
										<td style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
										<font face="Arial" size="4">Manuel Ödemeler</font></td>
										<td style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
										&nbsp;</td>
									</tr>
								</table>
								</td>
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
<legend>Son 25 Ödeme</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>


<table border="0" width="100%" id="table13" cellpadding="2" cellspacing="1">
	<tr>
		<td colspan="7">Ödeme Arama</td>
	</tr>
	<tr>
		<td colspan="7"><form method="POST" action="/admin/_manage/odemeler/main.php" name="urun_ara">
			<table border="0" width="100%" id="table11" cellspacing="0" cellpadding="0">
				<tr>
					<td><input type="text" name="q" size="25" value="<?=$q?>"><br>
					<input type="radio" value="UYE" checked name="S"><small>Kullanýcý Adý<br></small>
					<input type="radio" name="S" value="SIPNO"><small>Referans Numarasý</small></td>
					<td nowrap valign="top"><span lang="en">&nbsp;</span><a href="javascript:urun_a();"><img border="0" src="/admin/_media/search.gif" width="16" height="16"> Ara</a></td>
					<td width="100%" valign="top">&nbsp;<span lang="en">&nbsp;&nbsp;&nbsp;</span><a href="/admin/_manage/odemeler/main.php"><img border="0" src="/admin/_media/showall.gif" width="16" height="16"> 
					Hepsini Göster</a></td>
				</tr>
			</table>
			<input type="hidden" name="ac_t" value="search">
	</form>
		</td>
	</tr>
	<tr>
		<td nowrap width="100%" bgcolor="#85ABEB">Referans Numarasý</td>
		<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en-us">&nbsp;&nbsp;Müþteri&nbsp;&nbsp;</span></td>
		<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en-us">&nbsp;&nbsp;Ödeme</span><span lang="en"> Tarihi&nbsp;&nbsp;</span></td>
		<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en">&nbsp;Kredi Kartý&nbsp;&nbsp;</span></td>
		<td nowrap align="center" bgcolor="#DCE8FA"><span lang="en">&nbsp;</span>Auth Code<span lang="en">&nbsp;</span></td>
		<td nowrap align="center" bgcolor="#DCE8FA" width="120"><span lang="en">&nbsp;</span>Tutar<span lang="en">&nbsp;</span></td>
		<td nowrap align="center">
		<p align="center"><span lang="en">&nbsp;&nbsp;</span><span lang="en-us">Ýþlemler</span><span lang="en">&nbsp;&nbsp;</span></td>
	</tr>

<?

if(($q) && ($S=="UYE")){
$get_uid = mysql_query("select id from uyeler where kullaniciadi = '$q'");
list($musterix)=mysql_fetch_row($get_uid);
$prosq = "where mid = '$musterix' order by id desc";
} else if(($q) && ($S=="SIPNO")){
$prosq = "where sipno LIKE '%$q%' order by id desc";
} else {
$prosq = "order by id desc limit 25";
}
$hs = 0;

$get_sips = mysql_query("select id,mid,sipno,tarih,tutar,ccnum, auth from manuel_odemeler $prosq");
while(list($s_id,$s_uye,$s_no,$s_tarih,$s_tutar,$s_cc,$s_auth)=mysql_fetch_row($get_sips)){
$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';

$get_durum = mysql_query("select adsoyad from uyeler where id='$s_uye' limit 1");
list($s_adsoyad)=mysql_fetch_row($get_durum);

echo '
	<tr>
		<td nowrap width="100%" bgcolor="'.$bgc.'">'.$s_no.'</td>
		<td nowrap align="center" bgcolor="'.$bgc.'">'.$s_adsoyad.'</td>
		<td nowrap align="center" bgcolor="'.$bgc.'">'.$s_tarih.'</td>
		<td nowrap align="center" bgcolor="'.$bgc.'">'.$s_cc.'</td>
		<td nowrap align="center" bgcolor="'.$bgc.'">'.$s_auth.'<br></td>
		<td align="center" bgcolor="'.$bgc.'">'.$s_tutar.' YTL</td>
		<td nowrap align="center" bgcolor="'.$bgc.'"><a href="/admin/_manage/odemeler/detay.php?od_id='.$s_id.'"><img border="0" src="/admin/_manage/_media/display.gif" width="16" height="16"></a> <a href="/admin/_manage/odemeler/main.php?od_id='.$s_id.'&ac_t=del"><img border="0" src="/admin/_media/delete.gif" width="15" height="15"></a></td>
	</tr>

';

$hs=$hs+1;
}
if(($hs=="0") && ($q)){
echo '<tr>
		<td bgcolor="'.$bgc.'" nowrap width="100%" colspan="7">Aramanýz sonucunda kayýt bulunamamýþtýr.</td>
	</tr>';
} else if(($hs=="0") && ($q=="")){
echo '<tr>
		<td bgcolor="'.$bgc.'" nowrap width="100%" colspan="7">Sistemde kayýtlý ödeme bulunmamaktadýr.</td>
	</tr>';
}
?>
</table>


</td></tr></table></fieldset>
</td></tr></table></td>
							</tr>
						</table>
						</td>
					</tr>
				</table>