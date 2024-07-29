<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/

// message 
$message = null;
$word1 = "Hello";
$word2 = "Titi";

$message = $word1 .' ' .$word2;


// output number
$output1 = null ;
$output2 = null ;
$output3 = null ;
$output4 = null ;
$num1 = 20 ;
$num2 = 10;

// basic math
$output1 = "$num1 + $num2 = " . $num1 + $num2 ;
$output2 = "$num1 - $num2 = " . $num1 - $num2 ;
$output3 = "$num1 * $num2 = " . $num1 * $num2 ;
$output4 = "$num1 / $num2 = " . $num1 / $num2 ;

// build-in PHP Function 
// rand()



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
       <p class="text-xl">
        <?= $output1 ?> <br/>
        <?= $output2 ?> <br/>
        <?= $output3 ?> <br/>
        <?= $output4 ?> <br/>
        <?= $message ?>
       </p>
        
    </div>
    <h2 class="text-[30px] mt-[5px] text-green-600 font-bold">Concat String </h2>
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
       <p class="text-xl">

      <?= $message ?>
       </p>
        
    </div>
  </div>
</body>

</html>