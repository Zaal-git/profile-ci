<<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->check_login();
		is_logged_in();
	}

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
	private function check_login() {
		// Mengecek apakah user sudah login
		if (!$this->session->userdata('email')) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Please login first!</div>');
			redirect('auth/login'); // Arahkan ke halaman login
		}
	}

	public function index()
    {
        $data['title'] = 'Halaman Administrator';
        $data['user'] = $this->db->get_where('admin', ['email' =>$this->session->userdata('email')])->row_array();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/templates/footer');
    }
}
