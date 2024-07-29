<?php
$output = null;
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
                <?php
                    print('This is Date') . "<br/>";

                    echo $output . "<br/> ";
                    echo "Today is " . date("Y/m/d") . "<br>";
                    echo "Today is " . date("Y.m.d") . "<br>";
                    echo "Today is " . date("Y-m-d") . "<br>";
                    echo "Today is " . date("l") . "<br/>";
                ?>
                <?php
                    print("Time") . "<br/>" . date("h:i:sa") . "<br/>";
                    $khmer_time = mktime(11, 14, 54, 8, 12, 2014);
                    print("". $khmer_time ."");
                    $cur_time = strtotime("10:30pm April 15 2014");
                    print("". $cur_time .""). "<br/>";
                    $output = date ("Y-m-d h:i:s a");
                    print("$output");
                ?>
            </p>
        </div>
    </div>
</body>

</html>