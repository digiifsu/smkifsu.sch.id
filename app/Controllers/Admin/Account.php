<?php

/**
 * Summary of AuthController
 * Login Untuk admin
 */

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use \Config\Services;

//use the ahahah
class Account extends BaseController {
	protected $helpers = ['form'];
	public function loginView() {
		$title = "login";
		return view("admin/login", compact('title'));
	}
	public function loginProccess() {
		//load library validasi
		$validation = Services::validation();
		//cek apakah permintaan nya dari ajax
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$rules = array(
				'email' => 'required|valid_email',
				'password' => 'required',
			);
			//proses validasi
			$validation->setRules($rules);
			if (false == $validation->withRequest($this->request)->run()) {
				session()->setFlashdata('login_error', $validation->getErrors());
				return redirect()->route('admin_login')->withInput();
			} else {
				//jika validasi berhasil check e
				$found = model('User')->where('email', $this->request->getPost('email'))->first();
				if (!empty($found)) {
					if (password_verify($this->request->getPost('password'), $found['password'])) {
						return redirect()->route('admin_dashboard');
					} else {
						return redirect()->route('admin_login')->withInput()->with('login_error', "Password yang kamu ketikan tidak valid!");
					}
				} else {
					return redirect()->route('admin_login')->withInput()->with('login_error', 'Password belum terdaftar!');
				}
			}
		}
	}
	public function akun_saya(){
		//jika sudah login!
		return view('admin/account/akun_saya',['title'=>"Akun Saya"]);
	}
}
