
<div class="filter-product-wrp">
  <div class="container">
      <div class="filter">
        <p class="heading">Filters</p>
        <p class="filter-btn"></p>
         <?php echo $this->element('Filter') ?> 
        <div class="cat-dfp-d">
            <?php echo $this->element('DFPPlacement', array('index' => '0'), array('plugin' => 'ArbPlugin')); ?>
        </div>
      </div>
      <div class="category clearfix">
      <?php 
        if($response->showPrimaryProducts) {
        echo $this->element('ProductCategory', array("products" => $response->primaryProducts->products));
        } else {
        echo '<div class="noRes">No Results</div>';
        } 
      ?> 
      </div>
  </div>
</div>


<?php 
    if($response->showPrimaryProducts) {
      echo $this->element('BestDeals', array("products" => $response->primaryProducts->products));
    } else {
      echo '<div class="noRes">No Results</div>';
    } 
  ?> 