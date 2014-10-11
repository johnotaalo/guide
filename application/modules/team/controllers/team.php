
<?php if (! defined("BASEPATH")) exit("No direct access to the script allowed");

/**
* 
*/
class Team extends MY_Controller
{
    public $countries, $positions;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_team');
        $this->countries = $this->m_team->getCountries();
        $this->positions = $this->m_team->getPositions();
	}

	
	public function index()
	{
		$data['content_view'] = "v_team";
		$data['title'] = "Arsenal Guide: Team";
        $data['heading'] = "Team Management";
    	$data['position_select'] = $this->createPositions();
    	$data['country_select'] = $this->createCountries();
    	$this->load->view('admin/v_admin_template', $data);
	}

	function allplayers()
    {
    	$countries = $this->m_team->getCountries();
    	$positions = $this->m_team->getPositions();
    	// print_r($positions);die;
    	$player_section = "";
    	$players = $this->m_team->getAllPlayers();
    	if($players)
    	{
    		foreach ($players as $player) {
    			$country = $countries[$player['country']]['countryName'];
    			$position = $positions[$player['position']]['position'];
    			$player_birthday = date("d F Y", strtotime($player["dob"]));

    			$player_section .= '<tr><td>'.$player['firstname'].'</td><td>'.$player['lastname'].'</td><td>'.$player['othernames'].'</td>';
    			$player_section .= '<td>'.strtoupper($position).'</td>';
    			$player_section .= '<td>'.$player_birthday.'</td>';
    			$player_section .= '<td>'.strtoupper($country).'</td>';
    			$player_section .= '<td>'.$player['height'].'</td>';
    			$player_section .= '<td>'.$player['salary'].'</td>';
    			$player_section .= '<td>'.$player['jerseyno'].'</td>';
    			$player_section .= '</tr>';
    		}
    	}
    	else
    	{
    		$player_section .= '<tr><td colspan = "9"><center>No Data Found</center></td></tr>';
    	}
    	echo $player_section;
    }

    function search_test($p)
    {
    	$countries = $this->m_team->getCountries();
    	$positions = $this->m_team->getPositions();
    	// print_r($positions);die;
    	$player_section = "";
    	$players = $this->search($p);
    	if($players)
    	{
    		foreach ($players as $player) {
    			$country = $countries[$player['country']]['countryName'];
    			$position = $positions[$player['position']]['position'];
    			$player_birthday = date("d F Y", strtotime($player["dob"]));

    			$player_section .= '<tr><td>'.$player['firstname'].'</td><td>'.$player['lastname'].'</td><td>'.$player['othernames'].'</td>';
    			$player_section .= '<td>'.strtoupper($position).'</td>';
    			$player_section .= '<td>'.$player_birthday.'</td>';
    			$player_section .= '<td>'.strtoupper($country).'</td>';
    			$player_section .= '<td>'.$player['height'].'</td>';
    			$player_section .= '<td>'.$player['salary'].'</td>';
    			$player_section .= '<td>'.$player['jerseyno'].'</td>';
    			$player_section .= '</tr>';
    		}
    	}
    	else
    	{
    		$player_section .= '<tr><td colspan = "9"><center>No Data Found</center></td></tr>';
    	}
    	echo $player_section;
    }

    function complicatedSearch($column, $value)
    {
    	$countries = $this->m_team->getCountries();
    	$positions = $this->m_team->getPositions();
    	// print_r($positions);die;
    	$player_section = "";
    	$players = $this->m_team->getPlayersByValue($column, $value);
    	if($players)
    	{
    		foreach ($players as $player) {
    			$country = $countries[$player['country']]['countryName'];
    			$position = $positions[$player['position']]['position'];
    			$player_birthday = date("d F Y", strtotime($player["dob"]));

    			$player_section .= '<tr><td>'.$player['firstname'].'</td><td>'.$player['lastname'].'</td><td>'.$player['othernames'].'</td>';
    			$player_section .= '<td>'.strtoupper($position).'</td>';
    			$player_section .= '<td>'.$player_birthday.'</td>';
    			$player_section .= '<td>'.strtoupper($country).'</td>';
    			$player_section .= '<td>'.$player['height'].'</td>';
    			$player_section .= '<td>'.$player['salary'].'</td>';
    			$player_section .= '<td>'.$player['jerseyno'].'</td>';
    			$player_section .= '</tr>';
    		}
    	}
    	else
    	{
    		$player_section .= '<tr><td colspan = "9"><center>No Data Found</center></td></tr>';
    	}
    	echo $player_section;
    }

    function createPlayersSection()
    {
        $players_section = '';
        $players = $this->m_team->getAllPlayers();
        if($players)
        {
            foreach ($players as $player) {
                $country = $this->countries[$player['country']]['countryName'];
                $position = ucfirst(strtolower($this->positions[$player['position']]['position']));

                $players_section .= '<div class = "col-md-4">';
                $players_section .= '<div class = "profile-box content-box">';
                $players_section .= '<div class = "content-box-header clearfix bg-blue-alt">';
                $players_section .= '<img src="'.$player['photo'].'" alt="" width="36">';
                $players_section .= '<div class="user-details">'.$player['firstname']. ' ' .$player['lastname'].' <span>'.$position.'</span></div>';
                $players_section .= '</div> <!-- end header -->';
                $players_section .= '<div class = "nav-list">';
                $players_section .= '<ul>
                                        <li>
                                            <a href="javascript:;" title="Goals">
                                                Goals Scored: 5
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" title="">
                                                Country: '.$country.'
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" title="">
                                               Games Played: 2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" title="">
                                                View More
                                                <i class="glyph-icon icon-chevron-right float-right"></i>
                                            </a>
                                        </li>
                                    </ul>';
                $players_section .= '</div> <!-- end nav-list -->';
                $players_section .= '</div> <!-- end profile -->';
                $players_section .= '</div> <!-- end col-md-4 -->';
            }
        }
        else
        {
            $players_section .= '<div class = "content-box"><h1>No players have been registered yet</h1><br /><p><a href = "">Go Here to register a player</a></p></div>';
        }

        echo $players_section;
        return $players_section;
    }

    function addPlayer()
    {
        $data['content_view'] = "v_addplayer";
        $data['title'] = "Arsenal Guide: Add Player";
        $data['heading'] = "Team Management: Add Player";
        $data['position_select'] = $this->createPositions();
        $data['country_select'] = $this->createCountries();
        $data['jersey_section'] = $this->createJerseyAvailability();
        $this->load->view('admin/v_admin_template', $data);
    }

    function createJerseyAvailability()
    {
        $jersey_section = '';
        $players = $this->m_team->getAllPlayers();

        foreach ($players as $player) {
            $player_array[$player['jerseyno']] = $player;
        }
        $counter = 0;

        $counter++;
        while($counter <= 100)
        {
            $jersey_array[$counter] = $counter;
            $counter++;
        }

        foreach ($jersey_array as $jersey) {
            if (array_key_exists($jersey, $player_array)) {
                $player_fname = ucfirst(strtolower($player_array[$jersey]['firstname']));
                $player_lname = ucfirst(strtolower($player_array[$jersey]['lastname']));
                $player_name = $player_fname . ' ' . $player_lname;
                // echo "true <br />";
                $jersey_section .= '<div class = "col-md-4 jersey jerseytaken text-center" style = "background-image: url('.$player_array[$jersey]['photo'].');"><div class = "player-overlay"><h1>'.$jersey.'</h1><p class = "additionalinfo">'.$player_name.'</p></div></div>';
            }
            else
            {
                // echo "false <br/>";
                $jersey_section .= '<div class = "col-md-4 jersey text-center" onclick = "passDataAttribute(this);" id = '.$jersey.'><h1>'.$jersey.'</h1><p class = "additionalinfo">Not Assigned</p></div>';
            }
        }//die;
        return $jersey_section;
    }

    function register()
    {
        // print_r($this->input->post());die;
        $path = '';
        $config['upload_path'] = './assets/images/profile';
        $config['allowed_types'] = 'jpg|gif|jpeg|png';
        $this->load->library('upload', $config);
        // print_r($this->upload->do_upload('player_photo'));
        if ( ! $this->upload->do_upload('player_photo'))
        {
            $error = array('error' => $this->upload->display_errors());
            echo '<div class="infobox bg-red">
                    <div class="large btn bg-white info-icon">
                        <i class="glyph-icon icon-remove"></i>
                    </div>
                    <h4 class="infobox-title">Something went wrong!</h4>
                    <p>'.$error['error'].'</p>
                </div>';
        }
        else
        {
            // echo "true";die;
            $data = array('upload_data' => $this->upload->data());
            foreach ($data as $key => $value) {
                $path = base_url().'assets/images/profile/'.$value['file_name'];
                // $file_type = $value['file_type'];
                // $arr = explode(".", $value['file_name'], 2);
                // $file_type = $arr[1];
            }

            $result = $this->m_team->addPlayer($path);

            if ($result) {
                echo '<div class="infobox infobox-close-wrapper success-bg">
                    <a href="#" title="Close Message" class="glyph-icon infobox-close icon-remove"></a>
                    <div class="bg-green large btn info-icon">
                        <i class="glyph-icon icon-ok-sign"></i>
                    </div>
                    <h4 class="infobox-title">All ok, that is great!</h4>
                    <p>Successfully added player</p>
                </div>';
            }
            // echo "Success!";die;
        }
    }

}



