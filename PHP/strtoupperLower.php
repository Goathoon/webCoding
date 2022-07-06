<!-- 문자열을 소문자로 변경해주는 함수와 대문자로 변경해주는 함수들 -->

<?php
  $str = "Hello World";
  echo "원문 <br />";
  echo $str;
  echo "<br /><br />";

  echo "대문자로 출력 <br />";
  echo strtoupper($str);
  echo "<br /><br />";
  echo "소문자로 출력 <br />";
  echo strtolower($str);
?>
