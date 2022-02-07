<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress-module' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6om[wM>^pjgQjAR3S`3>iK{,iXk9][8d4 )^BfFnMAV!u^3H:4S>g:,C$=%X*u6H' );
define( 'SECURE_AUTH_KEY',  'Picw3#~:yOgt8.dzk.c}}-7lltw|dtx8SU`|JpR~#P^q<0tV#A4=RYp%7Wh{1Lg4' );
define( 'LOGGED_IN_KEY',    '~p2XV^mI0&YVbbj/yinEgbmTYH8d9TRn!J15o!74z<#-,ukiZO{Bcf3/B>SF]:cH' );
define( 'NONCE_KEY',        '}i(l*:2Gw/bQ^>x#LC-W<e5^6t8M@M20:oPNGbk|al;-s@[4:ty+,inJIiGo&U{R' );
define( 'AUTH_SALT',        '2k-o<8r:+|$rG-0bu<)bIf2xxf.WXg[OsX8t2@K>d<F5mR(/yk{6LWG>8>f8>!N.' );
define( 'SECURE_AUTH_SALT', 'fz:ts%b/!)lai5@@_]D#&>+bLOxEH;w ,XRw&t DR|wOMk&}{V6:]}>4aP|e|M=d' );
define( 'LOGGED_IN_SALT',   'e(#Us}m3.&d{-<Ql2`|G8sVhzcb[k(g9qBZ[skO+ozsuzq9~r%i3WzbL.k8$0|dp' );
define( 'NONCE_SALT',       '1Na2_0j?nhk(hVK!#+u82B7;8[r0]ojKE+hR%n-B%ZiJ/VjeqyJyiiva{O_ZM25g' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
