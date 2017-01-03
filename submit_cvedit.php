<html>
<head>
<title></title>



<meta http-equiv="content-type" content="text/html;charset=utf-8">

<link href="search1.css" rel="stylesheet" type="text/css"/>

<script language="javascript">
            function check()
            {
                if (document.form1.name.value == "")
                {
                    alert("Please Enter Your Name");
                    document.form1.name.focus();
                    return false;
                }
				 if (document.form1.area.value == "")
                {
                    alert("Please Enter Your Area");
                    document.form1.area.focus();
                    return false;
                }
				 if (document.form1.medium.value == "")
                {
                    alert("Please Enter Your desired medium");
                    document.form1.medium.focus();
                    return false;
                }
				 if (document.form1.class.value == "")
                {
                    alert("Please Enter Your desired class");
                    document.form1.class.focus();
                    return false;
                }
				 if (document.form1.subject.value == "")
                {
                    alert("Please Enter Your desired subjects");
                    document.form1.subject.focus();
                    return false;
                }

                if (document.form1.email.value == "")
                {
                    alert("Please Enter Email Id");
                    document.form1.email.focus();
                    return false;
                }

              if (document.form1.gender.value == "")
                {
                    alert("Please Select your Gender");
                    document.form1.gender.focus();
                    return false;
                }
				if (document.form1.mobile.value == "")
                {
                    alert("Please Enter your mobole no.");
                    document.form1.mobile.focus();
                    return false;
                }
				
                if (document.form1.address.value == "")
                {
                    alert("Please Enter Address");
                    document.form1.address.focus();
                    return false;
                }
                if (document.form1.photo.value == "")
                {
                    alert("Please upload your photo");
                    document.form1.photo.focus();
                    return false;
                }
				
             if (document.form1.edu.value == "")
                {
                    alert("Please Enter your qualification");
                    document.form1.edu.focus();
                    return false;
                }
				
				if (document.form1.adphoto.value == "")
                {
                    alert("Please upload your admitcard's photo");
                    document.form1.adphoto.focus();
                    return false;
                }
				
				if (document.form1.description.value == "")
                {
                    alert("Please Enter something about you");
                    document.form1.description.focus();
                    return false;
                }
                return true;
            }

        </script>


</head>

<body>




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
                
		    </div> <!-- end of menu -->


<div id="content">


 <?php
        extract($_POST);
		
        include 'includes/db_con.php';
        if ( isset($_FILES['photo']['name']) && isset($_POST['name']) && isset($_POST['area']) && isset($_POST['medium']) && isset($_POST['class'])) {

           //This is the directory where images will be saved 
          $target = "./upload/";
          $target = $target . $_FILES['photo']['name'];
		 

		  
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
			$description = $_POST['description'];

            if (!empty($photo) && !empty($name) && !empty($area) && !empty($medium) && !empty($class) && !empty($email) && !empty($gender) && !empty($mobile) && !empty($address) && !empty($edu)  && !empty($description)){
                
               
                       // $query = "insert into cv(`photo`,`name`,`area`,`medium`,`class`,`email`, `gender`,`mobile`, `address`,`edu`,`description`) values('$photo','$name','$area','$medium','$class','$email','$gender','$mobile','$address','$edu','$description')";
                  //  }
                   
				  // if (mysql_query($query)) {
                      //  echo 'Thank you for registering.<br>';
                        
                  //  } else {
                       // echo mysql_error();
                   // }
					
					// if (move_uploaded_file($_FILES['photo']['tmp_name'], $target) ) {

        //Tells you if its all ok 
      //  echo "The file " . basename($_FILES['photo']['name']) . "  has been uploaded, and your information has been added to the directory<br>";
  //  } else {

        //Gives and error if its not 
     //   echo "something went wrong";
   // }	
				 
            
		}			      
            
        }
        
     ?>  	

         <?php
                               
							  
                                       // $nm = 'bb@gmail.com';
                                        $Que = "SELECT * FROM cv where name='$name' and email='$email'";
                                        $Result = mysql_query($Que);
                                        while ($row2 = mysql_fetch_array($Result)) {
                                          // target = "./upload/";
          //$target = $target . $_FILES['photo']['name'];
		 

		  
		  //$photo = $row2['photo'];

            $name = $row2['name'];
             $area = $row2['area'];
            $medium = $row2['medium'];
			$class = $row2['class'];
			$email = $row2['email'];
			$gender = $row2['gender'];
			$mobile = $row2['mobile'];
            
            $address = $row2['address'];
			$edu = $row2['edu'];
			$description = $row2['description'];
                                        
                                    }
                                

							   
							    if (isset($found)) {
                                    echo "Invalid Username or Password";
                                }
                                ?>

