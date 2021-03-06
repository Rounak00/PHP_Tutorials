<!-- Loops
Loops are used to execute the same block of code until a certain condition is met. Loop is to automate the repetitive tasks within a program to save time and effort. PHP supports four different types of loops.

While:-  the block of code is executed until the condition is true.
do…while:- the block of code executed once and then the condition is evaluated. If the condition is true, the statement is repeated as long as the condition is true.
For:- the block of code is executed until the condition is true.
Foreach:- loops through a block of code for each element in an array. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
</head>
<body>
    <div class="container">
      <?php
            $languages=array(10,20,3,045,87,9);
       $a = 0;
 
     
    while ($a <= 10) {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    }

    // Iterating arrays in PHP using while loop
    $a = 0;
    while ($a < count($languages)) {
        echo "<br>The value of language is: ";
        echo $languages[$a];
        $a++;
    }

    // Do while loop
    $a = 200;
    do {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    } while ($a < 10);

    // For loop
    for ($a=60; $a < 10; $a++) { 
        echo "<br>The value of a from the for loop is: ";
        echo $a;
    }

    foreach ($languages as $value) {
        echo "<br>The value from foreach loop is ";
        echo $value;
    }
      ?>
    </div>
</body>
</html>

<!-- 
for associative array->
 $student= array("Maths"=>56, "Physics"=>70,  
                  "Chemistry"=>94, "English"=>83,  
                  "Computer"=>58);

/* Loop through array using foreach */

echo "Looping using foreach: \n"; 
foreach ($student as $subject => $marks){ 
    echo "Student got ".$marks." in ".$subject."\n"; 
}



for Multidimentional array->
$multiDim = array(array(2,5,7,8),
                  array(1,2,3,1),
                  array(4,5,0,1));


// echo var_dump($multiDim);
// echo $multiDim[1][2];

// Printing the contents of a 2 dimensional array

// for ($i=0; $i < count($multiDim); $i++) { 
//     echo var_dump($multiDim[$i]);
//     echo "<br>";
// }

for ($i=0; $i < count($multiDim); $i++) { 
    for ($j=0; $j < count($multiDim[$i]); $j++) { 
        echo $multiDim[$i][$j];
        echo " ";
    }
    echo "<br>";
}

-->
