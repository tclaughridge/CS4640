<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

spl_autoload_register(function ($classname) {
    include "$classname.php";
    // ^ modify later to include from src/ directory
});
        

$app = new FrontController($_GET);

$app->run();
