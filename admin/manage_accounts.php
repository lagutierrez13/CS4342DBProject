<!--
/**
 * CS 4342 Database Management
 * @author Instruction team Spring and Fall 2020 with contribution from L. Garnica
 * @version 2.0
 * Description: The purpose of these file is to provide PhP basic elements for an interface to access a DB. 
 * Resources: https://getbootstrap.com/docs/4.5/components/alerts/  -- bootstrap examples
 *
 * This file retrieves and displays the records of the table Student.
 */
-->


<?php
/*
* Reference for tables: https://getbootstrap.com/docs/4.5/content/tables/
*/

session_start();
require_once('../config.php');
require_once('../validate_session.php');
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Importing Bootstrap CSS library https://getbootstrap.com/ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
    <?php $sql = "SELECT * FROM administrator";
    if ($result = $conn->query($sql)) {
    ?>
        <table class="table" width=50%>
            <thead>
                <td> ID</td>
                <td> Name</td>
                <td> Email</td>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_row()) {
                ?>
                    <tr>
                        <td><?php printf("%s", $row[0]); ?></td>
                        <td><?php printf("%s", $row[1]); ?></td>
                        <td><?php printf("%s", $row[2]); ?></td>
                        <td><a href="update_advisor_interface.php?Eid=<?php echo $row[0] ?>">Update</a></td>
                        <td><a href="delete_advisor.php?Eid=<?php echo $row[0] ?>">Delete</a></td>
                        <td><a href="delete_student.php?Eid=<?php echo $row[0] ?>">Open Time Slots</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php
    }
    ?>
    <!-- Link to create advisor account-->
    <a href="create_advisor.php">Create New Advisor Account</a><br>
    <!-- Link to return to student_menu-->
    <a href="admin_menu.php">Back to Administrator Menu</a><br>
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>