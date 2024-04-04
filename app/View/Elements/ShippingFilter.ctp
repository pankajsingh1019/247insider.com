<?php
   if ($response->showShippingFilter) { ?>
      <div class="shipping-wrap shippingFilter-tgt clearfix">
         <div class="title clearfix">Delivery Charges&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" id="clearShipping">Clear</a></div>
         <div class="shipping-list">
            <ul class="filter-name">
               <li>
               	<?php $checked = ($response->showSelectedFreeShipping) ? 'checked' : ''; ?>
                  <input type="radio" <?php echo $checked; ?> id="shipping" class="shipping" name="shipping" value="true" onchange="submitFilterForm()">
                  <label for="shipping" class="filter-name">    
                     <span> Free </span>
                 </label>
               </li>
            </ul>
         </div>
      </div>
<?php } ?>