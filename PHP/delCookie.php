<?php
  setcookie('myCookie',null,time()-3600, '/'); //삭제하려는 쿠키의 이름으로 setcookie를 하고 시간을 이전시간대로 설정.
  if(isset($_COOKIE['myCookie'])){
    echo "쿠키가 존재합니다.";
  }else{
    echo "쿠키가 삭제되었습니다.";
  }
?>
