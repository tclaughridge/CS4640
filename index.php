<?php

// SITE URL: https://cs4640.cs.virginia.edu/tcl5tu/sprint3/?command=home

error_reporting(E_ALL);
ini_set("display_errors", 1);

spl_autoload_register(function ($classname) {
    include "/students/tcl5tu/students/tcl5tu/src/sprint3/$classname.php";
});

$app = new FrontController($_GET);

$app->run();
