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
										<font face="Arial" size="4">Sipariþler</font></td>
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
<table border="0" id="table12" cellspacing="0" cellpadding="3" width="150">
	<tr>
		<td align="center" width="91%"><img border="0" src="/admin/_media/iko_kategoriler.gif" width="28" height="32"></td>
	</tr>
	<tr>
		<td align="center" width="91%">
		<a href="/admin/_manage/siparisler/durumlar.php">Sipariþ Durumlarý</a></td>
	</tr>
</table>
</td></tr></table></fieldset>
<br><br>
<fieldset>
<legend>Son 25 Sipariþ</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>


<table border="0" width="100%" id="table13" cellpadding="2" cellspacing="1">
	<tr>
		<td colspan="7">Sipariþ Arama</td>
	</tr>
	<tr>
		<td colspan="7"><form method="POST" action="/admin/_manage/siparisler/main.php" name="urun_ara">
			<table border="0" width="100%" id="table11" cellspacing="0" cellpadding="0">
				<tr>
					<td><input type="text" name="q" size="25" value="<?=$q?>"><br>
					<input type="radio" value="UYE" checked name="S"><small>Kullanýcý 
					Adý<br>
					</small>
					<input type="radio" name="S" value="SIPNO"><small>Sipariþ Numarasý</small></td>
					<td nowrap valign="top"><span lang="en">&nbsp;</span><a href="javascript:urun_a();"><img border="0" src="/admin/_media/search.gif" width="16" height="16"> Ara</a></td>
					<td width="100%" valign="top">&nbsp;<span lang="en">&nbsp;&nbsp;&nbsp;</span><a href="/admin/_manage/siparisler/main.php"><img border="0" src="/admin/_media/showall.gif" width="16" height="16"> 
					Hepsini Göster</a></td>
				</tr>
			</table>
			<input type="hidden" name="ac_t" value="search">
	</form>
		</td>
	</tr>
	<tr>
		<td nowrap width="70%" bgcolor="#85ABEB">Sipariþ Numarasý</td>
		<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en-us">&nbsp;&nbsp;Müþteri&nbsp;&nbsp;</span></td>
		<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en-us">&nbsp;&nbsp;Sipariþ</span><span lang="en"> 
		Tarihi&nbsp;&nbsp;</span></td>
		<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en">&nbsp;Teslimat&nbsp;&nbsp;</span></td>
		<td nowrap align="center" width="30%" bgcolor="#DCE8FA"><span lang="en">&nbsp;</span>Ödeme 
		Detay<span lang="en">&nbsp;</span></td>
		<td nowrap align="center" bgcolor="#DCE8FA" width="120"><span lang="en">&nbsp;&nbsp;</span>Durum<span lang="en">&nbsp;&nbsp;</span></td>
		<td nowrap align="center">
		<p align="center"><span lang="en">&nbsp;&nbsp;</span><span lang="en-us">Ýþlemler</span><span lang="en">&nbsp;&nbsp;</span></td>
	</tr>

<?

if(($q) && ($S=="UYE")){
$prosq = "where uye LIKE '%$q%' order by id desc";
} else if(($q) && ($S=="SIPNO")){
$prosq = "where sipno LIKE '%$q%' order by id desc";
} else {
$prosq = "order by id desc limit 25";
}
$hs = 0;

$get_sips = mysql_query("select id,uye,sipno,tarih,durum,odeme,teslimat,toplam from siparis $prosq");
while(list($s_id,$s_uye,$s_no,$s_tarih,$s_durum,$s_odeme,$s_teslimat,$s_toplam)=mysql_fetch_row($get_sips)){
$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';

if($s_odeme=="cc"){
$s_odeme = "KK";
} else if($s_odeme=="bh"){
$s_odeme = "BH";
}else if($s_odeme=="kod"){ $s_odeme = "KÖD";
}

$get_durum = mysql_query("select ad from siparis_durum where id='$s_durum' limit 1");
list($s_durum_txt)=mysql_fetch_row($get_durum);

echo '
	<tr>
		<td nowrap width="70%" bgcolor="'.$bgc.'">'.$s_no.'</td>
		<td nowrap align="center" bgcolor="'.$bgc.'">'.$s_uye.'</td>
		<td nowrap align="center" bgcolor="'.$bgc.'">'.$s_tarih.'</td>
		<td nowrap align="center" bgcolor="'.$bgc.'">'.$s_teslimat.'</td>
		<td nowrap align="center" bgcolor="#efefef">'.$s_odeme.' - '.$s_toplam.' YTL</td>
		<td align="center" bgcolor="#83C295"">'.$s_durum_txt.'</td>
		<td nowrap align="center" bgcolor="'.$bgc.'"><a href="/admin/_manage/siparisler/guncelle.php?sg_id='.$s_id.'"><img border="0" src="/admin/_manage/_media/display.gif" width="16" height="16"></a> <a href="/admin/_manage/siparisler/main.php?ac_t=delete&sdid='.$s_id.'"><img border="0" src="/admin/_media/delete.gif" width="15" height="15"></a></td>
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
		<td bgcolor="'.$bgc.'" nowrap width="100%" colspan="7">Sistemde kayýtlý sipariþ bulunmamaktadýr.</td>
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