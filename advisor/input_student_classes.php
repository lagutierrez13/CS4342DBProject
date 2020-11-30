<!--
/**
 * CS 4342 Database Management
 * @author Instruction team Spring and Fall 2020 with contribution from L. Garnica and K. Apodaca
 * @version 2.0
 * Description: The purpose of these file is to provide PhP basic elements for an interface to access a DB.
 * Resources: https://getbootstrap.com/docs/4.5/components/alerts/  -- bootstrap examples
 *
 * This file creates the user for the DB, that can create students, e.g., the admin creating student records in the system.
 */



-->
<?php
  require_once('config.php');

  session_start();
  $advisorID = $_SESSION['active_user'];

  ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CS4342 Create User Account</title>

    <!-- Importing Bootstrap CSS library https://getbootstrap.com/ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div style="margin-top: 20px" class="container">
        <h1>Input Student Classes</h1>
        <!-- styling of the form for bootstrap https://getbootstrap.com/docs/4.5/components/forms/ -->
        <form action="student_input.php" method="post">

            <div class="form-group">
                <label for="studentID">Student ID:</label>
                <input class="form-control" type="number" id="studentID" name="studentID">
            </div>

            <label>Type the <strong>CRN</strong> number of the <strong>class</strong> on each box</label>
            <div class="form-group row">
              <div class="col-md-2">
                <input class="form-control" type="number" id="class1" name="class1">
              </div>
              <div class="col-md-2">
                <input class="form-control" type="number" id="class2" name="class2">
              </div>
              <div class="col-md-2">
                <input class="form-control" type="number" id="class3" name="class3">
              </div>
              <div class="col-md-2">
                <input class="form-control" type="number" id="class4" name="class4">
              </div>
              <div class="col-md-2">
                <input class="form-control" type="number" id="class5" name="class5">
              </div>
              <div class="col-md-2">
                <input class="form-control" type="number" id="class6" name="class6">
              </div>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" name='Submit' type="submit" value="Submit">
            </div>
        </form>

        <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- PhP code starts here -->
    <?php
        if (isset($_POST['Submit'])){

    /**
     * Grab information from the form submission and store values into variables.
     */
    $sudentID = isset($_POST['studentID']) ? $_POST['studentID'] : " ";
    $class1 = isset($_POST['class1']) ? $_POST['class1'] : " ";
    $class2 = isset($_POST['class2']) ? $_POST['class2'] : " ";
    $class3 = isset($_POST['class3']) ? $_POST['class3'] : " ";
    $class4 = isset($_POST['class4']) ? $_POST['class4'] : " ";
    $class5 = isset($_POST['class5']) ? $_POST['class5'] : " ";
    $class6 = isset($_POST['class6']) ? $_POST['class6'] : " ";

    //Insert into Student table;
    $queryStudent  = "UPDATE Student SET SidAdvised=1 WHERE Sid='".$sudentID."';";
    if ($conn->query($queryStudent) === TRUE) {
       echo "New entry edited successfully </p>";
    } else {
        echo "Error: " . $queryUser . "<br>" . $conn->error;
    }

    $squeryClass;
    if($class1 !== ' '){
      $queryClass  = "INSERT INTO Classes (Eid, Sid, Cclass)
                  VALUES ('".$advisorID."', '".$sudentID."', '".$class1."');";
      if ($conn->query($queryClass) === TRUE) {
          echo "Successfully added class 1";
      } else {
          echo "Error: " . $queryUser . "<br>" . $conn->error;
      }
    }
    if($class2 !== ' '){
      $queryClass  = "INSERT INTO Classes (Eid, Sid, Cclass)
                  VALUES ('".$advisorID."', '".$sudentID."', '".$class2."');";
      if ($conn->query($queryClass) === TRUE) {
          echo "Successfully added class 2";
      } else {
          echo "Error: " . $queryUser . "<br>" . $conn->error;
      }
    }
    if($class3 !== ' '){
      $queryClass  = "INSERT INTO Classes (Eid, Sid, Cclass)
                  VALUES ('".$advisorID."', '".$sudentID."', '".$class3."');";
      if ($conn->query($queryClass) === TRUE) {
          echo "Successfully added class 3";
      } else {
          echo "Error: " . $queryUser . "<br>" . $conn->error;
      }
    }
    if($class4 !== ' '){
      $queryClass  = "INSERT INTO Classes (Eid, Sid, Cclass)
                  VALUES ('".$advisorID."', '".$sudentID."', '".$class4."');";
      if ($conn->query($queryClass) === TRUE) {
          echo "Successfully added class 4";
      } else {
          echo "Error: " . $queryUser . "<br>" . $conn->error;
      }
    }
    if($class5 !== ' '){
      $queryClass  = "INSERT INTO Classes (Eid, Sid, Cclass)
                  VALUES ('".$advisorID."', '".$sudentID."', '".$class5."');";
      if ($conn->query($queryClass) === TRUE) {
          echo "Successfully added class 5";
      } else {
          echo "Error: " . $queryUser . "<br>" . $conn->error;
      }
    }
    if($class6 !== ' '){
      $queryClass  = "INSERT INTO Classes (Eid, Sid, Cclass)
                  VALUES ('".$advisorID."', '".$sudentID."', '".$class6."');";
      if ($conn->query($queryClass) === TRUE) {
          echo "Successfully added class 6";
      } else {
          echo "Error: " . $queryUser . "<br>" . $conn->error;
      }
    }
    // If you want to redirect without seeing messages printed, uncomment the following line:
    //header("Location: index.php");
}
?>


</body>

</html>
