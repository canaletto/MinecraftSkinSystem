<?php
if(!defined('INCLUDE_CHECK')) die('У вас нет прав на выполнение данного файла!');

// Метод хеширования пароля для интеграции с различними плагинами/сайтами/cms/форумами
/*
'hash_md5' 			- md5 хеширование
'hash_authme'   	- интеграция с плагином AuthMe
'hash_cauth' 		- интеграция с плагином Cauth
'hash_xauth' 		- интеграция с плагином xAuth
'hash_joomla' 		- интеграция с Joomla (v1.6- v1.7)
'hash_ipb' 			- интеграция с IPB
'hash_xenforo' 		- интеграция с XenForo
'hash_wordpress' 	- интеграция с WordPress
'hash_vbulletin' 		- интеграция с vBulletin
*/
$crypt = 'hash_md5';


// Конфигурация подключения к базе данных
$db_host		= 'localhost'; // Ip-адрес базы данных
$db_port		=  '3306'; // Порт базы данных
$db_user		= 'root'; // Пользователь базы данных
$db_pass		= 'root'; // Пароль базы данных

// Конфигурация базы данных для плагинов AuthMe, xAuth, CAuth и сайтав/cms/форумов Joomla, IPB, XenForo, WordPress
/*
$db_database - имя базы данных, значение по умолчанию:
AuthMe = 'authme'
xAuth = отсутствует (указывается вручную)
CAuth = 'cauth'
Joomla,IPB,XenForo,WordPress,vBulletin - отсутствует (указывается вручную)
*/
$db_database	= '_xf';

/*
$db_table - таблица базы данных, значение по умолчанию:
AuthMe = 'authme'
xAuth = 'accounts'
CAuth = 'users'
Joomla = 'префикс_users' - пример 'y3wbm_users', где "y3wbm_" - префикс. Примечание префикс может отсутствовать - пример 'users'
IPB = 'members'
XenForo = 'префикс_user' - пример 'xf_user', где "xf_" - префикс. Примечание префикс может отсутствовать - пример 'user'
WordPress = 'префикс_users' - пример 'wp_users', где "wp_" - префикс. Примечание префикс может отсутствовать - пример 'users'
vBulletin = 'префикс_user'
*/
$db_table       = 'xf_user';

/*
$db_columnUser - колонка логина, значение по умолчанию:
AuthMe = 'username'
xAuth = 'playername'
CAuth = 'login'
Joomla = 'name'
PB = 'name'
XenForo = 'username'
WordPress = 'user_login'
vBulletin = 'username'
*/
$db_columnUser  = 'username';

/*
$db_columnPass - колонка пароля, значение по умолчанию:
AuthMe = 'password'
xAuth = 'password'
CAuth = 'password'
Joomla = 'password'
IPB = 'members_pass_hash'
XenForo = 'data'
WordPress = 'user_pass'
vBulletin = 'password'
*/
$db_columnPass  = 'data';

// ДОПОЛНИТЕЛЬНЫЕ НАСТРОЙКИ ТОЛЬКО ДЛЯ IPB и XenForo

// Настраивается только для XenForo 'префикс_user_authenticate' - пример 'xf_user_authenticate', где "xf_" - префикс. Примечание префикс может отсутствовать - пример 'user_authenticate'
$db_tableOther = 'xf_user_authenticate';

// Настраивается для IPB и vBulletin
// IPB - members_pass_salt
//vBulletin - salt
$db_columnSalt = 'members_pass_salt';
/*
$db_columnSesId - колонка id сессии
*/
$db_columnSesId = 'session';

/*
$db_columnServer - колонка id сервера
*/
$db_columnServer = 'server';

/*
$db_GameDatatable - имя базы данных с информацией о версиях
*/
$db_GameDatatable = 'data';

/*
НЕ МЕНЯТЬ
*/
$db_Propertycolumn = 'property';
$db_Valuecolumn = 'value';


$link = @mysql_connect($db_host.':'.$db_port,$db_user,$db_pass) or die('Невозможно установить соединение с базой данных!');

mysql_select_db($db_database,$link);
mysql_query("SET names UTF8");
?>