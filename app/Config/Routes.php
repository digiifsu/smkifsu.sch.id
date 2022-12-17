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
/*
 * --------------------------------------------------------------------
 * Route for admin
 * --------------------------------------------------------------------
 */
$routes->get('webadmin/login', "Admin\Account::loginView", ['as' => 'admin_login']);
$routes->post('webadmin/check_login', 'Admin\Account::loginProccess', ['as' => 'admin_login_post']);
/*
 * --------------------------------------------------------------------
 * Route group guarded with admin
 * --------------------------------------------------------------------
 */
$routes->group('webadmin', ['filter' => 'auth'], function ($routes) {
    $routes->get("/", "Admin\Dashboard::index", ['as' => 'admin_dashboard']);
    /*
    * --------------------------------------------------------------------
    * Route group post
    * --------------------------------------------------------------------
    */
    $routes->group('post', static function ($routes) {
        $routes->get('/', fn () => redirect()->route('admin_post_all'));
        $routes->get('all', 'Admin\Post::index', ['as' => 'admin_post_all']);
        $routes->match(['GET', 'POST'], 'add_new', 'Admin\Post::addNew', ['as' => 'admin_post_addNew']);
        $routes->match(['GET', 'POST'], 'update/(:alphanum)', 'Admin\Post::update/$1');
    });
    /*
    * --------------------------------------------------------------------
    * Route group upload
    * --------------------------------------------------------------------
    */
    $routes->group('upload', function ($routes) {
        $routes->post('post/image', 'FileUpload::uploadImagePost', ['as' => 'admin_post_upload_file']);
        $routes->get('get_uploaded_file', 'FileUpload::getUploadedFile', ['as' => 'admin_file_manage']);
    });
});
//config
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
