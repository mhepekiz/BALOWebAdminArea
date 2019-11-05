<p><font face="Arial"><b>Sýk Sorulan Sorular</b><br><small><br><? echo "$my_message"; ?><br>Aþaðýda sitede yayýnlanan 
Sýk Sorukan sorularýn bir listesini bulabilir, bu sorularý silebilirsiniz.</small></font></p>
<table align="center" border="0" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="560" id="AutoNumber1">
<?

$get_sss = mysql_query("select id,soru,cevap from sss");
while(list($sid,$soru,$cevap)=mysql_fetch_row($get_sss)){
echo '<tr>
    <td width="100%" bgcolor="#000000"><b><font face="Arial" size="2" color="#FFFFFF">'.$soru.'</font></b></td>
  </tr>
  <tr>
    <td width="100%"><font face="Arial" size="2">'.$cevap.'</font></td>
  </tr>
  <tr>
    <td align="center"><a href="/admin/_manage/sss/goruntule.php?ac_t=delete&sid='.$sid.'"><img border="0" src="/admin/_manage/_media/off.gif" alt="Sil" width="13" height="16"></a></td>
  </tr>
  <tr>
    <td align="center"><hr size="1"></hr></td>
  </tr>';

}
?>

</table>