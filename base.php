<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Course</title>
</head>

<body style="background-color: #004; color:white">
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
        // < > IS Not Equal 

        if($date <> 'Sun'){
            echo "<br> $date Is not equal Sun";
        }else{
            echo "<br> $date Is Equal to Sun";
        }


        echo "<h2> Calculate AVerage</h2>";
        $avg = 95.1;

        if($avg > 100 && $avg < 0){
            echo  "Invalid Grade ";
        }else if ($avg <= 100 && $avg > 95) {
           echo "Your Grade A+";
        }else if($avg <= 95 && $avg > 85){
            echo "Your Grade A-";
        }else if($avg < 50){
            echo "Failed";        
        }else{
            echo "Not Found ";
        }


        // 13/04/2023

        // conditional Statement Switch
        echo "<br><br> ---- Switch <br>";
        $x = 1;

        switch($x)
        {
            case 1:
                echo  " case one  Value $x";
                break;
            case 2:
                echo "case two  Value $x";
                break;
            case 3:
                echo "case three  Value $x";
                break;
            default:
                echo "Not Found data";
                break;
              
            }
            
            // Php Array(Numeric array , Associative array  . Multidimensional array )
            
            
            echo "<br> <br> ---Arrays <br>";

        echo " <br> --- Numeric array ---- <br>";

        $cars = array("Saab","Volvo","BMW","TOYOTA", 654);
        // echo $cars;     //return error Array to Convertion string Not work
        var_dump($cars);     // return Correct Result ( More Description )

        
        echo"<br>".$cars[0];
        echo "<br>";
        var_dump($cars[1]);

        $cars = ['Saab','Volvo','BMW','TOYOTA',"Mercedes"];

        echo "<br> <br>--- <br>";
        var_dump($cars);
        echo "<br>";

        echo $cars[2] . " and " . $cars[3] . " From America" ;
        
        echo"<br><br>", $cars[4].",".$cars[0]." and ".$cars[1]." are Swedish cars";

        echo " <br> <br> --- Associative array ---- <br>";

        
        // $ages = array();

        $ages = ["Mohamed"=>23, "Farah"=>34, "Abdulle"=> 33];
        var_dump($ages);

        echo "<br>";
        
        // echo $ages[0];   // return Undefined array key 0 ( Beacuse Use Associative array Not Use Numeric array)
        
        echo  $ages['Mohamed']; // return age 

        echo "<br> Mohamed is ". $ages['Mohamed'] . " Years old.";



    // 14/04/2023


    // Multidimentional Array ( One Dimentional Array , Two  Dimentional Array and Three Dimentional Array);

    echo "<br> <br> One Dimentional Array <br>";
    $cars = ['MERCEDES','TOTYOTA','VOLVO'];
    // echo  $cars;
    echo $cars[0] ,",". $cars[1] . " and ". $cars[2];


     echo "<br> <br> Two Dimentional Array <br>";


     $names = array(array('Ali',"Abdullahi", 'Mahad','Abdulle', "Guutaale") );

    //  echo $names[0];
   
    //  var_dump($names);

    echo $names[0][0];
    echo "<br>".$names[0][1];
    echo "<br>". $names[0][2];

      echo "<br>";


      $names = [
        [
            "Farah",
            "Mohamed",
            "Xaliima",
            "Ibraahim",
        
        ],

        [
            "Seynab",
            'Umu Kaltuum',
            "Faaduma",
            "Abdullahi"
        ]
        ];


        echo "<br>". $names[0][3];
        echo "<br>". $names[1][0];
        echo "<br>". $names[1][3];


        echo "<br> <br> Three Dimentional Array <br> ";

        $names = array(
                array(
                    array(
                        "Abdiyo",
                        "Farhiyo",
                        "Xaliima",
                        "Sacdia",
                        675,
                    ),
                    array(

                    )
                )
            );

        // var_dump($names);

        echo  $names[0][0][0];
        echo "<br>". $names[0][0][1];
        echo "<br>". $names[0][0][2];
        echo "<br>". $names[0][0][3];
        echo "<br>". $names[0][0][4];


        echo "<br> .............. <br>";
        
        $names = array(
            array(
                array(
                    "Ali",
                    "Mahad",
                    "Abdullahi"
                ),
                array(
                    "Faadumo",
                    'Xaliima',
                    "Ikraan",
                ),
            ),

            array(
                array(
                    "MARYAMO",
                    "JAMIILO",
                    'XAMDI'
                ),
                array(
                    "ABDIRAHMAAN",
                    "LIIBAN",
                    'BASHIIR'
                ),
            ),
        );

        ECHO "<br>". $names[0][0][0];
        ECHO "<br>". $names[0][0][1];
        ECHO "<br>". $names[0][0][2];
        echo "<br>". $names[0][1][2];

        echo "<br> ........... <br> ";

        echo "<br>". $names[1][0][1];

        echo "<br>". $names[1][1][0];
        echo "<br>". $names[1][1][1];
        echo "<br>". $names[1][1][2];


        //4/27/2023
        echo  "Array Functions ";
        $colors = array('Blue','Red','Green','Yellow');

        echo "<br>";
        print_r($colors);
        echo "<br><br> array_pop<br>";
        print_r(array_pop($colors));

        echo "<br><br>";
        print_r($colors);

        echo "<br><br>array_push<br>";

        print_r(array_push($colors,"White","Black"));

        echo "<br><br>";
        print_r($colors);


        echo  "<br><br>array_shift<br>";
        print_r(array_shift($colors));
        
        echo  "<br><br> array_unshift <br>";

        print_r(array_unshift($colors,"Yellow","Purple"));


        echo "<br><br>";
        print_r($colors);

        $cars = ['Toyota','Mercedes','BMW','Volvo','V8',"Bajaaj"];
        echo "<br><br> array_replace <br>";

        print_r(array_replace($colors,$cars));

        echo "<br><br>";
        print_r($colors);


        echo "<br><br> array_reverse <br>";

        print_r(array_reverse($colors));



        echo "<br><br> sort () <br> ";

        print_r(sort($colors));
        echo "<br><br>";
        print_r($colors);

        echo "<br><br> usort () <br> ";

        // print_r(usort($colors,"sort"));
        // echo "<br><br>";
        // print_r($colors);

        echo "<br><br> array_slice <br>";
        print_r(array_slice($colors,4));

        echo "<br><br> array_splice <br>";
        print_r(array_splice($colors,0,3,"Cyan"));

        echo "<br><br>";
        print_r($colors);

        echo "<br><br>";
        print_r("Sizeof () :".sizeof($colors));

        echo "<br><br>";
        print_r("Count () : ".count($colors));

         echo "<br><br>";
        $a = array(23,17,33);
        print_r(" Array_sum() : ".array_sum($a));



        // 04/28/2023 Loops

        // while loop

        echo  "<br><br> While Loop <br>";
        $i = 1;
        while ($i <= 10) {
           echo "<br> Number is ".$i; //this way good "------ ".$i
           $i++;
        }

        echo  "<br><br> Do-while Loop <br>";
        $i = 1;
        do{
            echo "<br> Number is $i"; // this way normal "..... $i"
            $i++;
        }while($i <= 15);

        // .... 
        echo  "<br><br> Do-while Loop <br>";
        $i = 1;
        do{
            $i++;
            echo "<br> Number is $i"; // this way normal "..... $i"
        }while($i <= 15);



        // For Loop

        echo  "<br><br> For Loop <br>";

        for($i = 0; $i <= 20 ;  $i++){
            echo "<br> Number is ".$i;
        }

        echo  "<br><br> For Loop ( Array ) <br>";

        $names = ['Abdullahi','Ali','Mahad','Sahal','Farah','Geedi','Raage','Warsame'];
        for($i = 0; $i < count($names); $i++){
            echo  "<br> Array of Names is : [$i] ".$names[$i];
        }


        echo  "<br><br> ForEach <br>";

        foreach ($names as $key => $value) {
           echo "<br> Array Names is : [$key] ".$value;
        }


        // PHP Functions
        echo  "<br><br> Php Functions <br>";
        function writeName(){
            echo "Abdi Ali Farah";
        }
       
        echo "<br> My Name Is : ";
        writeName();


        echo "<br><br>";

        function familyNames($fname)
        {
            echo $fname .' Abdulle';
        }

        echo "My name is: ";
        familyNames("Farhaan");
        echo "<br> My sister is : ";
        familyNames('Xamdi');

        echo "<br> My brother is : ";
        familyNames("Abdirahmaan");


        echo "<br><br>";

        function namesFamily($fname, $punctuation)
        {
            echo $fname .' Farah ' . $punctuation;
        }
 
        echo  "My name is : ";
        namesFamily('Daahir','.');

        echo  "<br> My sister is :";
        namesFamily("Xaawa",'!');

        echo  "<br> My brother is : ";
        namesFamily("Abdulle","?");


        echo "<br><br> usort() <br>";

        function  unsort($a){
            return $a;
        }

        $arr = [33,4,6,5,7];
        usort($arr,'unsort');

        foreach($arr as $key=>$value)
        {
            echo  '<br>['. $key .'] ' .$value;
        }

        // echo "<h1> Tijaabo</h1>";            
        // echo ("<h1> Tijaabo One</h1>");            


 ?>

 

 
</body>

</html>