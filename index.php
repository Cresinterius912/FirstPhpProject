<?php include "nav.php"; ?>

    <h1>Hello People</h1>
        <?php
            // The echo function is used to create output into the page
            echo "<p>Hello from PHP</p>";
            echo "<p>Second Output</p>";

            // Variables are created similar to JS, but they always start with a $
            $name = "Joe";
            $surname = "Borg";

            //This is how to join multiple string togheter

            echo "<h2>".$name." ".$surname."</h2>";

            $age = 101;
            echo "<p>Damn You are a Dinosaur..".$age."years old.</p>";
            
        ?>

<?php include "footer.php"; ?>
