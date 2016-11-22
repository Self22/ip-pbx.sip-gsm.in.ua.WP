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
define('DB_NAME', 'ip-pbx');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '&O|Nr{Xe?Z_A~XuNNNU,bU])9r+Nd):Tz)5ef[qa6<bG9QAY$Dde$*o!ic?=to+H');
define('SECURE_AUTH_KEY',  'DPkxfg(ajw:-Q:U+)ya#D+fZS+|.&2%,dHHL1;[t#]s8fIcv88 @/(8C/(V&i.(#');
define('LOGGED_IN_KEY',    '7A=QP:cqV%OfTkXyue-kBbx`a!:l}T0.ok(AN`0=|Z-$e5U[/ [?uj;_w;HDt$|F');
define('NONCE_KEY',        '2]VnYa484aHtv)CX^ol?e!UEl]f+=>VbFPi!tgcFbeDp]Wv7O6NR>^bz:pR5)<BQ');
define('AUTH_SALT',        '.6;R!r4rcW6nTC{3Mu*}/xMv Gg2n_0W4t+ #3o7ss2>K8dk76?m@,_8EghZA7n)');
define('SECURE_AUTH_SALT', 'UvWt`uT6yiBbS0vf,eZ2HWw5hvWt{feDOAS|(X_qE~wfZg&3t>uHZkDb%Xa6b?)0');
define('LOGGED_IN_SALT',   '8`GckAfa[/`V>lPQ%E/d|@ADzP+r]]x!D8JH,+D~wAepUKgE>E4dIk|XZ)m5F1Sg');
define('NONCE_SALT',       '4`9xSh~z2XNPv?]%4vf2Ub2X)`.6EM0q:W#=gc2y?$M5B;& +g%<;Y2GyamA!|*v');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'ip_';

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
