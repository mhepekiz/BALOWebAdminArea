<?php
        ob_start();
        header("Cache-Control: no-cache");
        include "veritabani.php";
        $db = mysql_connect($cfgdbhost, $cfgdbkul, $cfgdbsifre);
        mysql_select_db($cfgdbname,$db);
        header('Content-Type: text/xml');
        echo "<?xml version='1.0' encoding='iso-8859-9' standalone='yes'?>";
        echo '<koylerxml etiketadi="koy">';

        //POST Metoduyla Gelen �l Numaras�n�n Al�m�
        @ $ilceno = intval($_POST['ilceno']);

        if ($ilceno)
        {
        //Veritaban�ndan �le G�re �llerin �ekilmesi
        $koyler_sql = mysql_query("SELECT koyno, ilceno, ilno, koyadi FROM koyler WHERE ilceno='$ilceno' order by koyadi asc");
        $sayi1 = mysql_num_rows($koyler_sql);
        if ($sayi1 > 0)
        {
        while($koy = mysql_fetch_object($koyler_sql))
        {
        $koyno  = $koy->koyno;
        $koyadi = $koy->koyadi;
        echo '<koy koyno="'.$koyadi.'" koyadi="'.$koyadi.'" />'; //k�y�n numaras� yerine isminin �ikmas�n� istiyorsak  $koyno yerine $koyadi olarak se�in =======>>>>> '<koy koyno="'.$koyno.'" koyadi="'.$koyadi.'" />'
        }
        } else {
        echo '<koy koyno="" koyadi="K�y Bulunamad�" />';
        }
        }
        echo '</koylerxml>';
        mysql_free_result($sonuc);
?>