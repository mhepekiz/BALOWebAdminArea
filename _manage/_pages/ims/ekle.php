

<table border="0" width="100%" id="table7" cellspacing="0" cellpadding="0" height="100%">

					<tr>

						<td valign="top" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px"><!--Start Contents-->

						

						</td>

					</tr>

					
					<tr>

						<td valign="top" height="100%" bgcolor="#F9F8F8" style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; font-size: 11px">

						<table border="0" width="100%" id="table9" cellspacing="0" cellpadding="4">

							<tr>

								<td><table width="100%" cellspacing="0" cellpadding="0" border="0"><tr><td>

<fieldset>

<legend>Imsakiye Ekleme Formu</legend>

<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>

		<div class="paging">			

<form name="birseyekle" method="POST" enctype="multipart/form-data" action="/admin/_manage/ims/ekle.php" onSubmit="return checkfields(this)">

  <table border="0" cellpadding="2" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">

    <tr>

      <td width="8%" align="left" valign="top">&#304;l</td>

      <td>
      
<script language="javascript"  type="text/javascript">
var http = getHTTPObject(); // HTTP Nesnesi Olusturuluyor
//Sonuçlari Alan Fonksiyon
function handleHttpResponse()
{
  if (http.readyState == 1)
        {
          document.getElementById('mesaj').innerHTML = '';
        } else if (http.readyState == 4) {
    if (http.status == 200)
    {
      //XML Verileri Aliniyor
      var xmlDocument = http.responseXML;
      var etiketadi          = xmlDocument.getElementsByTagName('ilce');
      //XML Ilçeler Sayisini Aliyoruz
      var ilce_sayi   = etiketadi.length;
      if (ilce_sayi>0)
      {
        var ilce_secim_kutusu = document.getElementById("ilceler");

        var ilce_no;
        var ilce_adi;
        var i;
        ilce_kutu_temizle(ilce_secim_kutusu);
        ilce_kutu_olustur(ilce_secim_kutusu,'Merkez Ilçe','');

        for (i=0; i< ilce_sayi; i++)
        {
          ilce_adi  = etiketadi.item(i).getAttribute('ilceadi');
          ilce_no   = etiketadi.item(i).getAttribute('ilceno');
          ilce_kutu_olustur(ilce_secim_kutusu,ilce_adi,ilce_no);
        }
      }
                        document.getElementById('mesaj').innerHTML = '';
    } else {
      document.getElementById('mesaj').innerHTML = 'Hata Olustu';
    }
  }
}
//XML Sayfasindan Gelen Ilçeleri Seçim Kutusuna Gönderen Fonksiyon
function ilce_kutu_olustur(ilce_secim_kutusu,isim,deger)
{
  var new_option   = document.createElement('option');
  new_option.text  = isim;
  new_option.value = deger;

  try {
    ilce_secim_kutusu.add(new_option, null);
  }
  catch(ex) {
    ilce_secim_kutusu.add(new_option);
  }
}

function ilce_kutu_temizle(xmlkok_etiket)
{
  while (xmlkok_etiket.length > 0)
  {
    xmlkok_etiket.remove(0);
  }
}

//Istekte Bulunan Fonksiyon
//Il Numarasi XML Sayfasina Gönderiliyor
function ilceleri_getir()
{
  var iller = document.getElementById("iller");
        var ilno  = iller.options[iller.selectedIndex].value;
  http.open("POST", 'ilce_xml.php', true);
  http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=iso-8859-9');
  http.onreadystatechange = handleHttpResponse;
  http.send("ilno="+ilno);
}

function getHTTPObject()
{
  var retval=null;
  try
  {
    retval=new ActiveXObject("Msxml2.XMLHTTP");
  }
  catch(e)
  {
    try
    {
      retval=new ActiveXObject("Microsoft.XMLHTTP");
    }
    catch(oc)
    {
      retval=null;
    }
  }

  if(!retval && typeof XMLHttpRequest != "undefined")
  {
    retval=new XMLHttpRequest();
  }
  return retval;
}






