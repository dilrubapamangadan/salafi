<?php

$mykey1=$_REQUEST['key1'];


include 'connect.php';
mysql_query("delete from tbl_album where albumid = '$mykey1'");
mysql_query("delete from tbl_gallery where  aid = '$mykey1'");
echo "<script>location.href='viewallalbums.php'</script>"

?> 


