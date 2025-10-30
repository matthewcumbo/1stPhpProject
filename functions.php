<?php 
    /*
        Functions are reusable code blocks that can be called from any point in a page
    */ 
    function shout(){
        echo "<p>Let it all out!</p>";
    }

    /* 
        This function expects multiple parameters and uses them in its output
    */
    function full_name($firstName, $lastName){
        echo "<p>{$firstName} {$lastName}</p>";
    }

    function full_name_custom($firstName, $lastName, $element){
        echo "<{$element}>{$firstName} {$lastName}</{$element}>";
    }

    function full_name_custom2($firstName, $lastName, $element, $classes){
        echo "<{$element} class='{$classes}'>{$firstName} {$lastName}</{$element}>";
    }

    /*
        This function does not output anything. Instead, it returns a value back to where it was called from. That value can then be used for other things.
    */
    function add($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;
    }



?>