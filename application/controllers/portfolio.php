<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portfolio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Portfolio_model');
    }

    public function index()
    {
        $data['title'] = 'Portfolio';
        $data['portfolios'] = $this->Portfolio_model->get_all_portfolios();
        
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('portfolio/index', $data);
        $this->load->view('admin/templates/footer');
    }

    public function add()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('description', 'Description', 'required|trim');
        $this->form_validation->set_rules('category', 'Category', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Portfolio';
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar');
            $this->load->view('portfolio/add', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $config['upload_path']   = './uploads/portfolio/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size']      = 2048;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('portfolio/add');
            } else {
                $imagePath = 'uploads/portfolio/' . $this->upload->data('file_name');

                $data = [
                    'title'       => $this->input->post('title'),
                    'description' => $this->input->post('description'),
                    'category'    => $this->input->post('category'),
                    'image_path'  => $imagePath,
                ];

                $this->Portfolio_model->insertPortfolio($data);
                $this->session->set_flashdata('success', 'Data berhasil ditambahkan!');
                redirect('portfolio');
            }
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Portfolio';
        $data['portfolio'] = $this->Portfolio_model->getPortfolioById($id);

        if (!$data['portfolio']) {
            show_404();
        }

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('portfolio/edit', $data);
        $this->load->view('admin/templates/footer');
    }

    public function update($id)
    {
        $portfolio = $this->Portfolio_model->getPortfolioById($id);
        if (!$portfolio) {
            show_404();
        }

        $data = [
            'title'       => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'category'    => $this->input->post('category'),
        ];

        if (!empty($_FILES['image']['name'])) {
            $config['upload_path']   = './uploads/portfolio/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size']      = 2048;
            $config['file_name']     = time() . '_' . $_FILES['image']['name'];

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                if ($portfolio['image_path'] && file_exists($portfolio['image_path'])) {
                    unlink($portfolio['image_path']);
                }
                $data['image_path'] = 'uploads/portfolio/' . $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('portfolio/edit/' . $id);
            }
        }

        $this->Portfolio_model->updatePortfolio($id, $data);
        $this->session->set_flashdata('success', 'Portfolio updated successfully.');
        redirect('portfolio');
    }

    public function delete($id)
    {
        $portfolio = $this->Portfolio_model->getPortfolioById($id);
        if (!$portfolio) {
            show_404();
        }

        if (!empty($portfolio['image_path']) && file_exists($portfolio['image_path'])) {
            unlink($portfolio['image_path']);
        }

        $this->Portfolio_model->deletePortfolio($id);
        $this->session->set_flashdata('success', 'Portfolio berhasil dihapus!');
        redirect('portfolio');
    }
}
