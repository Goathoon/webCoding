<?php
  include_once "./connectDB.php";

  //이름 정보를 int형으로 변환
  $myMemberID = (int) $_POST['memberID'];

  if($myMemberID == 0){
    echo "값이 유효하지 않습니다. ";
    exit;
  }

  if($_POST['cn'] == '' || $_POST['cn'] == null){
    echo "값이 유효하지 않습니다. ";
    exit;
  }else{
    $cn = $dbConnect->real_escape_string($_POST['cn']); //injection 공격 방지
  }

  $sql = "UPDATE myMember SET name = '{$cn}' WHERE myMemberID = {$myMemberID}"; //반드시 where이 존재해야함. 잘못하면 모든 회원의 이름이 바뀐다.
  $res = $dbConnect -> query($sql);

  if($res){
    echo "회원번호 {$myMemberID}의 이름이 {$cn}으로 변경되었습니다.";
  }else{
    echo "이름 변경 실패";
  }
?>
