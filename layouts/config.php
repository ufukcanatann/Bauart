<?php
define('BASE_URL', 'http://localhost/bauart/');
$langOptions = ['tr', 'en'];
$defaultLang = 'en';
session_start();

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = $defaultLang;
}

if (isset($_GET['lang']) && in_array($_GET['lang'], $langOptions)) {
    $_SESSION['lang'] = $_GET['lang'];
    $langCode = $_GET['lang'];
}

include_once __DIR__ . '/../lang/' . $_SESSION['lang'] . '.php';

