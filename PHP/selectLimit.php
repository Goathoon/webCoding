<?php
  include_once "./connectDB.php";

  // 페이지값을 구함.
  if(isset($_GET['page'])){ // 페이지의 값을 URL통해 받으므로 GET방식으로 page의 값이 있는지 확인한다. isset(이즈셋)은 해당 변수의 존재유무를 확인.
    $page = (int) $_GET['page'];
  }else{
    //페이지값이 없으면 1로 초기화
    $page = 1;
  }

  //페이지에 출력할 레코드 수
  $numView = 50;

  //변수 page값에 따른 LIMIT의 첫 번째 값 계산 (SELECT * FROM myMember LIMIT 0,49  한거 생각. LIMIT의 첫번쨰 값을 정해야함.)
  $firstLimitValue = ($numView * $page) - $numView;

  $sql = "SELECT * FROM myMember LIMIT {$firstLimitValue}, {$numView}";
  $result = $dbConnect->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8" />
<title>고객 리스트 </title>
<style>
table{font-size:10px}
</style>
</head>
<body>
  <h3>고객 리스트</h3>
  <table width = 100% bgcolor = "skyblue" cellspacing = "1">
  <tr bgcolor = "white" align = "center"> <!--가로 줄을 만드는 역할 -->
    <td>번호</td>
    <td>ID</td>
    <td>이름</td>
    <td>이메일</td>
    <td>성별</td>
    <td>가입일</td>
  </tr>
<?php
  for($i = 0; $i <$result->num_rows; $i++){
    $member = $result->fetch_array(MYSQLI_ASSOC);
?>
  <tr bgcolor = "white" align = "center">
    <td><?=$member['myMemberID']?></td> <!--출력 간단하게 하는 방법임을 잊지 마십쇼 -->
    <td><?=$member['userID']?></td>
    <td><?=$member['name']?></td>
    <td><?=$member['email']?></td>
    <td><?=(($member['gender']=='w') ? '여성':'남성')?></td> <!--삼항 연산자 사용 -->
    <td><?=$member['regTime']?></td>
  </tr>
<?php } ?> <!-- 여기서 for문 끝남 -->
</table>

</body>
</html>
