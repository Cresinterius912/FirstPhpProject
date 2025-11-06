<?php include "header.php"?>

<div class = "border border-dark m-3 p-3">
    <h1>String Functions</h1>

    <?php
        $fullName = "Shania Galea";

        //strlen = string length
        $fullNameLength = strlen($fullName);
        echo "<p>My full name {$fullName} is made up of 
        {$fullNameLength} characters.</p>";

        //substr = sub string, 0 = a, 6 the number of letters of the first name
        $firstName = substr($fullName,0,6);
        echo"<p>First Name: {$firstName}</p>";

        // a space is a character so we put 8 because the last name start on character 7. numbers start from 0 not 1
        $lastName = substr ($fullName,7);
        echo "<p>Last Name: {$lastName}</p>";

    ?>
</div>


<div class = "border border-dark m-3 p-3">
    <h1>Advanced Functions</h1>

        <?php
            $shoppingList = "braed,milk,apples";
            $shoppingListArray = explode(",",$shoppingList);

            //print_r = print array
            print_r($shoppingListArray);

            $outputList = implode(",",$shoppingListArray);
            echo "<p>{$outputList}</p>";
        ?>
</div>


<div class="border border-dark m-3 p-3">
    <h1>Custom Functions</h1>
    <?php 
        /*
        This is how we call functions. Any function that is inside the current page or included files are available to be used
        */
        shout(); 
        shout(); 
        shout(); 
        shout(); 
        shout(); 
        shout(); 

        /*
        If a function requires parameters (some value) to function, we pass them like this 
        */
        full_name("Matthew", "Cumbo");
        full_name("Joe", "Borg");
        full_name_custom("Jane","Doe","p");
        full_name_custom("Harry","Potter","h3");
        full_name_custom2("Gandalf","the Grey","h1","text-danger");


        $sum = add(1,2);
        $sum = add($sum,10);
        echo "<p>The total is {$sum}.</p>";

    ?>
</div>


<?php include "footer.php"?>