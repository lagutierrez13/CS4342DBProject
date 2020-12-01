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

function deleteAdmin(int $id, PDO $conn){
    try{
        $sql = 'CALL DeleteAdmin()';
        $q = $conn->query($sql);
        //$q->setFetchMode(PDO::FETCH_ASSOC);

    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}

if (isset($_GET['Eid'])) {

    $userid = $_GET['Eid'];

    $query = "DELETE from employee where Eid = $userid"; 
    $query2 = "DELETE from administrator where Eid = $userid";   

    //deleteAdmin($userid, $conn);

    if ($conn->query($query2) === TRUE) {
        if($conn->query($query) === TRUE){
            echo "Administrator deleted successfuly";
            header("Location: manage_accounts.php");
        }else{
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    } else {
        echo "Error: " . $query2 . "<br>" . $conn->error;
    }
} else {
    echo "No Eid received";
    header("Location: manage_accounts.php");
}
?>