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
			mysql_query("insert into videolar (lang,baslik, spot, video, foto_1, foto_2, foto_3, zaman, editor) values ('$vidlang','$baslik','$spot','$video','1','2','3','$zaman','$e_uname')")or die("DB Error");
			$videom = mysql_insert_id();
			
			
			
			
			

$pitcure_path = $docroot."/_all_media/_video/";
$pitcure_folder = "/_all_media/_video/";





function resim($res){
$res = strtolower($res);
$degis1 = array('I','�','�','G','�','S','�','�','g','�','s','�','_',' ','--','---','i');
$degis2 = array('i','o','u','g','c','s','o','u','g','c','s','o','+','+','+','+','i');
$res    =str_replace($degis1,$degis2,$res);
$res    =preg_replace("@[^A-Za-z0-9\-_]+@i","",$res);
return $res;
}


$ressim = resim($filename_name);
$video = resim($filename2_name);




 if($filename2){
	  


    if (!is_writable($pitcure_path)) {

      $error_upload =  "true";

    }

    if(!$error_upload){
	 
	 
	 $p_x = date("Ymdhis");

         $moved = "$pitcure_path"."$video";
	     move_uploaded_file($filename2, $moved);
		 $target_video = "$pitcure_path"."$u_id"."_large_"."$p_x"."-"."$video".".flv";
		 $moved="$moved.flv";
		 $video_sql_name = str_replace($pitcure_path,$pitcure_folder,$moved);
		 
		 
		 
        $upload_ok = "true";



    } else {

      

      $return_error = $error_upload;    

        

    }
    
    
     // write to sql


	mysql_query("update videolar set video='$video_sql_name' where id='$videom'") or die("DB Err");
	
	
	
 }

  if($filename){
	  


    if (!is_writable($pitcure_path)) {

      $error_upload =  "true";

    }

    if(!$error_upload){
	 
	 
	 $p_x = date("Ymdhis");

        $moved = "$pitcure_path"."$ressim";

		//$sql_name_large = "$pitcure_folder"."$u_id"."_large_"."$p_x"."-"."$filename";

        move_uploaded_file($filename, $moved);

      

        // resize to 450 w

          $tumber = $moved;

		  $target_large = "$pitcure_path"."$u_id"."_large_"."$p_x"."-"."$ressim";

		  $THUMB_X = 400;

		  $THUMB_Y = 400;

  		  $son_large = image_createThumb($tumber,$target_large,$THUMB_X,$THUMB_Y,$quality=100);

		  $large_sql_name = str_replace($pitcure_path,$pitcure_folder,$son_large);

        // resize to 70 w		  

		  $target_detail = "$pitcure_path"."$u_id"."_detail_"."$p_x"."-"."$ressim";	

		  $THUMB_X_detail = 600;

		  $THUMB_Y_detail = 600;	

		  $son_detail = image_createThumb($tumber,$target_detail,$THUMB_X_detail,$THUMB_Y_detail,$quality=100);	

		  $detail_sql_name = str_replace($pitcure_path,$pitcure_folder,$son_detail);

        // resize to 100 w

		  $target_home = "$pitcure_path"."$u_id"."_home_"."$p_x"."-"."$ressim";	

		  $THUMB_X_home = 200;

		  $THUMB_Y_home = 200;	

		  $son_home = image_createThumb($tumber,$target_home,$THUMB_X_home,$THUMB_Y_home,$quality=100);	

		  $home_sql_name = str_replace($pitcure_path,$pitcure_folder,$son_home);

   


        $upload_ok = "true";



    } else {

      

      $return_error = $error_upload;    

        

    }
    
    
     // write to sql


	mysql_query("update videolar set foto_1='$home_sql_name', foto_2='$detail_sql_name', foto_3='$large_sql_name' where id='$videom'") or die("DB Err");
	
//echo"$home_sql_name//////// $large_sql_name";
	        

     
$proc = "Video eklendi ($baslik)...";



echo "<script> alert(\"Video eklendi ($baslik)!\"); </script>";



	$e_ip = $REMOTE_ADDR;



	mysql_query("insert into loglar (islem,editorid,eusername,ipno,zaman) values ('$proc','$my_eid','$e_uname','$e_ip','$tarih')");
	
	
	
			 }
   			


		}
		
		
	
	if($ac_t=="del"){
		
	mysql_query("delete from videolar where id='$remhid'");		
		
	  
$proc = "Video silindi ($remhid)...";



echo "<script> alert(\"Video silindi ($remhid)!\"); </script>";



	$e_ip = $REMOTE_ADDR;



	mysql_query("insert into loglar (islem,editorid,eusername,ipno,zaman) values ('$proc','$my_eid','$e_uname','$e_ip','$tarih')");	
	}
	
	
	
	
	
	
$welcomefile=$docroot."/admin/_manage/editor/video_main.src.php";
include($welcomefile);


$footerfile=$docroot."/admin/_manage/_include/page_footer.php";
include($footerfile);
?>