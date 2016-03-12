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
      $img         = "https://i.ytimg.com/vi/" . $y['주소'] . "/mqdefault.jpg"; ?>
      <li>
        <?php video_thumbnail( $img, $url ); ?>
        <?php video_title( $title, $year, $url ); ?>
        <?php video_description( $description, $coach ); ?>
      </li><?php
    endforeach;
    echo '</ul>';
  endforeach;
}

function video_thumbnail( $img, $url ) { ?>
  <a href="<?php echo $url; ?>" target="_blank"><img class="item-thumbnail" src="<?php echo $img; ?>"></a><?php
}

function video_title( $title, $year, $url ) { ?>
  <h3 class="item-title">
    <a href="<?php echo $url; ?>" target="_blank"><?php echo $title; ?></a>
    <?php if ( ! empty( $year ) ) echo '<small>' . $year . '</small>'; ?>
  </h3><?php
}

function video_description( $description, $coach ) {
  if ( ! empty( $description ) || ! empty( $coach ) ) echo '<p class="item-description">';
  if ( ! empty( $description ) ) echo $description;
  if ( ! empty( $coach ) ) echo ' &mdash; '.$coach;
  if ( ! empty( $description ) || ! empty( $coach ) ) echo '</p>';
}
