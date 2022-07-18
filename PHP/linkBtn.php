<?php
  include_once "./connectDB.php";

  $sql = "SELECT * FROM myMember";
  $res = $dbConnect->query($sql); //4,5라인은 전체 레코드 수를 알기 위한 쿼리문 및 쿼리 질의이다.
  $numView = 50;
  $totalRecord = $res ->num_rows;
  //페이지 수
  $numPage = ceil($totalRecord / $numView); //ceil 함수는 올림의 기능

  for($i = 1; $i <= $numPage; $i++){?>
    <a href= "http://localhost/PHP/selectLimit.php?page=<?=$i?>">
      <?=$i?>
    </a>
<?php } ?>
