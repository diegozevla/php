<?php

require __DIR__ . "/../../vendor/autoload.php";
require __DIR__ . "/../helpers/helpers.php";
require "dbconfig.php";

define(DEBUG, 1);

if (DEBUG) {
    ini_set("display_errors", 1);
    ini_set("track_errors", 1);
    ini_set("html_errors", 1);
    error_reporting(E_ALL);
}