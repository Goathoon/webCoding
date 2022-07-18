<?php
  include "./say.php";
  include "./useSay.php";
  //500 error 발생.
  //해당 파일에 문제가 있을 때의 에러코드이다.
  //그렇다면 왜 오류가 생겼을끼? -- 클래스 say가 같은 이름으로 2번 선언되었기 떄문이다.
  //이를 막기위해 "include"를 "include_once 로 변경하면 됨"
?>
