<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>NITK Student Academic Portal | Student</title>
	<link rel="shortcut icon" href="http://nitk.ac.in/sites/all/themes/custom/edu/img/favicon.ico" type="image/x-icon"/>

    <!-- Bootstrap core CSS -->

    <link href="../extra/css/bootstrap.min.css" rel="stylesheet">

    <link href="../extra/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="../extra/css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="../extra/css/custom.css" rel="stylesheet">
    <link href="../extra/css/icheck/flat/green.css" rel="stylesheet">
    <!-- editor -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <link href="../extra/css/editor/external/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="../extra/css/editor/index.css" rel="stylesheet">
    <!-- select2 -->
    <link href="../extra/css/select/select2.min.css" rel="stylesheet">
    <!-- switchery -->
    <link rel="stylesheet" href="../extra/css/switchery/switchery.min.css" />

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
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>NITKSurathkal</span></a>
                    </div>
                    <div class="clearfix"></div>


                    <!-- menu prile quick info -->

					<div class="profile">
                        <div class="profile_pic">
						<?php
							 include("connection.php");
                             $temppath=mysql_query("SELECT Path from studentdb where regno='$_SESSION[username]' ");
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
                                
                                
                                <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="tables.php">Tables</a>
                                        </li>
										<li><a href="tables1.php">Course wise marks</a>
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
                                     $temppath=mysql_query("SELECT Path from studentdb where regno='$_SESSION[username]'");
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
                            <h3>Form Elements</h3>
                        </div>
                     
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Form Design <small>different form elements</small></h2>
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
                                    <br />
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div id="gender" class="btn-group" data-toggle="buttons">
                                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                        <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                                                    </label>
                                                    <label class="btn btn-primary active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                        <input type="radio" name="gender" value="female" checked=""> Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#birthday').daterangepicker({
                                singleDatePicker: true,
                                calender_style: "picker_4"
                            }, function (start, end, label) {
                                console.log(start.toISOString(), end.toISOString(), label);
                            });
                        });
                    </script>


                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Form Design <small>different form elements</small></h2>
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
                                    <br />
                                    <form class="form-horizontal form-label-left input_mask">

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="First Name">
                                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control" id="inputSuccess3" placeholder="Last Name">
                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Email">
                                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                                        </div>

                                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                            <input type="text" class="form-control" id="inputSuccess5" placeholder="Phone">
                                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Default Input</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" placeholder="Default Input">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Disabled Input </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Read-Only Input</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>

                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Star Rating</h2>
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

                                    <h4>Star Ratings<small>Hover and click on a star</small></h4>
                                    <div>
                                        <div id="stars" class="starrr lead"></div>
                                        You gave a rating of <span id="count">0</span> star(s)
                                    </div>


                                    <p>Also you can give a default rating by adding attribute data-rating</p>
                                    <div id="stars-existing" class="starrr lead" data-rating='4'></div>
                                    You gave a rating of <span id="count-existing">4</span> star(s)


                                </div>
                            </div>


                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Registration Form <small>Click to validate</small></h2>
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

                                    <!-- start form for validation -->
                                    <form id="demo-form" data-parsley-validate>
                                        <label for="fullname">Full Name * :</label>
                                        <input type="text" id="fullname" class="form-control" name="fullname" required />

                                        <label for="email">Email * :</label>
                                        <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required />

                                        <label>Gender *:</label>
                                        <p>
                                            M:
                                            <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required /> F:
                                            <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                                        </p>

                                        <label>Hobbies (2 minimum):</label>
                                        <p style="padding: 5px;">
                                            <input type="checkbox" name="hobbies[]" id="hobby1" value="ski" data-parsley-mincheck="2" required class="flat" /> Skiing
                                            <br />

                                            <input type="checkbox" name="hobbies[]" id="hobby2" value="run" class="flat" /> Running
                                            <br />

                                            <input type="checkbox" name="hobbies[]" id="hobby3" value="eat" class="flat" /> Eating
                                            <br />

                                            <input type="checkbox" name="hobbies[]" id="hobby4" value="sleep" class="flat" /> Sleeping
                                            <br />
                                            <p>

                                                <label for="heard">Heard us by *:</label>
                                                <select id="heard" class="form-control" required>
                                                    <option value="">Choose..</option>
                                                    <option value="press">Press</option>
                                                    <option value="net">Internet</option>
                                                    <option value="mouth">Word of mouth</option>
                                                </select>

                                                <label for="message">Message (20 chars min, 100 max) :</label>
                                                <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>

                                                <br/>
                                                <span class="btn btn-primary">validate form</span>

                                    </form>
                                    <!-- end form for validations -->

                                </div>
                            </div>


                        </div>

                        <div class="col-md-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Form Basic Elements <small>different form elements</small></h2>
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
                                    <br />
                                    <form class="form-horizontal form-label-left">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Default Input</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" placeholder="Default Input">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Disabled Input </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Read-Only Input</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" class="form-control" readonly="readonly" placeholder="Read-Only Input">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                                            </label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <textarea class="form-control" rows="3" placeholder='rows="3"'></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="password" class="form-control" value="passwordonetwo">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">AutoComplete</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" style="float: left;" />
                                                <div id="autocomplete-container" style="position: relative; float: left; width: 400px; margin: 10px;"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select class="form-control">
                                                    <option>Choose option</option>
                                                    <option>Option one</option>
                                                    <option>Option two</option>
                                                    <option>Option three</option>
                                                    <option>Option four</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Custom</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select class="select2_single form-control" tabindex="-1">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Grouped</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select class="select2_group form-control">
                                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>
                                                    </optgroup>
                                                    <optgroup label="Pacific Time Zone">
                                                        <option value="CA">California</option>
                                                        <option value="NV">Nevada</option>
                                                        <option value="OR">Oregon</option>
                                                        <option value="WA">Washington</option>
                                                    </optgroup>
                                                    <optgroup label="Mountain Time Zone">
                                                        <option value="AZ">Arizona</option>
                                                        <option value="CO">Colorado</option>
                                                        <option value="ID">Idaho</option>
                                                        <option value="MT">Montana</option>
                                                        <option value="NE">Nebraska</option>
                                                        <option value="NM">New Mexico</option>
                                                        <option value="ND">North Dakota</option>
                                                        <option value="UT">Utah</option>
                                                        <option value="WY">Wyoming</option>
                                                    </optgroup>
                                                    <optgroup label="Central Time Zone">
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </optgroup>
                                                    <optgroup label="Eastern Time Zone">
                                                        <option value="CT">Connecticut</option>
                                                        <option value="DE">Delaware</option>
                                                        <option value="FL">Florida</option>
                                                        <option value="GA">Georgia</option>
                                                        <option value="IN">Indiana</option>
                                                        <option value="ME">Maine</option>
                                                        <option value="MD">Maryland</option>
                                                        <option value="MA">Massachusetts</option>
                                                        <option value="MI">Michigan</option>
                                                        <option value="NH">New Hampshire</option>
                                                        <option value="NJ">New Jersey</option>
                                                        <option value="NY">New York</option>
                                                        <option value="NC">North Carolina</option>
                                                        <option value="OH">Ohio</option>
                                                        <option value="PA">Pennsylvania</option>
                                                        <option value="RI">Rhode Island</option>
                                                        <option value="SC">South Carolina</option>
                                                        <option value="VT">Vermont</option>
                                                        <option value="VA">Virginia</option>
                                                        <option value="WV">West Virginia</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Multiple</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select class="select2_multiple form-control" multiple="multiple">
                                                    <option>Choose option</option>
                                                    <option>Option one</option>
                                                    <option>Option two</option>
                                                    <option>Option three</option>
                                                    <option>Option four</option>
                                                    <option>Option five</option>
                                                    <option>Option six</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Input Tags</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <input id="tags_1" type="text" class="tags form-control" value="social, adverts, sales" />
                                                <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-sm-3 col-xs-12 control-label">Checkboxes and radios
                                                <br>
                                                <small class="text-navy">Normal Bootstrap elements</small>
                                            </label>

                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value=""> Option one. select more than one options
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value=""> Option two. select more than one options
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Option one. only select one option
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> Option two. only select one option
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 col-sm-3 col-xs-12 control-label">Checkboxes and radios
                                                <br>
                                                <small class="text-navy">Normal Bootstrap elements</small>
                                            </label>

                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="flat" checked="checked"> Checked
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="flat"> Unchecked
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="flat" disabled="disabled"> Disabled
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" class="flat" disabled="disabled" checked="checked"> Disabled & checked
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" class="flat" checked name="iCheck"> Checked
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" class="flat" name="iCheck"> Unchecked
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" class="flat" name="iCheck" disabled="disabled"> Disabled
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" class="flat" name="iCheck3" disabled="disabled" checked> Disabled & Checked
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Switch</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <div class="">
                                                    <label>
                                                        <input type="checkbox" class="js-switch" checked /> Checked
                                                    </label>
                                                </div>
                                                <div class="">
                                                    <label>
                                                        <input type="checkbox" class="js-switch" /> Unchecked
                                                    </label>
                                                </div>
                                                <div class="">
                                                    <label>
                                                        <input type="checkbox" class="js-switch" disabled="disabled" /> Disabled
                                                    </label>
                                                </div>
                                                <div class="">
                                                    <label>
                                                        <input type="checkbox" class="js-switch" disabled="disabled" checked="checked" /> Disabled Checked
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Form Buttons <small>Sessions</small></h2>
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

                                    <form class="form-horizontal form-label-left">

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Button addons</label>

                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                            <button type="button" class="btn btn-primary">Go!</button>
                                        </span>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="input-group">
                                                    <input type="text" class="form-control">
                                                    <span class="input-group-btn">
                                            <button type="button" class="btn btn-primary">Go!</button> 
                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="divider-dashed"></div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Button addons</label>

                                            <div class="col-sm-9">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                            <li><a href="#">Action</a>
                                                            </li>
                                                            <li><a href="#">Another action</a>
                                                            </li>
                                                            <li><a href="#">Something else here</a>
                                                            </li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Separated link</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /btn-group -->
                                                </div>
                                                <div class="input-group">
                                                    <input type="text" class="form-control">
                                                    <span class="input-group-btn">
                                            <button type="button" class="btn btn-primary">Go!</button> 
                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Text areas<small>Sessions</small></h2>
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


                                <div id="alerts"></div>
                                <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
                                    <div class="btn-group">
                                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa icon-font"></i><b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a data-edit="fontSize 5"><p style="font-size:17px">Huge</p></a>
                                            </li>
                                            <li><a data-edit="fontSize 3"><p style="font-size:14px">Normal</p></a>
                                            </li>
                                            <li><a data-edit="fontSize 1"><p style="font-size:11px">Small</p></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
                                        <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
                                        <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="icon-strikethrough"></i></a>
                                        <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="icon-underline"></i></a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="icon-list-ul"></i></a>
                                        <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="icon-list-ol"></i></a>
                                        <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="icon-indent-left"></i></a>
                                        <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="icon-indent-right"></i></a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a>
                                        <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a>
                                        <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a>
                                        <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="icon-align-justify"></i></a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="icon-link"></i></a>
                                        <div class="dropdown-menu input-append">
                                            <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                                            <button class="btn" type="button">Add</button>
                                        </div>
                                        <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="icon-cut"></i></a>

                                    </div>

                                    <div class="btn-group">
                                        <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="icon-picture"></i></a>
                                        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="icon-undo"></i></a>
                                        <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="icon-repeat"></i></a>
                                    </div>
                                </div>

                                <div id="editor">
                                    
                                </div>
                                <textarea name="descr" id="descr" style="display:none;"></textarea>
                                <br />

                                <div class="ln_solid"></div>
                                
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Resizable Text area</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <textarea class="resizable_textarea form-control" style="width: 100%; overflow: hidden; word-wrap: break-word; resize: horizontal; height: 87px;">This text area automatically resizes its height as you fill in more text courtesy of autosize-master it out...
                                        </textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Form Input Grid <small>form input </small></h2>
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

                            <div class="row">

                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-12" class="form-control">
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-6" class="form-control">
                                </div>

                                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-6" class="form-control">
                                </div>


                                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-4" class="form-control">
                                </div>

                                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-4" class="form-control">
                                </div>

                                <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-4" class="form-control">
                                </div>


                                <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-3" class="form-control">
                                </div>

                                <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-3" class="form-control">
                                </div>

                                <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-3" class="form-control">
                                </div>

                                <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-3" class="form-control">
                                </div>


                                <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-2" class="form-control">
                                </div>

                                <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-2" class="form-control">
                                </div>

                                <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-2" class="form-control">
                                </div>

                                <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-2" class="form-control">
                                </div>

                                <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-2" class="form-control">
                                </div>

                                <div class="col-md-2 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-2" class="form-control">
                                </div>


                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-1" class="form-control">
                                </div>

                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-1" class="form-control">
                                </div>

                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-1" class="form-control">
                                </div>

                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-1" class="form-control">
                                </div>

                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-1" class="form-control">
                                </div>

                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-1" class="form-control">
                                </div>

                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-1" class="form-control">
                                </div>

                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-1" class="form-control">
                                </div>

                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-1" class="form-control">
                                </div>

                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-1" class="form-control">
                                </div>

                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-1" class="form-control">
                                </div>

                                <div class="col-md-1 col-sm-12 col-xs-12 form-group">
                                    <input type="text" placeholder=".col-md-1" class="form-control">
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Form Design <small>different form elements</small></h2>
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
                            <br />

                            <h4>Horizontal labels</h4>
                            <p class="font-gray-dark">
                                Using the grid system you can control the position of the labels. The form example below has the <b>col-md-10</b> which sets the width to 10/12 and <b>center-margin</b> which centers it.
                            </p>
                            <form class="form-horizontal form-label-left">
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="first-name">First Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3" for="last-name">Last Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-7">
                                        <input type="text" id="last-name2" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                            </form>


                            <h4>Vertical labels</h4>
                            <p class="font-gray-dark">
                                For making labels vertical you have two options, either use the apropiate grid <b>.col-</b> class or wrap the form in the <b>form-vertical</b> class.
                            </p>
                            <div class="col-md-8 center-margin">
                                <form class="form-horizontal form-label-left">
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" class="form-control" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>

                                </form>
                            </div>

                            <h4>Inline Form </h4>
                            <p class="font-gray-dark">
                                For making labels vertical you have two options, either use the apropiate grid <b>.col-</b> class or wrap the form in the <b>form-vertical</b> class.
                            </p>
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="ex3">Email address</label>
                                    <input type="text" id="ex3" class="form-control" placeholder=" ">
                                </div>
                                <div class="form-group">
                                    <label for="ex4">Email address</label>
                                    <input type="email" id="ex4" class="form-control" placeholder=" ">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-default">Send invitation</button>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="">
                        <p class="pull-right">NITK Student Academic Information Portal. |
                            <span class="lead"> <i class="fa fa-paw"></i> NITK Surathkal</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->

            </div>

        </div>
    </div>

        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>

        <script src="../extra/js/bootstrap.min.js"></script>

        <!-- chart js -->
        <script src="../extra/js/chartjs/chart.min.js"></script>
        <!-- bootstrap progress js -->
        <script src="../extra/js/progressbar/bootstrap-progressbar.min.js"></script>
        <script src="../extra/js/nicescroll/jquery.nicescroll.min.js"></script>
        <!-- icheck -->
        <script src="../extra/js/icheck/icheck.min.js"></script>
        <!-- tags -->
        <script src="../extra/js/tags/jquery.tagsinput.min.js"></script>
        <!-- switchery -->
        <script src="../extra/js/switchery/switchery.min.js"></script>
        <!-- daterangepicker -->
        <script type="text/javascript" src="../extra/js/moment.min2.js"></script>
        <script type="text/javascript" src="../extra/js/datepicker/daterangepicker.js"></script>
        <!-- richtext editor -->
        <script src="../extra/js/editor/bootstrap-wysiwyg.js"></script>
        <script src="../extra/js/editor/external/jquery.hotkeys.js"></script>
        <script src="../extra/js/editor/external/google-code-prettify/prettify.js"></script>
        <!-- select2 -->
        <script src="../extra/js/select/select2.full.js"></script>
        <!-- form validation -->
        <script type="text/javascript" src="../extra/js/parsley/parsley.min.js"></script>
        <!-- textarea resize -->
        <script src="../extra/js/textarea/autosize.min.js"></script>
        <script>
            autosize($('.resizable_textarea'));
        </script>
        <!-- Autocomplete -->
        <script type="text/javascript" src="../extra/js/autocomplete/countries.js"></script>
        <script src="../extra/js/autocomplete/jquery.autocomplete.js"></script>
        <script type="text/javascript">
            $(function () {
                'use strict';
                var countriesArray = $.map(countries, function (value, key) {
                    return {
                        value: value,
                        data: key
                    };
                });
                // Initialize autocomplete with custom appendTo:
                $('#autocomplete-custom-append').autocomplete({
                    lookup: countriesArray,
                    appendTo: '#autocomplete-container'
                });
            });
        </script>
        <script src="../extra/js/custom.js"></script>


        <!-- select2 -->
        <script>
            $(document).ready(function () {
                $(".select2_single").select2({
                    placeholder: "Select a state",
                    allowClear: true
                });
                $(".select2_group").select2({});
                $(".select2_multiple").select2({
                    maximumSelectionLength: 4,
                    placeholder: "With Max Selection limit 4",
                    allowClear: true
                });
            });
        </script>
        <!-- /select2 -->
        <!-- input tags -->
        <script>
            function onAddTag(tag) {
                alert("Added a tag: " + tag);
            }

            function onRemoveTag(tag) {
                alert("Removed a tag: " + tag);
            }

            function onChangeTag(input, tag) {
                alert("Changed a tag: " + tag);
            }

            $(function () {
                $('#tags_1').tagsInput({
                    width: 'auto'
                });
            });
        </script>
        <!-- /input tags -->
        <!-- form validation -->
        <script type="text/javascript">
            $(document).ready(function () {
                $.listen('parsley:field:validate', function () {
                    validateFront();
                });
                $('#demo-form .btn').on('click', function () {
                    $('#demo-form').parsley().validate();
                    validateFront();
                });
                var validateFront = function () {
                    if (true === $('#demo-form').parsley().isValid()) {
                        $('.bs-callout-info').removeClass('hidden');
                        $('.bs-callout-warning').addClass('hidden');
                    } else {
                        $('.bs-callout-info').addClass('hidden');
                        $('.bs-callout-warning').removeClass('hidden');
                    }
                };
            });

            $(document).ready(function () {
                $.listen('parsley:field:validate', function () {
                    validateFront();
                });
                $('#demo-form2 .btn').on('click', function () {
                    $('#demo-form2').parsley().validate();
                    validateFront();
                });
                var validateFront = function () {
                    if (true === $('#demo-form2').parsley().isValid()) {
                        $('.bs-callout-info').removeClass('hidden');
                        $('.bs-callout-warning').addClass('hidden');
                    } else {
                        $('.bs-callout-info').addClass('hidden');
                        $('.bs-callout-warning').removeClass('hidden');
                    }
                };
            });
            try {
                hljs.initHighlightingOnLoad();
            } catch (err) {}
        </script>
        <!-- /form validation -->
        <!-- editor -->
        <script>
            $(document).ready(function () {
                $('.xcxc').click(function () {
                    $('#descr').val($('#editor').html());
                });
            });

            $(function () {
                function initToolbarBootstrapBindings() {
                    var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                'Times New Roman', 'Verdana'],
                        fontTarget = $('[title=Font]').siblings('.dropdown-menu');
                    $.each(fonts, function (idx, fontName) {
                        fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
                    });
                    $('a[title]').tooltip({
                        container: 'body'
                    });
                    $('.dropdown-menu input').click(function () {
                            return false;
                        })
                        .change(function () {
                            $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                        })
                        .keydown('esc', function () {
                            this.value = '';
                            $(this).change();
                        });

                    $('[data-role=magic-overlay]').each(function () {
                        var overlay = $(this),
                            target = $(overlay.data('target'));
                        overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
                    });
                    if ("onwebkitspeechchange" in document.createElement("input")) {
                        var editorOffset = $('#editor').offset();
                        $('#voiceBtn').css('position', 'absolute').offset({
                            top: editorOffset.top,
                            left: editorOffset.left + $('#editor').innerWidth() - 35
                        });
                    } else {
                        $('#voiceBtn').hide();
                    }
                };

                function showErrorAlert(reason, detail) {
                    var msg = '';
                    if (reason === 'unsupported-file-type') {
                        msg = "Unsupported format " + detail;
                    } else {
                        console.log("error uploading file", reason, detail);
                    }
                    $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
                };
                initToolbarBootstrapBindings();
                $('#editor').wysiwyg({
                    fileUploadError: showErrorAlert
                });
                window.prettyPrint && prettyPrint();
            });
        </script>
        <!-- /editor -->
</body>

</html>