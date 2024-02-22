<?php
$a = $_SERVER['REQUEST_URI'];
// echo $a, '<br>';
$b = trim($a, "/");
// echo $b, '<br>';
$temp = explode("/", $b);
$page = $temp[1];
