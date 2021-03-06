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

function deleteAdvisor(int $id, mysqli $conn){
    try{
        $sql = 'CALL DeleteAdvisor(:id)';

        $stmt = $conn->prepare($sql);

        $stmt->bind_param(':id', $id);

        $stmt->execute();

        $stmt->close();
        
        // if($conn->query($sql) == TRUE){
        //     echo "Advisor deleted successfuly";
        //     header("Location: manage_accounts.php");
        // }else{
        //     echo "Error: " . $sql . "<br>" . $conn->error;
        // }
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}

if (isset($_GET['Eid'])) {

    $userid = $_GET['Eid'];
    $query = "DELETE from employee where Eid = $userid";    
    $query2 = "DELETE from advisor where Eid = $userid";

    //deleteAdvisor($userid, $conn);

    if ($conn->query($query2) === TRUE) {
        if($conn->query($query) == TRUE){
            echo "Advisor deleted successfuly";
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