<div id="table">
 
<form name="form1"  enctype="multipart/form-data" method="post" action="update_cvedit.php" onSubmit="return check();">
                <table>
				
				
					
				
			
				 <tr>
                        <td width="156"><h4>Name</h4></td>
                        <td width="301"><input type="text" name="name" value="<?php
                                                                                   if (isset($name)) {

                                                                                       echo $name;
                                                                                   }
                                                                                   ?> "class="textfield required"/></td>
                    </tr>
					
                    <tr>
                        <td width="156"><h4>Area</h4></td>
                        <td width="301"><input type="text" name="area" value="<?php
                                                                                   if (isset($area)) {

                                                                                       echo $area;
                                                                                   }
                                                                                   ?> "class="textfield required"/></td>
                    </tr>
                    
                    <tr>
                        <td><h4>Medium</h4></td>
                        <td><input type="text" name="medium" value= "<?php
                                                                                   if (isset($medium)) {

                                                                                       echo $medium;
                                                                                   }
                                                                                   ?>"class="textfield" /></td>
                    </tr>
                    <tr>
                        <td><h4>Class</h4></td>
                        <td><input type="text" name="class" value="<?php
                                                                                   if (isset($class)) {

                                                                                       echo $class;
                                                                                   }
                                                                                   ?>"class="textfield required "/></td>
                    </tr>
                    
					<tr>
                        <td><h4>Email</h4></td>
                        <td><input type="text" name="email" value= "<?php
                                                                                   if (isset($email)) {

                                                                                       echo $email;
                                                                                   }
                                                                                   ?>"class="textfield required email"/></td>
                    </tr>
					<tr>
                        <td><h4>Gender</h4></td>
                        <td>
						<select name="gender">
						     
                             <option value="male">Male</option>
                              <option value="female">Female</option>
                           
                       </select>
					   </td>
                    </tr>
					<tr>
                        <td><h4>Mobile no.</h4></td>
                        <td><input type="text" name="mobile" value= "<?php
                                                                                   if (isset($mobile)) {

                                                                                       echo $mobile;
                                                                                   }
                                                                                   ?>"class="textfield"/></td>
                    </tr>
					<tr>
                        <td><h4>Address</h4></td>
                        <td><input type="text" name="address" value= "<?php
                                                                                   if (isset($address)) {

                                                                                       echo $address;
                                                                                   }
                                                                                   ?>"class="textfield"/></td>
                    </tr>
					

        
		            <tr>
                        <td><h4>Educational qialification</h4></td>
                        <td><input type="text" name="edu" value= "<?php
                                                                                   if (isset($edu)) {

                                                                                       echo $edu;
                                                                                   }
                                                                                   ?>"class="textfield"/></td>
                    </tr>
			
                 
		<tr>
            <td><h4>Description</h4></td>
            <td><textarea  name="description" cols="35" rows="3" ><?php
                                                                                   if (isset($description)) {

                                                                                       echo $description;
                                                                                   }
                                                                                   ?></textarea></td>
        </tr>
                    <tr>
                        <td colspan="2" align="right">
                            <input type="submit" value="Submit" />
                        </td>
                    </tr>
                </table>
            </form>




</div>
</div>
<div id="footer"></div>

</body>

</html>





























