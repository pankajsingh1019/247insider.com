<?php
        if ($response->showMainProduct) {
        // echo "<pre>";
        // print_r($response->mainProduct);
        // echo "</pre>";
        if (!is_null($response->mainProduct->condition)) {
            $condition = $response->mainProduct->condition;
        } else {
        $condition = 'NA';
        } 
        if (!is_null($response->mainProduct->merchantName)) {
            $retailer = $response->mainProduct->merchantName;
        } else {
        $retailer = 'NA';
        } 
        if (!is_null($response->mainProduct->formattedShippingCost)) {
        $shipping = $response->mainProduct->formattedShippingCost;
        } else {
        $shipping = 'NA';
        } 
        $producttitle = $response->mainProduct->title;
        $img_alt_txt = str_replace('"',' ', $producttitle);
        $img_alt_txt = str_replace('/',' ', $img_alt_txt); 
?>



<div class="products">
    <div class="product-img"  style="background-image: url('<?php echo $response->mainProduct->imageUrls['big']['imageUrl']; ?>')"></div>
    <div class="product-info">
        <p class="title"><?php echo $response->mainProduct->title; ?></p>
        <p class="desc"><?php echo $response->mainProduct->description; ?></p>
        <p class="condition">Condition - <span><?php echo $condition; ?></span> </p>
        <p class="seller">Seller - <span><?php echo $retailer; ?></span> </p>
        <p class="price"><?php echo $response->mainProduct->formattedPrice; ?></p>
        <a <?php echo $response->mainProduct->anchorAttributes; ?> href="<?php echo $response->mainProduct->clickUrl; ?>" class="btn">BUY NOW<span class="arrow"></span></a>
    </div>
</div>

<?php } ?>