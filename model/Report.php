<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    require_once("../db/dbConnection.php");
    
   
    if(isset($_REQUEST['action'])){
        switch ($_REQUEST['action']) {
            case 'reportBreakAsset':
                reportAsset();
                break;

            default:
                # code...
                break;
        }
    }

    function  reportAsset(){
       
        global $mysql;

        $defectedPart = $_POST['defP'];
        $reason = $_POST['exDef'];
        //print_r($defectedPart);
        //print_r($reason);
        $reportassetquery = "INSERT into breakdown (AssetID,TechnicianID,EmployeeID,Date,Reason,DefectedParts)
        VALUES(1,6,14,now(),'$defectedPart','$reason')";
        if(mysqli_query($mysql,$reportassetquery )) {
            echo("Successfully Reported!!");
        }else{
            echo("Error in Submitting!!");
        }
         

        //SELECT * FROM 'asset' INNER JOIN employeeuser ON asset.EmployeeID = employeeuser.EmployeeID WHERE employeeuser.UserID = 3;
        
        // so the employee who is logging to the sytsem will be recorded as the employee ID... and no need to create 
        //different pages...
        //and purchase date and error log is no need
        
        // if(mysqli_query($mysql,$reportassetquery )) {
          
        // function function_alert($message) 
        // {
        //     echo "<script>alert('$message');</script>";
        // }
        //    function_alert("Welcome to Geeks for Geeks");
        // }



        
        
    }
    

?>