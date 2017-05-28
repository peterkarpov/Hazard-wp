<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'hazard-wp');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 's.adm.000');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'vi%jr(-5D<w}AL&zzz8KPu-iRp+#CS6t6uv|e;Y{XfBb5E8WJA+i_4t0]cnkjO_K');
define('SECURE_AUTH_KEY',  '!)0$+a~NzEE6.}XSq}13kHf{WNTzjk$58A^j$aqU9@b0`fsj1dRTIi6S9]K#~+[[');
define('LOGGED_IN_KEY',    ',3v (sIr^];?g}%c9TxN4JO={<%GlQ<4)FRDq2|>R(/*7~Y_lVA#iAsZ;HL7nW^[');
define('NONCE_KEY',        'E[7|`#&IL|8(@+;JmB>R^63Q<}=G|oF~Cv9dku.fz^cvu 49CbdIb`][sAF<h;=o');
define('AUTH_SALT',        'no]fh<hvf?gwKPH.P!>0DCyiHm@7+kn21xIsor@={=Kx8U/-9Wy*4?_91MSzHI&R');
define('SECURE_AUTH_SALT', 'RVkk~tZjX-f-|+}:G,;($rk6{si=4EMk%W&DJ7<jtLQ7CSew>GLa!qqkb]^Q3vy~');
define('LOGGED_IN_SALT',   'OTOOjoMxjd7%pvHuhv4Icmxd[@D!K8$vTJK@py (B_6f5%K[s/RczAhFkVJ}(=qf');
define('NONCE_SALT',       'LPA>9fe0o{-#J~,VpKq(q.oP3x>V5-+jLD/pHKzSc[.C/_z.]- 7EtwOBs(YM (/');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
