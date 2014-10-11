<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends MX_Controller
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('team/m_team');
    }

    function search($p)
    {
    	$player = $this->m_team->getPlayer($p);
    	return $player;
    }

    function createPositions()
    {
    	$position_options = '';
    	$positions = $this->m_team->getPositions();

    	foreach ($positions as $position) {
    		$position_options .= '<option value = "'.$position['position_id'].'">'.$position['position'].'</option>';
    	}

    	return $position_options;
    }

    function createCountries()
    {
    	$countries_options = '';
    	$countries = $this->m_team->getCountries();

    	foreach ($countries as $country) {
    		$countries_options .= '<option value = "'.$country['idCountry'].'">'.$country['countryName'].'</option>';
    	}

    	return $countries_options;
    }
}