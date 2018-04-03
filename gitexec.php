<?php

$file = "./app.html";

$handle = fopen($file, "a") or die("Cannot open file: ".$file);
$date = date("Y-m-d");
fwrite($handle, $date."\n");
fclose($handle); die();




try{
    $out1 = exec("git add .");
    print_r($out1);

//    exec("git commit -m 'Updated'");
//    exec("git push origin master");
}catch(Exception $e){
    print_r("Erreur: ".$e);
}
?>
