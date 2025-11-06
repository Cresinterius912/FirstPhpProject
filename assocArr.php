<?php include 'header.php';?>

<div class="border border-dar m-3 p-3">
    <h1>Associative Array</h1>

    <?php

        $students = [
            "Interactive Media"=> 7,
            "Graphic Design" => 12,
            "Game Art" => 10,
        ];

        print_r($students);
        echo "<p> There are {$students['Interactive Media']} students in Interactive Media </p>";
        echo "<p> There are {$students['Graphic Design']} students in Graphic Design </p>";
        echo "<p> There are {$students['Game Art']} students in Game Art </p>";

        $students["Game Art"] = 20;
        print_r($students);

    ?>

</div>