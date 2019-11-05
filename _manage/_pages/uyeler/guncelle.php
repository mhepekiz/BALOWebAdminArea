<table border="0" width="100%" id="table7" cellspacing="0" cellpadding="0" height="100%">
					<tr>
						<td valign="top" ><!--Start Contents-->
						
												<table border="0" width="100%" id="table8" cellspacing="0" cellpadding="0">
							<tr>
								<td >
								<img border="0" src="/admin/_media/title_spacer.gif" width="15" height="56" style="border: medium none"></td>
								<td width="100%" bgcolor="#FFFFFF" >
								<table id="table11" cellSpacing="0" cellPadding="0" width="100%" border="0">
									<tr>
										<td >
										<font face="Arial" size="4">Müþteri 
										Yönetimi</font></td>
										<td >
										&nbsp;</td>
									</tr>
								</table>
								</td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td valign="top" bgcolor="#CCCCCC" >
						<img border="0" src="/admin/_media/_blank.gif" width="1" height="1" style="border: medium none"></td>
					</tr>
					<tr>
						<td valign="top" height="100%" bgcolor="#F9F8F8" >
						<table border="0" width="100%" id="table9" cellspacing="0" cellpadding="4">
							<tr>
								<td><table width="100%" cellspacing="0" cellpadding="0" border="0"><tr><td>
<fieldset>

<legend>Müþteri Seçimi</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
<div class="paging">
<form method="POST" action="/admin/_manage/uyeler/guncelle.php">
	<table border="0" width="100%" id="table12" cellspacing="0" cellpadding="0">
		<tr>
			<td>Özelliklerini düzenlemek istediðiniz müþteriye ait kullanýcý 
			adýný aþaðýdaki 
			kutuya yazarak SEÇ butonuna týklayýn.</td>
		</tr>
		<tr>
			<td><input type="text" name="user" size="20" value="<?=$user?>">
			<input type="submit" value="SEÇ" name="B1"></td>
		</tr></form>
	</table>
