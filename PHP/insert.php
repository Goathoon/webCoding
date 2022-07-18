<?php
  //mysql 접속 소스를 include 함
  include_once "./connectDB.php";

  //입력할 데이터를 변수에 대입
  $userId = "miu0709";
  $name = "김미우";
  $userPW = "aldn";
  $phone = "010-1234-5678";
  $email = "kmu07111@everdevel.com";
  $gender = "w";

  //쿼리문 작성 (이 자체가 텍스트이므로 큰따옴표로 감싸고, 텍스트정보는 따옴포가 필요하므로, 작은 따옴표 사용.)
  $sql = "INSERT INTO myMember(userId, name, password,phone,email,gender,birthDay,regTime) Values";
  $sql .= "('{$userId}','{$name}','{$userPW}','{$phone}','{$email}','{$gender}','1997-06-06',NOW())"; //Values 뒤에 이어붙인거임.

  //쿼리문 전송 및 전송값을 result 변수에 대입
  $result = $dbConnect ->query($sql);

  //데이터 입력이 완료되었는지 확인
  if($result){
    echo "데이터 입력 완료";
  }else{
    echo "데이터 입력 실패";
  }
  echo $result;
?>
