<script LANGUAGE=JAVASCRIPT>
function checkfields(){


  if (birseyekle.BUBIR.value=="0")
  {
    alert("Bu bir nedir? Lütfen seçin.");
    birseyekle.BUBIR.focus();
    return (false);
  }
  
 
 if (birseyekle.UYARI.checked!=true)
  {
    alert("Sorumluluðu kabul etmeniz gerekmektedir.");
    birseyekle.UYARI.focus();
    return (false);
  }
  

 
    return (true);
}

</script>





<script>
function haber_a()
{
haber_ara.submit();
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
								<font face="Arial" size="4">Dosya Arþivi</font></td>
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

<legend>Dosya Yükleme Formu</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
		<div class="paging">			


<form name="birseyekle" method="POST" enctype="multipart/form-data" action="/admin/_manage/media/ss.php" onSubmit="return checkfields(this)">
  <table border="0" cellpadding="2" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
    <tr>
      <td align="left" colspan="2"><b><font color="#FF0000" size="2"><br>
		Dikkat! Sunucu güvenliði açýsýndan sadece .doc, .zip, .jpg, .gif ve .pdf 
		uzantýlý dosyalarýn yüklenmesine izin verilmektedir. Lütfen yüklediðiniz 
		dosyanýn güvenli olduðundan emin olunuz. Yüklenen dosya nedeniyle 
		yaþanabilecek sorunlarda dosyayý yükleyen kiþi direkt olarak sorumlu 
		olacaktýr.</font></b><p><font size="2" color="#FF0000"><b>
		<input type="checkbox" name="UYARI" value="KABUL">Yukarýdaki 
		güvenlik uyarýsýný okudum sorumluluðu kabul ediyorum.<br>
&nbsp;</b></font></td>
    </tr>
    <tr>
      <td align="left">Baþlýk</td>
      <td width="91%"><input type="text" name="baslik" size="100"></td>
    </tr>
    <tr>
      <td align="left">Bu bir</td>
      <td width="91%"><select size="1" name="BUBIR">
		<option value="0">Lütfen seçiniz... Bu bir nedir?</option>
		<option value="SS">Ekran Koruyucu</option>
		</select></td>
    </tr>
    <tr>
      <td align="left">Dil</td>
      <td width="91%"><select size="1" name="LISAN">
		<option value="TR">Türkçe</option>
		<option value="EN">Ýngilizce</option>
		</select></td>
    </tr>
    <tr>
      <td align="left">Kýsa Açýklama</td>
      <td width="91%"><textarea rows="6" name="metin" cols="80"></textarea></td>
    </tr>
    <tr>
      <td>Dosya</td>
      <td width="91%"><input type="file" name="filename" size="20"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="91%"><input type="submit" value="Dosya Ekle" name="B1"></td>
    </tr>
  </table>
  <input type="hidden" name="ac_t" value="add">
</form></td></tr></table></fieldset>
<br><br>
&nbsp;<fieldset>

<legend>Son 25 Dosya</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
		<div class="paging">			


<table border="0" width="100%" id="table10" cellpadding="2" cellspacing="0">
	<tr>
		<td nowrap colspan="4">Mevcut haberler içinde arama yapabilirsiniz...</td>
	</tr>
	<tr>
		<td nowrap colspan="4">
		<form method="POST" action="/admin/_manage/files/main.php" name="haber_ara">
			<table border="0" width="100%" id="table11" cellspacing="0" cellpadding="0">
				<tr>
					<td><input type="text" name="q" size="20" value="<?=$q?>"></td>
					<td nowrap><span lang="en">&nbsp;</span><a href="javascript:haber_a();"><img border="0" src="/admin/_media/search.gif" width="16" height="16"> 
					Ara</a></td>
					<td width="100%">&nbsp;<span lang="en">&nbsp;&nbsp;&nbsp;</span><a href="/admin/_manage/media/ss.php"><img border="0" src="/admin/_media/showall.gif" width="16" height="16"> 
					Hepsini Göster</a></td>
				</tr>
			</table>
			<input type="hidden" name="ac_t" value="search">
		</td></form>
	</tr>
	<tr>
		<td nowrap width="100%" bgcolor="#85ABEB"><b>Baþlýk</b></td>
		<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>Foto</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>
		<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>Tarih</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>
		<td nowrap align="center" bgcolor="#DCE8FA"><span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;</span><b>Editör</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>
		<td nowrap align="center">
		<p align="center"><span lang="en">&nbsp;&nbsp;</span><b>Sil</b><span lang="en">&nbsp;&nbsp;</span></td>
	</tr>
<?
if($q){
$newsq = "where baslik LIKE '%$q%' or metin LIKE '%$q%' order by id desc";
} else {
$newsq = "order by id desc limit 25";
}
$hs = 0;
$get_news = mysql_query("select id,baslik,dosya,zaman,editor from als_files $newsq");
while(list($hid,$hbaslik,$dsy,$htarih,$heditor)=mysql_fetch_row($get_news)){
$hbaslik = str_replace($q, "<font color='blue'>$q</font>", $hbaslik);
$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';



		$dosya = substr("$dsy", -3);

echo'	<tr>
		<td bgcolor="'.$bgc.'" nowrap width="100%">'.$hbaslik.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center"><img src="/_mediax/'.$dosya.'.gif"></td>
		<td bgcolor="'.$bgc.'" nowrap align="center">'.$htarih.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">'.$heditor.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center"><a href="/admin/_manage/metin/haberler.php?ac_t=del&remhid='.$hid.'"><img src="/admin/_media/delete.gif"></a></td>
	</tr>';
$hs = $hs+1;
}
if(($hs=="0") && ($q)){
echo '<tr>
		<td bgcolor="'.$bgc.'" nowrap width="100%">Aramanýz sonucunda kayýt bulunamamýþtýr.</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>
	</tr>';
} else if(($hs=="0") && ($q=="")){
echo '<tr>
		<td bgcolor="'.$bgc.'" nowrap width="100%">Sistemde kayýtlý dosya bulunmamaktadýr.</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>
	</tr>';
}
?>
</table>


</td></tr></table></fieldset>
</td></tr></table>&nbsp;</td>
							</tr>
						</table>
						</td>
					</tr>
				</table>