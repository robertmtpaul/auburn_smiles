<?php

function themify_do_demo_import() {
$term = array (
  'term_id' => 1,
  'name' => 'Uncategorized',
  'slug' => 'uncategorized',
  'term_group' => 0,
  'taxonomy' => 'category',
  'description' => '',
  'parent' => 0,
);
Themify_Import_Helper::process_import_term( $term );

$term = array (
  'term_id' => 2,
  'name' => 'Main Navigation',
  'slug' => 'main-navigation',
  'term_group' => 0,
  'taxonomy' => 'nav_menu',
  'description' => '',
  'parent' => 0,
);
Themify_Import_Helper::process_import_term( $term );

$term = array (
  'term_id' => 3,
  'name' => 'Footer Widget Menu',
  'slug' => 'footer-widget-menu',
  'term_group' => 0,
  'taxonomy' => 'nav_menu',
  'description' => '',
  'parent' => 0,
);
Themify_Import_Helper::process_import_term( $term );

$term = array (
  'term_id' => 7,
  'name' => 'App Design',
  'slug' => 'app-design',
  'term_group' => 0,
  'taxonomy' => 'portfolio-category',
  'description' => '',
  'parent' => 0,
);
Themify_Import_Helper::process_import_term( $term );

$term = array (
  'term_id' => 9,
  'name' => 'Graphic Magazine',
  'slug' => 'graphic-magazine',
  'term_group' => 0,
  'taxonomy' => 'portfolio-category',
  'description' => '',
  'parent' => 0,
);
Themify_Import_Helper::process_import_term( $term );

$term = array (
  'term_id' => 10,
  'name' => 'Advertising',
  'slug' => 'advertising',
  'term_group' => 0,
  'taxonomy' => 'portfolio-category',
  'description' => '',
  'parent' => 0,
);
Themify_Import_Helper::process_import_term( $term );

$post = array (
  'ID' => 1,
  'post_date' => '2019-06-07 16:39:18',
  'post_date_gmt' => '2019-06-07 16:39:18',
  'post_content' => 'Welcome to <a href="http://themify.me/demo/themes/">Themify Demos</a>. This is your first post. Edit or delete it, then start blogging!',
  'post_title' => 'Hello world!',
  'post_excerpt' => '',
  'post_name' => 'hello-world',
  'post_modified' => '2019-06-07 16:39:18',
  'post_modified_gmt' => '2019-06-07 16:39:18',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?p=1',
  'menu_order' => 0,
  'post_type' => 'post',
  'tax_input' => 
  array (
    'category' => 'uncategorized',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 46,
  'post_date' => '2019-06-08 09:00:27',
  'post_date_gmt' => '2019-06-08 09:00:27',
  'post_content' => '<!-- wp:themify-builder/canvas /--><!--themify_builder_static--><img src="https://themify.me/demo/themes/ultra-agency3/files/2019/06/graphic-studio-work-500x517.png" width="500" alt="graphic-studio-work" srcset="https://themify.me/demo/themes/ultra-agency3/files/2019/06/graphic-studio-work.png 500w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/graphic-studio-work-6x6.png 6w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/graphic-studio-work-60x62.png 60w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/graphic-studio-work-600x620.png 600w" sizes="(max-width: 500px) 100vw, 500px" />
<h3>Mission</h3> <p>As digital marketing is dependent on technology which is ever-evolving and fast-changing, the lorem ipsum section should be expected from digital marketing developments and strategies being used as of press time.</p>
<h1>About Us<br/>Our History</h1>
<p>Ultra Agency 3 creates experiences that transform brands, grow businesses and make people is lives better. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p> <h3>Vision</h3> <p>A strategy that is linked into the effectiveness of digital marketing is content marketing. It is found that content marketing is highly present in digital marketing and becomes highly successful when content marketing is involved. </p>
<h3>Our Team<br/>We\'re all about teamwork.</h3>
<img src="https://themify.me/demo/themes/ultra-agency3/files/2019/06/aldo-160x160.jpg" width="160" title="Amir Zadeh" alt="CEO" srcset="https://themify.me/demo/themes/ultra-agency3/files/2019/06/aldo-160x160.jpg 160w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/aldo-150x150.jpg 150w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/aldo.jpg 200w" sizes="(max-width: 160px) 100vw, 160px" /> <h3> Amir Zadeh </h3> CEO
<img src="https://themify.me/demo/themes/ultra-agency3/files/2019/06/jack-160x160.jpg" width="160" title="Louis Alba" alt="Senior Programmer" srcset="https://themify.me/demo/themes/ultra-agency3/files/2019/06/jack-160x160.jpg 160w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/jack-150x150.jpg 150w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/jack.jpg 200w" sizes="(max-width: 160px) 100vw, 160px" /> <h3> Louis Alba </h3> Senior Programmer
<img src="https://themify.me/demo/themes/ultra-agency3/files/2019/06/sheeva-160x160.jpg" width="160" title="Shelly Sharma" alt="Chief of Design" srcset="https://themify.me/demo/themes/ultra-agency3/files/2019/06/sheeva-160x160.jpg 160w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/sheeva-150x150.jpg 150w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/sheeva.jpg 200w" sizes="(max-width: 160px) 100vw, 160px" /> <h3> Shelly Sharma </h3> Chief of Design
<img src="https://themify.me/demo/themes/ultra-agency3/files/2019/06/john-160x160.jpg" width="160" title="Peters Abiodun" alt="Senior Developer" srcset="https://themify.me/demo/themes/ultra-agency3/files/2019/06/john-160x160.jpg 160w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/john-150x150.jpg 150w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/john.jpg 200w" sizes="(max-width: 160px) 100vw, 160px" /> <h3> Peters Abiodun </h3> Senior Developer
<img src="https://themify.me/demo/themes/ultra-agency3/files/2019/06/derby-160x160.jpg" width="160" title="Darcy Hutchens" alt="Chief of Finance" srcset="https://themify.me/demo/themes/ultra-agency3/files/2019/06/derby-160x160.jpg 160w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/derby-150x150.jpg 150w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/derby.jpg 200w" sizes="(max-width: 160px) 100vw, 160px" /> <h3> Darcy Hutchens </h3> Chief of Finance
<img src="https://themify.me/demo/themes/ultra-agency3/files/2019/06/randy-160x160.jpg" width="160" title="Ricky Onassis" alt="Senior Designer" srcset="https://themify.me/demo/themes/ultra-agency3/files/2019/06/randy-160x160.jpg 160w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/randy-150x150.jpg 150w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/randy.jpg 200w" sizes="(max-width: 160px) 100vw, 160px" /> <h3> Ricky Onassis </h3> Senior Designer
<h3>Our Partners<br/>The people we work with are invaluable.</h3>
<p>We are honoured to help advise brands, create new digital products, and launch effective campaigns for so many amazing clients.</p> <p>Thank you to everyone who has partnered with us or commissioned us to help achieve their dreams. Here are what a few of them have had to say. </p>
<img src="https://themify.me/demo/themes/ultra-agency3/files/2019/06/logo-forbes-140x45.png" width="140" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Quis ipsum suspendisse ultrices gravida." srcset="https://themify.me/demo/themes/ultra-agency3/files/2019/06/logo-forbes-140x45.png 140w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/logo-forbes.png 166w" sizes="(max-width: 140px) 100vw, 140px" /> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Quis ipsum suspendisse ultrices gravida.
<img src="https://themify.me/demo/themes/ultra-agency3/files/2019/06/logo-tnw-140x45.png" width="140" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Quis ipsum suspendisse ultrices gravida." srcset="https://themify.me/demo/themes/ultra-agency3/files/2019/06/logo-tnw-140x45.png 140w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/logo-tnw.png 166w" sizes="(max-width: 140px) 100vw, 140px" /> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Quis ipsum suspendisse ultrices gravida.
<img src="https://themify.me/demo/themes/ultra-agency3/files/2019/06/logo-entrepeneur-150x48.png" width="150" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." srcset="https://themify.me/demo/themes/ultra-agency3/files/2019/06/logo-entrepeneur-150x48.png 150w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/logo-entrepeneur.png 166w" sizes="(max-width: 150px) 100vw, 150px" /> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
<img src="https://themify.me/demo/themes/ultra-agency3/files/2019/06/logo-huffpost-185x52.png" width="185" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." srcset="https://themify.me/demo/themes/ultra-agency3/files/2019/06/logo-huffpost-185x52.png 185w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/logo-huffpost.png 189w" sizes="(max-width: 185px) 100vw, 185px" /> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
<link id="themify-builder-338-generated" rel="stylesheet" href="https://themify.me/demo/themes/ultra-agency3/files/themify-css/themify-builder-338-generated.css?ver=1571636533" type="text/css" /> 
 <h3>Start your project now. </h3><p>Let us help you catapult your idea into a reality. There\\\'s no better day.</p> 
 <a href="https://themify.me/" > Start Free Trial </a><!--/themify_builder_static-->',
  'post_title' => 'About',
  'post_excerpt' => '',
  'post_name' => 'about',
  'post_modified' => '2020-02-07 21:05:36',
  'post_modified_gmt' => '2020-02-07 21:05:36',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?page_id=46',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar-none',
    'content_width' => 'full_width',
    'hide_page_title' => 'yes',
    'section_scrolling_mobile' => 'on',
    'mobile_menu_styles' => 'default',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"8x0y944\\",\\"cols\\":[{\\"element_id\\":\\"xyvp945\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"element_id\\":\\"1wul574\\",\\"cols\\":[{\\"element_id\\":\\"d95u575\\",\\"grid_class\\":\\"col2-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"tmfh808\\",\\"mod_settings\\":{\\"param_image\\":\\"regular\\",\\"width_image\\":\\"500\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/06\\\\/graphic-studio-work.png\\",\\"style_image\\":\\"image-top\\",\\"margin_bottom\\":\\"40\\"}},{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"9rbx916\\",\\"mod_settings\\":{\\"content_text\\":\\"<h3>Mission<\\\\/h3>\\\\n<p>As digital marketing is dependent on technology which is ever-evolving and fast-changing, the lorem ipsum section should be expected from digital marketing developments and strategies being used as of press time.<\\\\/p>\\",\\"breakpoint_mobile\\":{\\"margin_bottom\\":\\"30\\"}}}]},{\\"element_id\\":\\"5hoq575\\",\\"grid_class\\":\\"col2-1\\",\\"modules\\":[{\\"mod_name\\":\\"fancy-heading\\",\\"element_id\\":\\"ypzb939\\",\\"mod_settings\\":{\\"heading\\":\\"About Us\\",\\"sub_heading\\":\\"Our History\\",\\"text_alignment\\":\\"themify-text-left\\",\\"heading_tag\\":\\"h1\\",\\"breakpoint_mobile\\":{\\"font_size_subheading_unit\\":\\"px\\",\\"font_size_subheading\\":\\"40\\",\\"font_color_type_subheading\\":\\"font_color_subheading_solid\\",\\"font_color_type\\":\\"font_color_solid\\"}}},{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"76a0609\\",\\"mod_settings\\":{\\"content_text\\":\\"<p>Ultra Agency 3 creates experiences that transform brands, grow businesses and make people is lives better. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<\\\\/p>\\\\n<h3>Vision<\\\\/h3>\\\\n<p>A strategy that is linked into the effectiveness of digital marketing is content marketing. It is found that content marketing is highly present in digital marketing and becomes highly successful when content marketing is involved. <\\\\/p>\\"}}]}],\\"col_tablet\\":\\"column-full\\",\\"styling\\":{\\"margin_bottom_unit\\":\\"%\\",\\"margin_bottom\\":\\"5\\"}},{\\"element_id\\":\\"v5nb877\\",\\"cols\\":[{\\"element_id\\":\\"4twr877\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"fancy-heading\\",\\"element_id\\":\\"l6mo628\\",\\"mod_settings\\":{\\"heading\\":\\"Our Team\\",\\"sub_heading\\":\\"We\\\'re all about teamwork.\\",\\"text_alignment\\":\\"themify-text-center\\",\\"heading_tag\\":\\"h3\\",\\"margin_bottom_unit\\":\\"%\\",\\"margin_bottom\\":\\"5\\",\\"divider\\":\\"no\\"}}]}],\\"styling\\":{\\"checkbox_margin_apply_all\\":\\"1\\"}},{\\"element_id\\":\\"1oq423\\",\\"cols\\":[{\\"element_id\\":\\"4u6j27\\",\\"grid_class\\":\\"col3-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"r9mx345\\",\\"mod_settings\\":{\\"caption_image\\":\\"CEO\\",\\"param_image\\":\\"regular\\",\\"title_image\\":\\"Amir Zadeh\\",\\"width_image\\":\\"160\\",\\"appearance_image\\":\\"circle\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/06\\\\/aldo.jpg\\",\\"style_image\\":\\"image-left\\",\\"background_position\\":\\"left-top\\",\\"background_repeat\\":\\"repeat\\",\\"global_styles\\":\\"tb_gs3015d0\\",\\"c_m_left\\":\\"-60\\",\\"c_p_left\\":\\"20\\",\\"c_p_bottom\\":\\"10\\",\\"c_p_right\\":\\"20\\",\\"c_p_top\\":\\"10\\",\\"breakpoint_tablet\\":{\\"c_m_left\\":\\"0\\",\\"global_styles\\":\\"tb_gs3015d0\\",\\"font_color_type\\":\\"font_color_solid\\"}}},{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"cxla566\\",\\"mod_settings\\":{\\"caption_image\\":\\"Senior Programmer\\",\\"param_image\\":\\"regular\\",\\"title_image\\":\\"Louis Alba\\",\\"width_image\\":\\"160\\",\\"appearance_image\\":\\"circle\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/06\\\\/jack.jpg\\",\\"style_image\\":\\"image-left\\",\\"margin_bottom\\":\\"30\\",\\"global_styles\\":\\"tb_gs3015d0\\",\\"c_m_left\\":\\"-60\\",\\"c_p_left\\":\\"20\\",\\"c_p_bottom\\":\\"10\\",\\"c_p_right\\":\\"20\\",\\"c_p_top\\":\\"10\\",\\"breakpoint_tablet\\":{\\"c_m_left\\":\\"0\\",\\"global_styles\\":\\"tb_gs3015d0\\"}}}]},{\\"element_id\\":\\"ffni28\\",\\"grid_class\\":\\"col3-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"2lu8302\\",\\"mod_settings\\":{\\"caption_image\\":\\"Chief of Design\\\\n\\",\\"param_image\\":\\"regular\\",\\"title_image\\":\\"Shelly Sharma\\",\\"width_image\\":\\"160\\",\\"appearance_image\\":\\"circle\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/06\\\\/sheeva.jpg\\",\\"style_image\\":\\"image-left\\",\\"margin_bottom\\":\\"30\\",\\"global_styles\\":\\"tb_gs3015d0\\",\\"c_m_left\\":\\"-60\\",\\"c_p_left\\":\\"20\\",\\"c_p_bottom\\":\\"10\\",\\"c_p_right\\":\\"20\\",\\"c_p_top\\":\\"10\\",\\"breakpoint_tablet\\":{\\"c_m_left\\":\\"0\\",\\"global_styles\\":\\"tb_gs3015d0\\"}}},{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"hqa9374\\",\\"mod_settings\\":{\\"caption_image\\":\\"Senior Developer\\",\\"param_image\\":\\"regular\\",\\"title_image\\":\\"Peters Abiodun\\",\\"width_image\\":\\"160\\",\\"appearance_image\\":\\"circle\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/06\\\\/john.jpg\\",\\"style_image\\":\\"image-left\\",\\"margin_bottom\\":\\"30\\",\\"global_styles\\":\\"tb_gs3015d0\\",\\"c_m_left\\":\\"-60\\",\\"c_p_left\\":\\"20\\",\\"c_p_bottom\\":\\"10\\",\\"c_p_right\\":\\"20\\",\\"c_p_top\\":\\"10\\",\\"breakpoint_tablet\\":{\\"c_m_left\\":\\"0\\",\\"global_styles\\":\\"tb_gs3015d0\\"}}}]},{\\"element_id\\":\\"tbur29\\",\\"grid_class\\":\\"col3-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"grxp39\\",\\"mod_settings\\":{\\"caption_image\\":\\"Chief of Finance\\",\\"param_image\\":\\"regular\\",\\"title_image\\":\\"Darcy Hutchens\\",\\"width_image\\":\\"160\\",\\"appearance_image\\":\\"circle\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/06\\\\/derby.jpg\\",\\"style_image\\":\\"image-left\\",\\"margin_bottom\\":\\"30\\",\\"global_styles\\":\\"tb_gs3015d0\\",\\"c_m_left\\":\\"-60\\",\\"c_p_left\\":\\"20\\",\\"c_p_bottom\\":\\"10\\",\\"c_p_right\\":\\"20\\",\\"c_p_top\\":\\"10\\",\\"breakpoint_tablet\\":{\\"c_m_left\\":\\"0\\",\\"global_styles\\":\\"tb_gs3015d0\\"}}},{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"bw1879\\",\\"mod_settings\\":{\\"caption_image\\":\\"Senior Designer\\",\\"param_image\\":\\"regular\\",\\"title_image\\":\\"Ricky Onassis\\",\\"width_image\\":\\"160\\",\\"appearance_image\\":\\"circle\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/06\\\\/randy.jpg\\",\\"style_image\\":\\"image-left\\",\\"margin_bottom\\":\\"30\\",\\"global_styles\\":\\"tb_gs3015d0\\",\\"c_m_left\\":\\"-60\\",\\"c_p_left\\":\\"20\\",\\"c_p_bottom\\":\\"10\\",\\"c_p_right\\":\\"20\\",\\"c_p_top\\":\\"10\\",\\"breakpoint_tablet\\":{\\"c_m_left\\":\\"0\\",\\"global_styles\\":\\"tb_gs3015d0\\"}}}]}],\\"col_tablet\\":\\"column3-1\\",\\"col_mobile\\":\\"column-full\\",\\"styling\\":{\\"checkbox_margin_apply_all\\":\\"1\\"}}]}],\\"styling\\":{\\"padding_bottom_unit\\":\\"%\\",\\"padding_bottom\\":\\"7\\",\\"padding_top_unit\\":\\"%\\",\\"padding_top\\":\\"8\\",\\"background_position\\":\\"left-top\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat-none\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/07\\\\/bg-banner-hero-top-blue.png\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"row_width\\":\\"fullwidth\\"}},{\\"element_id\\":\\"tnuv414\\",\\"cols\\":[{\\"element_id\\":\\"m5wt417\\",\\"grid_class\\":\\"col-full\\"}],\\"styling\\":{\\"padding_bottom_unit\\":\\"%\\",\\"padding_top_unit\\":\\"%\\",\\"padding_top\\":\\"15\\",\\"background_position\\":\\"center-center\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"fullcover\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/06\\\\/partners.jpg\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"padding_bottom\\":\\"15\\",\\"breakpoint_tablet\\":{\\"padding_top\\":\\"29\\",\\"padding_top_unit\\":\\"%\\"},\\"breakpoint_tablet_landscape\\":{\\"padding_top\\":\\"26\\",\\"padding_top_unit\\":\\"%\\"}}},{\\"element_id\\":\\"8i9o176\\",\\"cols\\":[{\\"element_id\\":\\"qawa882\\",\\"grid_class\\":\\"col4-2\\",\\"modules\\":[{\\"mod_name\\":\\"fancy-heading\\",\\"element_id\\":\\"3y6z158\\",\\"mod_settings\\":{\\"heading\\":\\"Our Partners\\",\\"sub_heading\\":\\"The people we work with are invaluable.\\",\\"text_alignment\\":\\"themify-text-left\\",\\"heading_tag\\":\\"h3\\",\\"margin_bottom\\":\\"20\\"}},{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"gm9e886\\",\\"mod_settings\\":{\\"content_text\\":\\"<p>We are honoured to help advise brands, create new digital products, and launch effective campaigns for so many amazing clients.<\\\\/p>\\\\n<p>Thank you to everyone who has partnered with us or commissioned us to help achieve their dreams. Here are what a few of them have had to say. <\\\\/p>\\",\\"background_position\\":\\"left-top\\",\\"background_repeat\\":\\"repeat\\"}}],\\"styling\\":{\\"checkbox_b_ra_apply_all\\":\\"1\\",\\"padding_left_unit\\":\\"%\\",\\"padding_left\\":\\"5\\",\\"padding_bottom_unit\\":\\"%\\",\\"padding_bottom\\":\\"5\\",\\"padding_right_unit\\":\\"%\\",\\"padding_right\\":\\"5\\",\\"padding_top_unit\\":\\"%\\",\\"padding_top\\":\\"5\\",\\"background_position\\":\\"center-center\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"bl_m\\":\\"normal\\",\\"border-type\\":\\"top\\",\\"top-frame_location\\":\\"in_bellow\\",\\"top-frame_height_unit\\":\\"%\\",\\"top-frame_width_unit\\":\\"%\\",\\"top-frame_type\\":\\"top-presets\\",\\"border_inner-type\\":\\"top\\",\\"background_position_inner\\":\\"center-center\\",\\"background_attachment_inner\\":\\"scroll\\",\\"background_repeat_inner\\":\\"repeat\\",\\"cover_color-type\\":\\"color\\",\\"global_styles\\":\\"tb_gs2305d0\\",\\"breakpoint_mobile\\":{\\"global_styles\\":\\"tb_gs2305d0\\",\\"margin-bottom_unit\\":\\"px\\",\\"margin-bottom\\":\\"40\\"},\\"breakpoint_tablet\\":{\\"padding_bottom\\":\\"4\\",\\"padding_bottom_unit\\":\\"%\\",\\"global_styles\\":\\"tb_gs2305d0\\",\\"margin-bottom_unit\\":\\"px\\",\\"margin-bottom\\":\\"40\\"}}},{\\"element_id\\":\\"emks738\\",\\"grid_class\\":\\"col4-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"y8up398\\",\\"mod_settings\\":{\\"param_image\\":\\"regular\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/06\\\\/logo-forbes.png\\",\\"style_image\\":\\"image-center\\",\\"caption_image\\":\\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Quis ipsum suspendisse ultrices gravida.\\",\\"checkbox_b_ra_apply_all\\":\\"1\\",\\"padding_left_unit\\":\\"%\\",\\"padding_left\\":\\"5\\",\\"padding_bottom_unit\\":\\"%\\",\\"padding_bottom\\":\\"10\\",\\"padding_right_unit\\":\\"%\\",\\"padding_right\\":\\"5\\",\\"padding_top_unit\\":\\"%\\",\\"padding_top\\":\\"10\\",\\"background_position\\":\\"left-top\\",\\"background_repeat\\":\\"repeat\\",\\"margin_bottom\\":\\"30\\",\\"width_image\\":\\"140\\",\\"global_styles\\":\\"tb_gs2305d0\\",\\"breakpoint_mobile\\":{\\"margin_bottom\\":\\"40\\",\\"margin_bottom_unit\\":\\"px\\"},\\"breakpoint_tablet\\":{\\"margin_bottom\\":\\"40\\",\\"margin_bottom_unit\\":\\"px\\"}}},{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"bft5304\\",\\"mod_settings\\":{\\"param_image\\":\\"regular\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/06\\\\/logo-tnw.png\\",\\"style_image\\":\\"image-center\\",\\"caption_image\\":\\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Quis ipsum suspendisse ultrices gravida.\\",\\"checkbox_b_ra_apply_all\\":\\"1\\",\\"padding_left_unit\\":\\"%\\",\\"padding_left\\":\\"5\\",\\"padding_bottom_unit\\":\\"%\\",\\"padding_bottom\\":\\"10\\",\\"padding_right_unit\\":\\"%\\",\\"padding_right\\":\\"5\\",\\"padding_top_unit\\":\\"%\\",\\"padding_top\\":\\"10\\",\\"background_position\\":\\"left-top\\",\\"background_repeat\\":\\"repeat\\",\\"margin_bottom\\":\\"30\\",\\"width_image\\":\\"140\\",\\"global_styles\\":\\"tb_gs2305d0\\",\\"breakpoint_mobile\\":{\\"margin_bottom\\":\\"0\\",\\"global_styles\\":\\"tb_gs2305d0\\"},\\"breakpoint_tablet\\":{\\"margin_bottom\\":\\"0\\",\\"global_styles\\":\\"tb_gs2305d0\\"}}}],\\"styling\\":{\\"checkbox_padding_apply_all\\":\\"1\\",\\"breakpoint_tablet\\":{\\"padding_bottom\\":\\"0\\"}}},{\\"element_id\\":\\"tcwb743\\",\\"grid_class\\":\\"col4-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"wams25\\",\\"mod_settings\\":{\\"param_image\\":\\"regular\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/06\\\\/logo-entrepeneur.png\\",\\"style_image\\":\\"image-center\\",\\"caption_image\\":\\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\\",\\"checkbox_b_ra_apply_all\\":\\"1\\",\\"padding_left_unit\\":\\"%\\",\\"padding_left\\":\\"5\\",\\"padding_bottom_unit\\":\\"%\\",\\"padding_bottom\\":\\"10\\",\\"padding_right_unit\\":\\"%\\",\\"padding_right\\":\\"5\\",\\"padding_top_unit\\":\\"%\\",\\"padding_top\\":\\"10\\",\\"background_position\\":\\"left-top\\",\\"background_repeat\\":\\"repeat\\",\\"margin_bottom\\":\\"30\\",\\"width_image\\":\\"150\\",\\"margin_top\\":\\"40\\",\\"border-type\\":\\"top\\",\\"global_styles\\":\\"tb_gs2305d0\\",\\"breakpoint_mobile\\":{\\"margin_bottom\\":\\"40\\",\\"margin_bottom_unit\\":\\"px\\"},\\"breakpoint_tablet\\":{\\"margin_bottom\\":\\"40\\",\\"margin_bottom_unit\\":\\"px\\"}}},{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"l62j750\\",\\"mod_settings\\":{\\"param_image\\":\\"regular\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/06\\\\/logo-huffpost.png\\",\\"style_image\\":\\"image-center\\",\\"caption_image\\":\\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\\",\\"checkbox_b_ra_apply_all\\":\\"1\\",\\"padding_left_unit\\":\\"%\\",\\"padding_left\\":\\"5\\",\\"padding_bottom_unit\\":\\"%\\",\\"padding_bottom\\":\\"10\\",\\"padding_right_unit\\":\\"%\\",\\"padding_right\\":\\"5\\",\\"padding_top_unit\\":\\"%\\",\\"padding_top\\":\\"10\\",\\"background_position\\":\\"left-top\\",\\"background_repeat\\":\\"repeat\\",\\"margin_bottom\\":\\"30\\",\\"width_image\\":\\"185\\",\\"bl_m\\":\\"normal\\",\\"border-type\\":\\"top\\",\\"font_color_type\\":\\"font_color_solid\\",\\"global_styles\\":\\"tb_gs2305d0\\",\\"breakpoint_mobile\\":{\\"margin_bottom\\":\\"40\\",\\"margin_bottom_unit\\":\\"px\\"},\\"breakpoint_tablet\\":{\\"margin_bottom\\":\\"40\\",\\"margin_bottom_unit\\":\\"px\\"}}}]}],\\"gutter\\":\\"gutter-narrow\\",\\"column_h\\":\\"1\\",\\"col_tablet\\":\\"column-full\\",\\"styling\\":{\\"background_position\\":\\"center-center\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"margin-top_unit\\":\\"%\\",\\"margin-top\\":\\"-10\\"}},{\\"element_id\\":\\"ijxr924\\",\\"cols\\":[{\\"element_id\\":\\"1eyk925\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"layout-part\\",\\"element_id\\":\\"8u64964\\",\\"mod_settings\\":{\\"selected_layout_part\\":\\"start-project-now\\"}}]}]}]',
    'themify_used_global_styles' => 
    array (
      0 => 'tb_gs3015d0',
      12 => 'tb_gs2305d0',
    ),
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 51,
  'post_date' => '2019-06-08 09:01:32',
  'post_date_gmt' => '2019-06-08 09:01:32',
  'post_content' => '<!-- wp:themify-builder/canvas /--><!--themify_builder_static--><h1>Where We Are</h1>
401 Richmond St W, Toronto, <br>ON M5V 3A8, Canada
<p>info@UltraAgency3Skin.com</p> <p>+1 800 559 5800</p>
Our Shop
<img src="https://themify.me/demo/themes/ultra-agency3/files/2019/06/contact-us-image-400x246.jpg" width="400" alt="contact-us-image" srcset="https://themify.me/demo/themes/ultra-agency3/files/2019/06/contact-us-image-400x246.jpg 400w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/contact-us-image-6x3.jpg 6w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/contact-us-image-60x36.jpg 60w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/contact-us-image-600x369.jpg 600w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/contact-us-image.jpg 417w" sizes="(max-width: 400px) 100vw, 400px" />
<h3>Give Us a Shout!</h3> <p>Any questions we couldn\'t answer in our FAQ section below? No problem. Send us a quick message and one of our agents will get back to you in a few hours.</p>
<form action="https://themify.me/demo/themes/ultra-agency3/wp-admin/admin-ajax.php" id="contact-0--form" method="post"> <label for="contact-0--contact-name">Name *</label> <input type="text" name="contact-name" placeholder="" id="contact-0--contact-name" value="" required/> <label for="contact-0--contact-email">Email *</label> <input type="text" name="contact-email" placeholder="" id="contact-0--contact-email" value="" required /> <label for="contact-0--contact-subject">Subject *</label> <input type="text" name="contact-subject" placeholder="" id="contact-0--contact-subject" value="" required /> <label for="contact-0--contact-message">Message *</label> <textarea name="contact-message" placeholder="" id="contact-0--contact-message" rows="8" cols="45" required></textarea> <button type="submit"> Send </button> </form>
<h3>Frequently Asked Questions</h3>
<ul><li><h4>How do our pricing plans work?</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></li><li><h4>Who should use our services?</h4><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p></li><li><h4>Do you offer enterprise plans?</h4><p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p></li><li><h4>Who will be working with us?</h4><p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae</p></li><li><h4>Do you have an affiliate program?</h4><p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae</p></li></ul><!--/themify_builder_static-->',
  'post_title' => 'Contact',
  'post_excerpt' => '',
  'post_name' => 'contact',
  'post_modified' => '2019-09-19 15:39:15',
  'post_modified_gmt' => '2019-09-19 15:39:15',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?page_id=51',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar-none',
    'content_width' => 'full_width',
    'hide_page_title' => 'yes',
    'section_scrolling_mobile' => 'on',
    'mobile_menu_styles' => 'default',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"jqx5888\\",\\"cols\\":[{\\"element_id\\":\\"gcv8889\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"element_id\\":\\"vjua443\\",\\"cols\\":[{\\"element_id\\":\\"80hl448\\",\\"grid_class\\":\\"col2-1\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"xhhu532\\",\\"mod_settings\\":{\\"content_text\\":\\"<h1>Where We Are<\\\\/h1>\\",\\"breakpoint_mobile\\":{\\"font_size_h1_unit\\":\\"px\\",\\"font_size_h1\\":\\"30\\",\\"font_color_type_h1\\":\\"font_color_h1_solid\\",\\"font_color_type\\":\\"font_color_solid\\"},\\"breakpoint_tablet\\":{\\"font_size_h1_unit\\":\\"px\\",\\"font_size_h1\\":\\"38\\",\\"font_color_type_h1\\":\\"font_color_h1_solid\\",\\"font_color_type\\":\\"font_color_solid\\"}}}],\\"styling\\":{\\"breakpoint_mobile\\":{\\"padding_bottom\\":\\"30\\",\\"padding_bottom_unit\\":\\"px\\"},\\"breakpoint_tablet\\":{\\"padding_bottom\\":\\"26\\",\\"padding_bottom_unit\\":\\"px\\"}}},{\\"element_id\\":\\"06ht449\\",\\"grid_class\\":\\"col2-1\\",\\"modules\\":[{\\"mod_name\\":\\"icon\\",\\"element_id\\":\\"hrp2217\\",\\"mod_settings\\":{\\"content_icon\\":[{\\"icon\\":\\"ti-location-pin\\",\\"icon_color_bg\\":\\"transparent\\",\\"label\\":\\"401 Richmond St W, Toronto, <br>ON M5V 3A8, Canada\\",\\"link_options\\":\\"regular\\"}],\\"icon_arrangement\\":\\"icon_horizontal\\",\\"icon_style\\":\\"circle\\",\\"icon_size\\":\\"xlarge\\",\\"margin_bottom\\":\\"20\\",\\"font_weight\\":\\"bold\\",\\"font_color_type\\":\\"font_color_solid\\",\\"f_s_i_unit\\":\\"px\\",\\"f_s_i\\":\\"50\\",\\"font_color_icon\\":\\"#01c99c\\",\\"font_size_unit\\":\\"px\\",\\"font_size\\":\\"23\\",\\"breakpoint_mobile\\":{\\"f_s_i_unit\\":\\"px\\",\\"f_s_i\\":\\"40\\",\\"font_color_icon\\":\\"#01c99c\\",\\"font_weight\\":\\"bold\\",\\"font_size_unit\\":\\"px\\",\\"font_size\\":\\"16\\",\\"font_color_type\\":\\"font_color_solid\\",\\"margin_bottom\\":\\"20\\"}}},{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"zh7s419\\",\\"mod_settings\\":{\\"content_text\\":\\"<p>info@UltraAgency3Skin.com<\\\\/p>\\\\n<p>+1 800 559 5800<\\\\/p>\\"}}],\\"styling\\":{\\"checkbox_b_ra_apply_all\\":\\"1\\",\\"padding_left_unit\\":\\"%\\",\\"padding_left\\":\\"4\\",\\"padding_bottom_unit\\":\\"%\\",\\"padding_bottom\\":\\"2\\",\\"padding_right_unit\\":\\"%\\",\\"padding_right\\":\\"4\\",\\"padding_top_unit\\":\\"%\\",\\"padding_top\\":\\"3\\",\\"background_position\\":\\"center-center\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"global_styles\\":\\"tb_gs2305d0\\",\\"breakpoint_mobile\\":{\\"global_styles\\":\\"tb_gs2305d0\\"},\\"zi\\":\\"2\\"}}],\\"column_alignment\\":\\"col_align_middle\\",\\"styling\\":{\\"custom_parallax_scroll_zindex\\":\\"3\\",\\"margin_bottom_unit\\":\\"%\\",\\"margin_bottom\\":\\"-5\\",\\"breakpoint_tablet_landscape\\":{\\"margin_bottom\\":\\"-7\\",\\"margin_bottom_unit\\":\\"%\\"},\\"breakpoint_tablet\\":{\\"margin_bottom\\":\\"-25\\",\\"margin_bottom_unit\\":\\"%\\"},\\"breakpoint_mobile\\":{\\"margin_bottom\\":\\"-25\\",\\"margin_bottom_unit\\":\\"%\\"}}}],\\"styling\\":{\\"background_position\\":\\"center-center\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\"}}],\\"column_alignment\\":\\"col_align_middle\\",\\"styling\\":{\\"background_position\\":\\"left-top\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat-none\\",\\"background_image\\":\\"https://themify.me/demo/themes/ultra-agency3\\\\/files\\\\/2019\\\\/07\\\\/bg-banner-hero-top-blue.png\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"padding_top_unit\\":\\"%\\",\\"padding_top\\":\\"5\\",\\"custom_parallax_scroll_zindex\\":\\"3\\",\\"margin-bottom_unit\\":\\"%\\",\\"breakpoint_mobile\\":{\\"padding_top\\":\\"20\\",\\"padding_top_unit\\":\\"%\\",\\"padding_bottom\\":\\"0\\"},\\"breakpoint_tablet\\":{\\"padding_top\\":\\"12\\",\\"padding_top_unit\\":\\"%\\"},\\"breakpoint_tablet_landscape\\":{\\"padding_top\\":\\"11\\",\\"padding_top_unit\\":\\"%\\"}}},{\\"element_id\\":\\"hjc2881\\",\\"cols\\":[{\\"element_id\\":\\"ocei886\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"maps-pro\\",\\"element_id\\":\\"5nyf946\\",\\"mod_settings\\":{\\"type_map\\":\\"ROADMAP\\",\\"scrollwheel_map\\":\\"disable\\",\\"draggable_map\\":\\"enable\\",\\"disable_map_ui\\":\\"no\\",\\"w_map_unit\\":\\"%\\",\\"w_map\\":\\"100\\",\\"h_map\\":\\"750\\",\\"zoom_map\\":\\"16\\",\\"style_map\\":\\"muted-blue\\",\\"map_polyline\\":\\"no\\",\\"map_polyline_geodesic\\":\\"yes\\",\\"map_polyline_stroke\\":\\"2\\",\\"map_polyline_color\\":\\"#ff0000_1\\",\\"map_center\\":\\"401 Richmond St W, Toronto, ON M5V 3A8, Canada\\",\\"map_display_type\\":\\"dynamic\\",\\"w_map_static\\":\\"500\\",\\"markers\\":[{\\"address\\":\\"401 Richmond St W, Toronto, ON M5V 3A8, Canada\\",\\"latlng\\":\\"43.6476322,-79.39506979999999\\",\\"title\\":\\"Our Shop\\",\\"image\\":\\"https://themify.me/demo/themes/ultra-agency3\\\\/files\\\\/2019\\\\/06\\\\/pin-map.png\\"}],\\"custom_parallax_scroll_zindex\\":\\"1\\"}}]}],\\"styling\\":{\\"row_width\\":\\"fullwidth-content\\",\\"custom_parallax_scroll_zindex\\":\\"1\\"}},{\\"element_id\\":\\"bhwd475\\",\\"cols\\":[{\\"element_id\\":\\"20wd476\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"element_id\\":\\"59hm191\\",\\"cols\\":[{\\"element_id\\":\\"kxr9193\\",\\"grid_class\\":\\"col2-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"hcgt181\\",\\"mod_settings\\":{\\"param_image\\":\\"regular\\",\\"width_image\\":\\"400\\",\\"url_image\\":\\"https://themify.me/demo/themes/ultra-agency3\\\\/files\\\\/2019\\\\/06\\\\/contact-us-image.jpg\\",\\"style_image\\":\\"image-top\\",\\"margin_bottom\\":\\"30\\"}},{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"tpd5997\\",\\"mod_settings\\":{\\"content_text\\":\\"<h3>Give Us a Shout!<\\\\/h3>\\\\n<p>Any questions we couldn\\\\\\\\\\\'t answer in our FAQ section below? No problem. Send us a quick message and one of our agents will get back to you in a few hours.<\\\\/p>\\"}}],\\"styling\\":{\\"border_right_width\\":\\"2\\",\\"border_right_color\\":\\"#e9f0fb\\",\\"border-type\\":\\"right\\",\\"padding_right_unit\\":\\"%\\",\\"padding_right\\":\\"3\\",\\"padding_bottom_unit\\":\\"%\\",\\"padding_top_unit\\":\\"%\\",\\"breakpoint_mobile\\":{\\"border_right_style\\":\\"none\\",\\"border_right_width\\":\\"2\\",\\"border_right_color\\":\\"#e9f0fb\\",\\"border-type\\":\\"right\\",\\"padding_bottom_unit\\":\\"%\\",\\"padding_right_unit\\":\\"%\\",\\"padding_top_unit\\":\\"%\\",\\"padding_bottom\\":\\"7\\",\\"padding_right\\":\\"0\\"}}},{\\"element_id\\":\\"cgen195\\",\\"grid_class\\":\\"col2-1\\",\\"modules\\":[{\\"mod_name\\":\\"contact\\",\\"element_id\\":\\"7qvz500\\",\\"mod_settings\\":{\\"field_name_label\\":\\"Name\\",\\"field_email_label\\":\\"Email\\",\\"field_subject_label\\":\\"Subject\\",\\"field_message_label\\":\\"Message\\",\\"field_sendcopy_label\\":\\"Send a copy to myself\\",\\"field_send_label\\":\\"Send\\",\\"gdpr_label\\":\\"I consent to my submitted data being collected and stored\\",\\"field_name_require\\":\\"yes\\",\\"field_email_require\\":\\"yes\\",\\"field_name_active\\":\\"yes\\",\\"field_email_active\\":\\"yes\\",\\"field_subject_active\\":\\"yes\\",\\"field_subject_require\\":\\"yes\\",\\"field_message_active\\":\\"yes\\",\\"field_send_align\\":\\"left\\",\\"field_extra\\":\\"{ \\\\\\\\\\\\\\"fields\\\\\\\\\\\\\\": [] }\\",\\"field_order\\":\\"{}\\",\\"contact_sent_from\\":\\"enable\\",\\"mail_contact\\":\\"please@replace-this-email.com\\",\\"layout_contact\\":\\"style1\\",\\"field_sendcopy_active\\":\\"\\",\\"field_captcha_active\\":\\"\\",\\"post_author\\":\\"\\",\\"send_to_admins\\":\\"true\\"}}],\\"styling\\":{\\"padding_left_unit\\":\\"%\\",\\"padding_left\\":\\"1\\"}}],\\"column_alignment\\":\\"col_align_middle\\",\\"styling\\":{\\"checkbox_b_ra_apply_all\\":\\"1\\",\\"margin_top_unit\\":\\"%\\",\\"margin_top\\":\\"-15\\",\\"checkbox_padding_apply_all\\":\\"1\\",\\"padding_top_unit\\":\\"%\\",\\"padding_top\\":\\"5\\",\\"background_position\\":\\"center-center\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"custom_parallax_scroll_zindex\\":\\"3\\",\\"bl_m\\":\\"normal\\",\\"border-type\\":\\"top\\",\\"global_styles\\":\\"tb_gs2305d0\\",\\"zi\\":\\"2\\",\\"breakpoint_mobile\\":{\\"global_styles\\":\\"tb_gs2305d0\\",\\"margin_top_unit\\":\\"%\\",\\"margin_top\\":\\"-30\\"},\\"breakpoint_tablet\\":{\\"global_styles\\":\\"tb_gs2305d0\\",\\"margin_top_unit\\":\\"%\\",\\"margin_top\\":\\"-30\\"},\\"breakpoint_tablet_landscape\\":{\\"global_styles\\":\\"tb_gs2305d0\\",\\"margin_top_unit\\":\\"%\\",\\"margin_top\\":\\"-20\\"}}}]}],\\"gutter\\":\\"gutter-none\\"},{\\"element_id\\":\\"2fea965\\",\\"cols\\":[{\\"element_id\\":\\"if0y968\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"xxd7727\\",\\"mod_settings\\":{\\"content_text\\":\\"<h3>Frequently Asked Questions<\\\\/h3>\\",\\"checkbox_margin_apply_all\\":\\"1\\",\\"text_align\\":\\"center\\",\\"line_height_unit\\":\\"em\\",\\"line_height\\":\\"1.4\\",\\"font_size_unit\\":\\"em\\",\\"font_size\\":\\"1.4\\",\\"font_color_type\\":\\"font_color_solid\\",\\"breakpoint_mobile\\":{\\"text_align\\":\\"center\\",\\"line_height_unit\\":\\"em\\",\\"line_height\\":\\"1.2\\",\\"font_size_unit\\":\\"em\\",\\"font_size\\":\\"1.2\\",\\"font_color_type\\":\\"font_color_solid\\"}}},{\\"mod_name\\":\\"accordion\\",\\"element_id\\":\\"g4gk319\\",\\"mod_settings\\":{\\"content_accordion\\":[{\\"title_accordion\\":\\"How do our pricing plans work?\\",\\"text_accordion\\":\\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<\\\\/p>\\",\\"default_accordion\\":\\"open\\"},{\\"title_accordion\\":\\"Who should use our services?\\",\\"text_accordion\\":\\"<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?<\\\\/p>\\",\\"default_accordion\\":\\"closed\\"},{\\"title_accordion\\":\\"Do you offer enterprise plans?\\",\\"text_accordion\\":\\"<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.<\\\\/p>\\",\\"default_accordion\\":\\"closed\\"},{\\"title_accordion\\":\\"Who will be working with us?\\",\\"text_accordion\\":\\"<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae<\\\\/p>\\",\\"default_accordion\\":\\"closed\\"},{\\"title_accordion\\":\\"Do you have an affiliate program?\\",\\"text_accordion\\":\\"<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae<\\\\/p>\\",\\"default_accordion\\":\\"closed\\"}],\\"expand_collapse_accordion\\":\\"toggle\\",\\"icon_active_accordion\\":\\"ti-angle-up\\",\\"icon_accordion\\":\\"ti-angle-down\\",\\"color_accordion\\":\\"transparent\\",\\"p_a_c_left\\":\\"0\\",\\"p_a_c_bottom\\":\\"10\\",\\"p_a_c_right\\":\\"0\\",\\"p_a_c_top\\":\\"15\\",\\"p_a_t_bottom\\":\\"18\\",\\"p_a_t_top\\":\\"18\\",\\"b_a_t_bottom_width\\":\\"1\\",\\"b_a_t_bottom_color\\":\\"#000000_0.07\\",\\"b_a_t-type\\":\\"bottom\\",\\"font_size_title_unit\\":\\"em\\",\\"font_size_title\\":\\"1.4\\",\\"padding_left_unit\\":\\"%\\",\\"padding_left\\":\\"10\\",\\"padding_right_unit\\":\\"%\\",\\"padding_right\\":\\"10\\",\\"breakpoint_mobile\\":{\\"padding_right_unit\\":\\"%\\",\\"padding_left_unit\\":\\"%\\",\\"padding_left\\":\\"0\\",\\"padding_right\\":\\"0\\",\\"font_size_title_unit\\":\\"em\\",\\"font_size_title\\":\\"1.2\\",\\"font_color_type\\":\\"font_color_solid\\"}}}]}],\\"styling\\":{\\"padding_bottom_unit\\":\\"%\\",\\"padding_bottom\\":\\"8\\",\\"padding_top_unit\\":\\"%\\",\\"padding_top\\":\\"8\\",\\"breakpoint_mobile\\":{\\"padding_top\\":\\"14\\",\\"padding_top_unit\\":\\"%\\"}}}]',
    'themify_used_global_styles' => 
    array (
      0 => 'tb_gs2305d0',
    ),
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 5,
  'post_date' => '2019-06-08 04:57:41',
  'post_date_gmt' => '2019-06-08 04:57:41',
  'post_content' => '<!-- wp:themify-builder/canvas /--><!--themify_builder_static--><h1>Creative Design &amp; Web Solutions.</h1> <p>Crafting incredible digital products for your unique and forward-thinking company. All company sizes welcome.</p>
<a href="https://themify.me/" > Start Free Trial </a> <a href="https://www.youtube.com/watch?v=P8Lte26BBN8" > Play Video </a>
<img src="https://themify.me/demo/themes/ultra-agency3/files/2019/06/graphic-hero-banner-565x492.png" width="565" alt="graphic-hero-banner" srcset="https://themify.me/demo/themes/ultra-agency3/files/2019/06/graphic-hero-banner.png 565w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/graphic-hero-banner-6x5.png 6w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/graphic-hero-banner-60x52.png 60w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/graphic-hero-banner-600x523.png 600w" sizes="(max-width: 565px) 100vw, 565px" />
<img src="https://themify.me/demo/themes/ultra-agency3/files/2019/06/graphic-studio-work-500x517.png" width="500" alt="graphic-studio-work" srcset="https://themify.me/demo/themes/ultra-agency3/files/2019/06/graphic-studio-work.png 500w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/graphic-studio-work-6x6.png 6w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/graphic-studio-work-60x62.png 60w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/graphic-studio-work-600x620.png 600w" sizes="(max-width: 500px) 100vw, 500px" />
<h3>Our History<br/>Creating Digital Experiences</h3>
<p>Ultra Agency 3 creates experiences that transform brands, grow businesses and make people\'s lives better. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using lorem ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.</p>
Read more
<h3>Our Services<br/>What We Offer</h3>
<img src="https://themify.me/demo/themes/ultra-agency3/files/2019/07/web-development-icon-217x217.png" width="217" title="Web Development" alt="Beautiful, functional, and effortless designs with a purpose." srcset="https://themify.me/demo/themes/ultra-agency3/files/2019/07/web-development-icon.png 217w, https://themify.me/demo/themes/ultra-agency3/files/2019/07/web-development-icon-150x150.png 150w" sizes="(max-width: 217px) 100vw, 217px" /> <h3> Web Development </h3> Beautiful, functional, and effortless designs with a purpose.
<img src="https://themify.me/demo/themes/ultra-agency3/files/2019/07/web-design-icon-217x217.png" width="217" title="Web Design" alt="Innovation and solutions based technology." srcset="https://themify.me/demo/themes/ultra-agency3/files/2019/07/web-design-icon.png 217w, https://themify.me/demo/themes/ultra-agency3/files/2019/07/web-design-icon-150x150.png 150w" sizes="(max-width: 217px) 100vw, 217px" /> <h3> Web Design </h3> Innovation and solutions based technology.
<img src="https://themify.me/demo/themes/ultra-agency3/files/2019/07/app-design-icon-217x217.png" width="217" title="App Design" alt="Inspire your audience and further your brand&#039;s capabilities." srcset="https://themify.me/demo/themes/ultra-agency3/files/2019/07/app-design-icon.png 217w, https://themify.me/demo/themes/ultra-agency3/files/2019/07/app-design-icon-150x150.png 150w" sizes="(max-width: 217px) 100vw, 217px" /> <h3> App Design </h3> Inspire your audience and further your brand\'s capabilities.
<h3>Client Testimonials<br/>What Our Clients Say</h3>
<ul data-id="tb_vw1o876" data-visible="1" data-mob-visible="0" data-scroll="1" data-auto-scroll="off" data-speed="1" data-wrap="yes" data-arrow="yes" data-pagination="no" data-effect="scroll" data-height="variable" data-pause-on-hover="resume" data-play-controller="no" data-horizontal="" > <li> 
 <p>It\'s been a pleasure working with the Ultra Agency 3 team who are incredibly skilled and creatively provide solutions. Quis scelerisque velit. Suspendisse consequat aliquam erat volutpat pretium magna sit amet porttitor lacini. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas rhoncus nisl ac varius vulputate tellus ut vesti. </p> <figure><img src="https://themify.me/demo/themes/ultra-agency3/files/2019/06/face5-100x100.jpg" width="100" height="100" alt="face5" srcset="https://themify.me/demo/themes/ultra-agency3/files/2019/06/face5-100x100.jpg 100w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/face5-150x150.jpg 150w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/face5.jpg 500w" sizes="(max-width: 100px) 100vw, 100px" /></figure> Michelle Obadiah CEO <a href="https://themify.me/">fusedcore.com</a> </li> <li> 
 <p>I was immediately taken away by the team of Ultra Agency 3. Sit amet, consectetur adipiscing elit. Donec egestas rhoncus nisl ac varius vulputate tellus ut vestibulum placerat. Aliquam erat volutpat. Vestibulum pretium magna sit amet porttitor lacinia curabitur quis scelerisque velit. </p> <figure><img src="https://themify.me/demo/themes/ultra-agency3/files/2019/06/face8-100x100.jpg" width="100" height="100" alt="face8" srcset="https://themify.me/demo/themes/ultra-agency3/files/2019/06/face8-100x100.jpg 100w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/face8-150x150.jpg 150w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/face8.jpg 500w" sizes="(max-width: 100px) 100vw, 100px" /></figure> John Smith V.P. <a href="https://themify.me/">zurisch.com</a> </li> <li> 
 <p>Ultra Agency 3\\\'s staff and support team were attentive to our business needs and consectetur adipiscing elit. Donec egestas rhoncus nisl ac varius. Donec vulputate tellus ut vestibulum placerat erat volutpat vestibulum pretium magna sit amet porttitor lacinia. Curabitur quis scelerisque velit suspendisse consequat aliquam erat volutpat pretium magna. </p> <figure><img src="https://themify.me/demo/themes/ultra-agency3/files/2019/06/face7-100x100.jpg" width="100" height="100" alt="face7" srcset="https://themify.me/demo/themes/ultra-agency3/files/2019/06/face7-100x100.jpg 100w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/face7-150x150.jpg 150w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/face7.jpg 500w" sizes="(max-width: 100px) 100vw, 100px" /></figure> Johnson Arte CEO <a href="https://themify.me/">sempoanic.com</a> </li> </ul>
<link id="themify-builder-338-generated" rel="stylesheet" href="https://themify.me/demo/themes/ultra-agency3/files/themify-css/themify-builder-338-generated.css?ver=1581109608" type="text/css" /> 
 <h3>Start your project now. </h3> <p>Let us help you catapult your idea into a reality. There\'s no better day.</p> 
 <a href="https://themify.me/" > Start Free Trial </a><!--/themify_builder_static-->',
  'post_title' => 'Home',
  'post_excerpt' => '',
  'post_name' => 'home',
  'post_modified' => '2020-02-19 07:35:44',
  'post_modified_gmt' => '2020-02-19 07:35:44',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?page_id=5',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar-none',
    'content_width' => 'full_width',
    'hide_page_title' => 'yes',
    'section_scrolling_mobile' => 'on',
    'mobile_menu_styles' => 'default',
    'header_wrap' => 'transparent',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"bxzl903\\",\\"cols\\":[{\\"element_id\\":\\"fr39903\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"element_id\\":\\"4wuz310\\",\\"cols\\":[{\\"element_id\\":\\"41ro311\\",\\"grid_class\\":\\"col2-1\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"c784904\\",\\"mod_settings\\":{\\"content_text\\":\\"<h1>Creative Design &amp; Web Solutions.<\\\\/h1>\\\\n<p>Crafting incredible digital products for your unique and forward-thinking company. All company sizes welcome.<\\\\/p>\\",\\"margin_bottom\\":\\"15\\"}},{\\"mod_name\\":\\"buttons\\",\\"element_id\\":\\"5kp1904\\",\\"mod_settings\\":{\\"content_button\\":[{\\"label\\":\\"Start Free Trial\\",\\"link\\":\\"https:\\\\/\\\\/themify.me\\\\/\\",\\"link_options\\":\\"regular\\",\\"button_color_bg\\":\\"green\\",\\"icon_alignment\\":\\"left\\"},{\\"label\\":\\"Play Video\\",\\"link\\":\\"https:\\\\/\\\\/www.youtube.com\\\\/watch?v=P8Lte26BBN8\\",\\"link_options\\":\\"lightbox\\",\\"button_color_bg\\":\\"blue\\",\\"icon\\":\\"ti-control-play\\",\\"icon_alignment\\":\\"left\\"}],\\"display\\":\\"buttons-horizontal\\",\\"buttons_style\\":\\"outline\\",\\"buttons_shape\\":\\"circle\\",\\"buttons_size\\":\\"large\\",\\"breakpoint_mobile\\":{\\"link_margin_bottom\\":\\"20\\"},\\"breakpoint_tablet_landscape\\":{\\"link_margin_bottom\\":\\"20\\"},\\"breakpoint_tablet\\":{\\"margin_bottom\\":\\"20\\"}}}]},{\\"element_id\\":\\"cijf311\\",\\"grid_class\\":\\"col2-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"92h9905\\",\\"mod_settings\\":{\\"param_image\\":\\"regular\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/06\\\\/graphic-hero-banner.png\\",\\"style_image\\":\\"image-top\\",\\"width_image\\":\\"565\\",\\"breakpoint_tablet\\":{\\"margin_bottom\\":\\"30\\"}}}]}],\\"tablet_dir\\":\\"rtl\\",\\"mobile_dir\\":\\"rtl\\"},{\\"element_id\\":\\"7r3d903\\",\\"cols\\":[{\\"element_id\\":\\"tz7m907\\",\\"grid_class\\":\\"col2-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"fa59884\\",\\"mod_settings\\":{\\"param_image\\":\\"regular\\",\\"width_image\\":\\"500\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/06\\\\/graphic-studio-work.png\\",\\"style_image\\":\\"image-top\\"}}]},{\\"element_id\\":\\"h6o9908\\",\\"grid_class\\":\\"col2-1\\",\\"modules\\":[{\\"mod_name\\":\\"fancy-heading\\",\\"element_id\\":\\"gw5c933\\",\\"mod_settings\\":{\\"heading\\":\\"Our History\\",\\"sub_heading\\":\\"Creating Digital Experiences\\",\\"text_alignment\\":\\"themify-text-left\\",\\"heading_tag\\":\\"h3\\",\\"d_border-type\\":\\"top\\"}},{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"jny9885\\",\\"mod_settings\\":{\\"content_text\\":\\"<p>Ultra Agency 3 creates experiences that transform brands, grow businesses and make people\\\'s lives better. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using lorem ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \\\'Content here, content here\\\', making it look like readable English.<\\\\/p>\\",\\"breakpoint_mobile\\":{\\"margin_top\\":\\"30\\",\\"margin_top_unit\\":\\"px\\"},\\"breakpoint_tablet\\":{\\"margin_top\\":\\"20\\",\\"margin_top_unit\\":\\"px\\"}}},{\\"mod_name\\":\\"icon\\",\\"element_id\\":\\"5wro856\\",\\"mod_settings\\":{\\"content_icon\\":[{\\"icon\\":\\"ti-arrow-right\\",\\"icon_color_bg\\":\\"transparent\\",\\"label\\":\\"Read more\\",\\"link_options\\":\\"regular\\"}],\\"icon_position\\":\\"icon_position_right\\",\\"icon_arrangement\\":\\"icon_horizontal\\",\\"icon_style\\":\\"circle\\",\\"icon_size\\":\\"normal\\",\\"font_color_type\\":\\"font_color_solid\\"}}]}],\\"column_alignment\\":\\"col_align_middle\\",\\"styling\\":{\\"padding_bottom_unit\\":\\"%\\",\\"padding_bottom\\":\\"4\\",\\"padding_top_unit\\":\\"%\\",\\"padding_top\\":\\"4\\",\\"breakpoint_tablet\\":{\\"padding_bottom_unit\\":\\"%\\",\\"padding_top_unit\\":\\"%\\",\\"padding_bottom\\":\\"8\\",\\"padding_top\\":\\"10\\"}}}]}],\\"column_alignment\\":\\"col_align_middle\\",\\"styling\\":{\\"padding_bottom_unit\\":\\"%\\",\\"padding_top_unit\\":\\"%\\",\\"padding_top\\":\\"15\\",\\"background_position\\":\\"left-top\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat-none\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/07\\\\/bg-banner-hero-top-blue.png\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"bl_m\\":\\"normal\\",\\"row_width\\":\\"fullwidth\\",\\"breakpoint_mobile\\":{\\"padding_top\\":\\"26\\",\\"padding_top_unit\\":\\"%\\"}}},{\\"element_id\\":\\"p6jn626\\",\\"cols\\":[{\\"element_id\\":\\"6v87631\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"fancy-heading\\",\\"element_id\\":\\"so1c387\\",\\"mod_settings\\":{\\"heading\\":\\"Our Services\\",\\"sub_heading\\":\\"What We Offer\\",\\"text_alignment\\":\\"themify-text-center\\",\\"heading_tag\\":\\"h3\\",\\"margin_bottom_unit\\":\\"%\\",\\"margin_bottom\\":\\"5\\",\\"margin_top_unit\\":\\"%\\",\\"breakpoint_mobile\\":{\\"margin_bottom\\":\\"9\\",\\"margin_bottom_unit\\":\\"%\\"},\\"breakpoint_tablet\\":{\\"margin_bottom\\":\\"9\\",\\"margin_bottom_unit\\":\\"%\\"},\\"breakpoint_tablet_landscape\\":{\\"margin_bottom\\":\\"5\\",\\"margin_bottom_unit\\":\\"%\\"}}},{\\"element_id\\":\\"4k9v19\\",\\"cols\\":[{\\"element_id\\":\\"c3me22\\",\\"grid_class\\":\\"col3-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"jh54891\\",\\"mod_settings\\":{\\"caption_image\\":\\"Beautiful, functional, and effortless designs with a purpose.\\",\\"param_image\\":\\"regular\\",\\"title_image\\":\\"Web Development\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/07\\\\/web-development-icon.png\\",\\"style_image\\":\\"image-center\\",\\"width_image\\":\\"217\\"}}],\\"styling\\":{\\"breakpoint_tablet\\":{\\"padding_bottom\\":\\"30\\",\\"padding_bottom_unit\\":\\"px\\"}}},{\\"element_id\\":\\"3auc24\\",\\"grid_class\\":\\"col3-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"dkjc90\\",\\"mod_settings\\":{\\"caption_image\\":\\"Innovation and solutions based \\\\ntechnology.\\",\\"param_image\\":\\"regular\\",\\"title_image\\":\\"Web Design\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/07\\\\/web-design-icon.png\\",\\"style_image\\":\\"image-center\\",\\"width_image\\":\\"217\\"}}],\\"styling\\":{\\"breakpoint_tablet\\":{\\"padding_bottom\\":\\"30\\",\\"padding_bottom_unit\\":\\"px\\"}}},{\\"element_id\\":\\"y1ty24\\",\\"grid_class\\":\\"col3-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"q8lt968\\",\\"mod_settings\\":{\\"caption_image\\":\\"Inspire your audience and further \\\\nyour brand\\\'s capabilities.\\",\\"param_image\\":\\"regular\\",\\"title_image\\":\\"App Design\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/07\\\\/app-design-icon.png\\",\\"style_image\\":\\"image-center\\",\\"width_image\\":\\"217\\",\\"image_zoom_icon\\":false,\\"auto_fullwidth\\":false,\\"appearance_image\\":false,\\"caption_on_overlay\\":false}}]}],\\"styling\\":{\\"checkbox_padding_apply_all\\":\\"1\\",\\"margin_bottom_unit\\":\\"%\\",\\"margin_bottom\\":\\"7\\",\\"breakpoint_mobile\\":{\\"margin_bottom\\":\\"15\\",\\"margin_bottom_unit\\":\\"%\\"},\\"breakpoint_tablet\\":{\\"margin_bottom\\":\\"15\\",\\"margin_bottom_unit\\":\\"%\\"},\\"breakpoint_tablet_landscape\\":{\\"margin_bottom\\":\\"10\\",\\"margin_bottom_unit\\":\\"%\\"}}},{\\"mod_name\\":\\"fancy-heading\\",\\"element_id\\":\\"pb6g879\\",\\"mod_settings\\":{\\"heading\\":\\"Client Testimonials\\",\\"sub_heading\\":\\"What Our Clients Say\\",\\"text_alignment\\":\\"themify-text-center\\",\\"heading_tag\\":\\"h3\\",\\"margin_bottom_unit\\":\\"%\\",\\"margin_bottom\\":\\"5\\"}},{\\"mod_name\\":\\"testimonial-slider\\",\\"element_id\\":\\"vw1o876\\",\\"mod_settings\\":{\\"layout_testimonial\\":\\"image-bubble\\",\\"img_h_slider\\":\\"100\\",\\"img_w_slider\\":\\"100\\",\\"visible_opt_slider\\":\\"1\\",\\"auto_scroll_opt_slider\\":\\"off\\",\\"tab_content_testimonial\\":[{\\"content_testimonial\\":\\"<p>It\\\'s been a pleasure working with the Ultra Agency 3 team who are incredibly skilled and creatively provide solutions. Quis scelerisque velit. Suspendisse consequat aliquam erat volutpat pretium magna sit amet porttitor lacini. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas rhoncus nisl ac varius vulputate tellus ut vesti. <\\\\/p>\\",\\"person_picture_testimonial\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/06\\\\/face5.jpg\\",\\"person_name_testimonial\\":\\"Michelle Obadiah\\",\\"person_position_testimonial\\":\\"CEO\\",\\"company_testimonial\\":\\"fusedcore.com\\",\\"company_website_testimonial\\":\\"https:\\\\/\\\\/themify.me\\\\/\\"},{\\"content_testimonial\\":\\"<p>I was immediately taken away by the team of Ultra Agency 3. Sit amet, consectetur adipiscing elit. Donec egestas rhoncus nisl ac varius vulputate tellus ut vestibulum placerat. Aliquam erat volutpat. Vestibulum pretium magna sit amet porttitor lacinia curabitur quis scelerisque velit. <\\\\/p>\\",\\"person_picture_testimonial\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/06\\\\/face8.jpg\\",\\"person_name_testimonial\\":\\"John Smith\\",\\"person_position_testimonial\\":\\"V.P.\\",\\"company_testimonial\\":\\"zurisch.com\\",\\"company_website_testimonial\\":\\"https:\\\\/\\\\/themify.me\\\\/\\"},{\\"content_testimonial\\":\\"<p>Ultra Agency 3\\\\\\\\\\\'s staff and support team were attentive to our business needs and consectetur adipiscing elit. Donec egestas rhoncus nisl ac varius. Donec vulputate tellus ut vestibulum placerat erat volutpat vestibulum pretium magna sit amet porttitor lacinia. Curabitur quis scelerisque velit suspendisse consequat aliquam erat volutpat pretium magna. <\\\\/p>\\",\\"person_picture_testimonial\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/06\\\\/face7.jpg\\",\\"person_name_testimonial\\":\\"Johnson Arte\\",\\"person_position_testimonial\\":\\"CEO\\",\\"company_testimonial\\":\\"sempoanic.com\\",\\"company_website_testimonial\\":\\"https:\\\\/\\\\/themify.me\\\\/\\"}],\\"height_slider\\":\\"variable\\",\\"show_arrow_slider\\":\\"yes\\",\\"show_nav_slider\\":\\"no\\",\\"wrap_slider\\":\\"yes\\",\\"pause_on_hover_slider\\":\\"resume\\",\\"effect_slider\\":\\"scroll\\",\\"speed_opt_slider\\":\\"normal\\",\\"mob_visible_opt_slider\\":\\"0\\",\\"grid_layout_testimonial\\":\\"list-post\\",\\"type_testimonial\\":\\"slider\\",\\"show_arrow_buttons_vertical\\":false,\\"play_pause_control\\":\\"no\\",\\"scroll_opt_slider\\":\\"1\\",\\"masonry\\":\\"disable\\"}}]}],\\"styling\\":{\\"padding_bottom_unit\\":\\"%\\",\\"padding_bottom\\":\\"4\\",\\"padding_top_unit\\":\\"%\\",\\"padding_top\\":\\"2\\",\\"background_position\\":\\"right-top\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat-none\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/07\\\\/graphic-blue-right.png\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"breakpoint_tablet\\":{\\"padding_bottom\\":\\"7\\",\\"padding_bottom_unit\\":\\"%\\",\\"padding_top\\":\\"9\\",\\"padding_top_unit\\":\\"%\\"},\\"breakpoint_tablet_landscape\\":{\\"padding_top\\":\\"5\\",\\"padding_top_unit\\":\\"%\\"},\\"breakpoint_mobile\\":{\\"padding_top\\":\\"15\\",\\"padding_top_unit\\":\\"%\\"}}},{\\"element_id\\":\\"24l3517\\",\\"cols\\":[{\\"element_id\\":\\"szxh518\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"layout-part\\",\\"element_id\\":\\"38q3182\\",\\"mod_settings\\":{\\"selected_layout_part\\":\\"start-project-now\\"}}],\\"styling\\":{\\"padding_top\\":\\"0\\"}}],\\"styling\\":{\\"padding_top\\":\\"0\\",\\"padding_top_unit\\":\\"%\\"}}]',
    'themify_used_global_styles' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 48,
  'post_date' => '2019-06-08 09:01:09',
  'post_date_gmt' => '2019-06-08 09:01:09',
  'post_content' => '<!-- wp:themify-builder/canvas /--><!--themify_builder_static--><h1>Portfolio<br/>Featured Work</h1>
<p>It takes passion, genuine care, and the flair for the creative to take on a project and to create real results. See what we\'ve been up to and how we\'ve helped our clients expand their digital capabilities. </p>

<h3>Our Clients<br/>Working with the Teams </h3>
<img src="https://themify.me/demo/themes/ultra-agency3/files/2019/07/instacart-175x60.png" width="175" alt="instacart" />
<img src="https://themify.me/demo/themes/ultra-agency3/files/2019/07/shopify-158x60.png" width="158" alt="shopify" />
<img src="https://themify.me/demo/themes/ultra-agency3/files/2019/07/slack-128x60.png" width="128" alt="slack" />
<img src="https://themify.me/demo/themes/ultra-agency3/files/2019/07/lyft-77x59.png" width="77" alt="lyft" />
<img src="https://themify.me/demo/themes/ultra-agency3/files/2019/07/pinterest-77x59.png" width="77" alt="pinterest" />
<img src="https://themify.me/demo/themes/ultra-agency3/files/2019/07/open-table-158x60.png" width="158" alt="open-table" />
<link id="themify-builder-338-generated" rel="stylesheet" href="https://themify.me/demo/themes/ultra-agency3/files/themify-css/themify-builder-338-generated.css?ver=1581109608" type="text/css" /> 
 <h3>Start your project now. </h3> <p>Let us help you catapult your idea into a reality. There\'s no better day.</p> 
 <a href="https://themify.me/" > Start Free Trial </a><!--/themify_builder_static-->',
  'post_title' => 'Portfolio',
  'post_excerpt' => '',
  'post_name' => 'portfolio',
  'post_modified' => '2020-02-07 21:07:34',
  'post_modified_gmt' => '2020-02-07 21:07:34',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?page_id=48',
  'menu_order' => 0,
  'post_type' => 'page',
  'meta_input' => 
  array (
    'page_layout' => 'sidebar-none',
    'content_width' => 'full_width',
    'hide_page_title' => 'yes',
    'section_scrolling_mobile' => 'on',
    'mobile_menu_styles' => 'default',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"g1ur950\\",\\"cols\\":[{\\"element_id\\":\\"x736951\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"fancy-heading\\",\\"element_id\\":\\"gqt8907\\",\\"mod_settings\\":{\\"heading\\":\\"Portfolio\\",\\"sub_heading\\":\\"Featured Work\\",\\"heading_tag\\":\\"h1\\"}},{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"8jw0733\\",\\"mod_settings\\":{\\"content_text\\":\\"<p>It takes passion, genuine care, and the flair for the creative to take on a project and to create real results. See what we\\\'ve been up to and how we\\\'ve helped our clients expand their digital capabilities. <\\\\/p>\\",\\"margin_bottom\\":\\"25\\"}},{\\"mod_name\\":\\"portfolio\\",\\"element_id\\":\\"res7181\\",\\"mod_settings\\":{\\"post_per_page_portfolio\\":\\"20\\",\\"hide_page_nav_portfolio\\":\\"yes\\",\\"display_portfolio\\":\\"none\\",\\"hide_post_meta_portfolio\\":\\"no\\",\\"hide_post_date_portfolio\\":\\"yes\\",\\"unlink_post_title_portfolio\\":\\"no\\",\\"hide_post_title_portfolio\\":\\"no\\",\\"unlink_feat_img_portfolio\\":\\"no\\",\\"hide_feat_img_portfolio\\":\\"no\\",\\"orderby_portfolio\\":\\"date\\",\\"order_portfolio\\":\\"desc\\",\\"post_filter\\":\\"yes\\",\\"layout_portfolio\\":\\"auto_tiles\\",\\"category_portfolio\\":\\"0|single\\",\\"term_type\\":\\"category\\",\\"margin_bottom_unit\\":\\"%\\",\\"margin_bottom\\":\\"7\\",\\"img_height_portfolio\\":\\"600\\",\\"img_width_portfolio\\":\\"600\\"}}]}],\\"styling\\":{\\"padding_bottom_unit\\":\\"%\\",\\"padding_bottom\\":\\"4\\",\\"padding_top_unit\\":\\"%\\",\\"padding_top\\":\\"6\\",\\"row_width\\":\\"fullwidth\\",\\"background_position\\":\\"left-top\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat-none\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/07\\\\/bg-banner-hero-top-blue.png\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"breakpoint_mobile\\":{\\"padding_top\\":\\"20\\",\\"padding_top_unit\\":\\"%\\",\\"padding_bottom\\":\\"15\\",\\"padding_bottom_unit\\":\\"%\\"},\\"breakpoint_tablet\\":{\\"padding_top\\":\\"15\\",\\"padding_top_unit\\":\\"%\\"},\\"breakpoint_tablet_landscape\\":{\\"padding_top\\":\\"12\\",\\"padding_top_unit\\":\\"%\\",\\"padding_bottom\\":\\"8\\",\\"padding_bottom_unit\\":\\"%\\"}}},{\\"element_id\\":\\"ttoe568\\",\\"cols\\":[{\\"element_id\\":\\"pgw5568\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"fancy-heading\\",\\"element_id\\":\\"oqw4744\\",\\"mod_settings\\":{\\"heading\\":\\"Our Clients\\",\\"sub_heading\\":\\"Working with the Teams \\",\\"text_alignment\\":\\"themify-text-center\\",\\"heading_tag\\":\\"h3\\",\\"margin_bottom_unit\\":\\"%\\",\\"margin_bottom\\":\\"5\\"}},{\\"element_id\\":\\"oyon680\\",\\"cols\\":[{\\"element_id\\":\\"nuoi682\\",\\"grid_class\\":\\"col6-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"v2at933\\",\\"mod_settings\\":{\\"param_image\\":\\"regular\\",\\"width_image\\":\\"175\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/07\\\\/instacart.png\\",\\"style_image\\":\\"image-center\\"}}]},{\\"element_id\\":\\"1f75683\\",\\"grid_class\\":\\"col6-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"40y9531\\",\\"mod_settings\\":{\\"param_image\\":\\"regular\\",\\"width_image\\":\\"158\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/07\\\\/shopify.png\\",\\"style_image\\":\\"image-center\\"}}]},{\\"element_id\\":\\"vxox683\\",\\"grid_class\\":\\"col6-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"w3qb730\\",\\"mod_settings\\":{\\"param_image\\":\\"regular\\",\\"width_image\\":\\"128\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/07\\\\/slack.png\\",\\"style_image\\":\\"image-center\\"}}]},{\\"element_id\\":\\"guvl683\\",\\"grid_class\\":\\"col6-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"u9q9993\\",\\"mod_settings\\":{\\"param_image\\":\\"regular\\",\\"width_image\\":\\"77\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/07\\\\/lyft.png\\",\\"style_image\\":\\"image-center\\"}}]},{\\"element_id\\":\\"5xrq683\\",\\"grid_class\\":\\"col6-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"0kd4800\\",\\"mod_settings\\":{\\"param_image\\":\\"regular\\",\\"width_image\\":\\"77\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/07\\\\/pinterest.png\\",\\"style_image\\":\\"image-center\\"}}]},{\\"element_id\\":\\"twvn684\\",\\"grid_class\\":\\"col6-1\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"uoz5691\\",\\"mod_settings\\":{\\"param_image\\":\\"regular\\",\\"width_image\\":\\"158\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/07\\\\/open-table.png\\",\\"style_image\\":\\"image-center\\"}}]}],\\"column_alignment\\":\\"col_align_middle\\",\\"col_tablet_landscape\\":\\"column6-1\\",\\"col_tablet\\":\\"column4-2\\",\\"col_mobile\\":\\"column4-2\\",\\"styling\\":{\\"padding_bottom\\":\\"28\\",\\"padding_bottom_unit\\":\\"px\\",\\"breakpoint_tablet_landscape\\":{\\"padding_bottom\\":\\"40\\",\\"padding_bottom_unit\\":\\"px\\"}}},{\\"mod_name\\":\\"layout-part\\",\\"element_id\\":\\"50rc568\\",\\"mod_settings\\":{\\"selected_layout_part\\":\\"start-project-now\\"}}]}]}]',
    'themify_used_global_styles' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 622,
  'post_date' => '2019-10-30 02:46:11',
  'post_date_gmt' => '2019-10-30 02:46:11',
  'post_content' => '',
  'post_title' => 'Optin Form',
  'post_excerpt' => '',
  'post_name' => 'optin-form',
  'post_modified' => '2019-11-04 04:03:11',
  'post_modified_gmt' => '2019-11-04 04:03:11',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?post_type=tbuilder_layout_part&#038;p=622',
  'menu_order' => 0,
  'post_type' => 'tbuilder_layout_part',
  'meta_input' => 
  array (
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"3hb6797\\",\\"cols\\":[{\\"element_id\\":\\"fja9798\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"optin\\",\\"element_id\\":\\"z5jt407\\",\\"mod_settings\\":{\\"label_firstname\\":\\"First Name\\",\\"default_fname\\":\\"John\\",\\"label_lastname\\":\\"Last Name\\",\\"default_lname\\":\\"Doe\\",\\"message\\":\\"<p>Post updated. <a href=\\\\\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/tbuilder-layout-part\\\\/optin-form\\\\/\\\\\\">View post<\\\\/a><\\\\/p><p><button class=\\\\\\"notice-dismiss\\\\\\" type=\\\\\\"button\\\\\\"><span class=\\\\\\"screen-reader-text\\\\\\">Dismiss this notice.<\\\\/span><\\\\/button><\\\\/p>\\",\\"layout\\":\\"tb_optin_horizontal\\",\\"gdpr_label\\":\\"I consent to my submitted data being collected and stored\\",\\"success_action\\":\\"s2\\",\\"lname_hide\\":\\"1\\",\\"fname_hide\\":\\"1\\",\\"mailchimp_list\\":\\"0f2a95e5de\\",\\"provider\\":\\"mailchimp\\",\\"mod_title\\":\\"Subscribe\\",\\"b_in_top_width\\":\\"1\\",\\"b_in_top_color\\":\\"#01c99c\\",\\"b_in-type\\":\\"all\\",\\"f_c_s\\":\\"#01c99c\\",\\"bg_c_s\\":\\"#ffffff_0.00\\",\\"f_g_c-circle-radial\\":false,\\"f_c_t\\":\\"f_c_solid\\"}}]}]}]',
    'themify_used_global_styles' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 338,
  'post_date' => '2019-06-29 01:03:41',
  'post_date_gmt' => '2019-06-29 01:03:41',
  'post_content' => '<!--themify_builder_static--><h3>Start your project now. </h3> <p>Let us help you catapult your idea into a reality. There\'s no better day.</p>
