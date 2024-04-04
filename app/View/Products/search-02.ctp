<style type="text/css">
    ep-widget{margin: 10px auto;}
    @media only screen and (max-width: 1024px){
        .pull-right, .pull-left {width: 100%;margin-right: 0;}
    }
</style>
<div class="top-eds">
    <div class="container">
        <?php echo $this->element('TopAds') ?>
    </div>
</div>

<div class="related-key-wrds">
    <div class="container">
        <?php echo $this->element('RelatedKeywords') ?>
    </div>
</div>

<div class="alignment-wrp">
    <div class="container">
        <div class="pull-left">
            <div class="listings">
                <?php if ($response->showSecondaryProducts) { ?>
                <?php echo $this->element('LocalListings', array("productsToDisplay" => $response->secondaryProducts, "className" => 'secondaryProductSerp-tgt')) ?>
                <?php } ?>
            </div>

        </div>
        <div class="serp-pg-search">
            <div class="serp-pg-search-box">
                <div class="serp-search-icon"></div>
                <form action="/products/search" id="refineSearchSerp">
                    <input type="text" class="serp-search-input" id="refineinputSerp" placeholder="Search here">
                </form>
            </div>
        </div>
        <div class="pull-right">
            <?php echo $this->element('RelatedNews') ?>
            <div class="product-card-wrp">
                <?php 
                        if ($response->showStaticPrimaryProducts) {
                        echo $this->element('ProductSerp', array("productsToDisplay" => $response->staticPrimaryProducts, "className" => 'primaryProductSerp-tgt'));
                        }
                        ?>
                <?php 
                        if ($response->showPrimaryProducts) {
                        echo $this->element('ProductSerp', array("productsToDisplay" => $response->primaryProducts, "className" => 'primaryProductSerp-tgt'));
                        } ?>
            </div>
        </div>
    </div>
</div>

