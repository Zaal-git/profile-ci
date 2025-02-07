<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portfolio_model extends CI_Model
{
    public function get_all_portfolios()
    {
        return $this->db->get('portfolio')->result_array();
    }

    public function getPortfolioById($id)
    {
        return $this->db->get_where('portfolio', ['id' => $id])->row_array();
    }

    public function insertPortfolio($data)
    {
        return $this->db->insert('portfolio', $data);
    }

    public function updatePortfolio($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('portfolio', $data);
    }

    public function deletePortfolio($id)
    {
        return $this->db->delete('portfolio', ['id' => $id]);
    }

    public function get_portfolio_item($id)
{
    return $this->db->get_where('portfolio', ['id' => $id])->row_array();
}

}
