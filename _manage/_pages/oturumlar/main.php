<table border="0" width="100%" id="table7" cellspacing="0" cellpadding="0" height="100%">
					<tr>
						<td valign="top" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px"><!--Start Contents-->
						
												<table border="0" width="100%" id="table8" cellspacing="0" cellpadding="0">
							<tr>
								<td style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
								<img border="0" src="/admin/_media/title_spacer.gif" width="15" height="56" style="border: medium none"></td>
								<td width="100%" bgcolor="#FFFFFF" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
								<font face="Arial" size="4">Oturumlar</font></td>
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

<legend>Oturum Yönetimi</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
		<div class="paging">			


<table border="0" width="100%" id="table10" cellpadding="2" cellspacing="1">
	<tr>
		<td colspan="5">Browserýnýzýn yenile butonuna týklayarak bilgileri 
		güncelleyebilirsiniz...</td>
	</tr>
	<tr>
		<td nowrap width="100%" bgcolor="#85ABEB">Oturum ID</td>
		<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en">&nbsp;</span>IP Adresi<span lang="en">&nbsp;</span></td>
		<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en">&nbsp;&nbsp;</span>Giriþ<span lang="en">&nbsp;&nbsp;</span></td>
		<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en">&nbsp;&nbsp;&nbsp;</span>Idle<span lang="en">&nbsp;&nbsp;&nbsp;</span></td>
		<td nowrap align="center" bgcolor="#DCE8FA"><span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;</span>Editör<span lang="en">&nbsp;&nbsp;&nbsp;</span></td>
		<td nowrap align="center"><p align="center"><span lang="en">&nbsp;&nbsp;</span>Kill<span lang="en">&nbsp;&nbsp;</span></td>
	</tr>

<?

$get_sess = mysql_query("select sessionid,expire,ipaddr,editorid,trhx from essions order by expire desc") or die ("?");
while(list($sid,$sexpire,$sipaddr,$seditor,$strhx)=mysql_fetch_row($get_sess)){

$get_einfo = mysql_query("select uname from editors where id='$seditor'");
list($euname)=mysql_fetch_row($get_einfo);

$nowis = time()+1800;

$idlesec = $nowis-$sexpire;
if($idlesec >= 60){
  $idlese = $idlesec / 60;
  $idle = round($idlese);  
  $i_par = "dk";
} else {
  $idle = $idlesec;
  $i_par = "sn";
}

echo '<tr>
		<td nowrap width="100%">'.$sid.'</td>
		<td nowrap align="center">'.$sipaddr.'</td>
		<td nowrap align="center">'.$strhx.'</td>
		<td nowrap align="center">'.$idle.' '.$i_par.'</td>
		<td nowrap align="center">'.$euname.'</td>
		<td nowrap align="center"><a href="/admin/_manage/oturumlar/main.php?ac_t=del&sessionid='.$sid.'"><img border="0" src="/admin/_media/delete.gif" alt="Oturumu Kapat"></a></td>
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