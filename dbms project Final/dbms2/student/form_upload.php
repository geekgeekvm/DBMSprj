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
     <!-- ion_range -->
    <link rel="stylesheet" href="../extra/css/normalize.css" />
    <link rel="stylesheet" href="../extra/css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="../extra/css/ion.rangeSlider.skinFlat.css" />


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
						<?php session_start();
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
                                        <li><a href="form.php">Add Post</a>
                                        </li>
                                        <li><a href="calender.php">Calender</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="tables.php">Tables</a>
                                        </li>
										<li><a href="tables1.php">sir table</a>
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
                            <h3>Upload Excel File</h3>
                        </div>

                       
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Dropzone Excel file uploader</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                <form action="form_upload.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Course*</label>
                                      <div class="col-md-3 col-sm-3 col-xs-12">
										<select class="select2_single form-control" tabindex="-1" name="course">
									  <?php
                                     $name=$_SESSION['username'];
									
									$sql="SELECT distinct course FROM teacherdb where username=\"$name\"";
										$result=mysql_query($sql,$conn);

									while($row = mysql_fetch_array($result))
											{
																echo "<option >".$row['course']."</option>";

												}
                                     ?>
                                   </select>
                                      </div>
                                    </div></br></br></br>
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
                                    </div></br></br></br>
                                    <div >
                                     <p><strong>Weightage:</strong></p>
                                    <input class="knob" name="weightage" data-width="110" data-height="120" data-displayPrevious=true data-fgColor="#26B99A" data-skin="tron" data-thickness=".2" value="75">
                                    </div>
                                    <input type="file" name="file" required/><br /></br>
                                <button type="submit" class="btn btn-primary btn-small" style="align:center"name="submit">Submit</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
               <?php
                include ("connection.php");
             if(isset($_POST["submit"]))
             {
               $file = $_FILES['file']['tmp_name'];
               $handle = fopen($file, "r");
                $c = 1;
               while(($filesop = fgetcsv($handle, 1000, "\t")) !== false)
               {
                 $rollno = $filesop[0];
                  $marks = $filesop[1];
                 $c++;
                 if($c>1){
                    $sql = mysql_query("INSERT INTO  marksdb (Rollno, Marks, Course, Exam, Weightage) VALUES ('$rollno','$marks','$_POST[course]','$_POST[exam]','$_POST[weightage]')");
                   }
                }
             $record=$c-1;
            if($sql){
                echo " <div class='alert alert-success'>
                   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                   <strong>Success!</strong>You database has imported successfully. You have inserted ". $record ." records
                  </div>";
            }else{
                 echo " <div class='alert alert-danger'>
                   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                   <strong>Alert!</strong>Your excel file data is not recorded!Try Again
                  </div>";
            }

    }

               ?>
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
     <!-- input mask -->
    <script src="../extra/js/input_mask/jquery.inputmask.js"></script>
     <!-- knob -->
    <script src="../extra/js/knob/jquery.knob.min.js"></script>
    <!-- range slider -->
    <script src="../extra/js/ion_range/ion.rangeSlider.min.js"></script>
     <!-- knob -->
    <script>
        $(function ($) {

            $(".knob").knob({
                change: function (value) {
                    //console.log("change : " + value);
                },
                release: function (value) {
                    //console.log(this.$.attr('value'));
                    console.log("release : " + value);
                },
                cancel: function () {
                    console.log("cancel : ", this);
                },
                /*format : function (value) {
                 return value + '%';
                 },*/
                draw: function () {

                    // "tron" case
                    if (this.$.data('skin') == 'tron') {

                        this.cursorExt = 0.3;

                        var a = this.arc(this.cv) // Arc
                            ,
                            pa // Previous arc
                            , r = 1;

                        this.g.lineWidth = this.lineWidth;

                        if (this.o.displayPrevious) {
                            pa = this.arc(this.v);
                            this.g.beginPath();
                            this.g.strokeStyle = this.pColor;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, pa.s, pa.e, pa.d);
                            this.g.stroke();
                        }

                        this.g.beginPath();
                        this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, a.s, a.e, a.d);
                        this.g.stroke();

                        this.g.lineWidth = 2;
                        this.g.beginPath();
                        this.g.strokeStyle = this.o.fgColor;
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                        this.g.stroke();

                        return false;
                    }
                }
            });

            // Example of infinite knob, iPod click wheel
            var v, up = 0,
                down = 0,
                i = 0,
                $idir = $("div.idir"),
                $ival = $("div.ival"),
                incr = function () {
                    i++;
                    $idir.show().html("+").fadeOut();
                    $ival.html(i);
                },
                decr = function () {
                    i--;
                    $idir.show().html("-").fadeOut();
                    $ival.html(i);
                };
            $("input.infinite").knob({
                min: 0,
                max: 20,
                stopper: false,
                change: function () {
                    if (v > this.cv) {
                        if (up) {
                            decr();
                            up = 0;
                        } else {
                            up = 1;
                            down = 0;
                        }
                    } else {
                        if (v < this.cv) {
                            if (down) {
                                incr();
                                down = 0;
                            } else {
                                down = 1;
                                up = 0;
                            }
                        }
                    }
                    v = this.cv;
                }
            });
        });
    </script>
    <!-- /knob -->

</body>

</html>