<?php

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    require_once("../db/dbConnection.php");
    global $mysql;

    if (isset($_REQUEST['action'])) {
        switch ($_REQUEST['action']) {
            case 'addEmployee';
            saveEmployee();
            break;
        
        default:
            # code...
            break;
        }
    }

    function saveEmployee() {
        $departmentID = $_POST['depID'];
        $firstName = $_POST['fName'];
        $lastName = $_POST['lName'];
        $role = $_POST['role'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $maritalStatus = $_POST['maritalStatus'];
        $address = $_POST['address'];
        $contactNo = $_POST['contactNo'];
        $email = $_POST['email'];
        $eName = $_POST['eName'];
        $eRelationship = $_POST['eRelationship'];
        $econtact = $_POST['econtact'];

    }

?>