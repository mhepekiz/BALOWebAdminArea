
<script LANGUAGE=JAVASCRIPT>
function checkfields(){

  
  
	
      if (birseyekle.spot.value=="")
  {
    alert("Spot girmeniz gerekmektedir.");
    birseyekle.spot.focus();
    return (false);
  }
  
  



    return (true);
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

<legend>Haber Ekleme Formu</legend>

<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>

		<div class="paging">			

<form name="birseyekle" method="POST" enctype="multipart/form-data" action="/admin/_manage/haber/haberekle.php" onSubmit="return checkfields(this)">

  <table border="0" cellpadding="2" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">

    <tr>

      <td width="8%" align="left" valign="top">Kategori</td>

      <td>

				<font face="Verdana" size="1">
						<select size="1" name="kategori" style="font-family: Arial; font-size: 10px; border-style: solid; border-width: 1; padding-left: 1; padding-right: 1; padding-top: 1; padding-bottom: 1">
 
          <?

			$listy = mysql_query("select id,kategori from klist_kategoriler order by id");
			while(list($idy,$caty)=mysql_fetch_row($listy)){
			
		
			
		     echo '<option value="'.$idy.'">'.$caty.'</option>';
			}
			
?>
                        </select></font></td>

    </tr>

    <tr>

      <td align="left" valign="top">Konum</td>

      <td>

				<font face="Verdana" size="1">
						<select size="1" name="konum" style="font-family: Arial; font-size: 10px; border-style: solid; border-width: 1; padding-left: 1; padding-right: 1; padding-top: 1; padding-bottom: 1">
 
                               <option value="100">STANDART</option>
								<option value="200">MANSET</option>
                                <option value="300">ÜST 5'LI</option>
                                <option value="400">SÜRMANSET</option>
                                <option value="500">RAMAZAN</option>
 
                               </select></font></td>

    </tr>

    <tr>

      <td align="left" valign="top">Özel Haber</td>

      <td>

				<font face="Verdana" size="1">
						<select size="1" name="ozel" style="font-family: Arial; font-size: 10px; border-style: solid; border-width: 1; padding-left: 1; padding-right: 1; padding-top: 1; padding-bottom: 1">
 
                               <option value="hayir">HAYIR</option>
								<option value="evet">EVET</option>
 
                               </select></font></td>

    </tr>

    <tr>
      <td align="left" valign="top">Son Dakika</td>
      <td><input type="checkbox" name="sondk" value="yes" /></td>
    </tr>
    <tr>

      <td align="left" valign="top">Röportaj</td>

      <td>

				<input type="checkbox" name="rop" value="yes"></td>

    </tr>

    <tr>
      
      <td align="left" valign="top">Ba&#351;l&#305;k</td>
      
      <td>
        <input type="text" name="baslik_a" size="70"></td>
      
    </tr>

    <tr>
      
      <td align="left" valign="top">Spot</td>
      
      <td><input type="text" name="spot" size="70"></td>
      
    </tr>

    <tr>

      <td align="left" valign="top">Metin</td>

      <td>
      
      

<textarea class="ckeditor" cols="80" id="editor1" name="metin" rows="10"></textarea>



</td>

    </tr>

    <tr>
      <td valign="top">Etiketler</td>
      <td><input type="text" name="etiketler" size="70" /></td>
    </tr>
    <tr>

      <td valign="top">Fotoðraf</td>

      <td>
		<input type="file" name="filename" size="20" style="font-family: Tahoma; font-size: 11px"></td>

    </tr>
    
    
    
    <?
									

									if(($yet_tip=="151")||($yet_tip=="5")){
									
										echo'		
										
										
										

    <tr>

      <td>Manþet</td>

      <td width="19%"><input type="checkbox" name="manset" value="EVET"></td>

    </tr>

    <tr>

      <td>Durum</td>

      <td width="19%"><select size="1" name="haberdurum">
		<option value="000">Lütfen durum seçiniz</option>
		<option value="100">Aktif</option>
		<option value="200">Pasif</option>
		</select></td>

    </tr>'; } ;?>

    <tr>
      <td>Man&#351;et Foto</td>
      <td><input type="file" name="filename2" size="20" style="font-family: Tahoma; font-size: 11px" /></td>
    </tr>
    <tr>

      <td>Video</td>

      <td><input type="text" name="video" size="70"></td>

    </tr>

    <tr>

      <td>Ýlgili Haber 1</td>

      <td>

				<font face="Verdana" size="1">
						<select size="1" name="ihaber1" style="font-family: Arial; font-size: 10px; border-style: solid; border-width: 1; padding-left: 1; padding-right: 1; padding-top: 1; padding-bottom: 1">
 						<option value=""></option>
          <?

			$listy = mysql_query("select id,baslik from klist_haberler order by id DESC limit 50");
			while(list($idy,$habbas)=mysql_fetch_row($listy)){
			
		
			
		     echo '<option value="'.$idy.'">'.$habbas.'</option>';
			}
			
?>
                        </select></font></td>

    </tr>

    <tr>

      <td>Ýlgili Haber 2</td>

      <td>

				<font face="Verdana" size="1">
						<select size="1" name="ihaber2" style="font-family: Arial; font-size: 10px; border-style: solid; border-width: 1; padding-left: 1; padding-right: 1; padding-top: 1; padding-bottom: 1">
 						<option value=""></option>

          <?

			$listy = mysql_query("select id,baslik from klist_haberler order by id DESC limit 50");
			while(list($idy,$habbas)=mysql_fetch_row($listy)){
			
		
			
		     echo '<option value="'.$idy.'">'.$habbas.'</option>';
			}
			
			
?>
                        </select></font></td>

    </tr>

    <tr>

      <td>Ýlgili Haber 3</td>

      <td>

				<font face="Verdana" size="1">
						<select size="1" name="ihaber3" style="font-family: Arial; font-size: 10px; border-style: solid; border-width: 1; padding-left: 1; padding-right: 1; padding-top: 1; padding-bottom: 1">
 						<option value=""></option>

          <?

			$listy = mysql_query("select id,baslik from klist_haberler order by id DESC limit 50");
			while(list($idy,$habbas)=mysql_fetch_row($listy)){
			
		
			
		     echo '<option value="'.$idy.'">'.$habbas.'</option>';
			}
			
			
?>
                        </select></font></td>

    </tr>

    <tr>

      <td>&nbsp;</td>

      <td>&nbsp;</td>

    </tr>

    <tr>

      <td>&nbsp;</td>

      <td>
		<input type="submit" value="Haber Ekle" name="B1" style="font-family: Tahoma; font-size: 11px"></td>

    </tr>

  </table>

  <input type="hidden" name="ac_t" value="add">

</form></td></tr></table></fieldset>

<?


$listfile=$docroot."/admin/_manage/_pages/haber/listele.mod.php";
include($listfile);

?>

</td></tr></table>
