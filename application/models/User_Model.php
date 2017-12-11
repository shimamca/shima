<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User_Model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function get_users()
        {
                $query = $this->db->get('user'); // table user
                return $query->result_array();
        }
        
        
         public function get_users_byid($user_id)
        { 
            $query = $this->db->get_where('user',  array('user_id' => $user_id)); // table user with user_id 
            return $query->row_array();
           
        }
        
        public function log_in_correctly() {  
  
       $this->db->where('user_name', $this->input->post('user_name'));  
       //$this->db->where('user_password', $this->input->post('user_password'));  
       $query = $this->db->get('user');
        
       
        //print_r($query);exit;
        if ($query->num_rows() == 1)  
        {  
            return 1;  
        } else {  
            return 2;  
        }  
  
    }  
        
}