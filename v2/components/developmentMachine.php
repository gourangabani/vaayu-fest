<?php
$base = '';
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    $base = 'http://' . $_SERVER['SERVER_NAME'] . ':8888/candid-expressions/';
} else {
    $base = 'https://' . $_SERVER['SERVER_NAME'] . '/';
}
