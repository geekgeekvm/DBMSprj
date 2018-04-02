<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NITK Student Academic Portal| Teacher</title>
	<link rel="shortcut icon" href="http://nitk.ac.in/sites/all/themes/custom/edu/img/favicon.ico" type="image/x-icon"/> 

        <!-- Bootstrap core CSS -->

        <link href="../extra/css/bootstrap.min.css" rel="stylesheet">

        <link href="../extra/fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="../extra/css/animate.min.css" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="../extra/css/custom.css" rel="stylesheet">
        <link href="../extra/css/icheck/flat/green.css" rel="stylesheet">

        <link href="../extra/css/calendar/fullcalendar.css" rel="stylesheet">
        <link href="../extra/css/calendar/fullcalendar.print.css" rel="stylesheet" media="print">

        <script src="../extra/js/jquery.min.js"></script>

        <!--[if lt IE 9]>
            <script src="../assets/js/ie8-responsive-file-warning.js"></script>
            <![endif]-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

    </head>


    <body class="nav-md">

        <div class="container body">


           <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="http://nitk.ac.in" class="site_title"><i class="fa fa-paw"></i> <span>NITKSurathkal</span></a>
                    </div>
                    <div class="clearfix"></div>


                    <!-- menu prile quick info -->

					<div class="profile">
                        <div class="profile_pic">
						<?php
						session_start();
							 include("connection.php");
                             $temppath=mysql_query("SELECT Path from teacherdb where username='$_SESSION[username]' ");
                             $imgpath=mysql_fetch_array($temppath);
                        	echo "<img src='images/".$imgpath[0]."' alt='...' class='img-circle profile_img'>";                        
                         ?>
						 </div>
					   <div class="profile_info">
                            <span>Welcome,</span>
                            <h2><?php echo "<span style='font-size:25px;color:white' >".$_SESSION['username']."</span>";?></h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="index.php">Index</a>
                                        </li>
                                        <li><a href="contacts.php">Our Team</a>
                                        </li>
                                       
                                    </ul>
                                </li>
								<li><a><i class="fa fa-gears"></i> Profile <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        
                                        <li><a href="projects.php">Project Details</a>
                                        </li>
                                        <li><a href="profile.php">Profile</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="form_upload.php">Add marks</a>
                                        </li>
                                         
                                        <li><a href="calender.php">Calender</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="tables.php">Tables</a>
                                        </li>
										<li><a href="tables1.php">ma'am table</a>
                                        </li>
                                        <li><a href="tables_dynamic.php">Table Dynamic</a>
                                        </li>
                                    </ul>
                                </li>
                               
                            </ul>
                        </div>
                      

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" href="../login.php" title="Logout">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

             <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <?php
                                    //session_start();
                                     include("connection.php");
                                     $temppath=mysql_query("SELECT Path from teacherdb where username='$_SESSION[username]'");
                                     $imgpath=mysql_fetch_array($temppath);
                                  
                                     echo "<img src='images/".$imgpath[0]."' alt='..'>";
                           ?>
						       <?php echo "<span style='font-size:22px' >".$_SESSION['username']."</span>";?>

                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="profile.php">  Profile</a>
                                    </li>

                                    <li><a href="../login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">

                        <div class="page-title">
                            <div class="title_left">
                                <h3>
                                    Calender
                                    <small>
                                        Click to add/edit events
                                    </small>
                                </h3>
                            </div>

                          
                        </div>
                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Calender Events <small>Sessions</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Settings 1</a>
                                                    </li>
                                                    <li><a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">

                                        <div id='calendar'></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- footer content -->
                <footer>
                    <div class="">
                        <p class="pull-right"> NITK Student Academic Information Portal. |
                            <span class="lead"> <i class="fa fa-paw"></i> NITK Surathkal</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->

                </div>


                <!-- Start Calender modal -->
                <div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel">New Calender Entry</h4>
                            </div>
                            <div class="modal-body">
                                <div id="testmodal" style="padding: 5px 20px;">
                                    <form id="antoform" class="form-horizontal calender" role="form">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="title" name="title">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" style="height:55px;" id="descr" name="descr"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default antoclose" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary antosubmit">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel2">Edit Calender Entry</h4>
                            </div>
                            <div class="modal-body">

                                <div id="testmodal2" style="padding: 5px 20px;">
                                    <form id="antoform2" class="form-horizontal calender" role="form">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="title2" name="title2">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Description</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" style="height:55px;" id="descr2" name="descr"></textarea>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary antosubmit2">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
                <div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>

                <!-- End Calender modal -->
                <!-- /page content -->
            </div>

        </div>

        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>

        <script src="../extra/js/bootstrap.min.js"></script>

        <script src="../extra/js/nprogress.js"></script>
        <!-- chart js -->
        <script src="../extra/js/chartjs/chart.min.js"></script>
        <!-- bootstrap progress js -->
        <script src="../extra/js/progressbar/bootstrap-progressbar.min.js"></script>
        <script src="../extra/js/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- icheck -->
        <script src="../extra/js/icheck/icheck.min.js"></script>

        <script src="../extra/js/custom.js"></script>

        <script src="../extra/js/moment.min.js"></script>
        <script src="../extra/js/calendar/fullcalendar.min.js"></script>

        <script>
            $(window).load(function () {

                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();
                var started;
                var categoryClass;

                var calendar = $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    selectable: true,
                    selectHelper: true,
                    select: function (start, end, allDay) {
                        $('#fc_create').click();

                        started = start;
                        ended = end

                        $(".antosubmit").on("click", function () {
                            var title = $("#title").val();
                            if (end) {
                                ended = end
                            }
                            categoryClass = $("#event_type").val();

                            if (title) {
                                calendar.fullCalendar('renderEvent', {
                                        title: title,
                                        start: started,
                                        end: end,
                                        allDay: allDay
                                    },
                                    true // make the event "stick"
                                );
                            }
                            $('#title').val('');
                            calendar.fullCalendar('unselect');

                            $('.antoclose').click();

                            return false;
                        });
                    },
                    eventClick: function (calEvent, jsEvent, view) {
                        //alert(calEvent.title, jsEvent, view);

                        $('#fc_edit').click();
                        $('#title2').val(calEvent.title);
                        categoryClass = $("#event_type").val();

                        $(".antosubmit2").on("click", function () {
                            calEvent.title = $("#title2").val();

                            calendar.fullCalendar('updateEvent', calEvent);
                            $('.antoclose2').click();
                        });
                        calendar.fullCalendar('unselect');
                    },
                    editable: true,
                    events: [
                        {
                            title: 'Internals submission',
                            start: new Date(y, m, 1)
                    },
                        {
                            title: 'Incident Fest',
                            start: new Date(y, m, d - 5),
                            end: new Date(y, m, d - 2)
                    },
                        {
                            title: ' Faculty Meeting',
                            start: new Date(y, m, d, 10, 30),
                            allDay: false
                    },
                        {
                            title: 'Class committe meeting',
                            start: new Date(y, m, d + 14, 12, 0),
                            end: new Date(y, m, d, 14, 0),
                            allDay: false
                    },
                        {
                            title: 'Conference',
                            start: new Date(y, m, d + 1, 19, 0),
                            end: new Date(y, m, d + 1, 22, 30),
                            allDay: false
                    },
                        {
                            title: 'ns3 meeting',
                            start: new Date(y, m, 28),
                            end: new Date(y, m, 29),
                    }
                ]
                });
            });
        </script>
    </body>

</html>