<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class M_team extends MY_Model 
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function getPlayer($param)
    {
    	$query = $this->db->query("SELECT * FROM players WHERE firstname LIKE '%" . $param . "%' OR lastname LIKE '%" . $param . "%' OR othernames LIKE '%" . $param . "%'");

    	$player = $query->result_array();
    	return $player;
    }

    function addPlayer($path)
    {
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $othername = $this->input->post('othername');
        $country = $this->input->post('country');
        $position = $this->input->post('position');
        $dob = $this->input->post('dob');
        $dob = strtotime($dob);
        $dob = date("Y-m-d", $dob);
        $jersey = $this->input->post('jersey');
        $height = $this->input->post('height');
        $salary = $this->input->post('salary');
        $photo = $path;

        $query = $this->db->query("INSERT INTO players VALUES(NULL,'".$firstname."', '".$lastname."', '".$othername."', '".$dob."', '".$country."', '".$height."', '".$salary."', '".$photo."', '".$jersey."', '".$position."')");

        if($query)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}