<div class="serp-banner">
    <div class="container">
        <div class="img">
            
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="419" height="79" viewBox="0 0 419 79">
                <defs>
                    <rect id="b" width="411" height="70" rx="8"/>
                    <filter id="a" width="104.1%" height="125.7%" x="-2.3%" y="-6.4%" filterUnits="objectBoundingBox">
                        <feOffset dx="-1" dy="5" in="SourceAlpha" result="shadowOffsetOuter1"/>
                        <feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="2"/>
                        <feColorMatrix in="shadowBlurOuter1" values="0 0 0 0 0.583559783 0 0 0 0 0.583559783 0 0 0 0 0.583559783 0 0 0 0.190723339 0"/>
                    </filter>
                </defs>
                <g fill="none" fill-rule="evenodd">
                    <g transform="translate(5)">
                        <use fill="#000" filter="url(#a)" xlink:href="#b"/>
                        <use fill="#4D426D" xlink:href="#b"/>
                    </g>
                    <text fill="#FFF" font-family="Ubuntu-Bold, Ubuntu" font-size="20" font-weight="bold" transform="translate(5)">
                        <tspan x="12" y="36">COMPARE</tspan> <tspan x="12" y="56.24" font-family="Ubuntu-Regular, Ubuntu" font-size="16" font-weight="normal">&amp; SAVE UPTO</tspan>
                    </text>
                    <g fill="#FF8B66">
                        <path d="M121 48.248l5.812-6.737c3.141 2.627 6.108 3.94 8.9 3.94 1.676 0 3.002-.398 3.979-1.193.943-.76 1.414-1.814 1.414-3.162 0-1.277-.506-2.296-1.518-3.056-.978-.76-2.27-1.14-3.875-1.14-1.885 0-3.84.604-5.863 1.813l-6.021-3.317L124.875 17h24.502v8.292h-16.492l-.314 5.492a13.695 13.695 0 0 1 5.864-1.295c3.56 0 6.474.932 8.743 2.798 2.548 2.108 3.822 5.045 3.822 8.81 0 3.973-1.414 7.134-4.241 9.483-2.722 2.28-6.353 3.42-10.89 3.42-5.759 0-10.715-1.917-14.869-5.752M174.932 42.203c1.224-1.844 1.837-4.244 1.837-7.203 0-2.923-.63-5.324-1.89-7.203-1.294-1.88-2.937-2.819-4.932-2.819-2.028 0-3.655.923-4.88 2.767-1.224 1.845-1.836 4.262-1.836 7.255 0 2.959.63 5.36 1.89 7.203 1.259 1.88 2.903 2.82 4.931 2.82 2.029 0 3.655-.94 4.88-2.82zm-17.367 6.212C154.522 44.865 153 40.395 153 35c0-5.324 1.539-9.778 4.618-13.362C160.835 17.88 164.98 16 170.052 16c5.107 0 9.235 1.862 12.383 5.585C185.478 25.17 187 29.642 187 35c0 5.325-1.522 9.78-4.565 13.363-3.219 3.758-7.38 5.637-12.488 5.637-5.107 0-9.234-1.86-12.382-5.585z"/>
                        <path d="M203.672 35.783c.334-.468.501-1.075.501-1.82 0-.724-.178-1.32-.533-1.79-.335-.467-.773-.702-1.317-.702a1.5 1.5 0 0 0-1.317.702c-.335.448-.502 1.055-.502 1.822 0 .702.177 1.288.533 1.757.355.49.795.734 1.317.734.523 0 .962-.234 1.318-.703zm-5.426 2.428c-1.046-1.128-1.568-2.544-1.568-4.248 0-1.683.512-3.099 1.536-4.25 1.067-1.17 2.447-1.756 4.14-1.756 1.673 0 3.042.586 4.109 1.757 1.024 1.15 1.537 2.577 1.537 4.28 0 1.661-.523 3.067-1.568 4.217-1.088 1.193-2.457 1.789-4.11 1.789-1.65 0-3.01-.596-4.076-1.789zm-9.252-13.384c.335-.469.501-1.076.501-1.822 0-.702-.177-1.298-.533-1.789-.355-.468-.794-.702-1.317-.702-.544 0-.983.234-1.317.702-.335.47-.502 1.076-.502 1.821 0 .725.177 1.321.534 1.79.354.468.794.702 1.317.702.522 0 .961-.234 1.317-.702zm12.357-7.507h4.234l-16.937 22.36h-4.233l16.936-22.36zm-17.783 9.966c-1.046-1.15-1.568-2.576-1.568-4.28 0-1.683.512-3.1 1.537-4.249 1.066-1.171 2.446-1.757 4.14-1.757 1.672 0 3.042.586 4.108 1.757 1.025 1.15 1.537 2.577 1.537 4.28 0 1.683-.523 3.099-1.568 4.249-1.087 1.171-2.457 1.757-4.109 1.757-1.673 0-3.032-.586-4.077-1.757zM188.723 50.144c.435-.445.652-.993.652-1.644 0-.643-.223-1.187-.663-1.632-.46-.47-1.035-.704-1.726-.704-.688 0-1.255.23-1.697.692-.432.444-.65.993-.65 1.644 0 .643.22 1.187.664 1.632.45.47 1.02.704 1.71.704.698 0 1.268-.23 1.71-.692zm-5.304 1.546c-.946-.866-1.419-1.929-1.419-3.19 0-1.253.478-2.312 1.433-3.177.964-.882 2.157-1.323 3.58-1.323s2.613.437 3.568 1.31c.946.866 1.419 1.929 1.419 3.19 0 1.253-.477 2.312-1.432 3.177-.965.883-2.158 1.323-3.582 1.323s-2.612-.437-3.567-1.31zM193 44h7v2.186h-4.575v1.53h4.138v2.07h-4.138V53H193v-9M202 44h7v2.186h-4.575v1.53h4.137v2.07h-4.137V53H202v-9"/>
                    </g>
                    <text fill="#FFF" font-family="Roboto-Medium, Roboto" font-size="25" font-weight="400" transform="translate(5)">
                        <tspan x="212" y="44">On Top Products</tspan>
                    </text>
                </g>
            </svg>

        </div>
    </div>
</div>



<?php echo $this->element('WebResults') ?>

<div class="serp-dfp-d">
    <div class="container">
         <?php echo $this->element('DFPPlacement', array('index' => '0'), array('plugin' => 'ArbPlugin')); ?>
    </div>
</div>

<div class="question">
    <div class="container">
        <?php echo $this->element('QuestionSerp') ?>
    </div>
</div>
<div class="bottom-eds">
    <div class="container">
        <?php echo $this->element('BottomAds2') ?>
    </div>
</div>