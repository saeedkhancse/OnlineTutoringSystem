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
        <link rel="Stylesheet" href="searchavailable.css" type="text/css"/>
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
               
            $query = "SELECT * FROM student_info"; //You don't need a ; like you do in SQL
$result = mysql_query($query);


//echo "<table>"; // start a table tag in the HTML

if(mysql_num_rows($result)){
//echo "<table style='width:20%;border-collapse:collapse;margin:20px;' border=3>";
                  // echo "<tr><td><h3>Id</h3></td><td><h3>Branch Name</h3></td><td><h3>Address</h3></td><td><h3>Phone</h3></td></tr>";
				 
				//  echo  "<br><h2 class='style8' align=center font-color:black class='hatch'><b>Tutor wanted</b></h2>";
				   
				  $i=1;

while($row = mysql_fetch_assoc($result)){ 
  //Creates a loop to loop through results
  
  $tarea=$row['tarea'];
   $tsub=$row['tsub'];
   $gender=$row['gender'];
   $no=$row['no'];
   $tschedule=$row['tschedule'];
   $salary=$row['salary'];
   $address=$row['address'];
   $email=$row['email'];
   $mobile=$row['mobile'];
   $date=$row['date'];
   $description=$row['description'];
   
   
               
			   
  
 
 echo "<table style='width:45%;float:left;background-color:lightgray;border-color:#443322;padding:20px;margin-left:25px;line-height:.7;margin-right:20px;'border=14px >"; 
 //echo "<font style = 'font-color: #998766> ";
 
echo " <tr><td><h4>
Tution area &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :$tarea<br><br>
Tuition subject &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp:$tsub <br><br>
Tutor gender &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:$gender<br><br>


Salary &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :$salary<br><br>
Address &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:$address<br><br> 
Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :$email<br><br> 
Mobile no &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :$mobile<br><br> 
Submission date &nbsp &nbsp &nbsp &nbsp:$date<br><br>
 

</td></tr> ";  //$row['index'] the index here is a field name

$i++;

//echo "</font>";

echo "</table>"; //Close the table in HTML    
                            
 }
 }   

        
      ?> 
	  
	  </div>
	   