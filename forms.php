
<!DOCTYPE html>
<html >
    <head>
        <link href="Csss.css" rel="stylesheet" >
    </head>
    <body>
        
        <?php
	  $servername ="localhost:3306";
      $username ="ippdf";
	  $password ="oraX@2030";
	  $dbname = "admin_ippdf";
	  //الاتصال بقاعدة البيانات 
      $conn = new mysqli($servername, $username, $password, $dbname);
      $col =$_POST["name1"];
      $Rest =$_POST["Phone"];

      ?>

        <div class="div1">
            <b>
                welcome to my website
            </b>
			<br><br><br><br>
        </div>
        <div class="form">
		<form action="forms.php" method="post">
			Name:<input type="text" name="name1">
			<br><br><br>
			 
            Phone:<input type="text" name="Phone">
 			<br><br><br><br>
			<input type="submit">
                </form>
            </div>

            <?php
    $sql ="INSERT INTO userdata (Name, Phone) VALUES ('$col' ,'$Rest')";
    mysqli_query($conn,$sql);

            ?>
    <?php

        $stmt = $conn->prepare("select * from userdata");
        $stmt->execute();
        $result =$stmt->get_result();

        echo "<table ";
        while($row = $result ->fetch_assoc()){
            
        echo "<tr><td>".$row['Name']."</td><td>".$row['Phone']."</td></tr>";

        }
        echo  "</table>"

     ?>

		<footer>
		goodbye
		</footer>

    </body>
</html>