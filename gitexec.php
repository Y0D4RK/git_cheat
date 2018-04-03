<?php

$git_add = exec("git add .", $o);
print("Git add: {$o}". PHP_EOL);

$git_commit = exec("git commit -m 'Updated'");
print("Git commit: {$git_commit}". PHP_EOL);

//$o = exec("whoami");
//print("User session: {$o}". PHP_EOL);

?>
