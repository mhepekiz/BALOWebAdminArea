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
		
	$mustafa = mysql_query("select id, durum from formlar where id='$remhid'");
	list($mes_id, $mes_st) = mysql_fetch_row($mustafa);
	
	
	
	if($mes_st=="off"){  mysql_query("update formlar set durum='on' where id='$remhid'"); } else if($mes_st=="on"){ mysql_query("update formlar set durum='off' where id='$remhid'");  } 
		
	  
$proc = "Yorum güncellendi ($remhid)...";



echo "<script> alert(\"Yorum güncellendi ($remhid)!\"); </script>";



	$e_ip = $REMOTE_ADDR;



	mysql_query("insert into loglar (islem,editorid,eusername,ipno,zaman) values ('$proc','$my_eid','$e_uname','$e_ip','$tarih')");	
	}
	
	
	
	
	
	
$welcomefile=$docroot."/admin/_manage/editor/gorus.src.php";
include($welcomefile);


$footerfile=$docroot."/admin/_manage/_include/page_footer.php";
include($footerfile);
?>