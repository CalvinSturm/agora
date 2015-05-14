<?php
class Membership_model extends CI_Model { 
    //validates username and password
    function validate() {
        $this->db->where('username', $this->input->post('username'));
        
        // do the hash guys. DO IT. 
        $this->db->where('password', $this->input->post('password'));//md5($this->input->post('password')));
        $query = $this->db->get('members');
        
        
        if($query->num_rows() == 1) {
        
        	// You have to call the method to return the result of the query
            return $query->result_array(); 
            
            // return $query     
            
        }    else {
            
            return false;
        }
        
    }   
    //creates a new member in the data base.fields reduced/changed
    function create_member() {
        $new_member_insert_data = array(
            //'fname' => $this->input->post('fname'),
            //'lname' => $this->input->post('lname'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'skillWanted' => $this->input->post('skillWanted'),
            'skillOffered' => $this->input->post('skillOffered'),
            'zipcode' => $this->input->post('zipcode'),
            'password' => $this->input->post('password')
            );
        
    $insert = $this->db->insert('members', $new_member_insert_data);
    return $insert;
    }
    
    function getListingInfo() {
        
    }
}
?>