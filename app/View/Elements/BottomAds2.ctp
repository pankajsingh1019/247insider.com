<?php if ($response->showBottomAds) { ?>
<?php $sitePrfx = Configure::read('site_initials'); ?>
<style>
.bottom-nw .text-wrp{margin-bottom:3px;text-align:left}
.bottom-nw .text-wrp .result-for{width:calc(100% - 116px);display: inline-block;vertical-align: bottom;word-break:break-word;font-size:12px;color:#4d426d;font-weight:500;line-height: 18px;}
.bottom-nw .text-wrp .result-for .kw{text-transform: uppercase;}
.bottom-nw .text-wrp .sponsored{width:112px;display: inline-block;vertical-align: bottom;font-size:12px;color:#4d426d;font-weight:500}
.srp-pg-wrp .text-wrp{position:relative;margin:9px 0 8px 0;font-size:14px;line-height:18px;color:#262626;padding-right:120px;}
.srp-pg-wrp .text-wrp .sponsored{position:absolute;right:0;color:#999999;font-size:13px;font-weight:400;}
.srp-pg-wrp .text-wrp .result-for{left:0;color:#999999;font-size:13px;font-weight:400;}

/* annot styling */
.srp-list-top.bottom-nw li.rank-annot-hide.img-annot-hide .inner{padding-left:10px}
.srp-list-top.bottom-nw li.cta-annot-hide .inner{padding-right:10px}
.srp-list-top.bottom-nw li.rank-annot-hide.img-annot-hide .num-img-wrp::before,
.srp-list-top.bottom-nw li.site-links-annot-hide .site-links li:before {display: none;}
.srp-list-top.bottom-nw li.site-links-annot-hide .site-links li {margin-left: 0}
.srp-list-top.bottom-nw li:hover .ed-extension-wrap .ed-review {color: #fff;}

@media screen and (max-width: 767px) {
    .srp-list-top.bottom-nw li.rank-annot-hide.img-annot-hide .title-copy {padding-left:0; width: 100%}
    .srp-list-top.bottom-nw li.rank-annot-hide .title-copy {padding-left:0; width: 100%}
}
</style>
<div class="srp-list-top bottom-nw <?php echo $sitePrfx; ?>-ed-sl-bottom-wrapper">
    <?php echo $this->element('BottomAdUnitHeadLine', array(), array('plugin' => 'ArbPlugin')); ?>

    <ul class="clearfix <?php echo $sitePrfx; ?>-ed-sl-ul">
        <?php foreach ($response->bottomAds as $adIndex => $adDetails) { 
            $classList = [];
            $classList[] = $adDetails->showImage ? 'img-annot' : 'img-annot-hide';
            $classList[] = $adDetails->showRank ? 'rank-annot' : 'rank-annot-hide';
            $classList[] = $adDetails->showRating ? 'rating-annot' : 'rating-annot-hide';
            $classList[] = $adDetails->showCta ? 'cta-annot' : 'cta-annot-hide';
            $classList[] = $adDetails->showSiteLinksAnnotations ? 'site-links-annot' : 'site-links-annot-hide';
        ?>
        <li class="main bottomEd-tgt <?php echo (!$adDetails->showImage) ? ' no-skitto' : ''; ?> <?php echo implode(' ',$classList); ?> <?php echo $sitePrfx; ?>-ed-sl-li">
            <div class="clearfix inner <?php echo (empty($adDetails->siteLinks)) ? 'no-list-site' : '' ?>">
                <div class="num-img-wrp kbbImageMainDiv-tgt">
                    <a <?php echo $adDetails->anchorAttributes; ?> href="<?php echo $adDetails->clickUrl; ?>" class="track_click overlay-all" target="_blank"
                     aria-label="<?php echo $adDetails->title; ?>"></a>

                    <?php if ($adDetails->showRank || $adDetails->showImage) {?>
                    <?php if ($adDetails->showRank) { ?>
                        <div class="mob <?php echo $sitePrfx;  ?>-ed-sl-rank-mobile">0<?php echo ($adIndex + 1) ?></div>
                    <?php } ?>
                    <div class="desk">
                        <?php if ($adDetails->showImage) { ?>
                        <div class="img bottomEdKbbImage-di-tgt kbbImage-di-tgt <?php echo $sitePrfx; ?>-ed-sl-img"
                            style="background-image: url('<?php echo $adDetails->imagePath; ?>')"></div>
                        <?php } elseif ($adDetails->showRank) {
                            echo '<div class="serp-img-skitto ' . $sitePrfx . '-ed-sl-rank">';
                            echo "0".($adDetails->rank);
                            echo "</div>";
                        } ?>
                    </div>
				    <?php }?>

                    <p class="title-copy <?php echo $sitePrfx . '-ed-sl-title'; ?>"><?php echo $adDetails->title; ?></p>
                </div>
                <div class="desc-wrp">
                    <p class="title <?php echo $sitePrfx . '-ed-sl-title'; ?>"><?php echo $adDetails->title; ?></p>
                    <div class="meta">
                        <span class="desc <?php echo $sitePrfx; ?>-ed-sl-desc"><?php echo $adDetails->description; ?></span>
                        <span class="url <?php echo $sitePrfx . '-ed-sl-url'; ?>"><?php echo $adDetails->siteHost; ?></span>
                    </div>
                    <?php if (isset($adDetails->siteLinks) && !empty($adDetails->siteLinks)) { ?>
                        <?php
                            $ulList = '<ul class="clearfix site-links ' . $sitePrfx . '-ed-sl-sitelinks-ul">';
                                foreach ($adDetails->siteLinks as $siteLink) {
                                    if (isset($siteLink['title'])) {
                                    $ulList .= '<li class="link-wrp ' . $sitePrfx . '-ed-sl-sitelinks-li"><a ' . $adDetails->anchorAttributes . ' class="track_click link" href="' . $siteLink['clickUrl'] . '" target="_blank"> ' . $siteLink['title'] . '</a></li>';
                                    }
                                }
                            echo $ulList . '</ul>';
                        ?>
                    <?php } ?>
                    <div class="<?php echo $sitePrfx; ?>-ed-sl-extension-wrap ed-extension-wrap">
						<?php echo $this->element('AdExtensions',['adDetails' => $adDetails],['plugin' => 'ArbPlugin']); ?>
                    </div>
                <?php if ($adDetails->showCta) {?>
                <div class="seeit <?php echo $sitePrfx; ?>-ed-sl-cta">
                    <div class="seeit-txt">
                        <span><?php echo (isset($adDetails->ctaText)) ? $adDetails->ctaText : 'SEE IT'; ?></span>
                    </div>
                    <div class="seeit-arw"></div>
                </div>
                <?php } ?>
                <a <?php echo $adDetails->anchorAttributes; ?> href="<?php echo $adDetails->clickUrl; ?>" class="track_click overlay-all <?php echo $sitePrfx; ?>-ed-sl-clicklink" target="_blank" aria-label="<?php echo $adDetails->title; ?>"></a>
            </div>
        </li>
        <?php  } ?>
    </ul>
</div>
<?php } ?>