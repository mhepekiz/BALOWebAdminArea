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


if($ac_t=="add"){
	
	
	$gorev = mysql_real_escape_string($gorev);
	$metin = mysql_real_escape_string($metin);
	$metinen = mysql_real_escape_string($metinen);
	$goreven = mysql_real_escape_string($goreven);
		//	$detay = addslashes($detay);
		//	$baslik = addslashes($baslik);
			$zaman = date("Y-m-d H:i:s");
			mysql_query("update yonetim set adsoyad='$adsoyad', gorev='$gorev', ozgecmis='$metin', enozgecmis='$metinen', zaman='$zaman', editor='$e_uname' where id='$remhid'")or die(mysql_error());
			

$pitcure_path = $docroot."/_all_media/_yk/";
$pitcure_folder = "/_all_media/_yk/";





function resim($res){
$res = strtolower($res);
$degis1 = array('I','Ö','Ü','G','Ç','S','ö','ü','g','ç','s','ö','_',' ','--','---','i');
$degis2 = array('i','o','u','g','c','s','o','u','g','c','s','o','+','+','+','+','i');
$res    =str_replace($degis1,$degis2,$res);
$res    =preg_replace("@[^A-Za-z0-9\-_]+@i","",$res);
return $res;
}


$ressim = resim($filename_name);


  if($filename){
	  


    if (!is_writable($pitcure_path)) {

      $error_upload =  "true";

    }

    if(!$error_upload){
	 
	 
	 $p_x = date("Ymdhis");

        $moved = "$pitcure_path"."$ressim";

		//$sql_name_large = "$pitcure_folder"."$u_id"."_large_"."$p_x"."-"."$filename";

        move_uploaded_file($filename, $moved);

      
	      $tumber = $moved;

		
		  $target_detail = "$pitcure_path"."$u_id"."_detail_"."$p_x"."-"."$ressim".".jpg";	

		  $THUMB_X_detail = 150;

		  $THUMB_Y_detail = 150;	

		  $son_detail = image_createThumb($tumber,$target_detail,$THUMB_X_detail,$THUMB_Y_detail,$quality=100);	

		  $detail_sql_name = str_replace($pitcure_path,$pitcure_folder,$son_detail);

        
        $upload_ok = "true";



    } else {

      

      $return_error = $error_upload;    

        

    }
    
    
     // write to sql


	mysql_query("update yonetim set foto_1='$detail_sql_name' where id='$remhid'") or die("DB Err");
		        

	
	
			 }
   			

     
$proc = "Kayit guncellendi ($adsoyad)...";



echo "<script> alert(\"Kayit guncellendi ($adsoyad)!\"); </script>";



	$e_ip = $REMOTE_ADDR;



	mysql_query("insert into loglar (proc,editor,ipaddr,zaman) values ('$proc','$e_uname','$e_ip','$simdi')");

		}
		
		
	
	
	
	
	
$welcomefile=$docroot."/admin/_manage/editor/yk_edit.src.php";
include($welcomefile);


$footerfile=$docroot."/admin/_manage/_include/page_footer.php";
include($footerfile);
?>