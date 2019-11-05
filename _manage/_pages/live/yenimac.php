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

<legend>Maç Ekleme Formu</legend>

<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>

		<div class="paging">			

<form name="birseyekle" method="POST" enctype="multipart/form-data" action="/admin/_manage/live/yenimac.php" onSubmit="return bosvarmi(this)">

  <table border="0" cellpadding="2" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">

    <tr>

      <td align="left" valign="top">&nbsp;</td>

      <td width="30%">&nbsp;</td>

      <td width="2%">&nbsp;</td>

      <td width="13%">&nbsp;</td>

      <td width="43%">&nbsp;</td>

    </tr>

    <tr>

      <td align="left" valign="top">Stadyum/Salon</td>

      <td width="30%">
		<input type="text" name="stadyum" size="50" style="font-family: Tahoma; font-size: 11px"></td>

      <td width="2%">&nbsp;</td>

      <td width="13%">&nbsp;</td>

      <td width="43%">&nbsp;</td>

    </tr>

    <tr>

      <td align="left" valign="top">Maç Tipi</td>

      <td width="30%">
      
      
      <select size="1" name="mactipi" style="font-family: Tahoma; font-size: 11px">
			<option value="1000">Futbol</option>
			<option value="2000">Basketbol</option>
			<option value="3000">Voleybol</option>
			</select></td>

      <td width="2%">&nbsp;</td>

      <td width="13%">&nbsp;</td>

      <td width="43%">&nbsp;</td>

    </tr>

    <tr>

      <td align="left" valign="top">Tarih</td>

      <td width="30%">
      
      
      <select size="1" name="gun" style="font-family: Tahoma; font-size: 11px">

			<option value="00" selected>Gün</option>
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
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>

			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>

			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>

			<option value="30">30</option>
			<option value="31">31</option>
			</select><select size="1" name="ay" style="font-family: Tahoma; font-size: 11px">
			<option value="00" selected>Ay</option>
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
			</select><select size="1" name="yil" style="font-family: Tahoma; font-size: 11px">
			<option value="Yýl">Yýl</option>
			<option value="2005">2005</option>
			<option value="2006">2006</option>
			<option value="2007">2007</option>
			<option value="2008">2008</option>
			<option value="2009">2009</option>
			<option value="2010">2010</option></select>







      
      
      
      
      
      
      </td>

      <td width="2%">&nbsp;</td>

      <td width="13%">&nbsp;</td>

      <td width="43%">&nbsp;</td>

    </tr>

    <tr>

      <td align="left" valign="top">Saat</td>

      <td width="30%">
		<!--webbot bot="Validation" b-value-required="TRUE" i-maximum-length="2" --><input type="text" name="saat"  style="font-family: Tahoma; font-size: 11px" size="2" maxlength="2">:<!--webbot bot="Validation" b-value-required="TRUE" i-maximum-length="2" --><input type="text" name="dakika"  style="font-family: Tahoma; font-size: 11px" size="2" maxlength="2"></td>

      <td width="2%">&nbsp;</td>

      <td width="13%">&nbsp;</td>

      <td width="43%">&nbsp;</td>

    </tr>

    <tr>

      <td align="left" valign="top">Hakemler</td>

      <td width="30%"><input type="text" name="hakemler" size="60" style="font-family: Tahoma; font-size: 11px"></td>

      <td width="2%">&nbsp;</td>

      <td width="13%">&nbsp;</td>

      <td width="43%">&nbsp;</td>

    </tr>

    <tr>

      <td align="left" valign="top">Takým A</td>

      <td width="30%">

				<font face="Verdana" size="1">
						<select size="1" name="takima"  style="font-family: Tahoma; font-size: 11px">
 
          <?

			$listy = mysql_query("select id,takim from liveteam order by takim");
			while(list($idy,$caty)=mysql_fetch_row($listy)){
			
		
			
		     echo '<option value="'.$idy.'">'.$caty.'</option>';
			}
			
?>
                        </select></font></td>

      <td width="2%">&nbsp;</td>

      <td width="13%">Takým B</td>

      <td width="43%">

				<font face="Verdana" size="1">
						<select size="1" name="takimb"  style="font-family: Tahoma; font-size: 11px">
 
          <?

			$listy = mysql_query("select id,takim from liveteam order by takim");
			while(list($idy,$caty)=mysql_fetch_row($listy)){
			
		
			
		     echo '<option value="'.$idy.'">'.$caty.'</option>';
			}
			
