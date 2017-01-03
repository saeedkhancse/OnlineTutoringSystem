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
                    <li><a href="contact.php">Contact</a></li>                     
                </ul> 

            </div>
        </div>

    </div> <!-- end of menu -->



    <div id="content">

        <?php
        include 'includes/db_con.php';
               
            $query = "SELECT * FROM `cv` WHERE `check` =1"; //You don't need a ; like you do in SQL
$result = mysql_query($query);


//echo "<table>"; // start a table tag in the HTML

if(mysql_num_rows($result)){

				 
				  echo  "<br><h2 class='style8' align=center font-color:black class='hatch'><b>Latest Tutor</b></h2>";
				   
				  $i=1;

while($row = mysql_fetch_assoc($result)){ 
  //Creates a loop to loop through results
  
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
   //$check=$row['check'];
   
               
			   
  
 
// echo "<table style='width:70%;border-collapse:collapse; border-style:inset;margin:20px;margin-left:155px;align:center;
 //border-color:#675433;' border=7>"; 
 //echo "<font style = 'font-color: #998765> ";
 
 echo "<table style='width:45%;float:left;background-color:lightgreen;border-color:#225567;border-collapse:collapse;padding:20px;margin-left:25px;line-height:.6;margin-right:20px;'border=10px >"; 
 
 
  
echo " <tr><td><h3><img src=\"upload/{$photo}\" width=\"110\" height=\"110\"/><br><br>
Name &nbsp &nbsp &nbsp &nbsp &nbsp :$name<br><br>

Area &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :$area <br><br>
Medium &nbsp &nbsp &nbsp :$medium <br><br>
Email  &nbsp &nbsp &nbsp &nbsp &nbsp :$email <br><br>
Mobile &nbsp &nbsp &nbsp&nbsp&nbsp :$mobile <br><br>
Education &nbsp&nbsp&nbsp:$edu </br><br>



</h3>
</td></tr> ";  //$row['index'] the index here is a field name

$i++;

//echo "</font>";

echo "</table>"; //Close the table in HTML    
 // <a href="#">view details</a>                          
 }
 }   

        
      ?> 
	  
	  </div>
	   