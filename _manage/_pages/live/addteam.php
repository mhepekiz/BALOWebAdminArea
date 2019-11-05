 <script LANGUAGE=JAVASCRIPT>



  function bosvarmi(){

  if (birseyekle.baslik.value==""){ alert("\"Baþlýk\" Boþ Býrakýlamaz."); birseyekle.baslik.focus(); return (false); }
  if (birseyekle.spot.value==""){ alert("\"Spot\" Boþ Býrakýlamaz."); birseyekle.spot.focus(); return (false); }
  if (birseyekle.metin.value==""){ alert("\"Metin\" Boþ Býrakýlamaz."); birseyekle.metin.focus(); return (false); }
  if (birseyekle.baslik.value==""){ alert("\"Baþlýk\" Boþ Býrakýlamaz."); birseyekle.baslik.focus(); return (false); }
  
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

						<td valign="top" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px"><!--Start Contents-->

						

						</td>

					</tr>

				
					<tr>

						<td valign="top" height="100%" bgcolor="#F9F8F8" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">

						<table border="0" width="100%" id="table9" cellspacing="0" cellpadding="4">

							<tr>

								<td><table width="100%" cellspacing="0" cellpadding="0" border="0"><tr><td>

<fieldset>

<legend>Takým Ekleme Formu</legend>

<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>

		<div class="paging">			

<form name="birseyekle" method="POST" enctype="multipart/form-data" action="/admin/_manage/live/addteam.php" onSubmit="return bosvarmi(this)">

  <table border="0" cellpadding="2" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">

    <tr>

      <td align="left" valign="top">Takým</td>

      <td width="90%"><input type="text" name="TAKIM" size="70"></td>

    </tr>

    <tr>

      <td valign="top">Logo</td>

      <td width="90%"><input type="file" name="filename" size="20"></td>

    </tr>
    
    
    
    

    <tr>

      <td>&nbsp;</td>

      <td width="90%">&nbsp;</td>

    </tr>

    <tr>

      <td>&nbsp;</td>

      <td width="90%"><input type="submit" value="Logo Ekle" name="B1"></td>

    </tr>

  </table>

  <input type="hidden" name="ac_t" value="add">

</form></td></tr></table></fieldset>

<br>&nbsp;<fieldset>

<legend>Sistemdeki Takýmlar</legend>

<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>


		<div class="paging">			

<table border="0" width="100%" id="table10" cellpadding="2" cellspacing="0">

	<tr>

		<td nowrap colspan="3">Mevcut takýmlar içinde arama yapabilirsiniz...</td>

	</tr>

	<tr>

		<td nowrap colspan="3">

		<form method="POST" action="/admin/_manage/mac/addteam.php" name="haber_ara">

			<table border="0" width="100%" id="table11" cellspacing="0" cellpadding="0">

				<tr>

					<td><input type="text" name="q" size="20" value="<?=$q?>"></td>

					<td nowrap><span lang="en">&nbsp;</span><a href="javascript:haber_a();"><img border="0" src="/admin/_media/search.gif" width="16" height="16"> 

					Ara</a></td>

					<td width="100%">&nbsp;<span lang="en">&nbsp;&nbsp;&nbsp;</span><a href="/admin/_manage/metin/haber.php"><img border="0" src="/admin/_media/showall.gif" width="16" height="16"> 

					Hepsini Göster</a></td>

				</tr>

			</table>

			<input type="hidden" name="ac_t" value="search">

		</td></form>

	</tr>

	<tr>

		<td nowrap width="100%" bgcolor="#FF6600"><b>Takým</b></td>
		
		
		
		
		
		<td nowrap align="center" bgcolor="#FF9900"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>Editor</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>

		<td nowrap align="center" bgcolor="#FFCC00"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>Eklenme 
		Zamaný</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>


<?
if(($yet_tip=="151")||($yet_tip=="5")){
									
										echo'			

		<td nowrap align="center">

		<p align="center"><span lang="en">&nbsp;&nbsp;</span><b>Sil</b><span lang="en">&nbsp;&nbsp;</span></td>'; } ?>

	</tr>

<?

if($q){

$newsq = "where baslik LIKE '%$q%' order by id desc";

} else {

$newsq = "order by takim";

}

$hs = 0;

$get_news = mysql_query("select id,takim,zaman,editor from liveteam $newsq");

while(list($hid,$hbaslik,$htarih,$heditor)=mysql_fetch_row($get_news)){

$hbaslik = str_replace($q, "<font color='blue'>$q</font>", $hbaslik);

$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';

		if($hdurum=="200"){ $statimage = "/admin/_media/enable.gif"; $newdurum="100"; } else { $statimage = "/admin/_media/disable.gif"; $newdurum="200";}
		
		if($hmanset=="EVET"){ $mansetimage = "/admin/_media/manset.gif"; } else { $mansetimage = "/admin/_media/manset_off.gif"; $mandurum="EVET"; }		
		

echo'	<tr>


		<td bgcolor="'.$bgc.'" nowrap width="100%">'.$hbaslik.'</td>


		<td bgcolor="'.$bgc.'" nowrap align="center">'.$heditor.'</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">'.$htarih.'</td>
'; 
		
		
									if(($yet_tip=="151")||($yet_tip=="5")){
									
										echo'		
		
		
		
		<td bgcolor="'.$bgc.'" nowrap align="center"><a href="/admin/_manage/metin/haber.php?ac_t=del&remhid='.$hid.'"><img src="/admin/_media/delete.gif"></a></td> '; } 
		echo'
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

		<td bgcolor="'.$bgc.'" nowrap width="100%">Sistemde kayýtlý takým bulunmamaktadýr.</td>

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