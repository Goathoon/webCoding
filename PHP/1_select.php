<?php
  include_once "./connectDB.php";

  $sql = "SELECT name, userId FROM myMember";
  //$sql = "SELECT name, userId FROM myMember ORDER BY name ASC" 이러면 ㄱ,ㄴ,ㄷ순으로 불러옴.
  //select문을 이용하여 쿼리문을 만들고 query()메소드를 이용하여
  //불러옵니다. 그리고 그것을 변수에 선언한 후 해당 변수에서 fetch_array()메소드를 이용하여 자료를 가져옵니다.
  $result = $dbConnect->query($sql); //쿼리송신, 그 결과를 result에 저장.

  $numResult = $result->num_rows; //num_rows 는 레코드의 수를 가져오는 명령어이다.
  if($numResult !=0){ //레코드의 수가 0인지 아닌지를 판별.
    for($i = 0; $i <$numResult; $i++){
      $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
      echo "회원이름: ".$memberInfo['name'].", 회원 ID: ".$memberInfo['userId']."<br />";
    }
  }else{
    echo "데이터가 없습니다. ";
  }
  //order가 설정되어 있지 않기 떄문에 데이터가 primary key 순서로 출력된다. 이를 ㄱ,ㄴ,ㄷ 순으로 불러오려면
  //order문을 추가해야함
?>
