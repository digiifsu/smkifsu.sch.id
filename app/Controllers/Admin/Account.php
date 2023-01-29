<?php

/**
 * Summary of AuthController
 * Login Untuk admin
 */

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\Exceptions\PageNotFoundException;
use \Config\Services;

//use the ahahah
class Account extends BaseController {
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
						session()->set('is_login',true);
						session()->set('user_data',$found);
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
	public function all_account(){
		return view("admin/account/all",['title'=>'account']);
	}
	public function edit($id = null){
		if(null === $id){
			throw PageNotFoundException::forPageNotFound();
		}
		$data = (new User)->find($id);
		if(isset($_POST['edit'])){
			$post_data = $this->request->getPost();
			unset($post_data['edit']);
			if(empty($post_data['password'])){
				$post_data['password'] = $data['password'];
			} else {
				$post_data['password'] = password_hash($post_data['password'], PASSWORD_DEFAULT);
			}
			$user = new User();
			if($user->update($id, $post_data)){
				return redirect()->back()->with('success', 'data berhasil di update');
			}
			return redirect()->back()->with('success', 'data gagal di update');
		} else {
			return view('admin/account/edit_akun', ['title' => "Edit Akun ",'data'=>$data]);
		}
	}
	public function logout(){
		session()->destroy();
		session_unset();
		unset($_SESSION);
		return redirect()->route('login');
	}
	public function save_new_account(){
		$data = $this->request->getPost();
		$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
		if (model('User')->save($data)) {
			echo "dadn";
		}
	}
}
