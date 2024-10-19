<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('CarModel');
    }

    public function index()
    {
        $data['cars'] = $this->CarModel->get_all_cars();
        $this->load->view('templates/landing_header');
        $this->load->view('templates/landing_navbar');
        $this->load->view('index.php', $data);
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
        $data['cars'] = $this->CarModel->get_all_cars();    
        $this->load->view('templates/landing_header');
        $this->load->view('templates/landing_navbar');
        $this->load->view('catalog', $data);
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


    // Register Post
    public function registerPost()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
        $this->form_validation->set_rules('address', 'Alamat', 'required');
        $this->form_validation->set_rules('telephone', 'Nomor Telepon', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('password_confirm', 'Password Confirm', 'required|matches[password]');

        if($this->form_validation->run() == false){
            $this->load->view('templates/auth_header');
            $this->load->view('auth/register');
            $this->load->view('templates/auth_footer');
        }else{
            // Check if the property exists before setting it
            if (!property_exists($this->db, 'failover')) {
                $this->db->failover = []; // Initialize if necessary
            }
            $data = [
                'photo' => 'default.jpg',
                'name' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'address' => $this->input->post('address'),
                'telephone' => $this->input->post('telephone'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role' => 'user'
            ];
            $this->db->insert('users', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil membuat akun!</div>');
            redirect('auth/login');
        }
    }
    public function loginPost()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run() == false){
            $this->load->view('templates/auth_header');
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        }else{
           $this->_Login();
        }
    }
    private function _Login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('users', ['email' => $email])->row_array();
        
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'id' => $user['id'],
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'role' => $user['role']
                ];
                $this->session->set_userdata($data);
                if($user['role'] == 'admin'){
                    redirect('admin');
                }else{
                    redirect('');
                }
            } else {
                // Set flash message for password verification failure
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                redirect('auth/login'); // Redirect back to login
            }
        }
        
    }


    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil logout!</div>');
        redirect('auth/login');
    }
}
