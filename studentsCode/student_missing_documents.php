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
    <h1>Check Missing Documents</h1>
    <!-- styling of the form for bootstrap https://getbootstrap.com/docs/4.5/components/forms/ -->
    <form action="student_missing_documents.php" method="post">
      <div class="form-group">
        <label for="studentID">Enter your student ID:</label>
        <input class="form-control" type="number" id="studentID" name="studentID">
      </div><br>
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

      //Insert into Student table;
      $sql = "SELECT Required_Document FROM Student_Required_Documents WHERE Sid='" . $id . "';";
      $resultSql = $conn->query($sql);
      if ($resultSql->num_rows > 0) {
        while($row = $resultSql->fetch_assoc()) {
          echo "<br>Missing Document: " . $row["Required_Document"]. "<br>";
        }
      }else{
        echo "<br>You're not missing any documents";
      }

      // If you want to redirect without seeing messages printed, uncomment the following line:
      //header("Location: index.php");
    }
    ?>


</body>

</html>
