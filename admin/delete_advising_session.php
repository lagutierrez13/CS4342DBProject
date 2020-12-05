<!--
/**
 * CS 4342 Database Management
 * @author Instruction team Spring and Fall 2020 with contribution from L. Garnica
 * @version 2.0
 * Description: The purpose of these file is to provide PhP basic elements for an interface to access a DB.
 * Resources: https://getbootstrap.com/docs/4.5/components/alerts/  -- bootstrap examples
 *
 * This file deletes a record  from the table Student of your DB.
 */
-->


<?php

session_start();
require_once('../config.php');
require_once('../validate_session.php');

if (isset($_GET['date'])) {

    $date = isset($_GET['date']) ? $_GET['date'] : " ";

    $query = "DELETE FROM Advising_Session WHERE Adate = '$date'";

    if (mysqli_query($conn, $query)) {
        echo "Deleted successfully";
        //header("Location: manage_accounts.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
} else {
    echo "No user id received on request at delete session";
    die();
}

?>
