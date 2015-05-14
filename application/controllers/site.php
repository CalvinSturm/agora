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
        
        //$offered = $this->session->userdata('skillOffered');
        //$wanted = $this->session->userdata('skillWanted');
        $array = $this->session->all_userdata();
        print_r($array);
        $offered = $array['skillOffered'];
        $wanted = $array['skillWanted'];
        echo $offered;
        echo $wanted;
        
        //$thisUser = $this->session->userdata('username');
        // $zipcode = $this->session->userdata('zipcode');
        
        $query = "SELECT * FROM members WHERE skillWanted = ? AND skillOffered = ?";
        $data['matches'] = $this->db->query($query, array($offered, $wanted));


        //$this->load->view('includes/header');
        $this->load->view('members_area', $data);
        $this->load->view('includes/footer');
        
    }
}
?>  