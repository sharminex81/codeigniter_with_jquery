<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['users'] = "users/index";
$route['usersCreate']['post'] = "users/store";
$route['usersEdit/(:any)'] = "users/edit/$1";
$route['usersUpdate/(:any)']['put'] = "users/update/$1";
$route['usersDelete/(:any)']['delete'] = "users/delete/$1";