<?php

if (array_key_exists('lang', $_GET) && $_GET['lang'] === 'en') {
    include 'lang/en.php';
} else {
    include 'lang/fr.php';
}