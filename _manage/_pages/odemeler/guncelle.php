<?
$get_sip_det = mysql_query("SELECT uye , sipno , tarih , durum , odeme , gonderen , alici , teslimat , notes , fatura,toplam,ip_adr, ip_adr2 FROM siparis where id='$sg_id' LIMIT 1");
list($s_uye,$s_sipno,$s_tarih,$s_durum,$s_odeme,$s_gonderen,$s_alici,$s_ttarih,$s_notes,$s_fatura,$s_toplam,$s_ip_adr,$s_ip_adr2)=mysql_fetch_row($get_sip_det);

if($s_gonderen=="hidden"){
$gyes="checked"; $gno="";
} else {
$gno="checked"; $gyes="";
}

if($s_odeme=="cc"){
$s_odeme = "Kredi Kartý";
} else {
$s_odeme = "Banka Havalesi";
}

$durum_drop = "";
$get_durums = mysql_query("select id,ad from siparis_durum order by id");
while (list($d_id,$d_ad)=mysql_fetch_row($get_durums)) {
	if($d_id=="$s_durum"){ $chked = "selected"; } else { $chked = ""; }
	$durum_drop .= "<option value='$d_id' $chked>$d_ad</option>\n";
}

$get_uye_det = mysql_query("select adsoyad,adres,sehir,ulke,tel,email from uyeler where kullaniciadi='$s_uye'");
list($su_ad,$su_adres,$su_sehir,$su_ulke,$su_tel,$su_email)=mysql_fetch_row($get_uye_det);

$get_alici_det = mysql_query("select adsoyad,adres,sehir,ulke,telefon from siparis_alici where id='$s_alici'");
list($sa_ad,$sa_adres,$sa_sehir,$sa_ulke,$sa_tel)=mysql_fetch_row($get_alici_det);

$get_fatura_det = mysql_query("select unvan,adres,vergid,vergino from siparis_fatura where id='$s_fatura'");
list($sf_unvan,$sf_adres,$sf_vd,$sf_vn)=mysql_fetch_row($get_fatura_det);
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
										<td width="100%" >
										<font face="Arial" size="4">Sipariþ 
										detaylarý - <?=$s_sipno?></font></td>
										<td nowrap>
										<a href="/admin/_manage/siparisler/main.php">
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

