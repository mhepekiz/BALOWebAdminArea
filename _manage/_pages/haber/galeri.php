<script>
function confirmDelete(delUrl) {
  if (confirm("Bu resmi silmek istediðinize emin misiniz?")) {
    document.location = delUrl;
  }
}

</script>
<fieldset>

<legend> Aþaðýdaki Haber Galerisine Fotoðraf Ekliyorsunuz </legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr>
	<td width="25%">
<div class="paging">
<? $haberbak = mysql_query("select id, baslik from klist_haberler where id='$remhid'");
   list($habid, $habbas)=mysql_fetch_row($haberbak); $habbas = str_replace("<br>","&nbsp;",$habbas);?><?=$habbas?></td></tr></table></fieldset>
<?
if($remhid){
?>
<br><br>
<fieldset>
<legend>Fotoðraf Ekleme</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>


<table border="0" width="100%" id="table13" cellspacing="0" cellpadding="2">

	<tr>
		<td width="22%">
	      <form method="POST" enctype="multipart/form-data" action="/admin/_manage/haber/galeri.php">
      <input type="hidden" name="ac_t" value="upload">
	  <input type="hidden" name="pro_d" value="<?=$remhid?>">
      	</td>
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
$get_pics = mysql_query("select id,haberid,foto_b,resimalti from klist_haber_galeri where haberid ='$remhid'");

while(list($rid,$haberim,$resim_1,$resim6)=mysql_fetch_row($get_pics)){
$res[$ir]=$rid;
$r_tarih = str_replace(" ","<br>",$r_tarih);
$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';
Echo '			<tr>
				<td noWrap width="100%" bgColor="'.$bgc.'"><img border="0" src="'.$resim_1.'"></td>
				
				<td noWrap align="middle" bgColor="'.$bgc.'"><span lang="en"><font style="FONT-SIZE: 4pt">&nbsp;</font></span>'.$resim6.'</td>
				<td noWrap align="middle" bgColor="'.$bgc.'"><a href="javascript:confirmDelete(\'/admin/_manage/haber/galeri.php?ac_t=delete&remhid='.$remhid.'&pro_d='.$pro_d.'&resim='.$rid.'&urun='.$u_id.'\');">
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