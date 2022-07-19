<?php
  session_start();
  //현재 시간에서 세션 생성시간을 뺴서 차이를 구함
  $time = time() - (int) $_SESSION['mySession10']['generation'];
  //차이의 값이 세션 유지 시간보다 크면 세션 삭제
  echo "세션이 생성된 후 {$time}초가 지났습니다. <br />";
  if($time > $_SESSION['mySession10']['duration']){ //세션 유지 시간이 지났다는 것을 의미 ->삭제
    unset($_SESSION['mySession10']);
  }

  //세션 존재 여부 확인
  if(isset($_SESSION['mySession10'])){
    echo "세션이 존재합니다. 값: {$_SESSION['mySession10']['value']}";
  }else{
    echo "세션이 존재하지 않습니다.";
  }
?>
