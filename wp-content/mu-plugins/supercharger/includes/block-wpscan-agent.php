<?php
// Duplicated from the GridPane block WPScan function. This is here to prevent the GridPane block from being required.
if (!empty($_SERVER['HTTP_USER_AGENT']) && preg_match('/WPScan/i', $_SERVER['HTTP_USER_AGENT'])) {
    die('Buh Bye WPScan!');
}
