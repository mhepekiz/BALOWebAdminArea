<?

$docroot = $DOCUMENT_ROOT;
$dbfile=$docroot."/admin/_include/mysql-conf.php";
include($dbfile);

//Connect to Database
connecttodb();



$authfile=$docroot."/admin/_manage/_include/auth.php";
include($authfile);


if($my_eid==1){
$headerfile=$docroot."/admin/_manage/_include/page_header.php";
include($headerfile);
} else {

$headerfile=$docroot."/admin/_manage/_include/page_header_b.php";
include($headerfile); }



if($oper=="EditorGuncelleOK"){


if($zid==1){

mysql_query("update editors set pass='$SIFRE2', adsoyad='$EAD', gsm='$GSM', telefon='$TELEFON' where id='$zid'");
} else {
mysql_query("update editors set email='$EDEMAIL', uname='$EDMAIL', pass='$SIFRE2', adsoyad='$EAD', gsm='$GSM', telefon='$TELEFON' where id='$zid'");

$mesaj="$EAD isimli editör bilgileri güncellenmiþtir";
}

}


?>


<html>

<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<title>Editör Yönetimi</title>
<script LANGUAGE=JAVASCRIPT>

function checkfields(){

if (ekle.SIFRE.value=="")
  {
    alert("\"Þifre Alaný\" Boþ Býrakýlamaz.");
    ekle.SIFRE.focus();
    return (false);
  }  
  
  if (ekle.SIFRE2.value=="")
  {
    alert("Kontrol amacýyla yeni þifrenizi yeniden girmelisiniz.");
    ekle.SIFRE2.focus();
    return (false);
  }  
  
  if (ekle.SIFRE.value!=ekle.SIFRE2.value)
  {
    alert("Yazdýðýnýz þifreler ayný olmalý.");
    ekle.SIFRE.focus();
    return (false);
  }  
  return (true);
}



</script>

</head>

<body>



<table width="100%" border="0" cellspacing="0" cellpadding="5" height="100%">
  <tr> 
    <td valign="top">
<table width="90%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr> 
          <td>
            <p><u><b>
            <font color="#005986" face="Arial, Helvetica, sans-serif" size="6">
            Editör Güncelleme </font></b></u></p>
            <p><font color="#005986" face="Verdana, Arial" size="2">
            
  
</p>
            <p>&nbsp;</p>
          </td>
        </tr>
        <tr> 
          <td> 
            <form name="ekle" method="post" action="/admin/_manage/_pages/editor/guncelle.php" onSubmit="return checkfields(this)">
              <input type="hidden" name="oper" value="EditorGuncelleOK">
              
              
              
              <?
              
              $editor=mysql_query("select id,adsoyad,email,gsm,telefon,uname,pass from editors where id='$ed_id'");
              list($id,$adsoyad,$email,$gsm,$telefon,$uname,$pass)=mysql_fetch_row($editor);
                          
              
                                       
            echo '
              <input type="hidden" name="zid" value="'.$id.'">
              
              <table width="99%" border="0" align="center" cellpadding="2" cellspacing="1">';
              
              if($my_eid==1){
           echo'
     <tr valign="top" bgcolor="FF682D"> 
                  <td width="50%" valign="middle" bgcolor="#005986"><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#FFFFFF"><b>E-POSTA 
                    ADRESÝ (KULLANICI ADI)</b></font></td>
                  <td width="50%" valign="middle" bgcolor="#005986"> 
                    <div align="right"> 
                      <input type="text" name="EDEMAIL" size="18" style="font-family: verdana; font-size: 8pt; border-width : 1" value="'.$email.'">
                    </div>
                  </td>
                </tr>'; }
echo'

                <tr valign="top" bgcolor="FF7D49"> 
                  <td width="50%" valign="middle" bgcolor="#00A3E7"><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#FFFFFF"><b>ÞÝFRE</b></font></td>
                  <td width="50%" valign="middle" bgcolor="#00A3E7"> 
                    <div align="right"> 
                      <input type="password" name="SIFRE" size="18" style="font-family: verdana; font-size: 8pt; border-width : 1">
                    </div>
                  </td>
                </tr>
                <tr valign="top" bgcolor="FF8C5F"> 
                  <td width="50%" valign="middle" bgcolor="#005986"><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#FFFFFF"><b>ÞÝFRE 
                    (TEKRAR) </b></font></td>
                  <td width="50%" bgcolor="#005986" valign="middle"> 
                    <div align="right"> 
                      <input type="password" name="SIFRE2" size="18" style="font-family: verdana; font-size: 8pt; border-width : 1">
                    </div>
                  </td>
                </tr>';

                if($my_eid==1){
           echo'

 <tr valign="middle" bgcolor="FDA481"> 
                  <td width="50%" bgcolor="#00A3E7"><font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#FFFFFF"><b>EDÝTÖR 
                    ADI SOYADI</b></font></td>
                  <td width="50%" bgcolor="#00A3E7"> 
                    <div align="right"> 
                      <input type="text" name="EAD" size="18" style="font-family: verdana; font-size: 8pt; border-width : 1" value="'.$adsoyad.'">
                    </div>
                  </td>
                </tr>
                <tr valign="middle" bgcolor="FDB79B"> 
                  <td width="50%" bgcolor="#005986"><b>
                  <font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#FFFFFF">
                  GSM TELEFON</font></b></td>
                  <td width="50%" bgcolor="#005986" align="right"> 
                      <input type="text" name="GSM" size="18" style="font-family: verdana; font-size: 8pt; border-width : 1" value="'.$gsm.'"></td>
                </tr>
                <tr valign="middle" bgcolor="FDB79B"> 
                  <td width="50%" bgcolor="#00A3E7"><b>
                  <font face="Verdana, Arial, Helvetica, sans-serif" size="1" color="#FFFFFF">
                  TELEFON</font></b></td>
                  <td width="50%" bgcolor="#00A3E7"> 
                    <div align="right"> 
                      <input type="text" name="TELEFON" size="18" style="font-family: verdana; font-size: 8pt; border-width : 1" value="'.$telefon.'">
                    </div>
                  </td>
                </tr>'; }
                
                echo'               
                <tr valign="middle"> 
                  <td width="50%">&nbsp;</td>
                  <td width="50%"> 
                    <div align="right"> 
                      <input type="submit" name="Submit" value="GÖNDER" style="font-family: verdana; font-size: 8pt; border-width : 1" >
                    </div>
                  </td>
                </tr>

                <tr> 
                  <td width="50%">&nbsp;</td>
                  <td width="50%">&nbsp;</td>
                </tr>
              </table> </form>'; ?>
              
              
          </td>
        </tr>
        <tr> 
          <td height="41">&nbsp;</td>
        </tr>
      </table> 
    </td>
  </tr>
</table>



<?


$footerfile=$docroot."/admin/_manage/_include/page_footer.php";
include($footerfile);


?>