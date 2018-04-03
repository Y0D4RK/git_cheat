<?php




$git_add = exec("git add .", $o);
print("Git add: {$o[1]}". PHP_EOL);

$git_commit = exec("git commit -m 'Updated'");
print("Git commit: {$git_commit}". PHP_EOL);

$git_push = exec("git push origin master");
print("Git push origin: {$git_push}". PHP_EOL);

?>