<a href="https://themify.me/" > Start Free Trial </a><!--/themify_builder_static-->',
  'post_title' => 'Start Project Now',
  'post_excerpt' => '',
  'post_name' => 'start-project-now',
  'post_modified' => '2020-02-07 21:06:48',
  'post_modified_gmt' => '2020-02-07 21:06:48',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/tbuilder-layout-part/start-project-now/',
  'menu_order' => 0,
  'post_type' => 'tbuilder_layout_part',
  'meta_input' => 
  array (
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"0xel407\\",\\"cols\\":[{\\"element_id\\":\\"lt1r407\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"element_id\\":\\"ir2n407\\",\\"cols\\":[{\\"element_id\\":\\"vg6o407\\",\\"grid_class\\":\\"col3-2\\",\\"modules\\":[{\\"mod_name\\":\\"text\\",\\"element_id\\":\\"9yau407\\",\\"mod_settings\\":{\\"content_text\\":\\"<h3>Start your project now. <\\\\/h3>\\\\n<p>Let us help you catapult your idea into a reality. There\\\'s no better day.<\\\\/p>\\",\\"breakpoint_tablet\\":{\\"margin_bottom\\":\\"10\\"}}}],\\"styling\\":{\\"breakpoint_tablet\\":{\\"text_align\\":\\"center\\"}}},{\\"element_id\\":\\"mziw407\\",\\"grid_class\\":\\"col3-1\\",\\"modules\\":[{\\"mod_name\\":\\"buttons\\",\\"element_id\\":\\"l59k407\\",\\"mod_settings\\":{\\"content_button\\":[{\\"label\\":\\"Start Free Trial\\",\\"link\\":\\"https:\\\\/\\\\/themify.me\\\\/\\",\\"link_options\\":\\"regular\\",\\"button_color_bg\\":\\"green\\",\\"icon_alignment\\":\\"left\\"}],\\"display\\":\\"buttons-horizontal\\",\\"buttons_shape\\":\\"circle\\",\\"buttons_size\\":\\"large\\"}}],\\"styling\\":{\\"text_align\\":\\"right\\"}}],\\"column_alignment\\":\\"col_align_middle\\",\\"gutter\\":\\"gutter-none\\",\\"styling\\":{\\"checkbox_b_ra_apply_all\\":\\"1\\",\\"padding_top_unit\\":\\"%\\",\\"padding_top\\":\\"8\\",\\"background_position\\":\\"right-center\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat-none\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"border-type\\":\\"top\\",\\"cover_color-type\\":\\"color\\",\\"padding_left_unit\\":\\"%\\",\\"padding_left\\":\\"5\\",\\"padding_bottom_unit\\":\\"%\\",\\"padding_bottom\\":\\"8\\",\\"padding_right_unit\\":\\"%\\",\\"padding_right\\":\\"5\\",\\"padding_opp_top\\":\\"1\\"}}],\\"styling\\":{\\"background_position\\":\\"right-center\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat-none\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\",\\"cover_color-type\\":\\"color\\",\\"background_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/06\\\\/spiral-1.png\\",\\"checkbox_b_ra_apply_all\\":\\"1\\",\\"global_styles\\":\\"tb_gs2305d0\\",\\"padding_top\\":\\"1\\",\\"padding_top_unit\\":\\"px\\"}}],\\"styling\\":{\\"padding_bottom_unit\\":\\"%\\",\\"padding_bottom\\":\\"4\\",\\"padding_top_unit\\":\\"%\\",\\"padding_top\\":\\"4\\",\\"background_position\\":\\"center-center\\",\\"background_attachment\\":\\"scroll\\",\\"background_repeat\\":\\"repeat\\",\\"background_video_options\\":\\"mute\\",\\"background_slider_speed\\":\\"2000\\",\\"background_slider_mode\\":\\"fullcover\\",\\"background_slider_size\\":\\"large\\"}}]',
    'themify_used_global_styles' => 
    array (
      0 => 'tb_gs2305d0',
    ),
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 301,
  'post_date' => '2019-06-21 08:29:57',
  'post_date_gmt' => '2019-06-21 08:29:57',
  'post_content' => '<!--themify_builder_static--><img src="https://themify.me/demo/themes/ultra-agency3/files/2019/06/aldo-200x200.jpg" width="200" title="Aldo Renald" alt="CEO" srcset="https://themify.me/demo/themes/ultra-agency3/files/2019/06/aldo.jpg 200w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/aldo-150x150.jpg 150w, https://themify.me/demo/themes/ultra-agency3/files/2019/06/aldo-160x160.jpg 160w" sizes="(max-width: 200px) 100vw, 200px" /> <h3> Aldo Renald </h3> CEO<!--/themify_builder_static-->',
  'post_title' => 'Team Member Caption',
  'post_excerpt' => '',
  'post_name' => 'tb_gs3015d0',
  'post_modified' => '2020-01-08 03:57:15',
  'post_modified_gmt' => '2020-01-08 03:57:15',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/tglobal-style/team-member-caption/',
  'menu_order' => 0,
  'post_type' => 'tglobal_style',
  'meta_input' => 
  array (
    'themify_global_style_type' => 'image',
    'hide_page_title' => 'yes',
    '_wp_old_slug' => 'team-member-caption',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"row5d0c9585af091\\",\\"styling\\":{\\"global_styles\\":\\" \\"},\\"cols\\":[{\\"element_id\\":\\"col5d0c9585af091\\",\\"grid_class\\":\\"col-full\\",\\"styling\\":{\\"global_styles\\":\\" \\"},\\"modules\\":[{\\"element_id\\":\\"mod5d0c9585af091\\",\\"mod_name\\":\\"image\\",\\"mod_settings\\":{\\"caption_image\\":\\"CEO\\",\\"param_image\\":\\"regular\\",\\"title_image\\":\\"Aldo Renald\\",\\"width_image\\":\\"200\\",\\"appearance_image\\":\\"circle\\",\\"url_image\\":\\"https:\\\\/\\\\/themify.me\\\\/demo\\\\/themes\\\\/ultra-agency3\\\\/files\\\\/2019\\\\/06\\\\/aldo.jpg\\",\\"style_image\\":\\"image-left\\",\\"margin_bottom\\":\\"30\\",\\"c_sh_color\\":\\"#000000_0.17\\",\\"c_sh_blur_unit\\":\\"px\\",\\"c_sh_blur\\":\\"9\\",\\"c_sh_vOffset_unit\\":\\"px\\",\\"c_sh_vOffset\\":\\"5\\",\\"c_sh_hOffset_unit\\":\\"px\\",\\"c_sh_hOffset\\":\\"0\\",\\"checkbox_c_r_c_apply_all\\":\\"1\\",\\"c_r_c_top\\":\\"5\\",\\"checkbox_c_p_apply_all\\":\\"1\\",\\"c_p_top\\":\\"10\\",\\"c_b_c\\":\\"#ffffff\\",\\"background_position\\":\\"left-top\\",\\"background_repeat\\":\\"repeat\\",\\"c_m_left\\":\\"-\\",\\"checkbox_margin_apply_all\\":\\"false\\",\\"margin_left_unit\\":\\"px\\",\\"margin_bottom_unit\\":\\"px\\",\\"margin_right_unit\\":\\"px\\",\\"margin_top_unit\\":\\"px\\"}}]}]}]',
    'themify_used_global_styles' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 230,
  'post_date' => '2019-06-13 15:33:09',
  'post_date_gmt' => '2019-06-13 15:33:09',
  'post_content' => '',
  'post_title' => 'Box Shadow',
  'post_excerpt' => '',
  'post_name' => 'tb_gs2305d0',
  'post_modified' => '2019-06-18 15:30:17',
  'post_modified_gmt' => '2019-06-18 15:30:17',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/tglobal-style/box-shadow/',
  'menu_order' => 0,
  'post_type' => 'tglobal_style',
  'meta_input' => 
  array (
    'themify_global_style_type' => 'image',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"row5d026cb5e2655\\",\\"cols\\":[{\\"element_id\\":\\"col5d026cb5e2655\\",\\"grid_class\\":\\"col-full\\",\\"modules\\":[{\\"mod_name\\":\\"image\\",\\"element_id\\":\\"mod5d026cb5e2655\\",\\"mod_settings\\":{\\"b_sh_inset\\":\\"false\\",\\"b_sh_color\\":\\"#d1e2ff_0.61\\",\\"b_sh_blur_unit\\":\\"px\\",\\"b_sh_blur\\":\\"10\\",\\"b_sh_vOffset_unit\\":\\"px\\",\\"b_sh_vOffset\\":\\"1\\",\\"b_sh_hOffset_unit\\":\\"px\\",\\"b_sh_hOffset\\":\\"1\\",\\"checkbox_b_ra_apply_all\\":\\"1\\",\\"b_ra_top\\":\\"10\\",\\"background_position\\":\\"left-top\\",\\"background_repeat\\":\\"repeat\\",\\"background_color\\":\\"#ffffff\\",\\"background_image-circle-radial\\":\\"\\"}}],\\"styling\\":{\\"global_styles\\":\\" \\"}}],\\"styling\\":{\\"global_styles\\":\\" \\"}}]',
    'hide_page_title' => 'yes',
    '_wp_old_slug' => 'box-shadow',
  ),
  'tax_input' => 
  array (
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 459,
  'post_date' => '2019-07-05 02:21:29',
  'post_date_gmt' => '2019-07-05 02:21:29',
  'post_content' => 'Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?" repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis.

Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.',
  'post_title' => 'Project: Water Journal Magazine',
  'post_excerpt' => 'Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.',
  'post_name' => 'project-water-journal-magazine',
  'post_modified' => '2019-07-09 08:36:41',
  'post_modified_gmt' => '2019-07-09 08:36:41',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?post_type=portfolio&#038;p=459',
  'menu_order' => 0,
  'post_type' => 'portfolio',
  'meta_input' => 
  array (
    'project_date' => 'April 5 - 2019',
    'project_client' => 'Minifit',
    'project_services' => 'Graphic Magazine',
    'project_launch' => 'https://themify.me/',
    'mobile_menu_styles' => 'default',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"dga527\\",\\"cols\\":[{\\"element_id\\":\\"sv2f28\\",\\"grid_class\\":\\"col-full\\"}]}]',
    'themify_used_global_styles' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'portfolio-category' => 'graphic-magazine',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-agency3/files/2019/06/water-journal.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 458,
  'post_date' => '2019-07-05 02:20:43',
  'post_date_gmt' => '2019-07-05 02:20:43',
  'post_content' => 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit.recusandae. Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.

