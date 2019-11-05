<table border="0" width="100%" id="table7" cellspacing="0" cellpadding="0" height="100%">
					<tr>
						<td valign="top" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px"><!--Start Contents-->
						
												<table border="0" width="100%" id="table8" cellspacing="0" cellpadding="0">
							<tr>
								<td style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
								<img border="0" src="/admin/_media/title_spacer.gif" width="15" height="56" style="border: medium none"></td>
								<td width="100%" bgcolor="#FFFFFF" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
								<font face="Arial" size="4">Ajanda Kategorileri</font></td>
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

<legend>Kategori Ekleme Formu</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
		<div class="paging">			


<form method="POST" action="/admin/_manage/ajanda/kategori.php" name="kategoriekle">
  <table border="0" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="450" id="AutoNumber1">
    <tr>
      <td align="left" nowrap>Kategori Adý</td>
      <td width="80%"><input type="text" name="catad" size="38"></td>
    </tr>
    <tr>
      <td align="left" nowrap>Üst Kategori</td>
      <td width="80%">
							<input type="text" name="catof" size="8" value="0"><a href="#" onClick="window.open('/admin/_manage/ajanda/kategorisecekle.php','502AJL','toolbar=no,width=450,height=500,left=0,top=0,status=no,scrollbars=yes,resize=no');return false"><b>Üst Kategori seçin</b></a></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="80%"><input type="submit" value="Kategori Ekle" name="B1"></td>
    </tr>
  </table>
  <input type="hidden" name="ac_t" value="add">
</form></td></tr></table></fieldset>
<br><br>
&nbsp;<fieldset>

<legend>Kategoriler</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
		<div class="paging">			


<table border="0" width="100%" id="table10" cellpadding="2" cellspacing="0">
	<tr>
		<td nowrap width="100%" bgcolor="#85ABEB"><b>Kategori</b></td>
		<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>Tarih</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>
		<td nowrap align="center" bgcolor="#DCE8FA"><span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;</span><b>Editör</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>
		<td nowrap align="center">
		<p align="center"><span lang="en">&nbsp;&nbsp;</span><b>Sil</b><span lang="en">&nbsp;&nbsp;</span></td>
	</tr>
<?
$newsq = "where catof='0' order by id";

$hs = 0;
$get_sss = mysql_query("select id,ad,tarih,editor from ajandakategori $newsq");
while(list($sid,$ssoru,$starih,$seditor)=mysql_fetch_row($get_sss)){
$ssoru = str_replace($q, "<font color='blue'>$q</font>", $ssoru);
$ssoru = substr($ssoru, 0, 80); 
$ssoru = $ssoru . "...";

$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';

echo'	<tr>
		<td bgcolor="'.$bgc.'" nowrap width="100%">'.$ssoru.'<br>';
$get_sub_acats = mysql_query("select id,ad from ajandakategori where catof='$sid'");
while(list($ascid,$ascad)=mysql_fetch_row($get_sub_acats)){
echo "<a href='/admin/_manage/ajanda/kategori.php?ac_t=del&remcat=$ascid'><font color=gray>$ascad</font></a>, ";
}		
		echo '</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">'.$starih.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">'.$seditor.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center"><a href="/admin/_manage/ajanda/kategori.php?ac_t=del&remcat='.$sid.'"><img src="/admin/_media/delete.gif"></a></td>
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
		<td bgcolor="'.$bgc.'" nowrap width="100%">Sistemde Ajanda Kategorisi bulunmamaktadýr.</td>
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