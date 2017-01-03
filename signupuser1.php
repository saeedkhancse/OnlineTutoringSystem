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
                    <li><a href="index.php"  >Logout</a></li>
                    <li><a href="search.php">Search for Tutor</a></li>
                    <li><a href="request.php">Request for Tutor</a></li>
                    <li><a href="available_tution.php">Available tuitions</a></li>  
                     <li><a href="tutor.php"> Tutors</a></li>
                    <li><a href="contact.php">Contact</a></li>                     
                </ul> 

            </div>
        </div>

    </div> <!-- end of menu -->



    <div id="content">

        <?php
        extract($_POST);
        include 'includes/db_con.php';
        if (isset($_POST['email']) && isset($_POST['pass'])) {

          

            $email = $_POST['email'];
            $password = $_POST['pass'];
           

            if ( !empty($email) && !empty($password)) {
                
               
                
                            $rs = mysql_query("select * from user_info where  email='$email' and pass='$password'");
                       
					    if (mysql_num_rows($rs) > 0){
						//echo  '<h1 class='style8' align=center class='hatch'>"Successfully logged in  please go to your" <a href="login.php">"tutor accountz</a>.</h1>';
                        echo '<br><h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp successfully logged in  please go to your <a href="login.php">tutor account</a></h2>';
                        
                    } else {
                        echo 'wrong user name';
                    }
					
						
					
                }
            }
        
        
      ?> 