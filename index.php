<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Course</title>
</head>
<body>
    <h1>Welcome Php Courses </h1>
    <?php 
        echo  "Hello, world";

        echo  "<p> <b> Hello Word </b>, Welcome php script</p>";

        echo " <h1>Welcome Php Courses </h1> ";
        
        echo " <hr>";

        echo "Hello";
        print "<br>";
        echo "<b>I'm Here ...</b>";


        // php comments (// /* */ )
        
        // php Variable(All variables in PHP start with a $ sign symbol)
        echo  "<br>";
        $txt = "Hello World";
        // echo  ($txt);
        echo $txt;

        echo "<br>";

        $num = 102;
        echo $num;

        echo "<br>";

        $n = 19.5;
        echo  $n;
        echo "<br>";

        var_dump($txt);

        echo  "<br>";

        var_dump($num);

        echo "<br>";
        var_dump($n);

        echo "<hr>";

        // concatenation operator (.) 

        $txt1 = "HTML, CSS, JavaScript";
        $txt2 = " And PHP Courses";
        
        echo  $txt1 . $txt2;

        echo  "<br><BR>";
        $txt1 .= $txt2;
        echo  $txt1;



            


    ?>
</body>
</html>