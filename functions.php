<?php
function get_site_title() {
  return '크로스핏 비디오 큐레이션';
}

function video_list( $array ) {
  foreach ($array as $a) :
    echo '<h2>' . $a['동작'] . '</h2><ul class="list-inline">';
    foreach ($a['유튜브'] as $y) :
      $title       = $y['제목'];
      $open        = $y['오픈'];
      $year        = $y['연도'];
      $description = $y['설명'];
      $coach       = $y['코치'];
      if ( ! empty( $y['주소'] ) ) :
        $url = "https://www.youtube.com/watch?v=" . $y['주소'];
        $img = "https://i.ytimg.com/vi/" . $y['주소'] . "/mqdefault.jpg";
      else :
        $url = NULL;
        $img = NULL;
      endif; ?>
      <li>
        <?php video_thumbnail( $img, $url ); ?>
        <?php video_title( $title, $open, $url ); ?>
        <?php video_meta( $year, $coach ); ?>
        <?php video_description( $description ); ?>
      </li><?php
    endforeach;
    echo '</ul>';
  endforeach;
}

function video_thumbnail( $img, $url ) {
  if ( ! empty( $url ) ) :
    $img = '<a href="' . $url . '" target="_blank"><img class="item-thumbnail" src="' . $img . '"></a>';
  else :
    $img = '<img class="item-thumbnail" src="images/thumbnail-placeholder.jpg">';
  endif;
  echo $img;
}

function video_title( $title, $open, $url ) { ?>
  <h3 class="item-title">
    <?php
    if ( ! empty( $url ) ) $title = '<a href="' . $url . ' target="_blank">' . $title . '</a>';
    echo $title;
    if ( $open ) echo ' <i class="fa fa-fw fa-trophy orange" data-toggle="tooltip" data-placement="right" title="크로스핏 오픈 출제"></i>'; ?>
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
