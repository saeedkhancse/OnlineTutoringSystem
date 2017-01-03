
<?php
$username = "root";
$password = "root1097";
?>

<?php
try
{
	if(isset($_REQUEST['lat']) && isset($_REQUEST['lng'])) {
		$lat = $_REQUEST['lat'];
		$lng = $_REQUEST['lng'];
		//~ $conn = new PDO('mysql:host=localhost;dbname=tuition', $username, $password);
		//~ $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//~ echo 'SELECT * FROM  cv WHERE latitude = ' . $conn->quote($lat) . ' AND longitude = ' . $conn->quote($lng);
		//~ //$data = $conn->query('SELECT * FROM  cv WHERE latitude = ' . $conn->quote($lat) . ' AND longitude = ' . $conn->quote($lng));
		//~ $stmt = $conn->prepare('SELECT * FROM  cv WHERE latitude = :lat AND longitude = :lng';
		//~ $stmt->bindParam(':lat', $lat);
		//~ $stmt->bindParam(':lng', $lng);
		//~ $result = $stmt->execute();
		//~ foreach($result as $row) {
		  //~ print_r($row);
		//~ } 
		//~ 
		echo '<table border="4">';
		//~ foreach($data as $value) {
			//~ echo '<td>'. $value . '</td>';
		//~ }
		//~ echo '<script>document.getElementById("footer").innerHTML = "DONE"</script>';
		
        include 'includes/db_con.php';
               
            $query = 'SELECT * FROM  cv WHERE latitude = ' . $lat . ' AND longitude = ' . $lng; //You don't need a ; like you do in SQL
			$result = mysql_query($query);
		 echo "<table style='width:40%;border-collapse:collapse;margin-left:240px;margin-top:6px;' border=4>";	
		echo '<tr><th>Name</th><th>Email</th><th>Mobile</th><th>Education</th><th>photo</th></tr>';
		while($row = mysql_fetch_assoc($result)){
		
		
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
		
		
		
		
		
			echo '<tr>';
			  echo "<tr>";
            	
                 echo'<td>'.$name.'</td>';
            	
			
				
				
				
				echo'<td>'.$email.'</td>';
				echo'<td>'.$mobile.'</td>';
				echo'<td>'.$edu.'</td>';
				echo"<td><img src=\"upload/{$photo}\" width=\"110\" height=\"110\"/></td>";
			echo '</tr>';
		}
		echo '</table>';

		
	} else {
		//~ echo '<script>document.getElementById("footer").innerHTML = "ERROR GET";</script>';
		echo "ERROR";
	}
} catch(PDOException $e) {
	echo 'ERROR: ' . $e->getMessage();
}
?>
