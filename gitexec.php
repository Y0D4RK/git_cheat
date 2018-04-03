<?php

$file = file("./app.html");


try{
    exec("git add .");
    exec("git commit -m 'Updated'");
    exec("git push origin master");
}catch(Exception $e){
    print_r("Erreur: ".$e);
}
?>
