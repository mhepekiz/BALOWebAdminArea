<?



	$ykuye = mysql_query("select id, baskan, adsoyad, gorev, ozgecmis, engorev, enozgecmis from yonetim where id='$remhid'");
	list($yid, $ybas, $yad, $ygorev, $yozgecmis, $ygoreven, $yozgecmisen) = mysql_fetch_row($ykuye);
	
	
	 $grv = mysql_query("select konum from yonetimpos where id='$ygorev'");
	  list($konn) = mysql_fetch_row($grv);
	  

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

<legend>Yönetim Kurulu Üyesi Ekleme Formu</legend>

<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>

		
<form name="birseyekle" method="POST" enctype="multipart/form-data" action="/admin/_manage/editor/yk_edit.php" >

  <table border="0" cellpadding="2" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
  
  <tr>

      <td align="left">Konum</td>

      <td width="100%">
       <select name="gorev" size="1">
      <option value="0">Se&#231;iniz</option>
    
    <?
   		 echo'<option selected value="'.$ygorev.'">'.$konn.'</option>';
		$get_pos = mysql_query("select id, konum from yonetimpos order by id");
		while(list($kon_id, $kon_um) = mysql_fetch_row($get_pos)){
			
			
			echo'<option value="'.$kon_id.'">'.$kon_um.'</option>';
			
			
		}
	
	
	?>  
      
      </select>
      </td>

    </tr> 
    
     <tr>

      <td valign="top" width="10%"><font face="Arial, Helvetica, sans-serif" style="font-size:12px">Foto&#287;raf</font></td>

      <td width="20%">
		<input type="file" name="filename" size="20" style="font-family: Arial, Helvetica, sans-serif; font-size: 12px"></td>

    </tr>
<tr>

      <td align="left">Ad Soyad</td>

      <td width="100%"><input type="text" name="adsoyad" size="70" value="<?=$yad?>"></td>

    </tr> 
    
  
       
    <tr valign="top">


      <td width="100%" colspan="2"><textarea cols="80" name="metin" rows="5"><?=$yozgecmis?></textarea>
</td>

   
 


</td></tr>




       
    <tr valign="top">


      <td width="100%" colspan="2"><textarea cols="80" name="metinen" rows="5"><?=$yozgecmisen?></textarea>
</td>

   
 


</td></tr>


<tr valign="top"><td width="100%" colspan="2" align="left"><table width="100%" border="0">
  <tr>
    <td width="130">&nbsp;</td>
    <td><input type="submit" value="Güncelle" name="B1"></td>
  </tr>
</table>
</td></tr>

 

  </table>
</td></tr>
  
  </table></td> 
  
  <input type="hidden" name="ac_t" value="add">
  <input type="hidden" name="remhid" value="<?=$yid?>">

</form>



</fieldset>

							</tr><tr><td>
                            
                            
                            
                            

&nbsp;<fieldset>

<legend>Sistemdeki Veriler</legend>

<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>

		<div class="paging">			

<table border="0" width="100%" id="table10" cellpadding="2" cellspacing="0">

	<tr>

		<td nowrap colspan="6">Mevcut veriler i&#231;inde filtreleme yapabilirsiniz...</td>

	</tr>



	<tr>



		<td nowrap width="1" bgcolor="#FF6C00" align="center"><b>D</b></td>

		

		<td nowrap width="100%" bgcolor="#FF6C00"><b>Ad Soyad</b></td>
		
		
	

		<td nowrap align="center" bgcolor="#FFBE32"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>Editor</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>

		<td nowrap align="center" bgcolor="#FFC446"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>Eklenme 
		Zaman&#305;</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>


<?
									
										echo'			

		<td nowrap align="center">

		<p align="center"><span lang="en">&nbsp;&nbsp;</span><b>Sil</b><span lang="en">&nbsp;&nbsp;</span></td>';  ?>

	</tr>

<?

if($q){

$newsq = "where baslik LIKE '%$q%' order by id desc";

} else {

$newsq = "order by id limit 25";

	
}

$hs = 0;

$get_news = mysql_query("select id,adsoyad,gorev,zaman,editor from yonetim $newsq");

while(list($yid,$yad,$ygorev,$heditor,$htarih)=mysql_fetch_row($get_news)){

$hbaslik = str_replace($q, "<font color='blue'>$q</font>", $hbaslik);

$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';

if($hkat=="4"){ $bgc="#e0e9ce"; }


		

echo'	<tr>

<td bgcolor="'.$bgc.'" nowrap align="center"><a href="/admin/_manage/editor/yk_edit.php?ac_t=update&remhid='.$yid.'"><img src="/admin/_media/edit.gif" border="0"></a></td>
	
		
		

		<td bgcolor="'.$bgc.'" nowrap width="100%">'.$yad.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">'.$heditor.'</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">'.$htarih.'</td>

				
		
		<td bgcolor="'.$bgc.'" nowrap align="center"><a href="/admin/_manage/editor/yk.php?ac_t=del&remhid='.$yid.'"><img src="/admin/_media/delete.gif" border="0"></a></td> 
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

		<td bgcolor="'.$bgc.'" nowrap width="100%">Sistemde kayyt bulunmamaktadyr.</td>

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