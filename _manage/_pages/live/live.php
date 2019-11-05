<script>
function confirmDelete(delUrl) {
  if (confirm("Bu dakikayý silmek istediðinize emin misiniz?")) {
    document.location = delUrl;
  }
}

</script>
<fieldset>

<legend>Maç Seçimi</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>
<div class="paging">
<form method="POST" action="/admin/_manage/live/live.php" name="urun_ozellik_secim">
	<table border="0" width="100%" id="table12" cellspacing="0" cellpadding="0">
		<tr>
			<td>Anlatým yapmak istediðiniz maçý aþaðýdaki kutudan 
			seçiniz.</td>
		</tr>
		<tr>
			<td>
								<font face="Verdana" style="font-size:11px">
						
						
												
						<select style="font-size:11px" name="pro_d" style="font-family: Arial; font-size: 10px; border-style: solid; border-width: 1; padding-left: 1; padding-right: 1; padding-top: 1; padding-bottom: 1">
 
          <?

			$listy = mysql_query("select id,takim_a,takim_b,tarih,saat from macid order by tarih DESC");
			while(list($idy,$ftya,$ftyb,$ftar,$fhr)=mysql_fetch_row($listy)){
			
							$teama = mysql_query("select takim from liveteam where id='$ftya'");
							list($ftya)=mysql_fetch_row($teama);
		
							$teamb = mysql_query("select takim from liveteam where id='$ftyb'");
							list($ftyb)=mysql_fetch_row($teamb);


						
		     echo '<option value="'.$idy.'">'.$ftya.' - '.$ftyb.' / '.$ftar.'-'.$fhr.'</option>';
			}
			
?>
                        </select></font>
			<input type="submit" value="SEÇ" name="B1" style="font-family: Tahoma; font-size:11px">  </td>
		</tr></form>
	</table>
