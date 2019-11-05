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
						<td valign="top" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px"><!--Start Contents-->
						
												<table border="0" width="100%" id="table8" cellspacing="0" cellpadding="0">
							<tr>
								<td style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
								<img border="0" src="/admin/_media/title_spacer.gif" width="15" height="56" style="border: medium none"></td>
								<td width="100%" bgcolor="#FFFFFF" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
								<table id="table11" cellSpacing="0" cellPadding="0" width="100%" border="0">
									<tr>
										<td width="100%" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
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
						<td valign="top" bgcolor="#CCCCCC" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
						<img border="0" src="/admin/_media/_blank.gif" width="1" height="1" style="border: medium none"></td>
					</tr>
					<tr>
						<td valign="top" height="100%" bgcolor="#F9F8F8" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
						<table border="0" width="100%" id="table9" cellspacing="0" cellpadding="4">
							<tr>
								<td><table width="100%" cellspacing="0" cellpadding="0" border="0"><tr><td>
<fieldset>

<legend>Ürün Ekleme Formu</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
<div class="paging">
						<form name="kategoriekle" method="post" action="/admin/_manage/urunler/ekle.php" onSubmit="return checkurun(this);">
							<input type="hidden" value="urunadd" name="ac_t">
							<table id="table5" width="461" border="0">
								<tr>
									<td >
									Ürün kodu</font></td>
									<td width="290">
									<input tabIndex="1" maxLength="50" name="kod">
									</font></td>
								</tr>
								<tr>
									<td >
									Ürün Adý</font></td>
									<td width="290">
									<input tabIndex="2" maxLength="200" size="34" name="urunadi">
									</font></td>
								</tr>
								<tr>
									<td >
									Kategori</font></td>
									<td width="290">
									<input tabIndex="3" maxLength="50" size="7" name="catof"  style="background-color: #E8E8E8">
									<a tabindex="4" onclick="window.open('/admin/_manage/urunler/kategorisecekle.php','502L','toolbar=no,width=450,height=500,left=0,top=0,status=no,scrollbars=yes,resize=no');return false" href="#">
									Kategori seçmek için týklayýn.</a></td>
								</tr>
								<tr>
									<td >
									Yeni</font></td>
									<td width="290">
									<input tabIndex="5" type="radio" value="yes" name="yeni"> 
									evet </font>
									<input tabIndex="5" type="radio" CHECKED value="no" name="yeni"> 
									hayýr </font></td>
								</tr>
								<tr>
									<td >
									Popüler</font></td>
									<td width="290">
									<input tabIndex="6" type="radio" value="yes" name="pop"> 
									evet </font>
									<input tabIndex="6" type="radio" CHECKED value="no" name="pop"> 
									hayýr </font></td>
								</tr>
								<tr>
									<td >
									Piyasa Fiyatý</font></td>
									<td width="290">
									<input tabIndex="8" maxLength="15" size="21" name="piyasa">
									<select size="1" name="piyasakur" tabindex="9">
									<option value="TL" selected>TL</option>
									<option value="USD">USD</option>
									<option value="EURO">EURO</option>
									</select></font></td>
								</tr>
								<tr>
									<td >
									Fiyat</font></td>
									<td width="290">
									<input tabIndex="10" maxLength="15" size="21" name="fiyat">
									<select size="1" name="fiyatkur" tabIndex="11">
									<option value="TL" selected>TL</option>
									<option value="USD">USD</option>
									<option value="EURO">EURO</option>
									</select></font></td>
								</tr>
								<tr>
									<td >
									Kargo Ücreti</font></td>
									<td width="290">
									<input tabIndex="12" maxLength="15" size="21" name="kargo">
									<select size="1" name="kargokur" tabIndex="13">
									<option value="TL" selected>TL</option>
									<option value="USD">USD</option>
									<option value="EURO">EURO</option>
									</select></font></td>
								</tr>
								<tr>
									<td >
									KDV Oraný</font></td>
									<td width="290">
									<input tabIndex="14" maxLength="4" size="4" value="18" name="kdv">
									</font></td>
								</tr>
								<tr>
									<td >
									Ýndirim (%)</font></td>
									<td width="290">
									<input tabIndex="15" maxLength="4" size="4" value="0" name="indirim">
									</font></td>
								</tr>
								<tr>
									<td >
									Havale Ýndirimi (%)</font></td>
									<td width="290">
									<input tabIndex="16" maxLength="4" size="4" value="0" name="hindirim">
									</font></td>
								</tr>
								<tr>
									<td >
									Taksit</font></td>
									<td width="290">
									<input tabIndex="17" maxLength="4" size="4" value="0" name="taksit">
									</font></td>
								</tr>
								<tr>
									<td valign="top">
									Anahtar Kelimeler</font></td>
									<td width="290">
									<input tabIndex="18" size="40" name="keyw"><br>
									<input tabIndex="18" size="40" name="catkeyw" style="background-color: #E8E8E8">
									</font></td>
								</tr>
								<tr>
									<td >
									Stok Miktarý</font></td>
									<td width="290">
									<input tabIndex="19" maxLength="5" size="7" value="99999" name="stok">
									</font></td>
								</tr>
								<tr>
									<td >
									Durum</font></td>
									<td width="290">
									<input tabIndex="23" type="radio" value="off" name="durum"> 
									kapalý </font>
									<input tabIndex="30" type="radio" CHECKED value="on" name="durum"> 
									açýk </font></td>
								</tr>
								<tr>
									<td >
									Ana Ürün Kodu</td>
									<td width="290">
									<input tabIndex="35" maxLength="50" size="13" name="opsiyon" value="0"></td>
								</tr>
		<tr>
									<td >
									Ürün resmi ekleme iþlemi ile devam etmek istiyor musunuz?</td>
									<td width="290">
									<input tabIndex="50" type="checkbox" value="true" name="PRORES" checked>EVET</td>
								</tr>
								<tr>
									<td >
									&nbsp;</td>
									<td width="290">
									<input type="submit" value="Ürünü Kaydet" name="B1" tabIndex="55"></td>
								</tr>
							</table>
						</form>
</td></tr></table></fieldset>
</td></tr></table></td>
							</tr>
						</table>
						</td>
					</tr>
				</table>