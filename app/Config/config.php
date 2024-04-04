<?php 
$config = array();
Configure::delete('remarketing_id');
Configure::delete('group_remarketing_tag');
Configure::delete('keyword_for_testing');
Configure::delete('global_script');
Configure::delete('recaptcha_secret');
Configure::delete('recaptcha_site_key');
Configure::delete('last_modified_time');
Configure::delete('site_name');
 $config['site_name'] = '247insider';
Configure::delete('top_level_domain');
 $config['top_level_domain'] = '.com';
Configure::delete('display_name');
 $config['display_name'] = '247Insider.com';
Configure::delete('country');
 $config['country'] = 'us';
Configure::delete('default_account');
 $config['default_account'] = 'google_search';
Configure::delete('default_source');
 $config['default_source'] = 'connexity';
Configure::delete('account_details');
 $config['account_details'] = array (
  'google_search' => 
  array (
    'name' => '247Insider.com (Search)',
    'account_id' => '1526208909',
    'customer_id' => '8CU68B5T1',
    'url_pattern' => '/topic/18/',
    'kbb_source_tag' => 
    array (
      'd' => 'mnet_d2s_xml_2213_skenzosearch1723',
      'm' => 'mnet_d2s_xml_2214_mnet_mobile1580_search',
    ),
    'management_group' => 'O&O',
    'conversion_id' => '707737969',
    'conversion_label' => 'RiQECIjw2L8BEPHyvNEC',
  ),
  'google_display' => 
  array (
    'name' => '247Insider.com (Display)',
    'account_id' => '8455614678',
    'customer_id' => '8CUXH67V1',
    'url_pattern' => '/topic/19/',
    'management_group' => 'O&O',
    'kbb_source_tag' => 
    array (
      'd' => 'mnet_d2s_xml_2213_skenzosearch1723',
      'm' => 'mnet_d2s_xml_2214_mnet_mobile1580_search',
    ),
    'conversion_id' => '707737771',
    'conversion_label' => 'n-ONCLi10b8BEKvxvNEC',
  ),
  'bing' => 
  array (
    'name' => '247Insider.com (Bing)',
    'account_id' => '144009214',
    'customer_id' => '8CU3FK3N8',
    'url_pattern' => '/topic/20/',
    'management_group' => 'O&O',
    'kbb_source_tag' => 
    array (
      'd' => 'mnet_d2s_xml_2213_skenzosearch1723',
      'm' => 'mnet_d2s_xml_2214_mnet_mobile1580_search',
    ),
    'conversion_id' => '',
    'conversion_label' => '',
  ),
  'outbrain' => 
  array (
    'name' => '247insider.com (Outbrain) 152',
    'account_id' => '888888244',
    'customer_id' => '8CUWH47DB',
    'url_pattern' => '/topic/24/',
    'management_group' => 'O&O',
    'kbb_source_tag' => 
    array (
      'd' => 'mnet_d2s_xml_2213_skenzosearch1723',
      'm' => 'mnet_d2s_xml_2214_mnet_mobile1580_search',
    ),
    'conversion_pixel_id' => '00ea3c289e69c944a814878f291bbaf579',
    'conversion_action_name' => 'AdClicked',
  ),
  'taboola' => 
  array (
    'name' => '247insider.com (Taboola)',
    'account_id' => '1296178',
    'customer_id' => '8CUJT323N',
    'url_pattern' => '/topic/23/',
    'management_group' => 'O&O',
    'kbb_source_tag' => 
    array (
      'd' => 'mnet_d2s_xml_2213_skenzosearch1723',
      'm' => 'mnet_d2s_xml_2214_mnet_mobile1580_search',
    ),
    'conversion_pixel_id' => '1296178',
    'conversion_action_name' => 'AdClicked',
  ),
);
Configure::delete('type_of_site');
 $config['type_of_site'] = 'hybrid';
Configure::delete('default_template_setting_id');
 $config['default_template_setting_id'] = 'TS-GS-1';
Configure::delete('account_settingId_map');
 $config['account_settingId_map'] = array (
  'google_search' => 
  array (
    0 => 'TS-GS-1',
  ),
  'google_display' => 
  array (
    0 => 'TS-GD-1',
  ),
  'bing' => 
  array (
    0 => 'TS-B-1',
  ),
  'outbrain' => 
  array (
    0 => 'TS-O-1',
  ),
  'taboola' => 
  array (
    0 => 'TS-T-1',
  ),
);
Configure::delete('settingId_account_map');
 $config['settingId_account_map'] = array (
  'TS-GS-1' => 'google_search',
  'TS-GD-1' => 'google_display',
  'TS-B-1' => 'bing',
  'TS-O-1' => 'outbrain',
  'TS-T-1' => 'taboola',
);
Configure::delete('remarketing_id');
 $config['remarketing_id'] = '760206374';
Configure::delete('recaptcha_secret');
 $config['recaptcha_secret'] = '6Ld45hgUAAAAAHMrhJtR89oO-UWDYxaBCGvoxf1J';
Configure::delete('recaptcha_site_key');
 $config['recaptcha_site_key'] = '6Ld45hgUAAAAAJB-4oy0dIPXwYRUscax-LDpYbSi';
Configure::delete('keyword_for_testing');
 $config['keyword_for_testing'] = 'insurance';
Configure::delete('global_script');
 $config['global_script'] = NULL;
