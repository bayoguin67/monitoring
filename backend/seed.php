<?php
require __DIR__.'/config.php';
if(PHP_SAPI!=='cli')die('CLI only');
foreach([['Administrator','admin','admin@example.test','admin123','admin'],['Demo Teacher','teacher','teacher@example.test','teacher123','teacher'],['Demo Student','student','student@example.test','student123','student']] as $u){$s=db()->prepare('INSERT INTO users(full_name,username,email,password_hash,role) VALUES(?,?,?,?,?) ON DUPLICATE KEY UPDATE username=username');$s->execute([$u[0],$u[1],$u[2],password_hash($u[3],PASSWORD_DEFAULT),$u[4]]);}echo "Seed complete. Change demo passwords before deployment.
";
