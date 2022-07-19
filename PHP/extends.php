<?php
  //(객체 지향) 상속은 이미 선언된 클래스의 내용을 다른 클래스에서 사용할 수 있는 기능.
  class operation{
    function plus($num1, $num2){
      $result = $num1+ $num2;
      return "{$num1} + {$num2} = ".$result;
    }
  }

  //자식 클래스는 여러개의 부모클래스를 가질 수 없지만 부모클래스는 여러 개의 자식클래스를 가질 수 있다.
  class load extends operation{} //클래스 operation을 상속 받은 클래스 load를 생성
  class load2 extends operation{}
  //load 클래스의 인스턴스 생성
  $load = new load;
  $load2 = new load2;
  //load 클래스의 plus 메소드
  echo $load ->plus(1,2)."<br />";
  echo $load ->plus(4,5);
?>
