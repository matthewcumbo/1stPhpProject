<?php 
    include "header.php";
    include "functions.php"; 
?>


<div class="border border-dark m-3 p-3">
<h1>String Functions</h1>
<?php
    $fullName = "Matthew Cumbo";

    /* 
        The strlen function returns the length of a string. Here we are placing that result into a new variable.
    */
    $fullNameLength = strlen($fullName);
    /*
        The reuslt of a function can be concatenated within an echo statement, or other functions. 
    */ 
    echo "<p>My full name {$fullName} is made up of {$fullNameLength} character.</p>";

    /*
        The substr function extracts a SubString out of an existing string, starting at the position provided as a parameter, and the length of the substring is the final parameter provided
    */
    $firstName = substr($fullName, 0, 7);
    echo "<p>First Name: {$firstName}</p>";

    /*
        We can use the substr function without providing the final parameter means that it will extract content from the given position till the end of the string
    */
    $lastName = substr($fullName,8);
    echo "<p>Last Name: {$lastName}</p>";
?>
</div>

<div class="border border-dark m-3 p-3">
    <h1>Advanced Functions</h1>
    <?php 
        $shoppingList = "bread,milk,apples";
        /* 
            The explode function turns a string into an array, using a character within the string as a separator
        */
        $shoppingListArray = explode(",",$shoppingList);

        /*
            The prinr_r function simply outputs the array, including its values and positions 
        */
        print_r($shoppingListArray);

        /* 
            The implode functions builds a string out of an array, adding a separator between each value
        */
        $outputList = implode(", ",$shoppingListArray);
        echo "<p>{$outputList}</p>";
    ?>
</div>


<div class="border border-dark m-3 p-3">
    <h1>Advanced Functions</h1>
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







<?php include "footer.php" ?>