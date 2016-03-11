<?php
function video_list( $array ) {
  foreach ($array as $a) :
    echo '<h2>' . $a['동작'] . '</h2><ul class="list-inline">';
    foreach ($a['유튜브'] as $y) :
      $title       = $y['제목'];
      $year        = $y['연도'];
      $description = $y['설명'];
      $coach       = $y['코치'];
      $url         = "https://www.youtube.com/watch?v=" . $y['주소'];
      $img         = "https://i.ytimg.com/vi_webp/" . $y['주소'] . "/mqdefault.webp"; ?>
      <li>
        <a href="<?php echo $url; ?>" target="_blank"><img class="item-thumbnail" src="<?php echo $img; ?>"></a>
        <h3 class="item-title"><a href="<?php echo $url; ?>" target="_blank"><?php echo $title; ?></a> <small><?php echo $year; ?></small></h3>
        <p class="item-description"><?php echo $description; if ( ! empty( $coach ) ) echo ' &mdash; '.$coach; ?></p>
      </li><?php
    endforeach;
    echo '</ul>';
  endforeach;
}
