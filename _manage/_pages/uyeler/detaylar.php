<?
$get_uye_det=mysql_query("SELECT kullaniciadi,sifre,email,adsoyad,cinsiyet,dtarih,mhal,ogrdurum,tel,gsm,sunvan,vergid,vergino,adres,sehir,semt,ulke,pkod,meslek,falan,durum,referans FROM uyeler WHERE id='$uye_id'");
list($kullaniciadi,$sifre,$email,$adsoyad,$cinsiyet,$dtarih,$mhal,$ogrdurum,$tel,$gsm,$sunvan,$vergid,$vergino,$adres,$sehir,$semt,$ulke,$pkod,$meslek,$falan,$durum,$referans)=mysql_fetch_row($get_uye_det);
?>
<p><font face="Arial"><b>Üye Bilgileri</b></font></p>
<table border="0" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="600" id="AutoNumber1">
  <tr>
    <td width="20%" bgcolor="#F3F3F3"><b><font face="Verdana" size="1">Kullanýcý 
    Adý</font></b></td>
    <td bgcolor="#F3F3F3"><font face="Verdana" size="1">:</font></td>
    <td width="80%" bgcolor="#F3F3F3"><font size="1" face="Verdana"><? echo "$kullaniciadi"; ?></font></td>
  </tr>
  <tr>
    <td width="20%"><b><font face="Verdana" size="1">Þifre</font></b></td>
    <td><font face="Verdana" size="1">:</font></td>
    <td width="80%"><font size="1" face="Verdana"><? echo "$sifre"; ?></font></td>
  </tr>
  <tr>
    <td width="20%" bgcolor="#F3F3F3"><b><font face="Verdana" size="1">Ad Soyad</font></b></td>
    <td bgcolor="#F3F3F3"><font face="Verdana" size="1">:</font></td>
    <td width="80%" bgcolor="#F3F3F3"><font face="Verdana" size="1"><? echo "$adsoyad"; ?></font></td>
  </tr>
  <tr>
    <td width="20%"><b><font face="Verdana" size="1">Email Adresi</font></b></td>
    <td><font face="Verdana" size="1">:</font></td>
    <td width="80%"><font face="Verdana" size="1"><? echo "$email"; ?></font></td>
  </tr>
  <tr>
    <td width="20%" bgcolor="#F3F3F3"><b><font face="Verdana" size="1">Adres</font></b></td>
    <td bgcolor="#F3F3F3"><font face="Verdana" size="1">:</font></td>
    <td width="80%" bgcolor="#F3F3F3"><font face="Verdana" size="1"><? echo "$adres"; ?></font></td>
  </tr>
  <tr>
    <td width="20%"><b><font face="Verdana" size="1">Semt</font></b></td>
    <td><font face="Verdana" size="1">:</font></td>
    <td width="80%"><font face="Verdana" size="1"><? echo "$semt"; ?></font></td>
  </tr>
  <tr>
    <td width="20%" bgcolor="#F3F3F3"><b><font face="Verdana" size="1">Þehir</font></b></td>
    <td bgcolor="#F3F3F3"><font face="Verdana" size="1">:</font></td>
    <td width="80%" bgcolor="#F3F3F3"><font face="Verdana" size="1"><? echo "$sehir"; ?></font></td>
  </tr>
  <tr>
    <td width="20%"><b><font face="Verdana" size="1">Posta Kodu</font></b></td>
    <td><font face="Verdana" size="1">:</font></td>
    <td width="80%"><font size="1" face="Verdana"><? echo "$pkod"; ?></font></td>
  </tr>
  <tr>
    <td width="20%" bgcolor="#F3F3F3"><b><font face="Verdana" size="1">Ulke</font></b></td>
    <td bgcolor="#F3F3F3"><font face="Verdana" size="1">:</font></td>
    <td width="80%" bgcolor="#F3F3F3"><font face="Verdana" size="1"><? echo "$ulke"; ?></font></td>
  </tr>
  <tr>
    <td width="20%"><b><font face="Verdana" size="1">Telefon</font></b></td>
    <td><font face="Verdana" size="1">:</font></td>
    <td width="80%"><font face="Verdana" size="1"><? echo "$tel"; ?></font></td>
  </tr>
  <tr>
    <td width="20%" bgcolor="#F3F3F3"><b><font face="Verdana" size="1">GSM</font></b></td>
    <td bgcolor="#F3F3F3"><font face="Verdana" size="1">:</font></td>
    <td width="80%" bgcolor="#F3F3F3"><font face="Verdana" size="1"><? echo "$gsm"; ?></font></td>
  </tr>
  <tr>
    <td width="20%" bgcolor="#F3F3F3"><b><font face="Verdana" size="1">Cinsiyet</font></b></td>
    <td bgcolor="#F3F3F3"><font face="Verdana" size="1">:</font></td>
    <td width="80%" bgcolor="#F3F3F3"><font face="Verdana" size="1"><? echo "$cinsiyet"; ?></font></td>
  </tr>
  <tr>
    <td width="20%"><b><font face="Verdana" size="1">Doðum Tarihi</font></b></td>
    <td><font face="Verdana" size="1">:</font></td>
    <td width="80%"><font face="Verdana" size="1"><? echo "$dtarih"; ?></font></td>
  </tr>
  <tr>
    <td width="20%" bgcolor="#F3F3F3"><b><font face="Verdana" size="1">Medeni Hal</font></b></td>
    <td bgcolor="#F3F3F3"><font face="Verdana" size="1">:</font></td>
    <td width="80%" bgcolor="#F3F3F3"><font face="Verdana" size="1"><? echo "$mhal"; ?></font></td>
  </tr>
  <tr>
    <td width="20%"><b><font face="Verdana" size="1">Öðrenim Durumu</font></b></td>
    <td><font face="Verdana" size="1">:</font></td>
    <td width="80%"><font face="Verdana" size="1"><? echo "$ogrdurum"; ?></font></td>
  </tr>
  <tr>
    <td width="20%" bgcolor="#F3F3F3"><b><font face="Verdana" size="1">Meslek</font></b></td>
    <td bgcolor="#F3F3F3"><font face="Verdana" size="1">:</font></td>
    <td width="80%" bgcolor="#F3F3F3"><font face="Verdana" size="1"><? echo "$meslek"; ?></font></td>
  </tr>
  <tr>
    <td width="20%"><b><font face="Verdana" size="1">Faaliyet Alaný</font></b></td>
    <td><font face="Verdana" size="1">:</font></td>
    <td width="80%"><font face="Verdana" size="1"><? echo "$falan"; ?></font></td>
  </tr>
  <tr>
    <td width="20%" bgcolor="#F3F3F3"><b><font face="Verdana" size="1">Firma Ünvaný</font></b></td>
    <td bgcolor="#F3F3F3"><font face="Verdana" size="1">:</font></td>
    <td width="80%" bgcolor="#F3F3F3"><font face="Verdana" size="1"><? echo "$sunvan"; ?></font></td>
  </tr>
  <tr>
    <td width="20%"><b><font face="Verdana" size="1">Vergi Dairesi</font></b></td>
    <td><font face="Verdana" size="1">:</font></td>
    <td width="80%"><font face="Verdana" size="1"><? echo "vergid"; ?></font></td>
  </tr>
  <tr>
    <td width="20%" bgcolor="#F3F3F3"><b><font face="Verdana" size="1">Vergi Numarasý</font></b></td>
    <td bgcolor="#F3F3F3"><font face="Verdana" size="1">:</font></td>
    <td width="80%" bgcolor="#F3F3F3"><font face="Verdana" size="1"><? echo "$vergino"; ?></font></td>
  </tr>
  <tr>
    <td colspan="3" width="20%"><hr color="#000000" size="1"></td>
  </tr>
  <tr>
    <td width="20%"><b><font face="Verdana" size="1">Referans</font></b></td>
    <td><font face="Verdana" size="1">:</font></td>
    <td width="80%"><font face="Verdana" size="1"><? echo "$referans"; ?></font></td>
  </tr>
</table>