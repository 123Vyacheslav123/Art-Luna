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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'superpass' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '<oe&d%<0Oz=^@VBfrA[mGOH@66*!Df)Gy#)3^1p;dC.=j_N]*x:/H[1?0GU{f=LF' );
define( 'SECURE_AUTH_KEY',  'E:u1w:{Y1:^/,Et3{ro0Jje?XV~7bI%)zy?z-r~l10yJ(JGi=8LO<z_U.DtvxbEY' );
define( 'LOGGED_IN_KEY',    'v<cnoDLO=SFb<!8g[lre2rX$=/.o#,7fZ[K$iwI@L|`9nm8Zc)$e+Be&Zht|oV|8' );
define( 'NONCE_KEY',        'J?A+$j&[G5eq*Gk6x]a5TqUAyI,(<h^*#[Tu#Vwv[OUC+{$pptNr] tkW6X[bL@s' );
define( 'AUTH_SALT',        '!28@L]19B& ^*iUNKF,)M2o_mMdpc9OXz99H>/b)3AfZ3VWfep|wHKb973QkJoxr' );
define( 'SECURE_AUTH_SALT', 'i,<efQ]Y?fiGFNcVhr]jY$G!wF]o5[H16HD2:m$&GnjHV^0SI1mUuUbAh/_lg!?M' );
define( 'LOGGED_IN_SALT',   'b>2s /tI8,7B81KEG.N4+Q<>|#CohrS;$qE.31=)BdX.f=L~;8|&U00g/>z~U|};' );
define( 'NONCE_SALT',       'B4^:Mb9Gr:h=DSkdcz8zHb$4?] W4##8Y5}[:um<eFf?~Zey71|1/V:>d2sLO9#W' );

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
