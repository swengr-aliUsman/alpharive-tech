<?php

$siteurl = "https://opris.tokenloopz.com/";
// $siteurl = "http://localhost/github/alpharive-tech/";
$canonical = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$version = '?v=1.79';

function isMobile() {
    return preg_match('/(iphone|ipod|ipad|android|blackberry|windows phone|opera mini|mobile)/i', $_SERVER['HTTP_USER_AGENT']);
}
?>
<style>
    a{
        text-decoration: none !important;
    }
</style>