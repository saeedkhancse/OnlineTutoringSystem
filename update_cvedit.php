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
                    <li><a href="contact">Contact</a></li>                     
                </ul> 

            </div>
        </div>

    </div> <!-- end of menu -->



    <div id="content">

        <?php
        extract($_POST);
		
        include 'includes/db_con.php';
        if (  isset($_POST['name']) && isset($_POST['area']) && isset($_POST['medium']) && isset($_POST['class'])) {

           //This is the directory where images will be saved 
          $target = "./upload/";
         $target = $target . $_FILES['photo']['name'];
		 
           $target1 = "./upload1/";
         $target1 = $target1 . $_FILES['admitcard']['name'];
		  
		 $photo = ($_FILES['photo']['name']);

            $name = $_POST['name'];
             $area = $_POST['area'];
            $medium = $_POST['medium'];
			$class = $_POST['class'];
			$email = $_POST['email'];
			$gender = $_POST['gender'];
			$mobile = $_POST['mobile'];
            
            $address = $_POST['address'];
			$edu = $_POST['edu'];
			$admitcard=$_POST['admitcard'];
			$description = $_POST['description'];

            if ( !empty($name) && !empty($area) && !empty($medium) && !empty($class) && !empty($email) && !empty($gender) && !empty($mobile) && !empty($address) && !empty($edu)  && !empty($description)){
                
               // $id=$_GET['id'];
                        $query = "UPDATE cv SET `name`='$name',`area`='$area',`medium`='$medium',`class`='$class',`email`='$email',`gender`='$gender',`mobile`='$mobile',`address`='$address',`edu`='$edu',`description`='$description',`check`='0' where name='$name' and email='$email'";
                    }
                   
				   if (mysql_query($query)) {
                        echo '<h2>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp successfully edited.</h2><br>';
                        
                    } else {
                        echo mysql_error();
                    }
					
					// if (move_uploaded_file($_FILES['photo']['tmp_name'], $target) ) {

        //Tells you if its all ok 
       // echo "The file " . basename($_FILES['photo']['name']) . "  has been uploaded, and your information has been added to the directory<br>";
   // } else {

        //Gives and error if its not 
        //echo "something went wrong";
    //}	
					 
            
					      
            
        }
        
     ?>  	