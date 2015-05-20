<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller{

    public function index() {
        $data['main_content'] = 'admin_view';  
        $this->load->view('includes/template', $data);
    }
        
    function delete_user() {
        $id = $this->input->post('id');
        $query = 'SELECT * FROM members'; 
        $this->db->delete('members', array('id' => $id));
        redirect('admin');
        
    }
    
    function retrieve_users()  {
        $query = 'SELECT * FROM members';
        $data['matches'] = $this->db->query($query);
        $this->load->view('includes/admin_header');
        $this->load->view('members_area', $data);
    }
}
    
?>