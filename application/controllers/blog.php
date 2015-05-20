<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller{

    public function index() {  
        $header = 'includes/header';
        $footer = 'includes/footer';
        
        if($this->session->userdata('username') === 'admin') { 
            $header = 'includes/admin_header';
            $footer = 'includes/admin_footer';    
        }

        $data['main_content'] = 'blog_view';
        $query = 'SELECT * FROM blog ORDER BY id DESC';        
        $data['blogs'] = $this->db->query($query);
        $this->load->view($header);
        $this->load->view('blog_view', $data);
        $this->load->view($footer);
    }
    
    function post_blog() {
            $format = 'DATE_RFC822';
            $time = time();
            $date = standard_date($format, $time);
            $new_blog_data = array(
                'title' => $this->input->post('title'),
                'timeStamp' => $date,
                'name' => $this->input->post('name'),
                'body' => $this->input->post('body')
            );
        
        $insert = $this->db->insert('blog', $new_blog_data);
        redirect('blog');
    
    }
    
    function delete() {
        $id = $this->input->post('id');
        $query = 'SELECT * FROM blog'; 
        $this->db->delete('blog', array('id' => $id));
        redirect('blog');
        
    }     
}
    
?>

    