At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores.',
  'post_title' => 'Project: Travel Style Magazine',
  'post_excerpt' => 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit.recusandae.',
  'post_name' => 'project-travel-style-magazine',
  'post_modified' => '2019-07-06 06:21:43',
  'post_modified_gmt' => '2019-07-06 06:21:43',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?post_type=portfolio&#038;p=458',
  'menu_order' => 0,
  'post_type' => 'portfolio',
  'meta_input' => 
  array (
    'project_date' => 'Feb 5 - 2018',
    'project_client' => 'Cereal',
    'project_services' => 'Graphic Magazine, App Design',
    'project_launch' => 'https://themify.me/',
    'mobile_menu_styles' => 'default',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"sjdw536\\",\\"cols\\":[{\\"element_id\\":\\"q37x538\\",\\"grid_class\\":\\"col-full\\"}]}]',
    'themify_used_global_styles' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'portfolio-category' => 'graphic-magazine',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-agency3/files/2019/07/travel-style-magazine.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 457,
  'post_date' => '2019-07-05 02:19:52',
  'post_date_gmt' => '2019-07-05 02:19:52',
  'post_content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.

Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.

Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
  'post_title' => 'Project: Photo Magazine',
  'post_excerpt' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
  'post_name' => 'project-photo-magazine',
  'post_modified' => '2019-07-06 06:20:34',
  'post_modified_gmt' => '2019-07-06 06:20:34',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?post_type=portfolio&#038;p=457',
  'menu_order' => 0,
  'post_type' => 'portfolio',
  'meta_input' => 
  array (
    'project_date' => 'June 2 - 2019',
    'project_client' => 'OnSky App',
    'project_services' => 'Graphic Magazine, App Design, Advertising',
    'project_launch' => 'https://themify.me/',
    'mobile_menu_styles' => 'default',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"3gbu150\\",\\"cols\\":[{\\"element_id\\":\\"9rky153\\",\\"grid_class\\":\\"col-full\\"}]}]',
    'themify_used_global_styles' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'portfolio-category' => 'graphic-magazine',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-agency3/files/2019/07/photo-magazine.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 456,
  'post_date' => '2019-07-05 02:19:19',
  'post_date_gmt' => '2019-07-05 02:19:19',
  'post_content' => 'Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat epellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus. iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.

Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.

. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus.',
  'post_title' => 'Project: Photography',
  'post_excerpt' => 'Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat epellendus.',
  'post_name' => 'project-photography',
  'post_modified' => '2019-07-06 06:19:17',
  'post_modified_gmt' => '2019-07-06 06:19:17',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?post_type=portfolio&#038;p=456',
  'menu_order' => 0,
  'post_type' => 'portfolio',
  'meta_input' => 
  array (
    'project_date' => 'June 15 - 2019',
    'project_client' => 'Valerian Corp',
    'project_services' => 'Graphic Magazine, App Design',
    'project_launch' => 'https://themify.me/',
    'mobile_menu_styles' => 'default',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"nskn359\\",\\"cols\\":[{\\"element_id\\":\\"9dk2361\\",\\"grid_class\\":\\"col-full\\"}]}]',
    'themify_used_global_styles' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'portfolio-category' => 'graphic-magazine',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-agency3/files/2019/07/photography-clip-magazine.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 455,
  'post_date' => '2019-07-05 02:18:45',
  'post_date_gmt' => '2019-07-05 02:18:45',
  'post_content' => 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.

Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?" repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis.',
  'post_title' => 'Project: Hyperbeast',
  'post_excerpt' => '',
  'post_name' => 'project-hyperbeast',
  'post_modified' => '2019-07-06 06:17:46',
  'post_modified_gmt' => '2019-07-06 06:17:46',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?post_type=portfolio&#038;p=455',
  'menu_order' => 0,
  'post_type' => 'portfolio',
  'meta_input' => 
  array (
    'project_date' => 'Jan 5 - 2018',
    'project_client' => 'Just Ink',
    'project_services' => 'Graphic Magazine, Advertising',
    'project_launch' => 'https://themify.me/',
    'mobile_menu_styles' => 'default',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"cugx630\\",\\"cols\\":[{\\"element_id\\":\\"3tvd638\\",\\"grid_class\\":\\"col-full\\"}]}]',
    'themify_used_global_styles' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'portfolio-category' => 'graphic-magazine',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-agency3/files/2019/07/hyperbeast-magazine.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 454,
  'post_date' => '2019-07-05 02:18:12',
  'post_date_gmt' => '2019-07-05 02:18:12',
  'post_content' => 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit.recusandae. Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.

