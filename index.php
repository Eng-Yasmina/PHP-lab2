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
    $array = array(12, 45, 10, 25); 
    $sum = 0; 
    foreach ($array as $value) { $sum += $value; } 
    $avg = $sum / count($array);
    echo "Sum = " . $sum . "<br>"; 
    echo "Average = " . $avg . "<br>";
    rsort($array); // Sorts the array in reverse order 
    echo "Sorted Array: "; 
    foreach ($array as $value) { echo $value . " "; }
    ?>
  </div>

  <div>
    <?php 
    // ----------------------- TASK 5 -------------------
    $array = array("Sara" => 31, "John" => 41, "Walaa" => 39, "Ramy" => 40); 
    // Sort by value in ascending order
    asort($array); 
    echo "Sorted by value in ascending order: <br>"; 
    print_r($array); 
    echo "<br>"; 

    // Sort by key in ascending order
    ksort($array); 
    echo "Sorted by key in ascending order: <br>"; print_r($array);
    echo "<br>";

    // Sort by value in descending order 
    arsort($array); 
    echo "Sorted by value in descending order: <br>"; 
    print_r($array); 
    echo "<br>"; 
    
    // Sort by key in descending order 
    krsort($array); 
    echo "Sorted by key in descending order: <br>"; 
    print_r($array); 
    ?>
  </div>
</body>
</html>