<!-- trim()은 문자열의 앞과 뒤에 공백을 삭제하는 기능을 합니다. 실수로 사용자가 스페이스바를 누른후 아이디를 입력했거나
그런 상황들을 방지 -->

<?php
  $str = " 안녕하세요. "; //안녕하세요 앞뒤로 공백을 일부러 넣음
  //trim을 사용하지 않고 출력
  echo "trim()을 사용하지 않은 경우 <br />";
  echo "|".$str."|";

  echo"<br /><br />";

  //trim 적용
  echo "trim()을 사용한 경우 <br />";
  echo "|".trim($str)."|";
  //앞 공백을 제거하는 ltrim(), 뒷 공백을 제거하는 rtrim()이있다.
?>