</td></tr></table></fieldset>
<? 
if($user){

$cnt_user = mysql_query("select count(*) from uyeler where kullaniciadi = '$user'");
list($c_us)=mysql_fetch_row($cnt_user);
if($c_us >= 1){

$get_uye_info = mysql_query("select sifre, email, adsoyad, dtarih, tel, gsm, fax, sunvan, vergid, vergino, adres, sehir, ulke, meslek, seviye, durum, tarih, editor from uyeler where kullaniciadi = '$user'");
list($sifre, $email, $adsoyad, $dtarih, $tel, $gsm, $fax, $sunvan, $vergid, $vergino, $adres, $sehir, $ulke, $meslek, $seviye, $durum)=mysql_fetch_row($get_uye_info);

?>
<br>
<fieldset>
<legend>Müþteri Detaylarý</legend>
<form action="/admin/_manage/uyeler/guncelle.php">
<input type="hidden" name="user" value="<?=$user?>">
<input type="hidden" name="ac_t" value="update">
<table align="left" cellSpacing="0" cellPadding="4" width="450" border="0" id="table1">
	<tr>
		<td><b>Üyelik Bilgileri</b></td>
	</tr>
	<tr>
		<td>
		<table cellSpacing="0" cellPadding="4" width="100%" border="0" id="table2">
			<tr>
				<td width="50%">
				<table cellSpacing="0" cellPadding="0" width="100%" border="0" id="table3">
					<tr>
						<td width="50%">Kullanýcý 
						Adý <font color="#de2418">*</td>
						<td width="50%">
						<input disabled name="uname" value="<?=$user?>"></td>
					</tr>
				</table>
				</td>
				<td width="50%">
				<table cellSpacing="0" cellPadding="0" width="100%" border="0" id="table4">
					<tr>
						<td width="50%">Þifre
						<font color="#de2418">*</td>
						<td width="50%">
						<input type="password"  value="<?=$sifre?>" name="passwd" ></td>
					</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td width="50%">
				<table cellSpacing="0" cellPadding="0" width="100%" border="0" id="table5">
					<tr>
						<td width="50%">Email 
						Adresi <font color="#de2418">*</td>
						<td width="50%">
						<input  name="email"  value="<?=$email?>"></td>
					</tr>
				</table>
				</td>
				<td width="50%">
				<table cellSpacing="0" cellPadding="0" width="100%" border="0" id="table6">
					<tr>
						<td width="50%">Þifre 
						(tekrar) <font color="#de2418">*</td>
						<td width="50%">
						<input type="password"  value="<?=$sifre?>" name="passwd_check"></td>
					</tr>
				</table>
				</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td>&nbsp;<br>
		<b>Kullanýcý Bilgileri</b></td>
	</tr>
	<tr>
		<td>
		<table cellSpacing="0" cellPadding="2" width="100%" border="0" id="table7">
			<tr>
				<td width="38%">Ad Soyad
				<font color="#de2418">*</td>
				<td width="1%">:</td>
				<td width="54%"><font size="1">
				<input  size="26" name="name"  value="<?=$adsoyad?>"></td>
			</tr>
			<tr>
				<td width="38%">Doðum Tarihi
				<font color="#de2418">*</td>
				<td width="1%">:</td>
				<td width="54%"><input  size="14" name="dtarih"  value="<?=$dtarih?>" >(YYYY-AA-GG)</td>
			</tr>
			<tr>
				<td width="38%">Adres
				<font color="#de2418">*</td>
				<td width="1%">:</td>
				<td width="54%"><font size="1">
				<input  size="39" name="adres"  value="<?=$adres?>"></td>
			</tr>
			<tr>
				<td width="38%">Þehir
				<font color="#de2418">*</td>
				<td width="1%">:</td>
				<td width="54%">
				<select id="sehir"  size="1" name="sehirsel">
				<option value="<?=$sehir?>"><?=$sehir?></option>
				<option value="Adana">Adana</option>
				<option value="Adýyaman">Adýyaman</option>
				<option value="Afyon">Afyon</option>
				<option value="Aðrý">Aðrý</option>
				<option value="Aksaray">Aksaray</option>
				<option value="Amasya">Amasya</option>
				<option value="Ankara">Ankara</option>
				<option value="Antalya">Antalya</option>
				<option value="Ardahan">Ardahan</option>
				<option value="Artvin">Artvin</option>
				<option value="Aydýn">Aydýn</option>
				<option value="Balýkesir">Balýkesir</option>
				<option value="Bartýn">Bartýn</option>
				<option value="Batman">Batman</option>
				<option value="Bayburt">Bayburt</option>
				<option value="Bilecik">Bilecik</option>
				<option value="Bingöl">Bingöl</option>
				<option value="Bitlis">Bitlis</option>
				<option value="Bolu">Bolu</option>
				<option value="Burdur">Burdur</option>
				<option value="Bursa">Bursa</option>
				<option value="Çanakkale">Çanakkale</option>
				<option value="Çankýrý">Çankýrý</option>
				<option value="Çorum">Çorum</option>
				<option value="Denizli">Denizli</option>
				<option value="Diyarbakýr">Diyarbakýr</option>
				<option value="Düzce">Düzce</option>
				<option value="Edirne">Edirne</option>
				<option value="Elazýð">Elazýð</option>
				<option value="Erzincan">Erzincan</option>
				<option value="Erzurum">Erzurum</option>
				<option value="Eskiþehir">Eskiþehir</option>
				<option value="Gazintep">Gaziantep</option>
				<option value="Giresun">Giresun</option>
				<option value="Gümüþhane">Gümüþhane</option>
				<option value="Hakkari">Hakkari</option>
				<option value="Hatay">Hatay</option>
				<option value="Ýçel">Ýçel</option>
				<option value="Iðdýr">Iðdýr</option>
				<option value="Isparta">Isparta</option>
				<option value="Ýstanbul">Ýstanbul</option>
				<option value="Ýzmir">Ýzmir</option>
				<option value="Kahramanmaraþ">Kahramanmaraþ</option>
				<option value="Karabük">Karabük</option>
				<option value="Karaman">Karaman</option>
				<option value="Kars">Kars</option>
				<option value="Kastamonu">Kastamonu</option>
				<option value="Kayseri">Kayseri</option>
				<option value="Kilis">Kilis</option>
				<option value="Kýrýkkale">Kýrýkkale</option>
				<option value="Kýrklareli">Kýrklareli</option>
				<option value="Kýrþehir">Kýrþehir</option>
				<option value="Kocaeli">Kocaeli</option>
				<option value="Konya">Konya</option>
				<option value="Kütahya">Kütahya</option>
				<option value="Malatya">Malatya</option>
				<option value="Manisa">Manisa</option>
				<option value="Mardin">Mardin</option>
				<option value="Muðla">Muðla</option>
				<option value="Muþ">Muþ</option>
				<option value="Nevþehir">Nevþehir</option>
				<option value="Niðde">Niðde</option>
				<option value="Ordu">Ordu</option>
				<option value="Osmaniye">Osmaniye</option>
				<option value="Rize">Rize</option>
				<option value="Sakarya">Sakarya</option>
				<option value="Samsun">Samsun</option>
				<option value="Siirt">Siirt</option>
				<option value="Sinop">Sinop</option>
				<option value="Sivas">Sivas</option>
				<option value="Þanlýurfa">Þanlýurfa</option>
				<option value="Þýrnak">Þýrnak</option>
				<option value="Tekirdað">Tekirdað</option>
				<option value="Tokat">Tokat</option>
				<option value="Trabzon">Trabzon</option>
				<option value="Tunceli">Tunceli</option>
				<option value="Uþak">Uþak</option>
				<option value="Van">Van</option>
				<option value="Yalova">Yalova</option>
				<option value="Yozgat">Yozgat</option>
				<option value="Zonguldak">Zonguldak</option>
				</select> ya da 
				<font size="1">
				<input  size="13" name="sehirtxt"></td>
			</tr>
			<tr>
				<td width="38%">Ülke
				<font color="#de2418">*</td>
				<td width="1%">:</td>
				<td width="54%">
				<select id="ulke0"  size="1" name="ulke">
				<option value="<?=$ulke?>"><?=$ulke?></option>
				<option value="Türkiye">Türkiye</option>
				<option value="ABD">ABD</option>
				<option value="Almanya">Almanya</option>
				<option value="Andorra">Andorra</option>
				<option value="Arnavutluk">Arnavutluk</option>
				<option value="Avusturalya">Avusturalya</option>
				<option value="Avusturya">Avusturya</option>
				<option value="Azerbaycan">Azerbaycan</option>
				<option value="Bahreyn">Bahreyn</option>
				<option value="Bagladeþ">Bangladeþ</option>
				<option value="Belçika">Belçika</option>
				<option value="Beyaz Rusya">Beyaz Rusya</option>
				<option value=" Birl.Arap.Emirlk.">Birl.Arap.Emirlk.</option>
				<option value="Bulgaristan">Bulgaristan</option>
				<option value="Cezayir">Cezayir</option>
				<option value="Çek Cumhuriyeti">Çek Cumhuriyeti</option>
				<option value="Danimarka">Danimarka</option>
				<option value="Ermenistan">Ermenistan</option>
				<option value="Estonya">Estonya</option>
				<option value="Finlandiya">Finlandiya</option>
				<option value="Fransa">Fransa</option>
				<option value="Gürcistan">Gürcistan</option>
				<option value="Hindistan">Hindistan</option>
				<option value="Holanda">Hollanda</option>
				<option value="Hong Kong">Hong Kong</option>
				<option value="Irak">Irak</option>
				<option value="Ýngiltere">Ýngiltere</option>
				<option value="Ýran">Ýran</option>
				<option value="Ýrlanda">Ýrlanda</option>
				<option value="Ýspanya">Ýspanya</option>
				<option value="Ýsrail">Ýsrail</option>
				<option value="Ýsveç">Ýsveç</option>
				<option value="Ýsvçre">Ýsviçre</option>
				<option value="Ýtalya">Ýtalya</option>
				<option value="Japonya">Japonya</option>
				<option value="Kanada">Kanada</option>
				<option value="Katar">Katar</option>
				<option value="Kazakistan">Kazakistan</option>
				<option value="Kýrgýzistan">Kýrgýzistan</option>
				<option value="KKTC">KKTC</option>
				<option value="Kuveyt">Kuveyt</option>
				<option value="Letonya">Letonya</option>
				<option value="Litvanya">Litvanya</option>
				<option value="Lübnan">Lübnan</option>
				<option value="Lüksemburg">Lüksemburg</option>
				<option value="Macaristan">Macaristan</option>
				<option value="Makao">Makao</option>
				<option value="Makedonya">Makedonya</option>
				<option value="Maldivler">Maldivler</option>
				<option value="Malta">Malta</option>
				<option value="Meksika">Meksika</option>
				<option value="Mýsýr">Mýsýr</option>
				<option value="Moldavya">Moldavya</option>
				<option value="Monako">Monako</option>
				<option value="Nepal">Nepal</option>
				<option value="Norveç">Norveç</option>
				<option value="Pakistan">Pakistan</option>
				<option value="Polonya">Polonya</option>
				<option value="Portekiz">Portekiz</option>
				<option value="Puerto Rico">Puerto Rico</option>
				<option value="Romanya">Romanya</option>
				<option value="Rusya">Rusya</option>
				<option value="Singapur">Singapur</option>
				<option value="Slovenya">Slovenya</option>
				<option value="SriLanka">SriLanka</option>
				<option value="Suriye">Suriye</option>
				<option value="Suudi Arabistan">Suudi Arabistan</option>
				<option value="Tayland">Tayland</option>
				<option value="Tayvan">Tayvan</option>
				<option value="Türkiye">Türkiye</option>
				<option value="Türkmenistan">Türkmenistan</option>
				<option value="Ukrayna">Ukrayna</option>
				<option value="Umman">Umman</option>
				<option value="Ürdün">Ürdün</option>
				<option value="Vatikan">Vatikan</option>
				<option value="Yemen">Yemen</option>
				<option value="Yeni Zelanda">Yeni Zelanda</option>
				<option value="Yunanistan">Yunanistan</option>
				<option value="Diðer">Diðer</option>
				</select></td>
			</tr>
			<tr>
				<td width="38%">Telefon
				<font color="#de2418">*</td>
				<td width="1%">:</td>
				<td width="54%"><font size="1">
				<input  name="tel" value="<?=$tel?>"></td>
			</tr>
			<tr>
				<td width="38%">GSM</td>
				<td width="1%">:</td>
				<td width="54%"><font size="1">
				<input  name="gsm" value="<?=$gsm?>"></td>
			</tr>
			<tr>
				<td width="38%">Fax</td>
				<td width="1%">:</td>
				<td width="54%"><font size="1">
				<input  name="fax" value="<?=$fax?>"></td>
			</tr>
			<tr>
				<td width="38%">Meslek</td>
				<td width="1%">:</td>
				<td width="54%"><font size="1">
				<input  name="meslek" value="<?=$meslek?>"></td>
			</tr>
			<tr>
				<td width="38%">&nbsp;</td>
				<td width="1%">&nbsp;</td>
				<td width="54%"><input type="submit" value="Kayýt Et" name="I1"></td>
			</tr>
		</table>
		</td>
	</tr>
</table>

</fieldset>
<?
} else {
echo "Aramanýz sonucunda kayýt bulunamamýþtýr.";
}
}
?>
</td></tr></table></td>
							</tr>
						</table>
						</td>
					</tr>
				</table>