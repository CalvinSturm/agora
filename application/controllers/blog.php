<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller{

    public function index() {
        $data['main_content'] = 'blog_view';  
        $this->load->view('includes/template', $data);
    }
}
    
?>

    