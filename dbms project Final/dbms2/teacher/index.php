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
<?php session_start(); 
$username=$_SESSION['username'];
include("connection.php");
$sql="SELECT distinct course FROM teacherdb where username=\"$username\" ";
$rs=mysql_query($sql,$conn);
$total=mysql_num_rows($rs);

$sql="SELECT distinct sem FROM teacherdb where username=\"$username\" ";
$rs=mysql_query($sql,$conn);
$students=mysql_num_rows($rs);

$sql="SELECT distinct s.regno from studentdb s,teacherdb t where t.username=\"$username\" and t.sem=s.sem";
$rs=mysql_query($sql,$conn);
$teachers=mysql_num_rows($rs);

 ?>

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
                       
                        </div>

                       
                    </div>
                    <div class="clearfix"></div>
					<div class="row top_tiles">
                        <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-edit"></i>
                                </div>
                                <div class="count"><?php echo $total; ?></div>

                                <h3>Courses </h3>
                                <p>Total no. of Courses registered</p>
                            </div>
                        </div>
                        <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-mortar-board"></i>
                                </div>
                                <div class="count"> <?php echo $students; ?></div>

                                <h3>Semesters</h3>
                                <p>Total no. of Semesters registered</p>
                            </div>
                        </div>
                        <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-group"></i>
                                </div>
                                <div class="count"><?php echo $teachers; ?></div>

                                <h3>Students</h3>
                                <p>Total no. of Student Signups for her Courses</p>
                            </div>
                        </div>
                  
                    </div>

             
                    <div class="clearfix"></div>
                   <div class="row">


                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Student (Line graph)<small>Students registered Vs Semester</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                      
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <canvas id="canvas000"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Student (Bar graph) <small>Students registered Vs Semester</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                       
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <canvas id="canvas_bar"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
					
                  <div class="row">


                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Marks (Line graph)<small>Average Marks Vs Course</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                       
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <canvas id="canvas0001"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Marks (Bar graph) <small>Average Marks Vs Course</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <canvas id="canvas_bar1"></canvas>
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

   

    <script src="../extra/js/bootstrap.min.js"></script>

    <!-- chart js -->
    <script src="../extra/js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="../extra/js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="../extra/js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="../extra/js/icheck/icheck.min.js"></script>

    <script src="../extra/js/custom.js"></script>

    <script>
        var randomScalingFactor = function () {
            return Math.round(Math.random() * 100)
        };
		<?php 
		
		$username= $_SESSION['username'];
		
	
 $sql="SELECT distinct(course) FROM teacherdb  where username=\"$username\" order by course";
 $resultf=mysql_query($sql,$conn);

 $sql="SELECT count(distinct s.regno) FROM studentdb s,teacherdb t where t.username=\"$username\" and t.sem=s.sem group by course order by course" ;
 $resultf1=mysql_query($sql,$conn);

	 ?>


		 var lineChartData = {
            labels: [
			<?php
			$x=0;
			while($row1=mysql_fetch_array($resultf))
    {       
	        echo "\"".$row1['course']."\"".",";
		
	
			//"January", "February", "March", "April", "May", "June", "July"],
			
	}
	     echo "],"
			?>
            datasets: [

                {
                    label: "My Second dataset",
                    fillColor: "rgba(3, 88, 106, 0.3)", //rgba(151,187,205,0.2)
                    strokeColor: "rgba(3, 88, 106, 0.70)", //rgba(151,187,205,1)
                    pointColor: "rgba(3, 88, 106, 0.70)", //rgba(151,187,205,1)
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: [<?php
			while($row1=mysql_fetch_array($resultf1))
    {   
	        echo $row1['count(distinct s.regno)'];
	        echo ",";
			//"January", "February", "March", "April", "May", "June", "July"],
			
	}
	     echo "],"
			?>
            }
        ]

        }

        $(document).ready(function () {
            new Chart(document.getElementById("canvas000").getContext("2d")).Line(lineChartData, {
                responsive: true,
                tooltipFillColor: "rgba(51, 51, 51, 0.55)"
            });
        });
		 
			<?php 
		

 $sql="SELECT distinct(course) FROM teacherdb  where username=\"$username\" order by course";
 $resultf=mysql_query($sql,$conn);

 $sql="SELECT count(distinct s.regno) FROM studentdb s,teacherdb t where t.username=\"$username\" and t.sem=s.sem group by course order by course" ;
 $resultf1=mysql_query($sql,$conn);

	 ?>
		 var barChartData = {
            labels: [<?php
			$x=0;
			while($row2=mysql_fetch_array($resultf))
    {       
	        echo "\"".$row2['course']."\"".",";
		
	
			//"January", "February", "March", "April", "May", "June", "July"],
			
	}
	     echo "],"
			?>
            datasets: [
            
                {
                    fillColor: "#03586A", //rgba(151,187,205,0.5)
                    strokeColor: "#03586A", //rgba(151,187,205,0.8)
                    highlightFill: "#066477", //rgba(151,187,205,0.75)
                    highlightStroke: "#066477", //rgba(151,187,205,1)
                    data: [<?php
			while($row2=mysql_fetch_array($resultf1))
    {   
	        echo $row2['count(distinct s.regno)'];
	        echo ",";
			//"January", "February", "March", "April", "May", "June", "July"],
			
	}
	     echo "],"
			?>    }
        ],
        }

        $(document).ready(function () {
            new Chart($("#canvas_bar").get(0).getContext("2d")).Bar(barChartData, {
                tooltipFillColor: "rgba(51, 51, 51, 0.55)",
                responsive: true,
                barDatasetSpacing: 6,
                barValueSpacing: 5
            });
        });
		
		
		<?php 
		

 $sql="SELECT distinct(course) FROM teacherdb  where username=\"$username\" order by course";
 $resultf3=mysql_query($sql,$conn);

 $sql="CREATE view  summarks1 as SELECT m.rollno,m.course,sum(m.marks) as total from marksdb m,teacherdb t WHERE t.course=m.course and t.username=\"$username\" GROUP by m.course,m.rollno;" ;
 $rum=mysql_query($sql,$conn);
 $sql="select avg(total) from summarks1 group by course order by course";
 $resultf4=mysql_query($sql,$conn);

	 ?>
		
		var lineChartData1 = {
            labels: [<?php
			$x=0;
			while($row2=mysql_fetch_array($resultf3))
    {       
	        echo "\"".$row2['course']."\"".",";
		
	
			//"January", "February", "March", "April", "May", "June", "July"],
			
	}
	     echo "],"
			?>
            datasets: [

               {
                    label: "My First dataset",
                    fillColor: "rgba(38, 185, 154, 0.31)", //rgba(220,220,220,0.2)
                    strokeColor: "rgba(38, 185, 154, 0.7)", //rgba(220,220,220,1)
                    pointColor: "rgba(38, 185, 154, 0.7)", //rgba(220,220,220,1)
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [<?php
			while($row2=mysql_fetch_array($resultf4))
    {   
	        echo $row2['avg(total)'];
	        echo ",";
			//"January", "February", "March", "April", "May", "June", "July"],
			
	}
	     echo "],"
			?> 
            }
        ]

        }

        $(document).ready(function () {
            new Chart(document.getElementById("canvas0001").getContext("2d")).Line(lineChartData1, {
                responsive: true,
                tooltipFillColor: "rgba(51, 51, 51, 0.55)"
            });
        });
		
				<?php 
		

 $sql="SELECT distinct(course) FROM teacherdb  where username=\"$username\" order by course";
 $resultf3=mysql_query($sql,$conn);

 $sql="CREATE view  summarks1 as SELECT m.rollno,m.course,sum(m.marks) as total from marksdb m,teacherdb t WHERE t.course=m.course and t.username=\"$username\" GROUP by m.course,m.rollno;" ;
 $rum=mysql_query($sql,$conn);
 $sql="select avg(total) from summarks1 group by course order by course";
 $resultf4=mysql_query($sql,$conn);

	 ?>
		
		var barChartData1 = {
            labels: [<?php
			$x=0;
			while($row2=mysql_fetch_array($resultf3))
    {       
	        echo "\"".$row2['course']."\"".",";
		
	
			//"January", "February", "March", "April", "May", "June", "July"],
			
	}
	     echo "],"
			?>
            datasets: [
            
                {
                    fillColor: "#26B99A", //rgba(220,220,220,0.5)
                    strokeColor: "#26B99A", //rgba(220,220,220,0.8)
                    highlightFill: "#36CAAB", //rgba(220,220,220,0.75)
                    highlightStroke: "#36CAAB", //rgba(220,220,220,1)
                    data: [<?php
			while($row2=mysql_fetch_array($resultf4))
    {   
	        echo $row2['avg(total)'];
	        echo ",";
			//"January", "February", "March", "April", "May", "June", "July"],
			
	}
	     echo "],"
			?>
            }
        ],
        }

        $(document).ready(function () {
            new Chart($("#canvas_bar1").get(0).getContext("2d")).Bar(barChartData1, {
                tooltipFillColor: "rgba(51, 51, 51, 0.55)",
                responsive: true,
                barDatasetSpacing: 6,
                barValueSpacing: 5
            });
        });
		

        $(document).ready(function () {
            new Chart(document.getElementById("canvas000").getContext("2d")).Line(lineChartData, {
                responsive: true,
                tooltipFillColor: "rgba(51, 51, 51, 0.55)"
            });
        });

       

       

        


      
    </script>
</body>

</html>