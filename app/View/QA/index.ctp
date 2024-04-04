<div class="faq-pg">
    <div class="faq-bg">
        <div class="container">
            <div class="faq-upper clearfix">
                <div class="faq-left">
                    <div class="title-wrp">
                        <p class="title">FAQs</p>
                    </div>
                    <div class="mob-img"></div>
                    <div class="search">
                        <p class="heading">How Can we help you ? </p>
                        <form role="search" method="get" id="qa-form">
                            <div class="input">
                                <input type="text" class="txt" placeholder="Start Searching Your Question"  name="k" id="search" required>
                                <input type="submit" class="btn" value="" id="btn">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="faq-right">
                      <div class="faq-img"></div>
                </div>   
            </div>
            <div class="faq-bottom">
                <p class="title">Getting Started</p>
                <p class="desc">Find the most frequently asked questions below</p>
                <div class="qa-listings">
                    <?= $this->element('QAListing') ?>
                </div>
            </div>
        </div>
    </div>
</div>