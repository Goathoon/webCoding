<?php
  function plus($num1, $num2, $num3){
    $sum = $num1+ $num2+ $num3;
    return $sum;


  //위에서 return문이 실행되어 plus 함수가 종료되므로
  //아래의 명령문이 실행 안됨
  $sum += 100;
  }

echo "50+30+5 는".plus(50,30,5); //이떄에는 $안써도 됩니다. 함수명이기 떄문이죠.
?>
