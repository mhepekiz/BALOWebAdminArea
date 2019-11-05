<?
$get_r = mysql_query("select id,urunadi from urunler order by urunadi");
  while(list($urunid,$urunad)=mysql_fetch_row($get_r)){
      $options_urun .= "<option value=\"$urunid\">$urunad</option>"; 
    }
?>
<font face="Arial" size="4"><b>Ürün Resmi Yönetimi</b></font><font size="2" face="Arial"><br>
Eklenen son küçük resim ürün için kullanýlýr, önceden eklenen küçük resimler o 
ürün için geçerliliðini yitirir.<br>
&nbsp;</font><table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" id="AutoNumber1" width="600">
  <tr>
    <td width="50%" nowrap>
     <b><font face="Arial">Küçük Resim Ekleme Formu</font></b></td>
   <td width="50%" nowrap>
    <b><font face="Arial">Büyük Resim Ekleme Formu</font></b></td>
  </tr>
  <tr>
    <td width="50%" nowrap>
     <form method="POST" name="small_pic" enctype="multipart/form-data" action="/admin/_manage/urunler/upload.php">
      <p align="center">
      <font size="2" face="Arial">Ürün : </font><select size="1" name="urunid"><option value="0">Bir ürün seçmelisiniz</option><? echo "$options_urun"; ?>
      </select><br>
      <input type="file" name="usersmallfile" size="20"><br>
      <input type="submit" value="Resmi Gönder" name="B1"></p>
      <input type="hidden" name="size" value="small">
	  <input type="hidden" name="ac_t" value="upload">
     </form>
   </td>
   <td width="50%" nowrap>
   <form method="POST" name="large_pic" enctype="multipart/form-data" action="/admin/_manage/urunler/upload.php">
    <p align="center">
    <font size="2" face="Arial">Ürün : </font><select size="1" name="urunid"><option value="0">Bir ürün seçmelisiniz</option><? echo "$options_urun"; ?>
    </select><br>
    <input type="file" name="userlargefile" size="20"><br>
    <input type="submit" value="Resim Gönder" name="B1"></p>
    <input type="hidden" name="size" value="large">
	<input type="hidden" name="ac_t" value="upload">
   </form>
</td>
  </tr>
  <tr>
    <td width="50%" nowrap><? echo "$my_message"; ?></td>
    <td width="50%" nowrap><? echo "$my_message"; ?></td>
  </tr>
</table>