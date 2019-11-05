<table border="0" width="100%" id="table7" cellspacing="0" cellpadding="0" height="100%">
					<tr>
						<td valign="top" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px"><!--Start Contents-->
						
												<table border="0" width="100%" id="table8" cellspacing="0" cellpadding="0">
							<tr>
								<td style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
								<img border="0" src="/admin/_media/title_spacer.gif" width="15" height="56" style="border: medium none"></td>
								<td width="100%" bgcolor="#FFFFFF" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
								<font face="Arial" size="4">Haberler</font></td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td valign="top" bgcolor="#CCCCCC" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
						<img border="0" src="/admin/_media/_blank.gif" width="1" height="1" style="border: medium none"></td>
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


<form method="GET" action="/admin/_manage/metin/haberlerx.php">
  <table border="0" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="450" id="AutoNumber1">
    <tr>
      <td align="left"><font face="Arial" size="2">Baþlýk</font></td>
      <td width="80%"><input type="text" name="baslik" size="39"></td>
    </tr>
    <tr>
      <td align="left"><font face="Arial" size="2">Metin</font></td>
      <td width="80%"><textarea rows="6" name="metin" cols="37"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="80%"><input type="submit" value="Haber/Duyuru Ekle" name="B1"></td>
    </tr>
  </table>
  <input type="hidden" name="ac_t" value="add">
</form></td></tr></table></fieldset>
<br><br>
&nbsp;<fieldset>

<legend>Son 25 Haber/ Duyuru</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
		<div class="paging">			


<table border="0" width="100%" id="table10" cellpadding="2" cellspacing="0">
	<tr>
		<td nowrap colspan="4">Mevcut haberler içinde arama yapabilirsiniz...</td>
	</tr>
	<tr>
		<td nowrap colspan="4">
		<form method="POST" action="/admin/_manage/metin/haberler.php" name="haber_ara">
			<table border="0" width="100%" id="table11" cellspacing="0" cellpadding="0">
				<tr>
					<td><input type="text" name="T1" size="20"></td>
					<td nowrap><a href="javascript:haber_ara.submit();">
					<img border="0" src="/admin/_media/search.gif" width="16" height="16"> 
					Ara</a></td>
					<td width="100%">&nbsp;<a href="/admin/_manage/metin/haberler.php"><img border="0" src="/admin/_media/showall.gif" width="16" height="16"> 
					Hepsini Göster</a></td>
				</tr>
			</table>
			<input type="hidden" name="ac_t" value="search">
		</td></form>
	</tr>
	<tr>
		<td nowrap width="100%">Baþlýk</td>
		<td nowrap align="center"><span lang="en">&nbsp;&nbsp;&nbsp;</span>Tarih<span lang="en">&nbsp;&nbsp;&nbsp;</span></td>
		<td nowrap align="center"><span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;</span>Editör<span lang="en">&nbsp;&nbsp;&nbsp;</span></td>
		<td nowrap align="center">
		<p align="center"><span lang="en">&nbsp;&nbsp;</span>Sil<span lang="en">&nbsp;&nbsp;</span></td>
	</tr>
	<tr>
		<td nowrap width="100%">&nbsp;</td>
		<td nowrap align="center">&nbsp;</td>
		<td nowrap align="center">&nbsp;</td>
		<td nowrap align="center">&nbsp;</td>
	</tr>
</table>


</td></tr></table></fieldset>
</td></tr></table>&nbsp;</td>
							</tr>
						</table>
						</td>
					</tr>
				</table>