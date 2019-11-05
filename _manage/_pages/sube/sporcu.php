
<fieldset>

<legend>Þube Seçimi</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
<div class="paging">
<form method="POST" action="/admin/_manage/sube/sporcu.php" name="urun_ozellik_secim">
	<table border="0" width="100%" id="table12" cellspacing="0" cellpadding="0">
		<tr>
			<td>Sporcu eklemek istediðiniz þubeyi seçiniz.</td>
		</tr>
		<tr>
			<td><select size="1" name="pro_d">
			<?
				$get_cars = mysql_query("select id,sube from klist_sube order by sube");
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
<legend>Sporcu Ekleme</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>


<table border="0" width="100%" id="table13" cellspacing="0" cellpadding="2">

	<tr>
		<td width="22%">
	      <form name="demoform" method="POST" enctype="multipart/form-data" action="/admin/_manage/sube/sporcu.php">
      <input type="hidden" name="ac_t" value="addplayer">
	  <input type="hidden" name="pro_d" value="<?=$pro_d?>">
      	</td>
	</tr>

	<tr>
		<td width="22%">
	      Ad Soyad</td>
		<td width="78%">
	      <input type="text" name="adsoyad" size="70"></td>
	</tr>

	<tr>
		<td width="22%">
	      Doðum Tarihi
		</td>
		<td width="78%">
	      		
				<input name="dc" value="" size="11"><a href="javascript:void(0)" onclick="if(self.gfPop)gfPop.fPopCalendar(document.demoform.dc);return false;" ><img class="PopcalTrigger" align="absmiddle" src="/HelloWorld/calbtn.gif" width="34" height="22" border="0" alt=""></a>
		<iframe width=174 height=189 name="I1" id="gToday:normal:agenda.js" src="/HelloWorld/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>

		</td>
	</tr>

	<tr>
		<td width="22%">
	      Boy Kilo
		</td>
		<td width="78%">
	      <input type="text" name="boykilo" size="30"></td>
	</tr>

	<tr>
		<td width="22%">
	      Mevki</td>
		<td width="78%">
	      <input type="text" name="mevki" size="30"></td>
	</tr>

	<tr>
		<td width="22%">
	      Eski Kulübü</td>
		<td width="78%">
	      <input type="text" name="eskikulup" size="30"></td>
	</tr>

	<tr>
		<td width="22%">
	      Notlar</td>
		<td width="78%">
      <textarea rows="2" name="notlar" cols="20"></textarea></td>
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


      
      
      <input type="submit" value="Sporcu Ekle" name="B2" style="font-size: 10px"></td></form>
	</tr>
	<tr>
		<td colspan="2"><hr color="#000000" size="1"></td>
	</tr>
	<tr>
		<td colspan="2">Bu þubeye kayýtlý sporcular</td>
	</tr>
	<tr>
		<td colspan="2">

		<table id="table1" cellSpacing="1" cellPadding="2" width="100%" border="0">
			<tr>
				<td noWrap width="100%" bgColor="#85abeb">
				Ad Soyad</td>
				<td noWrap align="middle" bgColor="#dce8fa">
				<span lang="en-us">Resimaltý</span></td>
				<td noWrap align="middle">
				<p align="center"><span lang="en">&nbsp;&nbsp;</span>Sil<span lang="en">&nbsp;&nbsp;</span></td>
			</tr>
<?
$ir = 0;
$get_player = mysql_query("select id,adsoyad from klist_sube_sporcu where subeid ='$pro_d'");

while(list($rid,$ads)=mysql_fetch_row($get_player)){
$res[$ir]=$rid;
$r_tarih = str_replace(" ","<br>",$r_tarih);
$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';
Echo '			<tr>
				<td noWrap width="100%" bgColor="'.$bgc.'"><font style="FONT-SIZE: 11px">'.$ads.'</font></td>
				
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