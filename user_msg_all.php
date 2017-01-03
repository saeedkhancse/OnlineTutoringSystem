<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
@session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="Stylesheet" href="search1.css" type="text/css"/>
        <!-- <link rel="Stylesheet" href="css/ad_user.css" type="text/css"/>
         <link rel="Stylesheet" href="css/quiz.css" type="text/css"/> -->
        <title>Sign Up</title>


    </head>
    <body>
        <ul>
          <li></li>
        </ul>
        

        <!-- Heaer For Ticket reserved-->

        <div id="banner"></div>

       
<div id="templatemo_menu_panel1" class="nav">
            
    			<div id="templatemo_menu_section11" class="menu_section">
                

                <ul>
                    <li><a href="index.php"  >Logout</a></li>
                    <li><a href="search.php">Search for Tutor</a></li>
                    <li><a href="request.php">Request for Tutor</a></li>
                    <li><a href="available_tution.php">Available tuitions</a></li>  
                     <li><a href="tutor.php"> Tutors</a></li>
                    <li><a href="#">Contact</a></li>                     
                </ul> 

            </div>
        </div>

    </div> <!-- end of menu -->



    <div id="content">

<?php
        extract($_POST);
		
                   include 'includes/db_con.php';
				   
        if (isset($_POST['email']) && isset($_POST['msg']) ) {

            $email = $_POST['email'];

            $msg = $_POST['msg'];
			
			
            if (!empty($email) && !empty($msg)) {
                
               
                        $query = "insert into msg(`email`,`msg`) values('$email','$msg')";
                    }
                   
				   if (mysql_query($query)) {
                        echo 'Thank you for submitting request.<br>';
                        
                    } else {
                        echo mysql_error();
                    }
				 
            
					      
            
        }
        
     ?>  	