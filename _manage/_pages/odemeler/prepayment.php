<?


$reftime = time();

$refno = "CANKAR1"."$reftime";

if($ac_t=="pay"){


if(($cc_ad) && ($cc_tel) && ($cc_adres) && ($cc_sehir) && ($cc_ulke) && ($cc_num) && ($cc_ay) && ($cc_yil) && ($cc_cvv) && ($cc_total)){


$url = "https://vpos.est.com.tr/servlet/cc5ApiServer";
$params = "DATA=<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>
<CC5Request>
<Name>otorey10</Name>
<Password>C4nK4rw3bsh0p</Password>
<ClientId>202401040</ClientId>
<Mode>P</Mode>
<OrderId>$siparis_numarasi</OrderId>
<TransId>$siparis_numarasi</TransId>
<UserId>$cc_ad</UserId>
<Type>Auth</Type>
<Number>$cc_num</Number>
<Expires>$cc_ay/$cc_yil</Expires>
<Cvv2Val>$cc_cvv</Cvv2Val>
<Total>$cc_total</Total>
<Currency>949</Currency>
<BillTo>
<Name>$cc_ad</Name>
<Street1></Street1>
<Street2></Street2>
<Street3></Street3>
<City></City>
<StateProv></StateProv>
<PostalCode></PostalCode>
<Country></Country>
<Company>$cc_ad</Company>
<TelVoice></TelVoice>
</BillTo>
</CC5Request>
";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,  2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_TIMEOUT, 10); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $params); 
$resultgaranti = curl_exec($ch);

$mystring =$resultgaranti;

$orderidstartchar="<OrderId>";
$posoids = strpos($mystring, $orderidstartchar);
$posoidsx = $posoids +9;
$orderidendchar="</OrderId>";
$posoide = strpos($mystring, $orderidendchar);
$oidlen = $posoide-$posoids-9;

// ORDER ID
$order_id = substr($mystring, $posoidsx, $oidlen);


$groupidstartchar="<GroupId>";
$posgids = strpos($mystring, $groupidstartchar);
$posgidsx = $posgids +9;
$groupidendchar="</GroupId>";
$posgide = strpos($mystring, $groupidendchar);
$gidlen = $posgide-$posgids-9;

// GROUP ID
$group_id = substr($mystring, $posgidsx, $gidlen);


$authstartchar="<AuthCode>";
$posauths = strpos($mystring, $authstartchar);
$posauthsx = $posauths +10;
$authendchar="</AuthCode>";
$posauthe = strpos($mystring, $authendchar);
$authlen = $posauthe-$posauths-10;

// AUTH CODE
$auth_code = substr($mystring, $posauthsx, $authlen);


$responsestartchar="<Response>";
$posress = strpos($mystring, $responsestartchar);
$posressx = $posress +10;
$responseendchar="</Response>";
$posrese = strpos($mystring, $responseendchar);
$reslen = $posrese-$posress-10;

//RESPONSE MESSAGE
$response = substr($mystring, $posressx, $reslen);


$kodstartchar="<ProcReturnCode>";
$poskods = strpos($mystring, $kodstartchar);
$poskodsx = $poskods +16;
$kodendchar="</ProcReturnCode>";
$poskode = strpos($mystring, $kodendchar);
$kodlen = $poskode-$poskods-16;

//RETURN CODE
$kod = substr($mystring, $poskodsx, $kodlen);


$tidstartchar="<TransId>";
$postids = strpos($mystring, $tidstartchar);
$postidsx = $postids +9;
$tidendchar="</TransId>";
$postide = strpos($mystring, $tidendchar);
$tidlen = $postide-$postids-9;

// TRANSECTION ID
$tid = substr($mystring, $postidsx, $tidlen);

//$kod=00;

if($kod=="00"){
	
    $mip = $REMOTE_ADDR;
	$tarihxxx = date("Y-m-d H:i:s");

    $cc_start = substr($cc_num,0,4);
    $cc_end = substr($cc_num,12,4);

    $cc_sql = "$cc_start"."********"."$cc_end";
    
    mysql_query("insert into manuel_odemeler (mid,adsoyad,adres,sehir,ulke,tel,ccnum,ccay,ccyil,cvv,tutar,sipno,cc_not,tarih,ip,auth) values ('$my_uye_id','$cc_ad','$cc_adres','$cc_sehir','$cc_ulke','$cc_tel','$cc_sql','$cc_ay','$cc_yil','$cc_cvv','$cc_total','$refproc','$cc_not','$tarihxxx','$mip','$auth_code')");
	echo "<script> alert(\"$cc_total YTL, $cc_sql numaralý kredi kartýnýzdan çekilmiþtir.\\nDetaylarý Hesabýnýz altýndaki Manuel Ödemelerimde bulabilirsiniz.\"); </script>";
    //echo "ODEME OK<br>Kod : $kod<br>AuthCode:$auth_code<br>";

} else {
	echo "<script> alert(\"Kredi Kartý Reddedildi!($kod)\\nLütfen bilgilerin doðruluðunu kontrol edip tekrar deneyiniz.\"); </script>";

    //echo "ODEME FAILED<br>Kod : $kod<br>TransID:$tid<br>";
	
}

} else {

echo "<script> alert(\"Lütfen tüm alanladý doldurunuz...\"); </script>";

}

}

