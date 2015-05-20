<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Membership_model extends CI_Model { 
    //validates username and password
    function validate() {
        $query = "SELECT * FROM members WHERE username = ?";
        $data = $this->db->query($query, array($this->input->post('username')));
        
        foreach ($data->result_array() as $row){
           $hashedPassword = $row['password'];
        }
        
        $typedPassword = $this->input->post('password');
        if(password_verify($typedPassword, $hashedPassword)) {        
        	// You have to call the method to return the result of the query
            return $data->result_array();     
            
        } else {
            
            return false;
        }
    }   
    
    //creates a new member in the data base
    function create_member() {
        $hashed = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        $new_member_insert_data = array(
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'skillWanted' => $this->input->post('skillWanted'),
            'skillOffered' => $this->input->post('skillOffered'),
            'zipcode' => $this->input->post('zipcode'),
            'password' => $hashed
        );
        
        $insert = $this->db->insert('members', $new_member_insert_data);
        return $insert;
    }
}
?>