<?


if($logged=="truebluebabyiloveyou"){





?>

			
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
						<legend>Mesajlar</legend>


<table border="0" width="100%" id="table40" cellpadding="2" cellspacing="0">
	<tr>
		<td nowrap>
		<form method="POST" action="/admin/_manage/_managemembers/dokum.php" name="haber_ara">
			<table border="0" width="100%" id="table41" cellspacing="0" cellpadding="0">
				<tr>
					<td><input type="text" name="q" size="20" value="<?=$q?>"></td>
					<td nowrap><span lang="en">&nbsp;</span><a href="javascript:haber_a();"><img border="0" src="/admin/_media/search.gif" width="16" height="16"> 
					Ara</a></td>
					<td width="100%">&nbsp;<span lang="en">&nbsp;&nbsp;&nbsp;</span><a href="/admin/_manage/_managemembers/dokum.php"><img border="0" src="/admin/_media/showall.gif" width="16" height="16"> 
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
		<td nowrap width="33%" bgcolor="#ACACAC" style="border-left-style: solid; border-left-width: 1px; border-right-width: 1px; border-top-width: 1px; border-bottom-style: solid; border-bottom-width: 1px"><b>&nbsp; 
		Adsoyad </b><span lang="en">&nbsp;</span></td>
		<td nowrap width="40%" bgcolor="#CCCCCC" style="border-left-style: solid; border-left-width: 1px; border-right-width: 1px; border-top-width: 1px; border-bottom-style: solid; border-bottom-width: 1px">
		<p align="center"><b>&nbsp; 
		Email</b><span lang="en">&nbsp;</span></td>
		<td nowrap width="22%" bgcolor="#FF6600" style="border-left-style: solid; border-left-width: 1px; border-right-width: 1px; border-top-width: 1px; border-bottom-style: solid; border-bottom-width: 1px">
		<p align="center"><b>&nbsp;Zaman</b><span lang="en">&nbsp;&nbsp;</span></td>
		<td nowrap align="center" width="1%"><p align="center" style="border-left-style: solid; border-left-width: 1px; border-right-width: 1px; border-top-width: 1px; border-bottom-style: solid; border-bottom-width: 1px"><span lang="en">
		&nbsp;</span><b>Oku</b><span lang="en">&nbsp;</span></td>
		<td nowrap align="center" width="1%"><b>St</b><span lang="en">&nbsp;</span></td>
		<td nowrap align="center" width="1%"><b>Sil</b><span lang="en">&nbsp;</span></td>
	</tr>

		<?
if($q){
$newsq = "where adsoyad LIKE '%$q%' or email LIKE '%$q%' order by id desc";
} else {

	

$newsq = "order by id DESC limit 25";
}
$hs = 0;
$get_msg = mysql_query("select id, adsoyad, rumuz, email, metin, zaman, durum from klist_sk $newsq");
while(list($mes_id, $mes_as, $mes_rum, $mes_email, $mes_mesaj, $mes_zm, $mes_dur)=mysql_fetch_row($get_msg)){


$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';


		if($mes_dur=="on"){ $st_img="/admin/_media/user_up.gif"; }
		if($mes_dur=="off"){ $st_img="/admin/_media/user_down.gif"; } 


		if($mes_mesaj!=""){


echo'


			<tr>
		<td bgcolor="'.$bgc.'" nowrap align="left" width="3%" style="border-left-style: solid; border-left-width: 1px; border-right-width: 1px; border-top-width: 1px; border-bottom-style: solid; border-bottom-width: 1px">&nbsp;'.$mes_as.'</td>
    	<td bgcolor="'.$bgc.'" nowrap align="center" style="border-left-style: solid; border-left-width: 1px; border-right-width: 1px; border-top-width: 1px; border-bottom-style: solid; border-bottom-width: 1px">&nbsp;'.$mes_email.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center" width="3%" style="border-left-style: solid; border-left-width: 1px; border-right-width: 1px; border-top-width: 1px; border-bottom-style: solid; border-bottom-width: 1px">&nbsp;'.$mes_zm.'</td>
		<td bgcolor="'.$bgc.'" nowrap align="center" style="border-left-style: solid; border-left-width: 1px; border-right-width: 1px; border-top-width: 1px; border-bottom-style: solid; border-bottom-width: 1px"><a href="#" onClick="window.open(\'/admin/_manage/_pages/sk/oku.php?mesajid='.$mes_id.'\',\'400L\',\'toolbar=no,width=500,height=500,left=0,top=0,status=no,scrollbars=yes,resize=no\');return false"><img src="/admin/_media/edit.gif" border="0"></a></td>
		<td bgcolor="'.$bgc.'" nowrap align="center" style="border-left-style: solid; border-left-width: 1px; border-right-width: 1px; border-top-width: 1px; border-bottom-style: solid; border-bottom-width: 1px"><a href="/admin/_manage/sk/main.php?mesajid='.$mes_id.'&oper=CHANGESTAT&nowstat='.$mes_dur.'"><img src="'.$st_img.'" border="0"></a></td>
		<td bgcolor="'.$bgc.'" nowrap align="center" style="border-left-style: solid; border-left-width: 1px; border-right-width: 1px; border-top-width: 1px; border-bottom-style: solid; border-bottom-width: 1px"><a href="/admin/_manage/sk/main.php?mesajid='.$mes_id.'&oper=DELETE"><img src="/admin/_media/sil2.gif" border="0"></a></td>
		
	</tr>';
$hs = $hs+1;
}}
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
						


			

																
														
							


<?

} else {

			echo"Kýsýtlý bir alana ulaþmaya çalýþtýnýz, IP adresiniz kayýt edilmiþtir";

    }



?>