<?php
namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class LoginFilters implements FilterInterface{
    public function before(RequestInterface $request, $arguments = null)
    {
        $login = (session()->has('is_login') && session()->get('is_login') === true);

        if(!$login){
            session()->setFlashdata('login_error', 'Anda harus login dulu!');
            return redirect()->route('admin_login');
        }
    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}