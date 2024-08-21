<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo"This is" ;echo  "{+title" ;?></title>
</head>
<body>
    <?php
    define('PI' ,'3,14');
echo"Hello World";
echo"<br>";
echo " 2321";
echo"<br>";
echo" THIS is a me ";
echo"<br>";
echo 5+98;
//Secret Algorihthm 
/*  
this is a 
multiline comments
*/
echo"<br>";
echo "hello again";
// Variable  /
// php is not a case sensitive language
$variable1 = 34;
$variable2=45;
echo $variable1;
echo"<br>";
echo $variable2;
echo $variable1 + $variable1;


 // Operators 
//  Arithmetic Operators.

echo "The value of variable 1 + variable 2";
echo"<br>";
echo $variable1 + $variable1;
echo"<br>";

echo "The value of variable 1 -variable 2";
echo"<br>";
echo $variable1 - $variable1;
echo"<br>";

echo "The value of variable 1 * variable 2";
echo"<br>";
echo $variable1 * $variable1;
echo"<br>";

echo "The value of variable 1 / variable 2";
echo"<br>";
echo $variable1 / $variable1;
echo"<br>";

//  Assignment  Operators.

$newVar = $variable1;
$newVar += 1;
// $newVar -= 1;
// $newVar *= 1;
// $newVar /= 1;
echo " the value of new variable is = ";
echo $newVar;
echo"<br>";


//  comparision Operators 

// echo"<h1> Comparison Operators <h1>";

echo "The value of 1==4 is ";
echo var_dump(1==4);
echo"<br>";

echo "The value of 1!=4 is ";
echo var_dump(1!=4);
echo"<br>";

echo "The value of 1>=4 is ";
echo var_dump(1>=4);
echo"<br>";

echo "The value of 1<=4 is ";
echo var_dump(1<=4);
echo"<br>";

//  Increment / Decrement Operators

// echo $variable1++;
// echo"<br>";
// echo $variable1;

// echo $variable1--;
// echo"<br>";
// echo $variable1;

// echo ++$variable1;
// echo"<br>";
// echo $variable1;

echo --$variable1;
echo"<br>";
echo $variable1;

//  Logical Operators 
// boolean retuen
// and (&&)
// or  (||)
// xor (^)
// not (!)
echo"<br>";
// $a = (true) and (true);
// $a = (true and false);
$a = (true xor false);
echo var_dump($a);


?>

<?php 

// Data types 
//    string
//    integer 
//    float
//    boolean 
//    array
//    object
echo"<br> Data Types <br>";
$var = "this is a string";
echo"<br>";
echo var_dump($var);
echo"<br>";
$var = 67;
echo"<br>";
echo var_dump($var);
echo"<br>";
$var = 67.3;
echo"<br>";
echo var_dump($var);
echo"<br>";
$var = true;
echo"<br>";
echo var_dump($var);
echo"<br>";
echo PI;
?>
</body>
</html>