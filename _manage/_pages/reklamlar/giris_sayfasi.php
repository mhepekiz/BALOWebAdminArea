<table border="0" width="100%" id="table7" cellspacing="0" cellpadding="0" height="100%">
					<tr>
						<td valign="top" #000000><!--Start Contents-->
						
												<table border="0" width="100%" id="table8" cellspacing="0" cellpadding="0">
							<tr>
								<td #000000>
								<img border="0" src="/admin/_media/title_spacer.gif" width="15" height="56" style="border: medium none"></td>
								<td width="100%" bgcolor="#FFFFFF" #000000>
								<table id="table11" cellSpacing="0" cellPadding="0" width="100%" border="0">
									<tr>
										<td #000000>
										<font face="Arial" size="4">Giriþ Sayfasý Reklamlarý</font></td>
										<td #000000>
										<p align="right">
										<a href="/admin/_manage/reklamlar/main.php">
										Üst Seviye</a>&nbsp;&nbsp;</td>
									</tr>
								</table>
								</td>
							</tr>
						</table>
						</td>
					</tr>
					<tr>
						<td valign="top" bgcolor="#CCCCCC" #000000>
						<img border="0" src="/admin/_media/_blank.gif" width="1" height="1" style="border: medium none"></td>
					</tr>
					<tr>
						<td valign="top" height="100%" bgcolor="#F9F8F8" #000000>
						<table border="0" width="100%" id="table9" cellspacing="0" cellpadding="4">
							<tr>
								<td><table width="100%" cellspacing="0" cellpadding="0" border="0"><tr><td>
<fieldset>
<legend>Giriþ Sayfasý Reklamý Ekleme Formu</legend>

<table border="0" width="100%" id="table12" cellspacing="0" cellpadding="4">
	<tr>
		<td align="left">
		<form action="/admin/_manage/reklamlar/giris_sayfasi.php" name="reklamekle">
		<input type="hidden" name="ac_t" value="add">
		<table border="0" width="100%" id="table13" cellspacing="0" cellpadding="2">
			<tr>
				<td colspan="3">Kategori reklamlarý sitede yer alan kategoriler ile 
		ilgili sayfalarda bulunan bannerlardýr. 586x164 boyutunda olmak 
		zorundadýr.</td>
			</tr>
			<tr>
				<td nowrap>Banner Adý</td>
				<td>:</td>
				<td width="100%"><input type="text" name="banner" size="41"></td>
			</tr>
			<tr>
				<td nowrap>Banner Kodu</td>
				<td>:</td>
				<td width="100%"><textarea rows="6" name="kod" cols="47"></textarea></td>
			</tr>
			<tr>
				<td nowrap>Durum</td>
				<td>:</td>
				<td width="100%"><select size="1" name="durum">
				<option selected value="on">AKTÝF</option>
				<option value="off">PASÝF</option>
				</select></td>
			</tr>
			<tr>
				<td nowrap>&nbsp;</td>
				<td>&nbsp;</td>
				<td width="100%"><input type="submit" value="Ekle" name="B1"></td>
			</tr></form>
		</table>
		</td>
	</tr>
	</table>
</fieldset><br><br>
<fieldset>
<legend>Mevcut Reklamlar</legend>

<table border="0" width="100%" id="table1" cellpadding="2" cellspacing="1">
	<tr>
		<td colspan="4">Sistemde yer alan giriþ sayfasý bannerlarý aþaðýdaki gibidir.</td>
	</tr>
	<tr>
		<td nowrap bgcolor="#B6CDF3" width="100%">Banner Adý</td>
		<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en">&nbsp;Editor&nbsp;</span></td>
		<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en">&nbsp;&nbsp;&nbsp;</span>Tarih<span lang="en">&nbsp;&nbsp;&nbsp;</span></td>
		<td nowrap align="center">
		<p align="center"><span lang="en">Durum/</span>Sil</td>
	</tr>
<?

$get_banner_cat = mysql_query("select id,locale,banner,status,tarih,editor from adv_main");
while(list($bid,$catid,$banner,$b_durum,$tarih,$b_editor)=mysql_fetch_row($get_banner_cat)){


$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';

if($b_durum=="on"){ $b_img="sml_iko_on.gif"; $new_d="off"; } else { $b_img="sml_iko_off.gif"; $new_d="on"; $bgc="#FFCCCC"; } 

echo '
	<tr>
		<td bgcolor="'.$bgc.'" nowrap width="100%">'.$banner.'</td>
		<td bgcolor="'.$bgc.'"  nowrap align="center">'.$b_editor.'</td>
		<td bgcolor="'.$bgc.'"  nowrap align="center">'.$tarih.'</td>
		<td bgcolor="'.$bgc.'"  nowrap align="center">
		<font size="1">
		<a href="/admin/_manage/reklamlar/giris_sayfasi.php?ac_t=status&bid='.$bid.'&nd='.$new_d.'&banner='.$banner.'"><img border="0" src="/admin/_media/'.$b_img.'" width="16" height="16"></a>&nbsp;&nbsp;
		<a href="/admin/_manage/reklamlar/giris_sayfasi.php?ac_t=del&bid='.$bid.'&banner='.$banner.'"><img border="0" src="/admin/_media/delete.gif" width="15" height="15"></a></font></td>
	</tr> ';
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