<?php include 'header.php'; ?>

<div class="border border-dark m-3 p-3">
    <h1>Conditional Statments</h1>
    <?php 
        // IF Condition
        // The code block in the condition will only work if the condition is met
        $awake = false;
        if($awake === true){
            echo "<p>I am awake</p>";
        }

        // IF..ELSE Condition
        // Here we have two options, only one of them will ever be executed
        $num1 = 40;
        $num2 = 30;
        if($num1 > $num2){
            echo "<p>{$num1} is bigger than {$num2}</p>";
            echo "<p>{$num2} is smaller than {$num1}</p>";
        }
        else{
            echo "<p>{$num1} is smaller than {$num2}</p>";
            echo "<p>{$num2} is bigger than {$num1}</p>";
        }

        // Logical Operators
        /*
            We can have multiple checks within the same conditional statement by 
            joining them with logical operators.
            && = AND
            || = OR
        */
        $num3 = 100;
        if($num1 > $num2 && $num1 > $num3){
            echo "<p>{$num1} is the biggest number</p>";
        }
        if($num1 > $num2 || $num1 > $num3){
            echo "<p>{$num1} is not the smallest</p>";
        }

        // If...ElseIf...Else Condition
        /* 
            We can have more than just 2 options with this example. 
            At least one of the options will be executed, 
            since we have an Else at the end, just like the previous example.
        */
        echo date("H:i:s");
        $time = date("H");
        if($time < "10"){
            echo "<p>Good Morning</p>";
        }
        elseif($time == "12"){
            echo "<p>It's Hiiiigh Noooon...</p>";
        }
        elseif($time < "20"){
            echo "<p>Good Afternoon</p>";
        }
        else{
            echo "<p>Good Evening</p>";
        }

        // Switch Statement
        /* 
            The Switch Statement is more specific and more efficient, 
            but works similarly to the If...ElseIf...Else Condition
        */
        $favCol = "orange";
        switch($favCol){
            case "red":
                echo "You are passionate.";
                break;
            case "blue":
                echo "You are cool.";
                break;
            case "green":
                echo "You are relaxed.";
                break;
            case "purple":
                echo "You are creative.";
                break;
            default:
                echo "Your colour is not in our list.";
                break;
        }



        // The following 2 examples are the same
        if($awake === true){ 
            // do something 
        }
        if ($awake){
            // do something
        }

        // The following 2 examples are the same
        if($awake !== true){ 
            // do something 
        }
        if (!$awake){
            // do something
        }



    ?>
</div>

<?php include 'footer.php'; ?>