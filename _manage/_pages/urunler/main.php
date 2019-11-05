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
										<font face="Arial" size="4">Ürünler ve 
										Kategoriler</font></td>
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

<legend>Ýþlemler</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
<div class="paging">
<table border="0" id="table12" cellspacing="0" cellpadding="3" width="560">
	<tr>
		<td align="center" width="80" nowrap><img border="0" src="/admin/_media/iko_kategoriler.gif" width="28" height="32"></td>
		<td align="center" width="80" nowrap><img border="0" src="/admin/_media/iko_markalar.gif"></td>
		<td align="center" width="80" nowrap><img border="0" src="/admin/_media/iko_addpro.gif" width="30" height="30"></td>
		<td align="center" width="80" nowrap><img border="0" src="/admin/_media/iko_update.gif"></td>
		<td align="center" width="80" nowrap><img border="0" src="/admin/_media/iko_proinfo.gif" width="32" height="31"></td>
		<td align="center" width="40" nowrap><img border="0" src="/admin/_media/iko_proimg.gif" width="23" height="30"></td>
		<td align="center" width="40" nowrap><img border="0" src="/admin/_media/iko_kategoriler.gif" width="28" height="32"></td>
    	<td align="center" width="80" nowrap><img border="0" src="/admin/_media/iko_logs.gif"></td>
	</tr>
	<tr>
		<td align="center" width="80" nowrap><a href="/admin/_manage/urunler/kategoriler.php">Kategoriler</a></td>
		<td align="center" width="80" nowrap><a href="/admin/_manage/urunler/markalar.php">Markalar</a></td>
		<td align="center" width="80" nowrap><a href="/admin/_manage/urunler/ekle.php">Ürün Ekle</a></td>
		<td align="center" width="80" nowrap><a href="/admin/_manage/urunler/guncelle.php">Ürün Güncelle</a></td>
		<td align="center" width="80" nowrap><a href="/admin/_manage/urunler/ozellikler.php">Ürün Özellikleri</a></td>
		<td align="center" width="40" nowrap><a href="/admin/_manage/urunler/resimler.php">Ürün Resimleri</a></td>
		<td align="center" width="40" nowrap>
		<a href="/admin/_manage/urunler/benzer.php">Benzer Ürünler</a></td>
		<td align="center" width="80" nowrap><a href="/admin/_manage/urunler/loglar.php">Ýþlem Tutanaklarý</a></td>
	</tr>
</table>
</td></tr></table></fieldset>
<br><br>
<fieldset>
<legend>Son eklenen 25 ürün</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>


<table border="0" width="100%" id="table13" cellpadding="2" cellspacing="1">
	<tr>
		<td colspan="7">Ürün Arama</td>
	</tr>
	<tr>
		<td colspan="7"><form method="POST" action="/admin/_manage/urunler/main.php" name="urun_ara">
			<table border="0" width="100%" id="table11" cellspacing="0" cellpadding="0">
				<tr>
					<td><input type="text" name="q" size="20" value="<?=$q?>"><br>
					<input type="radio" value="KOD" checked name="S"><small>Kod</small>
					<input type="radio" name="S" value="AD"><small>Ad</small></td>
					<td nowrap valign="top"><span lang="en">&nbsp;</span><a href="javascript:urun_a();"><img border="0" src="/admin/_media/search.gif" width="16" height="16"> Ara</a></td>
					<td width="100%" valign="top">&nbsp;<span lang="en">&nbsp;&nbsp;&nbsp;</span><a href="/admin/_manage/urunler/main.php"><img border="0" src="/admin/_media/showall.gif" width="16" height="16"> 
					Hepsini Göster</a></td>
				</tr>
			</table>
			<input type="hidden" name="ac_t" value="search">
	</form>
		</td>
	</tr>
	<tr>
		<td nowrap bgcolor="#B6CDF3">KOD</td>
		<td nowrap width="100%" bgcolor="#85ABEB">Ürün Adý</td>
		<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en">&nbsp;Editor&nbsp;</span></td>
		<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en">&nbsp;&nbsp;&nbsp;</span>Tarih<span lang="en">&nbsp;&nbsp;&nbsp;</span></td>
		<td nowrap align="center" bgcolor="#DCE8FA"><span lang="en-us">Ýþlemler</span></td>
		<td nowrap align="center" bgcolor="#DCE8FA">Durum</td>
		<td nowrap align="center">
		<p align="center"><span lang="en">&nbsp;&nbsp;</span>Sil<span lang="en">&nbsp;&nbsp;</span></td>
	</tr>

<?

if(($q) && ($S=="KOD")){
$prosq = "where kod LIKE '%$q%' order by id desc";
} else if(($q) && ($S=="AD")){
$prosq = "where urunadi LIKE '%$q%' order by id desc";
} else {
$prosq = "order by id desc limit 25";
}
$hs = 0;

$get_urun = mysql_query("select id,kod,urunadi,durum,tarih, editor from urunler $prosq");
while(list($u_id,$u_kod,$u_ad,$u_durum,$u_trh,$u_editor)=mysql_fetch_row($get_urun)){
$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';


if($u_durum=="on"){
$u_durum_d = "AKTÝF";
$u_durum_l = "off";
} else {
$u_durum_d = "PASÝF";
$u_durum_l = "on";
$bgc="#FFCCCC";
}

echo '
	<tr>
		<td bgcolor="'.$bgc.'" nowrap>'.$u_kod.'</td>
		<td bgcolor="'.$bgc.'" nowrap width="100%">'.$u_ad.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">'.$u_editor.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">'.$u_trh.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center"><span lang="en"><font style="font-size: 4pt">&nbsp;&nbsp;
		</font></span><font style="font-size: 4pt">
		<a href="/admin/_manage/urunler/guncelle.php?pro_d='.$u_kod.'"><img border="0" src="/admin/_media/sml_iko_update.gif"  alt="Ürünü Güncelle"></a>&nbsp;&nbsp;&nbsp;
		<a href="/admin/_manage/urunler/ozellikler.php?pro_d='.$u_kod.'"><img border="0" src="/admin/_media/sml_iko_properties.gif" width="16" height="16" alt="Ürün Özellikleri"></a>&nbsp;&nbsp;&nbsp;
		<a href="/admin/_manage/urunler/resimler.php?pro_d='.$u_kod.'"><img border="0" src="/admin/_media/sml_iko_picture.gif" width="12" height="15" alt="Ürün Resimleri"></a>&nbsp;
		</font><span lang="en"><font style="font-size: 4pt">&nbsp;</font></span></td>
		<td bgcolor="'.$bgc.'" nowrap align="center"><a href="/admin/_manage/urunler/main.php?ac_t=status&status='.$u_durum_l.'&pro_d='.$u_id.'">'.$u_durum_d.'</a></td>
		<td bgcolor="'.$bgc.'" nowrap align="center"><a href="javascript:confirmDelete(\'/admin/_manage/urunler/main.php?ac_t=delete&pro_d='.$u_id.'\');"><img border="0" src="/admin/_media/delete.gif" alt="Ürünü Sil"></a></td>
	</tr>';

$hs=$hs+1;
}
if(($hs=="0") && ($q)){
echo '<tr>
		<td bgcolor="'.$bgc.'" nowrap width="100%" colspan="7">Aramanýz sonucunda kayýt bulunamamýþtýr.</td>
	</tr>';
} else if(($hs=="0") && ($q=="")){
echo '<tr>
		<td bgcolor="'.$bgc.'" nowrap width="100%" colspan="7">Sistemde kayýtlý ürün bulunmamaktadýr.</td>
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