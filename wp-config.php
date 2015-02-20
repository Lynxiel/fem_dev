<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'femdev');

/** Имя пользователя MySQL */
define('DB_USER', 'femdev');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'BarCelo1086');

/** Имя сервера MySQL */
define('DB_HOST', 'db4free.net');

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
define('AUTH_KEY',         'jNLk36Ej0@4D0A#Pngtplyb7+NusHO%46mVzoWlSNoGN`A:.>QS+_fFQnXGI1w*.');
define('SECURE_AUTH_KEY',  '+`q{4)W<n/Qn}VlMtY3LOdHPa!pjiokPOYX7OJL}l;[a!QDy=W)`XJ=`,61+/g#f');
define('LOGGED_IN_KEY',    'Y-E8H++Q0x?&hr]3Nn$64hVq=!C]&7z(mLpq8;hU}$F)t#-V&%:R`^b-&aL=S&~q');
define('NONCE_KEY',        'C]m:cbU#MN={Xcj9Uz,f-2?S^%p(H+?}56>kfj,O-Yofi)+$#azF+t+n4ldeV93?');
define('AUTH_SALT',        '4:+C^.O<qK<t#+l`+A7IXek0FZS4~S2Y;;M-)ILF:|DM?1GZLrwk!/r/KZhgpeRk');
define('SECURE_AUTH_SALT', 'yC%^S7eoU*!k{tP]LzxdVJLa#&0CCZ%vJVShAGCUMoLe6*}IUO8WA_RY6NiLm|0Q');
define('LOGGED_IN_SALT',   'IU<<]l=3bYU(=+nHIT)28V1}):[3Md+f06?ZA%&9x@$0a#NH@/vG~<VzQHiGUla0');
define('NONCE_SALT',       '|D$(R|8p=-I(kT|sh$td*)-}_A^N,En%;`!-f0P=|a?gSs,lANJ,vd]i7OY4c7cg');

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
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
