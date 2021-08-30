<?php
// Inside the config file, we can store the settings of the framework, for example,
// we can store the name of our app, the path of the root, and of course,
// the database connection parameters:

// Create new config.php file in config directory

//site name
define('SITE_NAME', 'your-site-name');

//App Root
define('APP_ROOT', dirname(dirname(__FILE__)));
define('URL_ROOT', '/');

//DB Params
define('DB_HOST', 'your-host');
define('DB_USER', 'your-username');
define('DB_PASS', 'your-password');
define('DB_NAME', 'your-db-name');