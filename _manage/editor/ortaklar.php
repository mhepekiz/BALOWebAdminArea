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

$get_eu = mysql_query("select uname from editors where id='$my_eid'");
list($e_uname)=mysql_fetch_row($get_eu);


if($ac_t=="add"){
	
	
	if($ortak){
		
		$simdi = date("Y-m-d H:i:s");
		mysql_query("insert into ortaklar (ortak, site, ortaken, siteen, zaman, editor) values ('$ortak', '$wwww', '$ortaken', '$wwwen','$simdi', '$e_uname')") or die("Err 1");
		
		
		
		
		   
$proc = "Ortak eklendi ($ortak)...";



echo "<script> alert(\"Ortak eklendi ($ortak)...\"); </script>";



	$e_ip = $REMOTE_ADDR;



	mysql_query("insert into loglar (proc,editor,ipaddr,zaman) values ('$proc','$e_uname','$e_ip','$simdi')");
	
	
		}		
	
	
	}
	
	
	if($ac_t=="del"){
	
	
	if($remhid){
		$simdi = date("Y-m-d H:i:s");
		
		mysql_query("delete from ortaklar where id='$remhid'");
		
		
		   
$proc = "Ortak silindi ($remhid)...";



echo "<script> alert(\"Ortak silindi ($remhid)!\"); </script>";



	$e_ip = $REMOTE_ADDR;



	mysql_query("insert into loglar (islem,editorid,eusername,ipno,zaman) values ('$proc','$my_eid','$e_uname','$e_ip','$simdi')");
	
	
		
		}		
	
	
	}
	
	


$welcomefile=$docroot."/admin/_manage/editor/ortaklar.src.php";
include($welcomefile);


$footerfile=$docroot."/admin/_manage/_include/page_footer.php";
include($footerfile);
?>