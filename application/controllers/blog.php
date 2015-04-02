<?php if ( ! defined('BASEPATH')) exit 

class Blog extends CI_Controller{

    public function index()
    {
        //autoload database first
        $data['blog'] = $this->db->get('entries');
        //var_dump($data['blog']);
        $data['page_title'] = 'My Blog';
        $data['tagline'] = "Blog Posts are Awesome";
        
        $this->load->view('blog_view', $data);
    }
}
    
?>

    