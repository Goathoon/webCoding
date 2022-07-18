<?php
class people{
  //생성자
  function __construct(){
    echo "사람은 돈을 좋아한다 <br />";
  }
  //말하기
  function speak($word){
    echo $word." 라고 말했다 <br />";
  }
  //달리기
  function run($km){
    echo $km."을 달리다 <br />";
  }

  //걷기
  function walk($km){
    echo $km."을 걷다 <br />";
  }

  //소멸자 - people 클래스가 기능을 실행한 후 요청하지 않아도 구동되는 기능임.
  function __destruct(){
    echo "힘들다 <br />";
  }
}
?>
