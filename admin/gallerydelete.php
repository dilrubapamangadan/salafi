<?php

$mykey1=$_REQUEST['key1'];

/*
$mykey2=$_REQUEST['key2'];
$status='delete';*/

include 'connect.php';
/*mysql_query("update tbl_gallery set status='$status' where gid = '$mykey1'");*/
mysql_query("delete from tbl_gallery where gid = '$mykey1'");
echo "<script>location.href='viewallgallery.php?ids=$mykey1'</script>"

?> 