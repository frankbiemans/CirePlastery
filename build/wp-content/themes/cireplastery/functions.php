<?php

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
include_once(dirname(__FILE__) . '/wp/_require.php' );

update_option( 'WP_HOME', 'http://'. $_SERVER['HTTP_HOST'] );
update_option( 'WP_SITEURL', 'http://'. $_SERVER['HTTP_HOST'] );

add_image_size( 'Frontpage Slider', 2240, 1100, true );

add_theme_support( 'post-thumbnails', array( 'post', 'slider-item', 'project' ) );

function return_all_countries() {
    return $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
}

function is_contact_page(){
	$template = basename(get_page_template());
	if($template == 'page-contact.php'){
		return 1;
	} else {
		return 0;
	}
}

function ag_get_theme_menu_name( $theme_location ) {
    if( ! $theme_location ) return false;

    $menu_obj = ag_get_theme_menu( $theme_location );
    if( ! $menu_obj ) return false;

    if( ! isset( $menu_obj->name ) ) return false;

    return $menu_obj->name;
}

function gm_get_theme_menu_name( $theme_location ) {
    if( ! $theme_location ) return false;

    $theme_locations = get_nav_menu_locations();
    if( ! isset( $theme_locations[$theme_location] ) ) return false;

    $menu_obj = get_term( $theme_locations[$theme_location], 'nav_menu' );
    if( ! $menu_obj ) $menu_obj = false;
    if( ! isset( $menu_obj->name ) ) return false;
} 

function ag_get_theme_menu( $theme_location ) {
    if( ! $theme_location ) return false;

    $theme_locations = get_nav_menu_locations();
    if( ! isset( $theme_locations[$theme_location] ) ) return false;

    $menu_obj = get_term( $theme_locations[$theme_location], 'nav_menu' );
    if( ! $menu_obj ) $menu_obj = false;

    return $menu_obj;
}


add_action( 'after_setup_theme', 'add_page_options' );
function add_page_options(){
    if( class_exists( 'Super_Custom_Post_Type' ) ){
        $post_meta = new Super_Custom_Post_Meta('page');

        $fields = [
            'title_multiple_lines' => [ 
                'type' => 'textarea', 
                'label' => 'Title over multiple lines',
                'field_description' => 'hoi',
                'default' => ''
            ]
        ];

        $post_meta->add_meta_box(
            array(
                'id' => 'page_extra_options',
                'title' => 'Extra opties voor paginas',
                'context' => 'normal',
                'fields' => $fields
            )
        );
    }
}

function break_off_the_title( $title, $id = null ) {
    $post = get_post($id);
    $title_multiple_lines = get_post_meta($id, 'title_multiple_lines', true);
    if(isset($title_multiple_lines) && !empty($title_multiple_lines) && !is_admin()){
        $title = put_title_in_spans($title_multiple_lines);
    }
    return $title;
}

function put_title_in_spans($title_multiple_lines){
    $new_title = '';
    $temp = '<span class="outer"><span class="inner">%s</span></span>';
    $words = explode(PHP_EOL, $title_multiple_lines);
    foreach($words as $word){
        $new_title .= sprintf($temp, $word);
    }
    $title = $new_title;
    return $title;
}
add_filter( 'the_title', 'break_off_the_title', 10, 2 );



function return_instagram_feed($hastag = false){
    $access_token = '7998922224.7b6e4d0.8bac09cba6214ff79859d6b1d48063b2';
    $user = 'self';
    $feed_url = 'https://api.instagram.com/v1/users/'. $user .'/media/recent/?access_token='. $access_token;
    $json = file_get_contents($feed_url);
    $obj = json_decode($json);
    $return_arr = [];

    foreach($obj->data as $post){
        if(isset($hastag) && $hastag != false){
            if(!in_array($hastag, $post->tags)){
                continue;
            }
        }

        $title = preg_replace('/(.*?[?!.](?=\s|$)).*/', '\\1', $post->caption->text);
        $text = str_replace($title, '', $post->caption->text);

        $add_me = [
            'ID' => $post->id,
            'title' => $title,
            'text' => $text,
            'location' => $post->location->name,
            'likes' => $post->likes->count,
            'image' => [
                'src' => $post->images->standard_resolution->url, 
                'width' => $post->images->standard_resolution->width, 
                'height' => $post->images->standard_resolution->height, 
                'alt' => $post->caption->text
            ],
            'timestamp' => $post->created_time,
            'link' => $post->link,
            'target' => '_blank',
            'type' => 'instagram'
        ];

        $return_arr[] = $add_me;
    }

    return $return_arr;
}

function forward_subscribers(){
    global $current_user;
    get_currentuserinfo();
    if(is_admin() && is_user_logged_in() && $current_user->data->user_email == 'info@cireplastery.nl'){
        wp_redirect( site_url() );
    }
}

add_action( 'admin_init', 'forward_subscribers');

function insta_link(){
    echo '
        <a href="'. get_option('url_instagram') .'" target="_blank" class="social__a">
            <span class="insta-icon">
                <img src="'. get_bloginfo( 'template_url' ) .'/images/icons/instagram-black.png" class="black" />
                <img src="'. get_bloginfo( 'template_url' ) .'/images/icons/instagram.png" class="colored" />
                <img src="'. get_bloginfo( 'template_url' ) .'/images/icons/instagram-white.png" class="white" />
            </span>
        </a>
    ';
}