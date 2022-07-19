<?php
  include_once "./connectDB.php";
  //중복 확인 요청 받은 아이디
  $userId = $dbConnect->real_escape_string(trim($_POST['userId']));
  //AJAX 전송시 data변수의 인덱스로 'userId'로 지정했다.
  //쿼리문 생성
  $sql = "SELECT userId FROM myMember WHERE userId = '{$userId}'";
  //쿼리문 질의
  $res = $dbConnect->query($sql);

  //전달할 데이터
  $jsonResult = "bad";
  //해당하는 레코드 수가 0이라면 중복되는 아이디가 없다는 뜻이므로
  if($res->num_rows == 0){
    //good을 대입
    $jsonResult = "good";
  }
  //전달할 수 있도록 json 형태로 값 출력
  echo json_encode(array('result'=>$jsonResult));
  /*
  JSON 형태로 값을 1개가 아닌 여러개를 전달해야 하는 경우,
  'result'=>'good',
  'userId'=>'everdevel',
  'result2'=>'good')); 으로 작성하면 됨.
?>
