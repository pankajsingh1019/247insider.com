
<style>
/* Trending Imnages */
.trending .serp-title{font-size:22px;font-weight:700;color:#4d426d;margin-bottom:18px;}
.trending ul{background: #f8f8f8;}
.trend-heading{font-size:18px; line-height:24px; color:#333; font-weight:600; margin-bottom:23px; text-transform:uppercase}
.trending-img{width: 300px; max-width: 100%; margin: 0 auto 25px;}
.trending-img .heading { background: #f8f8f8; padding: 25px 20px 10px;}
.trending{width: 300px; max-width: 100%; margin: 0 auto 22px;}
.trending .col{width: 49%; overflow: hidden; padding:3px;background: #f8f8f8;margin:0;}
.trending .col:nth-child(odd){border-right: 0;}
.trending .col:nth-of-type(n+3){border-top: 0;}
.trending .col a{height: 150px; display: block; background: #fff;padding: 17px;}
.trending .col a:hover{border-color: #cf1d37}
.trending .col a img{position: relative; top: 50%;left:50%; -webkit-transform: translateY(-50%); transform: translate(-50%, -50%);height:auto;max-height:150px;}
.mob .trending{width:95%;margin-top:15px;}

</style>

<div class="trending">
    <p class="serp-title">Trending Images</p>
	<ul class="clearfix">
	 <?php
        $start = 1;
        $show_count = 4;
        $count = 0;
        foreach ($ImagesToDisplay->products as $productIndex => $imageDetails) {
            $count++;
            if ($count < $start)
                continue;
            if ($count > $show_count)
                break;
            ?>
		<li class="pull-left col az-im-Serp-tgt">
			 <a <?php echo $imageDetails->anchorAttributes; ?> href="<?php echo $imageDetails->clickUrl; ?>" target="_blank">
			 	<img data-src="<?php echo $imageDetails->thumbnailUrl ?>" src="<?php echo $imageDetails->thumbnailUrl ?>" class="img-responsive" alt="product image">
			 </a>
		</li>
		<?php } ?>
	</ul>
</div>

