<html>
    <head>
        <link href="css.css" rel="stylesheet" >

    </head>

    <body>


    <?php
    define("M5","multiple of 5");
    define("MOTM5","not a multiple of 5 " , true);
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

        echo "Hello sultan!";

        ?>
    </body>
</html>