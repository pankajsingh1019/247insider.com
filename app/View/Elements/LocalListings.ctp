<pre>
<?php //print_r($productsToDisplay->products);?>
</pre>
<div class="serp-innerwrap">
	<div class="row ">
		<?php $count = 0;
		foreach ($productsToDisplay->products as $productIndex => $productDetails) {
			if($count == 1){
        		echo $this->element('EngagementPlatformWidget', array('index' => '0'), array('plugin' => 'ArbPlugin')); 
    		} 
		?>
			<div class="col-md-4 col-sm-6 col-xs-12 locallistwrap <?php echo $className; ?>">
				<div class="listing-wrap clearfix">

					<div class="listing-title clearfix">
						<?php if(isset($productDetails->clickUrl) && !empty($productDetails->clickUrl)) { ?>
							<a <?php echo $productDetails->anchorAttributes; ?> href="<?php echo $productDetails->clickUrl ?>" class="ttlwrp" target="_blank"><?php echo $productDetails->name ?>
							</a>
						<?php } else { ?>
				          <span class="ttlwrp"><?php echo $productDetails->name ?></span>
				        <?php } ?>		
				        
						<div class="listing-ratings">
							<?php echo $this->Html->image('serpAdRating.png'); ?>
						</div>
					</div>

					<p class="listing-add"><?php echo $productDetails->street.','.$productDetails->city.','.$productDetails->stateCode.','.$productDetails->zipCode ?></p>
					
					<?php
					$raw_number = $productDetails->phone;
					$formatted_number = sprintf("(%s) %s - %s", substr($raw_number, 0, 3),substr($raw_number, 3, 3),substr($raw_number, 6, 4));
					?> 

					<div class="listing-num"><?php echo $formatted_number ?>
						<?php $km = $productDetails->distance * 1.6 ; ?>
						<p class="listing-distance"><?php echo (round($km)) . " KM" ?></p>
					</div>

				</div>
			</div>
		<?php $count++; } ?>
	</div>
</div>
