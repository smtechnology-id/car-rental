<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function index()
    {
        $this->load->view('templates/landing_header');
        $this->load->view('templates/landing_navbar');
        $this->load->view('index.php');
        $this->load->view('templates/landing_footer');
    } 
    public function login()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    } 

    public function register()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('auth/register');
        $this->load->view('templates/auth_footer');
    }

    // Catalog
    public function catalog()
    {
        $this->load->view('templates/landing_header');
        $this->load->view('templates/landing_navbar');
        $this->load->view('catalog');
        $this->load->view('templates/landing_footer');
    }

    // Contact
    public function contact()
    {
        $this->load->view('templates/landing_header');
        $this->load->view('templates/landing_navbar');
        $this->load->view('contact');
        $this->load->view('templates/landing_footer');
    }
}
