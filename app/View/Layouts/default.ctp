<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="247Insider.com - the quintessential online store is to your rescue. We make your life simpler by tackling your to-do lists like a pro!">
    <meta name="theme-color" content="#000" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, viewport-fit=cover">
    <link rel="shortcut icon" href="<?php echo Configure::read('imageBaseUrl');?>/img/favicon.png" type="image/png" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&display=swap" rel="stylesheet">
    <title><?php echo Configure::read('display_name'); ?></title>
    
    <?php
         echo $this->AssetCompress->css('all'); 
         // LOAD PAGE SPECIFIC CSS
         if(isset($response->isSerpPage) && $response->isSerpPage) {
            echo $this->AssetCompress->addCss(array('serp.css'), 'serpCss');
            echo $this->AssetCompress->css('serpCss');
            echo $this->AssetCompress->addCss(array('jquery-ui.css'), 'jqueryuiCss');
            echo $this->AssetCompress->css('jqueryuiCss');
         } else if(isset($response->isCategoryPage) && $response->isCategoryPage) {
            echo $this->AssetCompress->addCss(array('category.css'), 'categoryCss');
            echo $this->AssetCompress->css('categoryCss');
            echo $this->AssetCompress->addCss(array('jquery-ui.css'), 'jqueryuiCss');
            echo $this->AssetCompress->css('jqueryuiCss');
         } else if(isset($response->isDetailPage) && $response->isDetailPage) {
            echo $this->AssetCompress->addCss(array('product.css'), 'detailsCss');
            echo $this->AssetCompress->css('detailsCss');
         } else if(isset($response->isHomePage) && $response->isHomePage) {
            echo $this->AssetCompress->addCss(array('home.css'), 'homeCss');
            echo $this->AssetCompress->css('homeCss');
         } else if(isset($response->isQAPage) && $response->isQAPage) {
            echo $this->AssetCompress->addCss(array('faq.css'), 'faqCss');
            echo $this->AssetCompress->css('faqCss');
         }
      ?>
    <?php echo $this->AssetCompress->addScript(array('jquery-1.7.2.min.js'), 'jquery.min'); ?>
    <?php echo $this->AssetCompress->script('jquery.min'); ?>
    <?php echo $this->element ('CommonHeader', array(), array('plugin' => 'ArbPlugin')); ?>

    <style>
        .relatedProdwrap{position: relative;margin: 0 0 0 auto;width: calc((100vw - 1110px) / 2 + 1110px);max-width: 97.5%;padding-left: calc(3.5% + 322px)}
        @media screen and (max-width: 767px){.relatedProdwrap {padding-left: 0;padding-top: 100px;}}
        @media screen and (max-width: 475px){.relatedProdwrap {padding-top: 130px;}}
    </style>
</head>



<body
    class="page <?php echo (isset($response->isHomePage) && $response->isHomePage) ? 'home-page' : ''; echo (isset($response->isCategoryPage) && $response->isCategoryPage) ? 'category-page' : ''; echo (isset($response->isDetailPage) && $response->isDetailPage) ? 'detail-page' : ''; echo (isset($response->isSerpPage) && $response->isSerpPage) ? 'serp-page' : ''; ?>">
    <?php 
            $isSerp = false;
			$newTab = '';
			if(isset($response->isSerpPage) && $response->isSerpPage) {
				$isSerp = true;
				$newTab = 'target="_blank"';
			} 
         ?>
    <header class="header clearfix">
        <div class="container">
            <div class="header-wrp">
                <a href="/" <?php echo $newTab; ?>>
                    <div class="logo"></div>
                </a>
                <div class="right-align">
                    <div class="categories-drop-dwn">
                        <?php 
                                        if(!$isSerp) {  ?>

                        <div class="title">All Categories</div>
                        <ul>
                            <li><a href="/category/<?php echo urlencode('food') ?>">Food</a></li>
                            <li><a href="/category/<?php echo urlencode('health-and-fitness') ?>">Health and Fitness</a></li>
                            <li><a href="/category/<?php echo urlencode('shopping') ?>">Shopping</a></li>
                            <li><a href="/category/<?php echo urlencode('restaurants') ?>">Restaurants</a></li>
                            <li><a href="/category/<?php echo urlencode('home-and-garden') ?>">Home and Garden</a></li>
                            <li><a href="/category/<?php echo urlencode('beauty') ?>">Beauty</a></li>
                            <li><a href="/category/<?php echo urlencode('education') ?>">Education</a></li>
                            <li><a href="/category/<?php echo urlencode('automotive') ?>">Automotive</a></li>
                        </ul>
                        <div class="search-btn-cat"></div>
                        <?php 
                                    } 
                                ?>
                    </div>
                    <div class="search-bar">
                        <form action="/products/search" id="refineSearch">
                            <div class="input-field">
                                <input type="text" placeholder="Search here..." id="refineinput" name="s">
                            </div>
                            <div class="search-icon">
                                <input type="submit" value="" placeholder="Search here">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="min-ht-wrpr">
        <?php
                echo $this->fetch('content');
            ?>
    </div>

    <footer>
        <div class="container">
            <div class="footer-content clearfix">
                <div class="footer-logo clearfix">
                    <a href="/" <?php echo $newTab; ?>></a>
                </div>
                <div class="footer-info">
                    <p>At 247Insider.com, we offer all of the above services and much more in one place. You don’t have to go through various apps and websites and remember thousands of passwords in the quest for the one thing you desire.</p>
                </div>
                <div class="footer-cmpny">
                    <p>Company</p>
                    <ul>
                        <li><a href="/about-us" <?php echo $newTab; ?>>About us</a></li>
                        <li><a href="/contact-us" <?php echo $newTab; ?>>Contact us</a></li>
                        <li><a href="/privacy-policy" <?php echo $newTab; ?>>Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer-popular">
                    <p>Most Popular Locations</p>
                    <ul>
                        <li><a href="/listings/?nearby=<?php echo urlencode('new york') ?>" <?php echo $newTab; ?>>New York City</a></li>
                        <li><a href="/listings/?nearby=<?php echo urlencode('seattle') ?>" <?php echo $newTab; ?>>Seattle</a></li>
                        <li><a href="/listings/?nearby=<?php echo urlencode('San Francisco') ?>" <?php echo $newTab; ?>>San Francisco</a></li>
                    </ul>
                    <ul>
                        <li><a href="/listings/?nearby=<?php echo urlencode('Chicago') ?>" <?php echo $newTab; ?>>Chicago</a></li>
                        <li><a href="/listings/?nearby=<?php echo urlencode('Washington CDC') ?>" <?php echo $newTab; ?>>Washington, D.C</a></li>
                        <li><a href="/listings/?nearby=<?php echo urlencode('boston') ?>" <?php echo $newTab; ?>>Boston</a></li>
                    </ul>
                    <ul>
                        <li><a href="/listings/?nearby=<?php echo urlencode('Los Angeles') ?>" <?php echo $newTab; ?>>Los Angeles</a></li>
                        <li><a href="/listings/?nearby=<?php echo urlencode('San Diego') ?>" <?php echo $newTab; ?>>San Diego</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-cpy">
                <p>Copyright @<?php echo date('Y'); ?> 247Insider. All rights reserved</p>
            </div>
        </div>
    </footer>
    <?php echo $this->AssetCompress->script('all'); ?>
    <?php echo $this->element ('CommonFooter', array(), array('plugin' => 'ArbPlugin')); ?>
</body>

</html>