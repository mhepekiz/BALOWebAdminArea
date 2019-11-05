





<table border="0" width="100%" id="table7" cellspacing="0" cellpadding="0" height="100%">

					<tr>

						<td valign="top" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px"><!--Start Contents-->

						

						</td>

					</tr>

				
					<tr>

						<td valign="top" height="100%" bgcolor="#F9F8F8" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">

						<table border="0" width="100%" id="table9" cellspacing="0" cellpadding="4">

							<tr>

								<td>
<fieldset>

<legend>Ýþlemler</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr>
	<td width="25%">
<div class="paging">
<table border="0" id="table14" cellspacing="0" cellpadding="3" width="400">
	<tr>
		<td align="center" width="25%">
								<font face="Tahoma" style="font-size:11px">
								<a href="/admin/_manage/mm/fotogaleriekle.php">
								<img border="0" src="/admin/_media/dosya_ekle.gif"></a></font></td>
		<td align="center" width="25%">
		<a href="/admin/_manage/haber/kategoriekle.php">
		<img border="0" src="/admin/_media/dosya_ekle.gif"></a></td>
		<td align="center" width="25%">
								<font face="Tahoma" style="font-size:11px">
								<a href="/admin/_manage/haber/haberekle.php">
								<img border="0" src="/admin/_media/dosya_ekle.gif"></a></font></td>
		<td align="center" width="25%">
		<a href="/admin/_manage/mm/fotoekle.php">
		<img border="0" src="/admin/_media/dosya_ekle.gif"></a></td>
	</tr>
	<tr>
		<td align="center" width="25%">
		<font style="font-size:11px">
		<a href="/admin/_manage/mm/fotogaleriekle.php">Foto Galeri Ekle</a></font></td>
		<td align="center" width="25%">	
		<font style="font-size:11px"><a href="/admin/_manage/mm/fotoekle.php">Fotoðraf Ekle</a></font></td>
		<td align="center" width="25%">	
		<font style="font-size:11px">
		<a href="/admin/_manage/mm/fotogaleriekle.php">Video Galeri Ekle</a></font></td>
		<td align="center" width="25%">	
		<font style="font-size:11px"><a href="/admin/_manage/mm/videoekle.php">Video Ekle</a></font></td>
	</tr>
	<tr>
		<td align="center" width="25%">&nbsp;</td>
		<td align="center" width="25%">&nbsp;</td>
		<td align="center" width="25%">&nbsp;</td>
		<td align="center" width="25%">&nbsp;</td>
	</tr>
</table>
</td></tr></table></fieldset></td>

							</tr>

							<tr>

								<td><table width="100%" cellspacing="0" cellpadding="0" border="0"><tr><td>

<fieldset>

<legend>Foto Galeri Ekleme Formu</legend>

<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>

		<div class="paging">			

<form name="birseyekle" method="POST" enctype="multipart/form-data" action="/admin/_manage/mm/fotogaleriekle.php" onSubmit="return bosvarmi(this)">

  <table border="0" cellpadding="2" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">

    <tr>

      <td width="17%" align="left" valign="top">&nbsp;</td>

      <td width="62%">&nbsp;

				</td>

    </tr>

    <tr>

      <td align="left" valign="top">Galeri Adý</td>

      <td width="62%"><input type="text" name="galeriadi" size="70"></td>

    </tr>

    
    

    <tr>
      <td valign="top">A&ccedil;&#305;klama</td>
      <td><textarea class="ckeditor" cols="80" id="editor1" name="metin" rows="10"></textarea></td>
    </tr>
    <tr>

      <td>&nbsp;</td>

      <td width="62%">&nbsp;</td>

    </tr>

    <tr>

      <td>&nbsp;</td>

      <td width="62%"><input type="submit" value="Galeri Ekle" name="B1"></td>

    </tr>

  </table>

  <input type="hidden" name="ac_t" value="add">

</form></td></tr></table></fieldset>

<br><br>

&nbsp;<fieldset>

<legend>Sistemdeki Galeriler</legend>

<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>


		<div class="paging">			

<table border="0" width="100%" id="table10" cellpadding="2" cellspacing="0">

	<tr>

		<td nowrap colspan="3">Mevcut galeriler içinde arama yapabilirsiniz...</td>

	</tr>

	<tr>

		<td nowrap colspan="3">

		<form method="POST" action="/admin/_manage/mm/fotogaleriekle.php" name="haber_ara">

			<table border="0" width="100%" id="table11" cellspacing="0" cellpadding="0">

				<tr>

					<td><input type="text" name="q" size="20" value="<?=$q?>"></td>

					<td nowrap><span lang="en">&nbsp;</span><a href="javascript:haber_a();"><img border="0" src="/admin/_media/search.gif" width="16" height="16"> 

					Ara</a></td>

					<td width="100%">&nbsp;<span lang="en">&nbsp;&nbsp;&nbsp;</span><a href="/admin/_manage/mm/fotogaleri.php"><img border="0" src="/admin/_media/showall.gif" width="16" height="16"> 

					Hepsini Göster</a></td>

				</tr>

			</table>

			<input type="hidden" name="ac_t" value="search">

		</td></form>

	</tr>

	<tr>

		<td nowrap width="83%" bgcolor="#FF6C00"><b>Galeri Adý</b></td>
		
		
		
		
		
		<td nowrap align="center" bgcolor="#FFBE32" width="13%"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>Eklenme 
		Zamaný</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>


<?
if(($yet_tip=="151")||($yet_tip=="5")){
									
										echo'			

		<td nowrap align="center">

		<p align="center"><span lang="en">&nbsp;&nbsp;</span><b>Sil</b><span lang="en">&nbsp;&nbsp;</span></td>'; } ?>

		<td nowrap align="center" bgcolor="#FFBE32" width="2%"><b>&nbsp;Sil</b><span lang="en">&nbsp;</span></td>


	</tr>

<?

if($q){

$newsq = "where baslik LIKE '%$q%' order by id desc";

} else {

$newsq = "order by id desc limit 25";

}

$hs = 0;

$get_news = mysql_query("select id,baslik,zaman from klist_fgaleri $newsq");

while(list($fgid,$fgad,$fgzam)=mysql_fetch_row($get_news)){

$hbaslik = str_replace($q, "<font color='blue'>$q</font>", $hbaslik);

$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';

		if($hdurum=="200"){ $statimage = "/admin/_media/enable.gif"; $newdurum="100"; } else { $statimage = "/admin/_media/disable.gif"; $newdurum="200";}
		
		if($hmanset=="EVET"){ $mansetimage = "/admin/_media/manset.gif"; } else { $mansetimage = "/admin/_media/manset_off.gif"; $mandurum="EVET"; }		
		

echo'	<tr>


		<td bgcolor="'.$bgc.'" nowrap width="100%">'.$fgad.'</a></td>
		
		<td bgcolor="'.$bgc.'" nowrap align="center">'.$fgzam.'</td>		
		
		<td bgcolor="'.$bgc.'" nowrap align="center"><a href="/admin/_manage/mm/fotogaleriekle.php?ac_t=del&remhid='.$fgid.'"><img src="/admin/_media/delete.gif" border="0"></a></td>

	';
	
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