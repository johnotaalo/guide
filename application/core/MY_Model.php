<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Model extends CI_Model 
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function getAllPlayers()
    {
    	$query = $this->db->query("SELECT * FROM players");
    	$players = $query->result_array();

    	return $players;
    }
    function getCountries()
    {
    	$query = $this->db->query("SELECT * FROM countries");
    	$countries = $query->result_array();

    	foreach ($countries as $country) {
    		$country_details[$country['idCountry']] = $country;
    	}

    	return $country_details;
    }

    function getPositions()
    {
    	$query = $this->db->query('SELECT *  FROM positions');
    	$positions = $query->result_array();

    	foreach ($positions as $position) {
    		$position_details[$position['position_id']] = $position;
    	}

    	return $position_details;
    }

    function getPlayersByValue($column, $value)
    {
    	$query = $this->db->query("SELECT * FROM players WHERE " . $column . " = " .$value);
    	$players = $query->result_array();

    	return $players;
    }
}