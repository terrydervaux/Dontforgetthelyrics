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






// DEFAUT
$route['default_controller'] = 'home';
$route['404_override'] = '';

// /////////////////////////////////////////////////////////////////////
// //////////////////////// FONCTIONS DFTL /////////////////////////////
// /////////////////////////////////////////////////////////////////////

$route['home'] = 'home';
$route['player'] = 'player';


// ////////////////////////////////////////////////////////////////////
// //////////////////////// FONCTIONS CLASSIQUES //////////////////////
// ////////////////////////////////////////////////////////////////////

// NOUVELLE
$route['nouvelle/([0-9]+)/(.*)'] = 'nouvelles/lecture/$1/$2';
$route['nouvelles/page/([0-9]+)'] = 'nouvelles/page/$1';

// PRODUIT
$route['produits-sage/fiche-([0-9]+)-(.*)'] = 'produits/produit/$1';
$route['produits-alliances/fiche-([0-9]+)-(.*)'] = 'produits/produit/$1';

// PAGE
$route['pages/(.*)'] = 'pages/lecture/$1';
$route['mentions-legales'] = 'pages/lecture/mentions_legales';
$route['nos-solutions'] = 'produits';
$route['nos-competences'] = 'pages/lecture/competences';
$route['notre-entreprise'] = 'pages/lecture/entreprise';
$route['contactez-nous'] = 'contact';






/* End of file routes.php */
/* Location: ./application/config/routes.php */