?>
<table border="0" width="100%" id="table1" cellspacing="0" cellpadding="2">
	<tr>
		<td>
		<table border="0" width="100%" id="table3" cellspacing="0" cellpadding="0">
			<tr>
				<td><b><font size="2" face="Verdana">Ödeme Alaný</font></b></td>
				<td>
								</td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td><hr color="#000000" size="1"></td>
	</tr>
	<tr>
		<td><font face="Tahoma" size="2">Tüm alanlarýn doldurulmasý zorunludur. Sistem bu iþlem 
		için size referans numarasý olarak <b><?=$refno?></b> atamýþtýr.</font></td>
	</tr>
	<tr>
		<td><hr size="1" width="90%"></td>
	</tr>
	<tr>
		<td>
		<form method="POST" action="https://www.otoreyon.com/admin/_manage/odemeler/prepayment.php">
		<input type="hidden" name="ac_t" value="pay">
		<input type="hidden" name="refproc" value="<?=$refno?>">
			<div align="center">
			<table border="0" width="80%" id="table2" cellspacing="0" cellpadding="2">
				<tr>
					<td colspan="3"><b><font face="Arial" size="2">Kredi Kartý 
					Bilgileri</font></b></td>
				</tr>
				<tr>
					<td nowrap><font face="Arial" size="2">Ad Soyad</font></td>
					<td><font face="Arial" size="2">:</font></td>
					<td width="100%">
					<input type="text" name="cc_ad" size="19" style="font-family: Verdana; font-size: 8pt"></td>
				</tr>
				<tr>
					<td nowrap><font face="Arial" size="2">Telefon</font></td>
					<td><font face="Arial" size="2">:</font></td>
					<td width="100%">
					<input type="text" name="cc_tel" size="14" style="font-family: Verdana; font-size: 8pt"></td>
				</tr>
				<tr>
					<td nowrap><font face="Arial" size="2">Adres</font></td>
					<td><font face="Arial" size="2">:</font></td>
					<td width="100%">
					<input type="text" name="cc_adres" size="28" style="font-family: Verdana; font-size: 8pt"></td>
				</tr>
				<tr>
					<td nowrap><font face="Arial" size="2">Þehir</font></td>
					<td><font face="Arial" size="2">:</font></td>
					<td width="100%">
					<input type="text" name="cc_sehir" size="12" style="font-family: Verdana; font-size: 8pt"></td>
				</tr>
				<tr>
					<td nowrap><font face="Arial" size="2">Ülke</font></td>
					<td><font face="Arial" size="2">:</font></td>
					<td width="100%">
					<font face="Arial" size="1">
					<select id="cc_ulke" style="FONT-SIZE: 8pt; FONT-FAMILY: Verdana" size="1" name="cc_ulke">
					<option value="0" selected>Seçiniz</option>
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
					</select></font></td>
				</tr>
				<tr>
					<td nowrap colspan="3"><span style="font-size: 6pt">&nbsp;</span></td>
				</tr>
				<tr>
					<td nowrap><font face="Arial" size="2">Kredi Kartý Numarasý</font></td>
					<td><font face="Arial" size="2">:</font></td>
					<td width="100%">
					<input type="text" name="cc_num" size="19" style="font-family: Verdana; font-size: 8pt"></td>
				</tr>
				<tr>
					<td nowrap><font face="Arial" size="2">Geçerlilik Tarihi</font></td>
					<td><font face="Arial" size="2">:</font></td>
					<td width="100%">
					<select size="1" name="cc_ay" style="font-family: Verdana; font-size: 8pt">
					<option value="0">--</option>
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					</select><font size="2" face="Arial">/</font><select size="1" name="cc_yil" style="font-family: Verdana; font-size: 8pt">
					<option value="0">----</option>
					<option value="05">2005</option>
					<option value="06">2006</option>
					<option value="07">2007</option>
					<option value="08">2008</option>
					<option value="09">2009</option>
					<option value="10">2010</option>
					<option value="11">2011</option>
					<option value="12">2012</option>
					<option value="13">2013</option>
					<option value="14">2014</option>
					<option value="15">2015</option>
					<option value="14">2014</option>
					<option value="15">2015</option>
					</select></td>
				</tr>
				<tr>
					<td nowrap><font face="Arial" size="2">CVV Numarasý<sup>*</sup></font></td>
					<td><font face="Arial" size="2">:</font></td>
					<td width="100%">
					<input type="text" name="cc_cvv" size="3" style="font-family: Verdana; font-size: 8pt"></td>
				</tr>
				<tr>
					<td nowrap colspan="3"><span style="font-size: 6pt">&nbsp;</span></td>
				</tr>
				<tr>
					<td nowrap colspan="3"><b><font size="2" face="Arial">Ödeme 
					Bilgileri</font></b></td>
				</tr>
				<tr>
					<td nowrap><font face="Arial" size="2">Ödeme Tutarý</font></td>
					<td><font face="Arial" size="2">:</font></td>
					<td width="100%">
					<input type="text" name="cc_total" size="6" style="font-family: Verdana; font-size: 8pt"><font size="2" face="Arial">,-- 
					YTL</font></td>
				</tr>
				<tr>
					<td nowrap><font face="Arial" size="2">Not</font></td>
					<td><font face="Arial" size="2">:</font></td>
					<td width="100%">
					<textarea rows="5" name="cc_not" cols="31" style="font-family: Verdana; font-size: 8pt"></textarea></td>
				</tr>
				<tr>
					<td nowrap><font face="Arial" size="2">Referans No</font></td>
					<td><font face="Arial" size="2">:</font></td>
					<td width="100%">
					<font face="Tahoma" size="2"><b><?=$refno?></b></font></td>
				</tr>
				<tr>
					<td nowrap>&nbsp;</td>
					<td>&nbsp;</td>
					<td width="100%">
					<input type="submit" value="Ödeme Yap" name="B1" style="font-family: Arial; font-size: 10pt"></td>
				</tr></form>
			</table>
		</div>
&nbsp;</td>
	</tr>
	<tr>
		<td>
		<hr size="1" width="90%"></td>
	</tr>
	<tr>
		<td>
		<b><font size="1" face="Arial" color="#FF0000">DÝKKAT : Ödeme yap 
		butonuna sadece bir defa týklayýnýz, aksi taktirde kredi kartýnýz iki 
		defa iþlem görebilir.</font></b><font size="1" face="Verdana"><br>
		* CVV numarasý, kredi kartýnýzýn arka yüzünde, imza alanýn üzerinde yer 
		alan sayýnýn son 3 (üç) basamaðýdýr.</font></td>
	</tr>
</table>
