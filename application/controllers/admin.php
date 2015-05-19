<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller{

    public function index() {
        $data['main_content'] = 'admin_view';  
        $this->load->view('includes/template', $data);
    }
}
    
?>