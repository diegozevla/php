<?php

// Neste arquivo posso definir outros arquivos necessários a aplicação como helpers.php

define(DEBUG, 1);

if (DEBUG) {
    ini_set("display_errors", 1);
    ini_set("track_errors", 1);
    ini_set("html_errors", 1);
    error_reporting(E_ALL);
}

require "vendor/autoload.php";
require "app/functions/helpers.php";
