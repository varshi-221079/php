<?php
require 'config.php';

if (!isset($_GET['code'])) {
    echo "No authorization code received";
    exit;
}

$code = $_GET['code'];
echo "Authorization code received:<br>";
echo $code;
