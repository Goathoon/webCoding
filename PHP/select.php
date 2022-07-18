<?php
  include_once "./connectDB.php";
  $myMemberID = 1; //불러올 회원 번호
  $sql = "SELECT * FROM myMember WHERE myMemberID = {$myMemberID}"; //select문을 이용하여 쿼리문을 만들고 query()메소드를 이용하여
  //불러옵니다. 그리고 그것을 변수에 선언한 후 해당 변수에서 fetch_array()메소드를 이용하여 자료를 가져옵니다.
  $result = $dbConnect->query($sql); //쿼리송신, 그 결과를 result에 저장.

  $memberInfo = $result->fetch_array(MYSQLI_ASSOC); //fetch_array (mysqli_assoc) 는 필드명으로 각 필드의 정보를
  //분류하게 해준다.

  echo "<pre>";
  var_dump($memberInfo);

  echo "회원번호가 {$myMemberID}번인 회원의 이름은 ".$memberInfo['name'];
?>
