
<?php 
/*
    The include statement can be used to include the contents of 
    other files, called templates or partial pages.
    This can be used to split up our pages into templates
    to make development of the web application more efficient.
*/
include "header.php"; ?> 

<h1>Hello World</h1>
    <!-- 
        the <?php ?> tags can be used to include PHP 
        code into our HTML
    -->

    <?php 
        // The echo statement is used to create output into the page
        echo "<p>Hello from PHP!</p>";
        echo "<p>Second output</p>";

        /* 
            Variables are created similar to JS, but they always start with a $
            They are dynamic; i.e. their type inferred by the given value.
            */
        $name = "Joe";
        $surname = "Borg";

        /* 
            The below is an example of concatenation, where we can join multiple strings together.
            We can use the echo statement to output the value of a variable
        */
        echo "<h2>".$name." ".$surname."</h2>";

        $age = 101;
        echo "<p>Damn you old... ".$age." years old.</p>";
    ?>


<?php include "footer.php"; ?>