<?php
namespace App\Controllers;
use App\Controllers\BaseController;

class FileManager extends BaseController {
	public function index() {
		return view('filemanager');
	}
	public function backend() {
		require APPPATH . 'ThirdParty' . DIRECTORY_SEPARATOR . 'ElFINDER' . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'connector.minimal.php';
	}
}