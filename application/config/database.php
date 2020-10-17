<?php
defined('BASEPATH') or exit('No direct script access allowed');


global $SConfig;
$active_group = 'default';
$query_builder = TRUE;
$db['default'] = array(
	'dsn'	   => $SConfig->_dsn,
	'hostname' => $SConfig->_host_name,
	'username' => $SConfig->_database_username,
	'password' => $SConfig->_database_password,
	'database' => $SConfig->_database_name,
	'dbdriver' => $SConfig->_database_driver,
	'dbprefix' => $SConfig->_table_prefix,
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
