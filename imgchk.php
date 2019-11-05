<?
$docroot = $DOCUMENT_ROOT;
$dbfile=$docroot."/_include/mysql-conf.php";
include($dbfile);

connecttodb();


$resim    = imagecreatefromgif("hede.gif"); // Jpeg ise kullnýlacak fonksiyon imagecreatefromjpeg
$beyaz = imagecolorallocate($resim, 0,0,0);
$siyah = imagecolorallocate($resim, 0, 0, 0);

$yazitipi = 'PROPAGAN.ttf';


$get_ad = mysql_query("select deger from deger where id='$imid' limit 1");
list($display)=mysql_fetch_row($get_ad);


imagettftext($resim, 25, 5, 30, 40, $beyaz, $yazitipi, "$display");

header("Content-type: image/gif");
imagegif($resim);
imagedestroy($resim);



mysql_close();
?>