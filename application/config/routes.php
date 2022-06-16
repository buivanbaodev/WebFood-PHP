<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
*/
$route['default_controller'] = 'home';
$route['restaurants/report'] = 'admin/home/resReport';
$route['dishes/report'] = 'admin/home/dishesReport';
$route['users/report'] = 'admin/home/usersReport';
$route['orders/report'] = 'admin/home/ordersReport';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
