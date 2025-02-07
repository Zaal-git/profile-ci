<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Mendapatkan semua kategori
    public function getAllCategories()
    {
        $query = $this->db->get('categories'); // Pastikan tabelnya benar
        return $query->result_array();
    }

    // Mendapatkan kategori berdasarkan ID

    public function getCategoryById($id)
{
    // Menggunakan query lebih sederhana
    $this->db->select('name');
    $this->db->where('id', $id);
    $query = $this->db->get('categories');
    return $query->row_array(); // Jika tidak ditemukan, akan mengembalikan null
}


}
?>
