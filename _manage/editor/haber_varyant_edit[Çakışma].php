<?


$docroot = $DOCUMENT_ROOT;
$dbfile=$docroot."/admin/_include/mysql-conf.php";
include($dbfile);

//Connect to Database
connecttodb();

							


$authfile=$docroot."/admin/_manage/_include/auth.php";
include($authfile);
	

$headerfile=$docroot."/admin/_manage/_include/page_header.php";
include($headerfile);


if($ac_t=="upd"){
	
	
function aylar($ayx){
$degis1 = array('OCA','SUB','MAR','NIS','MAY','HAZ','TEM','AGU','EYL','EKI','KAS','ARA');
$degis2 = array('01','02','03','04','05','06','07','08','09','10','11','12');
$ayx    =str_replace($degis1,$degis2,$ayx);
return $ayx;
}


		$orderx = aylar($orderdate);
		$ord = explode('-', $orderx);
	
	//echo"---------------------------$orderdate";
		
		$orderdate = "$ord[2]-$ord[1]-$ord[0]";
	
	
	$metin = str_replace("<a", "<a id=\"various3\" ", $metin);
	
	$baslik = mysql_real_escape_string($baslik);
	$metin = mysql_real_escape_string($metin);
	$spot = mysql_real_escape_string($spot);
	$yayin = mysql_real_escape_string($yayin);
		//	$detay = addslashes($detay);
		//	$baslik = addslashes($baslik);
			$zaman = date("Y-m-d H:i:s");
			mysql_query("update haberlerlang lang='$dil', baslik='$baslik', spot='$spot', metin='$metin', zaman='$zaman', editor='$e_uname' where id='$remhix'")or die("DB Error");
			

     
$proc = "Haber güncellendi ($baslik)...";



echo "<script> alert(\"Haber güncellendi ($baslik)!\"); </script>";



	$e_ip = $REMOTE_ADDR;



	mysql_query("insert into loglar (islem,editorid,eusername,ipno,zaman) values ('$proc','$my_eid','$e_uname','$e_ip','$tarih')");
	
	
	


		}
	
	
$welcomefile=$docroot."/admin/_manage/editor/haber_varyant_edit.src.php";
include($welcomefile);


$footerfile=$docroot."/admin/_manage/_include/page_footer.php";
include($footerfile);
?>