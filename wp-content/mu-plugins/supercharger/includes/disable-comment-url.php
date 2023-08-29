<?php
function supercharger_remove_comment_url_field($fields) {
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields','supercharger_remove_comment_url_field');