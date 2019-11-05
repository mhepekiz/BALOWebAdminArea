<script>
function sss_a()
{
sss_ara.submit();
}
</script>
<table border="0" width="100%" id="table7" cellspacing="0" cellpadding="0" height="100%">
					<tr>
						<td valign="top" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px"><!--Start Contents-->
						
												<table border="0" width="100%" id="table8" cellspacing="0" cellpadding="0">
							<tr>
								<td style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
								<img border="0" src="/admin/_media/title_spacer.gif" width="15" height="56" style="border: medium none"></td>
								<td width="100%" bgcolor="#FFFFFF" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
								<font face="Arial" size="4">Sýk Sorulan Sorular</font></td>
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

<legend>SSS Ekleme Formu</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
		<div class="paging">			


<form method="POST" action="/admin/_manage/sss/main.php">
  <table border="0" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="450" id="AutoNumber1">
    <tr>
      <td align="left">Soru</td>
      <td width="80%"><input type="text" name="soru" size="38"></td>
    </tr>
    <tr>
      <td align="left">Cevap</td>
      <td width="80%"><textarea rows="6" name="cevap" cols="37"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="80%"><input type="submit" value="SSS Ekle" name="B1"></td>
    </tr>
  </table>
  <input type="hidden" name="ac_t" value="add">
</form></td></tr></table></fieldset>
<br><br>
&nbsp;<fieldset>

<legend>Son 25 SSS</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
		<div class="paging">			


<table border="0" width="100%" id="table10" cellpadding="2" cellspacing="0">
	<tr>
		<td nowrap colspan="4">Sýk Sorulan Sorular içinde arama yapabilirsiniz...</td>
	</tr>
	<tr>
		<td nowrap colspan="4">
		<form method="POST" action="/admin/_manage/sss/main.php" name="sss_ara">
			<table border="0" width="100%" id="table11" cellspacing="0" cellpadding="0">
				<tr>
					<td><input type="text" name="q" size="20" value="<?=$q?>"></td>
					<td nowrap><span lang="en">&nbsp;</span><a href="javascript:sss_a();"><img border="0" src="/admin/_media/search.gif" width="16" height="16"> 
					Ara</a></td>
					<td width="100%">&nbsp;<span lang="en">&nbsp;&nbsp;&nbsp;</span><a href="/admin/_manage/sss/main.php"><img border="0" src="/admin/_media/showall.gif" width="16" height="16"> 
					Hepsini Göster</a></td>
				</tr>
			</table>
			<input type="hidden" name="ac_t" value="search">
		</td></form>
	</tr>
	<tr>
		<td nowrap width="100%" bgcolor="#85ABEB"><b>Soru</b></td>
		<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>Tarih</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>
		<td nowrap align="center" bgcolor="#DCE8FA"><span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;</span><b>Editör</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>
		<td nowrap align="center">
		<p align="center"><span lang="en">&nbsp;&nbsp;</span><b>Sil</b><span lang="en">&nbsp;&nbsp;</span></td>
	</tr>
<?
if($q){
$newsq = "where soru LIKE '%$q%' or cevap LIKE '%$q%' order by id desc";
} else {
$newsq = "order by id desc limit 25";
}
$hs = 0;
$get_sss = mysql_query("select id,soru,tarih,editor from sss $newsq");
while(list($sid,$ssoru,$starih,$seditor)=mysql_fetch_row($get_sss)){
$ssoru = str_replace($q, "<font color='blue'>$q</font>", $ssoru);
$ssoru = substr($ssoru, 0, 80); 
$ssoru = $ssoru . "...";

$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';

echo'	<tr>
		<td bgcolor="'.$bgc.'" nowrap width="100%">'.$ssoru.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">'.$starih.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">'.$seditor.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center"><a href="/admin/_manage/sss/main.php?ac_t=del&remsss='.$sid.'"><img src="/admin/_media/delete.gif"></a></td>
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
		<td bgcolor="'.$bgc.'" nowrap width="100%">Sistemde SSS bulunmamaktadýr.</td>
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