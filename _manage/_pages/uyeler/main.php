<script>
function musteri_a()
{
musteri_ara.submit();
}

function confirmDelete(delUrl) {
  if (confirm("Bu müþteri hesabýný silmek istediðinize emin misiniz?")) {
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
										<td >
										<font face="Arial" size="4">Müþteri 
										Yönetimi</font></td>
										<td >
										&nbsp;</td>
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

<legend>Ýþlemler</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
<div class="paging">
<table border="0" id="table12" cellspacing="0" cellpadding="3" width="160">
	<tr>
		<td align="center" ><img border="0" src="/admin/_media/iko_update.gif"></td>
    	<td align="center"><img border="0" src="/admin/_media/iko_logs.gif"></td>
	</tr>
	<tr>
		<td align="center">
		<a href="/admin/_manage/uyeler/guncelle.php">Müþteri Güncelle</a></td>
		<td align="center"><a href="/admin/_manage/uyeler/loglar.php">Ýþlem Tutanaklarý</a></td>
	</tr>
</table>
</td></tr></table></fieldset>
<br><br>
<fieldset>
<legend>Müþteriler</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>


<table border="0" width="100%" id="table13" cellspacing="0" cellpadding="2">
	<tr>
		<td><form method="POST" action="/admin/_manage/uyeler/main.php" name="musteri_ara">
			<table border="0" width="100%" id="table11" cellspacing="0" cellpadding="0">
				<tr>
					<td><input type="text" name="q" size="20" value="<?=$q?>"></td>
					<td nowrap valign="top"><span lang="en">&nbsp;</span><a href="javascript:musteri_a();"><img border="0" src="/admin/_media/search.gif" width="16" height="16"> Ara</a></td>
					<td width="100%" valign="top">&nbsp;<span lang="en">&nbsp;&nbsp;&nbsp;</span><a href="/admin/_manage/uyeler/main.php"><img border="0" src="/admin/_media/showall.gif" width="16" height="16"> 
					Hepsini Göster</a></td>
				</tr>
				<tr>
					<td colspan="3">
					<input type="radio" value="USER" checked name="S"><small>Kullanýcý adý</small></font>
					<input type="radio" name="S" value="NAME"><small>Ad Soyad</small></td>
				</tr>
			</table>
			<input type="hidden" name="ac_t" value="search">
	</td></form>
	</tr>
	<tr>
		<td>
<?

if(!$start_val){ $start="0"; } else { $start="$start_val"; }




if($ac_t=="search"){

	if(($q) && ($S=="USER")){
	  $prosq = "where kullaniciadi LIKE '%$q%' order by kullaniciadi";
	} else if(($q) && ($S=="NAME")){
	  $prosq = "where adsoyad LIKE '%$q%' order by adsoyad";
	} else {
	  $prosq = "order by id DESC";
	}
	
    $query = "select id,kullaniciadi,adsoyad,email,durum,tarih from uyeler $prosq";
    $query_search_count = "select count(*) from uyeler $prosq";

	$su_say = mysql_query("$query_search_count");
	list($u_s_count)=mysql_fetch_row($su_say);
} else {

    $query = "select id,kullaniciadi,adsoyad,email,gsm,durum,tarih from uyeler order by id DESC limit $start,25";

}

$get_u_say = mysql_query("select count(*) from uyeler");
list($uye_count)=mysql_fetch_row($get_u_say);

$firstone = $start+1;
$lastone = $start+25;
if($lastone >= $uye_count){ $lastone=$uye_count; }


if(!$q){
$mess_ = "Sistem de yer alan üyeler aþaðýdaki gibidir.<br>Sistemde toplam $uye_count üye bulunmaktadýr. $firstone ile $lastone arasýndaki üyeler görüntüleniyor.";
} else {
$search_pattern = "&q=$q&ac_t=search&S=$S";
$mess_ = "Aramanýz sonucunda $u_s_count üye bulunmuþtur. ";
}

echo "$mess_";
?>
<table border="0" width="100%" id="table15" cellpadding="2" cellspacing="1">
	<tr>
		<td nowrap bgcolor="#B6CDF3">Kullanýcý Adý</td>
		<td nowrap width="100%" bgcolor="#85ABEB">Ad Soyad</td>
				<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en">&nbsp;Email 
		Adresi</span></td>
		<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en">&nbsp;GSM</span></td>
		<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en">&nbsp;&nbsp;&nbsp;</span>Tarih<span lang="en">&nbsp;&nbsp;&nbsp;</span></td>
		<td nowrap align="center" bgcolor="#DCE8FA"><span lang="en-us">PM</span></td>
		<td nowrap align="center" bgcolor="#DCE8FA"><span lang="en-us">Ýþlemler</span></td>
		<td nowrap align="center">
		<p align="center"><span lang="en">&nbsp;&nbsp;</span>Sil<span lang="en">&nbsp;&nbsp;</span></td>
	</tr>

<?
$get_uyes = mysql_query("$query");
while(list($uy_id,$uy_user,$uy_name,$uy_mail,$uy_gsm,$uy_durum,$uy_tarih)=mysql_fetch_row($get_uyes)){
$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';

echo '
	<tr>
		<td bgcolor="'.$bgc.'" nowrap>'.$uy_user.'</td>
		<td bgcolor="'.$bgc.'" nowrap width="100%">'.$uy_name.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center"><a href="mailto:'.$uy_mail.'">'.$uy_mail.'</a></td>
		<td bgcolor="'.$bgc.'" nowrap align="center">'.$uy_gsm.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">'.$uy_tarih.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;<a href="/admin/_manage/uyeler/mesaj.php?ac_t=addmsg&user='.$uy_id.'"><img border="0" src="/admin/_media/showall.gif" alt="Mesaj Gönder"></a></td>
		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;<a href="/admin/_manage/uyeler/goster.php?user='.$uy_user.'&uyeid='.$uy_id.'&start_val='.$start_val.'"><img border="0" src="/admin/_media/sml_iko_properties.gif" alt="Durum Deðiþtirin"></a>&nbsp;&nbsp;<a href="/admin/_manage/uyeler/main.php?ac_t=durum&user='.$uy_id.'&durum='.$uy_durum.'&start_val='.$start_val.'"><img border="0" src="/admin/_media/sml_iko_'.$uy_durum.'.gif" alt="Durum Deðiþtirin"></a>&nbsp;&nbsp;<a href="/admin/_manage/uyeler/guncelle.php?user='.$uy_user.'"><img border="0" src="/admin/_media/sml_iko_update.gif" alt="Bilgileri Güncelleyin"></a>&nbsp;</td>
		<td bgcolor="'.$bgc.'" nowrap align="center"><a href="javascript:confirmDelete(\'/admin/_manage/uyeler/main.php?ac_t=delete&user='.$uy_id.'&start_val='.$start_val.'\');"><img border="0" src="/admin/_media/delete.gif"></a></td>
	</tr>
	';
}
?>
</table>


		</td>
	</tr>
	<tr>
		<td align="center">


<?
if(!$q){

$page_reel = $uye_count / 25;
$page_tam = round($page_reel);

if($page_tam > $page_reel){
$page = $page_tam;
} else if($page_tam < $page_reel){
$page = $page_tam + 1;
} else if($page_tam == $page_reel){
$page = $page_tam;
}

$c_o = $start / 25;
if($c_o < 1){
$onceki = "false";
}

$c_o = $start / 25;
$c_o = $c_o +1;
if($c_o >= $page){
$sonraki = "false";
}

$sonraki_val = $start_val + 25;
$onceki_val = $start_val -25;

$on_link = "/admin/_manage/uyeler/main.php"."?start_val="."$onceki_val"."$search_pattern";
$sn_link = "/admin/_manage/uyeler/main.php"."?start_val="."$sonraki_val"."$search_pattern";
 if($onceki != "false"){ echo '<a href="'.$on_link.'">&lt;&lt; Önceki Sayfa</a>'; } else { echo '<font color="#808080">&lt;&lt; Önceki Sayfa</font>'; } ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<? if($sonraki != "false"){ echo '<a href="'.$sn_link.'">Sonraki Sayfa &gt;&gt;</a>'; } else { echo '<font color="#808080">Sonraki Sayfa &gt;&gt;</font>'; } ?>

<?
}
?>



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