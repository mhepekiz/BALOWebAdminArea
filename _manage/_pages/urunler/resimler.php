<script>
function confirmDelete(delUrl) {
  if (confirm("Bu resmi silmek istediðinize emin misiniz?")) {
    document.location = delUrl;
  }
}

</script>
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
										<td width="100%">
										<font face="Arial" size="4">Ürün 
										Resimleri</font></td>
										<td nowrap><a href="/admin/_manage/urunler/main.php">Üst Seviye</a>&nbsp;&nbsp;</td>
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

<legend>Ürün Seçimi</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
<div class="paging">
<form method="POST" action="/admin/_manage/urunler/resimler.php" name="urun_ozellik_secim">
	<table border="0" width="100%" id="table12" cellspacing="0" cellpadding="0">
		<tr>
			<td>Resimlerini düzenlemek istediðiniz ürününe ait kodu aþaðýdaki 
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

$get_last_act = mysql_query("select tarih,editor from urun_resim where urunid='$u_id' order by id desc limit 1");
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
	      <form method="POST" enctype="multipart/form-data" action="/admin/_manage/urunler/resimler.php">
      <input type="hidden" name="u_id" value="<?=$u_id?>">Ürün Resmi Ekleme Formu<br>
      <input type="file" name="filename" size="35">
	  <input type="hidden" name="pro_d" value="<?=$pro_d?>">
      <input type="submit" value="Ürün Resmi Ekle" name="B1"><br>
      <input type="hidden" name="ac_t" value="upload"><input type="hidden" name="kod" value="<?=$u_kod?>">
		</td></form>
	</tr>
	<tr>
		<td colspan="3"><hr color="#000000" size="1"></td>
	</tr>
	<tr>
		<td colspan="3">Mevcut Resimler</td>
	</tr>
	<tr>
		<td colspan="3">

		<table id="table1" cellSpacing="1" cellPadding="2" width="100%" border="0">
			<tr>
				<td noWrap width="100%" bgColor="#85abeb">
				Resim</td>
				<td noWrap align="middle" bgColor="#b6cdf3">
				<span lang="en">&nbsp;Editor&nbsp;</span></td>
				<td noWrap align="middle" bgColor="#dce8fa">
				<span lang="en-us">Tarih</span></td>
				<td noWrap align="middle">
				<p align="center"><span lang="en">&nbsp;&nbsp;</span>Sil<span lang="en">&nbsp;&nbsp;</span></td>
			</tr>
<?
$get_pics = mysql_query("select id,resim_k,editor,tarih from urun_resim where urunid ='$u_id' and resim_k <> 'DELETED'");

while(list($rid,$tres,$r_editor,$r_tarih)=mysql_fetch_row($get_pics)){
$r_tarih = str_replace(" ","<br>",$r_tarih);
$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';
Echo '			<tr>
				<td noWrap width="100%" bgColor="'.$bgc.'"><img border="0" src="'.$tres.'"></td>
				<td noWrap align="middle" bgColor="'.$bgc.'">'.$r_editor.'</td>
				<td noWrap align="middle" bgColor="'.$bgc.'"><span lang="en"><font style="FONT-SIZE: 4pt">&nbsp;</font></span>'.$r_tarih.'</td>
				<td noWrap align="middle" bgColor="'.$bgc.'"><a href="javascript:confirmDelete(\'/admin/_manage/urunler/resimler.php?ac_t=delete&pro_d='.$pro_d.'&resim='.$rid.'&urun='.$u_id.'\');">
				<img alt="Ürünü Sil" src="/admin/_media/delete.gif" border="0"></a></td>
			</tr>';
}
?>
		</table>

		</td>
	</tr>
	<tr>
		<td colspan="3"><hr color="#000000" size="1"></td>
	</tr>
	<tr>
		<td colspan="3">Silinmiþ Resimler</td>
	</tr>
	<tr>
		<td colspan="3">

		<table id="table1" cellSpacing="1" cellPadding="2" width="100%" border="0">
			<tr>
				<td noWrap width="100%" bgColor="#85abeb">
				Resim</td>
				<td noWrap align="middle" bgColor="#b6cdf3">
				<span lang="en">&nbsp;Editor&nbsp;</span></td>
				<td noWrap align="middle" bgColor="#dce8fa">
				<span lang="en-us">Tarih</span></td>
				<td noWrap align="middle">
				<p align="center"><span lang="en">&nbsp;&nbsp;</span>Durum<span lang="en">&nbsp;&nbsp;</span></td>
			</tr>
<?
$get_pics_deleted = mysql_query("select id,resim_k,editor,tarih from urun_resim where urunid ='$u_id' and resim_k = 'DELETED'");

while(list($rid,$tres,$r_editor,$r_tarih)=mysql_fetch_row($get_pics_deleted)){
$r_tarih = str_replace(" ","<br>",$r_tarih);
Echo '			<tr>
				<td noWrap width="100%" bgColor="#ffcccc"><img border="0" src="/admin/_media/deleted.gif"></td>
				<td noWrap align="middle" bgColor="#ffcccc">'.$r_editor.'</td>
				<td noWrap align="middle" bgColor="#ffcccc"><span lang="en"><font style="FONT-SIZE: 4pt">&nbsp;</font></span>'.$r_tarih.'</td>
				<td noWrap align="middle" bgColor="#ffcccc">Silindi</td>
			</tr>';
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