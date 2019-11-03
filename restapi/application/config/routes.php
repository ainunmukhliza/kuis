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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['API'] = 'Rest_server';

// User API Routes

$route['Periode']['get'] = 'Periode/getPeriode';
$route['Periode']['post'] = 'Periode/insertPeriode';
$route['Periode']['delete'] = 'Periode/deletePeriode';
$route['Periode']['put'] = 'Periode/updatePeriode';
$route['soal']['get'] = 'soal/getsoal';
$route['soal']['post'] = 'soal/insertsoal';
$route['soal']['delete'] = 'soal/deletesoal';
$route['soal']['put'] = 'soal/updatesoal';
$route['role']['get'] = 'Role/getRole';
$route['role']['post'] = 'Role/insertRole';
$route['role']['delete'] = 'Role/deleteRole';
$route['role']['put'] = 'Role/updateRole';
$route['user']['get'] = 'User/getUser';
$route['user']['post'] = 'User/insertUser';
$route['user']['delete'] = 'User/deleteUser';
$route['user']['put'] = 'User/updateUser';
$route['userinrole']['get'] = 'UserInRole/getUserInRole';
$route['userinrole']['post'] = 'UserInRole/insertUserInRole';
$route['userinrole']['delete'] = 'UserInRole/deleteUserInRole';
$route['userinrole']['put'] = 'UserInRole/updateUserInRole';
$route['mahasiswa']['get'] = 'Mahasiswa/getMahasiswa';
$route['mahasiswa']['post'] = 'Mahasiswa/insertMahasiswa';
$route['mahasiswa']['delete'] = 'Mahasiswa/deleteMahasiswa';
$route['mahasiswa']['put'] = 'Mahasiswa/updateMahasiswa';
$route['petugas']['get'] = 'Petugas/getPetugas';
$route['petugas']['post'] = 'Petugas/insertPetugas';
$route['petugas']['delete'] = 'Petugas/deletePetugas';
$route['petugas']['put'] = 'Petugas/updatePetugas';
$route['jawaban']['get'] = 'Jawaban/getJawaban';
$route['jawaban']['post'] = 'Jawaban/insertJawaban';
$route['jawaban']['delete'] = 'Jawaban/deleteJawaban';
$route['jawaban']['put'] = 'Jawaban/updateJawaban';