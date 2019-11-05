


 <?
 
 	$ayarlar = mysql_query("select bgcolor, smfont, saghabersayisi, sitebasligi, yazarsayisi from klist_settings where id='1'");
 	list($a_color, $a_font, $a_habersay, $a_baslik, $a_yazarsay) = mysql_fetch_row($ayarlar);
 
 
 
 ?>




<table border="0" width="100%" id="table7" cellspacing="0" cellpadding="0" height="100%">

					<tr>

						<td valign="top" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px"><!--Start Contents-->

						

						</td>

					</tr>

				
					<tr>

						<td valign="top" height="100%" bgcolor="#F9F8F8" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">

						<table border="0" width="100%" id="table9" cellspacing="0" cellpadding="4">

							<tr>

								<td><table width="100%" cellspacing="0" cellpadding="0" border="0"><tr><td>

<fieldset>

<legend>Ýþlemler</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr>
	<td width="25%">
<div class="paging">
<table border="0" id="table14" cellspacing="0" cellpadding="3" width="400">
	<tr>
		<td align="center" width="25%">
								<font face="Tahoma" style="font-size:11px">
								<a href="/admin/_manage/site/genel.php">
								<img border="0" src="/admin/_media/dosya_ekle.gif"></a></font></td>
		<td align="center" width="25%">
		<a href="/admin/_manage/site/bgbanner.php">
		<img border="0" src="/admin/_media/dosya_ekle.gif"></a></td>
		<td align="center" width="25%">
								<font face="Tahoma" style="font-size:11px">
								<a href="/admin/_manage/site/tepebanner.php">
								<img border="0" src="/admin/_media/dosya_ekle.gif"></a></font></td>
		<td align="center" width="25%">
		<a href="/admin/_manage/site/sablon.php">
		<img border="0" src="/admin/_media/dosya_ekle.gif"></a></td>
	</tr>
	<tr>
		<td align="center" width="25%">
		<a href="/admin/_manage/site/bgbanner.php">
		<span style="font-size: 11px">Genel Ayarlar</span></a></td>
		<td align="center" width="25%">	
		<a href="/admin/_manage/site/bgbanner.php"><span style="font-size: 11px">
		BG Banner</span></a></td>
		<td align="center" width="25%">	
		<a href="/admin/_manage/site/tepebanner.php">
		<span style="font-size: 11px">Tepe Banner</span></a></td>
		<td align="center" width="25%">	
		<a href="/admin/_manage/site/sablon.php"><span style="font-size: 11px">
		Site Þablonu</span></a></td>
	</tr>
	<tr>
		<td align="center" width="25%">&nbsp;</td>
		<td align="center" width="25%">&nbsp;</td>
		<td align="center" width="25%">&nbsp;</td>
		<td align="center" width="25%">&nbsp;</td>
	</tr>
</table>
</td></tr></table></fieldset></td></tr><tr><td>

<fieldset>

<legend>Site Genel Ayarlarý</legend>

<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>

		<div class="paging">			

<form name="guncelle" method="POST" enctype="multipart/form-data" action="/admin/_manage/site/genel.php">

  <table border="0" cellpadding="2" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">

    <tr>

      <td align="left" valign="top">&nbsp;</td>

      <td width="48%" colspan="2">

				&nbsp;</td>

      <td width="35%" rowspan="10" valign="top">

				&nbsp;</td>

    </tr>

    <tr>

      <td align="left" valign="top">Arka Plan Rengi</td>

      <td width="48%" colspan="2"><input type="text" name="bgcolor" size="5" value="<?=$a_color?>"></td>

    </tr>

    <tr>

      <td align="left" valign="top" height="25">Sürmanþet Fontu</td>

      <td width="48%" height="25" colspan="2"><select size="1" name="font">
      	<option  value="<?=$a_font?>"><?=$a_font?></option>
		<option value="times.ttf">Times New Roman</option>
		<option value="impact.ttf">Impact</option>
		<option value="france.ttf">France</option>
		<option value="motor.ttf">Motor</option>
		<option value="centurion.ttf">Centurion</option>
		</select></td>

    </tr>

    
    

    <tr>

      <td>Listelenecek Haber Sayýsý</td>

      <td width="48%" colspan="2">
		<input type="text" name="habersayisi" size="5"  value="<?=$a_habersay?>"></td>

    </tr>

    
    

    <tr>

      <td>Site Baþlýðý</td>

      <td width="48%" colspan="2"><input type="text" name="sitebaslik" size="70"  value="<?=$a_baslik?>"></td>

    </tr>

    
    

    <tr>

      <td>Yazar Sayýsý</td>

      <td width="48%" colspan="2"><input type="text" name="yazarsayi" size="5" value="<?=$a_yazarsay?>"></td>

    </tr>

    <tr>

      <td>Açýlýþ Ekraný </td>

      <td width="2%"><select size="1" name="acilis">
		<option value="NO">Pasif</option>
		<option value="YES">Aktif</option>
		</select></td>

      <td width="46%">
      <input type="file" name="filename" size="22"></td>

    </tr>

    <tr>

      <td>&nbsp;</td>

      <td width="48%" colspan="2"><input type="submit" value="Güncelle" name="B1"></td>

    </tr>

  </table>

  <input type="hidden" name="ac_t" value="guncelle">
  <input type="hidden" name="acx_t" value="upload">

</form></td></tr></table></fieldset></td></tr></table>&nbsp;</td>

							</tr>

						</table>

						</td>

					</tr>

				</table>