<?php
@session_start();
?>



<html>
<head>
<title></title>



<meta http-equiv="content-type" content="text/html;charset=utf-8">

<link href="search1.css" rel="stylesheet" type="text/css"/>


</head>

<body>





<!--<div id="header">Tution <span>Media</span></div>-->
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
                
		    </div> <!-- end of menu -->


<div id="content">

<!--<h1><center>Request For a Tutor</center></h1>-->

<?php
       
	   extract($_POST);
	   
        include 'includes/db_con.php';
        if (isset($_POST['tarea']) && isset($_POST['tsub']) && isset($_POST['gender']) && isset($_POST['no']) && isset($_POST['tschedule'])) {

            $tarea = $_POST['tarea'];

            $tsub = $_POST['tsub'];
            $gender = $_POST['gender'];
            $no = $_POST['no'];
            $tschedule = $_POST['tschedule'];
			$salary = $_POST['salary'];
			$address=$_POST['address'];
			$email=$_POST['email'];
			$mobile=$_POST['mobile'];
			$date=$_POST['date'];
			$description=$_POST['description'];

            if (!empty($tarea) && !empty($tsub) && !empty($gender) && !empty($no) && !empty($tschedule) && !empty($salary) && !empty($address) && !empty($email) && !empty($mobile) && !empty($date) && !empty($description)) {
                
                
           $query = "insert into student_info(`tarea`,`tsub`, `gender`,`no`,`tschedule`,`salary`,`address`,`email`,`mobile`,`date`,`description`) values('$tarea','$tsub','$gender','$no','$tschedule','$salary','$address','$email','$mobile','$date','$description')";
                       
                    if (mysql_query($query)) {
                        echo  "<h2 class='style8' align=center class='hatch'>Thank you for submit tuition details.</h2>";
                        
                    } else {
                        echo mysql_error();
                    }
					
						
					
                
            }
        }
        
     ?>  	





</div>
<div id="footer"></div>

</body>

</html>





























