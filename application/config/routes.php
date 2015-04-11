<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$route['default_controller'] = 'user/index';
//$route['default_controller'] = 'user/index';
$route['404_override'] = '';

/*admin*/
$route['signup'] = 'user/signup';
$route['create_member'] = 'user/create_member';
$route['login'] = 'user/index';
$route['logout'] = 'user/logout';
$route['login/validate_credentials'] = 'user/validate_credentials';

$route['inicio/inicio'] = 'inicio/index';
$route['inicio/tutoriales'] = 'inicio/index';


$route['reportes/dashboard'] = 'reportes/index';

$route['ajax/ejemplo'] = 'ajax/index';
$route['mantenimientos/cargasdrc'] = 'carga_csv/index';
$route['mantenimientos/diaslaborales'] = 'diaslaborales/index';
$route['mantenimientos/desmantelado'] = 'desmantelado/index';
$route['operaciones/solicitudesconsejeras'] = 'solicitudesconsejeras/index';
$route['bodega/pedidospendientes'] = 'pedidospendientes/index';
$route['operaciones/solicitudesbuzones'] = 'solicitudesbuzones/index';
$route['consultas/consultaconsejera'] = 'consultaconsejera/index';
$route['boletas/datosboletas'] = 'datosboletas/index';
$route['boletas/consultasboletas'] = 'consultasboletas/index';
$route['pilotos/cuadrepilotos'] = 'cuadrepilotos/index';
$route['pilotos/cargaseficiencias'] = 'cargaseficiencias/index';
$route['mantenimientos/bancos'] = 'bancos/index';
$route['mantenimientos/agencias'] = 'agencias/index';
$route['mantenimientos/adicionales'] = 'adicionales/index';
$route['mantenimientos/buzones'] = 'buzones/index';
$route['mantenimientos/bodegaje'] = 'bodegaje/index';
$route['mantenimientos/roles'] = 'roles/index';
$route['mantenimientos/usuarios'] = 'usuarios/index';
$route['reportes/eficiencias'] = 'eficiencias/index';
$route['consultas/consultapilotos'] = 'consultapilotos/index';
$route['consultas/cobrobodegaje'] = 'cobrobodegaje/index';
$route['boletas/tigomoney'] = 'tigomoney/index';


/* End of file routes.php */
/* Location: ./application/config/routes.php */