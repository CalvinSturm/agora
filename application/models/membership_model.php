<?php
class Membership_model extends CI_Model { 
    //validates username and password
    function validate() {
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', $this->input->post('password'));//md5($this->input->post('password')));
        $query = $this->db->get('members');
        
        if($query->num_rows == 1) {
            return true;     
            
        }                         
        
    }   
    //creates a new member in the data base..we can add more fields
    function create_member() {
        $new_member_insert_data = array(
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
            );
        
    $insert = $this->db->insert('members', $new_member_insert_data);
    return $insert;
    }
}
?>