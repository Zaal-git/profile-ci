<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }


    public function get_user_by_email($email){
        return $this->db->get_where('admin', ['email' => $email])->row_array();
    }

    public function getSubMenu(){
        $query = "SELECT `user_sub_menu`.*, `user_menu` . `menu`
                  FROM `user_sub_menu` JOIN `user_menu` 
                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`  
        ";
        return $this->db->query($query)->result_array();
    }
}