var http = getHTTPObject1(); // HTTP Nesnesi Olusturuluyor...   mahalle ve köyler için
//Sonuçlari Alan Fonksiyon
function handleHttpResponse1()
{
  if (http.readyState == 1)
        {
          document.getElementById('mesaj1').innerHTML = 'Sorgu Tamamlaniyor ...';
        } else if (http.readyState == 4) {
    if (http.status == 200)
    {
      //XML Verileri Aliniyor
      var xmlDocument = http.responseXML;
      var etiketadi          = xmlDocument.getElementsByTagName('koy');
      //XML Ilçeler Sayisini Aliyoruz
      var koy_sayi   = etiketadi.length;
      if (koy_sayi>0)
      {
        var koy_secim_kutusu = document.getElementById("koyler");

        var koy_no;
        var koy_adi;
        var k;
        koy_kutu_temizle(koy_secim_kutusu);
        koy_kutu_olustur(koy_secim_kutusu,'Köy Seçiniz','');

        for (k=0; k< koy_sayi; k++)
        {
          koy_adi  = etiketadi.item(k).getAttribute('koyadi');
          koy_no   = etiketadi.item(k).getAttribute('koyno');
          koy_kutu_olustur(koy_secim_kutusu,koy_adi,koy_no);
        }
      }
                        document.getElementById('mesaj1').innerHTML = '';
    } else {
      document.getElementById('mesaj1').innerHTML = 'Hata Olustu';
    }
  }
}
//XML Sayfasindan Gelen Köyleri Seçim Kutusuna Gönderen Fonksiyon
function koy_kutu_olustur(koy_secim_kutusu,isim,deger)
{
  var new_option   = document.createElement('option');
  new_option.text  = isim;
  new_option.value = deger;

  try {
    koy_secim_kutusu.add(new_option, null);
  }
  catch(ex) {
    koy_secim_kutusu.add(new_option);
  }
}

function koy_kutu_temizle(xmlkok_etiket)
{
  while (xmlkok_etiket.length > 0)
  {
    xmlkok_etiket.remove(0);
  }
}

//Istekte Bulunan Fonksiyon
//Ilçe Numarasi XML Sayfasina Gönderiliyor
function koyleri_getir()
{
  var ilceler = document.getElementById("ilceler");
        var ilceno  = ilceler.options[ilceler.selectedIndex].value;
  http.open("POST", 'koy_xml.php', true);
  http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=iso-8859-9');
  http.onreadystatechange = handleHttpResponse1;
  http.send("ilceno="+ilceno);
}

function getHTTPObject1()
{
  var retval=null;
  try
  {
    retval=new ActiveXObject("Msxml2.XMLHTTP");
  }
  catch(e)
  {
    try
    {
      retval=new ActiveXObject("Microsoft.XMLHTTP");
    }
    catch(oc)
    {
      retval=null;
    }
  }

  if(!retval && typeof XMLHttpRequest != "undefined")
  {
    retval=new XMLHttpRequest();
  }
  return retval;
}







</script>
</head>
<body>

<table align="left" width="300">
<tr>
<td width="50%" align="center">
<select name="iller" id="iller" size="1" onchange="ilceleri_getir();"  />
<option value="">Il Seçiniz</option>
<?php

include "veritabani.php";
        $db = mysql_connect($cfgdbhost, $cfgdbkul, $cfgdbsifre);
        mysql_select_db($cfgdbname,$db);
$sql = "SELECT ilno, iladi FROM iller ORDER BY ilno ASC";
$sonuc = mysql_query($sql);
$sayi = mysql_num_rows($sonuc);
while($satir=mysql_fetch_array($sonuc))
   {
   $ilno = $satir["ilno"];
   $iladi = $satir["iladi"];
echo '<option value="'.$ilno.'">'.$iladi.'</option>';
}
mysql_free_result($sonuc);
?>
</select>
</td>
<td width="50%" align="center">
<select name="ilceler" id="ilceler" size="1" onchange="koyleri_getir();" />
<option value="">Ilçe seçiniz</option>
</select>
</td>

</tr>

<!-- Buradan sonrasi sorgularken durum bilgisini sayfaya getirmeye yarar --!>
<!-- Buradan --!>
<tr>
<td colspan="2" align="center">
<label id="mesaj"></label>
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type=hidden  onClick="ilceleri_getir();"  />  <!-- Ilçeleri getirme sorgusu --!>
</td>
</tr>

<tr>
<td colspan="2" align="center">
<label id="mesaj1"></label>
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type=hidden onClick="koyleri_getir();"  />  <!-- Köyleri getirme sorgusu --!>
</td>
</tr>
<!-- Buraya kadardir.  --!>
<!-- Dikkat silerseniz hata verir.  --!>


<!-- Buradan sonrasi da seçim kutusundan seçilen bilgileri baska sayfaya gönderip verileri görme denemesidir --!> 


