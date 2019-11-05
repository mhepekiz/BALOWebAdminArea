<script>
function urun_a()
{
urun_ara.submit();
}

function confirmDelete(delUrl) {
  if (confirm("Bu ürünü silmek istediğinize emin misiniz?")) {
    document.location = delUrl;
  }
}

</script>
<?

$docroot = $DOCUMENT_ROOT;
$dbfile=$docroot."/admin/_include/mysql-conf.php";
include($dbfile);

//Connect to Database
connecttodb();

$me = "/admin/_manage/_pages/urunler/urunlistesi.php";
?>
<html>

<head>
<meta http-equiv="Content-Language" content="tr">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<title>AAS by GTECHNICS</title>
	<style>
	
	a.menu_left:link { text-decoration: none; color: #215DC6;}
	a.menu_left:visited { text-decoration: none; color: #215DC6; }
	a.menu_left:active { text-decoration: none; color: #215DC6; }
	a.menu_left:hover { text-decoration: underline; color: #598DE3; }
	
	body {
	font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-weight: normal;
	color: #000000;
  background-color: #f6f6f6; 
}

td, th, input, select, textarea {
	font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
}

a:link {
  color: #0240a3;
}

a:visited {
  color: #0240a3;
}

a:active {
  color: #000000;
}

img {
  border: none;
}

	</style>
</head>

<body topmargin="5" leftmargin="5" rightmargin="5" bottommargin="5" marginwidth="5" marginheight="5">
<?
$get_u_say = mysql_query("select count(*) from urunler");
list($urun_count)=mysql_fetch_row($get_u_say);


?>
<table border="0" width="100%" id="table1" cellpadding="2" cellspacing="1">
	<tr>
		<td colspan="7">Ürün Arama</td>
	</tr>
	<tr>
		<td colspan="7"><form method="POST" action="/admin/_manage/_pages/urunler/urunlistesi.php?operator=<?=$operator?>&thedocument=<?=$thedocument?>" name="urun_ara">
			<table border="0" width="100%" id="table11" cellspacing="0" cellpadding="0">
				<tr>
					<td nowrap><input type="text" name="q" size="20" value="<?=$q?>"><br>
					<input type="radio" value="KOD" checked name="S"><small>Kod</small>	<input type="radio" name="S" value="AD"><small>Ad</small>	<input type="radio" name="S" value="EDITOR"><small>Editör</small></td>
					<td nowrap valign="top"><span lang="en">&nbsp;</span><a href="javascript:urun_a();"><img border="0" src="/admin/_media/search.gif" width="16" height="16"> Ara</a></td>
					<td width="100%" valign="top">&nbsp;<span lang="en">&nbsp;&nbsp;&nbsp;</span><a href="/admin/_manage/_pages/urunler/urunlistesi.php?operator=<?=$operator?>&thedocument=<?=thedocument?>"><img border="0" src="/admin/_media/showall.gif" width="16" height="16"> 
					Hepsini Göster</a></td>
				</tr>
			</table>
			<input type="hidden" name="ac_t" value="search">
<? 

if(!$sort){ $sort="kod"; }
if(!$start_val){ $start="0"; } else { $start="$start_val"; }

$firstone = $start+1;
$lastone = $start+25;
if($lastone >= $urun_count){ $lastone=$urun_count; }
$search_pattern = "&q=$q&ac_t=search&S=$S";




if($ac_t=="search"){

	if(($q) && ($S=="KOD")){
	$prosq = "where kod LIKE '%$q%' order by $sort";
	} else if(($q) && ($S=="AD")){
	$prosq = "where urunadi LIKE '%$q%' order by $sort";
	} else if(($q) && ($S=="EDITOR")){
	$prosq = "where editor LIKE '%$q%' order by $sort";
	} else {
	$prosq = "order by $sort";
	}

    $query = "select id,kod,urunadi,tarih,editor from urunler $prosq limit $start,25";
    $query_search_count = "select count(*) from urunler $prosq";
} else {

    $query = "select id,kod,urunadi,tarih,editor from urunler order by $sort limit $start,25";

}



?>
	</form>
		</td>
	</tr>
	<tr>
		<td colspan="5">Sistem de yer alan ürünler aşağıdaki gibidir.<br>Üzerinde işlem yapmak istediğiniz ürünü belirlemek için satırın en sağındaki SEÇ linkine tıklamalısınız...
<?

if(!$q){
echo "<br><br>Sistemde toplam <b>$urun_count</b> ürün bulunmaktadır.";


echo "$firstone ile $lastone arasındaki ürünler görüntüleniyor...";
} else {
$su_say = mysql_query("$query_search_count");
list($u_s_count)=mysql_fetch_row($su_say);
echo "<br><br>Aramanız sonucunda <b>$u_s_count</b> ürün bulunmuştur";
}
?>


<br></td>
	</tr>
	<tr>
		<td nowrap bgcolor="#B6CDF3"><A HREF="<? echo "$me"."?operator="."$operator"."&sort=kod&start="."$start"."&thedocument=$thedocument$search_pattern"; ?>">KOD</a></td>
		<td nowrap width="100%" bgcolor="#85ABEB"><A HREF="<? echo "$me"."?operator="."$operator"."&sort=urunadi&start="."$start"."&thedocument=$thedocument$search_pattern"; ?>">Ürün Adı</a></td>
		<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en">&nbsp;<A HREF="<? echo "$me"."?operator="."$operator"."&sort=editor&start="."$start"."&thedocument=$thedocument$search_pattern"; ?>">Editor</a>&nbsp;</span></td>
		<td nowrap align="center" bgcolor="#B6CDF3"><span lang="en">&nbsp;&nbsp;&nbsp;</span><A HREF="<? echo "$me"."?operator="."$operator"."&sort=tarih&start="."$start"."&thedocument=$thedocument$search_pattern"; ?>">Tarih</a><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>
		<td nowrap align="center">
		<p align="center"><span lang="en">&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
	</tr>
<?

$get_uruns = mysql_query("$query");
while(list($u_id,$u_kod,$u_ad,$u_tarih,$u_editor)=mysql_fetch_row($get_uruns)){
$u_tarih = str_replace(" ","<br>",$u_tarih);
$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';
echo '
	<tr>
		<td bgcolor="'.$bgc.'" nowrap>'.$u_kod.'</td>
		<td bgcolor="'.$bgc.'" nowrap width="100%">'.$u_ad.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">'.$u_editor.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">'.$u_tarih.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center"><a href="javascript:window.opener.document.'.$thedocument.'.'.$operator.'.value=\''.$u_kod.'\';window.close();">SEÇ</a></td>
	</tr>';
}
?>
<?
if(!$q){
?>
<?
$page_reel = $urun_count / 25;
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

$on_link = "$me"."?operator="."$operator"."&sort=kod&start_val="."$onceki_val"."&thedocument=$thedocument$search_pattern";
$sn_link = "$me"."?operator="."$operator"."&sort=kod&start_val="."$sonraki_val"."&thedocument=$thedocument$search_pattern";

?>
    <tr><td nowrap colspan="5"><p align="center">
<? if($onceki != "false"){ echo '<a href="'.$on_link.'">&lt;&lt; Önceki Sayfa</a>'; } else { echo '<font color="#808080">&lt;&lt; Önceki Sayfa</font>'; } ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<? if($sonraki != "false"){ echo '<a href="'.$sn_link.'">Sonraki Sayfa &gt;&gt;</a>'; } else { echo '<font color="#808080">Sonraki Sayfa &gt;&gt;</font>'; } ?>
	</td></tr>
<?
}
?>
</table>
</body>
</html>
<? mysql_close(); ?>