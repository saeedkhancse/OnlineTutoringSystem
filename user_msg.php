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
        
           
                                 if (isset($found)) {
                                    echo "Invalid Username or Password";
                                }

        
		
     ?>  	             

<div id="table">
 
<form name="form1"   method="post" action="user_msg_all.php" onSubmit="return check();">
                <table>
				
				 <tr>
                        <td width="156"><h4>Email:</h4></td>
                        <td width="400"><input type="text" name="email"  class="textfield required email"/></td>
                    </tr>
					<br/>
                    
					<tr>
                        <td><h4>Message:</h4></td>
                        <td><textarea name="msg" cols="30" rows="3"></textarea></td>
                    </tr><br/>
					
                    <tr>
                        <td colspan="2" align="right">
                            <input type="submit" value="submit" />
                        </td>
                    </tr>
                </table>'
            </form>




</div>
</div>
<div id="footer"></div>

</body>

</html>





























