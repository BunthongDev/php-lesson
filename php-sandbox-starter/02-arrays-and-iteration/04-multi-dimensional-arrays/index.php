<?php
$output = null;

$fruit = [
  ['Apple', 'Red'],
  ['Orange','Orange color', 'Green'],
  ['Banana', 'Yellow']
];


$output = $fruit[1][2]; // output the row and col of array

$fruit[] = ['Grape', 'Purple']; 

$users = [
  [
    "name" => "John",
    "email"=> "jonh@gmail.com",
    "password"=> "123456",
    "hobbies"=> ['Game', 'Coding', 'Movie']
  ],
  [
    "name" => "Juu",
    "email"=> "juu@gmail.com",
    "password"=> "123456",
    "hobbies"=> ['Game', 'Coding', 'Movie']
  ],
  [
    "name" => "Coco",
    "email"=> "Coco@gmail.com",
    "password"=> "123456",
    "hobbies"=> ['Game', 'Coding', 'Movie']
  ],
  [
    "name" => "Kipdy",
    "email"=> "Kipdy@gmail.com",
    "password"=> "123456",
    "hobbies"=> ['Game', 'Coding', 'Movie']
  ], 
]



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
      <p class="text-xl"><?= $output ?></p>
      <p>
        <pre>
          <?php 
          
            print_r($users);
          ?>
          
        </pre>
        
        
      </p>
    </div>
  </div>
</body>

</html>