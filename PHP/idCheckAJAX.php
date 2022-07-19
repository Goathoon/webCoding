<!DOCTYPE html>
<html>
<head>
<meta charset= "utf-8" />
<title>화면 전환 없이 아이디 중복 체크 </title>
<script type = "text/javascript" src = "../jQuery/js/jquery-3.1.0.min.js"> </script>
<script>
//페이지를 모두 불러오면 작동
$(document).ready(function(){ //jQuery 구동하는 코드
  //[중복 확인] 버튼 클릭 이벤트
  $('#idCheckBtn').click(function(){
    //AJAX 통신 시작
    $.ajax({
      type: 'post', //post 전송 방식으로 전달
      dataType: 'json', //json 언어로 전달
      url: './idCheckReal.php',
      data: {userId: $('#userId').val()}, //전달할 데이터
      async: false, //값을 전달받은 후 실행 (동기화) 결과가 나타날떄까지 기다린 후, 그 결과에 따라 처리함.

      success: function (data) { //data는 아이디의 중복 여부에 대한 리턴 값이 대입
        //변수 word의 값 초기화
        var word = '이미 존재하는 아이디입니다.';
        //해당 아이디가 없으면
        if(data.result == 'good'){ //data 변수 안에 json형식으로 result라는 변수가 있음.
          //이 result 라는 변수는 idCheck.php 에서 result라는 변수에 값을 대입하여 전달하기 때문에
          //result로 받음. 그리고 현재 data의 값은 data = {result:값} 임.

          //JSON의 값에 접근할 떄는 .을 이용하여 값에 접근함.
          word = '입력하신 아이디를 사용해도 좋습니다.';
        }
        $('#idCheckComment').text(word);
      },
      error: function(request,status,error) {
        console.log('request' + request);
        console.log('status' + status);
        console.log('error' + error);
      }
    });
  });
});
</script>
</head>
<body>
  <input type ="text" name = "userId" id = "userId" placeholder = "아이디입력" />
  <input type ="button" id = "idCheckBtn" value ="중복 확인" />
  <div id ="idCheckComment"> </div>
</body>
</html>
