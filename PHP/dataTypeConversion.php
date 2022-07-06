<?php
  $str = "문자열";
  echo "데이터형 변경전의 데이터형 ".gettype($str)."<br />";

  $str = (int)$str;
  echo "데이터형 변경 후의 데이터형 ".gettype($str)." 값은 {$str} <br />";
 //이 때, 문자열이 숫자로 시작하지 않으면, int로 변환시 0이 된다.
 ?>

 <?php
  $str = "555문자열";
  echo "데이터형 변경 전의 데이터형 ".gettype($str)."<br />";

  $str = (int) $str;
  echo "데이터형 변경 후의 데이터형 ".gettype($str)." 값은 {$str}"; //555가 출력됨
  //즉, 데이터변경후 앞에있떤 숫자들은 그대로 남고, 문자들은 사라지게 됩니다.
?>

<?php
  $double = 12.494;
  echo "데이터형 변경 전의 데이터형 ".gettype($double)."<br />";

  $double = (int) $double;
  echo "데이터형 변경 후의 데이터형 ".gettype($double)." 값은 {$double}";//소수일 경우, 정수부분만 남습니다.
?>
