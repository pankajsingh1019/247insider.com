<style>
    .wep-page-list{margin-bottom: 20px;}
    .wep-page-list a{display: block;background: #f5f8ff;padding: 15px;border: 1.5px solid transparent;transition: 0.3s; overflow: hidden;position: relative; transition: 0.5s;} 
    .sp-product-block .title{color: #ff6100; font-size: 14px; line-height: 20px; font-weight: 600; height: 20px; overflow: hidden;margin-bottom: 3px;}
    .sp-product-block .url{font-size: 13px; line-height: 17px; color: #000; font-weight: 600; margin-bottom: 6px;height: 33px; overflow: hidden;padding-left: 0;}
    .sp-product-block .description{color: #acacac; font-weight: 500; font-size: 12px; line-height: 18px;height: 89px; overflow: hidden;}
    .wep-page-list a:before{content:"";border-bottom: 1.5px solid #ff6100; border-left: 1.5px solid #ff6100; transform-origin: 0 100%;}
    .wep-page-list a:after{content:"";border-top: 1.5px solid #ff6100; border-right: 1.5px solid #ff6100; transform-origin: 100% 0%; }
    .wep-page-list a:before, .wep-page-list a:after{width: 100%; height: 100%; z-index: 3; content: ''; position: absolute; top: 0; left: 0; box-sizing: border-box; transform: scale(0); transition: 0.5s;}
    .wep-page-list a:hover{border: 1.5px solid rgba(0,160,80,0); color: #FFF;}
    .wep-page-list a:hover:after, .wep-page-list a:hover:before {transform: scale(1); }
    
    @media screen and (max-width: 899px){
         .wep-page-list a:hover{border: 1.5px solid transparent; color: #FFF;}
        .wep-page-list a:hover:after, .wep-page-list a:hover:before {transform: none; }
        .wep-page-list a:before{content: ""; border-bottom: 1.5px solid transparent; border-left: 1.5px solid transparent; transform-origin: 0 100%;} 
        .wep-page-list a:after{border-top: 1.5px solid transparent;border-right: 1.5px solid transparent;}
    }

    @media screen and (max-width: 599px){
         .sp-product-block .url{height: auto;max-height: 33px;}
    }

</style>

<div class="sp-product-list clearfix">
    <ul class="row">
        <?php
        foreach ($WebpagesToDisplay->products as $productIndex => $productDetails) {
            if (strlen($productDetails->title) > 80) {
                $productDetails->title = substr($productDetails->title, 0, 80) . "...";
            } pr($WebpagesToDisplay);
            ?>
            <li class="rel col-md-4 col-sm-6 wep-page-list az-we-Serp-tgt">
                <a <?php echo $productDetails->anchorAttributes; ?> href="<?php echo $productDetails->clickUrl; ?>" class="cta" target="_blank">
                    <div class="sp-product-block">
                        <div class="title"><?php echo $productDetails->title; ?></div>
                        <p class="url"><?php echo $productDetails->clickUrl; ?></p>
                        <p class="description"><?php echo $productDetails->description; ?></p>
                    </div>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>
