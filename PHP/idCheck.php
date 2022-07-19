<?php
  //현재 JSON이라는 언어로 jQuery 와 PHP가 통신하고 있음.
  //다음은 PHP에서 result라는 변수에 good이라는 값을 대입하여 JSON형식으로 전달하는 예제이다.
  echo json_encode(array('result'=>'good'));
  //AJAX 통신에서 사용할 언어를 JSON으로 정하면 json_encode()함수 처리가 필수.
  //그리고 그 안에는 배열형태의 result변수로 값 'good'을 =>기호를 사용해 대입해야함.
  //이 값을 echo문으로 출력함으로써 AJAX통신으로 이 값을 읽어 전달받음. 그리고 이 값이
  //success:function(data){ 의 변수 data에 대입된다. 이 소스는 result값이 good으로
  //고정되어 있으므로 [입력하신 아이디를 사용해도 좋습니다.]라는 문구가 출력된다.

?>