At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores.',
  'post_title' => 'Project: Online Teaching App',
  'post_excerpt' => 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit.recusandae.',
  'post_name' => 'project-online-teaching-app',
  'post_modified' => '2019-07-09 08:37:25',
  'post_modified_gmt' => '2019-07-09 08:37:25',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?post_type=portfolio&#038;p=454',
  'menu_order' => 0,
  'post_type' => 'portfolio',
  'meta_input' => 
  array (
    'project_date' => 'May 5 - 2019',
    'project_client' => 'Dial App',
    'project_services' => 'App Design, Graphic Magazine',
    'project_launch' => 'https://themify.me/',
    'mobile_menu_styles' => 'default',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"zc65850\\",\\"cols\\":[{\\"element_id\\":\\"zhf1851\\",\\"grid_class\\":\\"col-full\\"}]}]',
    'themify_used_global_styles' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'portfolio-category' => 'app-design',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-agency3/files/2019/06/daniel-korpai-app.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 453,
  'post_date' => '2019-07-05 02:17:42',
  'post_date_gmt' => '2019-07-05 02:17:42',
  'post_content' => 'Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat epellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus. iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.

Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.

Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus.',
  'post_title' => 'Project: News App',
  'post_excerpt' => '',
  'post_name' => 'project-news-app',
  'post_modified' => '2019-07-06 06:14:29',
  'post_modified_gmt' => '2019-07-06 06:14:29',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?post_type=portfolio&#038;p=453',
  'menu_order' => 0,
  'post_type' => 'portfolio',
  'meta_input' => 
  array (
    'project_date' => 'June 7 - 2019',
    'project_client' => 'Symbiotic',
    'project_services' => 'App Design, Advertising',
    'project_launch' => 'https://themify.me/',
    'mobile_menu_styles' => 'default',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"c0k7710\\",\\"cols\\":[{\\"element_id\\":\\"lnqn713\\",\\"grid_class\\":\\"col-full\\"}]}]',
    'themify_used_global_styles' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'portfolio-category' => 'app-design',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-agency3/files/2019/07/news-app.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 452,
  'post_date' => '2019-07-05 02:17:10',
  'post_date_gmt' => '2019-07-05 02:17:10',
  'post_content' => 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.

Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?" repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis.',
  'post_title' => 'Project: VPN App',
  'post_excerpt' => 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.',
  'post_name' => 'project-vpn-app',
  'post_modified' => '2019-07-06 06:13:10',
  'post_modified_gmt' => '2019-07-06 06:13:10',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?post_type=portfolio&#038;p=452',
  'menu_order' => 0,
  'post_type' => 'portfolio',
  'meta_input' => 
  array (
    'project_date' => 'Feb 10 - 2019',
    'project_client' => 'Cuckoo',
    'project_services' => 'App Design, UX, UI',
    'project_launch' => 'https://themify.me/',
    'mobile_menu_styles' => 'default',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"mkfd7\\",\\"cols\\":[{\\"element_id\\":\\"oks08\\",\\"grid_class\\":\\"col-full\\"}]}]',
    'themify_used_global_styles' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'portfolio-category' => 'app-design',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-agency3/files/2019/07/mobil-vpn-app.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 451,
  'post_date' => '2019-07-05 02:16:40',
  'post_date_gmt' => '2019-07-05 02:16:40',
  'post_content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.

Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.

Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
  'post_title' => 'Project: Mobile App Pulses',
  'post_excerpt' => '',
  'post_name' => 'project-mobile-app-pulses',
  'post_modified' => '2019-07-06 06:11:34',
  'post_modified_gmt' => '2019-07-06 06:11:34',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?post_type=portfolio&#038;p=451',
  'menu_order' => 0,
  'post_type' => 'portfolio',
  'meta_input' => 
  array (
    'project_date' => 'March 5 - 2019',
    'project_client' => 'Online Doc',
    'project_services' => 'App Design, Advertising, Graphic Magazine, UX, UI',
    'project_launch' => 'https://themify.me/',
    'mobile_menu_styles' => 'default',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"77n4289\\",\\"cols\\":[{\\"element_id\\":\\"cupq292\\",\\"grid_class\\":\\"col-full\\"}]}]',
    'themify_used_global_styles' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'portfolio-category' => 'app-design',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-agency3/files/2019/07/mobile-app.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 450,
  'post_date' => '2019-07-05 02:16:03',
  'post_date_gmt' => '2019-07-05 02:16:03',
  'post_content' => 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit.recusandae. Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.

