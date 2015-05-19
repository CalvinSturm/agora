<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if($this->session->userdata('username') === 'admin') {
    $this->load->view('includes/admin_header');
    $this->load->view($main_content);
    $this->load->view('includes/admin_footer'); 
}
else {
    $this->load->view('includes/header');
    $this->load->view($main_content);
    $this->load->view('includes/footer'); 
    
}

?>