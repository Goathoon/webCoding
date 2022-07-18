<?php
  include_once "./connectDB.php";

  //POST 방식으로 전달받은 값 확인
  echo "<pre>"; //echo "<pre>" 해서 줄바꿈해서 예쁘게 나오게끔 함.
  var_dump($_POST);

  //이름 검증
  if($_POST['userName'] == '' || $_POST['userName']==null){
    echo "해당 값을 사용할 수 없습니다. 1";
    exit;
  }

  $userName = $_POST["userName"];
  //앞 뒤 공백 제거
  $userName = trim($userName);
  //쿼리문의 다옴표 처리를 위해 real_escape_string 메소드 사용
  $userName = $dbConnect->real_escape_string($userName);

  //아이디 검증
  if($_POST['userId'] == '' || $_POST['userId'] ==null){
    echo "해당 값을 사용할 수 없습니다. 2";
    exit;
  }

  $userId = $_POST['userId'];
  $userId = strtolower(trim($userId));
  $userId = $dbConnect->real_escape_string($userId);


  //비밀번호 검증
  if($_POST['userPw'] == ''|| $_POST['userPw'] ==null){
    echo "해당 값을 사용할 수 없습니다. 3";
    exit;
  }

  //비밀번호 암호화
  $userPw = sha1("everdevel".$_POST['userPw']);

  if($_POST['userGender'] == 'm' || $_POST['userGender'] == 'w'){
    $userGender = $_POST['userGender'];
  }else{
    echo "해당 값을 사용할 수 없습니다. 4";
    exit;
  }

  //이메일 유효성 검사
  $emailCheck = filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL);
  if($emailCheck ==false){
    echo "해당 값을 사용할 수 없습니다. 5";
    exit;
  }

  $email = $_POST['userEmail'];

  $sql = "INSERT INTO myMember(userId,name,password,phone,email,birthDay,gender,regTime) VALUES";
  $sql .="('{$userId}','{$userName}','{$userPw}','010-3591-8229','{$email}','1997-06-06','{$userGender}',NOW())";
  $res = $dbConnect->query($sql);
  if($res){
    echo "회원가입 정보 입력 완료";
  }else{
    echo "회원가입 정보 입력 실패";
  }
?>
