<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'a0300576_golden');

/** MySQL数据库用户名 */
define('DB_USER', 'a0300576_golden');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'b5554202');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'c1a`XKTy=.]m96%=tXtAip$yT}6-]E16IuBYwjZO[<>n9sWuA4^jJ-b06q}x^$Ih');
define('SECURE_AUTH_KEY',  'Sef:Lj>}i,p}+ah_K|::@w0#GjV/CMWO#c]l!d~iJQ$#%%R2>H-2HK%!QIfZ0RqM');
define('LOGGED_IN_KEY',    'c%85Y_k+GC#+hv@@j)]-J4&uVPk@/HQeYC$lb#93i[N)] :TQ.)*zEMJzn>,x!/Q');
define('NONCE_KEY',        ';T&;j~Q;C];_&T<=7t].:.l|z7AU^rZ)qJLOi82*yFyoGOMRt*+D8cM^H @TZK~5');
define('AUTH_SALT',        ')3kF9W}1Du}HlT]_d$V=}ep_D4IDNxMED@g.NP;Ea+[fx cr=:BwktJ}kff*e`,t');
define('SECURE_AUTH_SALT', 'afQ`pR9-bOmEijGW&Fj= 1[tQ<yU1`Xg/]4(EhX!T RJk&v_FEC!s$Ua~*w1u`%k');
define('LOGGED_IN_SALT',   'f!dQM!7(yAcq6yIJZ 1wMX(@+m/n=R+YA1yW_Ms#/nEU/rcTS?O-RU`F.nLE$XkO');
define('NONCE_SALT',       'iSGwu2d*Wvl&iqr7vhdmSS[d($7C9#NqyiYIB7<O,+-VJ9SP^tK9n.ce=rTtT<)&');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'acc_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
