<?php
    define('DB_NAME', 'db_warv');
    define('DB_USER', 'tripl3inf');
    define('DB_PASSWORD', 'tripl3inf');
    define('DB_HOST', 'localhost');
    define('DB_CHARSET', 'utf8');
    define('DB_COLLATE', '');
        define('WPLANG', '');

        $table_prefix  = 'wp_';

       define('WP_HOME','http://192.168.33.99');
        define('WP_SITEURL','http://192.168.33.99/wordpress');

        define('WP_CONTENT_URL', 'http://192.168.33.99/content');

  /*
  Depending on your server configuration, you may find WordPress fails to find your content (themes and plugins).
  This is due to how your server returns `$_SERVER['DOCUMENT_ROOT']`. If this issue affects you, try swapping
  for the `dirname(__FILE__)` method below.
  */

  // define('WP_CONTENT_DIR', realpath(dirname(__FILE__) . '/content'));
  define('WP_CONTENT_DIR', realpath($_SERVER['DOCUMENT_ROOT'] . '/content'));

        if ( !defined('ABSPATH') )
                define('ABSPATH', dirname(__FILE__) . '/');

        require_once(ABSPATH . 'wp-settings.php');
