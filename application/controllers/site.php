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
    //Need to get accessing the DB out of the view , might need to make another model
   /* function getListing() {
        $query = $this->db->query("SELECT * From members;");
        return $query;

      

    } */
    
    //Check variable names with database
    function queries() {
        $wanted = $this->session->members('skillWanted');
        $offered = $this->session->members('skillOffered');
        
        $query = "SELECT username FROM members WHERE skillWanted=" . $wanted . " AND skillNeeded= " . $needed;
        $data['matches'] = $this->db->query($query);
        
        $this->load->view('matches_area', $data);
}
?>  