 <script LANGUAGE=JAVASCRIPT>



  function bosvarmi(){

  if (birseyekle.baslik.value==""){ alert("\"Baþlýk\" Boþ Býrakýlamaz."); birseyekle.baslik.focus(); return (false); }
  if (birseyekle.spot.value==""){ alert("\"Spot\" Boþ Býrakýlamaz."); birseyekle.spot.focus(); return (false); }
  if (birseyekle.metin.value==""){ alert("\"Metin\" Boþ Býrakýlamaz."); birseyekle.metin.focus(); return (false); }
  if (birseyekle.baslik.value==""){ alert("\"Baþlýk\" Boþ Býrakýlamaz."); birseyekle.baslik.focus(); return (false); }
  
return (true); }



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

<legend>Soru Ekleme Formu</legend>

<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>

		<div class="paging">			

 <table border="0" cellpadding="2" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">

    <tr>

      <td align="left" valign="top">&nbsp;</td>

      <td width="48%">

				&nbsp;</td>

      <td width="35%" rowspan="3" valign="top">

				&nbsp;</td>

    </tr>

    <tr>

      <td align="left" valign="top" colspan="2">Lütfen doðru þýkký seçiniz.</td>

    </tr>
    
    <?
    
    

	echo'<tr><td align="left" valign="top" height="25" colspan="2"><a href="/admin/_manage/sorucevap/main.php?soruid='.$sorum.'&dogru=evet&sikx=dogrua">A) '.$sika.'</a></td></tr>';
	echo'<tr><td align="left" valign="top" height="25" colspan="2"><a href="/admin/_manage/sorucevap/main.php?soruid='.$sorum.'&dogru=evet&sikx=dogrub">B) '.$sikb.'</a></td></tr>'; 
	echo'<tr><td align="left" valign="top" height="25" colspan="2"><a href="/admin/_manage/sorucevap/main.php?soruid='.$sorum.'&dogru=evet&sikx=dogruc">C)'.$sikc.'</a></td></tr>'; 
	echo'<tr><td align="left" valign="top" height="25" colspan="2"><a href="/admin/_manage/sorucevap/main.php?soruid='.$sorum.'&dogru=evet&sikx=dogrud">D)'.$sikd.'</a></td></tr>'; 


 	


	
	?>

    </table>

  </td></tr></table></fieldset>

</td></tr></table>&nbsp;</td>

							</tr>

						</table>

						</td>

					</tr>

				</table>