<?php
  //쿠키는 데이터를 컴퓨터에 저장했다면, 세션은 서버에 저장해서 보안상 더 안전함.
  session_start();

  //세션 생성
  $_SESSION['userId'] = 'everdevel'; //세션 생성 방법 $_SESSION['세션 이름'] = 세션값;

  if(isset($_SESSION['userId'])){
    echo "세션 완료 세션 userId의 값: {$_SESSION['userId']}";
  }else{
    echo "세션 생성 실패";
  }
?>
