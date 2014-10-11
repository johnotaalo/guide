
<?php if (! defined("BASEPATH")) exit("No direct access to the script allowed");

/**
* 
*/
class Fixtures extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_fixture');
	}

	
	public function index()
	{
		$data['content_view'] = "v_fixtures";
		$data['title'] = "Arsenal Guide: Fixtures";
        $data['heading'] = "Fixtures";
    	$this->load->view('admin/v_admin_template', $data);
	}

}



