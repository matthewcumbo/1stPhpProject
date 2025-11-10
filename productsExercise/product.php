
<div class="col-4 mb-3">
    <div class="card">
        <div style="height:400px;display:flex;overflow:hidden;">
            <img 
                src="<?php echo $product["image"]; ?>" 
                class="card-img-top" alt="<?php echo $product["name"]; ?>"
                style="object-fit:cover;">
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo $product["name"]; ?></h5>
            <p class="card-text"><?php echo $product["description"]; ?></p>
            <p><i>&euro;<?php echo $product["price"]; ?></i></p>
        </div>
    </div>
</div>