<?php include 'header.php'; ?>

<div class="border border-dark m-3 p-3">
    <h1>Associative Arrays</h1>

    <?php 
        /*
            For Loops can be used to execute the same piece of code 
            for a predefined number of times.
        */
        echo "<h3>Simple For Loops</h3>";
        for($i = 0; $i <10; $i++){
            $temp = $i+1;
            echo "<p>{$temp} hello</p>";
        }

        for($i = 1; $i <11; $i++){
            echo "<p>{$i} hello</p>";
        }

        for($i = 1; $i <=10; $i++){
            echo "<p>{$i} hello</p>";
        }

        // Loops are useful for iterating over an array using the loop index
        echo "<h3>Looping over an array</h3>";
        $members = ["John","Mary","Steve","Angela"];
        for($i=0;$i<10;$i++){
            echo "<p>{$members[$i]}</p>";
        }

        // We can use the array count as the limiter for the loop
        for($i=0;$i<count($members);$i++){
            echo "<p>{$members[$i]}</p>";
        }

        // Foreach loop iterates through an array, irrespective of size of array
        echo "<h3>Foreach Loop</h3>";
        foreach($members as $member){
            echo "<p>{$member}</p>";
        }

        $heroes = [
            "Tony Stark" => "Iron Man",
            "Bruce Banner" => "The Hulk",
            "Steve Rogers" => "Captain America"
        ];

        echo "<h3>Foreach over Associative Arrays</h3>";

        // Loops can also use Key=>Value Pairs of an Associative Array
        foreach($heroes as $name=>$hero){
            echo "<p>{$name} is {$hero}!</p>";
        }


        /* 
            Home Research/Practice:
                While Loops
                Note: Make sure to avoid Endless Loops!
        */


    ?>

</div>

<?php include 'footer.php'; ?>