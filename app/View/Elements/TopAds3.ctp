<?php // map for outbrain ?>

<style type="text/css">
body {font-family: 'ubuntu',sans-serif; color: #000 !important; background: #fff !important;}
/*******Search Page*********/
.header .search-bar{display:none}
.header .logo{cursor:default;}
footer{display:none}
.query-results-two {color: #000; font-size: 13px; margin-bottom: 0; margin: 5px 0; position: relative; padding: 0; word-wrap: break-word;}
.query-results-two .res-txt{display: inline-block;width:calc(100% - 138px);word-break: break-word;}
.query-results-two .spon-txt{display: inline-block;width:134px;vertical-align: bottom;text-align: right;}
.top-eds-wrap-two .top-ed-list-two {background-color: #3ecdbb;
background-image: linear-gradient(90deg, #3ecdbb 0%, #32b2a2 100%);
min-height: 104px;position: relative;text-align: left; overflow: hidden; display: block; width: 100%; margin:0 0 22px;  box-shadow: -0.977px 2.837px 18px 0px rgba(195, 195, 195, 0.38);}
.top-eds-wrap-two .top-ed-list-two:last-child{margin: 0;}
.top-eds-wrap-two .top-ed-list-two a.mainanchor{position: relative; overflow: hidden; display: block; background: url(data:image/gif;base64,R0lGODlhAQABAPAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==
) repeat;width: 100%; padding: 15px 87px 15px 80px;}
.top-eds-wrap-two .top-ed-list-two .num {text-align: center; position: absolute; top: 50%; left: 20px; font-size: 30px; color: #fff; font-weight: 600; transform:translateY(-50%);}
.top-eds-wrap-two .top-ed-list-two .title {font-size: 20px; line-height: 26px; padding-bottom: 1px; word-wrap: break-word; color: #fff;font-weight:400}
.top-eds-wrap-two .top-ed-list-two .title *{color:inherit;font-size:inherit;font-weight:inherit}
.top-eds-wrap-two .top-ed-list-two .desc {font-size: 15px; line-height: 22px; word-wrap: break-word;color: #fff;}
.top-eds-wrap-two .top-ed-list-two .desc *{color:inherit;font-size:inherit;font-weight:inherit}
.top-eds-wrap-two .top-ed-list-two .rating{width: 127px; height: 16px;background:url(assets/img/ratings.png) no-repeat center;margin: 0 0 10px;}
.top-eds-wrap-two .top-ed-list-two .url{font-size: 14px;line-height: 22px;margin: 0 0 5px;overflow: hidden;color: #fff;text-decoration: underline;}
.top-eds-wrap-two .top-ed-list-two .url *{color:inherit;font-size:inherit;font-weight:inherit}
.top-eds-wrap-two .top-ed-list-two .edx-seeit-btn {position: absolute; width: auto; right: 20px; top: 50%; margin-top: -38px; font-size: 17px; color: #fff; text-transform: uppercase; font-weight: 600;background: url(data:image/gif;base64,R0lGODlhAQABAPAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==); }
.top-eds-wrap-two .top-ed-list-two .cta {width: 45px; height: 45px; position: relative; top: 4px; display: block;border-radius: 50%;box-shadow: -1.04px 4.891px 13px 0px #068863; background:#fff url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAVCAYAAAB2Wd+JAAAAAXNSR0IArs4c6QAAAgBJREFUOBGVVEFrE0EUfm+22OLBH2CT/QOVgpBjpYemQmsrlGoFUbAKLhS0t/bQHnvx6qH20mYjvbQVwdYIetOTnopuNwe9JRALBlIs7e5q1uebJZPMbtJAHwvvzbffN/Nm5tsFaETKzT1Ju/YqD1Fh3XJESjv2EgpckUQielkuFh7CzE7YVWge2M8AcUEnEcBW2fPvQ8b6q+N6LYCwwkR+WsFt3En39b6Cd897W2i8ilo1XfsxK18goNBfc9sfQj+YqmSsUx2XdfMgUk7+HstsBgydxBN+9Gr1yerQo2MdbwolaLq520Bik6e7oJMI6PPxHxo7ujp7pPCYUIL9zsaEIcQON9OnSI28X/f869x2VY7bhBI0v21kSYg3iHhRjptBVPSQRn4NzB52FEpi+mvuGvaIt1xeagq54D1/D8EfPVMoyaabtzityVoPeWBnCk13fQigp8CCxIr0I4QgG7s3NWu0RzLeJ0Xsx6LnBcOVAavUJux37BtgiL22gwHYr/vBcDVj/ZQLxISpA3vaQHydvAre0xcIT0bUVcSEkXMQtzpc/id2zmhpcK4mBSqiFaVXUVCeTypuN+lVLxhL2k2Khenk5wlwrYPBd8ul3zc7GTwSAtJlXil2LezN7bIf3ILxp4FqLZlF6cqDRfpHy+pF9AdwC3e7fcSKG+Xz/nP+A9iAxiEZvj2OAAAAAElFTkSuQmCC') no-repeat center center; }

.top-eds-wrap-two .top-ed-list-two .tped__sitelinks {overflow: hidden; margin: 0 180px 15px 100px; position: relative; z-index: 2; }
.top-eds-wrap-two .top-ed-list-two .tped__sitelinks-item {position: relative; width: 30%; display: block; overflow: hidden; padding: 0 10px 0 0; float: left;
 }
.top-eds-wrap-two .top-ed-list-two a.tped__sitelinks-anchor {color: #1d376a; text-transform: capitalize; font-size: 14px; padding: 0 0 0 20px;word-break: break-all; background: url('data:image/png;base64,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UmVhZHlxyWU8AAADJmlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDIgNzkuMTYwOTI0LCAyMDE3LzA3LzEzLTAxOjA2OjM5ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxOCAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NzZCRDE3ODg4RjMwMTFFOEI2QzhCQjFENzdBMUQ0MkUiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NzZCRDE3ODk4RjMwMTFFOEI2QzhCQjFENzdBMUQ0MkUiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo3NkJEMTc4NjhGMzAxMUU4QjZDOEJCMUQ3N0ExRDQyRSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo3NkJEMTc4NzhGMzAxMUU4QjZDOEJCMUQ3N0ExRDQyRSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PljYdmYAAACmSURBVHjaYpQ1z2IAgliAAGIAMQACiBFI3GWAACGAAGKESn0DYi4mIAGSeQ7E/wECCCaDDF4BcQcTmqAzEAsDcR9AACHr8APidUDMAuIg69gExGZA/I8BKnsXzThGIK4ESSgjCX4G4gwgngkQYNhcBQP2UON5gDgbiGeAjUPyLS4gBMQCUHYtutXowByIt4ECCIiLgHgCCw6FgUC8HOrJJCBeBJMAABciHFSUQ8eJAAAAAElFTkSuQmCC') no-repeat left center; }
.top-eds-wrap-two .top-ed-list-two .fullclick-cta {position: absolute; left: 0; right: 0; top: 0; bottom: 0; display: block; z-index: 1; }


.top-eds-wrap-two .top-ed-list-two:hover{background: #fff; filter:none;}
.top-eds-wrap-two .top-ed-list-two:hover .num{color:#4d426d;}
.top-eds-wrap-two .top-ed-list-two:hover .url,.top-eds-wrap-two .top-ed-list-two:hover .title, .top-eds-wrap-two .top-ed-list-two:hover .desc {color: #4d426d;}
.top-eds-wrap-two .top-ed-list-two:hover .rating{background:url(assets/img/ratings-hover.png) no-repeat center; }
.top-eds-wrap-two .top-ed-list-two:hover .edx-seeit-btn{color: #4d426d; cursor:pointer;}
.top-eds-wrap-two .top-ed-list-two:hover .cta {background: #3ecdbb url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAVCAYAAAB2Wd+JAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQyIDc5LjE2MDkyNCwgMjAxNy8wNy8xMy0wMTowNjozOSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTggKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjc4MEYyMEQ1ODhGNTExRThBRTU0QkUxRDg0RTVGNTUwIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjc4MEYyMEQ2ODhGNTExRThBRTU0QkUxRDg0RTVGNTUwIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NzgwRjIwRDM4OEY1MTFFOEFFNTRCRTFEODRFNUY1NTAiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NzgwRjIwRDQ4OEY1MTFFOEFFNTRCRTFEODRFNUY1NTAiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz49u8eNAAAA3klEQVR42mL4//8/AxTnAvE0IGZEEsOJYYzq/wiwEIiZidHY+R8TrABiVnwamRgYGJ4BMdAIFBAOxGuAmJ0BF4CakAbEf7HYvBOIufD5EYRjgPgPFs0HgJgXn0YQDgXin1g0HwdiAXwaQdgHiL9j0XwOiEXwaQRhFyD+ikXzVSCWwKcRhG2B+CMWzTeBWI5QCkn/jx0cwKfJBoeNt/DZiM+Pkrj86E1OqAbjiMcTQCxIaso5iC/lkJVW84H4HxZNG4GYHV+2kgJiRrRMswqIQ4D4J6FsRVYJQFaZAxBgADSWg10lvcRAAAAAAElFTkSuQmCC') no-repeat center;}
/* .top-eds-wrap-two .top-ed-list-two .title b, .top-eds-wrap-two .top-ed-list-two .title strong{font-weight:400; } */
/* .top-eds-wrap-two .top-ed-list-two .desc b, .top-eds-wrap-two .top-ed-list-two .desc strong{font-weight:400; } */

/* annot styling */
.top-eds-wrap-two .top-ed-list-two.rank-annot-hide.img-annot-hide a.mainanchor{padding-left:15px}
.top-eds-wrap-two .top-ed-list-two.rank-annot-hide a.mainanchor{padding-left:15px}
.top-eds-wrap-two .top-ed-list-two.cta-annot-hide a.mainanchor{padding-right:15px}
.top-eds-wrap-two .top-ed-list-two.site-links-annot-hide .hardcoded-list ul li {background: none; padding-left: 0}
.top-eds-wrap-two .top-ed-list-two.site-links-annot-hide .site-links li {margin-left: 0}
.top-eds-wrap-two .top-ed-list-two.rank-annot-hide .hardcoded-list {padding-left: 15px}
.top-eds-wrap-two .top-ed-list-two.rank-annot-hide.img-annot-hide .hardcoded-list {padding-left: 15px}
.top-eds-wrap-two .ap-ed-unit-headline-wrapper {font-weight: 400; color: #000; font-size: 13px; margin: 5px 0; }
.ap-ed-unit-headline-wrapper .ap-ed-unit-headline-keyword-text {text-transform: none}
.top-eds-wrap-two .ed-extn { font-size: 15px; color: #fff; }
.top-eds-wrap-two .top-ed-list-two:hover .ed-extn,
.top-eds-wrap-two .top-ed-list-two:hover .ed-extension-wrap .ed-review {color: #000}

@media screen and (max-width: 767px) {
	/* .top-eds-wrap-two .top-ed-list-two.rank-annot-hide.img-annot-hide .title-copy {padding-left:0; width: 100%} */
	
.top-eds-wrap-two .top-ed-list-two.rank-annot-hide.img-annot-hide a.mainanchor{padding-left:10px}
.top-eds-wrap-two .top-ed-list-two.rank-annot-hide a.mainanchor{padding-left:10px}
.top-eds-wrap-two .top-ed-list-two.cta-annot-hide a.mainanchor{padding-right:10px}
.top-eds-wrap-two .top-ed-list-two.rank-annot-hide .hardcoded-list {padding-left: 10px}
.top-eds-wrap-two .top-ed-list-two.rank-annot-hide.img-annot-hide .hardcoded-list {padding-left: 10px}
}
@media only screen and (max-width:1024px) {
    .header .logo{left:0;transform:none}
}


@media only screen and (max-width:767px) {

	/******top-ed-css******/
	.query-results-two{font-size: 13px;}
	.top-eds-wrap-two .top-ed-list-two a.mainanchor{display: block;padding: 15px 80px 15px 50px;}
	.top-eds-wrap-two .top-ed-list-two .title{font-size: 16px;line-height: 22px;margin: 0 0  5px;}
	.top-eds-wrap-two .top-ed-list-two .title *{color:inherit;font-size:inherit;font-weight:inherit;}
	.top-eds-wrap-two .top-ed-list-two .desc{font-size: 14px; line-height: 20px;}
	.top-eds-wrap-two .top-ed-list-two .desc *{color:inherit;font-size:inherit;font-weight:inherit}
	.top-eds-wrap-two .top-ed-list-two .url{font-size: 14px;line-height: 22px;}
	.top-eds-wrap-two .top-ed-list-two .url *{color:inherit;font-size:inherit;font-weight:inherit}
	.top-eds-wrap-two .top-ed-list-two .num {text-align: center; position: absolute; top: 19px; margin-top: 0; left: 10px;font-size: 24px; transform:none} 
	.top-eds-wrap-two .top-ed-list-two .edx-seeit-btn{bottom: 20px; top: auto;}
	.top-eds-wrap-two .top-ed-list-two .cta-txt{display: none;}
	.top-eds-wrap-two .top-ed-list-two .tped__sitelinks{margin: 0 85px 15px 50px;}
	.top-eds-wrap-two .top-ed-list-two .tped__sitelinks-item{width: 50%;}
	/****top ed css end****/
}

@media only screen and (max-width:400px) {
.top-eds-wrap-two .top-ed-list-two .tped__sitelinks-item{width: auto; float: none;padding: 0;    margin: 0 0 4px;}

}
/* custom */
.serp-page .news-letter{
	display:none;
}
.search-wrapper{
	min-height: calc(100vh - 400px);
} 
.serp-page .search-block{
		display:none !important;
	}	
	.serp-page .pull-right{
		display:none !important;
	} 
.serp-page .footer{
	display:none;
}
.serp-page .disc-coup{
	display:none;
}
.footer-links{
	text-align:center;
	padding:20px 0;
}
.footer-links ul li{
	display:inline-block;
}
.footer-links ul li a{
font-size: 13px;
    color: #151515;
    text-transform: uppercase;
	display: inline-block;
	font-weight:500;
}
.footer-links ul li a:hover{
	text-decoration:underline;
}
.hardcoded-list ul li {
	display:inline-block;
	padding-left:20px;
	padding-right:10px;
	background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAICAYAAADN5B7xAAAAAXNSR0IArs4c6QAAAG5JREFUGBljYMAO/IDC34D4DxDHYleCKWoPFPoIxH+BOANTGruIEVD4FRD/A+IikBIWIL4LYuABrEA5RiDuBWIuJjwKsUmBnIcXmANl3wIxyEkFeFUCJZ2B+DMQg0xNB2K8IBAo+wOIQcEah6wSACwJEgtOL9DeAAAAAElFTkSuQmCC') no-repeat left center;
	background-position:left top 4px;
	width:25%;
	float:left;
	font-size:14px;
	margin-bottom:15px;
	word-break:break-word;
	z-index:222;
	position:relative;
	line-height:17px;
	
}
.hardcoded-list ul li:nth-child(2) {
	margin-left:10px;
}
.hardcoded-list{
			padding:0 0px 0 100px;
		}

@media only screen and (max-width:676px) {
	.hardcoded-list ul li {
		width:90%;
		
	}
	.hardcoded-list ul li:nth-child(2){
	margin-left:0px;
}
}
@media only screen and (max-width:767px) {
		.hardcoded-list{
			padding:0 50px;
		}
	}
	.dd-header{
		height:70px;
		box-shadow: -1.816px 3.564px 7.36px 0.64px rgba(0, 0, 0, 0.04);
	}.header-logo-link{cursor:default !important;}
/* end of custom*/
</style>


<div class="search-wrapper">
	<section class="top-eds-wrap-two">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="search-toped">
					<!-- eds start -->
					
					<?php if ($response->showTopAds) { ?>
					<?php $sitePrfx = Configure::read('site_initials'); ?>
					
						<div class="eds-wrapper mb-5 <?php echo $sitePrfx; ?>-ed-sl-top-wrapper">
							<?php echo $this->element('TopAdUnitHeadLine', array(), array('plugin' => 'ArbPlugin')); ?>

							<div class="edswrap">
								<div class="row cklf__trb">
									<div class="col-xs-12 <?php echo $sitePrfx; ?>-ed-sl-ul">
									<?php foreach ($response->topAds as $adIndex => $adDetails) { 
									$classList = [];
									$classList[] = $adDetails->showImage ? 'img-annot' : 'img-annot-hide';
									$classList[] = $adDetails->showRank ? 'rank-annot' : 'rank-annot-hide';
									$classList[] = $adDetails->showRating ? 'rating-annot' : 'rating-annot-hide';
									$classList[] = $adDetails->showCta ? 'cta-annot' : 'cta-annot-hide';
									$classList[] = $adDetails->showSiteLinksAnnotations ? 'site-links-annot' : 'site-links-annot-hide';?>

										<div class="edx-block top-ed-list-two topEd-tgt <?php echo implode(' ', $classList); ?> <?php echo $sitePrfx; ?>-ed-sl-li">
											<?php if ($adDetails->showRank) { ?>
											<span class="numwrap num <?php echo $sitePrfx;  ?>-ed-sl-rank">0<?php echo ($adDetails->rank); ?>.</span>
											<?php } ?>

											<a <?php echo $adDetails->anchorAttributes; ?> href="<?php echo $adDetails->clickUrl; ?>" class=" mainanchor track_click" target="_blank">
												<div class="edx-textbox">
													<h2 class="title <?php echo $sitePrfx . '-ed-sl-title'; ?>"><?php echo $adDetails->title; ?></h2>
													<p class="url <?php echo $sitePrfx . '-ed-sl-url'; ?>"><?php echo $adDetails->siteHost; ?></p>
													<p class="desc <?php echo $sitePrfx; ?>-ed-sl-desc"><?php echo $adDetails->description; ?></p>
												</div>
												<div class="<?php echo $sitePrfx; ?>-ed-sl-extension-wrap ed-extension-wrap">
													<?php echo $this->element('AdExtensions',['adDetails' => $adDetails],['plugin' => 'ArbPlugin']); ?>
												</div>
											</a>
											<?php if (isset($adDetails->siteLinks) && !empty($adDetails->siteLinks)) { ?>
											<div class="hardcoded-list">
												<ul class="clearfix <?php echo $sitePrfx; ?>-ed-sl-sitelinks-ul">
												<?php foreach ($adDetails->siteLinks as $siteLink) {
													if (isset($siteLink['title'])) { ?>
													<li class="<?php echo $sitePrfx; ?>-ed-sl-sitelinks-li">
														<a <?php echo $adDetails->anchorAttributes; ?> class="track_click" target="_blank" href="<?php echo $siteLink['clickUrl']; ?>"><?php echo $siteLink['title']; ?></a>
													</li>
												<?php }
												} ?>
												</ul>
											</div>
											<?php } ?>

											<?php if ($adDetails->showCta) {?>
											<a <?php echo $adDetails->anchorAttributes; ?> href="<?php echo $adDetails->clickUrl; ?>" target="_blank" class="<?php echo $sitePrfx; ?>-ed-sl-cta track_click">
												<div class="edx-seeit-btn">
													<span class="cta-txt"><?php echo (isset($adDetails->ctaText)) ? $adDetails->ctaText : 'SEE IT'; ?></span>
													<span class="cta"></span>
												</div>
											</a>
											<?php } ?>

											<a <?php echo $adDetails->anchorAttributes; ?> href="<?php echo $adDetails->clickUrl; ?>" class="track_click fullclick-cta <?php echo $sitePrfx; ?>-ed-sl-clicklink" target="_blank"></a>	

										</div>
									<?php } ?>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
					<!-- eds ends -->
					</div>
				</div>
			</div>	
			<div class="footer-links">
			<ul>
			<li><a href="/about-us" target="_blank">ABOUT US&nbsp;&nbsp;|</a></li>
			<li><a href="/contact-us" target="_blank">&nbsp;CONTACT US &nbsp;|</a></li>
			<li><a href="/privacy-policy" target="_blank">&nbsp;PRIVACY POLICY</a> </li>
			</ul>
		</div>
		</div>
	</section>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $(".header-wrp a"). removeAttr("target");
        $(".header-wrp a"). removeAttr("href");
    });
</script>
