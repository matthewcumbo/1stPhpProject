<?php include 'header.php'; ?>

<div class="border border-dark m-3 p-3">
    <h1>Arrays</h1>

    <?php 
        // Arrays are collections that contain many types of values

        // There are 2 ways of defining arrays
        $numbers = array(7,100,90,-1,0,52);
        print_r($numbers);

        echo "<br>";

        $numbers2 = [7,100,90,-1,0,52];
        print_r($numbers2);

        // Arrays always start at position 0
        // We can access values in an array through their position
        $first = $numbers[0];
        echo "<p>First number in the array is {$first}.</p>";

        // Remember that the last index will be 1 less than the length
        $last = $numbers[5];
        echo "<p>Last number in the array is {$last}.</p>";

        // The count function returns the number of elements in an array
        $count = count($numbers);
        echo "<p>The array contains {$count} numbers.</p>";
    
        /*
            We can add a new element in an array by using empty square backets.
            We can also create a new array in this way.
        */
        $numbers3[] = 10;
        print_r($numbers3);

        echo "<br/>";

        /* 
            We can update the value of an element in the array by targeting its position
            If that position does not exist yet, it is automatically created
        */
        $numbers3[4] = 70;
        print_r($numbers3);

        echo "<br/>";

        $numbers3[] = 100;
        print_r($numbers3);
        echo "<br/>";

        $numbers[] = 10000;
        print_r($numbers);


        // Arrays have a internal pointer, which 'points' at a position within the array
        // It always starts at position 0
        // Next moves the pointer to the next position and returns its value
        $next = next($numbers);
        echo "<p>Next: {$next}</p>";
        $next = next($numbers);
        echo "<p>Next: {$next}</p>";

        // Prev moves the pointer to the previous position and returns its value
        $prev = prev($numbers);
        echo "<p>Previous: {$prev}</p>";
        $prev = prev($numbers);
        echo "<p>Previous: {$prev}</p>";

        // End moves the pointer to the last position and returns its value
        $last = end($numbers);
        echo "<p>Last value: {$last}</p>";
        
        // Reset moves the pointer to the first position and returns its value
        $first = reset($numbers);
        echo "<p>First value: {$first}</p>";


    ?>

</div>


<!-- 

Part 2: Stacking and Queueing
-> Home research
------------------------------
- array_push()
- array_pop()
- array_unshift()
- array_shift()
- array_merge()
- sort()
- rsort()
- array_slice()
- array_splice()

-->






<?php include 'footer.php'; ?>
