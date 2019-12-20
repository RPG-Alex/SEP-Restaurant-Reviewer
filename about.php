<?php
//temporary place for the about page until I work out the link structure we should use
//DELETE WHEN GOING LIVE - This is for testing
error_reporting( E_ALL);
ini_set("display_errors",1);
require_once "controller/base.php";
require_once "controller/init.php";
$page = new Page;
$page->header();
echo "<h1> About us:</h1>
<p> We are owned and operated by The daily yawn. ";
$page->footer();
