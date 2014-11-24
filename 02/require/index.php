<?php
header('Content-Type: text/html; charset=utf-8');
include 'header.php';
$input = $_GET['page'];
 if($input == 'contacts') {
    include 'contacts.php';
 } else if($input == 'about'){
    include 'about.php';
 } else{
    include 'main.php';
 }

include 'footer.php';