<?php
  class hello {
    // 클래스를 사용하기 위해 클래스의 인스턴스를 생성하고 메소드를 호출해 왔다.
    // 그럼 인스턴스를 생성하지 않고 클래스 외부에서 메소드를 호출하는 방법은? ==> 'static' 이다.


    //static을 사용하여 메소드 생성
    //메소드를 선언할 때 function앞에 static을 붙여주면 해당 메소드는
    //클래스 외부에서 인스턴스 생성하지 않고 호출할 수 있게 된다.
    static function output($word){
      echo "메시지를 출력하는 메소드 <br />";
      echo $word;
    }
  }

  //인스턴스 생성하지 않고 클래스 hello의 메소드 output 호출
  hello::output('hello world');
