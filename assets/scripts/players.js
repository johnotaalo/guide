$(document).ready(function(){
	// base_url = getbaseurl();
	b=getbaseurl();
	justtrying();
	allplayers();


	$('#search').click(function(){
		parameter = $('#player-search').val();
		searchplayer(parameter);
	});

	$('#positions').change(function()
	{
		$('#player-search, #countries').not(":button").val('');
		parameter = $('#positions').val();
		if(parameter !== "")
		{
			othersearchparameter('position', parameter);
		}
		else
		{
			allplayers();
		}
	});

	$('#player-search').keyup(function (){
		$('#positions, #countries').not(":button").val('');
		param = $('#player-search').val();
		if(param !== "")
		{
			searchplayer(param);
		}
		else
		{
			allplayers();
		}
		// 
	});

	$('#countries').change(function()
	{
		$('#positions, #player-search').not(":button").val('');
		parameter = $('#countries').val();
		if(parameter !== "")
		{
			othersearchparameter('country', parameter);
		}
		else
		{
			allplayers();
		}
	});
});

function othersearchparameter(column, value)
{
	var r = document.getElementById('table-body');
	$.ajax({
		url: base_url + "/arsenalguide/team/complicatedSearch/"+column+"/"+parameter,
		beforeSend: function( xhr ) {
			r.innerHTML = '<tr><td colspan = "9"><center><i class = "fa fa-spin fa-spinner"></i> Searching...<center><td></tr>';
		}
		})
		.done(function( data ) {
			r.innerHTML = data;
		})
		.fail(function(){
			r.innerHTML = "Error!";
		});
}
function searchplayer(parameter)
{

    var r = document.getElementById('table-body');
	$.get( base_url + "/arsenalguide/team/search_test/"+parameter, function( data ) {
		 r.innerHTML = data;
	});
}

function allplayers()
{
	var r = document.getElementById('table-body');
	$.get( base_url + "/arsenalguide/team/allplayers", function( data ) {
		 r.innerHTML = data;
	});
}

function getbaseurl()
{
	protocol = window.location.protocol;
	host = window.location.host;
	base_url = protocol + "//"+host;

	return base_url;
}