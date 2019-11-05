<?
if(!$GTBerKCookie){ 
  header("Location: /admin/login.php");
  exit();
} else {
  $chkip=mysql_query("select count(*) from essions where ipaddr='$REMOTE_ADDR'");
  list($ipsay)=mysql_fetch_row($chkip);
  if($ipsay >= 1){
    $chkck=mysql_query("select count(*) from essions where sessionid='$GTBerKCookie' and ipaddr='$REMOTE_ADDR'");
    list($cksay)=mysql_fetch_row($chkck);
   
    if($cksay >= 1){
      $geteid = mysql_query("select editorid,expire from essions where ipaddr='$REMOTE_ADDR' and sessionid='$GTBerKCookie'") or die ("error 1"); 
      list($editor,$expire)=mysql_fetch_row($geteid);
      $now = time();
      
      if($now >= $expire){
mysql_query("update essions set sessionid='expired' where ipaddr='$REMOTE_ADDR' and sessionid='$GTBerKCookie'");
header("Location: /admin/expired.php");  
exit();      
      } else {
        $newex = time()+1800;
        mysql_query("update essions set expire='$newex' where ipaddr='$REMOTE_ADDR' and sessionid='$GTBerKCookie'");
       
        mysql_query("delete from essions where sessionid='expired' and editorid='$editor'");
        $my_eid = $editor;
        $my_ename = $ename;
        $my_email = $eemail; 
        
        $check_perm = mysql_query("select yetki from editors where id='$my_eid'");
        list($adm_type)=mysql_fetch_row($check_perm);
        
        $my_perm = $adm_type;

     } 
    } else {
header("Location: /admin/expired.php"); 
exit();
    }
  } else {
header("Location: /admin/login.php"); 
exit();
  }
}
?>