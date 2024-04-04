<?php 
$product2 = array_slice($response->primaryProducts->products, 12, 8);
if(isset($product2) && !empty($product2)):
?>
<div class="category-below">
    <div class="container">
        <div class="heading">
            <p class="title">Best Deals</p>
            <p class="desc">The best tips from around the place from our partners and friends. Go around to find your
                perfect requirement</p>
        </div>
        <div class="category-below-boxes">
            <?php 
				    foreach ($product2 as $productIndex => $productDetails) {     
                ?>
            <a <?php echo $productDetails->anchorAttributes; ?> href="<?php echo $productDetails->clickUrl; ?>" class="category-below-box">
                <div class="category-below-boxer">
                    <div class="cat-blw-img"
                        style="background-image: url('<?php echo $productDetails->imageUrls['big']['imageUrl']; ?>')">
                    </div>
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
<?php endif;?>