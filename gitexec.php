<?php




$git_add = exec("git add .", $o);
print("Git add: {$o[0]}". PHP_EOL);

$git_commit = exec("git commit -m 'Updated'");
print("Git commit: {$git_commit}". PHP_EOL);

$git_push = exec("git push origin master", $o);
print("Git push origin: {$o[0]}". PHP_EOL);

?>
