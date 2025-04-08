<?php

$siteurl = "https://opris.tokenloopz.com/";
$canonical = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$version = '?v=1.72';

function isMobile() {
    return preg_match('/(iphone|ipod|ipad|android|blackberry|windows phone|opera mini|mobile)/i', $_SERVER['HTTP_USER_AGENT']);
}
?>
