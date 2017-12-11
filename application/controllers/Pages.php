<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Pages extends CI_Controller {
    
    public function __construct()
        {
                parent::__construct();
                $this->load->model('User_Model');//load the modal
                $this->load->helper('form'); //load the form
                
        }

    
    public function view($page = 'home'){
        if ( ! file_exists(APPPATH.'views/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                            show_404();
        }
        $data['users'] = $this->User_Model->get_users(); // Get User data from database
        $data['usersByID'] = $this->User_Model->get_users_byid(5); // Get User data from database
        
        
        $this->load->helper('security');  
        $this->load->library('form_validation');  
  
        $this->form_validation->set_rules('user_name', 'Username:', 'required|trim|xss_clean|callback_validation');  
        $this->form_validation->set_rules('user_password', 'Password:', 'required|trim');  
        
        $login = $this->User_Model->log_in_correctly(); // Get User data from database
         
        //print_r($login);
        if ($login==1)  
        {  
  
             redirect('index.php/user');  
        } 
              
        
        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('header', $data);
        $this->load->view($page, $data);
        $this->load->view('footer', $data);
    }
    
    
}