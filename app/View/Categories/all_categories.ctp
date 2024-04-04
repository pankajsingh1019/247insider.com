<?php echo $this->AssetCompress->addCss(array('all-categories.css'), 'allcategoriesCss'); ?>
<?php echo $this->AssetCompress->css('allcategoriesCss'); ?>
<?php if (isset($categoryTree) && !empty($categoryTree)) { ?>
<div class="all-cat-wrp">
    <div class="container">
        <div class="inner clearfix">
            <div class="heading">CATEGORIES</div>
            <div class="clearfix">
                <?php
                    $categoryNodeIndex = 1;
                    foreach ($categoryTree as $categoryNode) {
                        if ($categoryNodeIndex % 7 == 1) { ?>
                <div class="cat-container clearfix">
                    <?php } ?>
                    <ul class="main-cat">
                        <li>
                            <a href="/categories/index/<?php echo $categoryNode['id'] ?>?catName=<?php echo urlencode($categoryNode['name']); ?>"
                                class="cat-name">
                                <h2><?php echo $categoryNode['name']; ?></h2>
                            </a>
                        </li>
                        <?php
                            if (!empty($categoryNode['subcat'])) {
                                ?>

                        <?php
                                foreach ($categoryNode['subcat'] as $subCategoryNode) {
                                    ?>
                        <li>
                            <a href="/categories/index/<?php echo $subCategoryNode['id'] ?>?catName=<?php echo urlencode($subCategoryNode['name']); ?>"
                                class="cat-item"><?php echo $subCategoryNode['name']; ?></a>
                        </li>
                        <?php
                                }
                            } ?>
                    </ul>
                    <?php if ($categoryNodeIndex % 7 == 0 || $categoryNodeIndex == count($categoryTree)) { ?>
                </div>
                <?php  }
                            $categoryNodeIndex++;
                        }
                    ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>