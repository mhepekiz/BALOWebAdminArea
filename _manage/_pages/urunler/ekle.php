  <script LANGUAGE=JAVASCRIPT>

  function checkurun(){

 
  if (kategoriekle.kod.value==""){ alert("\"�r�n Kodu\" bo� b�rak�lamaz."); kategoriekle.kod.focus(); return (false); }
  if (kategoriekle.urunadi.value==""){ alert("\"�r�n Ad�\" bo� b�rak�lamaz."); kategoriekle.urunadi.focus(); return (false); }
  if (kategoriekle.catof.value==""){ alert("Bir kategori se�melisiniz");  return (false); }
  if (kategoriekle.fiyat.value==""){ alert("\"Fiyat\" bo� b�rak�lamaz."); kategoriekle.fiyat.focus(); return (false); }
  if (kategoriekle.fiyatkur.value==""){ alert("Fiyat i�in kur bo� b�rak�lamaz."); kategoriekle.fiyatkur.focus(); return (false); }
  if (kategoriekle.kdv.value==""){ alert("\"KDV\" bo� b�rak�lamaz."); kategoriekle.kdv.focus(); return (false); }

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
										<font face="Arial" size="4">�r�nler ve 
										Kategoriler</font></td>
										<td nowrap>
										<a href="/admin/_manage/urunler/main.php">
										�st Seviye</a>&nbsp; &nbsp;&nbsp;</td>
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

<legend>�r�n Ekleme Formu</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
<div class="paging">
						<form name="kategoriekle" method="post" action="/admin/_manage/urunler/ekle.php" onSubmit="return checkurun(this);">
							<input type="hidden" value="urunadd" name="ac_t">
							<table id="table5" width="461" border="0">
								<tr>
									<td >
									�r�n kodu</font></td>
									<td width="290">
									<input tabIndex="1" maxLength="50" name="kod">
									</font></td>
								</tr>
								<tr>
									<td >
									�r�n Ad�</font></td>
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
									Kategori se�mek i�in t�klay�n.</a></td>
								</tr>
								<tr>
									<td >
									Yeni</font></td>
									<td width="290">
									<input tabIndex="5" type="radio" value="yes" name="yeni"> 
									evet </font>
									<input tabIndex="5" type="radio" CHECKED value="no" name="yeni"> 
									hay�r </font></td>
								</tr>
								<tr>
									<td >
									Pop�ler</font></td>
									<td width="290">
									<input tabIndex="6" type="radio" value="yes" name="pop"> 
									evet </font>
									<input tabIndex="6" type="radio" CHECKED value="no" name="pop"> 
									hay�r </font></td>
								</tr>
								<tr>
									<td >
									Piyasa Fiyat�</font></td>
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
									Kargo �creti</font></td>
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
									KDV Oran�</font></td>
									<td width="290">
									<input tabIndex="14" maxLength="4" size="4" value="18" name="kdv">
									</font></td>
								</tr>
								<tr>
									<td >
									�ndirim (%)</font></td>
									<td width="290">
									<input tabIndex="15" maxLength="4" size="4" value="0" name="indirim">
									</font></td>
								</tr>
								<tr>
									<td >
									Havale �ndirimi (%)</font></td>
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
									Stok Miktar�</font></td>
									<td width="290">
									<input tabIndex="19" maxLength="5" size="7" value="99999" name="stok">
									</font></td>
								</tr>
								<tr>
									<td >
									Durum</font></td>
									<td width="290">
									<input tabIndex="23" type="radio" value="off" name="durum"> 
									kapal� </font>
									<input tabIndex="30" type="radio" CHECKED value="on" name="durum"> 
									a��k </font></td>
								</tr>
								<tr>
									<td >
									Ana �r�n Kodu</td>
									<td width="290">
									<input tabIndex="35" maxLength="50" size="13" name="opsiyon" value="0"></td>
								</tr>
		<tr>
									<td >
									�r�n resmi ekleme i�lemi ile devam etmek istiyor musunuz?</td>
									<td width="290">
									<input tabIndex="50" type="checkbox" value="true" name="PRORES" checked>EVET</td>
								</tr>
								<tr>
									<td >
									&nbsp;</td>
									<td width="290">
									<input type="submit" value="�r�n� Kaydet" name="B1" tabIndex="55"></td>
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