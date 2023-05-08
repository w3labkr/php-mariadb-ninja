<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;
use App\Interfaces\ControllerInterface;
use App\Helpers\Cookie;

class Logout extends Controller implements ControllerInterface
{
    public function get()
    {
        session_destroy();
        Cookie::del('username');
        Cookie::del('remember_token');
        echo $this->view('pages.auth.logout');
    }

    public function post()
    {
    }

    public function patch()
    {
    }

    public function put()
    {
    }

    public function delete()
    {
    }

    public function options()
    {
    }
}