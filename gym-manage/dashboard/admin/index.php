﻿<!-- dashboard page -->
<?php
require '../../include/db_conn.php';
page_protect(); //used to protect session details on reloading

?>
<!DOCTYPE html>
<html lang="en">

<head>


	<title>Our Gym | Dashboard </title>

	<link rel="stylesheet" href="../../css/style.css" id="style-resource-5">
	<script type="text/javascript" src="../../js/Script.js"></script>
	<link rel="stylesheet" href="../../css/dashMain.css">
	<link rel="stylesheet" type="text/css" href="../../css/entypo.css">
	<style>
		.page-container .sidebar-menu #main-menu li#dash>a {
			background-color: rgba(3, 13, 13, 0.5);
			color: #ffffff;
		}
	</style>

</head>

<body class="page-body  page-fade" onload="collapseSidebar()">

	<div class="page-container sidebar-collapsed" id="navbarcollapse">

		<div class="sidebar-menu">

			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="https://en.wikipedia.org/wiki/Gold%27s_Gym">
						<img src="../../images/logo.png" alt="" width="192" height="80" />
					</a>
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse" onclick="collapseSidebar()">
					<a href="#" class="sidebar-collapse-icon ">
						<i class="entypo-menu"></i>
					</a>
				</div>



			</header>
			<?php include('nav.php'); ?>
		</div>

		<div class="main-content">

			<div class="row">

				<!-- Profile Info and Notifications -->
				<div class="col-md-6 col-sm-8 clearfix">

				</div>


				<!-- Raw Links -->
				<div class="col-md-6 col-sm-4 clearfix hidden-xs">

					<ul class="list-inline links-list pull-right" style="font-size: 15px">

						<li>Welcome <?php echo $_SESSION['full_name']; ?>
						</li>

						<li>
							<a href="logout.php" style="color:#fff;">
								Log Out <i class="entypo-logout right"></i>
							</a>
						</li>
					</ul>

				</div>

			</div>
			<div class="tile-stats title" style=" margin-bottom: 30px;">
				<h1>GOLD'S GYM</h1>

			</div> <!-- <hr> -->

			<div class="col-sm-3"><a href="revenue_month.php">
					<div class="tile-stats tile-green">
						<div class="icon"><i class="entypo-users"></i></div>
						<div class="num">
							<h2>Paid Income This Month</h2><br>
							<?php
							date_default_timezone_set("Asia/Calcutta"); //Setting time zone so that we can get today's date
							$date  = date('Y-m');
							$query = "select * from enrolls_to WHERE  paid_date LIKE '$date%'";

							//echo $query;
							$result  = mysqli_query($con, $query);
							$revenue = 0;
							if (mysqli_affected_rows($con) != 0) {
								while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
									$query1 = "select * from plan where pid='" . $row['pid'] . "'";
									$result1 = mysqli_query($con, $query1);
									if ($result1) {
										$value = mysqli_fetch_row($result1);
										$revenue = $value[4] + $revenue;
									}
								}
							}
							echo "₹" . $revenue;
							?>
						</div>
					</div>
				</a>
			</div>


			<div class="col-sm-3"><a href="table_view.php">
					<div class="tile-stats tile-red">
						<div class="icon"><i class="entypo-chart-bar"></i></div>
						<div class="num">
							<h2>Total Members</h2><br>
							<?php
							$query = "select COUNT(*) from users";

							$result = mysqli_query($con, $query);
							// $i      = 1;
							if (mysqli_affected_rows($con) != 0) {
								while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
									echo $row['COUNT(*)'];
								}
							}
							// $i = 1;
							?>
						</div>
					</div>
				</a>
			</div>

			<div class="col-sm-3"><a href="over_members_month.php">
					<div class="tile-stats tile-aqua">
						<div class="icon"><i class="entypo-mail"></i></div>
						<div class="num">
							<h2>Joined This Month</h2><br>
							<?php
							date_default_timezone_set("Asia/Calcutta");
							$date  = date('Y-m');
							$query = "select COUNT(*) from users WHERE joining_date LIKE '$date%'";

							//echo $query;
							$result = mysqli_query($con, $query);
							if (mysqli_affected_rows($con) != 0) {
								while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
									echo $row['COUNT(*)'];
								}
							}
							?>
						</div>
					</div>
				</a>
			</div>

			<div class="col-sm-3"><a href="view_plan.php">
					<div class="tile-stats tile-blue">
						<div class="icon"><i class="entypo-rss"></i></div>
						<div class="num">
							<h2>Total Plan Available</h2><br>
							<?php
							$query = "select COUNT(*) from plan where active='yes'";

							//echo $query;
							$result  = mysqli_query($con, $query);

							if (mysqli_affected_rows($con) != 0) {
								while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
									echo $row['COUNT(*)'];
								}
							}
							?>
						</div>
					</div>
				</a>
			</div>




		</div>


</body>

</html>