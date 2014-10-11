
<?php if (! defined("BASEPATH")) exit("No direct access to the script allowed");

/**
* 
*/
class Results extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_results');
	}

	
	public function index()
	{
		$data['content_view'] = "v_results";
		$data['title'] = "Arsenal Guide: Results";
        $data['heading'] = "Results";
    	$this->load->view('admin/v_admin_template', $data);
	}

}



