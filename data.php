<html>
  <head>
    <title>Untitled</title>
  </head>
  <body>
	  <?php
	  $servername ="localhost:3306";
      $username ="cwt";
	  $password ="cwtT@2030";
	  $dbname = "admin_cwt";
	  //الاتصال بقاعدة البيانات 
	  $conn = new mysqli($servername, $username, $password, $dbname);
	  $stmt = $conn->prepare("select * from userdata");
		$stmt->execute();
		$result =$stmt->get_result();
	  
	echo "<table>";
	while($row = $result ->fetch_assoc()){
    echo "<tr><td>".$row['Name']."</td><td>".$row['Color']."</td></tr>";

}
	   echo  "</table>"

	  ?>
 
 
 
 
	  
  </body>
</html>