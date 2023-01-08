<?php
namespace App\Controllers;
use App\Controllers\BaseController;
/**
 * Filemanager
 */
class FileManager extends BaseController {
	public function index() {
		return view('filemanager');
	}
	/**
	 * backend untuk filemanager
	 * @author dadan hiayat
	 * @package FIlemanager
	 */
	public function backend() {
		require APPPATH . 'ThirdParty' . DIRECTORY_SEPARATOR . 'ElFINDER' . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'connector.minimal.php';
	}
}