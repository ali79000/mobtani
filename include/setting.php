<?php
if( ! defined('DBHOST'))
define('DBHOST','sql302.b6b.ir');
if( ! defined('DBUSER'))
define('DBUSER','b6bi_27932230');
if( ! defined('DBPASS'))
define('DBPASS','Ali13799731');
if( ! defined('DBNAME'))
define('DBNAME','b6bi_27932230_computer');
if( ! defined('CHARSET') )
	define( 'CHARSET', 'utf8mb4' );
if( ! defined('COLLATE') )
	define( 'COLLATE', 'utf8mb4_general_ci' );


$dbHost=DBHOST;
$dbUser=DBUSER;
$dbPass=DBPASS;
$dbName=DBNAME;

$charset =	CHARSET;
$collate =	COLLATE;

$softSetup = false;

if( ! defined('LOGIN_DEADLINE') )
	define( 'LOGIN_DEADLINE', 30 );  // days
if( ! defined('ACTIVITY_DEADLINE') )
	define( 'ACTIVITY_DEADLINE', 10 );  // minutes
?>