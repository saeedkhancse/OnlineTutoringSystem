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

        <!-- Heaer For Ticket reserved-->

        <div id="banner"></div>


<div id="templatemo_menu_panel1" class="nav">
            
    			<div id="templatemo_menu_section11" class="menu_section">
                

                <ul>
                    <li><a href="index.php"  >Home</a></li>
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
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['cpass']) && isset($_POST['address'])) {

            $username = $_POST['name'];

            $email = $_POST['email'];
            $password = $_POST['pass'];
            $confirm = $_POST['cpass'];
            $address = $_POST['address'];

            if (!empty($username) && !empty($email) && !empty($password) && !empty($confirm) && !empty($address)) {
                
                if ($password == $confirm) {
                    if (!empty($_SESSION['user_type'])) {
                        if ($_SESSION['user_type'] == 'admin') {
                            $query = "insert into user_info(`name`,`email`, `pass`, `address`,`type`) values('$username','$email','$password','$address','admin')";
                        }
                    } else {
                        $query = "insert into user_info(`name`,`email`, `pass`, `address`,`type`) values('$username','$email','$password','$address','user')";
                    }
                    if (mysql_query($query)) {
                        echo 'Thank you for registering';
                        
                    } else {
                        echo mysql_error();
                    }
					
						
					
                }
            }
        }
        
     ?>  	