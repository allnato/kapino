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
$route['default_controller'] = 'KapinoController';
$route['404_override'] = '';

// Routes for Regular, Unprivilaged, Middle class, Timawan Kapino Users
$route['home'] = 'KapinoController/index';
$route['addUsers'] = 'KapinoController/addUsers';
$route['signup'] = 'KapinoController/signup';
$route['translate_uri_dashes'] = FALSE;
$route['market'] = 'KapinoController/TheMarket';
$route['profile'] = 'KapinoController/TheProfile';
$route['login'] = 'KapinoController/login';
$route['marketitem'] = 'KapinoController/TheMarketItem';
$route['seller'] = 'KapinoController/TheSeller';
$route['addFarms'] = 'KapinoController/addFarms';
$route['logout'] = 'KapinoController/TheLogout';
$route['newAds'] = 'KapinoController/TheNewAd';
$route['editAds'] = 'KapinoController/TheEditAd';
$route['deleteAds'] = 'KapinoController/TheDeleteAd';
$route['aboutUs'] = 'KapinoController/TheAboutUs';
$route['review'] = 'KapinoController/TheLeaveAReview';
$route['like'] = 'KapinoController/TheLikeAd';
$route['sellerprofile'] = 'KapinoController/TheSellerProfile';
$route['sort'] = 'KapinoController/TheSortMarket';
$route['filter'] = 'KapinoController/TheVarietyMarket';
$route['TheContact'] = 'KapinoController/contactUs';
// Default Kapino Users routes ends here

// Routes for the privilaged 1%, White Supremacy, Donald Trump, Elitist Kapino Admin Users
$route['dashboard'] = 'KapinoController/TheDashboard';
$route['users'] = 'KapinoController/TheUsers';
$route['sellers'] = 'KapinoController/TheSellers';
$route['products'] = 'KapinoController/TheProducts';