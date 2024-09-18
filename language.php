<?php
session_start();

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
} elseif (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else {
    $lang = 'es'; 
}

// Load language file
$lang_file = "lang_{$lang}.php";
if (file_exists($lang_file)) {
    include_once $lang_file;
} else {
    include_once "lang_es.php"; 
}
