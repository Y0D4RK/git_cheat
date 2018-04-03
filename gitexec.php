<?php

$file = file("./app.html");



exec("git add .");
exec("git commit -m 'Updated'");
exec("git push origin master");

?>
