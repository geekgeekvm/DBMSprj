<!DOCTYPE html>
<html lang="en">

<head>
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
	<?php session_start();  ?>


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
                            <h3>Adding Teacher</h3>
                        </div>
                       
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                   <!-- <h2>Form Design <small>different form elements</small></h2> -->
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
                                    <form id="demo-form2" data-parsley-validate method="post" action="teacherdb.php" class="form-horizontal form-label-left">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="name">
                                            </div>
                                        </div>
                                       
                                  
									    <div class="form-group">
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email ID <span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input id="middle-name" class="form-control col-md-7 col-xs-12" required="required" type="email" name="email">
                                            </div>
                                        </div>
									    <div class="form-group">
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Username<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input id="middle-name" class="form-control col-md-7 col-xs-12" required="required" type="text" placeholder="(For Login)" name="username">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Password<span class="required">*</span></label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input id="middle-name" class="form-control col-md-7 col-xs-12" required="required" type="password"  name="password">
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
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Course & Sem<span class="required">*</span></label>
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <input id="middle-name" class="form-control" required="required" type="text" name="course">
												
                                            </div>
											
                                            <div class="col-md-2 col-sm-2 col-xs-12">
                                                <select class="form-control" required="required" name="sem">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    
                                                </select>
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


                    




                  


                
                <!-- /page content -->

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