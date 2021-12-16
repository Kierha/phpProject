<?php

//DB connection
require 'conDB.php';

$pdo->exec("SET FOREIGN_KEY_CHECKS = 0"); // FOREIGN_KEY desacctivé
$pdo->exec("DROP TABLE photo");
$pdo->exec("DROP TABLE user");
$pdo->exec("DROP TABLE address");
$pdo->exec("DROP TABLE product");
$pdo->exec("DROP TABLE user_address");
$pdo->exec("DROP TABLE photo_product");
$pdo->exec("DROP TABLE rate");
$pdo->exec("DROP TABLE command");
$pdo->exec("DROP TABLE command_line");
$pdo->exec("DROP TABLE cart");
$pdo->exec("SET FOREIGN_KEY_CHECKS = 1"); // FOREIGN_KEY activé

echo "Database tables were deleted successfuly !!";