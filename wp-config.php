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
define('DB_NAME', 'nxippv2');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'deze');

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
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~3B5f)/?2-^xD0@@zfDX:69$UiXMW2(~^x`rR/{`89o(Mzmn%<8?BsOAgDU_&nxh');
define('SECURE_AUTH_KEY',  '%NvL>:|81RNSRe,`~%8X1n<JXas.U)PF9So-Tc]9BY&+d,Noau=Hsn)m#H:.o6,d');
define('LOGGED_IN_KEY',    '~%W<uL/[?niIbab:Ylv>2YN4>S p*|tA7jmev0y-;keQrHojDX1u<}DglIEf|&Jy');
define('NONCE_KEY',        '@z0fU+,?@~n(4a-OGY13nbl4r{cJ&@eBkeD3jM/T+e<5<~`0U?Ip?%Z7rCu=;TyJ');
define('AUTH_SALT',        'b`bYCr5QY4.rRvVQ=IbspI]sS~LW58Vh`W9l=%?%]6FSt-D.eW<,S%^5ZTr[;r*9');
define('SECURE_AUTH_SALT', '}0|3&:V~ows*c#y7STC1{n*{G2MWAL nsdpsxNt/4>48WEnL^C4EZN&Z*Iig(P<e');
define('LOGGED_IN_SALT',   'YZ0z`o&PSGNdN:&qE5G,p@VA}8X+$X_NOjaV|Im4{R0!;9fx;yxyKgqt;+^vZ5Ou');
define('NONCE_SALT',       'Cl1$3+WTG_f#,/,zBy!*Etj74zOqyPyPSVy9[TnHTF5YD2mT=UH:!(n9 /0R_@KI');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

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

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/nxipp/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');

/** 开启多站点  */
define('WP_ALLOW_MULTISITE', true);

/*解决重定向*/
define('ADMIN_COOKIE_PATH', '/');
define('COOKIE_DOMAIN', '');
define('COOKIEPATH', '');
define('SITECOOKIEPATH', '');





