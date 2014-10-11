$(document).ready(function(){
	base_url = getbaseurl();
	createPlayers();
});

function createPlayers()
{
	var r = document.getElementById('player-section');
	$.ajax({
		url: base_url + "/arsenalguide/team/createPlayersSection",
		beforeSend: function( xhr ) {
			r.innerHTML = '<div class = "col-md-12"><center><i class = "fa fa-spin fa-spinner"></i> Searching...<center></div>';
		}
		})
		.done(function( data ) {
			r.innerHTML = data;
		})
		.fail(function(){
			r.innerHTML = "Error!";
		});
}

function getbaseurl()
{
	protocol = window.location.protocol;
	host = window.location.host;
	base_url = protocol + "//"+host;

	return base_url;
}