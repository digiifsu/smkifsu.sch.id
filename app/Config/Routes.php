<?php

namespace Config;

$routes = Services::routes();

if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
//ROUTES
$routes->get('/', 'Home::index');
//router group untuk admin
$routes->group('webadmin', static function ($routes) {
    $routes->get("/", "Admin\Dashboard::index", ['as' => 'admin_dashboard']);
    //router login admin
    $routes->get('login', "Admin\Account::loginView", ['as' => 'admin_login']);
    $routes->post('check_login', 'Admin\Account::loginProccess', ['as' => 'admin_login_post']);
    //post router
    $routes->group('post',static function($routes){
        $routes->get('/', fn()=>redirect()->route('admin_post_all'));
        $routes->get('all', 'Admin\Post::index', ['as'=>'admin_post_all']);
        $routes->match(['GET','POST'],'addNew', 'Admin\Post::addNew', ['as'=>'admin_post_addNew']);
        $routes->match(['GET','POST'],'update/(:alphanum)','Admin\Post::update/$1');
    });
});
//
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
