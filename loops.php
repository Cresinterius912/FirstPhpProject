<?php include 'header.php';?>

<div class="border border-dar m-3 p-3">
    <h1>Loops</h1>

    <?php

        for($i = 0; $i <10; $i++){
            $temp = $i+1;
            echo "<p>{$temp}hello</p>";
        }

        for($i = 1; $i <11; $i++){
            echo "<p>{$i}hello</p>";
        }

        for($i = 1; $i <=10; $i++){
            echo "<p>{$i}hello</p>";
        }

        //Loops are useful for iterating over an array using the loop index
        echo"<h3>Looping over an array</h3>";
        $members = ["John","Mary","Steve","Angela"];
        for($i=0;$i<10;$i++){
            echo "<p>{$members[$i]}</p>";
        }


        //We can use the array count as the limiter for the loop
        for($i=0;$i<count($members);$i++){
            echo "<p>{$members[$i]}</p>";
        }

        //Foreach loop
        echo "<h3>Foreach Loop</h3>";
        foreach($members as $member){
            echo "<p>{$member}</p>";
        }


        $heroes = [
            "Tony Stark" => "Iron Man",
            "Bruce Wayne" => "Batman",
            "Kara Danvers" => "Supergirl"
        ];

        //
        echo "<h3>Foreach over Associative Array</h3>";
        foreach($heroes as $name=>$hero){
            echo "<p>{$name} is {$hero}!</p>";
        }

        
        //While Loops (research how while loops are built and build it)

    ?>

    </div>

    <?php include 'footer.php';?>