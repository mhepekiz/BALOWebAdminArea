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
										<td>
										<font face="Arial" size="4">Kategoriler</font></td>
										<td><p align="right"><a style="color: #0240a3" href="/admin/_manage/urunler/main.php">Üst Seviye</a>&nbsp;&nbsp;</td>
									</tr>
								</table></td>
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

<legend>Kategori Ekleme Formu</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
		<div class="paging">			
<form name="kategoriekle" method="POST" enctype="multipart/form-data" action="/admin/_manage/urunler/kategoriler.php">
				<input type="hidden" name="ac_t" value="add">
				<table border="0" width="100%" id="table12" cellspacing="0" cellpadding="4">
					<tr>
						<td valign="top">					<table border="0" cellspacing="0" width="100%" cellpadding="2">
						<tr>
							<td nowrap>Kategori 
							Adý</td>
							<td>
							<input type="text" name="ad" size="20" ></td>
						</tr>
						<tr>
							<td nowrap>Tanýmlayýcý</td>
							<td>
							<input type="text" name="tanimlayici" size="20" ></td>
						</tr>
						<tr>
							<td nowrap>Üst 
							Kategori ID</td>
							<td>
							<input type="text" name="catof" size="8" ><a href="#" onClick="window.open('/admin/_manage/urunler/kategorisecekle2.php','502L','toolbar=no,width=450,height=500,left=0,top=0,status=no,scrollbars=yes,resize=no');return false"><b>Üst Kategori seçin</b></a></td>
						</tr>
						<tr>
							<td nowrap>Sýra</td>
							<td>
							<input type="text" name="sira" size="7" ></td>
						</tr>
						<tr>
							<td nowrap>Expand</td>
							<td>
							<select size="1" name="expand">
							<option value="1">evet</option>
							<option selected value="0">hayýr</option>
							</select></td>
						</tr>
						<tr>
							<td nowrap>Üst Menü</td>
							<td width="100%">
							<input type="checkbox" name="ustmenu"></td>
						</tr>
						<tr>
							<td nowrap>&nbsp;</td>
							<td width="100%">
							<input type="submit" value="Kategori Ekle" name="B1" ></td>
						</tr>
					</table></td>
						<td valign="top"><b>Kategori Adý :</b> Eklemek 
						istediðiniz kategorinin adýdýr.<br>
						<b>Tanýmlayýcý :</b> Sistem görünmeyen bazý bölümlerde tanýmlayýcýlardan yardým alýr. Örneðin farklý ana kategorilere ait ayný isimli alt kategoriler olabilir. Bu gibi durumlarda alt kategorileri birbirinden ayýrmak için Tanýmlayýcýlar kullanýlýr. Tanýmlayýcýlarýn mutlaka doldurulmasý gerekmektedir.<br>
						<b>Üst Kategori ID :</b> Eklenen kategori bir alt 
						kategori ise (ÖRN: Bilgisayar kategorisinin altýndaki 
						Cep Bilgisayarlarý kategorisi) Üst kategori seçin 
						linkine týklayarak ilgili üst kategoriyi seçin.<br>
						<b>Sýra :</b> Kategoriler varsayýlan olarak bir kurala 
						baðlý olarak sýralanmaz. Bu alana yazýlan sayýlar 
						arasýnda küçükten büyüðe doðru sýralama yapýlýr.<br>
						<b>Expand :</b> Eklenen kategorilerin ana menü de alt 
						kategorilerinin de gösterileceðini belirtir.<br>
						<b>Üst Menü :</b> Üst menü kutusunu iþaretlerseniz, bu kategori sayfanýn üst kýsmýndaki alanda da gösterilir </td>
					</tr></form>
				</table>
</td></tr></table></fieldset>
</td></tr></table><br>
&nbsp;<fieldset>

<legend>Kategori Silme Formu</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
		<div class="paging">			
<form name="kategorisil" method="post" action="/admin/_manage/urunler/kategoriler.php">
					<input type="hidden" value="del" name="ac_t">
					<table cellSpacing="0" width="100%" border="0" id="table4">
						<tr>
							<td>
							Bir kategoriyi sildiðinizde, o kategoriye ait tüm altkategoriler de silinecektir.<br>
							Silmek istediðiniz kategorinin ID numarasýný yazýn ya da <a onclick="window.open('/admin/_manage/urunler/kategorisecsil.php','501L','toolbar=no,width=450,height=500,left=0,top=0,status=no,scrollbars=yes,resize=no');return false" href="#"><b>buraya týklayarak seçin..</b></a></td>
						</tr>
						<tr>
							<td>
							<input size="10" name="catsil"> <input  type="submit" value="Kategori Sil" name="sil"></td>
						</tr></form>
					</table>
				</td></tr></table></fieldset>
&nbsp;<fieldset>

<legend>Ana Kategoriler</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
		<div class="paging">			


<table border="0" width="100%" id="table13" cellpadding="2" cellspacing="1">
	<tr>
		<td colspan="2">Sistemde yer alan ana kategoriler aþaðýdaki gibidir..</td>
	</tr>
	<tr>
		<td nowrap width="100%" bgcolor="#85ABEB">Kategori Adý</td>
		<td nowrap align="center" bgcolor="#B6CDF3">
		<p align="center"><span lang="en">&nbsp;&nbsp;</span>Sil<span lang="en">&nbsp;&nbsp;</span></td>
	</tr>

<?

$get_categori = mysql_query("select id,ad from kategori where catof='0' order by sira");
while(list($k_id,$k_ad)=mysql_fetch_row($get_categori)){


$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';
echo '
	<tr>
		<td width="100%" bgcolor="'.$bgc.'">'.$k_ad.'<br><font color="silver">';

$get_sub_cat = mysql_query("select id,ad from kategori where catof='$k_id' order by sira");
while(list($sk_id,$sk_ad)=mysql_fetch_row($get_sub_cat)){

echo "$sk_ad, ";

}

echo '</font></td>
		<td nowrap align="center" bgcolor="'.$bgc.'"><a href="/admin/_manage/urunler/kategoriler.php?ac_t=del&catsil='.$k_id.'"><img border="0" src="/admin/_media/delete.gif"></a></td>
	</tr>
';
}
?>

</table>


				</td></tr></table></fieldset></td>
							</tr>
						</table>
						</td>
					</tr>
				</table>