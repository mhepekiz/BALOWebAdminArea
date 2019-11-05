<script language="JAVASCRIPT">



  function bosvarmi(){

  if (birseyekle.modeltip.value=="00"){ alert("\"Kategori\" Seçmelisiniz."); birseyekle.modeltip.focus(); return (false); }
  if (birseyekle.modeladi.value==""){ alert("\"Model\" Boþ Býrakýlamaz."); birseyekle.modeladi.focus(); return (false); }
  return (true); }



  </script>
<script>

function haber_a()

{

haber_ara.submit();

}

</script>
<table border="0" width="100%" id="table7" cellspacing="0" cellpadding="0" height="100%">
	<tr>
		<td valign="top" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
		<!--Start Contents-->
		<table border="0" width="100%" id="table8" cellspacing="0" cellpadding="0">
			<tr>
				<td style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
				<img border="0" src="/admin/_media/title_spacer.gif" width="15" height="56" style="border: medium none"></td>
				<td width="100%" bgcolor="#FFFFFF" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
				<font face="Arial" size="4">Wallpaper</font></td>
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
				<td>
				<table width="100%" cellspacing="0" cellpadding="0" border="0">
					<tr>
						<td><fieldset>
						<legend>Wallpaper Ekleme Formu</legend>
						<table width="100%" cellspacing="0" cellpadding="2" border="0">
							<tr>
								<td>
								<div class="paging">
									<form name="birseyekle" method="POST" enctype="multipart/form-data" action="/admin/_manage/media/wp.php" onsubmit="return bosvarmi(this)">
										<table border="0" cellpadding="2" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
																						
											<tr>
												<td valign="top">Fotoðraf</td>
												<td width="84%">
												<input type="file" name="filename" size="20"></td>
											</tr>
											
											<tr>
												<td>&nbsp;</td>
												<td width="84%">&nbsp;</td>
											</tr>
											<tr>
												<td>&nbsp;</td>
												<td width="84%">
												<input type="submit" value="Wallpaper Ekle" name="B1"></td>
											</tr>
										</table>
										<input type="hidden" name="ac_t" value="add">
									</form>
								</div>
								</td>
							</tr>
						</table>
						</fieldset> <br>
						<br>
&nbsp;<fieldset>
						<legend>Sistemdeki Wallpaperlar</legend>
						<table width="100%" cellspacing="0" cellpadding="2" border="0">
							<tr>
								<td>
								<div class="paging">
									<table border="0" width="100%" id="table10" cellpadding="2" cellspacing="0">
										<tr>
											<td nowrap colspan="2">Mevcut modeller 
											içinde arama yapabilirsiniz...</td>
										</tr>
										<tr>
											<td nowrap colspan="2">
											<form method="POST" action="/admin/_manage/media/wp.php
" name="haber_ara">
												<table border="0" width="100%" id="table11" cellspacing="0" cellpadding="0">
													<tr>
														<td>
														<input type="text" name="q" size="20" value="<?=$q?>"></td>
														<td nowrap>
														<span lang="en">&nbsp;</span><a href="javascript:haber_a();"><img border="0" src="/admin/_media/search.gif" width="16" height="16"> 
														Ara</a></td>
														<td width="100%">&nbsp;<span lang="en">&nbsp;&nbsp;
														</span>
														<a href="/admin/_manage/media/wp.php

"><img border="0" src="/admin/_media/showall.gif" width="16" height="16"> Hepsini 
														Göster</a></td>
													</tr>
												</table>
												<input type="hidden" name="ac_t" value="search">
											</form>
											</td>
											</form>
										</tr>
										<tr>
											<td nowrap align="center" bgcolor="#A2BFF0" width="100%">
											<span lang="en">&nbsp;&nbsp; </span>
											<b>Eklenme Zamaný</b><span lang="en">&nbsp;&nbsp;
											</span></td>
									
											

		<td nowrap align="center">

		<p align="center"><span lang="en">&nbsp;&nbsp;</span><b>Sil</b><span lang="en">&nbsp;&nbsp;</span></td>
										</tr>
										<?

if($q){

$newsq = "where baslik LIKE '%$q%' order by id desc";

} else {

$newsq = "order by id desc limit 25";

}

$hs = 0;

$get_news = mysql_query("select id,kucuk from wallpaper $newsq");

while(list($hid,$fot)=mysql_fetch_row($get_news)){

$hbaslik = str_replace($q, "<font color='blue'>$q</font>", $hbaslik);

$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';

		
		

echo'	<tr>

		

		<td bgcolor="'.$bgc.'" nowrap align="left"><img src="'.$fot.'" border="0"></td>
		
								
		
		
		<td bgcolor="'.$bgc.'" nowrap align="center"><a href="/admin/_manage/media/wp.php

?ac_t=del&remhid='.$hid.'"><img src="/admin/_media/delete.gif"></a></td> 
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
								</div>
								</td>
							</tr>
						</table>
						</fieldset> </td>
					</tr>
				</table>
&nbsp;</td>
			</tr>
		</table>
		</td>
	</tr>
</table>
