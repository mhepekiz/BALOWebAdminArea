<script>
function confirmDelete(delUrl) {
  if (confirm("Bu resmi silmek istediðinize emin misiniz?")) {
    document.location = delUrl;
  }
}

</script>
<fieldset>

<legend>Ýþlemler</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr>
	<td width="25%">
<div class="paging">
<table border="0" id="table14" cellspacing="0" cellpadding="3" width="400">
	<tr>
		<td align="center" width="25%">
								<font face="Tahoma" style="font-size:11px">
								<a href="/admin/_manage/mm/fotogaleriekle.php">
								<img border="0" src="/admin/_media/dosya_ekle.gif"></a></font></td>
		<td align="center" width="25%">
		<a href="/admin/_manage/haber/kategoriekle.php">
		<img border="0" src="/admin/_media/dosya_ekle.gif"></a></td>
		<td align="center" width="25%">
								<font face="Tahoma" style="font-size:11px">
								<a href="/admin/_manage/mm/videogaleriekle.php">
								<img border="0" src="/admin/_media/dosya_ekle.gif"></a></font></td>
		<td align="center" width="25%">
		<a href="/admin/_manage/mm/videoekle.php">
		<img border="0" src="/admin/_media/dosya_ekle.gif"></a></td>
	</tr>
	<tr>
		<td align="center" width="25%">
		<font style="font-size:11px">
		<a href="/admin/_manage/mm/fotogaleriekle.php">Foto Galeri Ekle</a></font></td>
		<td align="center" width="25%">	
		<font style="font-size:11px"><a href="/admin/_manage/mm/fotoekle.php">Fotoðraf Ekle</a></font></td>
		<td align="center" width="25%">	
		<font style="font-size:11px">
		<a href="/admin/_manage/mm/videogaleriekle.php">Video Galeri Ekle</a></font></td>
		<td align="center" width="25%">	
		<font style="font-size:11px"><a href="/admin/_manage/mm/videoekle.php">Video Ekle</a></font></td>
	</tr>
	<tr>
		<td align="center" width="25%">&nbsp;</td>
		<td align="center" width="25%">&nbsp;</td>
		<td align="center" width="25%">&nbsp;</td>
		<td align="center" width="25%">&nbsp;</td>
	</tr>
</table>
</td></tr></table></fieldset><fieldset>

<legend>Galeri Seçimi</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
<div class="paging">
<form method="POST" action="/admin/_manage/mm/fotoekle.php" name="urun_ozellik_secim">
	<table border="0" width="100%" id="table12" cellspacing="0" cellpadding="0">
		<tr>
			<td>Fotoðraf eklemek istediðiniz galeriyi seçiniz.</td>
		</tr>
		<tr>
			<td><select size="1" name="pro_d">
			<?
				$get_cars = mysql_query("select id,baslik from klist_fgaleri order by baslik");
				while(list($gal_id,$gal_ad)=mysql_fetch_row($get_cars)){
				  echo "<option value=$gal_id>$gal_ad</option>";
				}
			?>
			</select>
			<input type="submit" value="SEÇ" name="B1"></td>
		</tr></form>
	</table>
</td></tr></table></fieldset>
<?
if($pro_d){
?>
<br><br>
<fieldset>
<legend>Fotoðraf Ekleme</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>


<table border="0" width="100%" id="table13" cellspacing="0" cellpadding="2">

	<tr>
		<td width="22%">
	      <form method="POST" enctype="multipart/form-data" action="/admin/_manage/mm/fotoekle.php">
      <input type="hidden" name="ac_t" value="upload">
	  <input type="hidden" name="pro_d" value="<?=$pro_d?>">
      	</td>
	</tr>

	<tr>
		<td width="22%">
	      Anahtar Kelimeler
		</td>
		<td width="78%">
	      <input type="text" name="anahtarlar" size="70"></td>
	</tr>

	<tr>
		<td width="22%">
	      Resimaltý
		</td>
		<td width="78%">
	      <input type="text" name="resimalti" size="70"></td>
	</tr>

	<tr>
		<td width="22%">
	      Fotoðraf
		</td>
		<td width="78%">
      <input type="file" name="filename" size="22"></td>
	</tr>

	<tr>
		<td width="22%">
	      &nbsp;</td>
		<td width="78%">
	      &nbsp;</td>
	</tr>

	<tr>
		<td width="22%">
	      &nbsp;</td>
		<td width="78%">


      
      
      <input type="submit" value="Fotoðraf Ekle" name="B2" style="font-size: 10px"></td></form>
	</tr>
	<tr>
		<td colspan="2"><hr color="#000000" size="1"></td>
	</tr>
	<tr>
		<td colspan="2">Mevcut Fotoðraflar</td>
	</tr>
	<tr>
		<td colspan="2">

		<table id="table1" cellSpacing="1" cellPadding="2" width="100%" border="0">
			<tr>
				<td noWrap width="100%" bgColor="#85abeb">
				Resim</td>
				<td noWrap align="middle" bgColor="#dce8fa">
				<span lang="en-us">Resimaltý</span></td>
				<td noWrap align="middle">
				<p align="center"><span lang="en">&nbsp;&nbsp;</span>Sil<span lang="en">&nbsp;&nbsp;</span></td>
			</tr>
<?
$ir = 0;
$get_pics = mysql_query("select id,galeriid,resimalti,resim_2 from klist_fotolar where galeriid ='$pro_d'");

while(list($rid,$galerim,$resim6,$resim_1)=mysql_fetch_row($get_pics)){
$res[$ir]=$rid;
$r_tarih = str_replace(" ","<br>",$r_tarih);
$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';
Echo '			<tr>
				<td noWrap width="100%" bgColor="'.$bgc.'"><img border="0" src="'.$resim_1.'"></td>
				
				<td noWrap align="middle" bgColor="'.$bgc.'"><span lang="en"><font style="FONT-SIZE: 4pt">&nbsp;</font></span>'.$resim6.'</td>
				<td noWrap align="middle" bgColor="'.$bgc.'"><a href="javascript:confirmDelete(\'/admin/_manage/mm/fotoekle.php?ac_t=delete&pro_d='.$pro_d.'&resim='.$rid.'&urun='.$u_id.'\');">
				<img alt="Ürünü Sil" src="/admin/_media/delete.gif" border="0"></a></td>
			</tr>';
}
?>
		</table>

		</td>
	</tr>
</table>




			
</table>





			
<?
}
?>