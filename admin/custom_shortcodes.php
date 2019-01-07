<?php

/**
 * SHORTCODES
 *
 */

// Remove empty paragraphs from beginning and end of [shortcode][/shortcode]
function noParagraphs($content){
    if ( '</p>' == substr( $content, 0, 4 ) && '<p>' == substr( $content, strlen( $content ) - 3 ) ){
        $content = substr( $content, 4, strlen( $content ) - 7 );
    }
    return $content;
}

function stripAllParagraphs($content) {
    return str_ireplace( array('<p>', '</p>'), '', $content );
}

/**
 *
 * Products Page Cards - IMG on the left
 *
 */
function pcard($atts,$content){
    extract( shortcode_atts( array(
        'class' => '',
        'id' => ''
    ), $atts ) );

        $content = do_shortcode( shortcode_unautop( $content ) );
        $content = stripParagraphs($content);

    $return = '';

    $return .= '<div class="pcard ' . (( $class != '') ? $class : "" ) . '" id="'  . $id . '">';
        $return .= force_balance_tags($content);
    $return .= '</div>';

    return $return;
}
add_shortcode('pcard','pcard');

// Card img
function pcard_img($atts){
    extract( shortcode_atts( array(
                'url'    => '',
                'link'   => '',
                'target' => '_self',
                'alt'    => ''
    ), $atts ) );

        // $content = do_shortcode( shortcode_unautop( $content ) );
        // $content = stripParagraphs($content);

        $return = '<img src="' . $url . '" alt="' . $alt . '">';
        if( !empty($link) ) {
            $return = '<a class="pcard-img" href="' . $link . '" target="' . $target . '">' . $return . '</a>';
        } else {
            $return = '<div class="pcard-img">' . $return . '</div>';
        }

    return $return;
}
add_shortcode('pcard_img','pcard_img');

// Card block
function pcard_block($atts,$content) {
    extract( shortcode_atts( array(
        'class' => ''
      ), $atts ) );

    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';

    $return .= '<div class="pcard-block ' . (( $class != '') ? $class : "" ) . '">';
        $return .= force_balance_tags($content);
    $return .= '</div>';

    return $return;
}
add_shortcode('pcard_block','pcard_block');


// Card title
function pcard_title($atts,$content) {
    extract( shortcode_atts( array(
        'class' => ''
      ), $atts ) );

    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';

    $return .= '<h4 class="pcard-title ' . (( $class != '') ? $class : "" ) . '">';
        $return .= stripAllParagraphs($content);
    $return .= '</h4>';

    return $return;
}
add_shortcode('pcard_title','pcard_title');

// Card text
function pcard_text($atts,$content) {
    extract( shortcode_atts( array(
        'class' => ''
      ), $atts ) );

    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';

    $return .= '<div class="pcard-text ' . (( $class != '') ? $class : "" ) . '">';
        $return .= force_balance_tags($content);
    $return .= '</div>';

    return $return;
}
add_shortcode('pcard_text','pcard_text');


// Card footer - good for inserting links/buttons that will line up vertically
function pcard_footer($atts,$content) {
    extract( shortcode_atts( array(
        'class' => ''
      ), $atts ) );

    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';

    $return .= '<div class="pcard-footer ' . (( $class != '') ? $class : "" ) . '">';
        $return .= stripAllParagraphs($content);
    $return .= '</div>';

    return $return;
}
add_shortcode('pcard_footer','pcard_footer');
