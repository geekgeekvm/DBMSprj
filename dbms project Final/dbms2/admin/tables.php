<!DOCTYPE html>
<html lang="en">

<head>
<?php  session_start(); 

include("connection.php");


$sql1="SELECT distinct * FROM login  where profession= \"teacher\"";
$result1=mysql_query($sql1,$conn);

$sql2="SELECT distinct * FROM login  where profession= \"student\"";
$result2=mysql_query($sql2,$conn);

?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NITK Student Academic Portal | Admin</title>
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
                            <img src="images/admin.jpg" alt="..." class="img-circle profile_img">
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
                                        <li><a href="index2.php">Main Page</a>
                                        </li>
                                        <li><a href="contacts.php">Our Team</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i> Adding <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                         <li><a href="student.php">Student</a>
                                        </li>
                                        <li><a href="teacher.php">Teacher</a>
                                        </li>
                                       
                                    </ul>
                                </li>
                             
                                <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                       <li><a href="tables.php">Login</a>
                                        </li>
                                        <li><a href="tables_dynamic.php">Student</a>
                                        </li>
										<li><a href="tables_dynamic1.php">Teacher</a>
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
                                    <img src="images/admin.jpg" alt=""><?php echo "<span style='font-size:22px' >".$_SESSION['username']."</span>";?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                   
                                    <li><a href="../login.html"><i class="fa fa-sign-out pull-right "></i> Log Out</a>
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
                  <!--  <small>
                        Some examples to get you started
                    </small> -->
                </h3>
                        </div>

                        <div class="title_right">
                         
                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="row">


                     

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Teacher details</h2>
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
                                                <th>Username</th>
                                                <th>Password</th>
                                            </tr>
                                        </thead>
										<?php
										$x=1;
                                        echo "<tbody>";
                                            while($row = mysql_fetch_array($result1))
											{
											echo "<tr>" ;
                                              echo   "<th scope=\"row\">" . $x    ."</th>" ;
                                              echo  "<td>" . $row['username'] . "</td>" ;
                                              echo  "<td>" . $row['password'] . "</td>" ;
                                               
                                           echo "</tr>" ;
										   $x=$x+1;
											}
										
                                         
                                        echo  "</tbody>" ;
										
										?>
                                    </table>

                                </div>
                            </div>
                        </div>
						
						 <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Student details </h2>
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
                                                <th>Username</th>
                                                <th>Password</th>
                                            </tr>
                                        </thead>
                                       	<?php
										$x=1;
                                        echo "<tbody>";
                                            while($row = mysql_fetch_array($result2))
											{
											echo "<tr>" ;
                                              echo   "<th scope=\"row\">" . $x    ."</th>" ;
                                              echo  "<td>" . $row['username'] . "</td>" ;
                                              echo  "<td>" . $row['password'] . "</td>" ;
                                               
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
                        <p class="pull-right"> NITK Student Academic Information Portal. |
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