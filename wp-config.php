<?php
define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('DB_HOST', getenv('DB_HOST'));

define('WP_HOME', getenv('WP_HOME'));
define('WP_SITEURL', getenv('WP_SITEURL'));

define('FS_METHOD', 'direct');

$table_prefix = 'wp_';
define('WP_DEBUG', false);

require_once ABSPATH . 'wp-settings.php';
