<?php if ($response->showKbbRelatedKeywords) { ?>
<p class="related-title">Related Searches</p>
<ul class="related-wrds clearfix">
<?php
    foreach($response->kbbRelatedKeywords as $relatedKeyword) {
    echo '<li class="wrds"><a class="kbbRelatedKeywords-di-tgt" '.$relatedKeyword['anchorAttributes'].' href="'.$relatedKeyword['clickUrl'].'" target="_blank"><span class="kwd">'.$relatedKeyword['relatedKeyword'].'</span></a></li>';
    }
?>
</ul>
<?php } ?>  