<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'apicontroller/index';

$route['apicontroller'] = 'apicontroller/index';
$route['apicontroller/proyek_lokasi_tambah'] = 'apicontroller/proyek_lokasi_tambah';
$route['apicontroller/proyek_lokasi_simpan'] = 'apicontroller/proyek_lokasi_simpan';
$route['apicontroller/proyek_lokasi_edit/(:num)/(:num)'] = 'apicontroller/proyek_lokasi_edit/$1/$2';
$route['apicontroller/proyek_lokasi_update/(:num)/(:num)'] = 'apicontroller/proyek_lokasi_update/$1/$2';
$route['apicontroller/proyek_lokasi_hapus/(:num)/(:num)'] = 'apicontroller/proyek_lokasi_hapus/$1/$2';
$route['apicontroller/proyek_tambah'] = 'apicontroller/proyek_tambah';
$route['apicontroller/proyek_simpan'] = 'apicontroller/proyek_simpan';
$route['apicontroller/proyek_edit/(:num)'] = 'apicontroller/proyek_edit/$1';
$route['apicontroller/proyek_update/(:num)'] = 'apicontroller/proyek_update/$1';
$route['apicontroller/proyek_hapus/(:num)'] = 'apicontroller/proyek_hapus/$1';

$route['apicontroller/lokasi_tambah'] = 'apicontroller/lokasi_tambah';
$route['apicontroller/lokasi_simpan'] = 'apicontroller/lokasi_simpan';
$route['apicontroller/lokasi_edit/(:num)'] = 'apicontroller/lokasi_edit/$1';
$route['apicontroller/lokasi_update/(:num)'] = 'apicontroller/lokasi_update/$1';
$route['apicontroller/lokasi_hapus/(:num)'] = 'apicontroller/lokasi_hapus/$1';
