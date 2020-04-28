<?php
class User_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function verify_credentials($Password = FALSE, $User_ID = FALSE){
        if(!$Password || !$User_ID){
            return false;
        }
        else
        {
            $this->db->select('*');
            $this->db->from('user');
            $array = array('User_ID' => $User_ID, 'Password' => $Password);
            $this->db->where($array);
            return $this->db->get(); 
        }
    }

    public function create_account() {
        $data = array(
            'First_Name' => $this->input->post('first_name'),
            'Last_Name' => $this->input->post('last_name'),
            'Password' => $this->input->post('create_password')
        );
        $this->db->insert('user', $data);
        return $this->db->insert_id();
    }
}