<!-- 배열 데이터를 처리할 떄 foreach문을 사용하면 편리합니다. -->
<!--
array(3){
  [0]=>
  array(3) {
    ["name"]=>
    string(9) "김태영"
    ["userID"]=>
    string(13) "everdevelHost"
    ["email"]=>
    string(23) "everdevel@everdevel.com"
  }
  [1]=>
  array(3) {
    ["name"]=>
    string(0) "김태헌"
    ["userID"]=>
    string(4) "jake"
    ["email"]=>
    string(18) "jake@everdevel.com"
  }
  [2]=>
  array(3){
    ["name"]=>
    string(0) "이지형"
    ["userID"]=>
    string(6) "tigger"
    ["email"]=>
    string(20) "tigger@everdevel.com"
  }
}-->

<!-- 앞 데이터에서 고객의 이름만 출력하고자 한다. for문을 활용하면 -->
<?php
  //member 변수를 선언하고 데이터형을 배열로 선언
  $member = array();

  //member 배열에 0 인덱스를 생성하고 0 인덱스도 배열로 선언
  $member[0] = array();
  //0 인덱스에 들어갈 배열의 이름을 지정하고 값 대입
  $member[0]['name'] = '김태영';
  $member[0]['userID'] = 'everdevelHost';
  $member[0]['email'] = 'everdevel@everdevel.com';

  //member 배열에 1 인덱스 생성하고 1 인덱스도 배열로 선언
  $member[1] = array();
  $member[1]['name'] = '김채헌';
  $member[1]['userID'] = 'jake';
  $member[1]['email'] = 'jake@everdevel.com';

  //member 배열에 2 인덱스 생성하고 2 인덱스도 배열로 선언
  $member[2] = array();
  //2 인덱스에 들어갈 배열의 이름을 지정하고 값을 대입
  $member[2]['name'] = '이지형';
  $member[2]['userID'] = 'tigger';
  $member[2]['email'] = 'tigger@everdevel.com';

  for($i = 0; $i<count($member); $i++) //count()는 배열의 수를 반환합니다.
  {
    echo $member[$i]['name']."<br />";
  }
?>

<!-- foreach 문을 활용하면 -->
<?php
  //member 변수를 선언하고 데이터형을 배열로 선언
  $member = array();

  //member 배열에 0 인덱스를 생성하고 0 인덱스도 배열로 선언
  $member[0] = array();
  //0 인덱스에 들어갈 배열의 이름을 지정하고 값 대입
  $member[0]['name'] = '김태영';
  $member[0]['userID'] = 'everdevelHost';
  $member[0]['email'] = 'everdevel@everdevel.com';

  //member 배열에 1 인덱스 생성하고 1 인덱스도 배열로 선언
  $member[1] = array();
  $member[1]['name'] = '김채헌';
  $member[1]['userID'] = 'jake';
  $member[1]['email'] = 'jake@everdevel.com';

  //member 배열에 2 인덱스 생성하고 2 인덱스도 배열로 선언
  $member[2] = array();
  //2 인덱스에 들어갈 배열의 이름을 지정하고 값을 대입
  $member[2]['name'] = '이지형';
  $member[2]['userID'] = 'tigger';
  $member[2]['email'] = 'tigger@everdevel.com';

  foreach($member as $data){
    echo $data['name']."<br />";
  }
?>
