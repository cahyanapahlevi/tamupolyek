<?php
session_start();
require "koneksi.php";
if(isset($_SESSION['id'])){
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>TAMU MEMBER PAGE</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/datepicker3.css" rel="stylesheet">
		<link href="assets/css/dataTables.bootstrap.css" rel="stylesheet">
    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--  Fonts and icons     -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'/>
    <link href="assets/css/themify-icons.css" rel="stylesheet"/>


</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="black" data-active-color="warning">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="home.php?page=main" class="simple-text">
                    MEMBER PAGE
                </a>
            </div>

            <ul class="nav">
                <li><a href="home.php?page=main">
                <i class="ti-user"></i><p>ACCOUNT</p></a>
                </li>
                <li <?php if($_GET['page']=='bh'){echo "class='active'";}?>> <a href="home.php?page=bh">
                  <i class="ti-panel"></i><p>Booking History</p></a>
                </li>
                <li <?php if($_GET['page']=='booking'){echo "class='active'";}?>> <a href="home.php?page=booking">
                  <i class="ti-shopping-cart-full"></i><p>Booking Now</p></a>
                </li>
					</ul>
				<ul class="nav">
				<li <?php if($_GET['page']=='logout'){echo "class='active'";}?>>
            <a href="home.php?page=logout">
              	<i class="ti-shift-left"></i>
                <p>Logout</p></a>
        </li>
        </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="../index.php">< Back To Home</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
							<?php
							if(!isset($_GET['page'])){
								include "dashboard.php";
							}else{
								switch($_GET['page']){
								case 'main' : include "menu/dashboard.php";
									break;
									case 'bh' : include "menu/bh.php";
										break;
									case 'booking' : include "menu/booking.php";
										break;
									case 'logout' : include "menu/logout.php";
										break;
								}
							}
							?>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="">
                                Huge Tim
                            </a>
                        </li>
                        <li>
                            <a href="">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="">Huge Tim</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

<!-- Modal -->
<div id="event" class="modal fade">
</div>
<div id="admin" class="modal fade">
</div>
<div id="addadmin" class="modal fade">
	<?php include "menu/addadmin.php"; ?>
</div>
<div id="galeri" class="modal fade">
</div>
<div id="addgaleri" class="modal fade">
	<?php include "menu/addgaleri.php"; ?>
</div>

    <!--   Core JS Files   -->
  <script src="assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/dataTables.bootstrap.js"></script>

	<script>
		$(document).ready(function() {
		$("#tabel_data").dataTable();
		});
	</script>

	<script type="text/javascript">
    	$(document).ready(function(){
        	demo.initChartist();
        	$.notify({
            	icon: 'ti-gift',
            	message: "Welcome back to <b> Admin Page</b> - Thanks for coming ^_^."
            },{
                type: 'success',
                timer: 4000
            });
    	});
	</script>

<!-- Modal-->
	<script type="text/javascript">
		 $(".editevent").click(function(e) {
				var m = $(this).attr("id");
			 $.ajax({
						url: "menu/editevent.php",
						type: "GET",
						data : {id_event: m,},
						success: function (ajaxData){
							$("#event").html(ajaxData);
							$("#event").modal('show',{backdrop: 'true'});
						 }
					 });
				});
	</script>
	<script type="text/javascript">
		 $(".editadmin").click(function(e) {
				var m = $(this).attr("id");
			 $.ajax({
						url: "menu/editadmin.php",
						type: "GET",
						data : {id_admin: m,},
						success: function (ajaxData){
							$("#admin").html(ajaxData);
							$("#admin").modal('show',{backdrop: 'true'});
						 }
					 });
				});
	</script>


	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){
		        $(this).find('em:first').toggleClass("glyphicon-minus");
		    });
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>


</html>
<?php } else {
	echo "<script language=\"javascript\">\n";
	echo "alert(\"Anda Harus LOGIN dahulu !\")\n";
	echo "window.location=\"../index.php\" ";
	echo "</script>";}
?>
