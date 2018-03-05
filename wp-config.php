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
define('DB_NAME', 'lupa');

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
define('AUTH_KEY',         '(EJXvYy+g#uaDXJ>&E{^kxC+~v6x[&[%#A0^lebAthIq{?6c4tqc`zrNQUdZg}&?');
define('SECURE_AUTH_KEY',  'KN (fwV?Dz{1U3K[laBc&hXQab7b?ZddUST7:6DJPHf!bS7eQ1u9L`Y{b7Ar#m56');
define('LOGGED_IN_KEY',    'o$r:m8{0Hy2=O,>{V!U74G7igDCN%uNo${RYX2CN8H*gra ulV.< wDjpPUemME`');
define('NONCE_KEY',        'H4^/s]qKFSuitKF1>uqG2}XgLeFHkZl:`_y1Km3,6w{; 1SB3{%_/n[ODZv;$lVh');
define('AUTH_SALT',        'IS_i;ONrHsc8;vpjY{&zBjm^x,k8Mh!h={sk1wBj<V.Q&e_-W#B; SJ!/&j$ekF8');
define('SECURE_AUTH_SALT', '}G^`KsG:+xaUVCd9#::SGQu=Nk|S~k(t%E)Hc}~((=GYPx]IbaL@JFfnT2FY7hOx');
define('LOGGED_IN_SALT',   'eW@zPb~~tkBiW.ZV(N+80*`]TvtLokzAL-&tWx<9uQ[l;:jMor*9s?rj&Q(7h_$~');
define('NONCE_SALT',       'Cy%kJ$$f.$h<nf@N>M)LsQF!Rb:`C^t<mC>@R:CVgtv_20;UC*/TR97j;$?H]?*Q');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'lp_';

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
