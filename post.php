<?php

/*
*getMapShortcode
*Get a map shortcode and translate it to display a map
*/
function getMapShortcode( $atts ) {

        if(isset($atts['type']) && $atts['type'] == 'map'){
                return '<iframe src="http://api.bloom.li/embed/article/map?url=' . get_permalink() . '&size=rect&zoom=12" width="600" height="235" name="News Map" style="border:none;visibility:visible;width:600px;height:235px"></iframe>';
        }

}
add_shortcode( 'bloom', 'getMapShortcode' );

?>
