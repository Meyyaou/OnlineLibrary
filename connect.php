<?php

$conn = oci_connect("LibraryAdmin", "admin", "localhost/xe");
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}


oci_close($conn);

?>