At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores.',
  'post_title' => 'Project: iOS Travel App',
  'post_excerpt' => 'Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit.recusandae.',
  'post_name' => 'project-ios-travel-app',
  'post_modified' => '2019-07-06 06:10:05',
  'post_modified_gmt' => '2019-07-06 06:10:05',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?post_type=portfolio&#038;p=450',
  'menu_order' => 0,
  'post_type' => 'portfolio',
  'meta_input' => 
  array (
    'project_date' => 'June 8 - 2019',
    'project_client' => 'Workout Co.',
    'project_services' => 'App Design, Advertising, Graphic Magazine',
    'project_launch' => 'https://themify.me/',
    'mobile_menu_styles' => 'default',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"0md1740\\",\\"cols\\":[{\\"element_id\\":\\"gyfv742\\",\\"grid_class\\":\\"col-full\\"}]}]',
    'themify_used_global_styles' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'portfolio-category' => 'app-design',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-agency3/files/2019/07/apple-watch-app.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 449,
  'post_date' => '2019-07-05 02:13:12',
  'post_date_gmt' => '2019-07-05 02:13:12',
  'post_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.

Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt neque porro quisquam.',
  'post_title' => 'Project: Sports Ad',
  'post_excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
  'post_name' => 'project-sports-ad',
  'post_modified' => '2019-07-06 06:07:54',
  'post_modified_gmt' => '2019-07-06 06:07:54',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?post_type=portfolio&#038;p=449',
  'menu_order' => 0,
  'post_type' => 'portfolio',
  'meta_input' => 
  array (
    'project_date' => 'Feb 5 - 2019',
    'project_client' => 'OnSky App',
    'project_services' => 'Advertising, UX Design, UI Design, Graphic Magazine',
    'project_launch' => 'https://themify.me/',
    'mobile_menu_styles' => 'default',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"map8511\\",\\"cols\\":[{\\"element_id\\":\\"6qpr512\\",\\"grid_class\\":\\"col-full\\"}]}]',
    'themify_used_global_styles' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'portfolio-category' => 'advertising',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-agency3/files/2019/07/sports-ski-advertising.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 448,
  'post_date' => '2019-07-05 02:12:28',
  'post_date_gmt' => '2019-07-05 02:12:28',
  'post_content' => 'Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat epellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus. iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.

Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.

Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus.',
  'post_title' => 'Project: Architecture',
  'post_excerpt' => 'Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat epellendus.',
  'post_name' => 'project-architecture',
  'post_modified' => '2019-07-06 06:05:30',
  'post_modified_gmt' => '2019-07-06 06:05:30',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?post_type=portfolio&#038;p=448',
  'menu_order' => 0,
  'post_type' => 'portfolio',
  'meta_input' => 
  array (
    'project_date' => 'Feb 4 - 2019',
    'project_client' => 'Minifit',
    'project_services' => 'Advertising, Mock Up, UX Design',
    'project_launch' => 'https://themify.me/',
    'mobile_menu_styles' => 'default',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"jr0h793\\",\\"cols\\":[{\\"element_id\\":\\"79ye795\\",\\"grid_class\\":\\"col-full\\"}]}]',
    'themify_used_global_styles' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'portfolio-category' => 'advertising',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-agency3/files/2019/07/architecture-advertising.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 434,
  'post_date' => '2019-07-05 02:10:30',
  'post_date_gmt' => '2019-07-05 02:10:30',
  'post_content' => 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.

Magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?” repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis.',
  'post_title' => 'Project: Apple Products',
  'post_excerpt' => 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.',
  'post_name' => 'apple',
  'post_modified' => '2019-07-06 06:03:15',
  'post_modified_gmt' => '2019-07-06 06:03:15',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?post_type=portfolio&#038;p=434',
  'menu_order' => 0,
  'post_type' => 'portfolio',
  'meta_input' => 
  array (
    'project_date' => 'June 5 - 2019',
    'project_client' => 'Valerian Corp',
    'project_services' => 'Advertising, UI, Mock Up',
    'project_launch' => 'https://themify.me/',
    'mobile_menu_styles' => 'default',
    '_themify_builder_settings_json' => '[{\\"element_id\\":\\"b2g9195\\",\\"cols\\":[{\\"element_id\\":\\"6yv6197\\",\\"grid_class\\":\\"col-full\\"}]}]',
    'themify_used_global_styles' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'portfolio-category' => 'advertising',
  ),
  'thumb' => 'https://themify.me/demo/themes/ultra-agency3/files/2019/07/apple-advertising.jpg',
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 56,
  'post_date' => '2019-06-08 09:02:33',
  'post_date_gmt' => '2019-06-08 09:02:33',
  'post_content' => ' ',
  'post_title' => '',
  'post_excerpt' => '',
  'post_name' => '56',
  'post_modified' => '2019-06-29 01:01:23',
  'post_modified_gmt' => '2019-06-29 01:01:23',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?p=56',
  'menu_order' => 1,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '0',
    '_menu_item_object_id' => '46',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'footer-widget-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 57,
  'post_date' => '2019-06-08 09:02:33',
  'post_date_gmt' => '2019-06-08 09:02:33',
  'post_content' => '',
  'post_title' => 'Our Community',
  'post_excerpt' => '',
  'post_name' => 'our-community',
  'post_modified' => '2019-06-29 01:01:23',
  'post_modified_gmt' => '2019-06-29 01:01:23',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?p=57',
  'menu_order' => 2,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'custom',
    '_menu_item_menu_item_parent' => '0',
    '_menu_item_object_id' => '57',
    '_menu_item_object' => 'custom',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
    '_menu_item_url' => 'https://themify.me/',
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'footer-widget-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 55,
  'post_date' => '2019-06-08 09:02:33',
  'post_date_gmt' => '2019-06-08 09:02:33',
  'post_content' => ' ',
  'post_title' => '',
  'post_excerpt' => '',
  'post_name' => '55',
  'post_modified' => '2019-06-29 01:01:23',
  'post_modified_gmt' => '2019-06-29 01:01:23',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?p=55',
  'menu_order' => 3,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '0',
    '_menu_item_object_id' => '48',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'footer-widget-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 54,
  'post_date' => '2019-06-08 09:02:33',
  'post_date_gmt' => '2019-06-08 09:02:33',
  'post_content' => ' ',
  'post_title' => '',
  'post_excerpt' => '',
  'post_name' => '54',
  'post_modified' => '2019-06-29 01:01:23',
  'post_modified_gmt' => '2019-06-29 01:01:23',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?p=54',
  'menu_order' => 4,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '0',
    '_menu_item_object_id' => '51',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'footer-widget-menu',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 43,
  'post_date' => '2019-06-08 08:25:42',
  'post_date_gmt' => '2019-06-08 08:25:42',
  'post_content' => ' ',
  'post_title' => '',
  'post_excerpt' => '',
  'post_name' => '43',
  'post_modified' => '2019-06-29 01:01:38',
  'post_modified_gmt' => '2019-06-29 01:01:38',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?p=43',
  'menu_order' => 1,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '0',
    '_menu_item_object_id' => '5',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-navigation',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 116,
  'post_date' => '2019-06-10 04:22:16',
  'post_date_gmt' => '2019-06-10 04:22:16',
  'post_content' => ' ',
  'post_title' => '',
  'post_excerpt' => '',
  'post_name' => '116',
  'post_modified' => '2019-06-29 01:01:38',
  'post_modified_gmt' => '2019-06-29 01:01:38',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?p=116',
  'menu_order' => 2,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '0',
    '_menu_item_object_id' => '46',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-navigation',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 337,
  'post_date' => '2019-06-29 01:01:38',
  'post_date_gmt' => '2019-06-29 01:01:38',
  'post_content' => ' ',
  'post_title' => '',
  'post_excerpt' => '',
  'post_name' => '337',
  'post_modified' => '2019-06-29 01:01:38',
  'post_modified_gmt' => '2019-06-29 01:01:38',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?p=337',
  'menu_order' => 3,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '0',
    '_menu_item_object_id' => '48',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-navigation',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$post = array (
  'ID' => 126,
  'post_date' => '2019-06-11 02:38:19',
  'post_date_gmt' => '2019-06-11 02:38:19',
  'post_content' => ' ',
  'post_title' => '',
  'post_excerpt' => '',
  'post_name' => '126',
  'post_modified' => '2019-06-29 01:01:38',
  'post_modified_gmt' => '2019-06-29 01:01:38',
  'post_content_filtered' => '',
  'post_parent' => 0,
  'guid' => 'https://themify.me/demo/themes/ultra-agency3/?p=126',
  'menu_order' => 4,
  'post_type' => 'nav_menu_item',
  'xfn' => '',
  'meta_input' => 
  array (
    '_menu_item_type' => 'post_type',
    '_menu_item_menu_item_parent' => '0',
    '_menu_item_object_id' => '51',
    '_menu_item_object' => 'page',
    '_menu_item_classes' => 
    array (
      0 => '',
    ),
    '_themify_highlight_link' => '1',
  ),
  'tax_input' => 
  array (
    'nav_menu' => 'main-navigation',
  ),
);
Themify_Import_Helper::process_post_import( $post );


