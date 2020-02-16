<?php

$pagename="sultan";
$pagenme=2;
$paname="ahmad";
$choice="<ul>";
$choice.="<li>php</li>";
$choice.="<li>java</li>";
$choice.="</ul>";

?>

 
<html>
    <head>
        <link href="css.css" rel="stylesheet">
<title>
   <?php
   echo $pagename;
      ?>
</title>
    </head>
    <body>
        <?php
         echo $paname; 
		echo "<br>";
         echo $paname; 
		echo "<br>";
		 echo	$choice ;
           ?>
		
		 <?php
    define("M5","multiple of 5");
    define("MOTM5","not a multiple of 5 " , true);
		        echo "statr!"."<br>";

    $num1 =1;
    while($num1<15)
    {
        if ($num1<15)
        {
        echo $num1."is".M5."\n"."<br>";
    }
    elseif ($num1 % 2 !=0)
    {
        echo $num1."is".MOTM5."\n"."<br>";
    }
    $num1++;
    }

        echo "Finsh!";

        ?>
	</body>
</html>

