<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
////Frontend Routes Routes
$routes->get('/', 'Home::index');
$routes->get('/category', 'Home::category');
$routes->get('/singlepost', 'Home::singlepost');
$routes->get('/searchresult', 'Home::searchresult');
$routes->get('/contact', 'Home::contact');
$routes->match(['get', 'post'], '/sendmail', 'Home::sendMail');
$routes->get('/about', 'Home::about');
$routes->get('/category/(:num)', 'Home::singleCategory/$1');
$routes->match(['get', 'post'], '/frontapiblogs', 'Home::frontApiBlogs');
$routes->match(['get', 'post'], '/frontApiBlogs/(:segment)/(:any)', 'Home::frontApiBlogs/$1/$2');
$routes->match(['get', 'post'], '/singleallblogs/(:segment)/(:any)', 'Home::singleAllBlogs/$1/$2');
$routes->get('/allapiblogs', 'Home::allApiBlogs');


//Login Routes
$routes->get('/login', 'AdminController::login');
$routes->match(['get', 'post'], '/loginAuth', 'AdminController::loginAuthentication');
$routes->match(['get', 'post'], '/resendOtp', 'AdminController::resendOtp');
$routes->match(['get', 'post'], '/sendOtpEmail', 'AdminController::sendOtpEmail');
$routes->match(['get', 'post'], '/verifyOtp', 'AdminController::verifyOtp');

//Blog Routes
$routes->match(['get', 'post'], '/allblogs', 'AdminController::allblog');
$routes->get('/addblog', 'AdminController::addblog');
$routes->match(['get', 'post'], '/submitBlog', 'AdminController::submitBlog');
$routes->match(['get', 'post'], '/updateBlog', 'AdminController::updateBlog');
$routes->get('/editBlog/(:num)', 'AdminController::editBlog/$1');
$routes->get('/deleteBlog/(:num)', 'AdminController::deleteBlog/$1');
$routes->get('/restoreBlog/(:num)', 'AdminController::restoreBlog/$1');
$routes->get('/deletedblogs', 'AdminController::deletedblogs');
$routes->get('/perDeletedblogs/(:num)', 'AdminController::perDeletedblogs/$1');
$routes->get('/upload', 'AdminController::upload');

//Category Routes
$routes->get('/categories', 'AdminController::category');
$routes->get('/addcategories', 'AdminController::addcategory');
$routes->match(['get', 'post'], '/submitCategory', 'AdminController::submitCategory');
$routes->get('/editCategory/(:num)', 'AdminController::editCategory/$1');
$routes->match(['get', 'post'], '/updateCategory', 'AdminController::updateCategory');
$routes->get('/deleteCategory/(:num)', 'AdminController::deleteCategory/$1');

//Author Routes
$routes->match(['get', 'post'], '/author', 'AdminController::author');
$routes->get('/addauthor', 'AdminController::addauthor');
$routes->post('/submitauthor', 'AdminController::submitauthor');
$routes->get('/editAuthor/(:num)', 'AdminController::editAuthor/$1');
$routes->match(['get', 'post'], '/updateAuthor', 'AdminController::updateAuthor');
$routes->get('/deleteAuthor/(:num)', 'AdminController::deleteAuthor/$1');


$routes->match(['get', 'post'], '/apiblogs', 'AdminController::apiblogs');
$routes->match(['get', 'post'], '/fetchApiData', 'ApiController::fetchApiData');
$routes->get('/editApi/(:num)', 'AdminController::editApi/$1');
$routes->match(['get', 'post'], '/updateApi/(:num)', 'AdminController::updateApi/$1');
$routes->post('/updateApi', 'AdminController::updateApi/');

$routes->match(['get', 'post'], '/deleteApi/(:num)', 'AdminController::deleteApi/$1');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
