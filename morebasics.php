<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing = border-box;
        }
        .container{
            max-width: 80%;
            background-color:burlywood;
            margin: auto;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lets learn about PHP</h1>
        <br>
        <p>your party status is here: </p>
        <?php 
        echo"<br>";
        $age = 7;
        if($age >18){
            echo"you can go to party";
        }
        elseif($age==7){
            echo "you are 7 years old";
        }
        else{
           echo " you can not go to the party";
        }
        //Array  method :- count ,

        $languages = array("python ","c++","nodejs","c");
        echo $languages[3];
        echo count ($languages);

        // Loop in php
        $a=0;
        while($a<=10){
            echo"<br>the value of a is:";
            echo $a;
            $a++;
        }
        // Iteration of array
        $a=0;
        while($a < count($languages)){
            echo"<br>the value oflanguages is:";
            echo $languages[$a];
            $a++;
        }
        // DO WHILE LOOP 
        // atleast ek bar to condition satisfied hogi hi
        $a=0;
        do {
            echo"<br>the value oflanguages is:";
            echo $a;
            $a++;
        }
        // phir condition check hogi
        while($a <=10);

        //for loop 
        echo "FOR LOOP VALUES ";
        for($a =0; $a <10 ;$a++){
             echo"<br>the value oflanguages is:";
         echo $a;
         }
         echo"<br>";

        echo " FOREACH LOOP VALUES";
        foreach($languages as $value){
            echo "<br>The value is" ; 
            echo $value;
        }
        echo"<br>";

        // FUNCTION
        function print5(){
            echo "<br>FIVE";
        }
        print5();

        function print_number($number){
            echo "<br> your number is  : ";
           echo $number; 
        }
        print_number(45);
        print_number(45);
        print_number(44);
        print_number(75);
        ?>
    </div>
</body>
</html>