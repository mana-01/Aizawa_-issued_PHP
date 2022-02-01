<?php
require ('funcs.php');
$pdo = new PDO ('mysql:fmk_db;charset=utf8;host=localhost','root','root');
$stmt = $pdo->prepare("SELECT * FROM listing_items_table ");
$goods = $stmt->fetchall();
echo ('index_html_test.php');
ini_set('display_errors', "On");

?>




