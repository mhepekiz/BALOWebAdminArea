





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

<legend>Ortak Ekleme Formu</legend>

<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>

		<div class="paging">			

<form name="birseyekle" method="POST" enctype="multipart/form-data" action="/admin/_manage/editor/ortaklar.php" >

  <table border="0" cellpadding="2" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">

    <tr>

      <td align="left" valign="top" colspan="3">&nbsp;</td>

				</td>

    </tr>
    
        

    <tr>

      <td align="left" width="10%">Ortak</td>

      <td width="1%"><input type="text" name="ortak" size="70"></td>

    </tr>
    <tr>

      <td align="left" width="10%">Web</td>

      <td width="1%"><input type="text" name="wwww" size="70"></td>

    </tr>
      <tr>

      <td align="left" width="10%">Ortak EN</td>

      <td width="1%"><input type="text" name="ortaken" size="70"></td>

    </tr>
    <tr>

      <td align="left" width="10%">Web EN</td>

      <td width="1%"><input type="text" name="wwwwen" size="70"></td>

    </tr>
     <tr>

      <td align="left" width="10%">&nbsp;</td>

    <td width="90%"><input type="submit" value="Ekle" name="B1"></td>

    </tr>

 

  </table>

  <input type="hidden" name="ac_t" value="add">

</form></td></tr></table></fieldset>

<fieldset>

<legend>Sistemdeki Ortaklar</legend>

<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>


		<div class="paging">			

<table border="0" width="100%" id="table10" cellpadding="2" cellspacing="0">

	<tr>

		<td nowrap colspan="3">Mevcut veriler i&#231;inde arama yapabilirsiniz...</td>

	</tr>

	<tr>

		<td nowrap colspan="3">

		<form method="POST" action="/admin/_manage/editor/ortaklar.php" name="haber_ara">

			<table border="0" width="100%" id="table11" cellspacing="0" cellpadding="2">

				<tr>

					<td><input type="text" name="q" size="20" value="<?=$q?>"></td>

					<td nowrap><span lang="en">&nbsp;</span><a href="javascript:haber_a();"><img border="0" src="/admin/_media/search.gif" width="16" height="16"> 

					Ara</a></td>

					<td width="100%">&nbsp;<span lang="en">&nbsp;&nbsp;&nbsp;</span><a href="/admin/_manage/editor/ortaklar.php"><img border="0" src="/admin/_media/showall.gif" width="16" height="16"> 

					Hepsini G&#246;ster</a></td>

				</tr>

			</table>

			<input type="hidden" name="ac_t" value="search">

		</td></form>

	</tr>

	<tr>

		<td nowrap width="83%" bgcolor="#FF6C00"><b>Ortak</b></td>
        <td nowrap width="83%" bgcolor="#FF6C00"><b>Web</b></td>
		<td nowrap align="center" bgcolor="#FFBE32" width="13%"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>Eklenme Zaman&#305;</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>
        <td nowrap width="83%" bgcolor="#FF6C00"><b>Editor</b></td>
     	<td nowrap align="center" bgcolor="#FFBE32" width="2%"><b>&nbsp;Sil</b><span lang="en">&nbsp;</span></td>


	</tr>

<?

if($q){

$newsq = "where ortak LIKE '%$q%' order by ortak desc";

} else {

$newsq = "order by ortak desc limit 25";

}

$hs = 0;

$get_cat = mysql_query("select id,ortak,site,zaman,editor from ortaklar $newsq");

while(list($oid,$ort,$orww,$ozaman,$oedi)=mysql_fetch_row($get_cat)){

$hbaslik = str_replace($q, "<font color='blue'>$q</font>", $hbaslik);

$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';





echo'	<tr>
		<td bgcolor="'.$bgc.'" nowrap width="100%">'.$ort.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">'.$orww.'</td>				
		<td bgcolor="'.$bgc.'" nowrap align="center">'.$ozaman.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">'.$oedi.'</td>			
		<td bgcolor="'.$bgc.'" nowrap align="center"><a href="/admin/_manage/editor/ortaklar.php?ac_t=del&remhid='.$kid.'"><img src="/admin/_media/delete.gif" border="0"></a></td>

	';
	
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