</table>



</td>

    </tr>

  

    <tr>
      
      <td align="left" valign="top">Metin</td>
      
      <td>
        
        
        
  <textarea class="ckeditor" cols="80" id="editor1" name="metin" rows="10"></textarea>
        
        
        
  </td>
      
    </tr>
    
    
    
    <?
									

									if(($yet_tip=="151")||($yet_tip=="5")){
									
										echo'		
										
										
										

    <tr>

      <td>Manþet</td>

      <td width="19%"><input type="checkbox" name="manset" value="EVET"></td>

    </tr>

    <tr>

      <td>Durum</td>

      <td width="19%"><select size="1" name="haberdurum">
		<option value="000">Lütfen durum seçiniz</option>
		<option value="100">Aktif</option>
		<option value="200">Pasif</option>
		</select></td>

    </tr>'; } ;?>

    <tr>
      
      <td>&nbsp;</td>
      
      <td>&nbsp;</td>
      
    </tr>

    <tr>

      <td>&nbsp;</td>

      <td>
		<input type="submit" value="&#304;msakiye Ekle" name="B1" style="font-family: Tahoma; font-size: 11px"></td>

    </tr>

  </table>

  <input type="hidden" name="ac_t" value="add">

</form></td></tr></table></fieldset>

<br><br>

&nbsp;<fieldset>

<legend>Sistemdeki Imsakiyeler</legend>

<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td>

		<div class="paging">			

<table border="0" width="100%" id="table10" cellpadding="2" cellspacing="0">

	


	<tr>

		<td nowrap width="100%" bgcolor="#FF6C00"><b>&#304;l - &#304;l&ccedil;e</b></td>
		
		
		<td nowrap align="center" bgcolor="#FFBE32"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>Editor</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>

		<td nowrap align="center" bgcolor="#FFC446"><span lang="en">&nbsp;&nbsp;&nbsp;</span><b>Eklenme 
		Zamaný</b><span lang="en">&nbsp;&nbsp;&nbsp;</span></td>


<?
if(($yet_tip=="151")||($yet_tip=="5")){
									
										echo'			

		<td nowrap align="center">

		<p align="center"><span lang="en">&nbsp;&nbsp;</span><b>Sil</b><span lang="en">&nbsp;&nbsp;</span></td>'; } ?>

	</tr>

<?

if($q){

$newsq = "where baslik LIKE '%$q%' order by id desc";

} else {

$newsq = "order by id desc limit 25";

}

$hs = 0;

$get_news = mysql_query("select id,sehir,ilce from imsakiye_2011 $newsq");

while(list($i_id, $i_sehir, $i_ilce)=mysql_fetch_row($get_news)){

$hbaslik = str_replace($q, "<font color='blue'>$q</font>", $hbaslik);

$bgc = (($bgc == '#FFFFFF'))? '#F7F6F6' : '#FFFFFF';

	
		$hangi_il = mysql_query("select iladi from iller where No='$i_sehir'");
		list($ilim) = mysql_fetch_row($hangi_il);
		
		$hangi_ilce = mysql_query("select ilceadi from ilceler where ilceno='$i_ilce'");
		list($ilcem) = mysql_fetch_row($hangi_ilce);
	

echo'	<tr>

		<td bgcolor="'.$bgc.'" nowrap width="100%">'.$ilim.' - '.$ilcem.'</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">'.$heditor.'</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">'.$htarih.'</td>

				
		
		<td bgcolor="'.$bgc.'" nowrap align="center"><a href="/admin/_manage/ims/ekle.php?ac_t=del&imid='.$i_id.'"><img src="/admin/_media/delete.gif" border="0"></a></td> 
	</tr>'; 



$hs = $hs+1;




}
if(($hs=="0") && ($q)){

echo '<tr>

		<td bgcolor="'.$bgc.'" nowrap width="100%">Aramanýz sonucunda kayýt bulunamamýþtýr.</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>

	</tr>';

} else if(($hs=="0") && ($q=="")){

echo '<tr>

		<td bgcolor="'.$bgc.'" nowrap width="100%">Sistemde kayýtlý imsakiye bulunmamaktadýr.</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>

		<td bgcolor="'.$bgc.'" nowrap align="center">&nbsp;</td>

	</tr>';

}

?>

</table>

</td></tr></table></fieldset>

</td></tr></table>&nbsp;</td>

							</tr>

						</table>

						</td>

					</tr>

				</table>