<?php if ($response->showFakeStores) { ?>
    <div class="compare-cards">
        <?php
            foreach ($response->allMainProducts->products as $index=>$product) {
            if (!is_null($product->merchantLogoUrl)) {
            $retailer = '<img src="' . $product->merchantLogoUrl . '" alt="'.$product->merchantName.'"/>';
            } else {
            $retailer = $product->merchantName;
            }
         ?>
            <div class="card one">
                <div class="compare-brand">
                      <?php echo $retailer; ?>
                </div>
                <div class="compare-ratings">
                    <div>
                        <h3>Sellers Ratings</h3>
                        <?php echo $this->Html->image('rating-2.png'); ?>
                    </div>
                </div>
                <div class="compare-info">
                    <div>
                        <h3>Item Conditon</h3>
                        <h2><?php echo ucfirst(strtolower($product->condition)); ?></h2>
                    </div>
                </div>
                <div class="compare-price">
                    <div>
                        <h3>List Price</h3>
                        <h2><?php echo $product->formattedPrice; ?></h2>
                    </div>
                </div>
                <div class="compare-button">
                     <a <?php echo $response->mainProduct->anchorAttributes; ?> href="<?php echo $response->mainProduct->clickUrl; ?>" class="btn">BUY NOW<span class="arrow"></span></a>
                </div>
            </div>    
            <?php } ?>
            <?php foreach ($response->fakeStoreProducts as $fakeStore) { ?>
            <div class="card one">
                <div class="compare-brand">
                    <img src="<?php echo $fakeStore->logoPath; ?>" alt="store">
                </div>
                <div class="compare-ratings">
                    <div>
                        <h3>Sellers Ratings</h3>
                        <img src="<?php echo $fakeStore->rating; ?>" alt="rating">
                    </div>
                </div>
                <div class="compare-info">
                    <div>
                        <h3>Item Conditon</h3>
                        <h2>New</h2>
                    </div>
                </div>
                <div class="compare-price">
                    <div>
                        <h3>List Price</h3>
                        <h2><?php echo $fakeStore->formattedPrice; ?></h2>  
                    </div>
                </div>
                <div class="compare-button">
                     <a <?php echo $fakeStore->anchorAttributes; ?> href="<?php echo $fakeStore->clickUrl; ?>" class="btn">BUY NOW<span class="arrow"></span></a>
                </div>
            </div> 
        <?php } ?>
    </div>
<?php } ?>