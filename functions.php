<?php
function video_list( $array ) {
  foreach ($array as $a) :
    echo '<h2>' . $a['동작'] . '</h2><ul class="list-inline">';
    foreach ($a['유튜브'] as $y) :
      $title = $y['제목'];
      $url = "https://www.youtube.com/watch?v=" . $y['주소'];
      $img = "https://i.ytimg.com/vi_webp/" . $y['주소'] . "/mqdefault.webp"; ?>
      <li>
        <a href="<?php echo $url; ?>" target="_blank"><img src="<?php echo $img; ?>"></a>
        <h3><a href="<?php echo $url; ?>" target="_blank"><?php echo $title; ?></a></h3>
      </li><?php
    endforeach;
    echo '</ul>';
  endforeach;
}
