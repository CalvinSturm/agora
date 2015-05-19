<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
    //loads the template & login data is saved as main_content
    function index() {
        if($this->session->userdata('is_logged_in')) {
            redirect('site/myQuery', 'refresh');
            
        } 
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
        
            print_r($query);
            $data = array(
                'username' => $query[0]['username'],
                'skillOffered' => $query[0]['skillOffered'],
                'skillWanted' => $query[0]['skillWanted'],   
                'zipcode' => $query[0]['zipcode'],
                'is_logged_in' => true
            );
            
            $this->session->set_userdata($data);
            if($query[0]['username'] === 'admin') {
                redirect('admin');

            } 
            else {
                redirect('site/myQuery');
            }
                      
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
    
    function sign_out() {
        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }
    
    
}


?>