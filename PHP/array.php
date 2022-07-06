<?php
//배열을 이용하면 하나의 변수에 여러 개의 값을 대입할 수 있음. 이럼 더욱 편리하겠죵?

//배열 선언
  $earth = array();

  //earth의 0 인덱스에 'korea' 대입
  $earth[0] = 'korea';
  //earth 배열의 0 인덱스를 출력
  echo "earth 배열의 0인덱스는 ".$earth[0]."<br />";
?>

<?php
//배열의 인덱스가 숫자뿐만이 아니라 문자로도 지정할 수 있다. dict느낌이랄까

  //배열 선언
  $earth = array();
  //earth의 notation 인덱스에 'korea' 대입
  $earth['nation'] = 'korea';
  //earth 배열의 nation 인덱스 출력
  echo "earth 배열의 nation인덱스는 ".$earth['nation']."<br />";
?>

<?php
  //array_push함수 사용

  $fruit = array();

  array_push($fruit, 'apple','banana','grape','coconut','tangerine','water melon');
  echo $fruit[0]."<br />";
  echo $fruit[1]."<br />";
  echo $fruit[2]."<br />";
  echo $fruit[3]."<br />";
  echo $fruit[4]."<br />";
  echo $fruit[5]."<br />";
?>

<?php
  //인덱스 2개 사용 방법
  $earth = array();
  $earth['nation'][0] = 'korea';
  $earth['nation'][1] = 'america';
  $earth['nation'][2] = 'canada';
  $earth['nation'][3] = 'japan';
  $earth['nation'][4] = 'germany';
  $earth['nation'][5] = 'france';
  $earth['nation'][6] = 'china';
  //var_dump는 배열의 내용을 보여줍니다. 이는 실제 고객이 보는 페이지에 보여주지 않고, 고객이 보는 페이지를 만들 떄 테스트용임.
  var_dump($earth);

  //줄 바꾸기
  echo "<br /><br /><br />";
  //독일을 출력하려면
  echo "\$earth['nation'][4]의 값은 ".$earth['nation'][4];
?>

<?php
  //배열에 인덱스 없이 값을 입력하는 방법
  //$array = array();
  //$array = [값,값,값,값,값];
  //array_push는 이미 있는 배열에 값을 추가하는 함수이다.
  $fruit = array();
  $fruit = ['banana','water melon','grape','apple','mango'];

  echo $fruit[0]; //banana
  echo "<br />";
  echo $fruit[2]; //grape
?>
