<table border="0" width="100%" id="table7" cellspacing="0" cellpadding="0" height="100%">
					<tr>
						<td valign="top" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px"><!--Start Contents-->
						
												<table border="0" width="100%" id="table8" cellspacing="0" cellpadding="0">
							<tr>
								<td style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
								<img border="0" src="/admin/_media/title_spacer.gif" width="15" height="56" style="border: medium none"></td>
								<td width="100%" bgcolor="#FFFFFF" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
								<table id="table11" cellSpacing="0" cellPadding="0" width="100%" border="0">
									<tr>
										<td width="100%">
										<font face="Arial" size="4">Ürünler 
										Özellikleri</font></td>
										<td nowrap><a href="/admin/_manage/urunler/main.php">Üst Seviye</a>&nbsp;&nbsp;</td>
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

<legend>Ürün Seçimi</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
<div class="paging">
<form method="POST" action="/admin/_manage/urunler/ozellikler.php" name="urun_ozellik_secim">
	<table border="0" width="100%" id="table12" cellspacing="0" cellpadding="0">
		<tr>
			<td>Özelliklerini düzenlemek istediðiniz ürününe ait kodu aþaðýdaki 
			kutuya yazarak SEÇ butonuna týklayýn.</td>
		</tr>
		<tr>
			<td><input type="text" name="pro_d" size="20">
			<input type="submit" value="SEÇ" name="B1">  <a href="#" onClick="window.open('/admin/_manage/_pages/urunler/urunlistesi.php?operator=pro_d&thedocument=urun_ozellik_secim','503L','toolbar=no,width=640,height=480,left=0,top=0,status=no,scrollbars=yes,resize=yes');return false"><b>Ürün Listesi</b></a></td>
		</tr></form>
	</table>
</td></tr></table></fieldset>
<?
if($pro_d){

$get_pro_i = mysql_query("select id,kod,urunadi from urunler where kod='$pro_d' limit 1");
list($u_id,$u_kod,$u_ad)=mysql_fetch_row($get_pro_i);

$get_last_act = mysql_query("select tarih,editor from urun_detay where urun='$u_id' order by id desc limit 1");
list($u_tarih,$u_editor)=mysql_fetch_row($get_last_act);

?>
<br><br>
<fieldset>
<legend>Ürün Özellikleri</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>


<table border="0" width="100%" id="table13" cellspacing="0" cellpadding="2">
	<tr>
		<td nowrap>Ürün Kodu</td>
		<td>:</td>
		<td width="100%"><?=$u_kod?></td>
	</tr>
	<tr>
		<td nowrap>Ürün Adý</td>
		<td>:</td>
		<td width="100%"><?=$u_ad?></td>
	</tr>
	<tr>
		<td nowrap>Son Düzenleme<span lang="en">&nbsp;&nbsp;</span></td>
		<td>:</td>
		<td width="100%"><?=$u_tarih?></td>
	</tr>
	<tr>
		<td nowrap>Editör</td>
		<td>:</td>
		<td width="100%"><?=$u_editor?></td>
	</tr>
	<tr>
		<td colspan="3"><hr color="#000000" size="1"></td>
	</tr>
	<tr>
		<td colspan="3">
		<form method="POST" action="/admin/_manage/urunler/ozellikler.php">
		<input type="hidden" name="ac_t" value="add">
		<input type="hidden" name="urun_id" value="<?=$u_id?>">
		<input type="hidden" name="pro_d" value="<?=$u_kod?>">
			<table border="0" width="100%" id="table14" cellspacing="0" cellpadding="2">
				<tr>
					<td colspan="3">Özellik Ekleme Formu</td>
				</tr>
				<tr>
					<td nowrap>Özellik Adý</td>
					<td>:</td>
					<td width="100%"><input type="text" name="isim" size="22"></td>
				</tr>
				<tr>
					<td nowrap valign="top">Detay</td>
					<td valign="top">:</td>
					<td width="100%" valign="top">
					<textarea rows="4" name="detay" cols="29"></textarea><br>Özellik 
					detaylarýnda HTML taglarýný kullanabilirsiniz...</td>
				</tr>
				<tr>
					<td nowrap>&nbsp;</td>
					<td>&nbsp;</td>
					<td width="100%">
					<input type="submit" value="EKLE" name="B2"></td>
				</tr></form>
			</table>
		</td>
	</tr>
	<tr>
		<td colspan="3"><hr color="#000000" size="1"></td>
	</tr>
	<tr>
		<td colspan="3">Mevcut Özellikler</td>
	</tr>
	<tr>
		<td colspan="3">


<table border="0" width="100%" id="table15" cellpadding="2" cellspacing="1">
	<tr>
		<td nowrap bgcolor="#B6CDF3"  width="20%">Özellik</td>
		<td nowrap width="80%" bgcolor="#85ABEB">Açýklama</td>
		<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en">&nbsp;Editor&nbsp;</span></td>
		<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en">&nbsp;&nbsp;&nbsp;</span>Tarih<span lang="en">&nbsp;&nbsp;&nbsp;</span></td>
		<td nowrap align="center"><p align="center"><span lang="en">&nbsp;&nbsp;</span>Sil<span lang="en">&nbsp;&nbsp;</span></td>
	</tr>
<?
$get_pro_ds = mysql_query("select count(*) from urun_detay where urun='$u_id'");
list($cnt)=mysql_fetch_row($get_pro_ds);

$get_pro_d = mysql_query("select id,isim,detay,editor,tarih from urun_detay where urun='$u_id' and isim <> 'DELETED' limit $cnt");
while(list($o_id,$o_ad,$o_detay,$o_editor,$o_tarih)=mysql_fetch_row($get_pro_d)){

$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';
$o_tarih = str_replace(" ","<br>",$o_tarih);

$o_detay = htmlspecialchars($o_detay);
echo '
	<tr>
		<td bgcolor="'.$bgc.'"  width="20%">'.$o_ad.'</td>
		<td bgcolor="'.$bgc.'" width="80%">'.$o_detay.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">'.$o_editor.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">'.$o_tarih.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center"><a href="/admin/_manage/urunler/ozellikler.php?ac_t=del&o_id='.$o_id.'&pro_d='.$u_kod.'&u_id='.$u_id.'"><img border="0" src="/admin/_media/delete.gif"></a></td>
	</tr>
';

}

echo '
	<tr>
		<td width="100%" colspan="5"><hr size="1"></td>
	</tr>
';


$get_pro_dd = mysql_query("select id,isim,detay,editor,tarih from urun_detay where urun='$u_id' and isim = 'DELETED' limit $cnt");
while(list($o_id,$o_ad,$o_detay,$o_editor,$o_tarih)=mysql_fetch_row($get_pro_dd)){

$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';
$o_tarih = str_replace(" ","<br>",$o_tarih);

$o_detay = htmlspecialchars($o_detay);

echo '
	<tr>
		<td bgcolor="#FFCCCC"  width="20%">'.$o_ad.'</td>
		<td bgcolor="#FFCCCC" width="80%">'.$o_detay.'</td>
		<td bgcolor="#FFCCCC" nowrap align="center">'.$o_editor.'</td>
		<td bgcolor="#FFCCCC" nowrap align="center">'.$o_tarih.'</td>
		<td bgcolor="#FFCCCC" nowrap align="center">-</td>
	</tr>
';

}

?>
</table>


		</td>
	</tr>
</table>
	</td></tr></table></fieldset>
</td></tr></table></td>
							</tr>
						</table>
						</td>
					</tr>
				</table>
<?
}
?>