?>
                        </select></font></td>

    </tr>

    <tr>

      <td valign="top">Takým A Kadro</td>

      <td width="30%" valign="top">
		<textarea rows="5" name="takimakadro" cols="40"  style="font-family: Tahoma; font-size: 11px"></textarea></td>

      <td width="2%" valign="top">&nbsp;</td>

      <td width="13%" valign="top">Takým B Kadro</td>

      <td width="43%" valign="top">
		<textarea rows="5" name="takimbkadro" cols="40"  style="font-family: Tahoma; font-size: 11px"></textarea></td>

    </tr>

    
    
    <?
									

									if(($yet_tip=="151")||($yet_tip=="5")){
									
										echo'		
										
										
										

    <tr>

      <td>Haftanýn Maçý</td>

      <td width="19%"><input type="checkbox" name="manset" value="EVET"></td>

    </tr>

   '; } ;?>

    <tr>

      <td>&nbsp;</td>

      <td width="30%"><input type="submit" value="Maç Ekle" name="B1"  style="font-family: Tahoma; font-size: 11px"></td>

      <td width="2%">&nbsp;</td>

      <td width="13%">&nbsp;</td>

      <td width="43%">&nbsp;</td>

    </tr>

  </table>

  <input type="hidden" name="ac_t" value="add">

</form></td></tr></table></fieldset>

<br><br>

&nbsp;<fieldset>

<legend>Sistemdeki Maçlar</legend>

<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>


		<div class="paging">			

<table border="0" width="100%" id="table10" cellpadding="2" cellspacing="0">

	<tr>

		<td nowrap colspan="4">Mevcut maçlar içinde arama yapabilirsiniz...</td>

	</tr>

	<tr>

		<td nowrap colspan="4">

		<form method="POST" action="/admin/_manage/live/yenimac.php" name="haber_ara">

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

		<td nowrap width="100%" bgcolor="#FF3300"><b>Takýmlar</b></td>
		
		
		
		
		
		<td nowrap align="center" bgcolor="#FF6600"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>Eklenme 
		Zamaný</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>

		<td nowrap align="center" bgcolor="#FF9900"><span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;</span><b>Stad</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>

		<td nowrap align="center" bgcolor="#FFCC00"><span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;</span><b>Tarih 
		/ Saat</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>


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

$newsq = "order by id desc limit 25";

}

$hs = 0;

$get_news = mysql_query("select id,takim_a,takim_b,tarih,saat,stad,editor,zaman from macid $newsq");

while(list($mid,$mteama,$mteamb,$mtarih,$msaat,$mstad,$editor,$mtime)=mysql_fetch_row($get_news)){

		$teama = mysql_query("select takim from liveteam where id='$mteama'");
		list($mteama)=mysql_fetch_row($teama);
		
		$teamb = mysql_query("select takim from liveteam where id='$mteamb'");
		list($mteamb)=mysql_fetch_row($teamb);

		
		



$hbaslik = str_replace($q, "<font color='blue'>$q</font>", $hbaslik);

$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';

		if($hdurum=="200"){ $statimage = "/admin/_media/enable.gif"; $newdurum="100"; } else { $statimage = "/admin/_media/disable.gif"; $newdurum="200";}
		
		if($hmanset=="EVET"){ $mansetimage = "/admin/_media/manset.gif"; } else { $mansetimage = "/admin/_media/manset_off.gif"; $mandurum="EVET"; }		
		

echo'	<tr>


		<td bgcolor="'.$bgc.'" nowrap width="100%">'.$mteama.' - '.$mteamb.'</td>
				
		

		<td bgcolor="'.$bgc.'" nowrap align="center">'.$mtime.'</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">'.$mstad.'</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">'.$mtarih.'/'.$msaat.'</td>';
				
									if(($yet_tip=="151")||($yet_tip=="5")){
									
										echo'		
		
		
		
		<td bgcolor="'.$bgc.'" nowrap align="center"><a href="/admin/_manage/live/yenimac.php?ac_t=del&remhid='.$mid.'"><img src="/admin/_media/delete.gif"></a></td> '; } 
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

		<td bgcolor="'.$bgc.'" nowrap width="100%">Sistemde kayýtlý maç bulunmamaktadýr.</td>

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