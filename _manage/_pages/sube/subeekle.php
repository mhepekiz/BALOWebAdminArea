

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

<legend>Þube Ekleme Formu</legend>

<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>

		<div class="paging">			

<form name="birseyekle" method="POST" enctype="multipart/form-data" action="/admin/_manage/sube/subeekle.php">

  <table border="0" cellpadding="2" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">

    <tr>

      <td align="left" valign="top">Þube</td>

      <td width="90%"><input type="text" name="sube" size="70"></td>

    </tr>

    <tr>

      <td valign="top">Yönetim Adresi</td>

      <td width="90%"><textarea rows="2" name="yonetimadresi" cols="42"></textarea></td>

    </tr>
    
    
    
    

    <tr>

      <td valign="top">Tesis Adresi</td>

      <td width="90%"><textarea rows="2" name="tesisadresi" cols="42"></textarea></td>

    </tr>
    
    
    
    

    <tr>

      <td valign="top">Spor Okulu</td>

      <td width="90%"><textarea rows="2" name="sporokulu" cols="42"></textarea></td>

    </tr>
    
    
    
    

    <tr>

      <td valign="top">Telefon</td>

      <td width="90%"><input type="text" name="telefon" size="70"></td>

    </tr>
    
    
    
    

    <tr>

      <td valign="top">Faks</td>

      <td width="90%"><input type="text" name="faks" size="70"></td>

    </tr>
    
    
    
    

    <tr>

      <td>&nbsp;</td>

      <td width="90%">&nbsp;</td>

    </tr>

    <tr>

      <td>&nbsp;</td>

      <td width="90%"><input type="submit" value="Þube Ekle" name="B1"></td>

    </tr>

  </table>

  <input type="hidden" name="ac_t" value="add">

</form></td></tr></table></fieldset>

<br>&nbsp;<fieldset>

<legend>Sistemdeki Þubeler</legend>

<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>


		<div class="paging">			

<table border="0" width="100%" id="table10" cellpadding="2" cellspacing="0">

	<tr>

		<td nowrap width="100%" bgcolor="#FF6600"><b>Þube</b></td>
		
		
		
		
		
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

$newsq = "order by sube";

}

$hs = 0;

$get_news = mysql_query("select id,sube,zaman,editor from klist_sube $newsq");

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
		
		
		
		<td bgcolor="'.$bgc.'" nowrap align="center"><a href="/admin/_manage/sube/subeekle.php?ac_t=del&remhid='.$hid.'"><img src="/admin/_media/delete.gif"></a></td> '; } 
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

		<td bgcolor="'.$bgc.'" nowrap width="100%">Sistemde kayýtlý data bulunmamaktadýr.</td>

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