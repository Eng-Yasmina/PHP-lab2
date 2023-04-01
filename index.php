<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div>
    <?php
    // ----------------------- TASK 1 -------------------
    $text = "This is \nYasmina"; 
    echo nl2br($text);
    // Another Way 
    echo "THis is <br> Yasmina";
    ?>
  </div>

  <div>
    <?php
    // ----------------------- TASK 2 -------------------
    echo "1. strrev(): This function returns a string in reverse order."
    $string = "Hello World";
    echo strrev($string);   //Output: dlroW olleH

    echo "<br> 2. substr(): This function returns a part of a string based on a specified starting position and length."
    $string2 = "Hello World";
    echo substr($string2, 0, 5); //Output: Hello

    echo "<br> 3. str_replace(): This function replaces all occurrences of a specified string with another string."
    $string3 = "Hello World";
    echo str_replace("World", "Universe", $string3); //Output: Hello Universe
    ?>
  </div>
    

  <div>
    <?php 
    // ----------------------- TASK 3 -------------------
    foreach ($_SERVER as $key => $value) { echo $key . ": " . $value . "<br>"; } 
    ?>
  </div>

  <div>
    <?php 
    // ----------------------- TASK 4 -------------------
    $arr1 = array(12, 45, 10, 25); 
    $sum = 0; 
    //Sum
    foreach ($arr1 as $value) { $sum += $value; } 
    //Average
    $avg = $sum / count($arr1);

    echo "Sum = " . $sum . "<br>"; 
    echo "Average = " . $avg . "<br>";

    // Sorts the array in reverse order 
    rsort($arr1); 
    echo "Sorted Array: "; 
    foreach ($arr1 as $value) { echo $value . " "; }
    ?>
  </div>

  <div>
    <?php 
    // ----------------------- TASK 5 -------------------
    $arr2 = array("Sara" => 31, "John" => 41, "Walaa" => 39, "Ramy" => 40); 
    // Sort by value in ascending order
    asort($arr2); 
    echo "Sorted by value in ascending order: <br>"; 
    print_r($arr2); 
    echo "<br>"; 

    // Sort by key in ascending order
    ksort($arr2); 
    echo "Sorted by key in ascending order: <br>"; 
    print_r($arr2);
    echo "<br>";

    // Sort by value in descending order 
    arsort($arr2); 
    echo "Sorted by value in descending order: <br>"; 
    print_r($arr2); 
    echo "<br>"; 
    
    // Sort by key in descending order 
    krsort($arr2); 
    echo "Sorted by key in descending order: <br>"; 
    print_r($arr2); 
    ?>
  </div>
</body>
</html>