<?



	$haber_detay = mysql_query("select id, lang, tarih, yayin, baslik, spot, metin from haberler where id='$remhid'");
	list($h_id, $h_lang, $h_tar, $h_yayin, $h_baslik, $h_spot, $h_metin) = mysql_fetch_row($haber_detay);


		$katt = mysql_query("select kategori from kategori where id='$h_cat'");
		list($kategorim) = mysql_fetch_row($katt);
		
		$medyy = mysql_query("select id, medya from medyalogo where id='$h_yayin'");
		list($med_id, $med_ad) = mysql_fetch_row($medyy);
		
		
			$trh = explode("-", $h_tar);
		
$trhay = aylarrev($trh[1]);



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

								<td>
<?


$welcomefile=$docroot."/admin/_manage/editor/metin_main.src.php";
include($welcomefile);




	$icerik = mysql_query("select metin from girismetin where lang='$lang'");
	list($metinx) = mysql_fetch_row($icerik);



?></td>

							</tr>

							<tr>

								<td><table width="100%" cellspacing="0" cellpadding="0" border="0"><tr><td>

<fieldset>

<legend>Haber Giris Formu</legend>

<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>

		
<form name="birseyekle" method="POST" enctype="multipart/form-data" action="/admin/_manage/editor/medya_edit.php" >

  <table border="0" cellpadding="2" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
  
 
    
     <tr>

      <td valign="top" width="10%"><font face="Arial, Helvetica, sans-serif" style="font-size:12px">Foto&#287;raf</font></td>

      <td width="20%">
		<input type="file" name="filename" size="20" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px"></td>

    </tr>
    
      <tr>

      <td align="left">Tarih</td>

      <td width="100%">
        
        <script type="text/javascript" src="/admin/js/calendarDateInput.js">

</script>
<script>DateInput('orderdate', true, 'DD-MON-YYYY','<?=$trh[2]?>-<?=$trhay?>-<?=$trh[0]?>')</script>
</td>

    </tr>
    
  <tr>

      <td align="left">Medya</td>

      <td width="100%">
       <select name="medyam" size="1">
      <option selected value="<?=$med_id?>"><?=$med_ad?></option>
      
      <?
      
	  $medyalar = mysql_query("select id, medya from medyalogo");
	  while(list($m_id, $m_med) = mysql_fetch_row($medyalar)){
		  
		  echo'<option value="'.$m_id.'">'.$m_med.'</option>';
		  
	  }
	  
	  
	  ?>
      
      
      </select>
      </td>

    </tr> 
<tr>

      <td align="left">Ba&#351;l&#305;k</td>

      <td width="100%"><input type="text" name="baslik" size="70" value="<?=$h_baslik?>"></td>

    </tr> 
    
      <tr>

      <td align="left">Dil</td>

      <td width="100%"><select name="dil" size="1">
        <?
	
	
	
	if($h_lang=="tr"){	  
	  echo'<option selected value="tr">TR</option>';
      echo'<option value="en">EN</option>'; } elseif($h_lang=="en"){	  
	  echo'<option selected value="en">EN</option>';
      echo'<option value="tr">TR</option>'; }
	  
	  
	  ?></select></td>

    </tr> 
    
    
   

        <tr>

      <td align="left">Spot</td>

      <td width="100%"><input type="text" name="spot" size="70" maxlength="255"  value="<?=$h_spot?>"></td>

    </tr> 

    <tr valign="top">


      <td width="100%" colspan="2"><textarea class="ckeditor" cols="80" id="editor1" name="metin" rows="10"><?=$h_metin?></textarea>
</td>
</td></tr>


    
    
<tr valign="top">  <td width="100%" colspan="2"><table width="100%" border="0" cellpadding="3">
 <tr>
    <td width="1">&nbsp;</td>
    <td width="7%">&nbsp;</td>
    <td width="1">&nbsp;</td>
    <td width="7%">&nbsp;</td>
    <td width="84%" align="right"><input type="submit" value="Guncelle" name="B1"></td>
  </tr>
  </table> </tr>

 

  </table>
</td></tr>
  
  </table></td> 
  
  <input type="hidden" name="ac_t" value="upd">
  <input type="hidden" name="remhid" value="<?=$h_id?>">

</form>

<iframe border="0" src="/admin/_manage/editor/haber_foto.php" width="100%" height="60" style="border:none" scrolling="no"></iframe>


</fieldset>

							</tr><tr><td>
                            
                            
                            
                            

&nbsp;<fieldset>

<legend>Sistemdeki Medya Yayinlari</legend>

<table width="100%" cellspacing="0" cellpadding="2" border="0">
	<tr>



		<td nowrap width="1" bgcolor="#FF6C00" align="center"><b>D</b></td>

		<td nowrap width="1" bgcolor="#FF6C00" align="center"><b>O</b></td>
    

		<td nowrap width="50%" bgcolor="#FF6C00"><b>Ba&#351;l&#305;k</b></td>
		<td nowrap width="50%" bgcolor="#FF6C00"><b>Yay&#305;n</b></td>
		
	

		<td nowrap align="center" bgcolor="#FFBE32"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>Editor</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>

		<td nowrap align="center" bgcolor="#FFC446"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>Eklenme 
		Zaman&#305;</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>


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

$newsq = "where kategori='2' order by id desc";

	
}

$hs = 0;

$get_news = mysql_query("select id,yayin,baslik,editor,zaman from haberler $newsq");

while(list($hid,$hyay,$hbaslik,$heditor,$htarih)=mysql_fetch_row($get_news)){

$hbaslik = str_replace($q, "<font color='blue'>$q</font>", $hbaslik);

$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';

if($hkat=="4"){ $bgc="#e0e9ce"; }


	$yayin_bak = mysql_query("select medya from medyalogo where id='$hyay'");
	list($yayinim) = mysql_fetch_row($yayin_bak);

echo'	<tr>

<td bgcolor="'.$bgc.'" nowrap align="center"><a href="/admin/_manage/editor/medya_edit.php?ac_t=update&remhid='.$hid.'&mansetst='.$hmanset.'"><img src="/admin/_media/edit.gif" border="0"></a></td>
	<td bgcolor="'.$bgc.'" nowrap align="center"><a href="/admin/_manage/editor/medya_order.php"><img src="/admin/_media/online.gif" border="0"></a></td>
	
		

		<td bgcolor="'.$bgc.'" nowrap width="50%">'.$hbaslik.'</td>
		<td bgcolor="'.$bgc.'" nowrap width="50%">'.$yayinim.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">'.$heditor.'</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">'.$htarih.'</td>

				
		
		<td bgcolor="'.$bgc.'" nowrap align="center"><a href="/admin/_manage/editor/medya_main.php?ac_t=del&remhid='.$hid.'"><img src="/admin/_media/delete.gif" border="0"></a></td> 
	</tr>'; 



$hs = $hs+1;




}
if(($hs=="0") && ($q)){

echo '<tr>

		<td bgcolor="'.$bgc.'" nowrap width="100%">Aramanyz sonucunda kayyt bulunamamy?tyr.</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>

	</tr>';

} else if(($hs=="0") && ($q=="")){

echo '<tr>

		<td bgcolor="'.$bgc.'" nowrap width="100%">Sistemde kayytly haber bulunmamaktadyr.</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>

	</tr>';

}

?>

</table>

</td></tr><tr><td>


</td></tr></table></fieldset>




<br>&nbsp;</td></tr></table></td>
							</tr>
						</table>
						</td>
					</tr>
				</table>
                
                
                



</td></tr>

						</table>

						</td>

					</tr>

				</table>