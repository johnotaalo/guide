<link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/css/player.css'?>">
<!--<script type="text/javascript" src = "<?php echo base_url() .'assets/js/upload.js'?>"></script>-->
<script type="text/javascript">
	function passDataAttribute(elmnt)
	{
		jersey_no = elmnt.id;
		object = $(document).find('div.selected');
		object.removeClass("selected");
		$('#'+jersey_no).addClass("selected");
		$('#jno').val(jersey_no);
	}
</script>

<script type="text/javascript">
			$(function() {
			    $("#uploadImage").on("change", function()
			    {
			        var files = !!this.files ? this.files : [];
			        if (!files.length || !window.FileReader)  return; // no file selected, or no FileReader support

			        if (/^image/.test( files[0].type)){ // only image file
			            var reader = new FileReader(); // instance of the FileReader
			            reader.readAsDataURL(files[0]); // read the local file

			            reader.onloadend = function(){ // set image data as background of div
			                $("#imagePreview").css("background-image", "url("+this.result+")");
			            }
			        }
			    });
			});
			</script>
<div class = "row">
	<div class = "col-md-6">
		<form class = "col-md-12" method = "POST" action = "<?php echo base_url() .'team/register'?>" enctype = "multipart/form-data" id = "player-form">
			<div class="form-row">
                <div class="form-label col-md-4">
                    <label for="">
                        First Name:
                    </label>
                </div>
                <div class="form-input col-md-8">
                    <input placeholder="First Name" name="firstname" id="" type="text" required>
                </div>
            </div>

            <div class = "form-row">
            	<div class="form-label col-md-4">
                    <label for="" >
                        Last Name:
                    </label>
                </div>
                <div class="form-input col-md-8">
                    <input placeholder="Last Name" name="lastname" id="" type="text" required>
                </div>
            </div>

            <div class = "form-row">
            	<div class="form-label col-md-4">
                    <label for="" >
                        Other Name:
                    </label>
                </div>
                <div class="form-input col-md-8">
                    <input placeholder="Other Name" name="othername" id="" type="text">
                </div>
            </div>

            <div class = "form-row">
            	 <div class="form-label col-md-4">
                    <label for="" >
                        Country:
                    </label>
                </div>
                <div class="form-input col-md-8">
                    <select name = "country" data-placeholder="Choose a Country..." class="chosen-select"><?php echo $country_select; ?></select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-label col-md-4">
                    <label for="datepicker2">
                        Year of Birth:
                    </label>
                </div>
                <div class="form-input col-md-8">
                    <input type="text" id="datepicker2" name="dob" required/>
                </div>
            </div>

            <div class="form-row">
                <div class="form-label col-md-4">
                    <label for="datepicker2">
                        Height:
                    </label>
                </div>
                <div class="form-input col-md-8">
                	<div class="input-append-wrapper input-append-right">
                		<div class="input-append bg-gray-alt">M</div>
            			<div class="append-right">
            				<input placeholder="Height" name="height" id="" type="number">
            			</div>
                	</div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-label col-md-4">
                    <label for="">
                        Salary:
                    </label>
                </div>
                <div class="form-input col-md-8">
                	<div class="input-append-wrapper">
                		<div class="input-append bg-black"><i class = "fa fa-money"></i></div>
            			<div class="append-left">
            				<input placeholder="Salary" name="salary" id="" type="number">
            			</div>
                	</div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-label col-md-4">
                    <label for="">
                        Jersey No:
                    </label>
                </div>
                <div class="form-input col-md-8">
                	<div class="input-append-wrapper input-append-right">
                		<a href = "#" title data-original-title = "CLick here to choose a jersey no" class = "black-modal-60"><div class="input-append bg-black"><i class = "glyph-icon icon-angle-right"></i></div></a>
                		 <div class="hide" id="black-modal-60" title="Select Jersey Number">
		                    <div class="pad10A">
		                        <?php echo $jersey_section; ?>
		                    </div>
		                </div>
            			<div class="append-right">
            				<input placeholder="Jersey No" name="jersey" id = "jno" type="text" readonly="readonly">
            			</div>
                	</div>
                </div>
            </div>

            <div class = "form-row">
            	<div class="form-label col-md-4">
            		<label for = "">
            			Position
            		</label>
            	</div>
            	 <div class="form-input col-md-8">
                    <select name = "position" data-placeholder="Choose a Position..." class="chosen-select"><?php echo $position_select; ?></select>
                </div>
            </div>


            <div class = "form-row">
            	<div class="form-label col-md-4">
            		<label for = "">
            			Photo:
            		</label>
            	</div>


            	<div class = "form-input col-md-8">
            		<input type = "file" name = "player_photo" id = "uploadImage"/>
            	</div>
            	<div class = "col-md-4"></div>
            	<div class = "col-md-8"><div id = "imagePreview"></div>
            	<div id="progressbox"><div id="progressbar"></div ><div id="statustxt">0%</div ></div><div id="output"></div>
            	</div>
            </div>

            <div class = "form-row">
            	<div class = "col-md-12">
	            	<div class = "col-md-6 center-margin">
		            	<button name = "save_player" class = "btn double-button primary-bg" id = "submitPlayer">
			            	<span class="button-content">
				                Save
				                <span>Complete Player Registration</span>
				            </span>
			            </button>
		            </div>
	            </div>
            </div>

            <div class = "form-row">
            	<div class = "col-md-12">
            		<div id = "result"></div>
            	</div>
            </div>
		</form>
	</div>
</div>

<script type="text/javascript">
	$("#submitPlayer").click(function(){
		// alert('submitted');
		// 	var form = document.getElementById('player-form');
		// 	var r = document.getElementById('result');
		// 	form.onsubmit = function(event){
		// 		alert('prevented');
		// 		event.preventDefault();
		// 		alert($('#player-form').attr('action'));
		// 		$.ajax({
		// 		url: $('#player-form').attr('action'),
		// 		beforeSend: function( xhr ) {
		// 			r.innerHTML = '<center><i class = "fa fa-spinner fa-spin"></i> Please Wait</center>';
		// 		}
		// 		})
		// 		.done(function( data ) {
		// 			r.innerHTML = data;
		// 		})
		// 		.fail(function(){
		// 			r.innerHTML = "Error!";
		// 		});
		// 	}

		$("form#player-form").submit(function(){
			var formData = new FormData($(this)[0]);
			var r = document.getElementById('result');

		    $.ajax({
		        url: $("form#player-form").attr('action'),
		        type: 'POST',
		        data: formData,
		        async: false,
		        success: function (data) {
		            r.innerHTML = data;
		        },
		        cache: false,
		        contentType: false,
		        processData: false
		    });

	    return false;
		});
	});
	
</script>

