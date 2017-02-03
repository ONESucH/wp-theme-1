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
define('DB_NAME', 'cp84741_1');

/** Имя пользователя MySQL */
define('DB_USER', 'cp84741_1');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'vlados228');

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
define('AUTH_KEY',         'AxHi+q`CE)x= =zZ2=00(.N$ J?sY*{6XY.a-O{UNbL`xgClj~*Q$cSmKREBUu3Z');
define('SECURE_AUTH_KEY',  'on&4FD`*a])~BdWt]X .WF?r6/DkbO>gm&:BKeRe%c4Q}BU &c@!RoGi%umx1IqD');
define('LOGGED_IN_KEY',    '9Uh.%/E-0G9W(-WSXInk=Rm-htBJ[Pd?95bB8L%Gz+%)2,.)6`$1jPla9D=0z+5%');
define('NONCE_KEY',        'LEB2ze*oxa)Ky21_N&DD//e%NUwc7)R9?BEV9]s6*unDIxA;U94~5B9h:{IO PNo');
define('AUTH_SALT',        'uDw)(CI9%g@dE7`C8mQT_#}-xwYE.0p_e-;AU}vt_g_L&j6Vl.2!{SP=s_Hdy%-9');
define('SECURE_AUTH_SALT', 'URYsU6YjEhn*?/buA[XaW<B^w]F/:OHagp6ol+^Fe9wTd1<{&s4(L@AjSOa[mOk/');
define('LOGGED_IN_SALT',   ';?Ck8=KwUho<[:t3Ujn:&T:]V]_9?MxR*^[tj2*oHhbG0|1Of7G~PS=}MF/2eGum');
define('NONCE_SALT',       'q%V6_Fq~<Yt&.}-&PEtnNV>/2J3C]wIpizDf5pss!3#c,c qyC!MSK4^Az!x%T1f');

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
