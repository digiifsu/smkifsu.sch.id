<?php
namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class LoginFilters implements FilterInterface{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(false){
            session()->setFlashdata('login_error', 'Anda harus login dulu!');
            return redirect()->route('admin_login');
        }
    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}