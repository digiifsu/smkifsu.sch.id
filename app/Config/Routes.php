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
/**
 * ROUTE FOR FRONTEND
 */
$routes->get('/', 'Home::index',['as'=>'frontend']);
$routes->get('post/(:num)/(:any)', "Home::detailPost/$1/$2", ['as' => 'frontend_detail_post']);
$routes->get('komli/show/(:num)/(:any)', "Komli::detail/$1/$2",['as'=>'frontend_detail_komli']);
$routes->get('struktur_organisasi', "StrukturOrganisasi::index",['as'=>'frontend_struktur_organisasi']);
$routes->get('profile', "Home::profile",['as'=>'frontend_profile']);
$routes->get('profile/visi_misi',"Home::visi_misi",['as'=>'frontend_visimisi']);
$routes->get('profile/budaya_sekolah',"Home::budaya_sekolah",['as'=>'frontend_budaya_sekolah']);
$routes->get('post','Home::post',['as'=>'frontend_post']);

/*
 * --------------------------------------------------------------------
 * Route for admin
 * --------------------------------------------------------------------
 */
$routes->get('ifsu-admin/login', "Admin\Account::loginView", ['as' => 'admin_login']);
$routes->post('ifsu-admin/check_login', 'Admin\Account::loginProccess', ['as' => 'admin_login_post']);
$routes->get('ifsu-admin/akun_saya', 'Admin\Account::akun_saya', ['as' => 'admin_akun_saya']);
/*
 * --------------------------------------------------------------------
 * Route group guarded with admin
 * --------------------------------------------------------------------
 */
