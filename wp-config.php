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
define('DB_NAME', '2052758_sasemash');

/** Имя пользователя MySQL */
define('DB_USER', '2052758_sasemash');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'berozyD1620');

/** Имя сервера MySQL */
define('DB_HOST', 'fdb3.runhosting.com');

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
define('AUTH_KEY',         'QeSY*$uhoFnE yt6)&Jo8-!:6;fzps|p*??yy!V+bRQ.,O54wSody&6?zb# *|_$');
define('SECURE_AUTH_KEY',  'W*7e#h:v=K7]/lfJx!k[9<|<A1b@bEn:kD:DbVt*y}e4L|RplezxEq(a;BpsmLf7');
define('LOGGED_IN_KEY',    'z`]tD;~(,hMsVoSnE]&sI}-8SlJYB/wIG35YjoWVm]/09Ofi8cA<D$P< z<^X&qd');
define('NONCE_KEY',        'b7r`4!l8/*&#4JC.LJU:Eh6^MP:z7|-W,k&L/u)+D+qDJ6<xLMvXGG=g,>AA8uvW');
define('AUTH_SALT',        '-rq$K5VQYHDc8`US[6HAhJr2cpdgM[=Q`*TfSAR,AeF.lrq}01@py ?78|C@2c+%');
define('SECURE_AUTH_SALT', '&jLkP>anw]SX+i7;kzpM})n#QQ*9Tmv(Vz8-mg@0a7+/TKBm6=&Xc+|X^N}E#xzg');
define('LOGGED_IN_SALT',   'Kdr 674AH:$Fwp,X;r;UUmn}N>X_]/6RrGxl/s|t_DVIu(M;4RpP^CT|xFV};!>>');
define('NONCE_SALT',       'k5J|]_a!@gZ$.d+[(76d*;6{h2(*}gq[aub8T1u-tPy/%$Ohnr%FMqp: ]u|tC55');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'dev_yachtseamanship_';
// define('WP_ALLOW_REPAIR', true);

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
