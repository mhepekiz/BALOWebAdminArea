<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<title>�LE G�RE �L�ELER</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-9" />

<script language="javascript"  type="text/javascript">
var http = getHTTPObject(); // HTTP Nesnesi Olu�turuluyor
//Sonu�lar� Alan Fonksiyon
function handleHttpResponse()
{
  if (http.readyState == 1)
        {
          document.getElementById('mesaj').innerHTML = 'Sorgu Tamamlan�yor ...';
        } else if (http.readyState == 4) {
    if (http.status == 200)
    {
      //XML Verileri Al�n�yor
      var xmlDocument = http.responseXML;
      var etiketadi          = xmlDocument.getElementsByTagName('ilce');
      //XML �l�eler Say�s�n� Al�yoruz
      var ilce_sayi   = etiketadi.length;
      if (ilce_sayi>0)
      {
        var ilce_secim_kutusu = document.getElementById("ilceler");

        var ilce_no;
        var ilce_adi;
        var i;
        ilce_kutu_temizle(ilce_secim_kutusu);
        ilce_kutu_olustur(ilce_secim_kutusu,'�l�e Se�iniz','');

        for (i=0; i< ilce_sayi; i++)
        {
          ilce_adi  = etiketadi.item(i).getAttribute('ilceadi');
          ilce_no   = etiketadi.item(i).getAttribute('ilceno');
          ilce_kutu_olustur(ilce_secim_kutusu,ilce_adi,ilce_no);
        }
      }
                        document.getElementById('mesaj').innerHTML = '';
    } else {
      document.getElementById('mesaj').innerHTML = 'Hata Olu�tu';
    }
  }
}
//XML Sayfas�ndan Gelen �l�eleri Se�im Kutusuna G�nderen Fonksiyon
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

//�stekte Bulunan Fonksiyon
//�l Numaras� XML Sayfas�na G�nderiliyor
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






var http = getHTTPObject1(); // HTTP Nesnesi Olu�turuluyor...   mahalle ve k�yler i�in
//Sonu�lar� Alan Fonksiyon
function handleHttpResponse1()
{
  if (http.readyState == 1)
        {
          document.getElementById('mesaj1').innerHTML = 'Sorgu Tamamlan�yor ...';
        } else if (http.readyState == 4) {
    if (http.status == 200)
    {
      //XML Verileri Al�n�yor
      var xmlDocument = http.responseXML;
      var etiketadi          = xmlDocument.getElementsByTagName('koy');
      //XML �l�eler Say�s�n� Al�yoruz
      var koy_sayi   = etiketadi.length;
      if (koy_sayi>0)
      {
        var koy_secim_kutusu = document.getElementById("koyler");

        var koy_no;
        var koy_adi;
        var k;
        koy_kutu_temizle(koy_secim_kutusu);
        koy_kutu_olustur(koy_secim_kutusu,'K�y Se�iniz','');

        for (k=0; k< koy_sayi; k++)
        {
          koy_adi  = etiketadi.item(k).getAttribute('koyadi');
          koy_no   = etiketadi.item(k).getAttribute('koyno');
          koy_kutu_olustur(koy_secim_kutusu,koy_adi,koy_no);
        }
      }
                        document.getElementById('mesaj1').innerHTML = '';
    } else {
      document.getElementById('mesaj1').innerHTML = 'Hata Olu�tu';
    }
  }
}
//XML Sayfas�ndan Gelen K�yleri Se�im Kutusuna G�nderen Fonksiyon
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

//�stekte Bulunan Fonksiyon
//�l�e Numaras� XML Sayfas�na G�nderiliyor
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

<table align="center" width="300">
<form method="post" action="gorbakim.php" >
<tr>
<td width="50%" align="center">
<b>�l</b><br />
<select name="iller" id="iller" size="1" onchange="ilceleri_getir();"  />
<option value="">�l se�iniz</option>
<?php
      $db=mysql_connect("localhost", "root", "00013618");
   mysql_select_db("ilce", $db);

$sql = "SELECT ilno, iladi FROM iller ORDER BY iladi ASC";
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
<b>�l�e</b><br />
<select name="ilceler" id="ilceler" size="1" onchange="koyleri_getir();" />
<option value="">�l�e se�iniz</option>
</select>
</td>
<td width="25%" align="center">

<b>Mah-K�y</b><br />
<select name="koyler" id="koyler" size="1" />
<option value="">Mah-K�y se�iniz</option>
</select></td>
</tr>


<tr>
<td colspan="2" align="center">
<label id="mesaj"></label>
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type=hidden  onClick="ilceleri_getir();"  />
</td>
</tr>

<tr>
<td colspan="2" align="center">
<label id="mesaj1"></label>
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type=hidden onClick="koyleri_getir();"  />
</td>
</tr>


<input type="submit"   value=G�NDER">

</form>
</table>

</body>
</html>