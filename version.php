<?php
$dbh = new PDO('mysql:host=localhost;dbname=cotrax', 'root', '');

$query =$dbh -> query( 'SELECT * FROM user');

$r = $query->fetch(PDO::FETCH_ASSOC);
echo '<pre>',print_r($r), '</pre>';
?>