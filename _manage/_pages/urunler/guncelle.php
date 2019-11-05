  <script LANGUAGE=JAVASCRIPT>

  function checkurun(){

 
  if (kategoriekle.kod.value==""){ alert("\"Ürün Kodu\" boþ býrakýlamaz."); kategoriekle.kod.focus(); return (false); }
  if (kategoriekle.urunadi.value==""){ alert("\"Ürün Adý\" boþ býrakýlamaz."); kategoriekle.urunadi.focus(); return (false); }
  if (kategoriekle.catof.value==""){ alert("Bir kategori seçmelisiniz");  return (false); }
  if (kategoriekle.fiyat.value==""){ alert("\"Fiyat\" boþ býrakýlamaz."); kategoriekle.fiyat.focus(); return (false); }
  if (kategoriekle.fiyatkur.value==""){ alert("Fiyat için kur boþ býrakýlamaz."); kategoriekle.fiyatkur.focus(); return (false); }
  if (kategoriekle.kdv.value==""){ alert("\"KDV\" boþ býrakýlamaz."); kategoriekle.kdv.focus(); return (false); }

  return (true); 
 
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
										<td width="100%" >
										<font face="Arial" size="4">Ürünler ve 
										Kategoriler</font></td>
										<td nowrap>
										<a href="/admin/_manage/urunler/main.php">
										Üst Seviye</a>&nbsp; &nbsp;&nbsp;</td>
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
<form method="POST" action="/admin/_manage/urunler/guncelle.php" name="urun_ozellik_secim">
	<table border="0" width="100%" id="table12" cellspacing="0" cellpadding="0">
		<tr>
			<td>Güncellemek istediðiniz ürüne ait kodu aþaðýdaki kutuya yazarak SEÇ butonuna týklayýn.</td>
		</tr>
		<tr>
			<td><input type="text" name="pro_d" size="20" value="<?=$pro_d?>">
			<input type="submit" value="SEÇ" name="B1">  <a href="#" onClick="window.open('/admin/_manage/_pages/urunler/urunlistesi.php?operator=pro_d&thedocument=urun_ozellik_secim','503L','toolbar=no,width=640,height=480,left=0,top=0,status=no,scrollbars=yes,resize=yes');return false"><b>Ürün Listesi</b></a></td>
		</tr></form>
	</table>
</td></tr></table></fieldset>
<?
if($pro_d){

$get_u_info=mysql_query("select id,  kod, urunadi, kategori, yeni, pop, piyasa, fiyat, kargo, piyasakur, fiyatkur, kargokur, kdv, indirim, hindirim, taksit, keyw, catkeyw, stok, durum, opsiyon from urunler where kod='$pro_d' limit 1");
list($u_id,  $kod, $urunadi, $catof, $yeni, $pop, $piyasa, $fiyat, $kargo, $piyasakur, $fiyatkur, $kargokur, $kdv, $indirim, $hindirim, $taksit, $keyw, $catkeyw, $stok, $durum, $opsiyon)=mysql_fetch_row($get_u_info);

if($opsiyon!="0"){
$op_kod = mysql_query("select kod from urunler where id='$opsiyon' limit 1");
list($ops_kod)=mysql_fetch_row($op_kod);
}

if($ops_kod == ""){
$ops_kod="0";
}

if($yeni=="yes"){ $yyes=" CHECKED " ; $yno=""; } else { $yno=" CHECKED "; $yyes=""; }
if($pop=="yes"){ $pyes=" CHECKED " ; $pno=""; } else { $pno=" CHECKED "; $pyes=""; }
if($durum=="on"){ $don=" CHECKED " ; $doff=""; } else { $doff=" CHECKED "; $don=""; }
?>
<fieldset>

<legend>Ürün Güncelleme Formu</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
<div class="paging">
						<form name="kategoriekle" method="post" action="/admin/_manage/urunler/guncelle.php" onSubmit="return checkurun(this);">
							<input type="hidden" value="urunmod" name="ac_t">
							<input type="hidden" value="<?=$u_id?>" name="urun_id">
							<input type="hidden" value="<?=$pro_d?>" name="pro_d">
							<table id="table5" width="461" border="0">
								<tr>
									<td >
									Ürün kodu</font></td>
									<td width="290">
									<input tabIndex="1" maxLength="50" name="kod" size="20" value="<?=$kod?>">
									</font></td>
								</tr>
								<tr>
									<td >
									Ürün Adý</font></td>
									<td width="290">
									<input tabIndex="2" maxLength="200" size="34" name="urunadi" value="<?=$urunadi?>">
									</font></td>
								</tr>
								<tr>
									<td >
									Kategori</font></td>
									<td width="290">
									<input tabIndex="3" maxLength="50" size="7" name="catof"  style="background-color: #E8E8E8" value="<?=$catof?>">
									<a tabindex="4" onclick="window.open('/admin/_manage/urunler/kategorisecekle.php','502L','toolbar=no,width=450,height=500,left=0,top=0,status=no,scrollbars=yes,resize=no');return false" href="#">
									Kategori seçmek için týklayýn.</a></td>
								</tr>
								<tr>
									<td >
									Yeni</font></td>
									<td width="290">
									<input tabIndex="5" type="radio" <?=$yyes?> value="yes" name="yeni"> 
									evet </font>
									<input tabIndex="5" type="radio" <?=$yno?> value="no" name="yeni"> 
									hayýr </font></td>
								</tr>
								<tr>
									<td >
									Popüler</font></td>
									<td width="290">
									<input tabIndex="6" type="radio" <?=$pyes?> value="yes" name="pop"> 
									evet </font>
									<input tabIndex="6" type="radio" <?=$pno?> value="no" name="pop"> 
									hayýr </font></td>
								</tr>
								<tr>
									<td >
									Piyasa Fiyatý</font></td>
									<td width="290">
									<input tabIndex="8" maxLength="15" size="21" name="piyasa" value="<?=$piyasa?>">
									<select size="1" name="piyasakur" tabindex="9">
									<? echo "<option value=\"$piyasakur\" selected>$piyasakur</option>"; ?>
									<option value="TL">TL</option>
									<option value="USD">USD</option>
									<option value="EURO">EURO</option>
									</select></font></td>
								</tr>
								<tr>
									<td >
									Fiyat</font></td>
									<td width="290">
									<input tabIndex="10" maxLength="15" size="21" name="fiyat" value="<?=$fiyat?>">
									<select size="1" name="fiyatkur" tabIndex="11">
									<? echo "<option value=\"$fiyatkur\" selected>$fiyatkur</option>"; ?>
									<option value="TL">TL</option>
									<option value="USD">USD</option>
									<option value="EURO">EURO</option>
									</select></font></td>
								</tr>
								<tr>
									<td >
									Kargo Ücreti</font></td>
									<td width="290">
									<input tabIndex="12" maxLength="15" size="21" name="kargo" value="<?=$kargo?>">
									<select size="1" name="kargokur" tabIndex="13">
									<? echo "<option value=\"$kargokur\" selected>$kargokur</option>"; ?>
									<option value="TL">TL</option>
									<option value="USD">USD</option>
									<option value="EURO">EURO</option>
									</select></font></td>
								</tr>
								<tr>
									<td >
									KDV Oraný</font></td>
									<td width="290">
									<input tabIndex="14" maxLength="4" size="4" value="<?=$kdv?>" name="kdv">
									</font></td>
								</tr>
								<tr>
									<td >
									Ýndirim (%)</font></td>
									<td width="290">
									<input tabIndex="15" maxLength="4" size="4" value="<?=$indirim?>" name="indirim">
									</font></td>
								</tr>
								<tr>
									<td >
									Havale Ýndirimi (%)</font></td>
									<td width="290">
									<input tabIndex="16" maxLength="4" size="4" value="<?=$hindirim?>" name="hindirim">
									</font></td>
								</tr>
								<tr>
									<td >
									Taksit</font></td>
									<td width="290">
									<input tabIndex="17" maxLength="4" size="4" value="<?=$taksit?>" name="taksit">
									</font></td>
								</tr>
								<tr>
									<td valign="top">
									Anahtar Kelimeler</font></td>
									<td width="290">
									<input tabIndex="18" size="40" name="keyw" value="<?=$keyw?>"><br>
									<input tabIndex="18" size="40" name="catkeyw" style="background-color: #E8E8E8" value="<?=$catkeyw?>">
									</font></td>
								</tr>
								<tr>
									<td >
									Stok Miktarý</font></td>
									<td width="290">
									<input tabIndex="19" maxLength="5" size="7" value="<?=$stok?>" name="stok">
									</font></td>
								</tr>
								<tr>
									<td >
									Durum</font></td>
									<td width="290">
									<input tabIndex="23" type="radio" <?=$doff?> value="off" name="durum"> 
									kapalý </font>
									<input tabIndex="30" type="radio" <?=$don?> value="on" name="durum"> 
									açýk </font></td>
								</tr>
								<tr>
									<td >
									Ana Ürün Kodu</td>
									<td width="290">
									<input tabIndex="35" maxLength="50" size="13" name="opsiyon" value="<?=$ops_kod?>"></td>
								</tr>
								<tr>
									<td >
									&nbsp;</td>
									<td width="290">
									<input type="submit" value="Ürünü Güncelle" name="B1" tabIndex="55"></td>
								</tr>
							</table>
						</form>
</td></tr></table></fieldset>
<?
}
?>
</td></tr></table></td>
							</tr>
						</table>
						</td>
					</tr>
				</table>