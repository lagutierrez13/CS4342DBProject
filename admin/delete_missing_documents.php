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

  ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CS4342</title>

    <!-- Importing Bootstrap CSS library https://getbootstrap.com/ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div style="margin-top: 20px" class="container">
        <h1>Delete Missing Documents</h1>
        <!-- styling of the form for bootstrap https://getbootstrap.com/docs/4.5/components/forms/ -->
        <form action="delete_missing_documents.php" method="post">

            <div class="form-group">
                <label for="studentID">Student ID:</label>
                <input class="form-control" type="number" id="studentID" name="studentID">
            </div>

            <label>Type the <strong>document</strong> that would like to delete.</label>
            <div class="form-group row">
              <div class="col-md-6">
                <input class="form-control" type="text" id="doc1" name="doc1">
              </div>
              <div class="col-md-6">
                <input class="form-control" type="text" id="doc2" name="doc2">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <input class="form-control" type="text" id="doc3" name="doc3">
              </div>
              <div class="col-md-6">
                <input class="form-control" type="text" id="doc4" name="doc4">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <input class="form-control" type="text" id="doc5" name="doc5">
              </div>
              <div class="col-md-6">
                <input class="form-control" type="text" id="doc6" name="doc6">
              </div>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" name='Submit' type="submit" value="Submit">
            </div>
            <a href="advisor_menu.php">Back to Menu</a></br>
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
    $doc1 = isset($_POST['doc1']) ? $_POST['doc1'] : " ";
    $doc2 = isset($_POST['doc2']) ? $_POST['doc2'] : " ";
    $doc3 = isset($_POST['doc3']) ? $_POST['doc3'] : " ";
    $doc4 = isset($_POST['doc4']) ? $_POST['doc4'] : " ";
    $doc5 = isset($_POST['doc5']) ? $_POST['doc5'] : " ";
    $doc6 = isset($_POST['doc6']) ? $_POST['doc6'] : " ";

    //Insert into Student table;

    $queryDoc;
    if($doc1 !== ''){
      $sql = "SELECT * FROM Student_Required_Documents WHERE Required_Document='" . $doc1 . "' AND Sid='" . $sudentID . "';";
      $resultSql = $conn->query($sql);
      if ($resultSql->num_rows > 0){
        $queryDoc  = "DELETE FROM Student_Required_Documents
                    WHERE Sid='".$sudentID."' AND Required_Document='".$doc1."';";
        if ($conn->query($queryDoc) === TRUE) {
            echo "Successfully deleted missing document 1<br>";
        } else {
            echo "Error: " . $queryDoc . "<br>" . $conn->error;
        }
      }else{
        echo "Couldn't find<br>";
      }
    }
    if($doc2 !== ''){
      $sql = "SELECT * FROM Student_Required_Documents WHERE Required_Document='" . $doc2 . "' AND Sid='" . $sudentID . "';";
      $resultSql = $conn->query($sql);
      if ($resultSql->num_rows > 0){
        $queryDoc  = "DELETE FROM Student_Required_Documents
                    WHERE Sid='".$sudentID."' AND Required_Document='".$doc2."';";
        if ($conn->query($queryDoc) === TRUE) {
            echo "Successfully deleted missing document 2<br>";
        } else {
            echo "Error: " . $queryDoc . "<br>" . $conn->error;
        }
      }else{
        echo "Couldn't find<br>";
      }
    }
    if($doc3 !== ''){
      $sql = "SELECT * FROM Student_Required_Documents WHERE Required_Document='" . $doc3 . "' AND Sid='" . $sudentID . "';";
      $resultSql = $conn->query($sql);
      if ($resultSql->num_rows > 0){
        $queryDoc  = "DELETE FROM Student_Required_Documents
                    WHERE Sid='".$sudentID."' AND Required_Document='".$doc3."';";
        if ($conn->query($queryDoc) === TRUE) {
            echo "Successfully deleted missing document 3<br>";
        } else {
            echo "Error: " . $queryDoc . "<br>" . $conn->error;
        }
      }else{
        echo "Couldn't find<br>";
      }
    }
    if($doc4 !== ''){
      $sql = "SELECT * FROM Student_Required_Documents WHERE Required_Document='" . $doc4 . "' AND Sid='" . $sudentID . "';";
      $resultSql = $conn->query($sql);
      if ($resultSql->num_rows > 0){
        $queryDoc  = "DELETE FROM Student_Required_Documents
                    WHERE Sid='".$sudentID."' AND Required_Document='".$doc4."';";
        if ($conn->query($queryDoc) === TRUE) {
            echo "Successfully deleted missing document 4<br>";
        } else {
            echo "Error: " . $queryDoc . "<br>" . $conn->error;
        }
      }else{
        echo "Couldn't find<br>";
      }
    }
    if($doc5 !== ''){
      $sql = "SELECT * FROM Student_Required_Documents WHERE Required_Document='" . $doc5 . "' AND Sid='" . $sudentID . "';";
      $resultSql = $conn->query($sql);
      if ($resultSql->num_rows > 0){
        $queryDoc  = "DELETE FROM Student_Required_Documents
                    WHERE Sid='".$sudentID."' AND Required_Document='".$doc5."';";
        if ($conn->query($queryDoc) === TRUE) {
            echo "Successfully deleted missing document 5<br>";
        } else {
            echo "Error: " . $queryDoc . "<br>" . $conn->error;
        }
      }else{
        echo "Couldn't find<br>";
      }
    }
    if($doc6 !== ''){
      $sql = "SELECT * FROM Student_Required_Documents WHERE Required_Document='" . $doc6 . "' AND Sid='" . $sudentID . "';";
      $resultSql = $conn->query($sql);
      if ($resultSql->num_rows > 0){
        $queryDoc  = "DELETE FROM Student_Required_Documents
                    WHERE Sid='".$sudentID."' AND Required_Document='".$doc6."';";
        if ($conn->query($queryDoc) === TRUE) {
            echo "Successfully deleted missing document 6<br>";
        } else {
            echo "Error: " . $queryDoc . "<br>" . $conn->error;
        }
      }else{
        echo "Couldn't find<br>";
      }
    }
    // If you want to redirect without seeing messages printed, uncomment the following line:
    //header("Location: advisor_menu.php");
}
?>


</body>

</html>
