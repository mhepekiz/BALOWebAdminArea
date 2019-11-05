<?


function connecttodb(){


$mysql_user		= "hepekizc_konteyn"; // MySQL UserName
$mysql_pass		= "zHr2*-yG2"; // MySQL PassWord
$database_name	= "hepekizc_balo";

	
// DO NOT EDIT BELOW THIS LINE

	mysql_connect("localhost","$mysql_user","$mysql_pass") or die ("connection error");
	mysql_select_db("$database_name") or die ("db error");
		mysql_query("SET NAMES 'latin5'");
    mysql_query("SET CHARACTER SET latin5");
    mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci'");
}

function image_createThumb($src,$dest,$maxWidth,$maxHeight,$quality=100) { 

   if (file_exists($src)  && isset($dest)) { 

       // path info 

       $destInfo  = pathInfo($dest); 

       

       // image src size 

       $srcSize  = getImageSize($src); 

       

       // image dest size $destSize[0] = width, $destSize[1] = height 

       $srcRatio  = $srcSize[0]/$srcSize[1]; // width/height ratio 

       $destRatio = $maxWidth/$maxHeight; 

       if ($destRatio > $srcRatio) { 

           $destSize[1] = $maxHeight; 

           $destSize[0] = $maxHeight*$srcRatio; 

       } 

       else { 

           $destSize[0] = $maxWidth; 

           $destSize[1] = $maxWidth/$srcRatio; 

       } 

       

       // path rectification 

       if ($destInfo['extension'] == "gif") { 

           $dest = substr_replace($dest, 'jpg', -3); 

       } 

       

       // true color image, with anti-aliasing 

       $destImage = imageCreateTrueColor($destSize[0],$destSize[1]); 

       imageAntiAlias($destImage,true); 

       

       // src image 

       switch ($srcSize[2]) { 

           case 1: //GIF 

           $srcImage = imageCreateFromGif($src); 

           break; 

           

           case 2: //JPEG 

           $srcImage = imageCreateFromJpeg($src); 

           break; 

           

           case 3: //PNG 

           $srcImage = imageCreateFromPng($src); 

           break; 

           

           default: 

           return false; 

           break; 

       } 

       

       // resampling 

       imageCopyResampled($destImage, $srcImage, 0, 0, 0, 0,$destSize[0],$destSize[1],$srcSize[0],$srcSize[1]); 

       

       // generating image 

       switch ($srcSize[2]) { 

           case 1: 

           case 2: 

           imageJpeg($destImage,$dest,$quality); 

           break; 

           

           case 3: 

           imagePng($destImage,$dest); 

           break; 

       } 

       return $dest; 

   } 

   else { 

       return false; 

   } 

} 


?>
