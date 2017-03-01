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
$route['default_controller'] = 'mg_dashboard/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['produk/brosur'] = 'brosur/mg_brosur/brosur';
$route['produk/ksurat'] = 'brosur/mg_brosur/ksurat';
$route['produk/knama'] = 'brosur/mg_brosur/knama';
$route['produk/sajalan'] = 'brosur/mg_brosur/sajalan';
$route['produk/kwitansi'] = 'brosur/mg_brosur/kwitansi';
$route['produk/nota'] = 'brosur/mg_brosur/nota';
$route['produk/kalender'] = 'brosur/mg_brosur/kalender';
$route['produk/skit'] = 'brosur/mg_brosur/skit';
$route['produk/yasin'] = 'brosur/mg_brosur/yasin';
$route['produk/undangan'] = 'brosur/mg_brosur/undangan';
$route['produk/xbanner'] = 'brosur/mg_brosur/xbanner';

$route['pemesanan/cara-pemesanan'] = 'pembayaran/index';
$route['contact-us'] = 'page/contact_us';