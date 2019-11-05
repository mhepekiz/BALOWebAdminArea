<?


	$toplam_haber = mysql_query("select count(*) from klist_haberler");
	list($t_haber_sayi) = mysql_fetch_row($toplam_haber);
	
	$bugun = date("Y-m-d");
	
	$bugun_haber = mysql_query("select count(*) from klist_haberler where zaman LIKE'%$bugun%'");
	list($b_haber_sayi) = mysql_fetch_row($bugun_haber);
	
		$toplam_yorum = mysql_query("select count(*) from klist_yorumlar");
		list($t_yorum) = mysql_fetch_row($toplam_yorum);
		
			$onay_bekleyen = mysql_query("select count(*) from klist_yorumlar where durum='off'");
			list($bekleyen_y) = mysql_fetch_row($onay_bekleyen);
			
			



?>

<table border="0" width="100%" id="table7" cellspacing="0" cellpadding="0" height="100%">
					<tr>
						<td valign="top" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px"><!--Start Contents-->
						
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
								<td>
								<table border="0" width="100%" id="table15" cellspacing="1">
	<tr>
		<td width="26%" rowspan="2" bgcolor="#EFEFEF">
<fieldset>

<legend><b><font face="Tahoma" style="font-size:11px" color="#FF0000">Sistem &#304;statistikleri
</font></b></legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0" id="table16"><tr><td>
<div class="paging">
<table border="0" id="table17" cellspacing="0" cellpadding="3" width="223">
	<tr>
    	<td align="left">
		<p align="left"><font face="Tahoma" style="font-size: 11px">Toplam Haber</font></td>
    	<td align="center" width="77">
		<font face="Tahoma" style="font-size:11px; font-weight:700"><?=$t_haber_sayi?></font></td>
	</tr>
	<tr>
		<td align="left">
		<font face="Tahoma" style="font-size: 11px">Toplam Yorum</font></td>
		<td align="center" width="77">
		<font face="Tahoma" style="font-size:11px; font-weight:700"><?=$t_yorum?></font></td>
	</tr>
	<tr>
		<td align="left">
		<font face="Tahoma" style="font-size: 11px">Bug&uuml;n Eklenen Haberler</font></td>
		<td align="center" width="77">
		<font face="Tahoma" style="font-size:11px; font-weight:700"><?=$b_haber_sayi?></font></td>
	</tr>
	<tr>
		<td align="left">
		<font face="Tahoma" style="font-size: 11px">Onay Bekleyen Yorumlar</font></td>
		<td align="center" width="77">
		<font face="Tahoma" style="font-size:11px; font-weight:700"><?=$bekleyen_y?></font></td>
	</tr>
	<tr>
		<td align="left">
		<font face="Tahoma" style="font-size: 11px">&nbsp;</font></td>
		<td align="center" width="77">
		<font face="Tahoma" style="font-size:11px; font-weight:700">&nbsp;</font>	</td>
	</tr>
	<tr>
		<td align="left">
		<font face="Tahoma" style="font-size: 11px">&nbsp;</font></td>
		<td align="center" width="77">
		<font face="Tahoma" style="font-size:11px; font-weight:700">&nbsp;</font></td>
	</tr>
    
    <?
	
	$editor_haber = mysql_query("select uname from editors");
	while(list($edi)=mysql_fetch_row($editor_haber)){
	
	
		$editorun = mysql_query("select count(*) from klist_haberler where editor='$edi' and zaman LIKE'%$bugun%'");
		list($sayisi) = mysql_fetch_row($editorun);
		
		$editorun_all = mysql_query("select count(*) from klist_haberler where editor='$edi'");
		list($sayisi_all) = mysql_fetch_row($editorun_all);
		
		echo'
	
	<tr>
		<td align="left">
		<font face="Tahoma" style="font-size: 11px">'.$edi.'</font></td>
		<td align="center" width="77">
		<span style="font-weight: 700">
		<font face="Tahoma" style="font-size: 11px">'.$sayisi.' ('.$sayisi_all.')</font></span></td>
	</tr>
	';
	
	}
	
	
	?>
</table>
</td></tr></table></fieldset></td>
		<td width="1%">&nbsp;</td>
		<td width="73%" rowspan="2">
        
        
        
        </td>
	</tr>
	<tr>
		<td width="1%">&nbsp;</td>
		</tr>
</table>



							  </td>
							</tr>
						</table>
						</td>
					</tr>
				</table>