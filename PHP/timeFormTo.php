<!-- 특정 시간에 작동하게 만들기 -->
<?php
  ini_set('date.timezone','Asia/Seoul');
  //현재 예제를 구현 가능한 시간을 입력하세요.
  //시작 시간 설정
  $startTime = mktime(00,00,0,07,07,2022);
  //종료 시간 설정
  $endTime = mktime(01,00,0,7,7,2022);

  if($startTime <= time() && $endTime > time()){
    echo "이벤트에 참여하세요.";
  }else{
    echo "이벤트 시작 전이거나, 종료되었습니다.";
  }
?>
