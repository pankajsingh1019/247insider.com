

<div class="related-products">
    <div class="container">
        <div class="heading">
            <p class="title">Best Deals</p>
            <p class="desc">The best tips from around the place from our partners and friends. Go around to find your perfect requirement</p>
        </div>
        <div class="related-products-boxes">
              <?php foreach ($response->relatedProducts as $productIndex => $productDetails) { ?>
                <a <?php echo $productDetails->anchorAttributes; ?> href="<?php echo $productDetails->clickUrl; ?>" class="related-products-box">
                    <div class="related-products-boxer">
                        <div class="cat-blw-img"  style="background-image: url('<?php echo $productDetails->imageUrls['big']['imageUrl']; ?>')"></div>
                        <div class="cat-blw-info">
                            <p class="title"><?php echo $productDetails->title; ?></p>
                            <p class="desc"><?php echo $productDetails->description; ?></p>
                            <p class="price"><?php echo $productDetails->formattedPrice; ?></p>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</div>
