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
        <?php video_title( $title, $url ); ?>
        <?php video_meta( $year, $coach ); ?>
        <?php video_description( $description ); ?>
      </li><?php
    endforeach;
    echo '</ul>';
  endforeach;
}

function video_thumbnail( $img, $url ) { ?>
  <a href="<?php echo $url; ?>" target="_blank"><img class="item-thumbnail" src="<?php echo $img; ?>"></a><?php
}

function video_title( $title, $url ) { ?>
  <h3 class="item-title">
    <a href="<?php echo $url; ?>" target="_blank"><?php echo $title; ?></a>
  </h3><?php
}

function video_meta( $year, $coach ) { ?>
  <p class="item-meta">
    <?php if ( ! empty( $year ) )  echo $year; ?>
    <?php if ( ! empty( $coach ) ) echo ' / ' . $coach; ?>
  </p><?php
}

function video_description( $description ) {
  if ( ! empty( $description ) ) : ?>
    <hr>
    <p class="item-description">
     <?php echo $description; ?>
    </p><?php
  endif;
}
