<!--특정 시간을 타임스탬프로 만드는 함수 mktime() -->

<?php
  ini_set('date.timezone','Asia/Seoul');
  echo "2017년 12월 25일 9시 15분 10초의 타임스탬프는? <br />";
  echo mktime(9,15,10,12,25,2017); //시, 분, 초, 월, 일, 년 순으로 입력
  //만약 밤 12시 0분 0초부터 새벽 1시 59분 59초까지 어떠한 이벤트를 한다고 가정할 떄, 밤 12시에 그 기능을
  //오픈하지 않고 시간함수를 이용항 12시부터 1시 59분 59초까지 작동하도록 구현할 수 있다.
?>
