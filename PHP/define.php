<?php
  echo "상수 MYSQLI_ASSOC의 값은 ".MYSQLI_ASSOC."<br />";
  echo "상수 MYSQLI_NUM의 값은 ".MYSQLI_NUM."<br />";
  echo "상수 MYSQLI_BOTH의 값은 ".MYSQLI_BOTH."<br />";
  //fetch_array에서 받은 값이 1번이면 어떠한 기능, 2번이면 어떠한 기능, 3번이면 어떠한 기능을 하게 된다는 것을 추측할 수 있다.

  //상수 myRobot 선언
  define("myRobot", "AIBO");
  echo "상수 myRobot의 값은 ".myRobot."<br />";

  //상수 myRobot의 값을 변경
  define("myRobot", "ASIMO");
  echo "값 변경 시도 후 상수 myRobot의 값은 ".myRobot."<br />";
  //한번 정의 내려진 상수는 변경해도 변경되어지지 않습니다.
?>
