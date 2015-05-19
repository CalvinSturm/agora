<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller { 
    //suppose to load members area after logging in
    function members_area() {
        $data['main_content'] = 'members_area';
        $this->load->view('includes/template', $data);
    }
    
    function is_logged_in() {
        $is_logged_in = $this->session->userdata('is_logged_in');

        if(!isset($is_logged_in) || $is_logged_in != true) {
            echo 'no permission for you';
        }
    }

    //Check variable names with database
    function myQuery() {
        if(!$this->session->userdata('is_logged_in')) {
            redirect('login', 'refresh');
            
        }

        $array = $this->session->all_userdata();
        
        $offered = $array['skillOffered'];
        $wanted = $array['skillWanted'];

        $query = "SELECT * FROM members WHERE skillWanted = ? AND skillOffered = ?";        
        $data['matches'] = $this->db->query($query, array($offered, $wanted));
        
        $query2 = "SELECT * FROM members WHERE skillWanted != ? AND skillOffered = ?";
        $data['matches2'] = $this->db->query($query2, array($offered, $wanted));
        
        $this->load->view('includes/header');
        $this->load->view('members_area', $data);
        $this->load->view('includes/footer');
        
    }
}

?>  