<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'sindicato');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'maga_098');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '.[]c#~Cd,#-HSP~vJ2+)R7<igzL8g%CRu_*_BiY5n|:#b$4,xU,uN`*aHNyGmugS');
define('SECURE_AUTH_KEY', '#RDr/m?V3B=6uNg1T$#S-y!]+,zN4,IYj_byjTg`f|{<;09ft-;rS_TomA,_bV&h');
define('LOGGED_IN_KEY', 'W3=^hq@v:n!=$r2w~(x[Tu)p#aHAUD6a8@XyEeHeYU0phTv .6]*FC(#_RigpPQx');
define('NONCE_KEY', '!.ZS/68Y1{.7w>WZ-ozSxupPc)-kilDSjS!w;i1t+vy^Kq3Co3K5kyd}cU0e8ki8');
define('AUTH_SALT', 'dD>zPdPaKPiV,Z+o%Eb])4AMWB`,dfAUxiYMmJ$Byk3=/SS9%^=1(`}W4eqeR6Pe');
define('SECURE_AUTH_SALT', '|(L~Mc7R~I*NsK$;?:LE^`|,S;((XeHs|nk1NDG d=|XcK`~SJ|@qn]|k-89pm6@');
define('LOGGED_IN_SALT', 'FDbRJs/jcdi5V/1 hzEw`|j<EB4kgJljcW!D3Z=?%c cQc&-S`doc1WD- b8-KnE');
define('NONCE_SALT', '5_8NH}J?KvgK[_XfwaY]o!#?S&d;{duNQxb<#Rmi;hvbmgF7=`jB2$TEsxU<YS<6');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

