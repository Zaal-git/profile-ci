<<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

    public function __construct(){
        parent::__construct();
        $this->load->model('model');
    }

	public function index(){
        if ($this->session->userdata('email')){
            redirect('admin');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if($this->form_validation->run() == false){
            $data['title'] = 'Admin login Page';
            $this->load->view('auth/header', $data);
            $this->load->view('auth/login');
            $this->load->view('auth/footer');
        }else{
            $this->_login();
        }
    }

    private function _login()
{
    $email = $this->input->post('email');
    $password = md5($this->input->post('password')); // Hash password input dengan MD5

    // Ambil data admin dari database
    $admin = $this->model->get_user_by_email($email);

    if ($admin) {
        // Periksa password
        if ($password == $admin['password']) {
            // Password cocok, buat session
            $data = [
                'email' => $admin['email']
            ];
            $this->session->set_userdata($data);
            redirect('admin');
        } else {
            // Password salah
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Wrong password!</div>');
            redirect('auth/login');
        }
    } else {
        // Email tidak ditemukan
        $this->session->set_flashdata('message', '<div class="alert alert-danger">Email not registered!</div>');
        redirect('auth');
    }
}

}