$routes->group('ifsu-admin', ['filter' => 'auth'], function ($routes) {
	$routes->get("/", "Admin\Dashboard::index", ['as' => 'admin_dashboard']);
	/*
	 * --------------------------------------------------------------------
	 * Route group pages
	 * --------------------------------------------------------------------
	 */
	$routes->group(
		'/pages',
		function ($routes) {
			$routes->get('add', 'Admin\pages::index', ['as' => 'admin_pages']);
		}
	);
	/*
	 * --------------------------------------------------------------------
	 * Route group post
	 * --------------------------------------------------------------------
	 */
	$routes->group(
		'post',
		function ($routes) {
			$routes->get('/', fn() => redirect()->route('admin_post_all'));
			$routes->get('all', 'Admin\Post::index', ['as' => 'admin_post_all']);
			$routes->match(['GET', 'POST'], 'add_new', 'Admin\Post::addNew', ['as' => 'admin_post_addNew']);
			$routes->match(['GET', 'POST'], 'update/(:alphanum)', 'Admin\Post::update/$1', ['as' => 'admin_post_update']);
			$routes->get('delete/(:alphanum)', 'Admin\Post::delete/$1', ['as' => 'admin_post_delete']);
			//categories
			$routes->group(
				'categories',
				function ($routes) {
					$routes->match(['GET', 'POST'], '/', 'Admin\Categories::index', ['as' => 'admin_categories']);
					$routes->get('delete/(:alphanum)', 'Admin\Categories::delete/$1', ['as' => 'admin_categories_delete']);
					$routes->get('update/(:alphanum)', 'Admin\Categories::edit/$1', ['as' => 'admin_categories_edit']);
					$routes->post('update/(:alphanum)', 'Admin\Categories::update/$1', ['as' => 'admin_categories_edit_post']);

				}
			);
		}
	);
	/**
	 * ROUTES PENGATURAN
	 * */
	$routes->group('pengaturan',function($routes){
		$routes->get('profile', 'Admin\Pengaturan::profile', ['as'=>'admin_pengaturan_profile']);
		$routes->post('profile', 'Admin\Pengaturan::profileUpdate', ['as'=>'admin_pengaturan_profile_update']);
		$routes->get('general', 'Admin\Pengaturan::general',['as'=>'admin_pengaturan_general']);
		$routes->post('general', 'Admin\Pengaturan::generalUpdate',['as'=>'admin_pengaturan_update']);
	});
	/*
	 * --------------------------------------------------------------------
	 * Route group bankdata
	 * --------------------------------------------------------------------
	 */
	$routes->group(
		'bank-data',
		function ($routes) {
			/*
			 * --------------------------------------------------------------------
			 * Route group siswa
			 * --------------------------------------------------------------------
			 */
			$routes->group(
				'siswa',
				function ($routes) {
					$routes->get('', "Admin\Siswa::index", ['as' => 'admin_bankdata_siswa']);
					$routes->post('add_new', "Admin\Siswa::store", ['as' => 'admin_tambah_siswa']);
					$routes->get('delete/(:any)', "Admin\Siswa::destroy/$1", ['as' => 'admin_bankdata_hapus_siswa']);
					$routes->get('edit/(:num)', "Admin\Siswa::edit/$1", ['as' => 'admin_bankdata_edit_siswa']);
					$routes->post('edit/(:num)', "Admin\Siswa::update/$1", ['as' => 'admin_bankdata_update_siswa']);

				}
			);
			/*
			 * --------------------------------------------------------------------
			 * Route group komli
			 * --------------------------------------------------------------------
			 */
			$routes->group(
				'komli',
				function ($routes) {
					$routes->get('/', 'Admin\KompetensiKeahlian::index', ['as' => 'admin_bankdata_komli']);
					$routes->post('/', 'Admin\KompetensiKeahlian::store', ['as' => 'admin_bankdata_tambah_komli']);
					$routes->get('delete/(:num)', 'Admin\KompetensiKeahlian::delete/$1', ['as' => 'admin_bankdata_delete_komli']);
					$routes->get('update/(:num)', 'Admin\KompetensiKeahlian::update/$1', ['as' => 'admin_bankdata_update_komli']);
					$routes->post('updates/(:num)', 'Admin\KompetensiKeahlian::postEdit/$1', ['as' => 'admin_bankdata_updates_komli']);
				}
			);

			/*
			 * --------------------------------------------------------------------
			 * Route group guru
			 * --------------------------------------------------------------------
			 */
			$routes->group(
				'guru',
				function ($routes) {
					$routes->get('/', 'Admin\Guru::index', ['as' => 'admin_bankdata_guru']);
					$routes->post('/', 'Admin\Guru::store', ['as' => 'admin_bankdata_tambah_guru']);
					$routes->get('delete/(:num)', 'Admin\Guru::destroy/$1', ['as' => 'admin_bankdata_delete_guru']);
					$routes->get('update/(:num)', 'Admin\Guru::edit/$1', ['as' => 'admin_bangdata_update_guru']);
					$routes->post('update/(:num)', 'Admin\Guru::update/$1', ['as' => 'admin_bankdata_update_post']);
				}
			);
			/*
			 * --------------------------------------------------------------------
			 * Route group kelas
			 * --------------------------------------------------------------------
			 */
			$routes->group(
				'kelas',
				function ($routes) {
					$routes->get('/', 'Admin\Kelas::index', ['as' => 'admin_bankdata_kelas']);
					$routes->post('/', 'Admin\Kelas::store', ['as' => 'admin_bankdata_tambah_kelas']);
					$routes->get('edit/(:num)', 'Admin\Kelas::edit/$1', ['as' => 'admin_bankdata_update_kelas']);
					$routes->post('edit/(:num)', 'Admin\Kelas::update/$1', ['as' => 'admin_bankdata_post_update_kelas']);

				}
			);
			/*
			 * --------------------------------------------------------------------
			 * Route group eskul
			 * --------------------------------------------------------------------
			 */
			$routes->group(
				'eskul',
				function ($routes) {

				}
			);
			/*
			 * --------------------------------------------------------------------
			 * Route group agenda
			 * --------------------------------------------------------------------
			 */
			$routes->group(
				'agenda',
				function ($routes) {

				}
			);
			/*
			 * --------------------------------------------------------------------
			 * Route group pages
			 * --------------------------------------------------------------------
			 */
			$routes->group(
				"pages",
				function ($routes) {

				}
			);

		}
	);
	/*
	 * --------------------------------------------------------------------
	 * Route group upload
	 * --------------------------------------------------------------------
	 */
	$routes->group(
		'storage',
		function ($routes) {
			$routes->get('/', 'Storage::index', ['as' => 'admin_storage']);
		}
	);
	$routes->group(
		'upload',
		function ($routes) {
			$routes->post('post/image', 'FileUpload::uploadImagePost', ['as' => 'admin_post_upload_file']);
			$routes->get('get_uploaded_file', 'FileUpload::getUploadedFile', ['as' => 'admin_file_manage']);
		}
	);
	$routes->get('filemanager', 'FileManager::index', ['as' => 'filemanager']);
	$routes->match(['post', 'get'], 'filemanager/backend', 'FileManager::backend', ['as' => 'filemanager_backend']);
});

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}