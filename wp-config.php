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
define('DB_NAME', 'testwp');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '-K9PXqiOuf_l>57y,YQQ $j<(vLNoZ@1iA Ae2} au^g8j$mh|c99% bxQ:bi>gt');
define('SECURE_AUTH_KEY',  'e5A(G Y+[+daM.j`+a#|Ks:&es#] 8!GU.D$[0N#4].d[IU2!M@F/<|Nfm<Ag@X^');
define('LOGGED_IN_KEY',    'u#4JV IB])bwd%Vq%/=#OU:j[`:Tj|HrF0NCg^s5r;<t?Ba?wW80|bBLlo-[qg)0');
define('NONCE_KEY',        '33p.Ue|vSuhz+2P!hdgGHekbIsb;8S3Q8OdM2<YicbwG1+P EvzQ?@[ft4Q,jL]G');
define('AUTH_SALT',        '.CO-OW71w8>Q.fW<~Z_j]!.@2yK(<z:B)PIiU4[Mx!9&{BZFZb(lDpa&PpfaC^~M');
define('SECURE_AUTH_SALT', 'F-[G{0&AC,kj >F}nZAcJnMr&O([x}FT+2;.t7qy]k*2c-G+z/cjK7:ah}MFEK&:');
define('LOGGED_IN_SALT',   '<]U882;f~JQ<wfrZ^]1wwk`BO&kqx[FCzq+[LW)gPdnqF.(7yy=$]sDAr4RqHah7');
define('NONCE_SALT',       'jq*%v1jJUU*FVfP.K8-+ig?!wIA.YO3tFxb+X+6$u:G7]*z=!,`nd[i7Pke5~;nc');

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
