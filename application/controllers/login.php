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
        
        //custom session array accessed globally with $this->session->userdata('arrayKey');
        //whenever a user logs in, their data is retrieved from out DB and saved into their cookies        
        if($query) {
            
            $data = array(
                'username' => $this->input->post('username'),
                'skillOffered' => $this->input->post('skillOffered'),
                'skillWanted' => $this->input->post('skillWanted'),   
                'zipcode' => $this->input->post('zipcode'),
                'is_logged_in' => true
            );
            
            $this->session->set_userdata($data);
            redirect('site/myQuery');
            //$data['main_content'] = 'members_area';
            //$this->load->view('includes/template', $data);          
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
        
        //$this->form_validation->set_rules('fname', 'Name', 'trimrequired');
       // $this->form_validation->set_rules('lname', 'Last Name', 'trimrequired');
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