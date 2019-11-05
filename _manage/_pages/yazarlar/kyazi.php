




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

<legend>Köþe Yazýsý Ekleme Formu</legend>

<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>

		<div class="paging">			

<form name="birseyekle" method="POST" enctype="multipart/form-data" action="/admin/_manage/yazarlar/kyazi.php" onSubmit="return bosvarmi(this)">

  <table border="0" cellpadding="2" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">

    <tr>

      <td align="left" valign="top">Yazar</td>

		<? $kimm = mysql_query("select id, adsoyad from klist_yazarlar where id='$yazid'");
		   list($yid, $yad) = mysql_fetch_row($kimm);
		   ?>
	

      <td width="93%"><input type="text" name="yazar" disabled size="70" value="<?=$yad?>"></td>

    </tr>

    <tr>

      <td align="left" valign="top">Baþlýk</td>

      <td width="93%"><input type="text" name="baslik" size="70"></td>

    </tr>

    <tr>

      <td align="left" valign="top">Spot</td>

      <td width="93%"><textarea rows="2" name="spot" cols="60"></textarea></td>

    </tr>

    <tr>

      <td align="left" valign="top">Metin</td>

      <td width="93%"><textarea class="ckeditor" cols="80" id="editor1" name="metin" rows="10"></textarea></td>

    </tr>

    
    
    <?
									

									if(($yet_tip=="151")||($yet_tip=="5")){
									
										echo'		
										
										
										

   

    <tr>

      <td>Durum</td>

      <td width="19%"><select size="1" name="haberdurum">
		<option value="000">Lütfen durum seçiniz</option>
		<option value="100">Aktif</option>
		<option value="200">Pasif</option>
		</select></td>

    </tr>'; } ;?>

    <tr>

      <td>&nbsp;</td>

      <td width="93%">&nbsp;</td>

    </tr>

    <tr>

      <td>&nbsp;</td>

      <td width="93%"><input type="submit" value="Yazý Ekle" name="B1"></td>

    </tr>

  </table>

  <input type="hidden" name="ac_t" value="add">
  <input type="hidden" name="yazarid" value="<?=$yid?>">

</form></td></tr></table></fieldset>

<br><br>

&nbsp;<fieldset>

<legend>Sistemdeki Köþe Yazýlarý</legend>

<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>


		<div class="paging">			

<table border="0" width="100%" id="table10" cellpadding="2" cellspacing="0">

	<tr>

		<td nowrap colspan="4">Mevcut yazýlar içinde arama yapabilirsiniz...</td>

	</tr>

	<tr>

		<td nowrap colspan="4">

		<form method="POST" action="/admin/_manage/metin/kyazi.php" name="haber_ara">

			<table border="0" width="100%" id="table11" cellspacing="0" cellpadding="0">

				<tr>

					<td><input type="text" name="q" size="20" value="<?=$q?>"></td>

					<td nowrap><span lang="en">&nbsp;</span><a href="javascript:haber_a();"><img border="0" src="/admin/_media/search.gif" width="16" height="16"> 

					Ara</a></td>

					<td width="100%">&nbsp;<span lang="en">&nbsp;&nbsp;&nbsp;</span><a href="/admin/_manage/yazarlar/kyazi.php"><img border="0" src="/admin/_media/showall.gif" width="16" height="16"> 

					Hepsini Göster</a></td>

				</tr>

			</table>

			<input type="hidden" name="ac_t" value="search">

		</td></form>

	</tr>

	<tr>

		<td nowrap width="100%" bgcolor="#417CE0"><b>Baþlýk</b></td>
		
		
		
		
		
		<td nowrap align="center" bgcolor="#A2BFF0"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>St</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>

		<td nowrap align="center" bgcolor="#92B4ED"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>Editor</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>

		<td nowrap align="center" bgcolor="#A2BFF0"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>Eklenme 
		Zamaný</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>


<?
if(($yet_tip=="151")||($yet_tip=="5")){
									
										echo'			

		<td nowrap align="center">

		<p align="center"><span lang="en">&nbsp;&nbsp;</span><b>Sil</b><span lang="en">&nbsp;&nbsp;</span></td>'; } ?>

	</tr>

<?

if($q){

$newsq = "where yazid='$yazid' and baslik LIKE '%$q%' order by id desc";

} else {

$newsq = "where yazid='$yazid' order by id desc limit 25";

}

$hs = 0;


$get_news = mysql_query("select id,yazid,baslik,editor,zaman,durum from klist_koseyazilari $newsq");

while(list($hid,$yazid,$hbaslik,$heditor,$htarih,$hdurum)=mysql_fetch_row($get_news)){

$hbaslik = str_replace($q, "<font color='blue'>$q</font>", $hbaslik);

$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';

		if($hdurum=="off"){ $statimage = "/admin/_media/enable.gif"; $newdurum="100"; } else { $statimage = "/admin/_media/disable.gif"; $newdurum="off";}
		
			
		

echo'	<tr>


		<td bgcolor="'.$bgc.'" nowrap width="100%"><a href="/admin/_manage/yazarlar/edit.php?&artid='.$hid.'">'.$hbaslik.'</td>';

            
									
						
										echo'			
		<td bgcolor="'.$bgc.'" nowrap align="center">'; if(($yet_tip=="151")||($yet_tip=="5")){ echo'<a href="/admin/_manage/yazarlar/kyazi.php?haberdurum='.$newdurum.'&artid='.$hid.'&ac_t=changestat">'; } echo'<img src="'.$statimage.'"></a></td>'; 
		echo'


		<td bgcolor="'.$bgc.'" nowrap align="center">'.$heditor.'</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">'.$htarih.'</td>

		'; 
		
		
									if(($yet_tip=="151")||($yet_tip=="5")){
									
										echo'		
		
		
		
		<td bgcolor="'.$bgc.'" nowrap align="center"><a href="/admin/_manage/yazarlar/kyazi.php?ac_t=del&remhid='.$hid.'"><img src="/admin/_media/delete.gif"></a></td> '; } 
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