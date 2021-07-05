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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'dubravushka' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<GoiX5~(EEe,zX04WKT6nV#jyQM*d42n,eOo{Fw~Ps&ADKZ` ISi|<K(oPW79A<b' );
define( 'SECURE_AUTH_KEY',  'P/5<z9aQum*KDL&1<0@,nJNm]p(Qu6)VNxQ+W}Si:N^byLM0fvBYI2Eo-)C-61[i' );
define( 'LOGGED_IN_KEY',    '>+0lO(g2#%YneiZpKi7BlCOD5=E8Q><C^*obQ>1)@N6yg56.B!rPDeaD~l{(A-Un' );
define( 'NONCE_KEY',        '>^6,ylA^$2%Oq}UOPl% trV$B~1/)rTjXxtNd9.K(b5BQ[7[QfUf;X-T)WS+LqG1' );
define( 'AUTH_SALT',        'FRZKo5@f/tN1CLdj?JM{JcfWlZG|LP`QFGXe]!iQ7Mx!U`PEfY&b2rUknFQA-piV' );
define( 'SECURE_AUTH_SALT', 'W>kf%0~n(d,BUYHKG<q|P#eM:`E$q,M{-A*}<M8T3So3k8f!+i^W $f#B`2#yRh2' );
define( 'LOGGED_IN_SALT',   '~82+2<|B[.Kj~;]X>$Hv(qvx Oq%qe|$El5q&!jyltex]POVog<Na)OOwEW8QHuC' );
define( 'NONCE_SALT',       '9hR,;,;X].qoq3Zfw+;k&vpRrj7UZ?)fD,x9[p@4$QeC@tFI:b)93pM=+h;rmu+%' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
