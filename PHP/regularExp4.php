<?php
  //패턴 대입
  // '-'의 의미는 간격을 의미하지만, '\-' 역슬래쉬를 붙이면, 문자로 사용하기 위해 하는 것이다.
  //'.' 는 정규표현식에서 모든문자를 의미한다. 따라서 이 의미를 사용하지 않기위해, 즉 문자 그대로를 사용하기 위해서 '\.'역슬래쉬를 붙인다.
  // 아이디에 '-' 와 '.' 가 붙어있을 수 있잖아요(gmail 한정)
  $pattern = '/^[a-zA-Z0-9_\-\.]+@[a-zA-Z\-]+\.[\.a-zA-Z]+$/'; //마지막에 \.이 들어가는 이유는 co.kr co.uk같은게 존재하므로

  //@ 앞에 소문자,대문자,숫자,_가 올 수 있고, 그 다음에 '-'가 이어지며 그 다음에 어떤것이든 다 올 수 있다.

  $myEmail = "everdevel@icloud.com";
  if(preg_match($pattern, $myEmail, $matches)){
    echo "입력한 이메일 주소 {$myEmail}은 사용가능한 이메일 주소입니다. ";
    echo "<pre>";
    var_dump($matches);
  }else{
    echo "사용 불가한 이메일 주소입니다.";
  }
