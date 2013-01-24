<?php 
function thumb_show( $content, $default_width= 290, $default_height = 290 ){
    $default_radio = $default_width / $default_height;
    $image = array();
    preg_match( '@<img.*>@i', $content, $image );
    if( isset($image[0]) ){
        $src = array();
        $width = array();
        $height = array();
        preg_match( '@src=.([^"\']+).@i', $image[0], $src );
        preg_match( '@width=[\'"]?([^"\']+)[\'"]?@i', $image[0], $width );
        preg_match( '@height=[\'"]?([^"\']+)[\'"]?@i', $image[0], $height );
        if( $width && $height ){
            if( $width[1] / $height[1] > $default_radio ){
                $marginLeft = abs( $default_height / $height[1] * $width[1] - $default_width ) / 2;
                return "<img src=\"{$src[1]}\" height=$default_height style=\"margin-left:-{$marginLeft}px\" />";
            }else{
                $marginTop = abs( $default_width / $width[1] * $height[1] - $default_height ) / 2;
                return "<img src=\"{$src[1]}\" width=$default_width style=\"margin-top:-{$marginTop}px\" />";
            }
        }else{
            return "<img src=\"{$src[1]}\" width=$default_width height=$default_height />";
        }
    }
    return $content;
}
