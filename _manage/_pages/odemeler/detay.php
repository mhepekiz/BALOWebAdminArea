<?
$get_odeme_dets = mysql_query("select mid,adsoyad,adres,sehir,ulke,tel,ccnum,ccay,ccyil,cvv,sipno,tutar,auth,cc_not,tarih,ip from manuel_odemeler where id='$od_id'");
list($o_mid,$o_adsoyad,$o_adres,$o_sehir,$o_ulke,$o_tel,$o_ccnum,$o_ccay,$o_ccyil,$o_cvv,$o_sipno,$o_tutar,$o_auth,$o_cc_not,$o_tarih,$o_ip)=mysql_fetch_row($get_odeme_dets);

$get_user_o =mysql_query("select kullaniciadi from uyeler where id='$o_mid'");
list($o_user)=mysql_fetch_row($get_user_o);
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
										<font face="Arial" size="4">Ödeme 

										detaylarý - <?=$o_sipno?></font></td>
										<td nowrap>
										<a href="/admin/_manage/odemeler/main.php">Üst Seviye</a>&nbsp; &nbsp;&nbsp;</td>
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

<legend>Detaylar</legend>
<table border="0" width="100%" id="table12" cellspacing="0" cellpadding="2">
	<tr>
		<td nowrap valign="top">Kullanýcý Adý</td>
		<td valign="top">:</td>
		<td width="100%" valign="top"><?=$o_user?></td>
	</tr>
	<tr>
		<td nowrap valign="top">Ad Soyad</td>
		<td valign="top">:</td>
		<td width="100%" valign="top"><?=$o_adsoyad?></td>
	</tr>
	<tr>
		<td nowrap valign="top">Telefon</td>
		<td valign="top">:</td>
		<td width="100%" valign="top"><?=$o_tel?></td>
	</tr>
	<tr>
		<td nowrap valign="top">Adres</td>
		<td valign="top">:</td>
		<td width="100%" valign="top"><?=$o_adres?></td>
	</tr>
	<tr>
		<td nowrap valign="top">Þehir</td>
		<td valign="top">:</td>
		<td width="100%" valign="top"><?=$o_sehir?></td>
	</tr>
	<tr>
		<td nowrap valign="top">Ülke</td>
		<td valign="top">:</td>
		<td width="100%" valign="top"><?=$o_ulke?></td>
	</tr>
	<tr>
		<td nowrap valign="top">&nbsp;</td>
		<td valign="top">&nbsp;</td>
		<td width="100%" valign="top">&nbsp;</td>
	</tr>
	<tr>
		<td nowrap valign="top">Kredi Kartý Numarasý</td>
		<td valign="top">:</td>
		<td width="100%" valign="top"><?=$o_ccnum?></td>
	</tr>
	<tr>
		<td nowrap valign="top">Son Kullanma Tarihi</td>
		<td valign="top">:</td>
		<td width="100%" valign="top"><?=$o_ccay?>/<?=$o_ccyil?></td>
	</tr>
	<tr>
		<td nowrap valign="top">CVV Numarasý</td>
		<td valign="top">:</td>
		<td width="100%" valign="top"><?=$o_cvv?></td>
	</tr>
	<tr>
		<td nowrap valign="top">&nbsp;</td>
		<td valign="top">&nbsp;</td>
		<td width="100%" valign="top">&nbsp;</td>
	</tr>
	<tr>
		<td nowrap valign="top">Ödeme Tutarý</td>
		<td valign="top">:</td>
		<td width="100%" valign="top"><?=$o_tutar?>,- YTL</td>
	</tr>
	<tr>
		<td nowrap valign="top">Auth Code</td>
		<td valign="top">:</td>
		<td width="100%" valign="top"><?=$o_auth?></td>
	</tr>
	<tr>
		<td nowrap valign="top">Referans Numarasý</td>
		<td valign="top">:</td>
		<td width="100%" valign="top"><?=$o_sipno?></td>
	</tr>
	<tr>
		<td nowrap valign="top">Notlar</td>
		<td valign="top">:</td>
		<td width="100%" valign="top"><?=$o_cc_not?></td>
	</tr>
	<tr>
		<td nowrap valign="top">Tarih</td>
		<td valign="top">:</td>
		<td width="100%" valign="top"><?=$o_tarih?></td>
	</tr>
	<tr>
		<td nowrap valign="top">IP Adresi</td>
		<td valign="top">:</td>
		<td width="100%" valign="top"><?=$o_ip?></td>
	</tr>
</table>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
<div class="paging">
						<form name="kategoriekle" method="post" action="/admin/_manage/siparisler/guncelle.php">
							<input type="hidden" value="update" name="ac_t">
							<input type="hidden" value="<?=$sg_id?>" name="sg_id">
							<input type="hidden" name="s_sipno" value="<?=$s_sipno?>">
							<input type="hidden" name="s_alici" value="<?=$s_alici?>">
							<input type="hidden" name="s_fatura" value="<?=$s_fatura?>">
						</form>
</td></tr></table></fieldset>
</td></tr></table></td>
							</tr>
						</table>
						</td>
					</tr>
				</table>