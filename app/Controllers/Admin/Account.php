<?php

/**
 * Summary of AuthController
 * Login Untuk admin
 */

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\User;
use \Config\{
    Services,
};

class Account extends BaseController
{
    protected $helpers = ['form'];
    public function loginView()
    {
        $title = "login";
        return view("admin/login", compact('title'));
    }
    public function loginProccess()
    {
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
                        //jika berhasil login dan verifikasi password
                    } else {
                        session()->setFlashdata('login_error', "Password not match!");
                        return redirect()->route('admin_login')->withInput();
                    }
                } else {
                    session()->setFlashdata('login_error', "Wrong email!");
                    return redirect()->route('admin_login')->withInput();
                }
            }
        }
    }
}
