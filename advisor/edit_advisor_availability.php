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
require_once('../config.php');

session_start();
$advisorID = $_SESSION['active_user'];

$sql = "SELECT Aavailability FROM Advisor_Availability WHERE Eid='" . $advisorID . "';";
if ($conn->query($sql) === TRUE) {
  echo "Succesfully checked";
  if ($conn->query($sql2) === TRUE) {
    echo "Succesfully deleted";
  }
} else {
  //echo "Error: " . $queryUser . "<br>" . $conn->error;
  echo "Error: " . $advisorID;
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CS4342 Edit Availability</title>

  <!-- Importing Bootstrap CSS library https://getbootstrap.com/ -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
  <div style="margin-top: 20px" class="container">
    <h1>Set availability</h1>
    <!-- styling of the form for bootstrap https://getbootstrap.com/docs/4.5/components/forms/ -->
    <form action="student_input.php" method="post">
      <label>Select the <strong>timeslots</strong> you are <strong>available</strong></label>
      <div class="form-group row">
        <div class="col-md-4">
          <input type="checkbox" id="monday" name="monday[]" value="2020-11-30 10:30:00">
          <label for="mon1">Mon - 10:30am to 11:00pm</label><br>
          <input type="checkbox" id="monday" name="monday[]" value="2020-11-30 12:30:00">
          <label for="mon2">Mon - 12:30am to 1:00pm</label><br>
          <input type="checkbox" id="monday" name="monday[]" value="2020-11-30 2:30:00">
          <label for="mon3">Mon - 2:30am to 3:00pm</label>
        </div>
        <div class="col-md-4">
          <input type="checkbox" id="wednesday" name="wednesday[]" value="2020-12-2 10:30:00">
          <label for="wed1">Wed - 10:30am to 11:00pm</label><br>
          <input type="checkbox" id="wednesday" name="wednesday[]" value="2020-12-2 12:30:00">
          <label for="wed2">Wed - 12:30am to 1:00pm</label><br>
          <input type="checkbox" id="wednesday" name="wednesday[]" value="2020-12-2 2:30:00">
          <label for="wed3">Wed - 2:30am to 3:00pm</label>
        </div>
        <div class="col-md-4">
          <input type="checkbox" id="friday" name="friday[]" value="2020-12-4 10:30:00">
          <label for="fri1">Fri - 10:30am to 11:00pm</label><br>
          <input type="checkbox" id="friday" name="friday[]" value="2020-12-4 12:30:00">
          <label for="fri2">Fri - 12:30am to 1:00pm</label><br>
          <input type="checkbox" id="friday" name="friday[]" value="2020-12-4 2:30:00">
          <label for="fri3">Fri - 2:30am to 3:00pm</label>
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
    if (isset($_POST['Submit'])) {


      /**
       * Grab information from the form submission and store values into variables.
       */

      $mon = isset($_POST['monday']) ? $_POST['monday'] : " ";
      $wed = isset($_POST['wednesday']) ? $_POST['wednesday'] : " ";
      $fri = isset($_POST['friday']) ? $_POST['friday'] : " ";

      //Insert into Student table;
      $squeryDate;
      if ($mon !== ' ') {
        foreach ($mon as $monday) {
          $queryDate  = "INSERT INTO Advisor_Availability (Eid, AAvailability)
                    VALUES ('" . $advisorID . "', '" . $monday . "');";
          if ($conn->query($queryDate) === TRUE) {
          } else {
            echo "Error: " . $queryUser . "<br>" . $conn->error;
          }
        }
      }
      if ($wed !== ' ') {
        foreach ($wed as $wednesday) {
          $queryDate  = "INSERT INTO Advisor_Availability (Eid, AAvailability)
                    VALUES ('" . $advisorID . "', '" . $wednesday . "');";
          if ($conn->query($queryDate) === TRUE) {
          } else {
            echo "Error: " . $queryUser . "<br>" . $conn->error;
          }
        }
      }
      if ($fri !== ' ') {
        foreach ($fri as $friday) {
          $queryDate  = "INSERT INTO Advisor_Availability (Eid, AAvailability)
                    VALUES ('" . $advisorID . "', '" . $friday . "');";
          if ($conn->query($queryDate) === TRUE) {
          } else {
            echo "Error: " . $queryUser . "<br>" . $conn->error;
          }
        }
      }
      // If you want to redirect without seeing messages printed, uncomment the following line:
      //header("Location: index.php");
    }
    ?>


</body>

</html>