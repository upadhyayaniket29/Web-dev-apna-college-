<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">

    This is my first php website

    <?php
      echo " hello world this is printed using  php ";

    //   secret algo 

     ?>
    </div>
    <?php
      echo " hello world again ";

    //   secret algo 

    $variable1=45;
    $variable2=4;
    // echo $variable1+$variable2;

    //Operators in PHP
    // Arithmetic operators
    // echo" <br>";
    // echo" The value of variable1 - variable2 is";
    
    // echo $variable1-$variable2;

    // echo" <br>";
    // echo" The value of variable1 / variable2 is";
    
    // echo $variable1/$variable2;

    // echo" <br>";
    // echo" The value of variable1 * variable2 is";
    
    // echo $variable1*$variable2;

    // echo" <br>";
    // echo" The value of variable1 + variable2 is";
    
    echo $variable1+$variable2;
    // Assignment operators 
     echo" <br>";
    $newvar=$variable1;
    $newvar *=2;
    
    echo"the value of newvar is";
    echo $newvar;
    // comparison operators
    // echo" <br>";
    // echo"the value of 1==4 is ";
    // echo var_dump(1==4);
    // echo" <br>";
    // echo"the value of 1>=4 is ";
    // echo var_dump(1>=4);
    // echo" <br>";
    // echo"the value of 1<=4 is ";
    // echo var_dump(1<=4);
    // echo" <br>";
    // echo"the value of 1!=4 is ";
    // echo var_dump(1!=4);
    // Logical operators
echo " <br>";
    // $myvar=(false) && (false);
    // $myvar=(false || true);
    // $myvar=(!true);
    // $myvar=(true xor false);
    $myvar=(true xor true);
    echo var_dump ($myvar);
    // Increment/decrement operators
    echo" <br>";
    // $variable1++;
    // $variable2--;
    // --$variable1;
    // ++$variable2;

    // echo $variable1;
    // echo "<br>";
    // echo $variable2;



     ?>

     <?php

     define('pi',3.14);
    //  Data Types in PHP
    // 1.String
    // 2.Integer
    // 3.Float 
    // 4.Boolean
    // 5.Array
    // 6.Object
    echo" <br> data types <br>";

    $var3="This is a string";
    echo var_dump ($var3);
    echo" <br>";
    $var4=67;
    $var5=67.12;
    echo var_dump ($var4);
    echo" <br>";
    echo var_dump ($var5);
    echo" <br>";
    echo pi;


?>
    </div>
    
</body>
</html>