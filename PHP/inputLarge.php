<?php
  include_once "./connectDB.php";
  //성 배열 선언
  $familyName = array();
  //성 데이터 입력
  $familyName = ['김','이','박','전','황','목','송','전','노','양','윤','고','최','조','백'];

  //이름 배열 선언
  $lastName = array();

  //이름 데이터 입력
  $lastName = ['영중','유리','민후','유나','창인','기욱','해윤','미라','태진','혜진','미우'];

  //성별 배열 선언
  $gender = array();
  $gender = ['m','w'];

  //테이블에 회원 정보 입력 성공 카운트

  $successCount = 0;
  //실팸
  $failCount = 0;

  //insert 문을 500회 작동시키기 위한 for문
  for($i = 1; $i<=500; $i++){
    //랜덤으로 성을 받음

    //rand()함수는 rand(시작값, 끝값) 으로 사용하며, 시작값부터 끝값중 하나를 무작위로 반환한다.
    $numRandomFN = rand(0,count($familyName) -1); //1을 뺸 이유는 배열의 인덱스이므로.ㄴ
    //랜덤으로 이름을 받음
    $numRandomLN = rand(0,count($lastName)-1);
    //랜덤으로 성별을 받음
    $userGender = $gender[rand(0,1)];
    //랜덤으로 비밀번호 생성
    $userPw = sha1("haro39339393".rand(1,1000));
    //랜덤으로 부여받은 이름을 하나의 데이토로 합침
    $userName = $familyName[$numRandomFN].$lastName[$numRandomLN];// "." 는 연결자임을 잊지 말자.
    //랜덤으로 아이디를 부여받음
    $userId = "everdevel".rand(1,9999999);
    //랜덤으로 이메일을 부여받음
    $email = "eve".rand(1,9999999)."@everdevel.com";

    //위에서 랜덤으로 생성 받은 정보를 테이블에 입력
    $sql = "INSERT INTO myMember(userId,name,phone,password,gender,email,birthDay,regTime) VALUES";
    $sql .= "('{$userId}','{$userName}','010-3591-8229','{$userPw}','{$userGender}','{$email}','1997-03-01',now())";
    $res = $dbConnect->query($sql);
    if($res){
      //입력 성공
      $successCount++;
    }else{
      //입력 실패
      $failCount++;
    }
  }//반복문 끝

  //반복문 끝나고 실행 결과
  echo "입력 성공 수 {$successCount}";
  echo "<br />";
  echo "입력 실패 수 {$failCount}";
?>
