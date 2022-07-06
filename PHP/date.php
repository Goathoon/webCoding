<?php
  ini_set('date.timezone','Asia/Seoul');
  echo "현재 시간은 ".date("Y년 m월 d일 H시 i분 s초", time())."<br />";  //time()이라는 초를 기준으로,
  // 현재 몇년 몇월 며칠 며시 몇분 몇초인지 알 수 있다. 이를 위해 사용하는 함수가 date()함수임.
  // date()함수에는 2개의 파라미터가 필요, 첫번쨰는 알고싶은 시간의 단위값, 두 번쨰는 알고싶은 시간 값.
?>

<?php
  ini_set('date.timezone','Asia/Seoul');
  echo "현재 연도는 ".date("Y",time())."년입니다."; //연도만 나타냄. 마찬가지로 파라미터에 따라 나타내고싶은 범위까지 가능.
?>
