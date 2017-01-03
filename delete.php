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
        <link rel="Stylesheet" href="searchavailable 1.css" type="text/css"/>
        <!-- <link rel="Stylesheet" href="css/ad_user.css" type="text/css"/>
         <link rel="Stylesheet" href="css/quiz.css" type="text/css"/> -->
        


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
        //extract($_POST);
		
        include 'includes/db_con.php';
      //  if ( isset($_FILES['photo']['name']) && isset($_POST['name']) && isset($_POST['area']) && isset($_POST['medium']) && isset($_POST['class'])) {

           //This is the directory where images will be saved 
       //
               $id=$_GET['id'];
                        $sql = "DELETE  FROM `cv`  where id=".$id;
                    
                   
				    $test = mysql_query($sql) or die(mysql_error());
					 
            if ($test) {
                echo "<h3>Successfully deleted</h3>";
            } else {
                echo "<h3>Something went wrong</h3>";
            }
        
            ?>
					 
            
					      
            
        
        
     