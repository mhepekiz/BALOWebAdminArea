
	
	
	
	<?





function imaj($foto){
$foto = strtolower($foto);
$degis1 = array('Ý','Ö','Ü','Ð','Ç','Þ','ö','ü','ð','ç','þ','ö','_',' ','--','---','ý');
$degis2 = array('i','o','u','g','c','s','o','u','g','c','s','o','-','-','-','-','i');
$foto    =str_replace($degis1,$degis2,$foto);

return $foto;
}




$tr = array('Ç', 'ç', 'G', 'g', 'i', 'I', 'Ö', 'ö', 'S', 's', 'Ü', 'ü'); 

$kod = array('&#199;', '&#231;', '&#208;', '&#287;', '&#305;', '&#304;', '&#214;', '&#246;', '&#350;', '&#351;', '&#220;', '&#252;'); 






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
	

	
	if($filename){		
		
  
  $filecheck = substr("$filename_name", -3);
  
  	
 
  if(($filecheck=="csv")||($filecheck=="CSV")){

	
	
		
	
	
	
   
$pitcure_path = $docroot."/_all_media/_xls/";

$pitcure_folder = "/_all_media/_xls/";

			mysql_query("delete from ortaklar");

  if($filename){

    if (!is_writable($pitcure_path)) {

      $error_upload =  "true";

    }

    if(!$error_upload){

        $p_x = date("Ymdhis");

        $moved = "$pitcure_path"."$p_x"."$filename_name";

		//$sql_name_large = "$pitcure_folder"."$u_id"."_large_"."$p_x"."-"."$filename";

        move_uploaded_file($filename, $moved);

      

      

    } else {

      

      $return_error = $error_upload;    

        

    } 
    
        
     


	



}  else { echo'<script> alert("Dosya uzantýsý uygun deðil. Ýþlem iptal edildi!"); </script>'; } }



     $csvyol = $moved; //csv dosyasi yolu 
	 
	 
     $file = fopen("$moved",'r'); 
	 $sira = 1;
     while(!feof($file)){  
     $satir = fgets($file); 

	 $data = explode(";", $satir);
		
		
	 $zamansimdi = date("Y-m-d H:i:s");
	
 
	 
     mysql_query("INSERT INTO ortaklar (sira, ortak, site, ortaken, siteen, zaman, editor) VALUES ('$sira','$data[0]', '$data[1]', '$data[3]', '$data[4]', '$zamansimdi', 'CSV')")or die("DB Yazma Hatasi"); // dbye atilmasini istemedigin alanlari es geçebilirsin 
	 
	  
	   // mysql_query("INSERT INTO ortaklar (ortak, site) VALUES ('1', '2')")or die(mysql_error()); 
	 
	  $sira = $sira+1;
	 
       } 

} 
fclose($file); 




		} 		









	
	


$welcomefile=$docroot."/admin/_manage/editor/ortakxls.src.php";
include($welcomefile);


$footerfile=$docroot."/admin/_manage/_include/page_footer.php";
include($footerfile);
?>