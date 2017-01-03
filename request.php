<?php
@session_start();
?>



<html>
<head>
<title></title>



<meta http-equiv="content-type" content="text/html;charset=utf-8">

<link href="search1.css" rel="stylesheet" type="text/css"/>

<script language="javascript">
            function check()
            {
                if (document.form1.tarea.value == "")
                {
                    alert("Please Enter Your area");
                    document.form1.tarea.focus();
                    return false;
                }

                if (document.form1.tsub.value == "")
                {
                    alert("Please Enter wanted tuition subject");
                    document.form1.tsub.focus();
                    return false;
                }

                if (document.form1.gender.value == "")
                {
                    alert("Please Enter Your required teacher gender");
                    document.form1.gender.focus();
                    return false;
                }
                if (document.form1.no.value == "")
                {
                    alert("Please Enter no of students");
                    document.form1.no.focus();
                    return false;
                }
               

                if (document.form1.tschedule.value == "")
                {
                    alert("Please enter your tuition schedule");
                    document.form1.tschedule.focus();
                    return false;
                }
				
				if (document.form1.salary.value == "")
                {
                    alert("Please enter your salary range");
                    document.form1.salary.focus();
                    return false;
                }
				
                if (document.form1.address.value == "")
                {
                    alert("Please Enter Address");
                    document.form1.address.focus();
                    return false;
                }
				
				if (document.form1.email.value == "")
                {
                    alert("Plese Enter email address");
                    document.form1.email.focus();
                    return false;
                }
				
                if (document.form1.mobile.value == "")
                {
                    alert("Plese Enter Mobile Number");
                    document.form1.mobile.focus();
                    return false;
                }
				if (document.form1.date.value == "")
                {
                    alert("Plese Enter submitted date");
                    document.form1.date.focus();
                    return false;
                }
                 
				 if (document.form1.description.value == "")
                {
                    alert("Plese Enter some description");
                    document.form1.description.focus();
                    return false;
                }
                return true;
            }

        </script>


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
                		<li><a href="contact.php">Contact</a></li>                     
		            </ul> 
                    
				</div>
                
		    </div> <!-- end of menu -->


<div id="content">

<!--<h1><center>Request For a Tutor</center></h1>-->

  <?php
                                if (isset($found)) {
                                    echo "Invalid Username or Password";
                                }
                                ?>
                            




<div id="table">
 
<form name="form1" method="post" action="request1.php" onSubmit="return check();">
                <table>
                    <tr>
                        <td width="266"><h4 style="margin-left:28px;">Tuition Area</h4></td>
                        <td  width="350"><input type="text" name="tarea" class="textfield required"/></td><br>
                    </tr><tr></tr><tr></tr><tr></tr><td></td><tr></tr>
                    <tr>
                        <td><h4 style="margin-left:28px;">Tuition Subjects</h4></td>
                        <td><input type="text" name="tsub" class="textfield required" /></td>
                    </tr></tr><tr></tr><tr></tr><td></td><tr></tr>
					
					<tr>
                        <td><h4  style="margin-left:28px;">Gender(Tutor)</h4></td>
                        <td><input type="text" name="gender" class="textfield"/></td>
                    </tr></tr><tr></tr><tr></tr><td></td><tr></tr>
                    <tr>
                        <td><h4  style="margin-left:28px;">No of Students</h4></td>
                        <td><input type="text" name="no" class="textfield" /></td>
                    </tr></tr><tr></tr><tr></tr><td></td><tr></tr>
                    <tr>
                        <td><h4  style="margin-left:28px;">Tuition Schedule</h4></td>
                        <td><input type="text" name="tschedule" class="textfield required "/></td>
                    </tr></tr><tr></tr><tr></tr><td></td><tr></tr>
					
					<tr>
                        <td><h4  style="margin-left:28px;">Salary range</h4></td>
                        <td><input type="text" name="salary" class="textfield required "/></td>
                    </tr></tr><tr></tr><tr></tr><td></td><tr></tr>
					
                    <tr>
                        <td><h4  style="margin-left:28px;">Students address</h4></td>
                        <td><input type="text" name="address" class="textfield"/></td>
                    </tr></tr><tr></tr><tr></tr><td></td><tr></tr>
					<tr>
                        <td><h4  style="margin-left:28px;">Email</h4></td>
                        <td><input type="text" name="email" class="textfield required email"/></td>
                    </tr></tr><tr></tr><tr></tr><td></td><tr></tr>
					
					<tr>
                        <td><h4  style="margin-left:28px;">Mobile no.</h4></td>
                        <td><input type="text" name="mobile" class="textfield"/></td>
                    </tr></tr><tr></tr><tr></tr><td></td><tr></tr>
					
					<tr>
                        <td><h4 style="margin-left:28px;">Submitted date.</h4></td>
                        <td><input type="text" name="date" class="textfield"/></td>
                    </tr></tr><tr></tr><tr></tr><td></td><tr></tr>
					
                    <tr>
                        <td colspan="2" align="right">
                            <input type="submit" value="submit" />
                        </td>
                    </tr>
                </table>
            </form>




</div>
</div>
<div id="footer"></div>

</body>

</html>





























