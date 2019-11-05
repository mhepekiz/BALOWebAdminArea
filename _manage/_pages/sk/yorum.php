

			
<script>
function haber_a()
{
haber_ara.submit();
}
</script>


			<table border="0" width="100%" id="table6" cellspacing="1">
							<tr>
								<td width="80%">
								
								
								
																<table border="0" width="100%" id="table7" height="84">
																	<tr>
																		<td align="center" valign="top">

								
								
																<fieldset>
						<legend>Yorumlar</legend>


<table border="0" width="100%" id="table40" cellpadding="2" cellspacing="0">
	<tr>
		<td nowrap>
		<form method="POST" action="/admin/_manage/sk/yorum.php" name="haber_ara">
			<table border="0" width="100%" id="table41" cellspacing="0" cellpadding="0">
				<tr>
					<td><input type="text" name="q" size="20" value="<?=$q?>"></td>
					<td nowrap><span lang="en">&nbsp;</span><a href="javascript:haber_a();"><img border="0" src="/admin/_media/search.gif" width="16" height="16"> 
					Ara</a></td>
					<td width="100%">&nbsp;<span lang="en">&nbsp;&nbsp;&nbsp;</span><a href="/admin/_manage/sk/yorum.php"><img border="0" src="/admin/_media/showall.gif" width="16" height="16"> 
					Hepsini Göster</a></td>
				</tr>
			</table>
			<input type="hidden" name="ac_t" value="search">
		</td></form>
	</tr>
	<tr>
		<td>
	<table border="0" width="100%" id="table42" cellspacing="0">

	<tr>
		<td>
		<table border="0" width="100%" id="table43" cellspacing="0" cellpadding="2" style="border: 1px solid #808080">
		
		<tr>
		<td nowrap width="95%" bgcolor="#ACACAC" style="border-left-style: solid; border-left-width: 1px; border-right-width: 1px; border-top-width: 1px; border-bottom-style: solid; border-bottom-width: 1px"><b>&nbsp; 
		Yorum</b></td>
		<td nowrap align="center" width="1%"><b>St</b><span lang="en">&nbsp;</span></td>
	</tr>

		<?
if($q){
$newsq = "where yorum LIKE '%$q%' order by id desc";
} else {

	

$newsq = "order by id DESC";
}



			
	
	
		
$geturl = '/admin/_manage/sk/yorum.php';


$count_uruns = mysql_query("select count(*) from klist_yorumlar");
list($cnturun)=mysql_fetch_row($count_uruns);


if($cnturun>="1"){


if(!$read){ $read = 100; } //10 ya da 12 ideal

if($page==""){ $page="1"; } // sayfa tanýmlý deðilse sayfa = 1

$prev = $page - 1;

$next = $page + 1;

$start = ($page-1) * $read; // hangi kayýttan baþlanarak $read adet kayýt okunacak

$pagetotal = $cnturun / $read; 

$pagetotalround = round($pagetotal);

if($pagetotalround >= "$pagetotal"){ $totalpage=$pagetotalround; } else { $totalpage = $pagetotalround + 1; }




}








$hs = 0;
$get_msg = mysql_query("select id, haberid, yorum, durum from klist_yorumlar $newsq limit $start, $read");
while(list($mes_id, $mes_hid, $mes_yor, $mes_dur)=mysql_fetch_row($get_msg)){
	
		$get_baslik = mysql_query("select baslik from klist_haberler where id='$mes_hid'");
		list($baslix) = mysql_fetch_row($get_baslik);


$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';


		if($mes_dur=="on"){ $st_img="/admin/_media/user_up.gif"; }
		if($mes_dur=="off"){ $st_img="/admin/_media/user_down.gif"; } 


		

echo'


			<tr>
		<td bgcolor="'.$bgc.'" wrap align="left" width="3%" style="border-left-style: solid; border-left-width: 1px; border-right-width: 1px; border-top-width: 1px; border-bottom-style: solid; border-bottom-width: 1px">&nbsp;'.$mes_yor.' <b>('.$baslix.')</b></td>
    	<td bgcolor="'.$bgc.'" nowrap align="center" style="border-left-style: solid; border-left-width: 1px; border-right-width: 1px; border-top-width: 1px; border-bottom-style: solid; border-bottom-width: 1px"><a href="/admin/_manage/sk/yorum.php?mesajid='.$mes_id.'&oper=CHANGESTAT&nowstat='.$mes_dur.'"><img src="'.$st_img.'" border="0"></a></td>
		
		
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
		<td bgcolor="'.$bgc.'" nowrap width="100%">Sistemde kayýtlý data bulunmamaktadýr.</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>
		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>
	</tr>';
}



?>


</table>


</td></tr></table>
		


</td></tr></table></fieldset>



							

		
	
</td></tr></table>

																		</td>
																	</tr>
																</table>
						


			

																
														
							

