<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8" />
<title>for문을 이용한 select 태그 </title> <!-- 이거 싹다 프론트엔드 프로젝트 챕터의 index.html파일 제작시
  생년월일을 프로그래밍으로 처리하기로 한 그 부분을 PHP로 구현할 것임.-->
</head>
<body>
  <select id = "birthMonth" name = "birthMonth">
   <!-- select tag 쓰면 option이 따라나오죠 ? -->
   <?php //html 태그 안에서도 PHP는 사용이 가능 합니다.
   $selectedMonth = 4; //4월에 기본 선택되도록 변수 선언.
   //월은 1월부터 12월까지 존재하기 떄문에 option태그가 총 12개 사용됨. 하나하나 타이핑하지 않고,
   //for 문을 이용하여 표시해야함.
   for($i = 1; $i <=12; $i++){
     //selected 입력할 값 선언
     $selected = '';
     if($i == $selectedMonth){
       $selected = "selected";
     }
    ?>
   <option value ="<?=$i?>"<?=$selected?>><?=$i?></option> <!-- <?=$i?>는 출력문을 간단하게 사용하는 방법. 이는, <?php echo $i;?>와 같은 기능(변수 i 출력) -->
 <?php } ?> <!--이상할 수 있는데 다시 PHP열고 for문 닫고 PHP를 닫는 방식으로 유연하게 작성 가능 -->
  </select>
  <label for = "birthMonth">월</label>
</body>
</html>
