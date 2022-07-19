<?php
  //만일 접근 제한자를 지정하지 않았을 경우 public이 기본값으로 적용되어진다.

  //public 접근 제한자의 경우 = 클래스 안에서든 밖에서든 접근 가능, 상속 가능
  //protected 접근 제한자의 경우 = 클래스 내부에서 접근 가능, 상속 가능
  //private 접근 제한자의 경우 = 클래스 내부에서만 접근 가능, 상속 불가,
  class hello{
    protected function say($word){
      echo $word;
    }
  }

  $hello = new hello; //클래스 외부에서 선언하였다. protected는 내부에서만 접근가능 .따라서 오류발생
  $hello ->say('Hello World');
?>
