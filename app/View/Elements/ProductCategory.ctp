<div class="category-boxes clearfix">
    <?php 
            $product1 = array_slice($response->primaryProducts->products, 0, 12);
            foreach ($product1 as $productIndex => $productDetails) {
    ?>
    <a <?php echo $productDetails->anchorAttributes; ?> href="<?php echo $productDetails->clickUrl; ?>" class="cat-box">
        <div>
            <div class="cat-img" style="background-image: url('<?php echo $productDetails->imageUrls['big']['imageUrl']; ?>')"></div>
            <div class="cat-info">
                <p class="title"><?php echo $productDetails->title; ?></p>
                <p class="desc"><?php echo $productDetails->description; ?></p>
                <p class="price"><?php echo $productDetails->formattedPrice; ?></p>
            </div>
        </div>
    </a>
    <?php } ?>
</div>
<div class="show-results-wrpr clearfix ">
    <?php echo $this->element('PaginationSerp'); ?>
</div>




