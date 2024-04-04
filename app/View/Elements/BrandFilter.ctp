<?php if ($response->showBrandsFilter) { ?>
<div class="brandFilter-tgt brand-wrap">
    <!-- <div class="title clearfix">Brands&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" id="clearBrand">Clear</a></div> -->
    <div class="title clearfix">Brands&nbsp;&nbsp;&nbsp;&nbsp;<p class="brand-arrow"></p>
    </div>
    <ul class="brand-wrap-list">
        <li>
            <input type="radio" id="allBrands" class="brand" checked="" name="brand" value=""
                onchange="submitFilterForm()">
            <label for="allBrands">
                <span>Show All</span>
            </label>
        </li>
        <?php
                foreach ($response->brands as $brandObject) {
                $checked = '';
                if ($response->showSelectedBrand && $response->selectedBrand == $brandObject->id) {
                    $checked = 'checked';
                } 
                $brandName = $brandObject->displayName;
                $brandName = str_replace(" ","_", $brandName);
                ?>
        <li>
            <input type="radio" id="<?php echo $brandName; ?>" class="brand" <?php echo $checked ?> name="brand"
                value="<?php echo $brandObject->id; ?>" onchange="submitFilterForm()">
            <label for="<?php echo $brandName; ?>" class="filter-name">
                <span> <?php echo $brandObject->displayName; ?> </span>
            </label>
        </li>
        <?php
                } ?>
    </ul>
</div>
<?php }