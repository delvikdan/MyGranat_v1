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
define('DB_NAME', 'ouspen_ddrvi');

/** Имя пользователя MySQL */
define('DB_USER', 'ouspen_ddrvi');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'NEk]jhBB');

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
define('AUTH_KEY',         '.MG5Uej7[5/IvsrH:k`m!lZOX}a#+@XTD%s}Q`8/Nm_eJtMpmV}ak+|ajo(*B>YO');
define('SECURE_AUTH_KEY',  '~Q86yu{jcHm3;:y+|)}eL%C*v0n+f$9Y?uUZ[& mDp+6BVaA8WHEpI$Y.C$%_WX`');
define('LOGGED_IN_KEY',    'e(B&@(Y1fa#Hu*9G$SJcd#{JkM5&.tUvwnj/&1J$!(_col_Ly@$(gAq@teN?L;,+');
define('NONCE_KEY',        '[;UIZ]<|dcx{--R=;TNjcu.:R{5OD)v<{McQajB`:pRLbW_GYJVd])*O^ba/tj[i');
define('AUTH_SALT',        'AL(q9M|+ .j]-!D5Deuo+vc$R#B*y[kF#2n%]D.<FmAcJ1A[J=a.KfPYW3l~qwF)');
define('SECURE_AUTH_SALT', '3yAF<%{PvhlcZh38^s.L7-h|DiM0[tW,?H%_q[:Z[[7za0tld3AG%_3bm{-cl2+Q');
define('LOGGED_IN_SALT',   'piVd??]%wpj4<CzR8N<kR#k1VTDY6Qu>~?N+_-^j`^_(2JW1{JuO`2uF{bP^hB g');
define('NONCE_SALT',       '1GVjI>[HCUZf3nl1%tVd8>UQ4d8)}]ijP-Or!5-+h)}$)Y-41ETU7/^Gnn7ms4Y@');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'ddrvi_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', true);


 //Изменяем путь к теме
define( 'WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/assets' );
define( 'WP_CONTENT_URL', 'http://mygranat.net/assets');

//Выключаем ревизии
define( 'WP_POST_REVISIONS', false );


/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
