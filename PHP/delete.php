<?php
  include_once "./connectDB.php";

  $sql = "DELETE FROM myMember WHERE myMemberID = 21"; //조건문 필수 사용
  $res = $dbConnect ->query($sql);

  if($res){
    echo "21번 회원의 정보가 삭제되었습니다. ";
  }
  else{
    echo "삭제 실패";
  }
?>
