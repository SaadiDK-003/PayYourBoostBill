<?php
session_start();
$percentage = 0.1;
$fixed = 3.99;
$url_prefix = $_SERVER['HTTP_HOST'] == 'localhost' ? 'http://':'https://';
define('SITE_URL', ($url_prefix).$_SERVER['HTTP_HOST'].'/Payyourboostbill');
echo SITE_URL;
$con = mysqli_connect('localhost', 'root', '', 'payyourboostbill');
