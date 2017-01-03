<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="Stylesheet" href="search1.css" type="text/css"/>
        <!--<link rel="Stylesheet" href="quiz_1.css" type="text/css"/> -->
        <title>Registration </title>
        <script language="javascript">
            function check()
            {
                if (document.form1.name.value == "")
                {
                    alert("Please Enter Your name");
                    document.form1.name.focus();
                    return false;
                }

                if (document.form1.email.value == "")
                {
                    alert("Please Enter Email Id");
                    document.form1.email.focus();
                    return false;
                }

                if (document.form1.pass.value == "")
                {
                    alert("Please Enter Your Password");
                    document.form1.pass.focus();
                    return false;
                }
                if (document.form1.cpass.value == "")
                {
                    alert("Please Enter Confirm Password");
                    document.form1.cpass.focus();
                    return false;
                }
                if (document.form1.pass.value != document.form1.cpass.value)
                {
                    alert("Confirm Password does not matched");
                    document.form1.cpass.focus();
                    return false;
                }

                if (document.form1.gender.value == "")
                {
                    alert("Please Select your Gender");
                    document.form1.gender.focus();
                    return false;
                }
                if (document.form1.address.value == "")
                {
                    alert("Please Enter Address");
                    document.form1.address.focus();
                    return false;
                }
                if (document.form1.phone.value == "")
                {
                    alert("Plese Enter Mobile Number");
                    document.form1.phone.focus();
                    return false;
                }

                return true;
            }

        </script>

    </head>
    <body>

        <!-- Heaer For Ticket reserved-->
        

        <!-- Main body For Ticket reserved-->
		
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



           
                                <?php
                                if (isset($found)) {
                                    echo "Invalid Username or Password";
                                }
                                ?>
                            
							
	<div id="table">
	<form name="form1" method="post" action="signupuser.php" onSubmit="return check();">
							
                <table>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" class="textfield required"/></td>
                    </tr>
					
					<tr>
                        <td>Email</td>
                        <td><input type="email" name="email" class="textfield required email"/></td>
                    </tr>
					
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="pass"  /></td>
                    </tr>
                    
                    <tr>
                        <td>Confirm </td>
                        <td><input type="password" name="cpass"  /></td>
                    </tr>
                    
                    <tr>
                        <td>Address</td>
                        <td><input type="text" name="address" class="textfield"/></td>
                    </tr>
                    
                    <tr>
                        <td colspan="2" align="right">
                            <input type="submit" value="Register" />
                        </td>
                    </tr>
                </table>
            </form>
	
     </div>      

</div>


<div id="footer"></div>
</body>
</html>