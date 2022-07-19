<?php
  //만일 접근 제한자를 지정하지 않았을 경우 public이 기본값으로 적용되어진다.

  //public 접근 제한자의 경우 = 클래스 안에서든 밖에서든 접근 가능, 상속 가능
  //protected 접근 제한자의 경우 = 클래스 내부에서 접근 가능, 상속 가능
  //private 접근 제한자의 경우 = 클래스 내부에서만 접근 가능, 상속 불가,
  class hello{
    protected function say($word){
      echo $word;
    }
    //public은 기본 설정값이므로 가입하지 않아도 무관.
    public function say2($word){
      //같은 클래스의 say 메소드 선언
      //say 메소드는 protected로 선언되어 같은 클래스 안에서 접근 가능
      $this->say($word); //자기 자신의 클래스에 있는 메소드 say를 사용한다.
    }
  }

  $hello = new hello; //클래스 외부에서 선언하였다. protected는 내부에서만 접근가능 .따라서 오류발생
  $hello ->say2('Hello World');
?>
