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
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>CS4342 Student Form</title>

  <!-- Importing Bootstrap CSS library https://getbootstrap.com/ -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
  <div style="margin-top: 20px" class="container">
    <h1>Schedule Advising</h1>
    <!-- styling of the form for bootstrap https://getbootstrap.com/docs/4.5/components/forms/ -->
    <form action="student_input.php" method="post">
      <div class="form-group">
        <label for="name">Name:</label>
        <input class="form-control" type="text" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="studentID">Student ID:</label>
        <input class="form-control" type="number" id="studentID" name="studentID">
      </div>
      <div class="form-group">
        <label for="email">UTEP e-mail:</label>
        <input class="form-control" type="email" id="email" name="email">
      </div>
      <div class="form-group">
        <label for="classification">Classification:</label>
        <select id="classification" name="classification">
          <option value="freshman">Freshman</option>
          <option value="sophomore">Sophomore</option>
          <option value="junior">Junior</option>
          <option value="senior">Senior</option>
        </select>
      </div>
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
          <input type="checkbox" id="tuesday" name="tuesday[]" value="2020-11-30 10:30:00">
          <label for="mon1">Tue - 10:30am to 11:00pm</label><br>
          <input type="checkbox" id="tuesday" name="tuesday[]" value="2020-11-30 12:30:00">
          <label for="mon2">Tue - 12:30am to 1:00pm</label><br>
          <input type="checkbox" id="tuesday" name="tuesday[]" value="2020-11-30 2:30:00">
          <label for="mon3">Tue - 2:30am to 3:00pm</label>
        </div>
        <div class="col-md-4">
          <input type="checkbox" id="wednesday" name="wednesday[]" value="2020-12-2 10:30:00">
          <label for="wed1">Wed - 10:30am to 11:00pm</label><br>
          <input type="checkbox" id="wednesday" name="wednesday[]" value="2020-12-2 12:30:00">
          <label for="wed2">Wed - 12:30am to 1:00pm</label><br>
          <input type="checkbox" id="wednesday" name="wednesday[]" value="2020-12-2 2:30:00">
          <label for="wed3">Wed - 2:30am to 3:00pm</label>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-4">
          <input type="checkbox" id="thursday" name="thursday[]" value="2020-12-2 10:30:00">
          <label for="wed1">Thr - 10:30am to 11:00pm</label><br>
          <input type="checkbox" id="thursday" name="thursday[]" value="2020-12-2 12:30:00">
          <label for="wed2">Thr - 12:30am to 1:00pm</label><br>
          <input type="checkbox" id="thursday" name="thursday[]" value="2020-12-2 2:30:00">
          <label for="wed3">Thr - 2:30am to 3:00pm</label>
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
      <br><a href="student_menu.php">Back to Student Page</a><br>
    </form>

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- PhP code starts here -->
    <?php
    require_once('../config.php');

    if (isset($_POST['Submit'])) {


      /**
       * Grab information from the form submission and store values into variables.
       */
      $id = isset($_POST['studentID']) ? $_POST['studentID'] : " ";
      $email = isset($_POST['email']) ? $_POST['email'] : " ";
      $name = isset($_POST['name']) ? $_POST['name'] : " ";
      $classification = isset($_POST['classification']) ? $_POST['classification'] : " ";

      $mon = isset($_POST['monday']) ? $_POST['monday'] : " ";
      $tue = isset($_POST['tuesday']) ? $_POST['tuesday'] : " ";
      $wed = isset($_POST['wednesday']) ? $_POST['wednesday'] : " ";
      $thr = isset($_POST['thursday']) ? $_POST['thursday'] : " ";
      $fri = isset($_POST['friday']) ? $_POST['friday'] : " ";

      //Insert into Student table;
      $queryStudent  = "INSERT INTO Student (Sid, Semail, Sname, Sclassification, SidAdvised)
                VALUES ('" . $id . "', '" . $email . "', '" . $name . "', '" . $classification . "', 0);";
      if ($conn->query($queryStudent) === TRUE) {
        echo "New entry created successfully </p>";
      } else {
        echo "Error: " . $queryUser . "<br>" . $conn->error;
      }

      $squeryDate;
      if ($mon !== ' ') {
        foreach ($mon as $monday) {
          $queryDate  = "INSERT INTO Student_Availability (Sid, SAvailability)
                    VALUES ('" . $id . "', '" . $monday . "');";
          if ($conn->query($queryDate) === TRUE) {
          } else {
            echo "Error: " . $queryDate . "<br>" . $conn->error;
          }
        }
      }
      if ($tue !== ' ') {
        foreach ($tue as $tuesday) {
          $queryDate  = "INSERT INTO Student_Availability (Sid, SAvailability)
                    VALUES ('" . $id . "', '" . $tuesday . "');";
          if ($conn->query($queryDate) === TRUE) {
          } else {
            echo "Error: " . $queryDate . "<br>" . $conn->error;
          }
        }
      }
      if ($wed !== ' ') {
        foreach ($wed as $wednesday) {
          $queryDate  = "INSERT INTO Student_Availability (Sid, SAvailability)
                    VALUES ('" . $id . "', '" . $wednesday . "');";
          if ($conn->query($queryDate) === TRUE) {
          } else {
            echo "Error: " . $queryDate . "<br>" . $conn->error;
          }
        }
      }
      if ($thr !== ' ') {
        foreach ($thr as $thursday) {
          $queryDate  = "INSERT INTO Student_Availability (Sid, SAvailability)
                    VALUES ('" . $id . "', '" . $thursday . "');";
          if ($conn->query($queryDate) === TRUE) {
          } else {
            echo "Error: " . $queryDate . "<br>" . $conn->error;
          }
        }
      }

      if ($fri !== ' ') {
        foreach ($fri as $friday) {
          $queryDate  = "INSERT INTO Student_Availability (Sid, SAvailability)
                    VALUES ('" . $id . "', '" . $friday . "');";
          if ($conn->query($queryDate) === TRUE) {
          } else {
            echo "Error: " . $queryDate . "<br>" . $conn->error;
          }
        }
      }
      // If you want to redirect without seeing messages printed, uncomment the following line:
      //header("Location: index.php");
    }
    ?>


</body>

</html>
