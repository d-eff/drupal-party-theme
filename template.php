<?php
function party_menu_link(array $variables) {
    $element = $variables['element'];
      $sub_menu = '';
    if ($element['#below']) {
        $sub_menu = drupal_render($element['#below']);
          }
    if (strpos( $element['#href'], 'nolink')) {
        $output = '<span class="nolink">' . $element['#title'] . '</span>';
    } else {
        $output = l($element['#title'], $element['#href'], $element['#localized_options']);
          }
    return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}
?>
