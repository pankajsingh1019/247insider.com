
<?php if ($response->showPrimaryNewsMultimedia) { ?>
<div class="newsfeed-wrp">
		<div class="news-feed clearfix">
			<ul class="row">	
				<?php foreach ($response->primaryNewsMultimedia->products as $product) { 
						?>
				<li class="col-md-6 col-sm-6 az-ne-Serp-tgt">
					<div class="wrap-prod">
							<div class="news-img">
                            	<?php if(empty($product->imageUrl)) {?>
								<img alt="Image" src="<?php echo Configure::read('imageBaseUrl'); ?>/img/noimage.jpg" class="img-responsive" />
								<?php } else {?>
								<img alt="image" src="<?php echo $product->imageUrl ?>" class="img-responsive">
								<?php } ?>
                        	</div>
							<div class="content">
								<a <?php echo $product->anchorAttributes; ?> href="<?php echo $product->clickUrl ?>" target="_blank"><?php echo $product->title ?></a>
								<p><?php echo $product->description ?></p>
								<a <?php echo $product->anchorAttributes; ?> href="<?php echo $product->clickUrl ?>" target="_blank" class="clearfix">
								<span class="view">Read more</span>
								</a>
							</div>
					</div>
				</li>
				<?php } ?>
			</ul>
		</div>
</div>
<?php } ?>	

