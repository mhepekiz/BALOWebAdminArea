<p><font face="Arial" size="4"><b>Üye Listesi<br>
</b></font><font face="Arial" size="2">Aþaðýda site üyelerinin listesini 
bulabilirsiniz.</font></p>
<table border="0" cellpadding="2" cellspacing="2" style="border-collapse: collapse" bordercolor="#111111" width="680" id="AutoNumber1">
  <tr>
    <td bgcolor="#000000" nowrap><b><font face="Arial" size="2" color="#FFFFFF">
    Ad Soyad</font></b></td>
    <td bgcolor="#000000"><b><font face="Arial" size="2" color="#FFFFFF">
    Kullanýcý Adý</font></b></td>
    <td bgcolor="#000000"><b><font face="Arial" size="2" color="#FFFFFF">Email 
    Adresi</font></b></td>
    <td bgcolor="#000000"><b><font face="Arial" size="2" color="#FFFFFF">Telefon</font></b></td>
    <td bgcolor="#000000" align="center" nowrap><b>
    <font face="Arial" size="2" color="#FFFFFF"><table border="0" cellpadding="2" cellspacing="0" id="table1">
	<tr>
		<td><b><font size="1" face="Arial" color="white">SK</font></b></td>
		<td><b><font size="1" face="Arial" color="white">BY</font></b></td>
		<td><b><font size="1" face="Arial" color="white">SB</font></b></td>
	</tr>
</table></font></b></td>
    <td bgcolor="#000000" align="center">&nbsp;</td>
  </tr>
<?
$get_uyes = mysql_query("select id,kullaniciadi,email,adsoyad,tel,seviye from uyeler order by id desc");
while(list($uye_id,$kullaniciadi,$email,$adsoyad,$tel,$seviye)=mysql_fetch_row($get_uyes)){
$tablecolor = (($tablecolor == '#F3F3F3'))? '#FFFFFF' : '#F3F3F3';

if($seviye=="0"){
	$ski = "green_point.gif";
	$byi = "grey_point.gif";
	$sbi = "grey_point.gif";
} else if($seviye=="1"){
	$ski = "grey_point.gif";
	$byi = "green_point.gif";
	$sbi = "grey_point.gif";
} else if($seviye=="2"){
	$ski = "grey_point.gif";
	$byi = "grey_point.gif";
	$sbi = "green_point.gif";
}

echo '
  <tr>
    <td bgcolor="'.$tablecolor.'" nowrap><font face="Verdana" size="1">'.$adsoyad.'</font></td>
    <td bgcolor="'.$tablecolor.'"><font face="Verdana" size="1">'.$kullaniciadi.'</font></td>
    <td bgcolor="'.$tablecolor.'"><font face="Verdana" size="1">'.$email.'</font></td>
    <td bgcolor="'.$tablecolor.'"><font face="Verdana" size="1">'.$tel.'</font></td>
    <td bgcolor="'.$tablecolor.'" align="center" nowrap><font face="Verdana" size="1"><table border="0" cellpadding="2" cellspacing="0" id="table1">
	<tr>
		<td><a href="/admin/_manage/uyeler/goruntule.php?ac_t=seviye&member='.$uye_id.'&seviye=0">
		<img border="0" src="/admin/_manage/_media/'.$ski.'" width="16" height="16"></a></td>
		<td><a href="/admin/_manage/uyeler/goruntule.php?ac_t=seviye&member='.$uye_id.'&seviye=1">
		<img border="0" src="/admin/_manage/_media/'.$byi.'" width="16" height="16"></a></td>
		<td><a href="/admin/_manage/uyeler/goruntule.php?ac_t=seviye&member='.$uye_id.'&seviye=2">
		<img border="0" src="/admin/_manage/_media/'.$sbi.'" width="16" height="16"></a></td>
	</tr>
</table></font></td>
    <td bgcolor="'.$tablecolor.'" align="center"><p align="center"><font face="Verdana" size="1"><a href="#" onClick="window.open(\'/admin/_manage/uyeler/detaylar.php?uye_id='.$uye_id.'\',\'400L\',\'toolbar=no,width=640,height=500,left=100,top=100,status=no,scrollbars=yes,resize=no\');return false">Detaylar</a> | 
    <a href="/admin/_manage/uyeler/goruntule.php?ac_t=del&uye_id='.$uye_id.'">Sil</a></font></td>
  </tr>';
}
?>
</table>