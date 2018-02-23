<?php 
/*^^^ You might have to remove this php tag before adding this code to your theme's functions.php file */
function dan_search_filter( $query ) {
  if ( ! $query->is_admin && $query->is_search && $query->is_main_query() ) {
    $query->set( 'post__not_in', array( 9171,9101,10229,124,3414,1955,3857,5184,7863,3095,3728,3729,6364,3730,6541,6543,6545,6548,6550,6552,3414,1973,4605,4628,4294,4298,4300,4304,4306,4308,3654,3081,3322,2016,5240,3872,5139,3468,3470,5017,3114,9095,9633,9245,2213,9334,9210,6973,3093,1932,133,6931,9247,9992,6584,6367,3726,4784,3103,3098,2239 ) );
  }
}
add_action( 'pre_get_posts', 'dan_search_filter' );