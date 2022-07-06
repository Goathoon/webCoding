<?php
  function plus($num1 = 0, $num2 = 0, $num3 = 100){
    $sum = $num1+$num2+$num3;
    return $sum;

    //위에서 return문이 실행되어 plus함수가 종료되므로
    //아래의 명령문은 실행이 안됨.
    $sum +=100;
  }
  //2개의 파라미터를 사용해보자
  echo "50+30 은".plus(50,30); //결과가 180이됨. 세번쨰 파라미터 지정안해줘서 function 정의할 떄 초기화 했던
  //세 번쨰 파라미터의 초기값이 더해지기 떄문.
?>
