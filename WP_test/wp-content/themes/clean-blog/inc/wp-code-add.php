<?php
function my_function() {
 echo'<script id="from_my_function"></script>';

}
add_action('wp_head', 'my_function', 100000);