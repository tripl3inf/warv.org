<?php
    define('DB_NAME', 'db_warv');
    define('DB_USER', 'tripl3inf');
    define('DB_PASSWORD', 'tripl3inf');
    define('DB_HOST', 'localhost');
    define('DB_CHARSET', 'utf8');
    define('DB_COLLATE', '');
	define('WPLANG', '');

	$table_prefix  = 'wp_';

	define('AUTH_KEY',         'dqY[|`U||bpL;a,d79&|Fw|y;M=`M3=EG|i:mm*02(b,n<3ea[/&KZ(mNU94 8.1');
define('SECURE_AUTH_KEY',  '+#>BK|Oq|Q=bRGNWMRk},q pN%NZQvdsyLC(}tHXj.RK|8-SXTqkDm2+mvY2mx4`');
define('LOGGED_IN_KEY',    '{n.d+JyK||pwU@yD0r2-m}1%h*5*{+KeWm,W_(7bPnZ-2ze?TYV@T6OSMF?.M:SU');
define('NONCE_KEY',        ']$F%&|N)n;!`y=v&2|m* 77qD@9sy?t.,]-xT07ID8G7SRNo21f&_RbtE(.-/x-9');
define('AUTH_SALT',        ']-Zbm|5/>.h$y6C-MuN@(;LjN/$kF|Qk-sr$]#lu3ThuauS]2S!d{/X2^vqxf6I6');
define('SECURE_AUTH_SALT', 'P{f6A_;I&|`JUESK$ojDfh}~3{+_=i(wR795qZ88Zu>OxM0J5A_/)Yw<a-@s_gG1');
define('LOGGED_IN_SALT',   '*:,oQ^(6^.V=Bc+>_vvx|$JN{-xC;JE+D~ByD/[|!{+e+9v|+BJ1|y_9[}GbO9-E');
define('NONCE_SALT',       'w59li7t,5Dz=S!hqVPg)MSE,(eK>,RN21-8nicJm@veN-%4=)@(+Xmz2CX 2qNs*');

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
