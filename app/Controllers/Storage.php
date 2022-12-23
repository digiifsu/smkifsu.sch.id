<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Storage extends BaseController {

	public function index() {
		$cmd = "";
		if (isset($_GET['cmd'])) {
			$cmd = $_GET['cmd'];
		}
		$cmd = trim($cmd, '\\');
		$path = str_replace('/', DIRECTORY_SEPARATOR, FCPATH . "uploads" . DIRECTORY_SEPARATOR . $cmd);

		$directory = directory_map($path);
		$title = "Storage";
		return view("storage", compact('title', 'directory', 'cmd', 'path'));
	}
}
