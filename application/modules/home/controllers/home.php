<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Home extends MY_Controller 
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('m_home');
    }

    function index()
    {
        $data['title'] = "Arsenal Guide: Home";
		$data['content_view'] = "v_home";
        $data['heading'] = "Dashboard";
    	$this->load->view('admin/v_admin_template', $data);
    }

    function getUrl()
    {
        $base_details = array('base_url' => base_url());

        echo json_encode($base_details);
    }
}