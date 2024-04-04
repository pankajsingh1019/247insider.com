<?php if ($response->showWebResults) { ?> 
   <div class="relatedProduct-bg">
      <div class="bg"></div>
      <div class="relatedProdwrap">
         <div class="relatedProdInnerwrap">
            <?php foreach ($response->webResults as $webResult) { ?>
               <div class="relatedProdBlock webResult-tgt">
                  <a <?php echo $webResult->anchorAttributes; ?> href="<?php echo $webResult->clickUrl; ?>" class="clearfix" target="_blank">
                     <div class="relatedProdImg">
                        <img src="<?php echo $webResult->imageUrl?>" alt="<?php echo $webResult->title; ?>">
                     </div>
                     <div class="relatedProdTitle"><?php echo  $webResult->title;?></div>
                     <div class="relatedProdDesc"><?php echo utf8_decode($webResult->description) ;?></div>
                     <div class="relatedProdRead-more">Read more</div>
                  </a>
               </div>
            <?php } ?>
         </div>
      </div>
   </div>
<?php } ?>