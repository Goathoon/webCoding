<?php
  //패턴 대입
  $pattern = '/^[^_][a-z0-9_]+$/'; // 가장 앞에 '_'가 나오면 안됨. 그리고 다음에는 소문자,숫자,그리고 특수문자(_)가 나오는것을 검사.

  $myId = 'eve_rdevel_12';

  if(preg_match($pattern, $myId, $matches)) {
    echo "값 {$myId}은 정규식 표현에 적합한 값입니다.";
    echo "<pre>";
    var_dump($matches);
  }else{
    echo "사용 불가한 아이디입니다.";
  }
?>
