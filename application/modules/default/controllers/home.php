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
    	$this->load->view('v_home');
    }
}