<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial </title>
</head>
<body>

<p> Your party status is here</p>
    <?php
    $age=7;
    if($age>18){
        echo"You can go to party";
    }
    elseif($age==7){
        echo"you are seven year old";
    }
    else{
       echo "you cannot go the party";}

    //    Arrays in PHP
    echo "<br>";
    $languages = array("PYTHON","C","JAVA","javascript","kotlin");
    echo $languages[2];
    echo count($languages);

    // Loops in PHP
    $a=0;
    while ($a <= 10) {
        echo "<br>The value of a is ";
        echo $a;
        $a++;
    }
    // Iterating arrays in PHP USING while loops 
    $a=0;
    while($a<count($languages)) {
        echo "<br>The value of languages is ";
        echo $languages[$a];
        echo $a++;
        
    }
    
    // Do while loops in PHP 
    $a=20;
    do  {
        echo "<br>The value of a is ";
        echo $a;
        echo "<br>";
        echo $a++;

        
    }while($a<10);
    echo "<br>";

    // For loop in PHP
    $i=10;

    for ($i=0; $i <=10 ; $i++) {
        echo $i;
        echo"<br>";
        
        # code...
    }

    //  ForEach Loop in PHP
    foreach ($languages as $value) {
        echo "<br>The value  from foreach loop is ";
        echo $value;
    }

    function print5(){
        echo "five";
    }
    print5();
    
    
    ?>



</body>
</html>