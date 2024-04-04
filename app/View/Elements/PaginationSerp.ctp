<?php if (Configure::read('device') == 'd'){
 $numberOfPages = 5;
}else{
 $numberOfPages = 3;
}
if ($response->showPagination) {
    ?>
    <div class="pagination-wrap clearfix">
        <?php echo $this->Products->getPaginationString($response->totalProducts, $response->pageNumber, $response->pageSize, $numberOfPages); ?>
    </div>
<?php } ?>