</td></tr></table></fieldset>
<?
if($pro_d){

$get_pro_i = mysql_query("select id,takim_a,takim_b,tarih,saat,stad from macid where id='$pro_d' limit 1");
list($u_id,$u_taka,$u_takb,$zmn,$saat,$stad)=mysql_fetch_row($get_pro_i);


$max = mysql_query("select id,maxonline from macid where id='$u_id'");
list($idss,$maximusti)=mysql_fetch_row($max);


	$teama = mysql_query("select takim from liveteam where id='$u_taka'");
							list($ftya)=mysql_fetch_row($teama);
		
	$teamb = mysql_query("select takim from liveteam where id='$u_takb'");
							list($ftyb)=mysql_fetch_row($teamb);




//$get_last_act = mysql_query("select tarih,editor from sergi_foto where sergiid='$u_id' order by id desc limit 1");
//list($u_tarih,$u_editor)=mysql_fetch_row($get_last_act);

?>
<br><br>
<fieldset>
<legend>Maç Bilgileri</legend>
<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>


<table border="0" width="100%" id="table13" cellspacing="0" cellpadding="2">
	<tr>
		<td nowrap width="5%">Tarih/Saat</td>
		<td colspan="3" width="20%">: <b><? echo"$zmn-$saat"; ?></b></td>
		<td width="100%" colspan="2"></td>
	</tr>
	<tr>
		<td nowrap width="5%">Takýmlar</td>
		<td colspan="3" width="20%">: <b><? echo"$ftya-$ftyb"; ?></b></td>
		<td width="100%" colspan="2"></td>
	</tr>
	<tr>
		<td nowrap width="5%">Stad<span lang="en">&nbsp;&nbsp;</span></td>
		<td colspan="3" width="20%">: <b><?=$stad?></b></td>
		<td width="100%" colspan="2"></td>
	</tr>
	<tr>
		<td colspan="6"><hr color="#000000" style="font-size:11px"></td>
	</tr>
	<tr>
		<td colspan="6">
	      <font face="Tahoma" style="font-size:11px">Maça dakika ekleme formu</font></td>
	</tr>
	 <form method="POST" enctype="multipart/form-data" action="/admin/_manage/live/live.php">
	<input type="hidden" name="pro_d" value="<?=$pro_d?>">
       <input type="hidden" name="ac_t" value="add">
	<tr>
		<td colspan="2" valign="top">
	      <font face="Tahoma" style="font-size:11px">Olay</font></td>
		<td colspan="4">
	      <font style="font-size:11px">
	      <select style="font-size:11px" name="OLAY" style="font-family: Tahoma; ">
			<option value="100000">Normal Dakika Anlatýmý</option>
			<option value="100101">Gol</option>
			<option value="100102">Ofsayt</option>
			<option value="100103">Penaltý</option>
			<option value="100104">Kýrmýzý Kart</option>
			<option value="100105">Sarý Kart</option>
			<option value="100106">Baþlama Düdüðü</option>
			<option value="100107">Devre / Bitiþ Düdüðü</option>
			<option value="100108">Oyuncu Deðiþikliði</option>
			</select></font></td>
	</tr>
	<tr>
		<td colspan="2" valign="top">
	      <font face="Tahoma" style="font-size:11px">Dakika</font></td>
		<td colspan="4">
	      <font style="font-size:11px">
			<!--webbot bot="Validation" b-value-required="TRUE" i-maximum-length="4" --><input type="text" name="dakikasi" size="3" maxlength="4" style="font-family: Tahoma; "></font></td>
	</tr>
	<tr>
		<td colspan="2" valign="top">
	      <font face="Tahoma" style="font-size:11px">Anlatým</font></td>
		<td colspan="4">
	      <font style="font-size:11px">
	      <textarea rows="3" name="resalt" cols="80" style="font-family: Tahoma; "></textarea></font></td>
	</tr>
	<tr>
		<td colspan="2" valign="top">
	      <font face="Tahoma" style="font-size:11px">Canlý Fotoðraf</font></td>
		<td colspan="4">
	      <font style="font-size:11px">
	      <input type="file" name="filename" size="20" style="font-family: Tahoma; font-size:11px">&nbsp;
		<input type="submit" value="Anlatýmý Maça Ekle" name="B4" style="font-family: Tahoma; font-size:11px"></font></td>
	</tr>
	<tr>
		<td colspan="6">
	     
      <font style="font-size:11px" face="Tahoma">
	     
      <input type="hidden" name="u_id" value="<?=$u_id?>"></font>
		<hr color="#808080" size="1">
     
		</td></form>
	</tr>
	
	
	 <form method="POST" enctype="multipart/form-data" action="/admin/_manage/live/live.php">
	 
	 <input type="hidden" name="pro_d" value="<?=$pro_d?>">
       <input type="hidden" name="ac_t" value="skor">
	 
	 <? 
	 
	 $skor = mysql_query("select macid,takim_a,takim_b from liveskor where macid='$u_id'");
	 list($skid,$ska,$skb)=mysql_fetch_row($skor);
	 
	 ?>
	 
	 
	 
	 
	<tr>
		<td colspan="2" valign="top">
	      <font face="Tahoma" style="font-size:11px">Skor</font></td>
		<td colspan="4">
	      <font face="Tahoma" style="font-size:11px">&nbsp;</font><font style="font-size:11px"><!--webbot bot="Validation" b-value-required="TRUE" i-maximum-length="4" --><input type="text" name="skora" size="3" maxlength="4" value="<?=$ska?>" style="font-family: Tahoma; "></font><font face="Tahoma" style="font-size:11px">-</font><font style="font-size:11px"><!--webbot bot="Validation" b-value-required="TRUE" i-maximum-length="4" --><input type="text" name="skorb" size="3" maxlength="4" value="<?=$skb?>" style="font-family: Tahoma; "><input type="submit" value="Skoru Güncelle" name="B3" style="font-family: Tahoma;  font-size:11px"></font></td>
	</tr>
	<tr>
		<td colspan="6">
	     
      <font style="font-size:11px" face="Tahoma">
	     
      <input type="hidden" name="u_id" value="<?=$u_id?>"></font>
		<hr color="#808080" size="1">
     
		</td></form>
	</tr>

	</tr>
	
	
	 <form method="POST" enctype="multipart/form-data" action="/admin/_manage/live/live.php">
	 
	 
	 
	 
	 <? 
	 
	 $kartlar = mysql_query("select macid,sarikart,kirmizikart from livekart where macid='$u_id'");
	 list($cardid,$carda,$cardb)=mysql_fetch_row($kartlar);
	 
	 ?>
	 
	 
	 
	 
	<tr>
		<td colspan="2" valign="top">
	      <font face="Tahoma" style="font-size:11px">Kartlar</font></td>
		<td colspan="4">
	      <font face="Tahoma" style="font-size:11px">&nbsp;</font><font style="font-size:11px"><textarea rows="4" name="sari" cols="40" style="background-color: #FFFF00" style="font-family: Tahoma; font-size: 11px"><?=$carda?></textarea></font><font face="Tahoma" style="font-size:11px">&nbsp;&nbsp;&nbsp;
	      </font><font style="font-size:11px">
	      <textarea rows="4" name="kirmizi" cols="40" style="background-color: #FF0000; color:#FFFFFF" style="font-family: Tahoma; font-size: 11px"><?=$cardb?></textarea></font></td>
	</tr>
	<tr>
		<td colspan="6">
	     
      <font style="font-size:11px" face="Tahoma">
	     
      <input type="hidden" name="u_id" value="<?=$u_id?>"></font>
		<font style="font-size:11px" face="Tahoma">&nbsp;<input type="hidden" name="pro_d" value="<?=$pro_d?>">
       <input type="hidden" name="ac_t" value="kart">
		</font><font style="font-size:11px">
		<input type="submit" value="Kartlarý Güncelle" name="B2" style="font-family: Tahoma; font-size:11px"></font><hr color="#808080" size="1">
     
		</td></form>
	</tr>


 <form method="POST" enctype="multipart/form-data" action="/admin/_manage/live/live.php">
	 
	 
	 
	 
	 <? 
	 
	 $kadrolar = mysql_query("select id,kadro_a,kadro_b from macid where id='$u_id'");
	 list($macidd,$kadro_a,$kadro_b)=mysql_fetch_row($kadrolar);
	 
	 ?>
	 
	 
	 
	 
	<tr>
		<td colspan="2" valign="top">
	      <font face="Tahoma" style="font-size:11px">Kadrolar</font></td>
		<td colspan="4">
	      <font face="Tahoma" style="font-size:11px">&nbsp;</font><font style="font-size:11px"><textarea rows="4" name="takima" cols="40" style="background-color: #FFFFFF" style="font-family: Tahoma; font-size: 11px"><?=$kadro_a?></textarea></font><font face="Tahoma" style="font-size:11px">&nbsp;&nbsp;&nbsp;
	      </font><font style="font-size:11px">
	      <textarea rows="4" name="takimb" cols="40" style="background-color: #FFFFFF" style="font-family: Tahoma; font-size: 11px"><?=$kadro_b?></textarea></font></td>
	</tr>
	<tr>
		<td colspan="6">
	     
      <font style="font-size:11px" face="Tahoma">
	     
      <input type="hidden" name="u_id" value="<?=$u_id?>"></font>
		<font style="font-size:11px" face="Tahoma">&nbsp;<input type="hidden" name="pro_d" value="<?=$pro_d?>">
       <input type="hidden" name="ac_t" value="kadrolar">
		</font><font style="font-size:11px">
		<input type="submit" value="Kadrolarý Güncelle" name="B2" style="font-family: Tahoma; font-size:11px"></font><hr color="#808080" size="1">
     
		</td></form>
	</tr>


 <form method="POST" enctype="multipart/form-data" action="/admin/_manage/live/live.php">
	 
	 
	 
	 
	 <? 
	 
	 $bilgiler = mysql_query("select macid,goller,digermaclar from livegoller where macid='$u_id'");
	 list($golid,$golada,$skorlar)=mysql_fetch_row($bilgiler);
	 
	 ?>
	 
	 
	 
	 
	<tr>
		<td colspan="2" valign="top">
	      <font face="Tahoma" style="font-size:11px">Goller</font></td>
		<td width="21%">
	      <font style="font-size:11px">
	      <textarea rows="4" name="golbilgi" cols="40" style="font-family: Tahoma; "><?=$golada?></textarea></font><font face="Tahoma" style="font-size:11px">&nbsp;&nbsp;&nbsp;
	      </font>
	      </td>
		<td valign="top" width="75">
	      <font face="Tahoma" style="font-size:11px">Diðer Maçlar</font></td>
		<td valign="top" width="75">
	      <font style="font-size:11px">
	      <textarea rows="4" name="digerleri" cols="50" style="color:#000000" style="font-family: Tahoma; font-size: 11px"><?=$skorlar?></textarea></font></td>
		<td width="38%">
	      &nbsp;</td>
	</tr>
	<tr>
		<td colspan="6">
	     
      <font style="font-size:11px" face="Tahoma">
	     
      <input type="hidden" name="u_id" value="<?=$u_id?>"></font>
		<font style="font-size:11px" face="Tahoma">&nbsp;<input type="hidden" name="pro_d" value="<?=$pro_d?>">
       <input type="hidden" name="ac_t" value="goller">
		</font><font style="font-size:11px">
		<input type="submit" value="Bilgileri Güncelle" name="B2" style="font-family: Tahoma; font-size:11px"></font><font face="Tahoma" style="font-size:11px"><br>
     
		</font>
     
		</td></form>
	</tr>


	<tr>
		<td colspan="6"><hr color="#000000" style="font-size:11px"></td>
	</tr>
	<tr>
		<td colspan="6">Mevcut Dakikalar</td>
	</tr>
	<tr>
		<td colspan="6">

		<table id="table1" cellSpacing="1" cellPadding="2" width="100%" border="0">
			<tr>
				<td noWrap width="10%" bgColor="#FF3300">Dakika</td>
				<td noWrap width="80%" bgColor="#FF6600">Anlatým</td>
				<td noWrap align="middle" bgColor="#FF9900">
				<span lang="en">&nbsp;Editor&nbsp;</span></td>
				<td noWrap align="middle" bgColor="#FFCC00">
				<span lang="en-us">Tarih</span></td>
				<td noWrap align="middle">
				<p align="center"><span lang="en">&nbsp;&nbsp;</span>Sil<span lang="en">&nbsp;&nbsp;</span></td>
			</tr>
<?
$get_mins = mysql_query("select id,macid,olay,dakika,detay,zaman,editor from maclive where macid ='$u_id' order by id DESC");

while(list($rid,$maccid,$maccolay,$maccdak,$maccdetay,$macczaman,$maccedi)=mysql_fetch_row($get_mins)){
$r_tarih = str_replace(" ","<br>",$r_tarih);
$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';
Echo '			<tr>
				<td noWrap align="middle" bgColor="'.$bgc.'"><font size="5"><b>'.$maccdak.'</b></font></td>
				<td width="100%" align="left" bgColor="'.$bgc.'">'.$maccdetay.'</td>
				<td noWrap align="middle" bgColor="'.$bgc.'">'.$maccedi.'</td>
				<td noWrap align="middle" bgColor="'.$bgc.'"><span lang="en"><font style="FONT-SIZE: 4pt">&nbsp;</font></span>'.$macczaman.'</td>
				<td noWrap align="middle" bgColor="'.$bgc.'"><a href="javascript:confirmDelete(\'/admin/_manage/live/live.php?ac_t=del&pro_d='.$pro_d.'&remhid='.$rid.'\');">
				<img alt="Ürünü Sil" src="/admin/_media/delete.gif" border="0"></a></td>
			</tr>';
}
?>
		</table>

		</td>
	</tr>
	<tr>
		<td colspan="6"><hr color="#000000" style="font-size:11px"></td>
	</tr>
	</table>
	</td></tr></table></fieldset>
<?
}
?>