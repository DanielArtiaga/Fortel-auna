<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'LoginController/login';
$route['dashboard'] = 'DashboardController';
$route['cargarbase'] = 'CargarBaseController/cargarbase';
$route['reporte'] = 'ReporteController/reporte';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
