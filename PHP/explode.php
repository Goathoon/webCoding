<!-- explode()는 문자열에서 특정 문자를 기준으로 나눈후 배열로 대입 -->
<?php
  $email = "everdevel@icloud.com";
  $emailArray = explode("@",$email); //이려면 everdevel // icloud.com 두 부분으로 배열에 저장되겠죠?

  echo "<pre>"; // pre태그로, var_dump()를 가독성 있게 나타내기 위해 사용합니다.
  var_dump($emailArray); //0인덱스에 everdevel이 들어감. 1인덱스에는 icloud.com

  echo "이메일의 호스트 출력 <br />";
  echo $emailArray[1];
?>
