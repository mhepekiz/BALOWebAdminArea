
<script LANGUAGE=JAVASCRIPT>
function checkfields(){
  if (birseyekle.baslik.value=="")
  {
    alert("Baþlýk boþ býrakýlamaz.");
    birseyekle.baslik.focus();
    return (false);
  }
  
  
  
	
      if (birseyekle.spot.value=="")
  {
    alert("Spot girmeniz gerekmektedir.");
    birseyekle.spot.focus();
    return (false);
  }
  
  

  
 var minlength=28
if (birseyekle.baslik.value.length<minlength){
alert("Baþlýk en az 28 karakterden oluþmalý!")
return false
}

 

    return (true);
}

</script>
<table border="0" width="100%" id="table7" cellspacing="0" cellpadding="0" height="80%">

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

<legend>Haber Ekleme Formu</legend>

<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>

		<div class="paging">			

<form name="birseyekle" method="POST" enctype="multipart/form-data" action="/admin/_manage/haber/edit.php" onSubmit="return checkfields(this)">

  <table border="0" cellpadding="2" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
  
  <?
  
  			$get_haber = mysql_query("select id, kategori, baslik, spot, metin, manset, resim_1, resim_2, resim_3, video, zaman, editor, okunmasayisi, ekhaber1, ekhaber2, ekhaber3, ozel from klist_haberler where id='$remhid'");
  			list($ed_id, $ed_kat, $ed_bas, $ed_spot, $ed_met, $ed_man, $ed_res1, $ed_res2, $ed_res3, $ed_video, $ed_zaman, $ed_editor, $ed_os, $ed_eh1, $ed_eh2, $ed_eh3, $ozel)=mysql_fetch_row($get_haber);
  			
  			$baslik  = "$ed_bas";
			$pieces = explode("<br>", $baslik);
	

  			
  	
  
  ?>

    <tr>

      <td align="left" valign="top">Kategori</td>

      <td width="91%" colspan="2">

				<font face="Verdana" size="1">
						<select size="1" name="kategori" style="font-family: Arial; font-size: 10px; border-style: solid; border-width: 1; padding-left: 1; padding-right: 1; padding-top: 1; padding-bottom: 1">
 						
 						<? $kati = mysql_query("select id,kategori from klist_kategoriler where id='$ed_kat'");
 						list($kid, $kkat) = mysql_fetch_row($kati);
 						?>
 						<option selected value="<?=$kid?>"><?=$kkat?></option>
          <?

			$listy = mysql_query("select id,kategori from klist_kategoriler order by id");
			while(list($idy,$caty)=mysql_fetch_row($listy)){
			
		
			
		     echo '<option value="'.$idy.'">'.$caty.'</option>';
			}
			
?>
                        </select></font></td>

    </tr>

    <tr>

      <td align="left" valign="top">Özel Haber</td>

      <td width="91%" colspan="2">

				<font face="Verdana" size="1">
						<select size="1" name="ozel" style="font-family: Arial; font-size: 10px; border-style: solid; border-width: 1; padding-left: 1; padding-right: 1; padding-top: 1; padding-bottom: 1">
 <option selected value="<?=$ozel?>"><?=$ozel?></option>

                               <option value="hayýr">HAYIR</option>
								<option value="evet">EVET</option>
 
                               </select></font></td>

    </tr>

    <tr>

      <td align="left" valign="top">Manþet</td>

      <td width="91%" colspan="2">

				<font face="Verdana" size="1">
						<select size="1" name="mansetx" style="font-family: Arial; font-size: 10px; border-style: solid; border-width: 1; padding-left: 1; padding-right: 1; padding-top: 1; padding-bottom: 1">
 								
 							   <option selected value="<?=$ed_man?>"><?=$ed_man?></option>	
                               <option value="HAYIR">HAYIR</option>
								<option value="EVET">EVET</option>
 
                               </select></font></td>

    </tr>

    <tr>

      <td align="left" valign="top" bordercolor="#FF0000" bgcolor="#FF0000">Baþlýk 
		A</td>

      <td width="91%" colspan="2" bordercolor="#FF0000" bgcolor="#FF0000">
		<input type="text" name="baslik_a" size="70" value="<?=$pieces[0]?>"></td>

    </tr>

    <tr>

      <td align="left" valign="top" bordercolor="#FF0000" bgcolor="#FF0000">
		Baþlýk B</td>

      <td width="91%" colspan="2" bordercolor="#FF0000" bgcolor="#FF0000">
		<input type="text" name="baslik_b" size="70" value="<?=$pieces[1]?>"></td>

    </tr>

    <tr>

      <td align="left" valign="top">Spot</td>

      <td width="91%" colspan="2"><input type="text" name="spot" size="70" value="<?=$ed_spot?>"></td>

    </tr>

    <tr>

      <td align="left" valign="top">Metin</td>

      <td width="28%">
      
      
      <script language="javascript" type="text/javascript" src="/jscripts/tiny_mce/tiny_mce.js"></script>
