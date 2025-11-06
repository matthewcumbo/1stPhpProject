<?php include 'header.php'; ?>

<div class="border border-dark m-3 p-3">
    <h1>Associative Arrays</h1>

    <?php 
        /* 
            Associative Arrays are collections that use Key=>Value Pairs.
            Custom Data Types can be used for keys.
            The item inside the array will preserve their order.
        */

        $students = [
            "Interactive Media" => 7,
            "Graphic Design" => 12,
            "Game Art" => 10
        ];

        print_r($students);

        echo "<p>There are {$students['Interactive Media']} students in Interactive Media.</p>";
        echo "<p>There are {$students['Graphic Design']} students in Graphic Design.</p>";
        echo "<p>There are {$students['Game Art']} students in Game Art.</p>";

        $students["Game Art"] = 20;
        print_r($students);

        /* 
            Home Research/Practice:
                array_key_exists()
                array_keys()
                array_values()
        */
    ?>

</div>

<?php include 'footer.php';?>