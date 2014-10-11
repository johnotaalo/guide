<!-- AUI Framework -->
<!DOCTYPE html>
    <html>
    <head>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title><?php echo $title; ?></title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Favicons -->

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() .'assets/images/icons/apple-touch-icon-144-precomposed.png'?>" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() .'assets/images/icons/apple-touch-icon-114-precomposed.png'?>" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() .'assets/images/icons/apple-touch-icon-72-precomposed.png'?>" />
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() .'assets/images/icons/apple-touch-icon-57-precomposed.png'?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/font-awesome-4.1.0/css/font-awesome.min.css'?>">
        <link rel="shortcut icon" href="<?php echo base_url() .'assets/images/icons/arsenal.png'?>" />

        <!--[if lt IE 9]>
          <script src="assets/js/minified/core/html5shiv.min.js"></script>
          <script src="assets/js/minified/core/respond.min.js"></script>
        <![endif]-->

        <!-- Fides Admin CSS Core -->

        <link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/css/minified/aui-production.min.css'?>" />

        <!-- Theme UI -->

        <link id="layout-theme" rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/themes/minified/fides/color-schemes/dark-blue.min.css'?>" />

        <!-- Fides Admin Responsive -->

        <link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/themes/minified/fides/common.min.css'?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/themes/minified/fides/responsive.min.css'?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/datepicker/css/datepicker.css'?>">
        <!-- Fides Admin JS -->

        <script type="text/javascript" src="<?php echo base_url() .'assets/js/minified/aui-production.min.js'?>"></script>

        <script type="text/javascript" src = "<?php echo base_url() .'assets/datepicker/js/bootstrap-datepicker.js'?>"></script>
		<script type="text/javascript" src = "<?php echo base_url() .'assets/scripts/jquery-fileupload.js'?>"></script>

        <script>
            jQuery(window).load(
                function(){

                    var wait_loading = window.setTimeout( function(){
                      $('#loading').slideUp('fast');
                      jQuery('body').css('overflow','auto');
                    },1000
                    );

                });

        </script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body style="overflow: hidden;">
        

        <div id="loading" class="ui-front loader ui-widget-overlay bg-white opacity-100">
            <img src="<?php echo base_url() .'assets/images/loader-dark.gif'?>" alt="" />
        </div>

        <div id="page-wrapper" class="demo-example">

            <div id="page-header" class="clearfix">
                <div id="header-logo">
                    <a href="javascript:;" class="tooltip-button" data-placement="bottom" title="Close sidebar" id="close-sidebar">
                        <i class="glyph-icon icon-caret-left"></i>
                    </a>
                    <a href="javascript:;" class="tooltip-button hidden" data-placement="bottom" title="Open sidebar" id="rm-close-sidebar">
                        <i class="glyph-icon icon-caret-right"></i>
                    </a>
                    <a href="javascript:;" class="tooltip-button hidden" title="Navigation Menu" id="responsive-open-menu">
                        <i class="glyph-icon icon-align-justify"></i>
                    </a>
                    Arsenal Guide <i class="opacity-80"> Admin</i>
                </div>
                <div class="user-profile dropdown">
                    <a href="javascript:;" title="" class="user-ico clearfix" data-toggle="dropdown">
                        <img width="36" src="<?php echo base_url() .'assets/images/profile/chris.jpg'?>" alt="" />
                        <span>Chris Otaalo</span>
                        <i class="glyph-icon icon-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu float-right">
                        <li>
                            <a href="javascript:;" title="">
                                <i class="glyph-icon icon-user mrg5R"></i>
                                Account Details
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="">
                                <i class="glyph-icon icon-cog mrg5R"></i>
                                Edit Profile
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="">
                                <i class="glyph-icon icon-flag mrg5R"></i>
                                Notifications
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="">
                                <i class="glyph-icon icon-signout font-size-13 mrg5R"></i>
                                <span class="font-bold">Logout</span>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li><a><i class = "glyph-icon icon-time font-size-13 mrg5R"></i> <?php echo date("l d F Y"); ?></a></li>

                    </ul>
                </div>
                <div class="dropdown dash-menu">
                    <a href="javascript:;" data-toggle="dropdown" data-placement="left" class="medium btn primary-bg float-right popover-button-header hidden-mobile tooltip-button" title="Short Cut Menu">
                        <i class="glyph-icon icon-th"></i>
                    </a>
                    <div class="dropdown-menu float-right">
                        <div class="small-box">
                            <div class="pad10A dashboard-buttons clearfix">
                                <p class="font-gray-dark font-size-11 pad0B">This is a short cut menu for you to use.</p>
                                <div class="divider mrg10T mrg10B"></div>
                                <a href="<?php echo base_url(); ?>" class="btn vertical-button hover-blue-alt" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Dashboard</span>
                                </a>
                                <a href="<?php echo base_url() .'team'?>" class="btn vertical-button hover-green" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-group opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Team</span>
                                </a>
                                <a href="<?php echo base_url() .'fixtures'?>" class="btn vertical-button hover-orange" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-calendar opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Fixtures</span>
                                </a>
                                <a href="<?php echo base_url() .'results'?>" class="btn vertical-button hover-orange" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-trophy opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Results</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button hover-purple" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-sun opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Match Day</span>
                                </a>
                                <a href="javascript:;" class="btn vertical-button hover-azure" title="">
                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                        <i class="glyph-icon icon-gear opacity-80 font-size-20"></i>
                                    </span>
                                    <span class="button-content">Settings</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-icon-bar">
                    <div class="dropdown">

                        <a data-toggle="dropdown" href="javascript:;" title="">
                            <span class="badge badge-absolute bg-orange">4</span>
                            <i class="glyph-icon icon-envelope-alt"></i>
                        </a>
                        <div class="dropdown-menu">

                            <div class="scrollable-content medium-box scrollable-small">

                                <ul class="no-border messages-box">
                                    <li>
                                        <div class="messages-img">
                                            <img width="32" src="<?php echo base_url() .'assets/images/gravatar.jpg'?>" alt="" />
                                        </div>
                                        <div class="messages-content">
                                            <div class="messages-title">
                                                <i class="glyph-icon icon-warning-sign font-red"></i>
                                                <a href="javascript:;" title="Message title">Important message</a>
                                                <div class="messages-time">
                                                    3 hr ago
                                                    <span class="glyph-icon icon-time"></span>
                                                </div>
                                            </div>
                                            <div class="messages-text">
                                                This message must be read immediately because of it's high importance...
                                            </div>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="messages-img">
                                            <img width="32" <?php echo base_url() .'assets/images/gravatar.jpg'?> alt="" />
                                        </div>
                                        <div class="messages-content">
                                            <div class="messages-title">
                                                <i class="glyph-icon icon-tag font-blue"></i>
                                                <a href="javascript:;" title="Message title">Some random email</a>
                                                <div class="messages-time">
                                                    3 hr ago
                                                    <span class="glyph-icon icon-time"></span>
                                                </div>
                                            </div>
                                            <div class="messages-text">
                                                This message must be read immediately because of it's high importance...
                                            </div>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="messages-img">
                                            <img width="32" <?php echo base_url() .'assets/images/gravatar.jpg'?> alt="" />
                                        </div>
                                        <div class="messages-content">
                                            <div class="messages-title">
                                                <a href="javascript:;" class="font-orange" title="Message title">Another received message</a>
                                                <div class="messages-time">
                                                    3 hr ago
                                                    <span class="glyph-icon icon-time"></span>
                                                </div>
                                            </div>
                                            <div class="messages-text">
                                                This message must be read immediately because of it's high importance...
                                            </div>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="messages-img">
                                            <img width="32" <?php echo base_url() .'assets/images/gravatar.jpg'?> alt="" />
                                        </div>
                                        <div class="messages-content">
                                            <div class="messages-title">
                                                <i class="glyph-icon icon-warning-sign font-red"></i>
                                                <a href="javascript:;" title="Message title">Important message</a>
                                                <div class="messages-time">
                                                    3 hr ago
                                                    <span class="glyph-icon icon-time"></span>
                                                </div>
                                            </div>
                                            <div class="messages-text">
                                                This message must be read immediately because of it's high importance...
                                            </div>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="messages-img">
                                            <img width="32" <?php echo base_url() .'assets/images/gravatar.jpg'?> alt="" />
                                        </div>
                                        <div class="messages-content">
                                            <div class="messages-title">
                                                <i class="glyph-icon icon-tag font-blue"></i>
                                                <a href="javascript:;" title="Message title">Some random email</a>
                                                <div class="messages-time">
                                                    3 hr ago
                                                    <span class="glyph-icon icon-time"></span>
                                                </div>
                                            </div>
                                            <div class="messages-text">
                                                This message must be read immediately because of it's high importance...
                                            </div>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="messages-img">
                                            <img width="32" <?php echo base_url() .'assets/images/gravatar.jpg'?> alt="" />
                                        </div>
                                        <div class="messages-content">
                                            <div class="messages-title">
                                                <a href="javascript:;" class="font-orange" title="Message title">Another received message</a>
                                                <div class="messages-time">
                                                    3 hr ago
                                                    <span class="glyph-icon icon-time"></span>
                                                </div>
                                            </div>
                                            <div class="messages-text">
                                                This message must be read immediately because of it's high importance...
                                            </div>
                                        </div> 
                                    </li>
                                </ul>

                            </div>
                            <div class="pad10A button-pane button-pane-alt">
                                <a href="messaging.html" class="btn small float-left bg-white">
                                    <span class="button-content text-transform-upr font-size-11">All messages</span>
                                </a>
                                <div class="button-group float-right">
                                    <a href="javascript:;" class="btn small primary-bg">
                                        <i class="glyph-icon icon-star"></i>
                                    </a>
                                    <a href="javascript:;" class="btn small primary-bg">
                                        <i class="glyph-icon icon-random"></i>
                                    </a>
                                    <a href="javascript:;" class="btn small primary-bg">
                                        <i class="glyph-icon icon-map-marker"></i>
                                    </a>
                                </div>
                                <a href="javascript:;" class="small btn bg-red float-right mrg10R tooltip-button" data-placement="left" title="Remove comment">
                                    <i class="glyph-icon icon-remove"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="dropdown">

                        <a data-toggle="dropdown" href="javascript:;" title="">
                            <span class="badge badge-absolute bg-green">9</span>
                            <i class="glyph-icon icon-bell"></i>
                        </a>
                        <div class="dropdown-menu">

                            <div class="popover-title display-block clearfix form-row pad10A">
                                <div class="form-input">
                                    <div class="form-input-icon">
                                        <i class="glyph-icon icon-search transparent"></i>
                                        <input type="text" placeholder="Search notifications..." class="radius-all-100" name="" id="" />
                                    </div>
                                </div>
                            </div>
                            <div class="scrollable-content medium-box scrollable-small">

                                <ul class="no-border notifications-box">
                                    <li>
                                        <span class="btn bg-purple icon-notification glyph-icon icon-user"></span>
                                        <span class="notification-text">This is an error notification</span>
                                        <div class="notification-time">
                                            a few seconds ago
                                            <span class="glyph-icon icon-time"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="btn bg-orange icon-notification glyph-icon icon-user"></span>
                                        <span class="notification-text">This is a warning notification</span>
                                        <div class="notification-time">
                                            <b>15</b> minutes ago
                                            <span class="glyph-icon icon-time"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="bg-green btn icon-notification glyph-icon icon-user"></span>
                                        <span class="notification-text font-green font-bold">A success message example.</span>
                                        <div class="notification-time">
                                            <b>2 hours</b> ago
                                            <span class="glyph-icon icon-time"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="btn bg-purple icon-notification glyph-icon icon-user"></span>
                                        <span class="notification-text">This is an error notification</span>
                                        <div class="notification-time">
                                            a few seconds ago
                                            <span class="glyph-icon icon-time"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="btn bg-orange icon-notification glyph-icon icon-user"></span>
                                        <span class="notification-text">This is a warning notification</span>
                                        <div class="notification-time">
                                            <b>15</b> minutes ago
                                            <span class="glyph-icon icon-time"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <span class="bg-blue btn icon-notification glyph-icon icon-user"></span>
                                        <span class="notification-text font-blue">Alternate notification styling.</span>
                                        <div class="notification-time">
                                            <b>2 hours</b> ago
                                            <span class="glyph-icon icon-time"></span>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <div class="pad10A button-pane button-pane-alt text-center">
                                <a href="notifications.html" class="btn medium primary-bg">
                                    <span class="button-content">View all notifications</span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="dropdown">

                        <a data-toggle="dropdown" href="javascript:;" title="">
                            <span class="badge badge-absolute bg-red">2</span>
                            <i class="glyph-icon icon-tasks"></i>
                        </a>
                        <div class="dropdown-menu" id="progress-dropdown">

                            <div class="scrollable-content small-box scrollable-small">

                                <ul class="no-border progress-box">
                                    <li>
                                        <div class="progress-title">
                                            Finishing uploading files
                                            <b>23%</b>
                                        </div>
                                        <div class="progressbar-small progressbar" data-value="23">
                                            <div class="progressbar-value bg-blue">
                                                <div class="progressbar-overlay"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="progress-title">
                                            Roadmap progress
                                            <b>91%</b>
                                        </div>
                                        <div class="progressbar-small progressbar" data-value="91">
                                            <div class="progressbar-value primary-bg">
                                                <div class="progressbar-overlay"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="progress-title">
                                            Images upload
                                            <b>58%</b>
                                        </div>
                                        <div class="progressbar-small progressbar" data-value="58">
                                            <div class="progressbar-value bg-blue-alt"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="progress-title">
                                            WordPress migration
                                            <b>74%</b>
                                        </div>
                                        <div class="progressbar-small progressbar" data-value="74">
                                            <div class="progressbar-value bg-purple"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="progress-title">
                                            Agile development procedures
                                            <b>91%</b>
                                        </div>
                                        <div class="progressbar-small progressbar" data-value="91">
                                            <div class="progressbar-value primary-bg">
                                                <div class="progressbar-overlay"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="progress-title">
                                            Systems integration
                                            <b>58%</b>
                                        </div>
                                        <div class="progressbar-small progressbar" data-value="58">
                                            <div class="progressbar-value bg-blue-alt"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="progress-title">
                                            Code optimizations
                                            <b>97%</b>
                                        </div>
                                        <div class="progressbar-small progressbar" data-value="97">
                                            <div class="progressbar-value bg-yellow"></div>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                            <div class="pad10A button-pane button-pane-alt text-center">
                                <a href="notifications.html" class="btn medium font-normal bg-green">
                                    <span class="button-content">View all</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div><!-- #page-header -->

            <div id="page-sidebar" class="scrollable-content">

                <div id="sidebar-menu">
                    <ul>
                        <li>
                            <a href="<?php echo base_url(); ?>" title="Dashboard">
                                <i class="glyph-icon icon-dashboard"></i>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() .'team'?>" title="Team">
                                <i class="glyph-icon icon-group"></i>
                                Team
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() .'fixtures'?>" title="Fixtures">
                                <i class="glyph-icon icon-calendar"></i>
                                Fixtures
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() .'results'?>" title="Reults">
                                <i class="glyph-icon icon-trophy"></i>
                                Results
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="Match Day">
                                <i class="glyph-icon icon-sun"></i>
                                Match Day
                            </a>
                        </li>

                        <li>
                            <a href="javascript:;" title="Other Teams">
                                <i class="fa fa-soccer-ball-o"></i>
                                Other Teams
                            </a>
                        </li>

                        <li>
                            <a href="javascript:;" title="Settings">
                                <i class="glyph-icon icon-cogs"></i>
                                Settings
                            </a>
                        </li>
                    </ul>
                    <div class="divider mrg5T mobile-hidden"></div>
                    <?php echo date("l d F Y"); ?>
                </div>

            </div><!-- #page-sidebar -->
            <div id="page-content-wrapper">
                <div id="page-title">

<h3>
    <?php echo $heading?>
</h3>
                    <div id="breadcrumb-right">
                        <div id="sidebar-search">
                            <input type="text" placeholder="Search..." class="autocomplete-input input tooltip-button" data-placement="bottom" title="Look for a player here" id="" name="" />
                            <i class="glyph-icon icon-search"></i>
                        </div>
                    </div>
</div><!-- #page-title -->
<div id="page-content">

<div class="row">
	<div class = "col-md-12">
		<?php $this->load->view($content_view); ?>
	</div>
</div>
</div><!-- #page-content -->
            </div><!-- #page-main -->
        </div><!-- #page-wrapper -->
    </body>
</html>

