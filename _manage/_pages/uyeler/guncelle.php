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
										<font face="Arial" size="4">M��teri 
										Y�netimi</font></td>
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

<legend>M��teri Se�imi</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
<div class="paging">
<form method="POST" action="/admin/_manage/uyeler/guncelle.php">
	<table border="0" width="100%" id="table12" cellspacing="0" cellpadding="0">
		<tr>
			<td>�zelliklerini d�zenlemek istedi�iniz m��teriye ait kullan�c� 
			ad�n� a�a��daki 
			kutuya yazarak SE� butonuna t�klay�n.</td>
		</tr>
		<tr>
			<td><input type="text" name="user" size="20" value="<?=$user?>">
			<input type="submit" value="SE�" name="B1"></td>
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
<legend>M��teri Detaylar�</legend>
<form action="/admin/_manage/uyeler/guncelle.php">
<input type="hidden" name="user" value="<?=$user?>">
<input type="hidden" name="ac_t" value="update">
<table align="left" cellSpacing="0" cellPadding="4" width="450" border="0" id="table1">
	<tr>
		<td><b>�yelik Bilgileri</b></td>
	</tr>
	<tr>
		<td>
		<table cellSpacing="0" cellPadding="4" width="100%" border="0" id="table2">
			<tr>
				<td width="50%">
				<table cellSpacing="0" cellPadding="0" width="100%" border="0" id="table3">
					<tr>
						<td width="50%">Kullan�c� 
						Ad� <font color="#de2418">*</td>
						<td width="50%">
						<input disabled name="uname" value="<?=$user?>"></td>
					</tr>
				</table>
				</td>
				<td width="50%">
				<table cellSpacing="0" cellPadding="0" width="100%" border="0" id="table4">
					<tr>
						<td width="50%">�ifre
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
						<td width="50%">�ifre 
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
		<b>Kullan�c� Bilgileri</b></td>
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
				<td width="38%">Do�um Tarihi
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
				<td width="38%">�ehir
				<font color="#de2418">*</td>
				<td width="1%">:</td>
				<td width="54%">
				<select id="sehir"  size="1" name="sehirsel">
				<option value="<?=$sehir?>"><?=$sehir?></option>
				<option value="Adana">Adana</option>
				<option value="Ad�yaman">Ad�yaman</option>
				<option value="Afyon">Afyon</option>
				<option value="A�r�">A�r�</option>
				<option value="Aksaray">Aksaray</option>
				<option value="Amasya">Amasya</option>
				<option value="Ankara">Ankara</option>
				<option value="Antalya">Antalya</option>
				<option value="Ardahan">Ardahan</option>
				<option value="Artvin">Artvin</option>
				<option value="Ayd�n">Ayd�n</option>
				<option value="Bal�kesir">Bal�kesir</option>
				<option value="Bart�n">Bart�n</option>
				<option value="Batman">Batman</option>
				<option value="Bayburt">Bayburt</option>
				<option value="Bilecik">Bilecik</option>
				<option value="Bing�l">Bing�l</option>
				<option value="Bitlis">Bitlis</option>
				<option value="Bolu">Bolu</option>
				<option value="Burdur">Burdur</option>
				<option value="Bursa">Bursa</option>
				<option value="�anakkale">�anakkale</option>
				<option value="�ank�r�">�ank�r�</option>
				<option value="�orum">�orum</option>
				<option value="Denizli">Denizli</option>
				<option value="Diyarbak�r">Diyarbak�r</option>
				<option value="D�zce">D�zce</option>
				<option value="Edirne">Edirne</option>
				<option value="Elaz��">Elaz��</option>
				<option value="Erzincan">Erzincan</option>
				<option value="Erzurum">Erzurum</option>
				<option value="Eski�ehir">Eski�ehir</option>
				<option value="Gazintep">Gaziantep</option>
				<option value="Giresun">Giresun</option>
				<option value="G�m��hane">G�m��hane</option>
				<option value="Hakkari">Hakkari</option>
				<option value="Hatay">Hatay</option>
				<option value="��el">��el</option>
				<option value="I�d�r">I�d�r</option>
				<option value="Isparta">Isparta</option>
				<option value="�stanbul">�stanbul</option>
				<option value="�zmir">�zmir</option>
				<option value="Kahramanmara�">Kahramanmara�</option>
				<option value="Karab�k">Karab�k</option>
				<option value="Karaman">Karaman</option>
				<option value="Kars">Kars</option>
				<option value="Kastamonu">Kastamonu</option>
				<option value="Kayseri">Kayseri</option>
				<option value="Kilis">Kilis</option>
				<option value="K�r�kkale">K�r�kkale</option>
				<option value="K�rklareli">K�rklareli</option>
				<option value="K�r�ehir">K�r�ehir</option>
				<option value="Kocaeli">Kocaeli</option>
				<option value="Konya">Konya</option>
				<option value="K�tahya">K�tahya</option>
				<option value="Malatya">Malatya</option>
				<option value="Manisa">Manisa</option>
				<option value="Mardin">Mardin</option>
				<option value="Mu�la">Mu�la</option>
				<option value="Mu�">Mu�</option>
				<option value="Nev�ehir">Nev�ehir</option>
				<option value="Ni�de">Ni�de</option>
				<option value="Ordu">Ordu</option>
				<option value="Osmaniye">Osmaniye</option>
				<option value="Rize">Rize</option>
				<option value="Sakarya">Sakarya</option>
				<option value="Samsun">Samsun</option>
				<option value="Siirt">Siirt</option>
				<option value="Sinop">Sinop</option>
				<option value="Sivas">Sivas</option>
				<option value="�anl�urfa">�anl�urfa</option>
				<option value="��rnak">��rnak</option>
				<option value="Tekirda�">Tekirda�</option>
				<option value="Tokat">Tokat</option>
				<option value="Trabzon">Trabzon</option>
				<option value="Tunceli">Tunceli</option>
				<option value="U�ak">U�ak</option>
				<option value="Van">Van</option>
				<option value="Yalova">Yalova</option>
				<option value="Yozgat">Yozgat</option>
				<option value="Zonguldak">Zonguldak</option>
				</select> ya da 
				<font size="1">
				<input  size="13" name="sehirtxt"></td>
			</tr>
			<tr>
				<td width="38%">�lke
				<font color="#de2418">*</td>
				<td width="1%">:</td>
				<td width="54%">
				<select id="ulke0"  size="1" name="ulke">
				<option value="<?=$ulke?>"><?=$ulke?></option>
				<option value="T�rkiye">T�rkiye</option>
				<option value="ABD">ABD</option>
				<option value="Almanya">Almanya</option>
				<option value="Andorra">Andorra</option>
				<option value="Arnavutluk">Arnavutluk</option>
				<option value="Avusturalya">Avusturalya</option>
				<option value="Avusturya">Avusturya</option>
				<option value="Azerbaycan">Azerbaycan</option>
				<option value="Bahreyn">Bahreyn</option>
				<option value="Baglade�">Banglade�</option>
				<option value="Bel�ika">Bel�ika</option>
				<option value="Beyaz Rusya">Beyaz Rusya</option>
				<option value=" Birl.Arap.Emirlk.">Birl.Arap.Emirlk.</option>
				<option value="Bulgaristan">Bulgaristan</option>
				<option value="Cezayir">Cezayir</option>
				<option value="�ek Cumhuriyeti">�ek Cumhuriyeti</option>
				<option value="Danimarka">Danimarka</option>
				<option value="Ermenistan">Ermenistan</option>
				<option value="Estonya">Estonya</option>
				<option value="Finlandiya">Finlandiya</option>
				<option value="Fransa">Fransa</option>
				<option value="G�rcistan">G�rcistan</option>
				<option value="Hindistan">Hindistan</option>
				<option value="Holanda">Hollanda</option>
				<option value="Hong Kong">Hong Kong</option>
				<option value="Irak">Irak</option>
				<option value="�ngiltere">�ngiltere</option>
				<option value="�ran">�ran</option>
				<option value="�rlanda">�rlanda</option>
				<option value="�spanya">�spanya</option>
				<option value="�srail">�srail</option>
				<option value="�sve�">�sve�</option>
				<option value="�sv�re">�svi�re</option>
				<option value="�talya">�talya</option>
				<option value="Japonya">Japonya</option>
				<option value="Kanada">Kanada</option>
				<option value="Katar">Katar</option>
				<option value="Kazakistan">Kazakistan</option>
				<option value="K�rg�zistan">K�rg�zistan</option>
				<option value="KKTC">KKTC</option>
				<option value="Kuveyt">Kuveyt</option>
				<option value="Letonya">Letonya</option>
				<option value="Litvanya">Litvanya</option>
				<option value="L�bnan">L�bnan</option>
				<option value="L�ksemburg">L�ksemburg</option>
				<option value="Macaristan">Macaristan</option>
				<option value="Makao">Makao</option>
				<option value="Makedonya">Makedonya</option>
				<option value="Maldivler">Maldivler</option>
				<option value="Malta">Malta</option>
				<option value="Meksika">Meksika</option>
				<option value="M�s�r">M�s�r</option>
				<option value="Moldavya">Moldavya</option>
				<option value="Monako">Monako</option>
				<option value="Nepal">Nepal</option>
				<option value="Norve�">Norve�</option>
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
				<option value="T�rkiye">T�rkiye</option>
				<option value="T�rkmenistan">T�rkmenistan</option>
				<option value="Ukrayna">Ukrayna</option>
				<option value="Umman">Umman</option>
				<option value="�rd�n">�rd�n</option>
				<option value="Vatikan">Vatikan</option>
				<option value="Yemen">Yemen</option>
				<option value="Yeni Zelanda">Yeni Zelanda</option>
				<option value="Yunanistan">Yunanistan</option>
				<option value="Di�er">Di�er</option>
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
				<td width="54%"><input type="submit" value="Kay�t Et" name="I1"></td>
			</tr>
		</table>
		</td>
	</tr>
</table>

</fieldset>
<?
} else {
echo "Araman�z sonucunda kay�t bulunamam��t�r.";
}
}
?>
</td></tr></table></td>
							</tr>
						</table>
						</td>
					</tr>
				</table>