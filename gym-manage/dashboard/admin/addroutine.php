<!-- create a new routine -->
<?php
require '../../include/db_conn.php';
page_protect();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>GOLD'S Gym| Routine</title>
  <link rel="stylesheet" href="../../css/style.css" id="style-resource-5">
  <script type="text/javascript" src="../../js/Script.js"></script>
  <link rel="stylesheet" href="../../css/dashMain.css">
  <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
  <link href="a1style.css" rel="stylesheet" type="text/css">
  <style>
    .page-container .sidebar-menu #main-menu li#routinehassubopen>a {
      background-color: #2b303a;
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
          <a href="main.php">
            <img src="../../images/logo.png" alt="" width="192" height="80" />
          </a>
        </div>

        <!-- logo collapse icon -->
        <div class="sidebar-collapse" onclick="collapseSidebar()">
          <a href="#" class="sidebar-collapse-icon with-animation">
            <!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
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

          <ul class="list-inline links-list pull-right">

            <li>Welcome <?php echo $_SESSION['full_name']; ?>
            </li>

            <li>
              <a href="logout.php">
                Log Out <i class="entypo-logout right"></i>
              </a>
            </li>
          </ul>

        </div>

      </div>

      <div class="tile-stats title">
        <h1>Create a new Routine</h1>
      </div>

      <!-- <hr /> -->



      <div class="a1-container a1-small a1-padding-32">
        <div class="a1-card-8 a1-light-blue" style="width:500px; margin:0 auto;">
          <div class="a1-container a1-light-blue a1-center" style="border-radius:10px">
            <h3><b>NEW ROUTINE</b></h6>
          </div>
          <form id="form1" name="form1" method="post" class="a1-container" action="saveroutine.php">
            <table width="100%" border="0" align="center">
              <tr>
                <td height="35">
                  <table width="100%" border="0" align="center">
                    <tr>
                      <td height="35">ROUTINE NAME:</td>
                      <td height="35"><input name="rname" placeholder="Routine Name" required style="margin: 0px ; width : 100%;padding : 10px; border: 0;border-bottom:1px solid #eee;box-shadow:0 0 15px 4px rgba(0,0,0,0.06); " /></td>
                    </tr>

                    <tr>
                      <td height="35">DAY 1:</td>
                      <td height="35"><label for="textarea"></label>
                        <textarea name="day1" id="textarea" placeholder="Day 1" style="margin-top: 10px ; padding : 10px; border: 0;border-bottom:1px solid #eee;box-shadow:0 0 15px 4px rgba(0,0,0,0.06); width: 100%;"></textarea></td>
                    </tr>
                    <tr>
                      <td height="35">DAY 2:</td>
                      <td height="35"><label for="textarea"></label>
                        <textarea name="day2" id="textarea" placeholder="Day 2" style="margin: 0px ; padding : 10px; border: 0;border-bottom:1px solid #eee;box-shadow:0 0 15px 4px rgba(0,0,0,0.06); width: 100%;"></textarea></td>
                </td>
              </tr>

              <tr>
                <td height="35">DAY 3:</td>
                <td height="35"><label for="textarea"></label>
                  <textarea name="day3" id="textarea" placeholder="Day 3" style="margin: 0px ; padding : 10px; border: 0;border-bottom:1px solid #eee;box-shadow:0 0 15px 4px rgba(0,0,0,0.06); width: 100%;"></textarea></td>
                </td>
              </tr>
              <tr>
                <td height="35">DAY 4:</td>
                <td height="35"><label for="textarea"></label>
                  <textarea name="day4" id="textarea" placeholder="Day 4" style="margin: 0px ; padding : 10px; border: 0;border-bottom:1px solid #eee;box-shadow:0 0 15px 4px rgba(0,0,0,0.06); width: 100%;"></textarea></td>
                </td>
              </tr>
              <tr>
                <td height="35">DAY 5:</td>
                <td height="35"><label for="textarea"></label>
                  <textarea name="day5" id="textarea" placeholder="Day 5" style="margin: 0px ; padding : 10px; border: 0;border-bottom:1px solid #eee;box-shadow:0 0 15px 4px rgba(0,0,0,0.06); width: 100%;"></textarea>
                <td></td>
              </tr>
              <tr>
                <td height="35">DAY 6:</td>
                <td height="35"><label for="textarea"></label>
                  <textarea name="day6" id="textarea" placeholder="Day 6" style="margin: 0px ; padding : 10px; border: 0;border-bottom:1px solid #eee;box-shadow:0 0 15px 4px rgba(0,0,0,0.06); width: 100%;"></textarea></td>
                </td>
              </tr>


              <tr>
              <tr>
                <td height="35">&nbsp;</td>
                <td height="35"><input class="a1-btn a1-green" type="submit" name="submit" id="submit" value="Add Routine">
                  <input class="a1-btn a1-red" type="reset" name="reset" id="reset" value="Reset"></td>
              </tr>
            </table>
            </td>
            </tr>
            </table>
          </form>
        </div>

       
</body>

</html>