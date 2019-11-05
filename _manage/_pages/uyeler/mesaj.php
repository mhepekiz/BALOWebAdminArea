<script>
function haber_a()
{
haber_ara.submit();
}
</script>


<?

		$uyekim = mysql_query("select adsoyad from uyeler where id='$user'");
		list($uyem) = mysql_fetch_row($uyekim);


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

<legend>Mesaj Ekleme Formu</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
		<div class="paging">			


<form method="POST" action="/admin/_manage/uyeler/mesaj.php">
  <table border="0" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="450" id="AutoNumber1">
    <tr>
      <td align="left">Üye</td>
      <td width="80%"><?=$uyem?></td>
    </tr>
    <tr>
      <td align="left">Baþlýk</td>
      <td width="80%"><input type="text" name="baslik" size="38"></td>
    </tr>
    <tr>
      <td align="left">Metin</td>
      <td width="80%"><textarea rows="6" name="metin" cols="37"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="80%"><input type="submit" value="Üyeye Mesaj Gönder" name="B1"></td>
    </tr>
  </table>
  <input type="hidden" name="ac_t" value="add">
  <input type="hidden" name="uye" value="<?=$user?>">

</form></td></tr></table></fieldset>
<br><br>
&nbsp;<fieldset>

<legend>Son 25 Mesaj </legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
		<div class="paging">			


<table border="0" width="100%" id="table10" cellpadding="2" cellspacing="0">
	<tr>
		<td nowrap colspan="4">Mevcut mesajlar içinde arama yapabilirsiniz...</td>
	</tr>
	<tr>
		<td nowrap colspan="4">
		<form method="POST" action="/admin/_manage/metin/haberler.php" name="haber_ara">
			<table border="0" width="100%" id="table11" cellspacing="0" cellpadding="0">
				<tr>
					<td><input type="text" name="q" size="20" value="<?=$q?>"></td>
					<td nowrap><span lang="en">&nbsp;</span><a href="javascript:haber_a();"><img border="0" src="/admin/_media/search.gif" width="16" height="16"> 
					Ara</a></td>
					<td width="100%">&nbsp;<span lang="en">&nbsp;&nbsp;&nbsp;</span><a href="/admin/_manage/metin/haberler.php"><img border="0" src="/admin/_media/showall.gif" width="16" height="16"> 
					Hepsini Göster</a></td>
				</tr>
			</table>
			<input type="hidden" name="ac_t" value="search">
		</td></form>
	</tr>
	<tr>
		<td nowrap width="100%" bgcolor="#85ABEB"><b>Baþlýk</b></td>
		<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>Tarih</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>
		<td nowrap align="center" bgcolor="#DCE8FA"><span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;</span><b>Üye</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>
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
$get_news = mysql_query("select id,baslik,tarih,editor from haberler $newsq");
while(list($hid,$hbaslik,$htarih,$heditor)=mysql_fetch_row($get_news)){
$hbaslik = str_replace($q, "<font color='blue'>$q</font>", $hbaslik);
$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';

echo'	<tr>
		<td bgcolor="'.$bgc.'" nowrap width="100%">'.$hbaslik.'</td>
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
		<td bgcolor="'.$bgc.'" nowrap width="100%">Sistemde kayýtlý haber bulunmamaktadýr.</td>
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