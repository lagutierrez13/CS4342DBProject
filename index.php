<!--
/**
 * CS 4342 Database Management
 * @author Instruction team Spring and Fall 2020 with contribution from L. Garnica
 * @version 2.0
 * Description: The purpose of these file is to provide PhP basic elements for an interface to access a DB.
 * Resources: https://getbootstrap.com/docs/4.5/components/alerts/  -- bootstrap examples
 * Include your name here - ex. Modified by Villanueva for Assignment 2
 */
-->

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CS 4342 Team 7</title>

  <!-- Bootstrap CSS library https://getbootstrap.com/ -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <style>
    .buttons-area {
      background-color: #041E42;
      color: white;
    }
  </style>
</head>

<body>
  <div style="margin-top: 20px" class="container">
    <h1>CS Department Advising</h1>
    <div class="buttons-area">
      <br>
      <h2 align="center"> Welcome to the UTEP CS Department</h2>
      <br>
      <div class="row">
        <div class="col-lg-6 col-md-3 col-sm-6 col-xs-12" align="right">
          <a href="admin/admin_login.php"><button class="btn btn-warning btn-lg">Administrator Login</button></a><br><br>
        </div>
        <div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
          <a href="advisor/advisor_login.php"><button class="btn btn-warning btn-lg">Advisor Login</button></a><br><br>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-3 col-sm-6 col-xs-12" align="right">
          <a href="student/student_menu.php"><button class="btn btn-warning btn-lg">Student Menu</button></a><br><br>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery and JS bundle w/ Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
