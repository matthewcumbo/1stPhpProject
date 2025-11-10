<?php 
    include "../header.php"; 
    require_once "products.php";
?>

<div class="container">
    <h2 class="my-3">Current Products</h2>
    <div class="row align-items-start">
        <?php 
            foreach($products as $product){
                include "product.php";
            }
        ?>
    </div>
</div>




<?php include "../footer.php"; ?>