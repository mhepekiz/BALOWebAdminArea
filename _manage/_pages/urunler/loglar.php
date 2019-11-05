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
										<td style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
										<font face="Arial" size="4">Ýþlem 
										Tutanaklarý</font></td>
										<td style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
										&nbsp;</td>
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

<legend>Ýþlemler</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
<div class="paging">
<textarea rows="21" name="S1" cols="90">
<?
$get_logs = mysql_query("select proc,editor,tarih from urun_logs order by id desc limit 1000");
while(list($log_pr,$log_ed,$log_ta)=mysql_fetch_row($get_logs)){
echo "$log_pr...		$log_ed	$log_ta\n";
}
?>
</textarea>
	</td></tr></table></fieldset>
</td></tr></table></td>
							</tr>
						</table>
						</td>
					</tr>
				</table>