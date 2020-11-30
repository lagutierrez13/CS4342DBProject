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
        <h1>Add Advising Session Comments</h1>
        <!-- styling of the form for bootstrap https://getbootstrap.com/docs/4.5/components/forms/ -->
        <form action="student_input.php" method="post">

            <div class="form-group">
                <label for="studentID">Student ID:</label>
                <input class="form-control" type="number" id="studentID" name="studentID">
            </div>

            <label>Type <strong>one</strong> comment per <strong>box</strong></label>
              <div class="form-group">
                <input class="form-control" type="text" id="comment1" name="comment1">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" id="comment2" name="comment2">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" id="comment3" name="comment3">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" id="comment4" name="comment4">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" id="comment5" name="comment5">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" id="comment6" name="comment6">
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
    $comment1 = isset($_POST['comment1']) ? $_POST['comment1'] : " ";
    $comment2 = isset($_POST['comment2']) ? $_POST['comment2'] : " ";
    $comment3 = isset($_POST['comment3']) ? $_POST['comment3'] : " ";
    $comment4 = isset($_POST['comment4']) ? $_POST['comment4'] : " ";
    $comment5 = isset($_POST['comment5']) ? $_POST['comment5'] : " ";
    $comment6 = isset($_POST['comment6']) ? $_POST['comment6'] : " ";

    //Insert into Student table;
    $queryComment;
    if($class1 !== ' '){
      $queryComment  = "INSERT INTO Comments (Eid, Sid, Ccomment)
                  VALUES ('".$advisorID."', '".$sudentID."', '".$comment1."');";
      if ($conn->query($queryComment) === TRUE) {
          echo "Successfully added class 1";
      } else {
          echo "Error: " . $queryUser . "<br>" . $conn->error;
      }
    }
    if($class2 !== ' '){
      $queryComment  = "INSERT INTO Comments (Eid, Sid, Ccomment)
                  VALUES ('".$advisorID."', '".$sudentID."', '".$comment2."');";
      if ($conn->query($queryComment) === TRUE) {
          echo "Successfully added class 2";
      } else {
          echo "Error: " . $queryUser . "<br>" . $conn->error;
      }
    }
    if($class3 !== ' '){
      $queryComment  = "INSERT INTO Comments (Eid, Sid, Ccomment)
                  VALUES ('".$advisorID."', '".$sudentID."', '".$comment3."');";
      if ($conn->query($queryComment) === TRUE) {
          echo "Successfully added class 3";
      } else {
          echo "Error: " . $queryUser . "<br>" . $conn->error;
      }
    }
    if($class4 !== ' '){
      $queryComment  = "INSERT INTO Comments (Eid, Sid, Ccomment)
                  VALUES ('".$advisorID."', '".$sudentID."', '".$comment4."');";
      if ($conn->query($queryComment) === TRUE) {
          echo "Successfully added class 4";
      } else {
          echo "Error: " . $queryUser . "<br>" . $conn->error;
      }
    }
    if($class5 !== ' '){
      $queryComment  = "INSERT INTO Comments (Eid, Sid, Ccomment)
                  VALUES ('".$advisorID."', '".$sudentID."', '".$comment5."');";
      if ($conn->query($queryComment) === TRUE) {
          echo "Successfully added class 5";
      } else {
          echo "Error: " . $queryUser . "<br>" . $conn->error;
      }
    }
    if($class6 !== ' '){
      $queryComment  = "INSERT INTO Comments (Eid, Sid, Ccomment)
                  VALUES ('".$advisorID."', '".$sudentID."', '".$comment6."');";
      if ($conn->query($queryComment) === TRUE) {
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
