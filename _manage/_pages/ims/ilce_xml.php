<?php
ob_start();
header("Cache-Control: no-cache");

header('Content-Type: text/xml');
echo "<?xml version='1.0' encoding='iso-8859-9' standalone='yes'?>";
echo '<ilcelerxml etiketadi="ilce">';

//POST Metoduyla Gelen İl Numarasının Alımı
     include "veritabani.php";
     $db = mysql_connect($cfgdbhost, $cfgdbkul, $cfgdbsifre);
     mysql_select_db($cfgdbname,$db);
ob_start();
@ $ilno = intval($_POST['ilno']);
if ($ilno)
{
  //Veritabanından İle Göre İllerin Çekilmesi
  $ilceler_sql = mysql_query("SELECT ilceno, ilno, ilceadi FROM ilceler WHERE ilno='$ilno' ORDER BY ilceadi ASC ");
  $sayi = mysql_num_rows($ilceler_sql);
  if ($sayi > 0)
  {
    while($ilce = mysql_fetch_object($ilceler_sql))
    {
       $ilceno  = $ilce->ilceno;
       $ilceadi = $ilce->ilceadi;
   echo '<ilce ilceno="'.$ilceno.'" ilceadi="'.$ilceadi.'" />';
    }

    } else {
    echo '<ilce ilceno="" ilceadi="İlçe Bulunamadı" />';
    }
}
echo '</ilcelerxml>';
mysql_free_result($sonuc);
?>