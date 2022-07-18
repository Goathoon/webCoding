<?php
  //패턴 대입
  $pattern = '/.verdevel/'; //.verdevel 이므로, verdevel앞에 뭐든 와도 다 유효함. ('\.'이어서 모든 문자가 다 유효하므로)

  $myWebServiceName = 'eeeeccverdevel';

  if(preg_match($pattern,$myWebServiceName,$matches)) {
    echo "값 {$myWebServiceName}은 올바른 이름입니다. ";
    echo "<pre>";
    var_dump($matches);
  }else{
    echo "사용 불가한 이름입니다.";
  }
?>
