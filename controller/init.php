<?php

// DB Params
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '1');
define('DB_NAME', 'restaurant_reviews');

// App Root
define('APPROOT', dirname(dirname(__FILE__)));
// URL Root
define('URLROOT', 'http://localhost/SEP-Restaurant-Reviewer');
// Site Name
define('SITENAME', 'City Xs Restaurant Reviews');
//App Version
//define('APPVERSION', '1.0.0');
require_once APPROOT."/model/Database.class.php";
require_once APPROOT."/model/Restaurant.class.php";
require_once APPROOT."/view/index.php";
