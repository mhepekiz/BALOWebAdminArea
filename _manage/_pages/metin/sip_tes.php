<?
$gcp = mysql_query("select metin,image from siptes where id='1'");
list($metin,$image)=mysql_fetch_row($gcp);
?>
<table border="0" width="100%" id="table7" cellspacing="0" cellpadding="0" height="100%">
					<tr>
						<td valign="top" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px"><!--Start Contents-->
						
												<table border="0" width="100%" id="table8" cellspacing="0" cellpadding="0">
							<tr>
								<td style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
								<img border="0" src="/admin/_media/title_spacer.gif" width="15" height="56" style="border: medium none"></td>
								<td width="100%" bgcolor="#FFFFFF" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
								<table border="0" width="100%" id="table11" cellspacing="0" cellpadding="0">
									<tr>
										<td><font face="Arial" size="4">Sipariþ & Teslimat</font></td>
										<td>
										<p align="right">
										<a href="/admin/_manage/metin/main.php">
										Üst Seviye</a><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>
									</tr>
								</table>
								</td>
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

<legend>Sipariþ & Teslimat Metni Düzenleme</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
		<table border="0" id="table10" cellspacing="0" cellpadding="0" width="100%">
			<tr>
				<td><form method="POST" enctype="multipart/form-data" action="/admin/_manage/metin/sip_tes.php">
<input type="hidden" name="ac_t" value="add">
  <table border="0" cellpadding="4" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">    
    <tr>
      <td valign="top" nowrap><font face="Arial">Sipariþ & Teslimat</font><span lang="en">&nbsp;&nbsp;&nbsp;</font></span></font></td>
      <td width="100%" valign="top"><textarea rows="16" name="metin" cols="54"><?=$metin?></textarea></td>
    </tr>
    <tr>
      <td valign="top" nowrap><font face="Arial">Sayfa Resmi</font><span lang="en">&nbsp;&nbsp;&nbsp;</font></span></font></td>
      <td width="100%" valign="top"><input type="file" name="userfile" size="20"> <a href="<?=$image?>" target="_blank">Mevcut resim ></a></td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
      <td width="100%" valign="top">
      <input type="submit" value="Sipariþ&Teslimat Güncelle" name="B1"></td>
    </tr>
  </table>
</form></td>
			</tr>
			</table>
		<div class="paging">			


</td></tr></table></fieldset>

	</td></tr></table>&nbsp;</td>
							</tr>
						</table>
						</td>
					</tr>
				</table>