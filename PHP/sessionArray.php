<?php
  session_start();

  //세션을 배열형으로 선언
  $_SESSION['mySession10'] = array();
  //값을 대입하기 위해 2차원 배열 선언
  $_SESSION['mySession10']['value'] = 'everdevel';
  //세션 생성 시간 대입하기 위해 2차원 배열 선언
  $_SESSION['mySession10']['generation'] = time();
  //세션 지속 시간 대입하기위해 2차원 배열 선언
  $_SESSION['mySession10']['duration'] = 10; //이렇게 한다고 해서 자동으로 10초간 유지되는 것은 아니므로
  //이 세션을 사용할 페이지에서 PHP프로그래밍을 이용하여 10초동안만 유지되도록 만들어 주어야 함.

  //mySession10 의 세션의 값 확인
  echo "<pre>";
  var_dump($_SESSION['mySession10']);
?>
