<p class="page-description well well-sm text-muted">크로스핏의 기초 동작들과 각 동작의 프로그레션을 배울 수 있는 큐레이션 페이지입니다. 모든 비디오는 <a href="https://www.youtube.com/user/CrossFitHQ" target="_blank">CrossFit 공식 유튜브 채널</a>의 비디오로 넘어갑니다. (제작자: <a href="mailto:a@akaiv.com">심철환</a>)</p>

<ul class="nav nav-tabs" role="tablist">
  <li role="presentation" class="active"><a href="#foundation" aria-controls="foundation" role="tab" data-toggle="tab">기초</a></li>
  <li role="presentation"><a href="#gymnastics" aria-controls="gymnastics" role="tab" data-toggle="tab">짐내스틱</a></li>
  <li role="presentation"><a href="#lifting" aria-controls="lifting" role="tab" data-toggle="tab">리프팅</a></li>
  <li role="presentation"><a href="#workout" aria-controls="workout" role="tab" data-toggle="tab">운동</a></li>
</ul>

<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="foundation"><?php video_list( $array['기초']); ?></div>
  <div role="tabpanel" class="tab-pane" id="gymnastics"><?php video_list( $array['짐내스틱'] ); ?></div>
  <div role="tabpanel" class="tab-pane" id="lifting"><?php video_list( $array['리프팅'] ); ?></div>
  <div role="tabpanel" class="tab-pane" id="workout"><?php video_list( $array['운동'] ); ?></div>
</div>