$widgets = get_option( "widget_text" );
$widgets[1002] = array (
  'title' => 'Get In Touch',
  'text' => '401 Richmond St W, Toronto,
ON M5V 3A8, Canada

info@UltraAgency3Skin.com

+1 800 559 5800',
  'filter' => true,
  'visual' => true,
);
update_option( "widget_text", $widgets );

$widgets = get_option( "widget_nav_menu" );
$widgets[1003] = array (
  'title' => 'Info',
  'nav_menu' => Themify_Import_Helper::get_term_id_by_slug( "footer-widget-menu", "nav_menu" ),
);
update_option( "widget_nav_menu", $widgets );

$widgets = get_option( "widget_text" );
$widgets[1004] = array (
  'title' => 'Subscribe',
  'text' => 'Subscribe to our mailing list and receive a free guide on setting up your agency!',
  'filter' => true,
  'visual' => true,
);
update_option( "widget_text", $widgets );

$widgets = get_option( "widget_themify-layout-parts" );
$widgets[1005] = array (
  'title' => '',
  'layout_part' => 'optin-form',
);
update_option( "widget_themify-layout-parts", $widgets );



$sidebars_widgets = array (
  'footer-widget-1' => 
  array (
    0 => 'text-1002',
  ),
  'footer-widget-2' => 
  array (
    0 => 'nav_menu-1003',
  ),
  'footer-widget-3' => 
  array (
    0 => 'text-1004',
    1 => 'themify-layout-parts-1005',
  ),
); 
update_option( "sidebars_widgets", $sidebars_widgets );

$homepage = get_posts( array( 'name' => 'home', 'post_type' => 'page' ) );
			if( is_array( $homepage ) && ! empty( $homepage ) ) {
				update_option( 'show_on_front', 'page' );
				update_option( 'page_on_front', $homepage[0]->ID );
			}
			$themify_data = array (
  'setting-cache-live' => '10080',
  'setting-default_layout' => 'sidebar1',
  'setting-default_post_layout' => 'list-post',
  'setting-post_filter' => 'no',
  'setting-disable_masonry' => 'yes',
  'setting-post_gutter' => 'gutter',
  'setting-default_layout_display' => 'content',
  'setting-default_more_text' => 'More',
  'setting-index_orderby' => 'date',
  'setting-index_order' => 'DESC',
  'setting-default_media_position' => 'above',
  'setting-image_post_feature_size' => 'blank',
  'setting-default_page_post_layout' => 'sidebar1',
  'setting-default_page_post_layout_type' => 'classic',
  'setting-default_page_single_media_position' => 'above',
  'setting-image_post_single_feature_size' => 'blank',
  'setting-search-result_layout_display' => 'content',
  'setting-search-result_media_position' => 'above',
  'setting-default_page_layout' => 'sidebar1',
  'setting-custom_post_tglobal_style_single' => 'sidebar1',
  'setting-default_portfolio_index_layout' => 'sidebar-none',
  'setting-default_portfolio_index_post_layout' => 'grid3',
  'setting-portfolio_post_filter' => 'yes',
  'setting-portfolio_disable_masonry' => 'yes',
  'setting-portfolio_gutter' => 'gutter',
  'setting-default_portfolio_index_display' => 'none',
  'setting-default_portfolio_index_post_meta_category' => 'yes',
  'setting-default_portfolio_index_unlink_post_image' => 'yes',
  'setting-default_portfolio_single_layout' => 'sidebar-none',
  'setting-default_portfolio_single_portfolio_layout_type' => 'fullwidth',
  'setting-default_portfolio_single_unlink_post_image' => 'yes',
  'themify_portfolio_slug' => 'project',
  'themify_portfolio_category_slug' => 'project',
  'setting-customizer_responsive_design_tablet_landscape' => '1280',
  'setting-customizer_responsive_design_tablet' => '768',
  'setting-customizer_responsive_design_mobile' => '680',
  'setting-mobile_menu_trigger_point' => '900',
  'setting-header_design' => 'header-horizontal',
  'setting-exclude_site_tagline' => 'on',
  'setting-exclude_search_form' => 'on',
  'setting_search_form' => 'live_search',
  'setting-exclude_rss' => 'on',
  'setting-header_widgets' => 'headerwidget-3col',
  'setting-footer_design' => 'footer-left-col',
  'setting-exclude_footer_menu_navigation' => 'on',
  'setting-use_float_back' => 'on',
  'setting-footer_widgets' => 'footerwidget-3col',
  'setting-mega_menu_posts' => '5',
  'setting-mega_menu_image_width' => '180',
  'setting-mega_menu_image_height' => '120',
  'setting-mega_menu_post_count' => 'off',
  'setting-color_animation_speed' => '5',
  'setting-relationship_taxonomy' => 'category',
  'setting-relationship_taxonomy_entries' => '3',
  'setting-relationship_taxonomy_display_content' => 'none',
  'setting-single_slider_autoplay' => 'off',
  'setting-single_slider_speed' => 'normal',
  'setting-single_slider_effect' => 'slide',
  'setting-single_slider_height' => 'auto',
  'setting-more_posts' => 'infinite',
  'setting-entries_nav' => 'numbered',
  'setting-footer_text_left' => 'Crafting incredible digital products for your unique and forward-thinking company. All company sizes welcome.',
  'setting-gallery_lightbox' => 'lightbox',
  'setting-img_php_base_size' => 'large',
  'setting-global_feature_size' => 'blank',
  'setting-link_icon_type' => 'font-icon',
  'setting-link_type_themify-link-0' => 'image-icon',
  'setting-link_title_themify-link-0' => 'Twitter',
  'setting-link_img_themify-link-0' => 'https://themify.me/demo/themes/ultra-agency3/wp-content/themes/themify-ultra/themify/img/social/twitter.png',
  'setting-link_type_themify-link-1' => 'image-icon',
  'setting-link_title_themify-link-1' => 'Facebook',
  'setting-link_img_themify-link-1' => 'https://themify.me/demo/themes/ultra-agency3/wp-content/themes/themify-ultra/themify/img/social/facebook.png',
  'setting-link_type_themify-link-2' => 'image-icon',
  'setting-link_title_themify-link-2' => 'YouTube',
  'setting-link_img_themify-link-2' => 'https://themify.me/demo/themes/ultra-agency3/wp-content/themes/themify-ultra/themify/img/social/youtube.png',
  'setting-link_type_themify-link-3' => 'image-icon',
  'setting-link_title_themify-link-3' => 'Pinterest',
  'setting-link_img_themify-link-3' => 'https://themify.me/demo/themes/ultra-agency3/wp-content/themes/themify-ultra/themify/img/social/pinterest.png',
  'setting-link_type_themify-link-4' => 'font-icon',
  'setting-link_title_themify-link-4' => 'Twitter',
  'setting-link_ficon_themify-link-4' => 'fa-twitter',
  'setting-link_type_themify-link-5' => 'font-icon',
  'setting-link_title_themify-link-5' => 'Facebook',
  'setting-link_ficon_themify-link-5' => 'fa-facebook',
  'setting-link_type_themify-link-6' => 'font-icon',
  'setting-link_title_themify-link-6' => 'YouTube',
  'setting-link_ficon_themify-link-6' => 'fa-youtube',
  'setting-link_type_themify-link-7' => 'font-icon',
  'setting-link_title_themify-link-7' => 'Pinterest',
  'setting-link_ficon_themify-link-7' => 'fa-pinterest',
  'setting-link_field_ids' => '{"themify-link-0":"themify-link-0","themify-link-1":"themify-link-1","themify-link-2":"themify-link-2","themify-link-3":"themify-link-3","themify-link-4":"themify-link-4","themify-link-5":"themify-link-5","themify-link-6":"themify-link-6","themify-link-7":"themify-link-7"}',
  'setting-link_field_hash' => '8',
  'setting-page_builder_is_active' => 'enable',
  'setting-page_builder_animation_appearance' => 'none',
  'setting-page_builder_animation_parallax_bg' => 'none',
  'setting-page_builder_animation_scroll_effect' => 'none',
  'setting-page_builder_animation_sticky_scroll' => 'none',
  'setting-page_builder_maintenance_page' => 'about',
  'skin' => 'agency3',
  'import_images' => 'on',
);
themify_set_data( $themify_data );
$theme = get_option( 'stylesheet' );
$theme_mods = array (
  0 => false,
  'custom_css_post_id' => -1,
  'footerwrap_background' => '{"id":498,"src":"https://themify.me/demo/themes/ultra-agency3/files/2019/07/bg-footer-graphic.png","position":"right bottom","style":"no-repeat"}',
  'site-logo_image' => '{"stamp":1562265370780}',
);
update_option( "theme_mods_{$theme}", $theme_mods );
$menu_locations = array();
$menu = get_terms( "nav_menu", array( "slug" => "main-navigation" ) );
if( is_array( $menu ) && ! empty( $menu ) ) $menu_locations["main-nav"] = $menu[0]->term_id;
$menu = get_terms( "nav_menu", array( "slug" => "footer-widget-menu" ) );
if( is_array( $menu ) && ! empty( $menu ) ) $menu_locations["footer-nav"] = $menu[0]->term_id;
set_theme_mod( "nav_menu_locations", $menu_locations );



}
