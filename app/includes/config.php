<?php
error_reporting(0);
define('FIR', true);

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_NAME', 'tgif');
define('DB_PASS', '');

define('URL_PATH', '/tgif');

define('PUBLIC_PATH', 'public');
define('THEME_PATH', 'themes');
define('STORAGE_PATH', 'storage');

define('COOKIE_PATH', preg_replace('|https?://[^/]+|i', '', URL_PATH).'/');