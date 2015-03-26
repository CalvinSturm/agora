<?php

class Login extends CI_Controller {
    //loads the template & login data is saved as main_content
    function index() {
        $data['main_content'] = 'login_form';
        $this->load->view('includes/template', $data);
        
    }
    //checks if the user is logged in
    function validate_credentials() {
        $this->load->model('membership_model');
        $query = $this->membership_model->validate();
        
        if($query) {
            
            $data = array(
                'username' => $this->input->post('username'),
                'is_logged_in' => true
            );
            
            $this->session->set_userdata($data);
            $this->load->view('members_area');
            //redirect('site/members_area');
        }
        
        else {
            $this->index();
        }
        
    }
    
    function signup() {
    
        $data['main_content'] = 'signup_form';
        $this->load->view('includes/template', $data);
    }
    
    //rules for creating a member checks, validates and submits
    function create_member() {
        
        //$this->load->library('form_validation');
        
        $this->form_validation->set_rules('fname', 'Name', 'trimrequired');
        $this->form_validation->set_rules('lname', 'Last Name', 'trimrequired');
        $this->form_validation->set_rules('email', 'Email Address', 'trimrequired|vaild_email');
        $this->form_validation->set_rules('username', 'Username', 'trimrequired|min_length[5]');
        $this->form_validation->set_rules('password', 'Password', 'trimrequired|min_length[5]|max_length[32]');
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'trimrequired|matches[password]');
         
        if($this->form_validation->run() == False) {
            $this->signup();
            
        }
        else{
            $this->load->model('membership_model');
            if($query = $this->membership_model->create_member()) {
                $data['main_content'] = 'signup_successful';
                $this->load->view('includes/template', $data);
                               
            }
            else {
                $this->load->view('signup_form');
                
            }
        }      
    }
}


?>