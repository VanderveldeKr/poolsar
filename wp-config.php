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
 * * Настройки базы данных
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
define( 'DB_NAME', 'poolsar' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'W^sd&7d0cCwM Hfu^&FDmE3:{T~hn45N]m(t+ld L=gYvyZ*X5uc}iD0?2uo:.M0' );
define( 'SECURE_AUTH_KEY',  'pyL^Y0QypR^0W=%#4eiT^|(VErN<g%GbDHrhc&_]+WEr!(z@$UwNYt/>_R`w[R/L' );
define( 'LOGGED_IN_KEY',    'yJuFK&h(Ahoy_Ui6`z](@,It`e6=I x%Wj:dq:# !G@P@IN6Jw9o}Ve*.:Kw5G3&' );
define( 'NONCE_KEY',        'EtP;-AzQ<Rub,`_Py9>5=I>|&v5`^tGS+wVBYo-M|f.%H#ps ?}vbGX?}pXgq/Ta' );
define( 'AUTH_SALT',        '@}GT&IJ81ruPtdT=ui@ITN]x$-p3e#`4xeAxw}zMIMfZi<TV4]25%| OTQLI+@-&' );
define( 'SECURE_AUTH_SALT', '?afCe9.,}7vzMUl%I[mtV*2#Rm7wMea?46XXrObmS-hqdICrQyPYy&q:3L_xwy`N' );
define( 'LOGGED_IN_SALT',   '*A<z/pZo<AiY%m_R}]sfm)y2u$YD4e@]5pOk`5GUziZfM!ONO`y>4*.^Z9|3dS P' );
define( 'NONCE_SALT',       'Tluc#2Mj~%3:qH8)qX?i}+fIC~OU:(9Hsk-0b2c6%c]_-<&CQ~#iPy^B~0jfTrEW' );

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
