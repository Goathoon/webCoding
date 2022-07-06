<?php
$num = 20;
$num2 = 3;
echo "변수 \$num의 값은 {$num}이며 변수 \$num2의 값은 {$num2}입니다. <br />";
$plus = $num + $num2;
$minus = $num - $num2;
$mul = $num * $num2;
$division = $num/ $num2;
$rest = $num % $num2;
echo "{$num} 더하기 {$num2}는 ". $plus ."입니다. <br />";
echo "{$num} 빼기 {$num2}는 ". $minus ."입니다. <br />";
echo "{$num} 곱하기 {$num2}는 ". $mul ."입니다. <br />";
echo "{$num} 나누기 {$num2}는 ". $division ."입니다. <br />";
echo "{$num} 나누기 {$num2}의 마지막 값은 ". $rest ."입니다. <br />";
?>
<?php
  // += 활용
  $num = 10;
  $num += 2;
  echo "[+=사용] 변수 num의 값은 ".$num."<br />";

  // -= 활용
  $num = 10;
  $num -= 2;
  echo "[-=사용] 변수 num의 값은 ".$num."<br />";

  // *=활용
  $num = 10;
  $num *= 2;
  echo "[*=사용] 변수 num의 값은 ".$num."<br />";

  // /=활용
  $num = 10;
  $num /= 2;
  echo "[/=사용] 변수 num의 값은 ".$num."<br />";

  // %=활용
  $num = 10;
  $num %= 3;
  echo "[/=사용] 변수 num의 값은 ".$num."<br />";

  // .=활용
  $city = "서울";
  $city .= "특별시"; //특별시를 이어 붙임(공백 x)
  echo "[.=사용] 변수 city의 값은 ".$city."<br />";
  ?>
