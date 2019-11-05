<?
if($my_eid=="1"){
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
										<td >
										<font face="Arial" size="4">Editör 
										Ekle</font></td>
										<td >
										<p align="right">
										<a href="/admin/_manage/admin/main.php">
										Üst Seviye</a>&nbsp;&nbsp;</td>
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

<legend>Editor Ekleme Formu</legend>
<table border="0" cellpadding="0" cellspacing="0" width="100%" id="table1">
	<tr>
		<td>Aþaðýdaki formu kullanarak editor ekleyebilirsiniz</td>
	</tr>
	<tr>
		<td>
		<form method="POST" action="/admin/_manage/admin/ekle.php">
			<table border="0" cellpadding="2" cellspacing="0" width="500" id="table2">
				<tr>
					<td nowrap>Ad Soyad</td>
					<td>:</td>
					<td width="100%"><input type="text" name="admin_name" size="20" value="<?=$admin_name?>"></td>
				</tr>
				<tr>
					<td nowrap>Email Adresi</td>
					<td>:</td>
					<td width="100%"><input type="text" name="admin_email" size="20" value="<?=$admin_email?>"></td>
				</tr>
				<tr>
					<td nowrap>Kullanýcý adý 
					</td>
					<td>:</td>
					<td width="100%"><input type="text"  name="admin_uname" size="13" value="<?=$admin_uname?>"></td>
				</tr>
				<tr>
					<td nowrap>Þifre</td>
					<td>:</td>
					<td width="100%"><input type="password" name="pass" size="13" value="<?=$admin_pass?>"></td>
				</tr>
				<tr>
					<td nowrap>Þifre Onay</td>
					<td>:</td>
					<td width="100%"><input type="password" name="pass2" size="13" value="<?=$admin_pass?>"></td>
				</tr>
				<tr>
					<td nowrap>&nbsp;</td>
					<td>&nbsp;</td>
					<td width="100%">
					<input type="submit" value="Ekle" name="B1"></td>
				</tr>
			</table>
			<input type="hidden" name="ac_t" value="add">
		</form>
		</td>
	</tr>
</table>
</fieldset>
</td></tr></table></td>
							</tr>
						</table>
						</td>
					</tr>
				</table>
<?
} else {
?>
Bu alana eriþim yetkiniz bulunmamaktadýr. IP adresini (<?=$REMOTE_ADDR?>) kayýt edilmiþtir.
<?
}
?>