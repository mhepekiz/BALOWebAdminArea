<script>

function haber_a()

{

uye_ara.submit();

}

</script>


<table border="0" width="100%" id="table7" cellspacing="0" cellpadding="0" height="100%">

					<tr>

						<td valign="top" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px"><!--Start Contents-->

						

						</td>

					</tr>

					
					<tr>

						<td valign="top" height="100%" bgcolor="#F9F8F8" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">

						<table border="0" width="100%" id="table9" cellspacing="0" cellpadding="4">

							<tr>

								<td><table width="100%" cellspacing="0" cellpadding="0" border="0"><tr><td>

&nbsp;<fieldset>

<legend>Sistemdeki Üyeler</legend>

<table width="100%" cellspacing="1" cellpadding="2" border="0"><tr><td>

		<div class="paging">			

<table border="0" width="100%" id="table10" cellpadding="2" cellspacing="1">

	<tr>

		<td nowrap colspan="6">Mevcut üyeler içinde arama yapabilirsiniz...</td>

	</tr>

	<tr>

		<td nowrap colspan="6">

		<form method="POST" action="/admin/_manage/uyeler/uyeler.php" name="uye_ara">

			<table border="0" width="100%" id="table11" cellspacing="1" cellpadding="0">

				<tr>

					<td><input type="text" name="q" size="20" value="<?=$q?>"></td>

					<td nowrap><span lang="en">&nbsp;</span><a href="javascript:haber_a();"><img border="0" src="/admin/_media/search.gif" width="16" height="16"> 

					Ara</a></td>

					<td width="100%">&nbsp;<span lang="en">&nbsp;&nbsp;&nbsp;</span><a href="/admin/_manage/uyeler/uyeler.php"><img border="0" src="/admin/_media/showall.gif" width="16" height="16"> 

					Hepsini Göster</a></td>

				</tr>

			</table>

			<input type="hidden" name="ac_t" value="search">

		</td></form>

	</tr>

	<tr>

		<td nowrap width="100%" bgcolor="#FF6C00"><b>Ad Soyad</b></td>
		
		
		
		
		
		<td nowrap align="center" bgcolor="#FF9000"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>Email</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>
		
		
		
		
		
		<td nowrap align="center" bgcolor="#FFAE00"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>Rumuz</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>
		
		<td nowrap align="center" bgcolor="#FCB51D"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>St</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>

		<td nowrap align="center" bgcolor="#FFBE32"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>Onaylayan</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>

		<td nowrap align="center" bgcolor="#FFC446"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>Eklenme 
		Zamaný</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>
		<td nowrap align="center"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>Sil</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>



<?
if(($yet_tip=="151")||($yet_tip=="5")){
									
										echo'			

		<td nowrap align="center">

		<p align="center"><span lang="en">&nbsp;&nbsp;</span><b>Sil</b><span lang="en">&nbsp;&nbsp;</span></td>'; } ?>

	</tr>

<?

if($q){

$newsq = "where name LIKE '%$q%' order by id desc";

} else {

$newsq = "order by id desc limit 50";

}

$hs = 0;

$get_users = mysql_query("select id,name,email,uname,durum,sehir,dogumt,zaman,onaylayan from klist_users $newsq");

while(list($hid,$memname,$mememail,$memuname,$memdurum,$memsehir,$memdt,$memzaman,$memonay)=mysql_fetch_row($get_users)){

$hbaslik = str_replace($q, "<font color='blue'>$q</font>", $hbaslik);

$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';

		if($memdurum=="off"){ $statimage = "/admin/_media/enable.gif"; $newdurum="on"; } else { $statimage = "/admin/_media/disable.gif"; $newdurum="off";}
		
		
									$authxx = mysql_query("select yetki from editors where id='$my_eid'");
									list($my_auth)=mysql_fetch_row($authxx);

								if($my_auth!="151"){ $mememail="*****************"; }



		
	echo'	<tr>

		<td bgcolor="'.$bgc.'" nowrap width="100%">'.$memname.'</td>
		<td bgcolor="'.$bgc.'" nowrap width="5%">'.$mememail.'</td>
		<td bgcolor="'.$bgc.'" nowrap width="5%">'.$memuname.'</td>

		<td bgcolor="'.$bgc.'" nowrap align="center"><a href="/admin/_manage/uyeler/uyeler.php?uyedurum='.$newdurum.'&memid='.$hid.'&ac_t=changestat"><img src="'.$statimage.'" border="0"></a></td>

		<td bgcolor="'.$bgc.'" nowrap align="center">'.$memonay.'</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">'.$memzaman.'</td>

				
		
		<td bgcolor="'.$bgc.'" nowrap align="center"><a href="/admin/_manage/uyeler/uyeler.php?ac_t=del&remhid='.$hid.'"><img src="/admin/_media/delete_yeni.gif" border="0"></a></td> 
	</tr>'; 



$hs = $hs+1;




}
if(($hs=="0") && ($q)){

echo '<tr>

		<td bgcolor="'.$bgc.'" nowrap width="100%">Aramanýz sonucunda kayýt bulunamamýþtýr.</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>

	</tr>';

} else if(($hs=="0") && ($q=="")){

echo '<tr>

		<td bgcolor="'.$bgc.'" nowrap width="100%">Sistemde kayýtlý üye bulunmamaktadýr.</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>

	</tr>';

}

?>

</table>

</td></tr></table></fieldset>

</td></tr></table>&nbsp;</td>

							</tr>

						</table>

						</td>

					</tr>

				</table>