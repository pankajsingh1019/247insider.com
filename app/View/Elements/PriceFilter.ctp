<?php if ($response->showPriceFilter) { ?>
    <div class="price-wrap">     
        <div class="price-info priceFilter-tgt" id="insidecontent">
            <!-- <div class="title clearfix">Price&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" id="clearPrice">Clear</a></div> -->
            <div class="title clearfix">Price&nbsp;&nbsp;&nbsp;&nbsp;<p class="price-arrow"></p> </div>
            <div class="price-inn-wp">
            <div class="select-range">
                    <input type="hidden" id="minSelectedPrice" name="min_price" value="<?php echo $response->minimumSelectedPrice ?>">
                    <input type="hidden" id="maxSelectedPrice" name="max_price" value="<?php echo $response->maximumSelectedPrice ?>">
                    <div id="slider-range"></div>
            </div>
                <input type="text" id="amount" readonly="">   
                <div id="amount2"></div>             
            </div>
        </div>
    </div>
<?php } ?>
<?php if ($response->showPriceFilter) { ?>
    <script>
        $(function () {
            $("#slider-range").slider({
                range: true,
                min: <?php echo $response->minimumPriceOfRange;  ?>,
                max: <?php echo $response->maximumPriceOfRange;  ?>,
                values: [<?php echo $response->minimumSelectedPrice ?>, <?php echo $response->maximumSelectedPrice ?>],
                slide: function (event, ui) {
                    $("#amount").val("<?php echo $response->currency; ?>" + ui.values[0] + " - <?php echo $response->currency; ?>" + ui.values[1]);
                    $("#amt_min").html("$" + ui.values[0]);
                    $("#amt_max").html("$" + ui.values[1]);
                    $("#minSelectedPrice").val(ui.values[0]);
                    $("#maxSelectedPrice").val(ui.values[1]);
                },
                stop: function (event, ui) {
                    submitFilterForm();
                }
            });
            $("#amount").val("Price Range ");
            $("#amt_min").html("$" + $("#slider-range").slider("values", 0));
            $("#amt_max").html("$" + $("#slider-range").slider("values", 1));
            $("#amount2").html("<?php echo $response->currency; ?>" + $("#slider-range").slider("values", 0) +
                " - <?php echo $response->currency; ?>" + $("#slider-range").slider("values", 1));
        });

        $('#clearPrice').on('click', function () {
            $('#minSelectedPrice').removeAttr('name');
            $('#maxSelectedPrice').removeAttr('name');
            submitFilterForm();
        });
    </script>
<?php }
?>