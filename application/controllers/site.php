<?php

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
        $wanted = $this->session->userdata('skillWanted');
        $offered = $this->session->userdata('skillOffered');
        
        $query = "SELECT username FROM members WHERE skillWanted = ? AND skillOffered = ? ";
        $data['matches'] = $this->db->query($query, array($wanted, $offered));
        
        $this->load->view('members_area', $data);
        
    }
}
?>  