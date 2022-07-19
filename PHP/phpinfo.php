<?php
  //세션유지시간은 쿠키 유지시간과 다르다. 쿠키때는 setcookie하면서 설정했지만
  //세션은 php의 설정 파일을 만져야함.
  phpinfo();

  //session.cookie_lifetime은 생성한 세션을 유지하는 시간.
  //session.gc_maxlifetime은 사용자가 계속 사용하지 않을 경우 세션이 유지되는 시간. (ex.은행이나 카드 회사의 사이트)
  //우선순위는 session.gc_maxlifetime이 session.cookie_lifetime보다 높다.
  //이를 변경하기 위해 php.ini의 설정을 변경합니다. (직접 실행) date.timezone 등등.. lifetime이라던지
  
?>
