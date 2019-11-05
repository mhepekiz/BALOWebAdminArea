<?
$get_kur_usd = mysql_query("select parite from kurlar where id='1'");
list($parite_usd)=mysql_fetch_row($get_kur_usd);
$get_kur_euro = mysql_query("select parite from kurlar where id='2'"); 
list($parite_euro)=mysql_fetch_row($get_kur_euro);

$parite_usd = number_format($parite_usd,3,'.','');
$parite_euro = number_format($parite_euro,3,'.','');

?>
<table border="0" width="100%" id="table7" cellspacing="0" cellpadding="0" height="100%">
					<tr>
						<td valign="top" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px"><!--Start Contents-->
						
												<table border="0" width="100%" id="table8" cellspacing="0" cellpadding="0">
							<tr>
								<td style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
								<img border="0" src="/admin/_media/title_spacer.gif" width="15" height="56" style="border: medium none"></td>
								<td width="100%" bgcolor="#FFFFFF" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
								<font face="Arial" size="4">Döviz Kurlarý</font></td>
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

<legend>Kur Yönetimi</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
		<table border="0" id="table10" cellspacing="0" cellpadding="0" width="167">
			<tr>
				<td width="60">
				<img border="0" src="/admin/_media/euro.gif" width="60" height="50"></td>
				<td>
				<p align="center">
				<img border="0" src="/admin/_media/dolar.gif" width="60" height="50"></td>
			</tr>
			<tr>
				<td width="60">
				<p align="center">
				<a href="/admin/_manage/kurlar/kurlar.php?kur_id=2">EURO</a></td>
				<td>
				<p align="center">
				<a href="/admin/_manage/kurlar/kurlar.php?kur_id=1">DOLAR</a></td>
			</tr>
		</table>
		<div class="paging">			


</td></tr></table></fieldset>

	</td></tr></table>&nbsp;<table width="100%" cellspacing="0" cellpadding="0" border="0"><tr><td>
<?
if($kur_id=="1"){
?>
<fieldset>

<legend>USD</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
	<table border="0" cellpadding="4" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber1">
  <tr>
    <td>USD</td>
    <td>
    <form method="POST" action="/admin/_manage/kurlar/main.php">
      <p>
      <font face="Arial">
      <input type="text" name="parite" size="20" value="<? echo "$parite_usd"; ?>" style="font-family: Verdana; font-size: 8pt"><font size="1"> 
      TL </font>
      <input type="submit" value="Güncelle" name="B1" style="font-family: Verdana; font-size: 8pt"></font></p>
   
      <input type="hidden" name="ac_t" value="update">
      <input type="hidden" name="kur_id" value="1">
   
    </td> </form>
  </tr>
</table>
		<div class="paging">			


</td></tr></table></fieldset>

<?
} else if($kur_id=="2"){
?>

<fieldset>

<legend>EURO</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
	<table border="0" cellpadding="4" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber1">
  <tr>
    <td>EURO</td>
    <td>
    <form method="POST" action="/admin/_manage/kurlar/main.php">
      <p>
      <font face="Arial">
      <input type="text" name="parite" size="20" value="<? echo "$parite_euro"; ?>" style="font-family: Verdana; font-size: 8pt"><font size="1"> 
      TL </font>
      <input type="submit" value="Güncelle" name="B1" style="font-family: Verdana; font-size: 8pt"></font></p>
   
      <input type="hidden" name="ac_t" value="update">
      <input type="hidden" name="kur_id" value="2">
   
    </td> </form>
  </tr>
</table>
		<div class="paging">			


</td></tr></table></fieldset>
<?
}
?>
	</td></tr></table>
</td>
							</tr>
						</table>
						</td>
					</tr>
				</table>