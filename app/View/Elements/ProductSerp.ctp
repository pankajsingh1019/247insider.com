
<ul class="product-cards">
    <?php
        foreach ($productsToDisplay->products as $productIndex => $productDetails) {
        if (strlen($productDetails->title) > 40) {
            $productDetails->title = substr($productDetails->title, 0, 100) . "...";
        }
        if (strlen($productDetails->description) > 80) {
            $productDetails->description = substr($productDetails->description, 0, 180) . "...";
        }
    ?>
    <li class="<?php echo $className; ?> card">
        <div class="card-img" style="background-image: url('<?php echo $productDetails->imageUrls['big']['imageUrl']; ?>')"></div>
        <div class="card-info">
            <a <?php echo $productDetails->anchorAttributes; ?> target="_blank" href="<?php echo $productDetails->clickUrl; ?>" class="title"><?php echo $productDetails->title; ?></a>
            <p class="desc"><?php echo $productDetails->description; ?></p>
            <a target="_blank" <?php echo $productDetails->anchorAttributes; ?> href="<?php echo $productDetails->clickUrl; ?>" class="price"><?php echo $productDetails->formattedPrice; ?></a>
        </div>
        <div class="card-arrow"></div>
    </li>
    <?php
        }
    ?>
</ul>

<div class="show-results-wrpr clearfix ">
    <?php echo $this->element('PaginationSerp'); ?>
 </div>

