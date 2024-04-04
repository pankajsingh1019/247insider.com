
<div class="product-detail">
  <div class="container">
     <?php echo $this->element('DetailProduct'); ?>
  </div>
</div>

<div class="compare">
  <div class="container">
    <div class="compare-contents">
    <div class="compare-title">
      <h1>Compare Prices</h1>
      <h2>The price comparison features allow consumers to check the prices and of products on various market</h2>
    </div>
    <?php echo $this->element('ComparePrices'); ?>
  </div>
  </div>
</div>

<div class="prod-dfp-d">
    <div class="container">
         <?php echo $this->element('DFPPlacement', array('index' => '0'), array('plugin' => 'ArbPlugin')); ?>
    </div>
</div>

<?php echo $this->element('RelatedProducts', array('products' => $response->showRelatedProducts)); ?>

