<?php
  ob_start();
  session_start();

  //2개의 세션 생성
  $_SESSION['mySession6'] = 'everdevel';
  $_SESSION['mySession7'] = 'beanscent';
  //생성된 세션 확인
  echo "<pre>";
  var_dump($_SESSION);

  //세션 파괴
  if(session_destroy()){ //if문에 넣어서 작동하는걸 보니 session_destroy()함수는 true false를 반환합니다.
    echo "세션 파괴 완료";
  }
  //session_destroy() 의 결과를 같은 페이지에서 확인할 수 없다.
  // echo "<pre>";
  var_dump($_SESSION);
  echo "session_destroy()의 결과를 같은 페이지에서 확인할 수 없습니다."

?>
