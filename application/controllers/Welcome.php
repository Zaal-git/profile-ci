<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Panggil model di dalam konstruktor
        $this->load->model('Portfolio_model');  // Pastikan model sudah terinisialisasi di konstruktor
    }

    public function index() {
        // Ambil data portfolio dari model
        $data['portfolio_items'] = $this->Portfolio_model->get_all_portfolios();  // Pastikan model memanggil metode yang benar
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('profile/hero');
        $this->load->view('profile/about');
        $this->load->view('profile/stats');
        $this->load->view('profile/skills');
        $this->load->view('profile/resume');
        $this->load->view('profile/portfolio', $data);  
        $this->load->view('profile/services');
        $this->load->view('profile/contact');
        $this->load->view('templates/footer');
    }

	public function portfolio_details($id) {
		// Fetch the portfolio item by ID
		$portfolio_item = $this->Portfolio_model->get_portfolio_item($id);
	
		// Check if the portfolio item was found
		if ($portfolio_item) {
	
			$data['portfolio_item'] = $portfolio_item; // Pass the data to the view
			$this->load->view('profile/portfolio-details', $data);
		} else {
			show_404(); // If not found, show 404 error
		}
	}
	
	
}
?>
