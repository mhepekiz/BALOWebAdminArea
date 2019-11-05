<p><font size="4" face="Arial"><b>Sýk Sorulan Sorular / Ekle<br>
</b></font><font face="Arial" size="2"><? if($mymessage){ echo "<br>$mymessage<br>"; } ?>Aþaðýdaki formu kullanarak, SIK SORULAN 
SORULAR sayfasýna ekleme yapabilirsiniz.</font></p>
<form method="POST" action="/admin/_manage/sss/ekle.php">
<input type="hidden" name="ac_t" value="add">
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
    <tr>
      <td valign="top" nowrap><font face="Arial"><font size="2">Soru</font><span lang="en"><font size="2">&nbsp;&nbsp;&nbsp;</font></span></font></td>
      <td width="100%" valign="top"><input type="text" name="soru" size="20"></td>
    </tr>
    <tr>
      <td valign="top" nowrap><font face="Arial"><font size="2">Cevap</font><span lang="en"><font size="2">&nbsp;&nbsp;&nbsp;</font></span></font></td>
      <td width="100%" valign="top"><textarea rows="6" name="cevap" cols="33"></textarea></td>
    </tr>
    <tr>
      <td valign="top">&nbsp;</td>
      <td width="100%" valign="top">
      <input type="submit" value="SSS Ekle" name="B1"></td>
    </tr>
  </table>
</form>