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
define('DB_NAME', 'blog-cook');

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
define('AUTH_KEY',         ' XXPqax}IRMWW>zH@*b36|Ntbc.)-}^0+uWIQ5Icn-?l[E1W^4t!Hzz 2&>7Ins9');
define('SECURE_AUTH_KEY',  'S/0KaMZUk|&rFJX+(GQuE(S;/V%+VGzVX-LZPs?%>4PbDs,dlxC-TYd][TNzEG(k');
define('LOGGED_IN_KEY',    'O13e%Uf.=Ln/q<6`iG-|!8de ]`H@NGzJ]io]#{M!{_;t](cQ7 imA%Q;8^xeG0W');
define('NONCE_KEY',        'Tskm_,V[HPVkUPWH+ 6[:/xf;kWG,G?E/kIlLP?u2y!m&W!>tV9F=RK6Q53bW7!d');
define('AUTH_SALT',        '6OL!RYL8D/4VZdyASo}vi_2uwTdPNu5KI+[Tg)S~G.|#?lY6:jt<7VL!)hNO&d&n');
define('SECURE_AUTH_SALT', ' sB)=eB ,H_p#d-;ZLL5|=X@Qs5+T5](6fzMfb9`|V@5Q0O-{/|mr_YNy/Q1^YDT');
define('LOGGED_IN_SALT',   'J6hcc9.|=tHT@~;{-g)%JaKd?4L;F5m| =0KuCBxn,wTM0vXVu;%EbXR~euVv4%_');
define('NONCE_SALT',       'A}wr{-y6VHCz8i+]%S1p+Zul_^TZlypq0=Q9.h5{WPJ2-)U2x]aCU/JC+.%lMjLU');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'bc_';

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
