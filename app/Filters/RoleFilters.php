<?php
namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class RoleFilters implements FilterInterface{
    public function before(RequestInterface $request, $arguments = null)
    {
        if ((login_data()->role ?? false) !== 'super_admin') {
            return redirect()->route('admin_dashboard');
        }
    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}