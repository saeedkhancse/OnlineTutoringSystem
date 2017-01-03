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
        include 'includes/db_con.php';
               
            $query = "SELECT * FROM cv"; //You don't need a ; like you do in SQL
$result = mysql_query($query);


//echo "<table>"; // start a table tag in the HTML

if(mysql_num_rows($result)){

				 
				  echo  "<br><h2 class='style8' align=center font-color:black class='hatch'><b>Admin Panel</b></h2>";
				   
				  $i=1;
				  
				  
				    echo "<table style='width:80%;border-collapse:collapse;margin:20px;' border=2>";
                   echo "<tr><td><h3>Id</h3></td><td><h3>Name</h3></td><td><h3>Photo</h3></td><td><h3>Gender</h3></td><td><h3>Area</h3></td><td><h3>Address</h3></td><td><h3>Email</h3></td><td><h3>Mobile</h3></td><td><h3>Education</h3></td><td><h3>Admitcard's photo</h3></td></tr>";

while($row = mysql_fetch_assoc($result)){ 
  //Creates a loop to loop through results
  
  
                
  
  
  $id=$row['id'];
  $name=$row['name'];
   $photo=$row['photo'];
   $gender=$row['gender'];
   $area=$row['area'];
   $medium=$row['medium'];
   $class=$row['class'];
   $address=$row['address'];
   $email=$row['email'];
   $mobile=$row['mobile'];
   $edu=$row['edu'];
   $admitcard=$row['admitcard'];
   $description=$row['description'];
   $check=$row['check'];
   
   
               
			   
  
                  
           
            
                echo "<tr>";
            	echo'<td>'.$i.'</td>';
                 echo'<td>'.$name.'</td>';
            	echo"<td><img src=\"upload/{$photo}\" width=\"110\" height=\"110\"/></td>";
				echo'<td>'.$gender.'</td>';
				echo'<td>'.$area.'</td>';
				
				
				echo'<td>'.$address.'</td>';
            	
            	echo'<td>'.$email.'</td>';
				echo'<td>'.$mobile.'</td>';
				echo'<td>'.$edu.'</td>';
				 Echo "<td><img src=\"upload1/{$admitcard}\" width=\"110\" height=\"110\"/><td>";
				echo"<td><a href='check.php?id=".$id."'>".check."</a></td>";
				echo"<td><a href='delete.php?id=".$id."'>".delete."</a></td>";
            echo"</tr>";
			
                $i++;
              
            }
            }
             
 
 
        
      ?> 
	  
	  </div>
	   