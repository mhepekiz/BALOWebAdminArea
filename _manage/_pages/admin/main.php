<?
if($my_eid=="1"){
?>
<table border="0" width="100%" id="table7" cellspacing="0" cellpadding="0" height="100%">
					<tr>
						<td valign="top" ><!--Start Contents-->
						
												<table border="0" width="100%" id="table8" cellspacing="0" cellpadding="0">
							<tr>
								<td >
								<img border="0" src="/admin/_media/title_spacer.gif" width="15" height="56" style="border: medium none"></td>
								<td width="100%" bgcolor="#FFFFFF" >
								<table id="table11" cellSpacing="0" cellPadding="0" width="100%" border="0">
									<tr>
										<td >
										<font face="Arial" size="4">Editor 	Yönetimi</font></td>
										<td >
										&nbsp;</td>
									</tr>
								</table>
								</td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td valign="top" bgcolor="#CCCCCC" >
						<img border="0" src="/admin/_media/_blank.gif" width="1" height="1" style="border: medium none"></td>
					</tr>
					<tr>
						<td valign="top" height="100%" bgcolor="#F9F8F8" >
						<table border="0" width="100%" id="table9" cellspacing="0" cellpadding="4">
							<tr>
								<td><table width="100%" cellspacing="0" cellpadding="0" border="0"><tr><td>
<fieldset>

<legend>Ýþlemler</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
<div class="paging">
<table border="0" id="table12" cellspacing="0" cellpadding="3" width="160">
	<tr>
		<td align="center" >
		<img border="0" src="/admin/_media/iko_editorss.gif" width="32" height="32"></td>
    	<td align="center">
		<img border="0" src="/admin/_media/iko_e_upd.gif" width="32" height="32"></td>
	</tr>
	<tr>
		<td align="center">
		<a href="/admin/_manage/admin/ekle.php">Editor<br>Ekle</a></td>
		<td align="center"><a href="/admin/_manage/admin/info.php">Bilgi<br>Güncelle</a></td>
	</tr>
</table>
</td></tr></table></fieldset>

<fieldset>

<legend>Mevcut Editorler</legend>
<table border="0" width="100%" id="table1" cellpadding="2" cellspacing="1">
	<tr>
		<td colspan="3">Sistemde yer alan kategori bannerlar aþaðýdaki gibidir.</td>
	</tr>
	<tr>
		<td nowrap bgcolor="#B6CDF3">Kullanýcý adý</td>
		<td nowrap width="100%" bgcolor="#85ABEB">Ad Soyad</td>
		<td nowrap align="center">
		<p align="center"><span lang="en">&nbsp;&nbsp;</span>Sil<span lang="en">&nbsp;&nbsp;</span></td>
	</tr>

<?
$get_subeditors=mysql_query("select id,name,email,uname,pass,durum from subeditors where id <> '1'");
while(list($e_i,$e_nam,$e_ema,$e_una,$e_pas,$e_dur)=mysql_fetch_row($get_subeditors)){


$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';

if($e_dur=="on"){ $b_img="sml_iko_on.gif"; $new_d="off"; } else { $b_img="sml_iko_off.gif"; $new_d="on"; } 


echo '	<tr>
		<td bgcolor="'.$bgc.'" nowrap>'.$e_una.'</td>
		<td bgcolor="'.$bgc.'" nowrap width="100%"><a href="mailto:'.$e_ema.'">'.$e_nam.'</a></td>
		<td bgcolor="'.$bgc.'" nowrap align="center">
		<font size="1">
		<a href="/admin/_manage/admin/main.php?ac_t=status&e_i='.$e_i.'&nd='.$new_d.'"><img border="0" src="/admin/_media/'.$b_img.'"></a>&nbsp;&nbsp;
		<a href="/admin/_manage/admin/main.php?ac_t=delete&e_i='.$e_i.'"><img border="0" src="/admin/_media/delete.gif"></a></font></td>
	</tr>';
}
?>
</table>
</fieldset>


</td></tr></table></td>
							</tr>
						</table>
						</td>
					</tr>
				</table>
<?
} else {
?>
Bu alana eriþim yetkiniz bulunmamaktadýr. IP adresini (<?=$REMOTE_ADDR?>) kayýt edilmiþtir.
<?
}
?>