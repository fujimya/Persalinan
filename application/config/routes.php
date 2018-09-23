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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Controller_Masuk/masuk_akun';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['de69812784f2c02dffff1be7t84cfe52'] = 'Controller_Masuk/masuk_akun';

$route['ed3ceb87d825abdf4a52508302ef5037'] = 'Controller_Tagihan';
$route['b6cdac2ab744696e170350fe2e6f979f'] = 'Controller_Stok';
$route['de69812784f2c02044e61be7t84cfe52'] = 'Controller_Bidan';

$route['de69812784f3efj044e61be7t84cfe52'] = 'Controller_Utama';
$route['de69812784f3efj044e61q1xzyda0952'] = 'Controller_User';
$route['de69812784f3efj044e61qwwzyda0952'] = 'Controller_Karyawan/Tambah';
$route['de69812784f3efj044aloqwwwwww9952'] = 'Controller_Dept';
$route['de69812784f3efj04aljbxkhi97bb952'] = 'Controller_Bidan/Tambah';
$route['34273ee8ba2b8e0aeb43291372471e91'] = 'Controller_Salah';

$route['34273ee8ba2b8e0aeb43291372471e97'] = '';
$route['b8e02d83ede9831bf79fb654793d8025'] = '';
$route['b5609916968e1e51feaaca29025a9eff'] = '';
$route['6a031c485889b7b03a0852cfaeabf7f1'] = '';
$route['4419ecc30ef2367f60f853083eadafce'] = '';
$route['13cfc31143684d7e7e8834de99804874'] = '';
$route['28fe72f6b7481fb396d8fbe9c013680c'] = '';
$route['05bc3787f7fb67472fe96b4fc985e475'] = '';
$route['80d22e374dbdeb59260fe3de024b281c'] = '';
$route['522cc81be889354b75213e372ab60403'] = '';


$route['b8e02d83ede9831bf79fb654793d8021'] = '';
$route['b5609916968e1e51feaaca29025a9ef1'] = '';
$route['6a031c485889b7b03a0852cfaeabf7f2'] = '';
$route['4419ecc30ef2367f60f853083eadafc2'] = '';
$route['13cfc31143684d7e7e8834de99804872'] = '';
$route['28fe72f6b7481fb396d8fbe9c0136802'] = '';
$route['05bc3787f7fb67472fe96b4fc985e472'] = '';
$route['80d22e374dbdeb59260fe3de024b2812'] = '';

$route['f27a2148534d184a4a5656ac1a1993b8'] = '';
$route['ef640f4098cda6b4acc81d6494dae101'] = '';

$route['1526222d4c4227825dd0cdd3a75f9434'] = '';
$route['8f40cadedf37124fe28ea318994d6af5'] = '';