<script language="javascript" type="text/javascript">
tinyMCE.init({
	mode : "textareas",
	theme : "simple"
});

</script>
<textarea name="metin" cols="40" rows="8"><?=$ed_met?></textarea>



</td>

      <td width="62%">
      
      
      <img src="<?=$ed_res2?>" border="1"></td>

    </tr>

    <tr>

      <td valign="top">Fotoðraf</td>

      <td width="91%" colspan="2">
		<input type="file" name="filename" size="20" style="font-family: Tahoma; font-size: 11px"></td>

    </tr>
    
    
    
    
    <tr>

      <td>Video</td>

      <td width="91%" colspan="2"><input type="text" name="video" size="100" value="<?=$ed_video?>"></td>

    </tr>

    <tr>

      <td>Ýlgili Haber 1</td>

      <td width="91%" colspan="2">

				<font face="Verdana" size="1">
						<select size="1" name="ihaber1" style="font-family: Arial; font-size: 10px; border-style: solid; border-width: 1; padding-left: 1; padding-right: 1; padding-top: 1; padding-bottom: 1">
 						<? 
 						
 						$check_dh = mysql_query("select id, baslik from klist_haberler where id='$ed_eh1'");
 						list($dh_id, $dh_bas) = mysql_fetch_row($check_dh);
 				
						echo '<option selected value="'.$ed_eh1.'">'.$dh_bas.'</option>'; 					
 				
     		$listy = mysql_query("select id,baslik from klist_haberler order by id DESC limit 50");
			while(list($idy,$habbas)=mysql_fetch_row($listy)){
			
		
			
		     echo '<option value="'.$idy.'">'.$habbas.'</option>';
			}
			
?>
                        </select></font></td>

    </tr>

    <tr>

      <td>Ýlgili Haber 2</td>

      <td width="91%" colspan="2">

				<font face="Verdana" size="1">
						<select size="1" name="ihaber2" style="font-family: Arial; font-size: 10px; border-style: solid; border-width: 1; padding-left: 1; padding-right: 1; padding-top: 1; padding-bottom: 1">
 						<? 
 						
 						$check_dh = mysql_query("select id, baslik from klist_haberler where id='$ed_eh2'");
 						list($dh_id, $dh_bas) = mysql_fetch_row($check_dh);
 				
						echo '<option selected value="'.$ed_eh2.'">'.$dh_bas.'</option>'; 		
						
			$listy = mysql_query("select id,baslik from klist_haberler order by id DESC limit 50");
			while(list($idy,$habbas)=mysql_fetch_row($listy)){
			
		
			
		     echo '<option value="'.$idy.'">'.$habbas.'</option>';
			}
			
			
?>
                        </select></font></td>

    </tr>

    <tr>

      <td>Ýlgili Haber 3</td>

      <td width="91%" colspan="2">

				<font face="Verdana" size="1">
						<select size="1" name="ihaber3" style="font-family: Arial; font-size: 10px; border-style: solid; border-width: 1; padding-left: 1; padding-right: 1; padding-top: 1; padding-bottom: 1">
 						<? 
 						
 						$check_dh = mysql_query("select id, baslik from klist_haberler where id='$ed_eh3'");
 						list($dh_id, $dh_bas) = mysql_fetch_row($check_dh);
 				
						echo '<option selected value="'.$ed_eh3.'">'.$dh_bas.'</option>'; 		
			$listy = mysql_query("select id,baslik from klist_haberler order by id DESC limit 50");
			while(list($idy,$habbas)=mysql_fetch_row($listy)){
			
		
			
		     echo '<option value="'.$idy.'">'.$habbas.'</option>';
			}
			
			
?>
                        </select></font></td>

    </tr>

    <tr>

      <td>&nbsp;</td>

      <td width="91%" colspan="2">&nbsp;</td>

    </tr>

    <tr>

      <td>&nbsp;</td>

      <td width="91%" colspan="2">
		<input type="submit" value="Güncelle" name="B1" style="font-family: Tahoma; font-size: 11px"></td>

    </tr>

  </table>

  <input type="hidden" name="remhid" value="<?=$remhid?>">
  <input type="hidden" name="ac_t" value="update">

</form></td></tr></table></fieldset>&nbsp;

</td></tr></table>&nbsp;</td>

							</tr>

						</table>

						</td>

					</tr>

				</table>