<legend>Sipariþ Güncelleme Formu</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
<div class="paging">
						<form name="kategoriekle" method="post" action="/admin/_manage/siparisler/guncelle.php">
							<input type="hidden" value="update" name="ac_t">
							<input type="hidden" value="<?=$sg_id?>" name="sg_id">
							<input type="hidden" name="s_sipno" value="<?=$s_sipno?>">
							<input type="hidden" name="s_alici" value="<?=$s_alici?>">
							<input type="hidden" name="s_fatura" value="<?=$s_fatura?>">
							<table id="table5" width="490" border="0">
								<tr>
									<td width="153" >
									Sipariþ Durumu</td>
									<td width="349">
									<select size="1" name="s_durum" tabindex="1">
									<?=$durum_drop?>
									</select>
									</font></td>
								</tr>
								<tr>
									<td width="153" >
									Sipariþ Numarasý</td>
									<td width="349">
									<?=$s_sipno?>
									</font></td>
								</tr>
								<tr>
									<td width="153" >
									Ödeme Þekli</td>
									<td width="349">
									<?=$s_odeme?></td>
								</tr>
								<tr>
									<td width="153" >
									Sipariþ Tutarý</td>
									<td width="349"><?=$s_toplam?>
									YTL</td>
								</tr>
								<tr>
									<td width="153" >
									Sipariþ Tarihi</td>
									<td width="349">
									<?=$s_tarih?></td>
								</tr>
								<tr>
									<td width="153" >
									Teslimat Tarihi</td>
									<td width="349">
									<input tabIndex="2"  size="18" value="<?=$s_ttarih?>" name="s_ttarih"></td>
								</tr>
								<tr>
									<td colspan="2" >
									&nbsp;</td>
								</tr>
								<tr>
									<td colspan="2" >
									Müþteri Bilgileri (<input tabIndex="3" type="radio" <?=$gyes?> value="hidden" name="giz"> 
									Gizli Kalsýn </font>
									<input tabIndex="4" type="radio" <?=$gno?> value="visible" name="giz"> 
									Gizli Kalmasýn </font>) </td>
								</tr>
								<tr>
									<td width="153" >
									<span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Kullanýcý Adý</td>
									<td width="349">
									<?=$s_uye?></td>
								</tr>
								<tr>
									<td width="153" >
									<span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Ad Soyad</font></td>
									<td width="349"><?=$su_ad?></td>
								</tr>
								<tr>
									<td width="153" >
									<span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Adres</td>
									<td width="349"><?=$su_adres?></td>
								</tr>
								<tr>
									<td width="153" >
									<span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Þehir</td>
									<td width="349"><?=$su_sehir?></td>
								</tr>
								<tr>
									<td width="153" >
									<span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Ülke</td>
									<td width="349"><?=$su_ulke?></td>
								</tr>
								<tr>
									<td width="153" >
									<span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Telefon</td>
									<td width="349"><?=$su_tel?></td>
								</tr>
								<tr>
									<td width="153" >
									<span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>E-Mail</td>
									<td width="349"><?=$su_email?></td>
								</tr>
								<tr>
									<td colspan="2" >
									&nbsp;</td>
								</tr>
								<tr>
									<td colspan="2" >
									Alýcý Bilgileri</td>
								</tr>
								<tr>
									<td width="153" >
									<span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Ad Soyad</font></td>
									<td width="349">
									<input tabIndex="11"  size="27" value="<?=$sa_ad?>" name="sa_ad"></td>
								</tr>
								<tr>
									<td width="153" >
									<span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Adres</td>
									<td width="349">
									<input tabIndex="12"  size="41" value="<?=$sa_adres?>" name="sa_adres"></td>
								</tr>
								<tr>
									<td width="153" >
									<span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Þehir</td>
									<td width="349">
									<input tabIndex="13"  size="18" value="<?=$sa_sehir?>" name="sa_sehir"></td>
								</tr>
								<tr>
									<td width="153" >
									<span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Ülke</td>
									<td width="349">
									<input tabIndex="14"  size="18" value="<?=$sa_ulke?>" name="sa_ulke"></td>
								</tr>
								<tr>
									<td width="153" >
									<span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Telefon</td>
									<td width="349">
									<input tabIndex="15"  size="26" value="<?=$sa_tel?>" name="sa_tel"></td>
								</tr>
								<tr>
									<td width="153" >
									&nbsp;</td>
									<td width="349">
									&nbsp;</td>
								</tr>
								<tr>
									<td colspan="2" >
									Fatura Bilgileri</td>
								</tr>
								<tr>
									<td width="153" >
									<span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Fatura 
									Ünvaný</td>
									<td width="349">
									<input tabIndex="16"  size="41" value="<?=$sf_unvan?>" name="sf_unvan"></td>
								</tr>
								<tr>
									<td width="153" >
									<span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fatura </span>Adresi</td>
									<td width="349">
									<input tabIndex="17"  size="41" value="<?=$sf_adres?>" name="sf_adres"></td>
								</tr>
								<tr>
									<td width="153" >
									<span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vergi 
									Dairesi</span></td>
									<td width="349">
									<input tabIndex="18"  size="18" value="<?=$sf_vd?>" name="sf_vd"></td>
								</tr>
								<tr>
									<td width="153" >
									<span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>Vergi 
									Numarasý</td>
									<td width="349">
									<input tabIndex="19"  size="18" value="<?=$sf_vn?>" name="sf_vn"></td>
								</tr>
								<tr>
									<td width="153" >
									&nbsp;</td>
									<td width="349">
									&nbsp;</td>
								</tr>
								<tr>
									<td valign="top" width="153" >
									Ekstra Bilgiler</td>
									<td width="349" valign="top">
									<textarea rows="5" name="s_notes" cols="41" tabindex="20"><?=$s_notes?></textarea></td>
								</tr>
								<tr>
									<td width="153" >
									&nbsp;</td>
									<td width="349">
									<input type="submit" value="Sipariþi Güncelle" name="B1" tabIndex="55"></td>
								</tr>
								<tr>
									<td width="153" >
									&nbsp;</td>
									<td width="349">
									&nbsp;</td>
								</tr>
								<tr>
									<td width="153" >
									<font color="#808080">Müþteri IP Adresi</font></td>
									<td width="349">
									<font color="#808080"><?=$s_ip_adr?></font></td>
								</tr>
								<tr>
									<td width="153" >
									<font color="#808080">Müþteri IP Adresi 2</font></td>
									<td width="349">
									<font color="#808080"><?=$s_ip_adr2?></font></td>
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