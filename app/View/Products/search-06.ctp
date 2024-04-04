<?php // 03 map for outbrain 
?>
<style type="text/css">
    .serp-page .search-block {
        display: none !important;
    }

    .header .search-bar {
        display: none
    }

    .serp-page .pull-right {
        display: none !important;
    }

    .serp-page footer {
        display: none;
    }

    .in247s-top-ed {
        margin-bottom: 0 !important;
    }

    .footer-links {
        text-align: center;
        padding: 0px 0 20px;
    }

    .footer-links ul li {
        display: inline-block;
        color: #151515;
    }

    .footer-links ul li a {
        font-size: 13px;
        color: #151515;
        text-transform: uppercase;
        display: inline-block;
        font-weight: 500;
    }

    .footer-links ul li a:hover {
        text-decoration: underline;
    }

    @media only screen and (max-width:1024px) {
        .header .logo {
            left: 0;
            transform: none
        }
    }
</style>
<div class="container">
    <?php
    $topAdSiteData = [
        'elementsData' => [
            'Rank' => [
                'isEnabled' => true,
                'showDot' => true
            ],
            'SiteLinks' => [
                'bulletIcon' => '<svg class="sitelink-arrow" width="44px" height="33px" viewBox="0 0 44 33" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="A1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon id="Path" fill="#FFFFFF" transform="translate(22.000000, 17.000000) rotate(-90.000000) translate(-22.000000, -17.000000) " points="9 17.7614668 18.5891544 27.3561232 18.5891544 -5 25.410243 -5 25.410243 27.0554781 35 17.4585245 35 27.0554781 21.9412289 39 9 27.0554781"></polygon></g></svg>',
            ],
        ]
    ];
    echo $this->element(
        UI_TOP_ADS,
        [
            'siteData' => $topAdSiteData
        ],
        ['plugin' => 'ArbPlugin']
    );
    ?>
    <div class="footer-links">
        <ul>
            <li><a href="/about-us" target="_blank">ABOUT US</a>&nbsp;&nbsp;|&nbsp;</li>
            <li><a href="/contact-us" target="_blank">CONTACT US</a> &nbsp;|&nbsp;</li>
            <li><a href="/privacy-policy" target="_blank">PRIVACY POLICY</a> </li>
        </ul>
    </div>
</div>