Configure::delete('other_page_details');
 $config['other_page_details'] = array (
  'category_page' => 
  array (
    'device_details' => 
    array (
      'd' => 
      array (
        'product_getter' => 
        array (
          'row_count' => 6,
          'column_count' => 4,
          'filter_bucket_count' => 5,
        ),
        'banners' => 
        array (
          'dfp' => 
          array (
            'values' => 
            array (
              0 => 
              array (
                'ad_unit_path' => '/45361917/247insider.com-CategoryPage-300x250',
                'width' => 300,
                'height' => 250,
                'opt_div_id' => 'div-gpt-ad-1579522459523-0',
              ),
            ),
          ),
        ),
      ),
      'm' => 
      array (
        'product_getter' => 
        array (
          'row_count' => 6,
          'column_count' => 4,
          'filter_bucket_count' => 5,
        ),
        'banners' => 
        array (
          'dfp' => 
          array (
            'values' => 
            array (
            ),
          ),
        ),
      ),
    ),
  ),
  'detail_page' => 
  array (
    'device_details' => 
    array (
      'd' => 
      array (
        'product_getter' => 
        array (
          'related_product_section' => 
          array (
            'row_count' => 3,
            'column_count' => 4,
          ),
        ),
        'comparison_store_required' => true,
        'banners' => 
        array (
          'dfp' => 
          array (
            'values' => 
            array (
              0 => 
              array (
                'ad_unit_path' => '/45361917/247insider.com-ProductPage-728x90',
                'width' => 728,
                'height' => 90,
                'opt_div_id' => 'div-gpt-ad-1579522567282-0',
              ),
            ),
          ),
        ),
      ),
      'm' => 
      array (
        'product_getter' => 
        array (
          'related_product_section' => 
          array (
            'row_count' => 2,
            'column_count' => 4,
          ),
        ),
        'comparison_store_required' => true,
        'banners' => 
        array (
          'dfp' => 
          array (
            'values' => 
            array (
              0 => 
              array (
                'ad_unit_path' => '/45361917/247insider.com-ProductPage-300x250',
                'width' => 300,
                'height' => 250,
                'opt_div_id' => 'div-gpt-ad-1579522593184-0',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
Configure::delete('search_page_template');
 $config['search_page_template'] = array (
  'TS-GS-1' => 
  array (
    'device_details' => 
    array (
      'd' => 
      array (
        'ad_details' => 
        array (
          'top' => 
          array (
            'keyword_type' => 'sell_keyword',
            'fallback_keyword_type' => 'sell_keyword',
            'ads_count' => 3,
            'kbb_image_required' => true,
            'callout_required' => false,
            'review_required' => false,
            'fourth_line_required' => false,
            'top-ads_extension_required' => false,
            'security_badge_required' => false,
            'brand_required' => false,
            'site_link_count' => 
            array (
              1 => 2,
              2 => 2,
              3 => 2,
              4 => 2,
            ),
            'headline' => 
            array (
              'prefix' => 'results_for_text',
              'suffix' => 'sponsored_links_text',
            ),
            'template_details' => 
            array (
              'layout' => 'List-01',
              'sequence' => 'Sequence-12',
              'theme' => 'List-Default',
              'cta_icon' => 'Arrow-04',
            ),
          ),
          'same_top_bottom' => true,
          'bottom' => 
          array (
            'keyword_type' => 'sell_keyword',
            'fallback_keyword_type' => 'sell_keyword',
            'ads_count' => 3,
            'kbb_image_required' => true,
            'callout_required' => false,
            'review_required' => false,
            'fourth_line_required' => false,
            'top-ads_extension_required' => false,
            'security_badge_required' => false,
            'brand_required' => false,
            'site_link_count' => 
            array (
              1 => 2,
              2 => 2,
              3 => 2,
              4 => 2,
            ),
            'headline' => 
            array (
              'prefix' => 'results_for_text',
              'suffix' => 'sponsored_links_text',
            ),
            'template_details' => 
            array (
              'layout' => 'List-01',
              'sequence' => 'Sequence-12',
              'theme' => 'List-Default',
              'cta_icon' => 'Arrow-04',
            ),
          ),
        ),
        'related_keywords' => 
        array (
          'kbb' => 
          array (
            'row_count' => 10,
            'column_count' => 1,
            'keyword_type' => 'sell_keyword',
            'fallback_keyword_type' => 'organic_keyword_1',
            'headline' => 'related_searches_text',
          ),
        ),
        'product_getter' => 
        array (
          'connexity' => 
          array (
            'row_count' => 5,
            'column_count' => 1,
            'click_model_type' => 2,
            'level_of_source' => 'primary',
            'filter_details' => 
            array (
              'brand_filter_required' => false,
              'price_filter_required' => false,
              'shipping_filter_required' => false,
              'filter_bucket_count' => 6,
            ),
            'keyword_type' => 'organic_keyword_1',
            'fallback_keyword_type' => 'organic_keyword_1',
          ),
          'local-feed' => 
          array (
            'level_of_source' => 'others',
            'row_count' => 5,
            'column_count' => 1,
            'click_model_type' => 1,
            'keyword_type' => 'organic_keyword_2',
            'fallback_keyword_type' => 'organic_keyword_1',
          ),
          'senti-meta' => 
          array (
            'level_of_source' => 'secondary',
            'row_count' => 5,
            'column_count' => 1,
            'click_model_type' => '1',
            'keyword_type' => 'organic_keyword_1',
            'fallback_keyword_type' => 'organic_keyword_1',
            'template_name' => 'List-01',
          ),
        ),
        'content_details' => 
        array (
          'qna' => 
          array (
            'count' => 6,
            'source' => 'default',
            'keyword_type' => 'organic_keyword_5',
            'fallback_keyword_type' => 'sell_keyword',
          ),
        ),
        'web_result' => 
        array (
          'row_count' => 4,
          'column_count' => 1,
          'keyword_type' => 'organic_keyword_3',
          'fallback_keyword_type' => 'organic_keyword_1',
        ),
        'banners' => 
        array (
        ),
        'azure_details' => 
        array (
          'news' => 
          array (
            'row_count' => 6,
            'column_count' => 1,
            'click_model_type' => 1,
            'keyword_type' => 'organic_keyword_4',
            'fallback_keyword_type' => 'organic_keyword_1',
          ),
        ),
      ),
      'm' => 
      array (
        'ad_details' => 
        array (
          'top' => 
          array (
            'keyword_type' => 'sell_keyword',
            'fallback_keyword_type' => 'sell_keyword',
            'ads_count' => 3,
            'kbb_image_required' => false,
            'callout_required' => false,
            'review_required' => false,
            'fourth_line_required' => false,
            'top-ads_extension_required' => false,
            'security_badge_required' => false,
            'brand_required' => false,
            'site_link_count' => 
            array (
              1 => 2,
              2 => 2,
              3 => 2,
              4 => 2,
            ),
            'headline' => 
            array (
              'prefix' => 'results_for_text',
              'suffix' => 'sponsored_links_text',
            ),
            'template_details' => 
            array (
              'layout' => 'List-01',
              'sequence' => 'Sequence-09',
              'theme' => 'List-Default',
              'cta_icon' => 'Arrow-04',
            ),
          ),
          'same_top_bottom' => true,
          'bottom' => 
          array (
            'keyword_type' => 'sell_keyword',
            'fallback_keyword_type' => 'sell_keyword',
            'ads_count' => 3,
            'kbb_image_required' => false,
            'callout_required' => false,
            'review_required' => false,
            'fourth_line_required' => false,
            'top-ads_extension_required' => false,
            'security_badge_required' => false,
            'brand_required' => false,
            'site_link_count' => 
            array (
              1 => 2,
              2 => 2,
              3 => 2,
              4 => 2,
            ),
            'headline' => 
            array (
              'prefix' => 'results_for_text',
              'suffix' => 'sponsored_links_text',
            ),
            'template_details' => 
            array (
              'layout' => 'List-01',
              'sequence' => 'Sequence-09',
              'theme' => 'List-Default',
              'cta_icon' => 'Arrow-04',
            ),
          ),
        ),
        'related_keywords' => 
        array (
          'kbb' => 
          array (
            'row_count' => 1,
            'column_count' => 4,
            'keyword_type' => 'sell_keyword',
            'fallback_keyword_type' => 'organic_keyword_1',
            'headline' => 'related_searches_text',
          ),
        ),
        'product_getter' => 
        array (
          'connexity' => 
          array (
            'row_count' => 5,
            'column_count' => 1,
            'click_model_type' => 2,
            'level_of_source' => 'primary',
            'filter_details' => 
            array (
              'brand_filter_required' => false,
              'price_filter_required' => false,
              'shipping_filter_required' => false,
              'filter_bucket_count' => 4,
            ),
            'keyword_type' => 'organic_keyword_1',
            'fallback_keyword_type' => 'organic_keyword_1',
          ),
          'local-feed' => 
          array (
            'level_of_source' => 'others',
            'row_count' => 5,
            'column_count' => 1,
            'click_model_type' => 1,
            'keyword_type' => 'organic_keyword_2',
            'fallback_keyword_type' => 'organic_keyword_1',
          ),
          'senti-meta' => 
          array (
            'level_of_source' => 'secondary',
            'row_count' => 5,
            'column_count' => 1,
            'click_model_type' => '1',
            'keyword_type' => 'organic_keyword_1',
            'fallback_keyword_type' => 'organic_keyword_1',
            'template_name' => 'List-01',
          ),
        ),
        'content_details' => 
        array (
          'qna' => 
          array (
            'count' => 6,
            'source' => 'default',
            'keyword_type' => 'organic_keyword_5',
            'fallback_keyword_type' => 'sell_keyword',
          ),
        ),
        'web_result' => 
        array (
          'row_count' => 3,
          'column_count' => 1,
          'keyword_type' => 'organic_keyword_3',
          'fallback_keyword_type' => 'organic_keyword_1',
        ),
        'banners' => 
        array (
          'engagement_platform_widget' => 
          array (
            'values' => 
            array (
              0 => 
              array (
                'design' => 'top10ratings-multi-cyan-white',
                'design_fallback' => 
                array (
                  0 => 'faqs-red-darkblue',
                  1 => 'freshlyroasted-white-green',
                ),
              ),
            ),
          ),
        ),
        'azure_details' => 
        array (
          'news' => 
          array (
            'row_count' => 6,
            'column_count' => 1,
            'click_model_type' => 1,
            'keyword_type' => 'organic_keyword_4',
            'fallback_keyword_type' => 'organic_keyword_1',
          ),
        ),
      ),
    ),
    'ctp_name' => '04',
    'schedule' => 
    array (
      'day-0' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-1' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-2' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-3' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-4' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-5' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-6' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
    ),
    'ab_percent' => 100,
  ),
  'TS-GD-1' => 
  array (
    'device_details' => 
    array (
      'd' => 
      array (
        'ad_details' => 
        array (
          'top' => 
          array (
            'keyword_type' => 'sell_keyword',
            'fallback_keyword_type' => 'sell_keyword',
            'ads_count' => 2,
            'kbb_image_required' => true,
            'callout_required' => false,
            'review_required' => false,
            'fourth_line_required' => false,
            'top-ads_extension_required' => false,
            'security_badge_required' => false,
            'brand_required' => false,
            'site_link_count' => 
            array (
              1 => 2,
              2 => 2,
              3 => 2,
              4 => 2,
            ),
            'headline' => 
            array (
              'prefix' => 'results_for_text',
              'suffix' => 'sponsored_links_text',
            ),
            'template_details' => 
            array (
              'layout' => 'List-01',
              'sequence' => 'Sequence-12',
              'theme' => 'List-Default',
              'cta_icon' => 'Arrow-04',
            ),
          ),
          'same_top_bottom' => true,
          'bottom' => 
          array (
            'keyword_type' => 'sell_keyword',
            'fallback_keyword_type' => 'sell_keyword',
            'ads_count' => 2,
            'kbb_image_required' => true,
            'callout_required' => false,
            'review_required' => false,
            'fourth_line_required' => false,
            'top-ads_extension_required' => false,
            'security_badge_required' => false,
            'brand_required' => false,
            'site_link_count' => 
            array (
              1 => 2,
              2 => 2,
              3 => 2,
              4 => 2,
            ),
            'headline' => 
            array (
              'prefix' => 'results_for_text',
              'suffix' => 'sponsored_links_text',
            ),
            'template_details' => 
            array (
              'layout' => 'List-01',
              'sequence' => 'Sequence-12',
              'theme' => 'List-Default',
              'cta_icon' => 'Arrow-04',
            ),
          ),
        ),
        'related_keywords' => 
        array (
          'kbb' => 
          array (
            'row_count' => 10,
            'column_count' => 1,
            'keyword_type' => 'sell_keyword',
            'fallback_keyword_type' => 'organic_keyword_1',
            'headline' => 'related_searches_text',
          ),
        ),
        'product_getter' => 
        array (
          'connexity' => 
          array (
            'row_count' => 5,
            'column_count' => 1,
            'click_model_type' => 2,
            'level_of_source' => 'primary',
            'filter_details' => 
            array (
              'brand_filter_required' => false,
              'price_filter_required' => false,
              'shipping_filter_required' => false,
              'filter_bucket_count' => 6,
            ),
            'keyword_type' => 'organic_keyword_1',
            'fallback_keyword_type' => 'organic_keyword_1',
          ),
          'local-feed' => 
          array (
            'level_of_source' => 'others',
            'row_count' => 5,
            'column_count' => 1,
            'click_model_type' => 1,
            'keyword_type' => 'organic_keyword_2',
            'fallback_keyword_type' => 'organic_keyword_1',
          ),
          'senti-meta' => 
          array (
            'level_of_source' => 'secondary',
            'row_count' => 1,
            'column_count' => 5,
            'click_model_type' => '1',
            'keyword_type' => 'organic_keyword_1',
            'fallback_keyword_type' => 'organic_keyword_1',
            'template_name' => 'List-01',
          ),
        ),
        'content_details' => 
        array (
          'qna' => 
          array (
            'count' => 6,
            'source' => 'default',
            'keyword_type' => 'organic_keyword_5',
            'fallback_keyword_type' => 'sell_keyword',
          ),
        ),
        'web_result' => 
        array (
          'row_count' => 4,
          'column_count' => 1,
          'keyword_type' => 'organic_keyword_3',
          'fallback_keyword_type' => 'organic_keyword_1',
        ),
        'banners' => 
        array (
        ),
        'azure_details' => 
        array (
          'news' => 
          array (
            'row_count' => 6,
            'column_count' => 1,
            'click_model_type' => 1,
            'keyword_type' => 'organic_keyword_4',
            'fallback_keyword_type' => 'organic_keyword_1',
          ),
        ),
      ),
      'm' => 
      array (
        'ad_details' => 
        array (
          'top' => 
          array (
            'keyword_type' => 'sell_keyword',
            'fallback_keyword_type' => 'sell_keyword',
            'ads_count' => 2,
            'kbb_image_required' => false,
            'callout_required' => false,
            'review_required' => false,
            'fourth_line_required' => false,
            'top-ads_extension_required' => false,
            'security_badge_required' => false,
            'brand_required' => false,
            'site_link_count' => 
            array (
              1 => 2,
              2 => 2,
              3 => 0,
              4 => 2,
            ),
            'headline' => 
            array (
              'prefix' => 'results_for_text',
              'suffix' => 'sponsored_links_text',
            ),
            'template_details' => 
            array (
              'layout' => 'List-01',
              'sequence' => 'Sequence-09',
              'theme' => 'List-Default',
              'cta_icon' => 'Arrow-04',
            ),
          ),
          'same_top_bottom' => true,
          'bottom' => 
          array (
            'keyword_type' => 'sell_keyword',
            'fallback_keyword_type' => 'sell_keyword',
            'ads_count' => 2,
            'kbb_image_required' => false,
            'callout_required' => false,
            'review_required' => false,
            'fourth_line_required' => false,
            'top-ads_extension_required' => false,
            'security_badge_required' => false,
            'brand_required' => false,
            'site_link_count' => 
            array (
              1 => 2,
              2 => 2,
              3 => 2,
              4 => 2,
            ),
            'headline' => 
            array (
              'prefix' => 'results_for_text',
              'suffix' => 'sponsored_links_text',
            ),
            'template_details' => 
            array (
              'layout' => 'List-01',
              'sequence' => 'Sequence-09',
              'theme' => 'List-Default',
              'cta_icon' => 'Arrow-04',
            ),
          ),
        ),
        'related_keywords' => 
        array (
          'kbb' => 
          array (
            'row_count' => 1,
            'column_count' => 4,
            'keyword_type' => 'sell_keyword',
            'fallback_keyword_type' => 'organic_keyword_1',
            'headline' => 'related_searches_text',
          ),
        ),
        'product_getter' => 
        array (
          'connexity' => 
          array (
            'row_count' => 5,
            'column_count' => 1,
            'click_model_type' => 2,
            'level_of_source' => 'primary',
            'filter_details' => 
            array (
              'brand_filter_required' => false,
              'price_filter_required' => false,
              'shipping_filter_required' => false,
              'filter_bucket_count' => 4,
            ),
            'keyword_type' => 'organic_keyword_1',
            'fallback_keyword_type' => 'organic_keyword_1',
          ),
          'local-feed' => 
          array (
            'level_of_source' => 'others',
            'row_count' => 5,
            'column_count' => 1,
            'click_model_type' => 1,
            'keyword_type' => 'organic_keyword_2',
            'fallback_keyword_type' => 'organic_keyword_1',
          ),
          'senti-meta' => 
          array (
            'level_of_source' => 'secondary',
            'row_count' => 5,
            'column_count' => 1,
            'click_model_type' => '1',
            'keyword_type' => 'organic_keyword_1',
            'fallback_keyword_type' => 'organic_keyword_1',
            'template_name' => 'List-01',
          ),
        ),
        'content_details' => 
        array (
          'qna' => 
          array (
            'count' => 6,
            'source' => 'default',
            'keyword_type' => 'organic_keyword_5',
            'fallback_keyword_type' => 'sell_keyword',
          ),
        ),
        'web_result' => 
        array (
          'row_count' => 3,
          'column_count' => 1,
          'keyword_type' => 'organic_keyword_3',
          'fallback_keyword_type' => 'organic_keyword_1',
        ),
        'banners' => 
        array (
          'engagement_platform_widget' => 
          array (
            'values' => 
            array (
              0 => 
              array (
                'design' => 'top10ratings-multi-cyan-white',
                'design_fallback' => 
                array (
                  0 => 'faqs-red-darkblue',
                  1 => 'freshlyroasted-white-green',
                ),
              ),
            ),
          ),
        ),
        'azure_details' => 
        array (
          'news' => 
          array (
            'row_count' => 6,
            'column_count' => 1,
            'click_model_type' => 1,
            'keyword_type' => 'organic_keyword_4',
            'fallback_keyword_type' => 'organic_keyword_1',
          ),
        ),
      ),
    ),
    'ctp_name' => '05',
    'schedule' => 
    array (
      'day-0' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-1' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-2' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-3' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-4' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-5' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-6' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
    ),
    'ab_percent' => 100,
  ),
  'TS-B-1' => 
  array (
    'device_details' => 
    array (
      'd' => 
      array (
        'ad_details' => 
        array (
          'top' => 
          array (
            'keyword_type' => 'sell_keyword',
            'fallback_keyword_type' => 'sell_keyword',
            'ads_count' => 3,
            'kbb_image_required' => true,
            'callout_required' => false,
            'review_required' => false,
            'fourth_line_required' => false,
            'top-ads_extension_required' => false,
            'security_badge_required' => false,
            'brand_required' => false,
            'site_link_count' => 
            array (
              1 => 2,
              2 => 2,
              3 => 2,
              4 => 2,
            ),
            'headline' => 
            array (
              'prefix' => 'results_for_text',
              'suffix' => 'sponsored_links_text',
            ),
            'template_details' => 
            array (
              'layout' => 'List-01',
              'sequence' => 'Sequence-12',
              'theme' => 'List-Default',
              'cta_icon' => 'Arrow-04',
            ),
          ),
          'same_top_bottom' => true,
          'bottom' => 
          array (
            'keyword_type' => 'sell_keyword',
            'fallback_keyword_type' => 'sell_keyword',
            'ads_count' => 3,
            'kbb_image_required' => true,
            'callout_required' => false,
            'review_required' => false,
            'fourth_line_required' => false,
            'top-ads_extension_required' => false,
            'security_badge_required' => false,
            'brand_required' => false,
            'site_link_count' => 
            array (
              1 => 2,
              2 => 2,
              3 => 2,
              4 => 2,
            ),
            'headline' => 
            array (
              'prefix' => 'results_for_text',
              'suffix' => 'sponsored_links_text',
            ),
            'template_details' => 
            array (
              'layout' => 'List-01',
              'sequence' => 'Sequence-12',
              'theme' => 'List-Default',
              'cta_icon' => 'Arrow-04',
            ),
          ),
        ),
        'related_keywords' => 
        array (
          'kbb' => 
          array (
            'row_count' => 10,
            'column_count' => 1,
            'keyword_type' => 'sell_keyword',
            'fallback_keyword_type' => 'organic_keyword_1',
            'headline' => 'related_searches_text',
          ),
        ),
        'product_getter' => 
        array (
          'connexity' => 
          array (
            'row_count' => 5,
            'column_count' => 1,
            'click_model_type' => 2,
            'level_of_source' => 'primary',
            'filter_details' => 
            array (
              'brand_filter_required' => false,
              'price_filter_required' => false,
              'shipping_filter_required' => false,
              'filter_bucket_count' => 6,
            ),
            'keyword_type' => 'organic_keyword_1',
            'fallback_keyword_type' => 'organic_keyword_1',
          ),
          'local-feed' => 
          array (
            'level_of_source' => 'others',
            'row_count' => 5,
            'column_count' => 1,
            'click_model_type' => '2',
            'keyword_type' => 'organic_keyword_2',
            'fallback_keyword_type' => 'organic_keyword_1',
          ),
          'senti-meta' => 
          array (
            'level_of_source' => 'secondary',
            'row_count' => 2,
            'column_count' => 3,
            'click_model_type' => '1',
            'keyword_type' => 'organic_keyword_1',
            'fallback_keyword_type' => 'organic_keyword_1',
            'template_name' => 'List-01',
          ),
        ),
        'content_details' => 
        array (
          'qna' => 
          array (
            'count' => 6,
            'source' => 'default',
            'keyword_type' => 'organic_keyword_5',
            'fallback_keyword_type' => 'sell_keyword',
          ),
        ),
        'web_result' => 
        array (
          'row_count' => 4,
          'column_count' => 1,
          'keyword_type' => 'organic_keyword_3',
          'fallback_keyword_type' => 'organic_keyword_1',
        ),
        'banners' => 
        array (
        ),
        'azure_details' => 
        array (
          'news' => 
          array (
            'row_count' => 6,
            'column_count' => 1,
            'click_model_type' => 1,
            'keyword_type' => 'organic_keyword_4',
            'fallback_keyword_type' => 'organic_keyword_1',
          ),
        ),
      ),
      'm' => 
      array (
        'ad_details' => 
        array (
          'top' => 
          array (
            'keyword_type' => 'sell_keyword',
            'fallback_keyword_type' => 'sell_keyword',
            'ads_count' => 3,
            'kbb_image_required' => false,
            'callout_required' => false,
            'review_required' => false,
            'fourth_line_required' => false,
            'top-ads_extension_required' => false,
            'security_badge_required' => false,
            'brand_required' => false,
            'site_link_count' => 
            array (
              1 => 2,
              2 => 2,
              3 => 2,
              4 => 2,
            ),
            'headline' => 
            array (
              'prefix' => 'results_for_text',
              'suffix' => 'sponsored_links_text',
            ),
            'template_details' => 
            array (
              'layout' => 'List-01',
              'sequence' => 'Sequence-09',
              'theme' => 'List-Default',
              'cta_icon' => 'Arrow-04',
            ),
          ),
          'same_top_bottom' => true,
          'bottom' => 
          array (
            'keyword_type' => 'sell_keyword',
            'fallback_keyword_type' => 'sell_keyword',
            'ads_count' => 3,
            'kbb_image_required' => false,
            'callout_required' => false,
            'review_required' => false,
            'fourth_line_required' => false,
            'top-ads_extension_required' => false,
            'security_badge_required' => false,
            'brand_required' => false,
            'site_link_count' => 
            array (
              1 => 2,
              2 => 2,
              3 => 2,
              4 => 2,
            ),
            'headline' => 
            array (
              'prefix' => 'results_for_text',
              'suffix' => 'sponsored_links_text',
            ),
            'template_details' => 
            array (
              'layout' => 'List-01',
              'sequence' => 'Sequence-09',
              'theme' => 'List-Default',
              'cta_icon' => 'Arrow-04',
            ),
          ),
        ),
        'related_keywords' => 
        array (
          'kbb' => 
          array (
            'row_count' => 1,
            'column_count' => 4,
            'keyword_type' => 'sell_keyword',
            'fallback_keyword_type' => 'organic_keyword_1',
            'headline' => 'related_searches_text',
          ),
        ),
        'product_getter' => 
        array (
          'connexity' => 
          array (
            'row_count' => 5,
            'column_count' => 1,
            'click_model_type' => 2,
            'level_of_source' => 'primary',
            'filter_details' => 
            array (
              'brand_filter_required' => false,
              'price_filter_required' => false,
              'shipping_filter_required' => false,
              'filter_bucket_count' => 4,
            ),
            'keyword_type' => 'organic_keyword_1',
            'fallback_keyword_type' => 'organic_keyword_1',
          ),
          'local-feed' => 
          array (
            'level_of_source' => 'others',
            'row_count' => 5,
            'column_count' => 1,
            'click_model_type' => 1,
            'keyword_type' => 'organic_keyword_2',
            'fallback_keyword_type' => 'organic_keyword_1',
          ),
          'senti-meta' => 
          array (
            'level_of_source' => 'secondary',
            'row_count' => 2,
            'column_count' => 3,
            'click_model_type' => 1,
            'keyword_type' => 'organic_keyword_1',
            'fallback_keyword_type' => 'organic_keyword_1',
            'template_name' => 'List-01',
          ),
        ),
        'content_details' => 
        array (
          'qna' => 
          array (
            'count' => 6,
            'source' => 'default',
            'keyword_type' => 'organic_keyword_5',
            'fallback_keyword_type' => 'sell_keyword',
          ),
        ),
        'web_result' => 
        array (
          'row_count' => 3,
          'column_count' => 1,
          'keyword_type' => 'organic_keyword_3',
          'fallback_keyword_type' => 'organic_keyword_1',
        ),
        'banners' => 
        array (
          'engagement_platform_widget' => 
          array (
            'values' => 
            array (
              0 => 
              array (
                'design' => 'top10ratings-multi-cyan-white',
                'design_fallback' => 
                array (
                  0 => 'faqs-red-darkblue',
                  1 => 'freshlyroasted-white-green',
                ),
              ),
            ),
          ),
        ),
        'azure_details' => 
        array (
          'news' => 
          array (
            'row_count' => 6,
            'column_count' => 1,
            'click_model_type' => 1,
            'keyword_type' => 'organic_keyword_4',
            'fallback_keyword_type' => 'organic_keyword_1',
          ),
        ),
      ),
    ),
    'ctp_name' => '04',
    'schedule' => 
    array (
      'day-0' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-1' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-2' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-3' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-4' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-5' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-6' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
    ),
    'ab_percent' => 100,
  ),
  'TS-O-1' => 
  array (
    'device_details' => 
    array (
      'd' => 
      array (
        'ad_details' => 
        array (
          'top' => 
          array (
            'keyword_type' => 'sell_keyword',
            'fallback_keyword_type' => 'sell_keyword',
            'ads_count' => 2,
            'kbb_image_required' => false,
            'callout_required' => false,
            'review_required' => false,
            'fourth_line_required' => false,
            'top-ads_extension_required' => false,
            'security_badge_required' => false,
            'brand_required' => false,
            'site_link_count' => 
            array (
              1 => 0,
              2 => 0,
              3 => 2,
              4 => 2,
            ),
            'headline' => 
            array (
              'prefix' => 'results_for_text',
              'suffix' => 'sponsored_links_text',
            ),
            'template_details' => 
            array (
              'layout' => 'List-01',
              'sequence' => 'Sequence-13',
              'theme' => 'Outbrain-List-01',
              'cta_icon' => 'Arrow-02',
            ),
          ),
          'same_top_bottom' => false,
        ),
        'related_keywords' => 
        array (
        ),
        'product_getter' => 
        array (
        ),
        'content_details' => 
        array (
        ),
        'banners' => 
        array (
        ),
        'azure_details' => 
        array (
        ),
      ),
      'm' => 
      array (
        'ad_details' => 
        array (
          'top' => 
          array (
            'keyword_type' => 'sell_keyword',
            'fallback_keyword_type' => 'sell_keyword',
            'ads_count' => 2,
            'kbb_image_required' => false,
            'callout_required' => false,
            'review_required' => false,
            'fourth_line_required' => false,
            'top-ads_extension_required' => false,
            'security_badge_required' => false,
            'brand_required' => false,
            'site_link_count' => 
            array (
              1 => 0,
              2 => 0,
              3 => 2,
              4 => 2,
            ),
            'headline' => 
            array (
              'prefix' => 'results_for_text',
              'suffix' => 'sponsored_links_text',
            ),
            'template_details' => 
            array (
              'layout' => 'List-01',
              'sequence' => 'Sequence-13',
              'theme' => 'Outbrain-List-01',
              'cta_icon' => 'Arrow-02',
            ),
          ),
          'same_top_bottom' => false,
        ),
        'related_keywords' => 
        array (
        ),
        'product_getter' => 
        array (
        ),
        'content_details' => 
        array (
        ),
        'banners' => 
        array (
        ),
        'azure_details' => 
        array (
        ),
      ),
    ),
    'ctp_name' => '06',
    'schedule' => 
    array (
      'day-0' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-1' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-2' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-3' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-4' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-5' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-6' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
    ),
    'ab_percent' => 100,
  ),
  'TS-T-1' => 
  array (
    'device_details' => 
    array (
      'd' => 
      array (
        'ad_details' => 
        array (
          'top' => 
          array (
            'keyword_type' => 'sell_keyword',
            'fallback_keyword_type' => 'sell_keyword',
            'ads_count' => 2,
            'kbb_image_required' => false,
            'callout_required' => false,
            'review_required' => false,
            'fourth_line_required' => false,
            'top-ads_extension_required' => false,
            'security_badge_required' => false,
            'brand_required' => false,
            'site_link_count' => 
            array (
              1 => 0,
              2 => 0,
              3 => 2,
              4 => 2,
            ),
            'headline' => 
            array (
              'prefix' => 'results_for_text',
              'suffix' => 'sponsored_links_text',
            ),
            'template_details' => 
            array (
              'layout' => 'List-01',
              'sequence' => 'Sequence-13',
              'theme' => 'Outbrain-List-01',
              'cta_icon' => 'Arrow-02',
            ),
          ),
          'same_top_bottom' => false,
        ),
        'related_keywords' => 
        array (
        ),
        'product_getter' => 
        array (
        ),
        'content_details' => 
        array (
        ),
        'banners' => 
        array (
        ),
        'azure_details' => 
        array (
        ),
      ),
      'm' => 
      array (
        'ad_details' => 
        array (
          'top' => 
          array (
            'keyword_type' => 'sell_keyword',
            'fallback_keyword_type' => 'sell_keyword',
            'ads_count' => 2,
            'kbb_image_required' => false,
            'callout_required' => false,
            'review_required' => false,
            'fourth_line_required' => false,
            'top-ads_extension_required' => false,
            'security_badge_required' => false,
            'brand_required' => false,
            'site_link_count' => 
            array (
              1 => 0,
              2 => 0,
              3 => 2,
              4 => 2,
            ),
            'headline' => 
            array (
              'prefix' => 'results_for_text',
              'suffix' => 'sponsored_links_text',
            ),
            'template_details' => 
            array (
              'layout' => 'List-01',
              'sequence' => 'Sequence-13',
              'theme' => 'Outbrain-List-01',
              'cta_icon' => 'Arrow-02',
            ),
          ),
          'same_top_bottom' => false,
        ),
        'related_keywords' => 
        array (
        ),
        'product_getter' => 
        array (
        ),
        'content_details' => 
        array (
        ),
        'banners' => 
        array (
        ),
        'azure_details' => 
        array (
        ),
      ),
    ),
    'ctp_name' => '06',
    'schedule' => 
    array (
      'day-0' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-1' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-2' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-3' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-4' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-5' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
      'day-6' => '0|1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23',
    ),
    'ab_percent' => 100,
  ),
);
Configure::delete('ad_source');
 $config['ad_source'] = 'cm';
Configure::delete('last_modified_time');
 $config['last_modified_time'] = '2019-05-13 17:00:40';
Configure::delete('group_remarketing_tag');
 $config['group_remarketing_tag'] = '';
Configure::delete('gdpr_template');
 $config['gdpr_template'] = 'default';
Configure::delete('ccpa_template');
 $config['ccpa_template'] = 'default';
Configure::delete('title');
 $config['title'] = '';
Configure::delete('footer');
 $config['footer'] = array (
  'enable' => 
  array (
    'desktop' => true,
    'mobile' => true,
  ),
);
Configure::delete('buy_source_mappings');
 $config['buy_source_mappings'] = array (
  'google_search' => 
  array (
    'rest' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
    ),
    'sunday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      1 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      2 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      3 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      4 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      5 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      6 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      7 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      8 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      9 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      10 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      11 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      12 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      13 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      14 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      15 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      16 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      17 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      18 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      19 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      20 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      21 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      22 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      23 => 
      array (
        'TS-GS-1' => 1.0,
      ),
    ),
    'monday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      1 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      2 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      3 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      4 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      5 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      6 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      7 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      8 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      9 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      10 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      11 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      12 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      13 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      14 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      15 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      16 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      17 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      18 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      19 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      20 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      21 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      22 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      23 => 
      array (
        'TS-GS-1' => 1.0,
      ),
    ),
    'tuesday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      1 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      2 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      3 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      4 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      5 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      6 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      7 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      8 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      9 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      10 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      11 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      12 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      13 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      14 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      15 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      16 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      17 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      18 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      19 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      20 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      21 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      22 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      23 => 
      array (
        'TS-GS-1' => 1.0,
      ),
    ),
    'wednesday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      1 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      2 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      3 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      4 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      5 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      6 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      7 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      8 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      9 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      10 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      11 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      12 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      13 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      14 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      15 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      16 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      17 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      18 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      19 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      20 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      21 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      22 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      23 => 
      array (
        'TS-GS-1' => 1.0,
      ),
    ),
    'thursday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      1 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      2 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      3 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      4 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      5 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      6 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      7 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      8 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      9 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      10 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      11 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      12 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      13 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      14 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      15 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      16 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      17 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      18 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      19 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      20 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      21 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      22 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      23 => 
      array (
        'TS-GS-1' => 1.0,
      ),
    ),
    'friday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      1 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      2 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      3 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      4 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      5 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      6 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      7 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      8 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      9 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      10 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      11 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      12 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      13 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      14 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      15 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      16 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      17 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      18 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      19 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      20 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      21 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      22 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      23 => 
      array (
        'TS-GS-1' => 1.0,
      ),
    ),
    'saturday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      1 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      2 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      3 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      4 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      5 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      6 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      7 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      8 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      9 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      10 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      11 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      12 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      13 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      14 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      15 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      16 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      17 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      18 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      19 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      20 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      21 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      22 => 
      array (
        'TS-GS-1' => 1.0,
      ),
      23 => 
      array (
        'TS-GS-1' => 1.0,
      ),
    ),
  ),
  'google_display' => 
  array (
    'rest' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
    ),
    'sunday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      1 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      2 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      3 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      4 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      5 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      6 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      7 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      8 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      9 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      10 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      11 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      12 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      13 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      14 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      15 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      16 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      17 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      18 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      19 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      20 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      21 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      22 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      23 => 
      array (
        'TS-GD-1' => 1.0,
      ),
    ),
    'monday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      1 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      2 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      3 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      4 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      5 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      6 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      7 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      8 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      9 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      10 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      11 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      12 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      13 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      14 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      15 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      16 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      17 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      18 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      19 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      20 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      21 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      22 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      23 => 
      array (
        'TS-GD-1' => 1.0,
      ),
    ),
    'tuesday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      1 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      2 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      3 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      4 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      5 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      6 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      7 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      8 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      9 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      10 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      11 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      12 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      13 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      14 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      15 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      16 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      17 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      18 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      19 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      20 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      21 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      22 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      23 => 
      array (
        'TS-GD-1' => 1.0,
      ),
    ),
    'wednesday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      1 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      2 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      3 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      4 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      5 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      6 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      7 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      8 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      9 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      10 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      11 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      12 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      13 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      14 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      15 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      16 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      17 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      18 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      19 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      20 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      21 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      22 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      23 => 
      array (
        'TS-GD-1' => 1.0,
      ),
    ),
    'thursday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      1 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      2 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      3 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      4 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      5 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      6 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      7 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      8 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      9 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      10 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      11 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      12 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      13 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      14 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      15 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      16 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      17 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      18 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      19 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      20 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      21 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      22 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      23 => 
      array (
        'TS-GD-1' => 1.0,
      ),
    ),
    'friday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      1 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      2 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      3 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      4 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      5 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      6 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      7 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      8 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      9 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      10 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      11 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      12 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      13 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      14 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      15 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      16 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      17 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      18 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      19 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      20 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      21 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      22 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      23 => 
      array (
        'TS-GD-1' => 1.0,
      ),
    ),
    'saturday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      1 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      2 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      3 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      4 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      5 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      6 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      7 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      8 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      9 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      10 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      11 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      12 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      13 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      14 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      15 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      16 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      17 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      18 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      19 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      20 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      21 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      22 => 
      array (
        'TS-GD-1' => 1.0,
      ),
      23 => 
      array (
        'TS-GD-1' => 1.0,
      ),
    ),
  ),
  'bing' => 
  array (
    'rest' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
    ),
    'sunday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-B-1' => 1.0,
      ),
      1 => 
      array (
        'TS-B-1' => 1.0,
      ),
      2 => 
      array (
        'TS-B-1' => 1.0,
      ),
      3 => 
      array (
        'TS-B-1' => 1.0,
      ),
      4 => 
      array (
        'TS-B-1' => 1.0,
      ),
      5 => 
      array (
        'TS-B-1' => 1.0,
      ),
      6 => 
      array (
        'TS-B-1' => 1.0,
      ),
      7 => 
      array (
        'TS-B-1' => 1.0,
      ),
      8 => 
      array (
        'TS-B-1' => 1.0,
      ),
      9 => 
      array (
        'TS-B-1' => 1.0,
      ),
      10 => 
      array (
        'TS-B-1' => 1.0,
      ),
      11 => 
      array (
        'TS-B-1' => 1.0,
      ),
      12 => 
      array (
        'TS-B-1' => 1.0,
      ),
      13 => 
      array (
        'TS-B-1' => 1.0,
      ),
      14 => 
      array (
        'TS-B-1' => 1.0,
      ),
      15 => 
      array (
        'TS-B-1' => 1.0,
      ),
      16 => 
      array (
        'TS-B-1' => 1.0,
      ),
      17 => 
      array (
        'TS-B-1' => 1.0,
      ),
      18 => 
      array (
        'TS-B-1' => 1.0,
      ),
      19 => 
      array (
        'TS-B-1' => 1.0,
      ),
      20 => 
      array (
        'TS-B-1' => 1.0,
      ),
      21 => 
      array (
        'TS-B-1' => 1.0,
      ),
      22 => 
      array (
        'TS-B-1' => 1.0,
      ),
      23 => 
      array (
        'TS-B-1' => 1.0,
      ),
    ),
    'monday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-B-1' => 1.0,
      ),
      1 => 
      array (
        'TS-B-1' => 1.0,
      ),
      2 => 
      array (
        'TS-B-1' => 1.0,
      ),
      3 => 
      array (
        'TS-B-1' => 1.0,
      ),
      4 => 
      array (
        'TS-B-1' => 1.0,
      ),
      5 => 
      array (
        'TS-B-1' => 1.0,
      ),
      6 => 
      array (
        'TS-B-1' => 1.0,
      ),
      7 => 
      array (
        'TS-B-1' => 1.0,
      ),
      8 => 
      array (
        'TS-B-1' => 1.0,
      ),
      9 => 
      array (
        'TS-B-1' => 1.0,
      ),
      10 => 
      array (
        'TS-B-1' => 1.0,
      ),
      11 => 
      array (
        'TS-B-1' => 1.0,
      ),
      12 => 
      array (
        'TS-B-1' => 1.0,
      ),
      13 => 
      array (
        'TS-B-1' => 1.0,
      ),
      14 => 
      array (
        'TS-B-1' => 1.0,
      ),
      15 => 
      array (
        'TS-B-1' => 1.0,
      ),
      16 => 
      array (
        'TS-B-1' => 1.0,
      ),
      17 => 
      array (
        'TS-B-1' => 1.0,
      ),
      18 => 
      array (
        'TS-B-1' => 1.0,
      ),
      19 => 
      array (
        'TS-B-1' => 1.0,
      ),
      20 => 
      array (
        'TS-B-1' => 1.0,
      ),
      21 => 
      array (
        'TS-B-1' => 1.0,
      ),
      22 => 
      array (
        'TS-B-1' => 1.0,
      ),
      23 => 
      array (
        'TS-B-1' => 1.0,
      ),
    ),
    'tuesday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-B-1' => 1.0,
      ),
      1 => 
      array (
        'TS-B-1' => 1.0,
      ),
      2 => 
      array (
        'TS-B-1' => 1.0,
      ),
      3 => 
      array (
        'TS-B-1' => 1.0,
      ),
      4 => 
      array (
        'TS-B-1' => 1.0,
      ),
      5 => 
      array (
        'TS-B-1' => 1.0,
      ),
      6 => 
      array (
        'TS-B-1' => 1.0,
      ),
      7 => 
      array (
        'TS-B-1' => 1.0,
      ),
      8 => 
      array (
        'TS-B-1' => 1.0,
      ),
      9 => 
      array (
        'TS-B-1' => 1.0,
      ),
      10 => 
      array (
        'TS-B-1' => 1.0,
      ),
      11 => 
      array (
        'TS-B-1' => 1.0,
      ),
      12 => 
      array (
        'TS-B-1' => 1.0,
      ),
      13 => 
      array (
        'TS-B-1' => 1.0,
      ),
      14 => 
      array (
        'TS-B-1' => 1.0,
      ),
      15 => 
      array (
        'TS-B-1' => 1.0,
      ),
      16 => 
      array (
        'TS-B-1' => 1.0,
      ),
      17 => 
      array (
        'TS-B-1' => 1.0,
      ),
      18 => 
      array (
        'TS-B-1' => 1.0,
      ),
      19 => 
      array (
        'TS-B-1' => 1.0,
      ),
      20 => 
      array (
        'TS-B-1' => 1.0,
      ),
      21 => 
      array (
        'TS-B-1' => 1.0,
      ),
      22 => 
      array (
        'TS-B-1' => 1.0,
      ),
      23 => 
      array (
        'TS-B-1' => 1.0,
      ),
    ),
    'wednesday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-B-1' => 1.0,
      ),
      1 => 
      array (
        'TS-B-1' => 1.0,
      ),
      2 => 
      array (
        'TS-B-1' => 1.0,
      ),
      3 => 
      array (
        'TS-B-1' => 1.0,
      ),
      4 => 
      array (
        'TS-B-1' => 1.0,
      ),
      5 => 
      array (
        'TS-B-1' => 1.0,
      ),
      6 => 
      array (
        'TS-B-1' => 1.0,
      ),
      7 => 
      array (
        'TS-B-1' => 1.0,
      ),
      8 => 
      array (
        'TS-B-1' => 1.0,
      ),
      9 => 
      array (
        'TS-B-1' => 1.0,
      ),
      10 => 
      array (
        'TS-B-1' => 1.0,
      ),
      11 => 
      array (
        'TS-B-1' => 1.0,
      ),
      12 => 
      array (
        'TS-B-1' => 1.0,
      ),
      13 => 
      array (
        'TS-B-1' => 1.0,
      ),
      14 => 
      array (
        'TS-B-1' => 1.0,
      ),
      15 => 
      array (
        'TS-B-1' => 1.0,
      ),
      16 => 
      array (
        'TS-B-1' => 1.0,
      ),
      17 => 
      array (
        'TS-B-1' => 1.0,
      ),
      18 => 
      array (
        'TS-B-1' => 1.0,
      ),
      19 => 
      array (
        'TS-B-1' => 1.0,
      ),
      20 => 
      array (
        'TS-B-1' => 1.0,
      ),
      21 => 
      array (
        'TS-B-1' => 1.0,
      ),
      22 => 
      array (
        'TS-B-1' => 1.0,
      ),
      23 => 
      array (
        'TS-B-1' => 1.0,
      ),
    ),
    'thursday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-B-1' => 1.0,
      ),
      1 => 
      array (
        'TS-B-1' => 1.0,
      ),
      2 => 
      array (
        'TS-B-1' => 1.0,
      ),
      3 => 
      array (
        'TS-B-1' => 1.0,
      ),
      4 => 
      array (
        'TS-B-1' => 1.0,
      ),
      5 => 
      array (
        'TS-B-1' => 1.0,
      ),
      6 => 
      array (
        'TS-B-1' => 1.0,
      ),
      7 => 
      array (
        'TS-B-1' => 1.0,
      ),
      8 => 
      array (
        'TS-B-1' => 1.0,
      ),
      9 => 
      array (
        'TS-B-1' => 1.0,
      ),
      10 => 
      array (
        'TS-B-1' => 1.0,
      ),
      11 => 
      array (
        'TS-B-1' => 1.0,
      ),
      12 => 
      array (
        'TS-B-1' => 1.0,
      ),
      13 => 
      array (
        'TS-B-1' => 1.0,
      ),
      14 => 
      array (
        'TS-B-1' => 1.0,
      ),
      15 => 
      array (
        'TS-B-1' => 1.0,
      ),
      16 => 
      array (
        'TS-B-1' => 1.0,
      ),
      17 => 
      array (
        'TS-B-1' => 1.0,
      ),
      18 => 
      array (
        'TS-B-1' => 1.0,
      ),
      19 => 
      array (
        'TS-B-1' => 1.0,
      ),
      20 => 
      array (
        'TS-B-1' => 1.0,
      ),
      21 => 
      array (
        'TS-B-1' => 1.0,
      ),
      22 => 
      array (
        'TS-B-1' => 1.0,
      ),
      23 => 
      array (
        'TS-B-1' => 1.0,
      ),
    ),
    'friday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-B-1' => 1.0,
      ),
      1 => 
      array (
        'TS-B-1' => 1.0,
      ),
      2 => 
      array (
        'TS-B-1' => 1.0,
      ),
      3 => 
      array (
        'TS-B-1' => 1.0,
      ),
      4 => 
      array (
        'TS-B-1' => 1.0,
      ),
      5 => 
      array (
        'TS-B-1' => 1.0,
      ),
      6 => 
      array (
        'TS-B-1' => 1.0,
      ),
      7 => 
      array (
        'TS-B-1' => 1.0,
      ),
      8 => 
      array (
        'TS-B-1' => 1.0,
      ),
      9 => 
      array (
        'TS-B-1' => 1.0,
      ),
      10 => 
      array (
        'TS-B-1' => 1.0,
      ),
      11 => 
      array (
        'TS-B-1' => 1.0,
      ),
      12 => 
      array (
        'TS-B-1' => 1.0,
      ),
      13 => 
      array (
        'TS-B-1' => 1.0,
      ),
      14 => 
      array (
        'TS-B-1' => 1.0,
      ),
      15 => 
      array (
        'TS-B-1' => 1.0,
      ),
      16 => 
      array (
        'TS-B-1' => 1.0,
      ),
      17 => 
      array (
        'TS-B-1' => 1.0,
      ),
      18 => 
      array (
        'TS-B-1' => 1.0,
      ),
      19 => 
      array (
        'TS-B-1' => 1.0,
      ),
      20 => 
      array (
        'TS-B-1' => 1.0,
      ),
      21 => 
      array (
        'TS-B-1' => 1.0,
      ),
      22 => 
      array (
        'TS-B-1' => 1.0,
      ),
      23 => 
      array (
        'TS-B-1' => 1.0,
      ),
    ),
    'saturday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-B-1' => 1.0,
      ),
      1 => 
      array (
        'TS-B-1' => 1.0,
      ),
      2 => 
      array (
        'TS-B-1' => 1.0,
      ),
      3 => 
      array (
        'TS-B-1' => 1.0,
      ),
      4 => 
      array (
        'TS-B-1' => 1.0,
      ),
      5 => 
      array (
        'TS-B-1' => 1.0,
      ),
      6 => 
      array (
        'TS-B-1' => 1.0,
      ),
      7 => 
      array (
        'TS-B-1' => 1.0,
      ),
      8 => 
      array (
        'TS-B-1' => 1.0,
      ),
      9 => 
      array (
        'TS-B-1' => 1.0,
      ),
      10 => 
      array (
        'TS-B-1' => 1.0,
      ),
      11 => 
      array (
        'TS-B-1' => 1.0,
      ),
      12 => 
      array (
        'TS-B-1' => 1.0,
      ),
      13 => 
      array (
        'TS-B-1' => 1.0,
      ),
      14 => 
      array (
        'TS-B-1' => 1.0,
      ),
      15 => 
      array (
        'TS-B-1' => 1.0,
      ),
      16 => 
      array (
        'TS-B-1' => 1.0,
      ),
      17 => 
      array (
        'TS-B-1' => 1.0,
      ),
      18 => 
      array (
        'TS-B-1' => 1.0,
      ),
      19 => 
      array (
        'TS-B-1' => 1.0,
      ),
      20 => 
      array (
        'TS-B-1' => 1.0,
      ),
      21 => 
      array (
        'TS-B-1' => 1.0,
      ),
      22 => 
      array (
        'TS-B-1' => 1.0,
      ),
      23 => 
      array (
        'TS-B-1' => 1.0,
      ),
    ),
  ),
  'outbrain' => 
  array (
    'rest' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
    ),
    'sunday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-O-1' => 1.0,
      ),
      1 => 
      array (
        'TS-O-1' => 1.0,
      ),
      2 => 
      array (
        'TS-O-1' => 1.0,
      ),
      3 => 
      array (
        'TS-O-1' => 1.0,
      ),
      4 => 
      array (
        'TS-O-1' => 1.0,
      ),
      5 => 
      array (
        'TS-O-1' => 1.0,
      ),
      6 => 
      array (
        'TS-O-1' => 1.0,
      ),
      7 => 
      array (
        'TS-O-1' => 1.0,
      ),
      8 => 
      array (
        'TS-O-1' => 1.0,
      ),
      9 => 
      array (
        'TS-O-1' => 1.0,
      ),
      10 => 
      array (
        'TS-O-1' => 1.0,
      ),
      11 => 
      array (
        'TS-O-1' => 1.0,
      ),
      12 => 
      array (
        'TS-O-1' => 1.0,
      ),
      13 => 
      array (
        'TS-O-1' => 1.0,
      ),
      14 => 
      array (
        'TS-O-1' => 1.0,
      ),
      15 => 
      array (
        'TS-O-1' => 1.0,
      ),
      16 => 
      array (
        'TS-O-1' => 1.0,
      ),
      17 => 
      array (
        'TS-O-1' => 1.0,
      ),
      18 => 
      array (
        'TS-O-1' => 1.0,
      ),
      19 => 
      array (
        'TS-O-1' => 1.0,
      ),
      20 => 
      array (
        'TS-O-1' => 1.0,
      ),
      21 => 
      array (
        'TS-O-1' => 1.0,
      ),
      22 => 
      array (
        'TS-O-1' => 1.0,
      ),
      23 => 
      array (
        'TS-O-1' => 1.0,
      ),
    ),
    'monday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-O-1' => 1.0,
      ),
      1 => 
      array (
        'TS-O-1' => 1.0,
      ),
      2 => 
      array (
        'TS-O-1' => 1.0,
      ),
      3 => 
      array (
        'TS-O-1' => 1.0,
      ),
      4 => 
      array (
        'TS-O-1' => 1.0,
      ),
      5 => 
      array (
        'TS-O-1' => 1.0,
      ),
      6 => 
      array (
        'TS-O-1' => 1.0,
      ),
      7 => 
      array (
        'TS-O-1' => 1.0,
      ),
      8 => 
      array (
        'TS-O-1' => 1.0,
      ),
      9 => 
      array (
        'TS-O-1' => 1.0,
      ),
      10 => 
      array (
        'TS-O-1' => 1.0,
      ),
      11 => 
      array (
        'TS-O-1' => 1.0,
      ),
      12 => 
      array (
        'TS-O-1' => 1.0,
      ),
      13 => 
      array (
        'TS-O-1' => 1.0,
      ),
      14 => 
      array (
        'TS-O-1' => 1.0,
      ),
      15 => 
      array (
        'TS-O-1' => 1.0,
      ),
      16 => 
      array (
        'TS-O-1' => 1.0,
      ),
      17 => 
      array (
        'TS-O-1' => 1.0,
      ),
      18 => 
      array (
        'TS-O-1' => 1.0,
      ),
      19 => 
      array (
        'TS-O-1' => 1.0,
      ),
      20 => 
      array (
        'TS-O-1' => 1.0,
      ),
      21 => 
      array (
        'TS-O-1' => 1.0,
      ),
      22 => 
      array (
        'TS-O-1' => 1.0,
      ),
      23 => 
      array (
        'TS-O-1' => 1.0,
      ),
    ),
    'tuesday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-O-1' => 1.0,
      ),
      1 => 
      array (
        'TS-O-1' => 1.0,
      ),
      2 => 
      array (
        'TS-O-1' => 1.0,
      ),
      3 => 
      array (
        'TS-O-1' => 1.0,
      ),
      4 => 
      array (
        'TS-O-1' => 1.0,
      ),
      5 => 
      array (
        'TS-O-1' => 1.0,
      ),
      6 => 
      array (
        'TS-O-1' => 1.0,
      ),
      7 => 
      array (
        'TS-O-1' => 1.0,
      ),
      8 => 
      array (
        'TS-O-1' => 1.0,
      ),
      9 => 
      array (
        'TS-O-1' => 1.0,
      ),
      10 => 
      array (
        'TS-O-1' => 1.0,
      ),
      11 => 
      array (
        'TS-O-1' => 1.0,
      ),
      12 => 
      array (
        'TS-O-1' => 1.0,
      ),
      13 => 
      array (
        'TS-O-1' => 1.0,
      ),
      14 => 
      array (
        'TS-O-1' => 1.0,
      ),
      15 => 
      array (
        'TS-O-1' => 1.0,
      ),
      16 => 
      array (
        'TS-O-1' => 1.0,
      ),
      17 => 
      array (
        'TS-O-1' => 1.0,
      ),
      18 => 
      array (
        'TS-O-1' => 1.0,
      ),
      19 => 
      array (
        'TS-O-1' => 1.0,
      ),
      20 => 
      array (
        'TS-O-1' => 1.0,
      ),
      21 => 
      array (
        'TS-O-1' => 1.0,
      ),
      22 => 
      array (
        'TS-O-1' => 1.0,
      ),
      23 => 
      array (
        'TS-O-1' => 1.0,
      ),
    ),
    'wednesday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-O-1' => 1.0,
      ),
      1 => 
      array (
        'TS-O-1' => 1.0,
      ),
      2 => 
      array (
        'TS-O-1' => 1.0,
      ),
      3 => 
      array (
        'TS-O-1' => 1.0,
      ),
      4 => 
      array (
        'TS-O-1' => 1.0,
      ),
      5 => 
      array (
        'TS-O-1' => 1.0,
      ),
      6 => 
      array (
        'TS-O-1' => 1.0,
      ),
      7 => 
      array (
        'TS-O-1' => 1.0,
      ),
      8 => 
      array (
        'TS-O-1' => 1.0,
      ),
      9 => 
      array (
        'TS-O-1' => 1.0,
      ),
      10 => 
      array (
        'TS-O-1' => 1.0,
      ),
      11 => 
      array (
        'TS-O-1' => 1.0,
      ),
      12 => 
      array (
        'TS-O-1' => 1.0,
      ),
      13 => 
      array (
        'TS-O-1' => 1.0,
      ),
      14 => 
      array (
        'TS-O-1' => 1.0,
      ),
      15 => 
      array (
        'TS-O-1' => 1.0,
      ),
      16 => 
      array (
        'TS-O-1' => 1.0,
      ),
      17 => 
      array (
        'TS-O-1' => 1.0,
      ),
      18 => 
      array (
        'TS-O-1' => 1.0,
      ),
      19 => 
      array (
        'TS-O-1' => 1.0,
      ),
      20 => 
      array (
        'TS-O-1' => 1.0,
      ),
      21 => 
      array (
        'TS-O-1' => 1.0,
      ),
      22 => 
      array (
        'TS-O-1' => 1.0,
      ),
      23 => 
      array (
        'TS-O-1' => 1.0,
      ),
    ),
    'thursday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-O-1' => 1.0,
      ),
      1 => 
      array (
        'TS-O-1' => 1.0,
      ),
      2 => 
      array (
        'TS-O-1' => 1.0,
      ),
      3 => 
      array (
        'TS-O-1' => 1.0,
      ),
      4 => 
      array (
        'TS-O-1' => 1.0,
      ),
      5 => 
      array (
        'TS-O-1' => 1.0,
      ),
      6 => 
      array (
        'TS-O-1' => 1.0,
      ),
      7 => 
      array (
        'TS-O-1' => 1.0,
      ),
      8 => 
      array (
        'TS-O-1' => 1.0,
      ),
      9 => 
      array (
        'TS-O-1' => 1.0,
      ),
      10 => 
      array (
        'TS-O-1' => 1.0,
      ),
      11 => 
      array (
        'TS-O-1' => 1.0,
      ),
      12 => 
      array (
        'TS-O-1' => 1.0,
      ),
      13 => 
      array (
        'TS-O-1' => 1.0,
      ),
      14 => 
      array (
        'TS-O-1' => 1.0,
      ),
      15 => 
      array (
        'TS-O-1' => 1.0,
      ),
      16 => 
      array (
        'TS-O-1' => 1.0,
      ),
      17 => 
      array (
        'TS-O-1' => 1.0,
      ),
      18 => 
      array (
        'TS-O-1' => 1.0,
      ),
      19 => 
      array (
        'TS-O-1' => 1.0,
      ),
      20 => 
      array (
        'TS-O-1' => 1.0,
      ),
      21 => 
      array (
        'TS-O-1' => 1.0,
      ),
      22 => 
      array (
        'TS-O-1' => 1.0,
      ),
      23 => 
      array (
        'TS-O-1' => 1.0,
      ),
    ),
    'friday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-O-1' => 1.0,
      ),
      1 => 
      array (
        'TS-O-1' => 1.0,
      ),
      2 => 
      array (
        'TS-O-1' => 1.0,
      ),
      3 => 
      array (
        'TS-O-1' => 1.0,
      ),
      4 => 
      array (
        'TS-O-1' => 1.0,
      ),
      5 => 
      array (
        'TS-O-1' => 1.0,
      ),
      6 => 
      array (
        'TS-O-1' => 1.0,
      ),
      7 => 
      array (
        'TS-O-1' => 1.0,
      ),
      8 => 
      array (
        'TS-O-1' => 1.0,
      ),
      9 => 
      array (
        'TS-O-1' => 1.0,
      ),
      10 => 
      array (
        'TS-O-1' => 1.0,
      ),
      11 => 
      array (
        'TS-O-1' => 1.0,
      ),
      12 => 
      array (
        'TS-O-1' => 1.0,
      ),
      13 => 
      array (
        'TS-O-1' => 1.0,
      ),
      14 => 
      array (
        'TS-O-1' => 1.0,
      ),
      15 => 
      array (
        'TS-O-1' => 1.0,
      ),
      16 => 
      array (
        'TS-O-1' => 1.0,
      ),
      17 => 
      array (
        'TS-O-1' => 1.0,
      ),
      18 => 
      array (
        'TS-O-1' => 1.0,
      ),
      19 => 
      array (
        'TS-O-1' => 1.0,
      ),
      20 => 
      array (
        'TS-O-1' => 1.0,
      ),
      21 => 
      array (
        'TS-O-1' => 1.0,
      ),
      22 => 
      array (
        'TS-O-1' => 1.0,
      ),
      23 => 
      array (
        'TS-O-1' => 1.0,
      ),
    ),
    'saturday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-O-1' => 1.0,
      ),
      1 => 
      array (
        'TS-O-1' => 1.0,
      ),
      2 => 
      array (
        'TS-O-1' => 1.0,
      ),
      3 => 
      array (
        'TS-O-1' => 1.0,
      ),
      4 => 
      array (
        'TS-O-1' => 1.0,
      ),
      5 => 
      array (
        'TS-O-1' => 1.0,
      ),
      6 => 
      array (
        'TS-O-1' => 1.0,
      ),
      7 => 
      array (
        'TS-O-1' => 1.0,
      ),
      8 => 
      array (
        'TS-O-1' => 1.0,
      ),
      9 => 
      array (
        'TS-O-1' => 1.0,
      ),
      10 => 
      array (
        'TS-O-1' => 1.0,
      ),
      11 => 
      array (
        'TS-O-1' => 1.0,
      ),
      12 => 
      array (
        'TS-O-1' => 1.0,
      ),
      13 => 
      array (
        'TS-O-1' => 1.0,
      ),
      14 => 
      array (
        'TS-O-1' => 1.0,
      ),
      15 => 
      array (
        'TS-O-1' => 1.0,
      ),
      16 => 
      array (
        'TS-O-1' => 1.0,
      ),
      17 => 
      array (
        'TS-O-1' => 1.0,
      ),
      18 => 
      array (
        'TS-O-1' => 1.0,
      ),
      19 => 
      array (
        'TS-O-1' => 1.0,
      ),
      20 => 
      array (
        'TS-O-1' => 1.0,
      ),
      21 => 
      array (
        'TS-O-1' => 1.0,
      ),
      22 => 
      array (
        'TS-O-1' => 1.0,
      ),
      23 => 
      array (
        'TS-O-1' => 1.0,
      ),
    ),
  ),
  'taboola' => 
  array (
    'rest' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
    ),
    'sunday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-T-1' => 1.0,
      ),
      1 => 
      array (
        'TS-T-1' => 1.0,
      ),
      2 => 
      array (
        'TS-T-1' => 1.0,
      ),
      3 => 
      array (
        'TS-T-1' => 1.0,
      ),
      4 => 
      array (
        'TS-T-1' => 1.0,
      ),
      5 => 
      array (
        'TS-T-1' => 1.0,
      ),
      6 => 
      array (
        'TS-T-1' => 1.0,
      ),
      7 => 
      array (
        'TS-T-1' => 1.0,
      ),
      8 => 
      array (
        'TS-T-1' => 1.0,
      ),
      9 => 
      array (
        'TS-T-1' => 1.0,
      ),
      10 => 
      array (
        'TS-T-1' => 1.0,
      ),
      11 => 
      array (
        'TS-T-1' => 1.0,
      ),
      12 => 
      array (
        'TS-T-1' => 1.0,
      ),
      13 => 
      array (
        'TS-T-1' => 1.0,
      ),
      14 => 
      array (
        'TS-T-1' => 1.0,
      ),
      15 => 
      array (
        'TS-T-1' => 1.0,
      ),
      16 => 
      array (
        'TS-T-1' => 1.0,
      ),
      17 => 
      array (
        'TS-T-1' => 1.0,
      ),
      18 => 
      array (
        'TS-T-1' => 1.0,
      ),
      19 => 
      array (
        'TS-T-1' => 1.0,
      ),
      20 => 
      array (
        'TS-T-1' => 1.0,
      ),
      21 => 
      array (
        'TS-T-1' => 1.0,
      ),
      22 => 
      array (
        'TS-T-1' => 1.0,
      ),
      23 => 
      array (
        'TS-T-1' => 1.0,
      ),
    ),
    'monday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-T-1' => 1.0,
      ),
      1 => 
      array (
        'TS-T-1' => 1.0,
      ),
      2 => 
      array (
        'TS-T-1' => 1.0,
      ),
      3 => 
      array (
        'TS-T-1' => 1.0,
      ),
      4 => 
      array (
        'TS-T-1' => 1.0,
      ),
      5 => 
      array (
        'TS-T-1' => 1.0,
      ),
      6 => 
      array (
        'TS-T-1' => 1.0,
      ),
      7 => 
      array (
        'TS-T-1' => 1.0,
      ),
      8 => 
      array (
        'TS-T-1' => 1.0,
      ),
      9 => 
      array (
        'TS-T-1' => 1.0,
      ),
      10 => 
      array (
        'TS-T-1' => 1.0,
      ),
      11 => 
      array (
        'TS-T-1' => 1.0,
      ),
      12 => 
      array (
        'TS-T-1' => 1.0,
      ),
      13 => 
      array (
        'TS-T-1' => 1.0,
      ),
      14 => 
      array (
        'TS-T-1' => 1.0,
      ),
      15 => 
      array (
        'TS-T-1' => 1.0,
      ),
      16 => 
      array (
        'TS-T-1' => 1.0,
      ),
      17 => 
      array (
        'TS-T-1' => 1.0,
      ),
      18 => 
      array (
        'TS-T-1' => 1.0,
      ),
      19 => 
      array (
        'TS-T-1' => 1.0,
      ),
      20 => 
      array (
        'TS-T-1' => 1.0,
      ),
      21 => 
      array (
        'TS-T-1' => 1.0,
      ),
      22 => 
      array (
        'TS-T-1' => 1.0,
      ),
      23 => 
      array (
        'TS-T-1' => 1.0,
      ),
    ),
    'tuesday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-T-1' => 1.0,
      ),
      1 => 
      array (
        'TS-T-1' => 1.0,
      ),
      2 => 
      array (
        'TS-T-1' => 1.0,
      ),
      3 => 
      array (
        'TS-T-1' => 1.0,
      ),
      4 => 
      array (
        'TS-T-1' => 1.0,
      ),
      5 => 
      array (
        'TS-T-1' => 1.0,
      ),
      6 => 
      array (
        'TS-T-1' => 1.0,
      ),
      7 => 
      array (
        'TS-T-1' => 1.0,
      ),
      8 => 
      array (
        'TS-T-1' => 1.0,
      ),
      9 => 
      array (
        'TS-T-1' => 1.0,
      ),
      10 => 
      array (
        'TS-T-1' => 1.0,
      ),
      11 => 
      array (
        'TS-T-1' => 1.0,
      ),
      12 => 
      array (
        'TS-T-1' => 1.0,
      ),
      13 => 
      array (
        'TS-T-1' => 1.0,
      ),
      14 => 
      array (
        'TS-T-1' => 1.0,
      ),
      15 => 
      array (
        'TS-T-1' => 1.0,
      ),
      16 => 
      array (
        'TS-T-1' => 1.0,
      ),
      17 => 
      array (
        'TS-T-1' => 1.0,
      ),
      18 => 
      array (
        'TS-T-1' => 1.0,
      ),
      19 => 
      array (
        'TS-T-1' => 1.0,
      ),
      20 => 
      array (
        'TS-T-1' => 1.0,
      ),
      21 => 
      array (
        'TS-T-1' => 1.0,
      ),
      22 => 
      array (
        'TS-T-1' => 1.0,
      ),
      23 => 
      array (
        'TS-T-1' => 1.0,
      ),
    ),
    'wednesday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-T-1' => 1.0,
      ),
      1 => 
      array (
        'TS-T-1' => 1.0,
      ),
      2 => 
      array (
        'TS-T-1' => 1.0,
      ),
      3 => 
      array (
        'TS-T-1' => 1.0,
      ),
      4 => 
      array (
        'TS-T-1' => 1.0,
      ),
      5 => 
      array (
        'TS-T-1' => 1.0,
      ),
      6 => 
      array (
        'TS-T-1' => 1.0,
      ),
      7 => 
      array (
        'TS-T-1' => 1.0,
      ),
      8 => 
      array (
        'TS-T-1' => 1.0,
      ),
      9 => 
      array (
        'TS-T-1' => 1.0,
      ),
      10 => 
      array (
        'TS-T-1' => 1.0,
      ),
      11 => 
      array (
        'TS-T-1' => 1.0,
      ),
      12 => 
      array (
        'TS-T-1' => 1.0,
      ),
      13 => 
      array (
        'TS-T-1' => 1.0,
      ),
      14 => 
      array (
        'TS-T-1' => 1.0,
      ),
      15 => 
      array (
        'TS-T-1' => 1.0,
      ),
      16 => 
      array (
        'TS-T-1' => 1.0,
      ),
      17 => 
      array (
        'TS-T-1' => 1.0,
      ),
      18 => 
      array (
        'TS-T-1' => 1.0,
      ),
      19 => 
      array (
        'TS-T-1' => 1.0,
      ),
      20 => 
      array (
        'TS-T-1' => 1.0,
      ),
      21 => 
      array (
        'TS-T-1' => 1.0,
      ),
      22 => 
      array (
        'TS-T-1' => 1.0,
      ),
      23 => 
      array (
        'TS-T-1' => 1.0,
      ),
    ),
    'thursday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-T-1' => 1.0,
      ),
      1 => 
      array (
        'TS-T-1' => 1.0,
      ),
      2 => 
      array (
        'TS-T-1' => 1.0,
      ),
      3 => 
      array (
        'TS-T-1' => 1.0,
      ),
      4 => 
      array (
        'TS-T-1' => 1.0,
      ),
      5 => 
      array (
        'TS-T-1' => 1.0,
      ),
      6 => 
      array (
        'TS-T-1' => 1.0,
      ),
      7 => 
      array (
        'TS-T-1' => 1.0,
      ),
      8 => 
      array (
        'TS-T-1' => 1.0,
      ),
      9 => 
      array (
        'TS-T-1' => 1.0,
      ),
      10 => 
      array (
        'TS-T-1' => 1.0,
      ),
      11 => 
      array (
        'TS-T-1' => 1.0,
      ),
      12 => 
      array (
        'TS-T-1' => 1.0,
      ),
      13 => 
      array (
        'TS-T-1' => 1.0,
      ),
      14 => 
      array (
        'TS-T-1' => 1.0,
      ),
      15 => 
      array (
        'TS-T-1' => 1.0,
      ),
      16 => 
      array (
        'TS-T-1' => 1.0,
      ),
      17 => 
      array (
        'TS-T-1' => 1.0,
      ),
      18 => 
      array (
        'TS-T-1' => 1.0,
      ),
      19 => 
      array (
        'TS-T-1' => 1.0,
      ),
      20 => 
      array (
        'TS-T-1' => 1.0,
      ),
      21 => 
      array (
        'TS-T-1' => 1.0,
      ),
      22 => 
      array (
        'TS-T-1' => 1.0,
      ),
      23 => 
      array (
        'TS-T-1' => 1.0,
      ),
    ),
    'friday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-T-1' => 1.0,
      ),
      1 => 
      array (
        'TS-T-1' => 1.0,
      ),
      2 => 
      array (
        'TS-T-1' => 1.0,
      ),
      3 => 
      array (
        'TS-T-1' => 1.0,
      ),
      4 => 
      array (
        'TS-T-1' => 1.0,
      ),
      5 => 
      array (
        'TS-T-1' => 1.0,
      ),
      6 => 
      array (
        'TS-T-1' => 1.0,
      ),
      7 => 
      array (
        'TS-T-1' => 1.0,
      ),
      8 => 
      array (
        'TS-T-1' => 1.0,
      ),
      9 => 
      array (
        'TS-T-1' => 1.0,
      ),
      10 => 
      array (
        'TS-T-1' => 1.0,
      ),
      11 => 
      array (
        'TS-T-1' => 1.0,
      ),
      12 => 
      array (
        'TS-T-1' => 1.0,
      ),
      13 => 
      array (
        'TS-T-1' => 1.0,
      ),
      14 => 
      array (
        'TS-T-1' => 1.0,
      ),
      15 => 
      array (
        'TS-T-1' => 1.0,
      ),
      16 => 
      array (
        'TS-T-1' => 1.0,
      ),
      17 => 
      array (
        'TS-T-1' => 1.0,
      ),
      18 => 
      array (
        'TS-T-1' => 1.0,
      ),
      19 => 
      array (
        'TS-T-1' => 1.0,
      ),
      20 => 
      array (
        'TS-T-1' => 1.0,
      ),
      21 => 
      array (
        'TS-T-1' => 1.0,
      ),
      22 => 
      array (
        'TS-T-1' => 1.0,
      ),
      23 => 
      array (
        'TS-T-1' => 1.0,
      ),
    ),
    'saturday' => 
    array (
      'rest' => 
      array (
        'TS-GS-1' => 1.0,
      ),
      0 => 
      array (
        'TS-T-1' => 1.0,
      ),
      1 => 
      array (
        'TS-T-1' => 1.0,
      ),
      2 => 
      array (
        'TS-T-1' => 1.0,
      ),
      3 => 
      array (
        'TS-T-1' => 1.0,
      ),
      4 => 
      array (
        'TS-T-1' => 1.0,
      ),
      5 => 
      array (
        'TS-T-1' => 1.0,
      ),
      6 => 
      array (
        'TS-T-1' => 1.0,
      ),
      7 => 
      array (
        'TS-T-1' => 1.0,
      ),
      8 => 
      array (
        'TS-T-1' => 1.0,
      ),
      9 => 
      array (
        'TS-T-1' => 1.0,
      ),
      10 => 
      array (
        'TS-T-1' => 1.0,
      ),
      11 => 
      array (
        'TS-T-1' => 1.0,
      ),
      12 => 
      array (
        'TS-T-1' => 1.0,
      ),
      13 => 
      array (
        'TS-T-1' => 1.0,
      ),
      14 => 
      array (
        'TS-T-1' => 1.0,
      ),
      15 => 
      array (
        'TS-T-1' => 1.0,
      ),
      16 => 
      array (
        'TS-T-1' => 1.0,
      ),
      17 => 
      array (
        'TS-T-1' => 1.0,
      ),
      18 => 
      array (
        'TS-T-1' => 1.0,
      ),
      19 => 
      array (
        'TS-T-1' => 1.0,
      ),
      20 => 
      array (
        'TS-T-1' => 1.0,
      ),
      21 => 
      array (
        'TS-T-1' => 1.0,
      ),
      22 => 
      array (
        'TS-T-1' => 1.0,
      ),
      23 => 
      array (
        'TS-T-1' => 1.0,
      ),
    ),
  ),
);

?>