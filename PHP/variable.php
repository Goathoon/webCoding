<?php
  $greeting = 'hello world'; //greeting이라는 변수에 hello world 문자열 저장
  echo $greeting; //greeting 변수를 출력.
?>
<?php
  $birthMonth = 4;
  echo " 저는 ".$birthMonth."월에 태어났습니다.";
?>

<?php
  $birthMonth = 4;
  echo "저는 $birthMonth 월에 태어났습니다."; //연결자 없이 출력. $birthMonth 의 앞 뒤에 어떤 문자도 없기 ㅒㄸ문에
  //이미 선언한 변수로 인식하지만, 무언가 붙으면 붙어버린 텍스트까지 변수명을 인식.
  //즉, "저는 $birthMonth월에 태어났습니다." 라고 하면 변수명이 $birthMonth월에가 됩니다.
?>

<?php
$birthMonth = 4;
echo "저는 {$birthMonth}월에 태어났습니다."; //이렇게하면 문자열에 붙이고도 변수명 확실히 구분 가능.
?>

<?php
//큰 따음표 역슬래시 사용
echo "교수님이 말씀하셨다. \"이번 과제는 팀 프로젝트로 하겠습니다.\" <br />";

//$표시가 변수로 선언되지 않도록 앞 역슬래시 사용
echo "\$15를 지불하세요.";
?>
