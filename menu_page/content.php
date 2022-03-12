<?php 
 
 $url = $_POST['num'];
 /*if (isset($_POST['num'])){
   $url = $_POST['num'];
   }*/
    if ($url > 0) {
    $filename = "./".$url;
    $out = file_get_contents($filename,true);
   }
   if (isset($out)) { echo $out; }
 ?>