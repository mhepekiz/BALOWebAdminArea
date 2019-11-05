<table border="0" width="100%" id="table7" cellspacing="0" cellpadding="0" height="100%">
					<tr>
						<td valign="top" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px"><!--Start Contents-->
						
												<table border="0" width="100%" id="table8" cellspacing="0" cellpadding="0">
							<tr>
								<td style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
								<img border="0" src="/admin/_media/title_spacer.gif" width="15" height="56" style="border: medium none"></td>
								<td width="100%" bgcolor="#FFFFFF" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">
								<font face="Arial" size="4">Ajanda Kayýtlarý</font></td>
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

<legend>Arama Formu</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
		<div class="paging">			


<form method="POST" action="/admin/_manage/ajanda/goruntule.php" name="showajanda">
  <table border="0" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="450" id="AutoNumber1">
    <tr>
      <td align="left" nowrap>Kullanýcý Adý</td>
      <td width="80%"><input type="text" name="user" size="38"></td>
    </tr>
    <tr>
      <td align="left" nowrap>Üst Kategori</td>
      <td width="80%">
							<select size="1" name="cat">
							<option value="all">Tüm Kategoriler</option>
<?
$get_cats = mysql_query("select id,ad from ajandakategori order by ad");
while(list($ak_id,$ak_ad)=mysql_fetch_row($get_cats)){
echo '<option value="'.$ak_id.'">'.$ak_ad.'</option>';
}
?>							
							</select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td width="80%"><input type="submit" value="Listele" name="B1"></td>
    </tr>
  </table>
  <input type="hidden" name="ac_t" value="add">
</form></td></tr></table></fieldset>
<br><br>
&nbsp;<fieldset>

<legend>Kategoriler</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
		<div class="paging">			


<a href="/admin/_manage/ajanda/goruntule.php">Hepsini Göster</a><table border="0" width="100%" id="table10" cellpadding="2" cellspacing="0">
	<tr>
		<td nowrap width="100%" bgcolor="#85ABEB"><b>Baþlýk</b></td>
		<td nowrap align="center" bgcolor="#B6CDF3">&nbsp;&nbsp;&nbsp;<b>Kategori</b>&nbsp;&nbsp;&nbsp;</td>
		<td nowrap align="center" bgcolor="#B6CDF3">&nbsp;&nbsp;&nbsp;<b>Hatýrlatma</b>&nbsp;&nbsp;&nbsp;</td>
		<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>Tarih</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>
		<td nowrap align="center" bgcolor="#DCE8FA"><span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;</span><b>Kullanýcý</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>
		<td nowrap align="center" bgcolor="#DCE8FA"><span lang="en">&nbsp;&nbsp;</span><b>Sil</b><span lang="en">&nbsp;&nbsp;</span></td>
	</tr>
<?	
if(!$cat){
$cat="all";
}
if(($user) && ($cat=="all")){
  $get_user_id = mysql_query("select id from uyeler where kullaniciadi='$user'");
  list($mid)=mysql_fetch_row($get_user_id);
  $newsq = "where mid='$mid' order by tarih";
} else if(($user) && ($cat!="all")) {
  $get_user_id = mysql_query("select id from uyeler where kullaniciadi='$user'");
  list($mid)=mysql_fetch_row($get_user_id);
  $newsq = "where mid='$mid' and kategori='$cat' order by tarih";
} else if((!$user) && ($cat!="all")){
  $newsq = "where kategori='$cat' order by tarih";
} else {
  $newsq = "order by tarih";
}

$hs = 0;

$count_ar = mysql_query("select count(*) from ajanda $newsq");
list($countitem)=mysql_fetch_row($count_ar);

if($countitem >="1"){

$geturl = '/admin/_manage/ajanda/goruntule.php?user='.$user.'&cat='.$cat.'';
	
$first=0;
$read=25;

if($page==""){ $page="1"; } // sayfa tanýmlý deðilse sayfa = 1

$prev = $page - 1;
$next = $page + 1;
$first = ($page-1) * $read; // hangi kayýttan baþlanarak $read adet kayýt okunacak
$pagetotal = $countitem / $read; // toplam sayfa sayýsý
$pagetotalround = round($pagetotal);

if($pagetotalround >= "$pagetotal"){ $totalpage=$pagetotalround; } else { $totalpage = $pagetotalround + 1; }




$get_ar = mysql_query("select id,mid,baslik,kategori,hatirlatma,tarih from ajanda $newsq limit $first,$read");
while(list($a_id,$a_mid,$a_baslik,$a_kategori,$a_reminder,$a_tarih)=mysql_fetch_row($get_ar)){
$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';

$get_akad = mysql_query("select ad from ajandakategori where id ='$a_kategori'");
list($akad)=mysql_fetch_row($get_akad);	

$get_user = mysql_query("select kullaniciadi from uyeler where id='$a_mid'");
list($member)=mysql_fetch_row($get_user);
echo '<tr>
		<td nowrap width="100%" bgcolor="'.$bgc.'">'.$a_baslik.'</td>
		<td nowrap align="center" bgcolor="'.$bgc.'">'.$akad.'</td>
		<td nowrap align="center" bgcolor="'.$bgc.'">'.$a_reminder.'</td>
		<td nowrap align="center" bgcolor="'.$bgc.'">'.$a_tarih.'</td>
		<td nowrap align="center" bgcolor="'.$bgc.'">'.$member.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center"><a href="/admin/_manage/ajanda/goruntule.php?ac_t=delete&rec='.$a_id.'"><img border="0" src="/admin/_media/delete.gif"></a></td>
	  </tr>';
$hs++;	
}	
} else {
echo '<tr>
		<td nowrap width="100%" bgcolor="'.$bgc.'" colspan="6">';
if(($user) && ($cat=="all")){
  echo "Yazdýðýnýz kullanýcýadýna ait ajanda kaydý bulunamadý...";
} else if(($user) && ($cat!="all")) {
  echo "Seçtiðiniz kategoride yazdýðýnýz kullanýcýadýna ait ajanda kaydý bulunamadý...";
} else if((!$user) && ($cat!="all")){
  echo "Seçtiðiniz kategoride ajanda kaydýbulunamadý...";
} else {
  echo "Sistemde ajanda kaydý bulunmamaktadýr...";
}
echo "</td></tr>";
}
?>
</table>
<?
if($countitem >="1"){
echo '<table id="table1" cellSpacing="0" cellPadding="0" width="98%" border="0" align="center">
<tr><td><p align="left"><b><font face="Verdana" color="#808080" size="1">Sayfalar&nbsp; :&nbsp; ';


if($page=="1"){
 echo '&lt;Önceki&nbsp; ';
} else {
 echo '<a href="'.$geturl.'&page='.$prev.'">&lt;Önceki&nbsp; </a>';
}


for ($i=1;$i<=$totalpage;$i++){
	if($i==$page){
	  echo '<font face="Verdana" size="1" color="#FF0000">'.$i.'&nbsp; </font>';
	} else {
	  echo '<a href="'.$geturl.'&page='.$i.'" class=main>'.$i.'</a>&nbsp; ';
	}
}

if($next > $totalpage){
  echo 'Sonraki&gt;';
} else {
  echo '<a href="'.$geturl.'&page='.$next.'">Sonraki&gt;</a>';
}

echo '</font></b></td></tr><tr><td>&nbsp;</td></tr></table>';
}
?>
</td></tr></table></fieldset>
</td></tr></table>&nbsp;</td>
							</tr>
						</table>
						</td>
					</tr>
				</table>