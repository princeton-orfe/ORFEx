<?php
/**
 * @file
 * Rate widget theme
 */

$arrlength=count($buttons);
for($x=0; $x<$arrlength; $x++) {
$buttons=preg_replace("/\d+$/","",$buttons);
}

print theme('item_list', array(
  'items' => $buttons,
  'title' => $display_options['title'],
  ));

if ($info) {
  print '<div class="rate-info">' . $info . '</div>';
}

if ($display_options['description']) {
  print '<div class="rate-description">' . $display_options['description'] . '</div>';
}
