<!DOCTYPE html>
<html lang="en">

<head>
<?php  session_start();
if(isset($_POST['submit1']))
{
$course=$_POST['course'];
$exam=$_POST['exam']; 
//echo "bicth";
}
else
{
	$course='CN';
	$exam='quiz1';
}
include("connection.php");
$sql="SELECT * FROM marksdb where course=\"$course\"and exam=\"$exam\"";

$result1=mysql_query($sql,$conn);



?>
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
                            <h3>
                    Tables
                    
                </h3>
				
				
				
                        </div>

                        <div class="title_right">
                         
                        </div>
                    </div>
                    <div class="clearfix"></div>
					
					
					<div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Select Course and Exam</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                  
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form id="demo-form2" data-parsley-validate method="post" action="tables1.php" class="form-horizontal form-label-left">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Course <span class="required">*</span></label>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
										<select class="select2_single form-control" tabindex="-1" name="course">
									  <?php
                                     $name=$_SESSION['username'];
									
									$sql="SELECT distinct course FROM teacherdb t,studentdb s where s.regno=\"$name\" and t.sem=s.sem";
										$result=mysql_query($sql,$conn);

									while($row1 = mysql_fetch_array($result))
											{
																echo "<option >".$row1['course']."</option>";

												}
                                     ?>
                                   </select>
                                      </div>
                                        </div>
                                       
										 <div class="form-group">
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Exam*</label>
                                      <div class="col-md-3 col-sm-3 col-xs-12">
                                        <select class="select2_single form-control" tabindex="-1" name="exam">
                                         <option value="choose" default>Choose exam</option>
                                         <option value="quiz1">Quiz-1</option>
                                         <option value="quiz2">Quiz-2</option>
                                         <option value="mid">Midsem</option>
                                         <option value="end">Endsem</option>
                                         <option value="assgn">Assignments</option>
                                         <option value="project">Project</option>          
                                        </select>
                                      </div>
                                    </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button  class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success" name="submit1" >Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">


                     

                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Marks details </h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                     
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>RegistrationNo.</th>
                                                <th>Marks</th>
                                                <th>Weightage</th>
                                            </tr>
                                        </thead>
										<?php
										$x=1;
                                        echo "<tbody>";
                                            while($row = mysql_fetch_array($result1))
											{
											echo "<tr>" ;
                                              echo   "<th scope=\"row\">" . $x    ."</th>" ;
                                              echo  "<td>" . $row['rollno'] . "</td>" ;
                                              echo  "<td>" . $row['marks'] . "</td>" ;
                                              echo  "<td>" . $row['weightage'] . "</td>" ;
                                               
                                           echo "</tr>" ;
										   $x=$x+1;
											}
										
                                         
                                        echo  "</tbody>" ;
										
										?>
                                    </table>

                                </div>
                            </div>
                        </div>
						
						


                    </div>

                </div>

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

    <!-- chart js -->
    <script src="../extra/js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="../extra/js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="../extra/js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="../extra/js/icheck/icheck.min.js"></script>

    <script src="../extra/js/custom.js"></script>

</body>

</html>