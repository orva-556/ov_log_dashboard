<?php

class Auth extends Controller
{

    public function __construct()
    {
        session_start();
    }

    public function index()
    {
        $data['title'] = 'Login';
        
        $data['nav_link_status'] = 'active';
        $data['nav_link_core'] = BASEURL . '/auth';
        $data['nav_link_name'] = 'Login';

        if (isset($_SESSION['username'])) {
            header("Location: " . BASEURL);
        } else {
            $this->view('templates/header', $data);
            $this->view('auth/index');
            $this->view('templates/footer');
        }
    }

    public function login()
    {
        $this->model('Auth_model')->getLogin();
        
        if (isset($_SESSION['username'])) {
            header("Location: " . BASEURL);
            exit;
        } else {
            Flasher::setFlash('Wrong Username or Password.', 'danger');
            header("Location: " . BASEURL . "/auth");
            exit;
        }
    }
    
    public function logout()
    {
        $this->model('Auth_model')->getLogout();

        Flasher::setFlash('You have been logged out.', 'primary');
        exit;
    }
}
