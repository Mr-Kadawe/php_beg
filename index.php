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


        // php comments (//,  /* */ , #)
        
        // php Variable(All variables in PHP start with a $ sign symbol)
        echo  "<br>";
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

        // // concatenation operator (.) 

        $txt1 = "HTML, CSS, JavaScript";
        $txt2 = "And PHP Courses";
        
        echo  $txt1 . " " . $txt2;

        echo  "<br><BR>";
        $txt1 .= " ".$txt2;
        echo  $txt1;

        // 07/04/2023
        echo "<br>"; 

        echo "$num / $n  =". $num/$n;
            echo "<br>";
        echo $num / $n;

        // Date Function
        echo "<br>";
        $date = date('D');
        $month = date('F');
        $year = date('Y');
        // echo $date;
        // echo "/".$month;
        // echo "/".$year;

        echo " <br> DATE: ". $date .'/'.$month."/".$year;
        
        $d_m_y =  date('d/m/Y');
        echo "<br> Date: ".$d_m_y;

        echo "<br> Date And Time : " . date('d/m/Y h:i:s A');

        // conditional ststement

        echo "<h1> conditional ststement </h1>";
        $date  = date('D');
        if($date == 'fri'){
            echo "Nasiino Wacan Mudane";
        }
       
        // if($date ){
        //     echo  "<br> Find This Variable";
        // }
        
        if($date == 'Fri'){
            echo "<br> Nasiino Wacan Mudane/Marwo";
        }else{
            echo "<br>Not Found Result Please Check Your Code ";
        }

        // != IS Not Equal 
        if($date != 'Sat'){
            echo "<br> $date is Not Equal Sat";
        }else{
            echo  "<br> $date Is equal to Sat";
        }
        // <> IS Not Equal 

        if($date <> 'Sun'){
            echo "<br> $date Is not equal Sun";
        }else{
            echo "<br> $date Is Equal to Sun";
        }


        echo "<h2> Calculate AVerage</h2>";
        $avg = 95.1;

        if($avg > 100 && $avg < 0){
            echo  "Invalid Grade ";
        }elseif ($avg <= 100 && $avg > 95) {
           echo "Your Grade A+";
        }else if($avg <= 95 && $avg > 85){
            echo "Your Grade A-";
        }else  if($avg < 50){
            echo "Failed";        
        }else{
            echo "Not Found ";
        }













        
        // echo "<h1> Tijaabo</h1>";            
        // echo ("<h1> Tijaabo One</h1>");            


 ?>

</body>
</html>