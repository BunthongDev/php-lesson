<?php
$output = null;
$ids = [10, 22, 44, 234, 52 , 324];
$user = ['user3', 'user1', 'user2'];

$output = count($ids);

sort ($ids); // sorting array 
sort($user);
rsort($user);  // reverse sort
rsort($ids);

// array_push
// array_push($id, 20);
// array_push ($user, "New user");

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
            <h2 class="text-xl font-semibold my-4">IDs array</h2>
            </p>
                <pre>
                    <?php 
                        print_r($ids); 
                        print_r($user);
                    
                    ?>
                </pre>
        </div>
    </div>
</body>

</html>