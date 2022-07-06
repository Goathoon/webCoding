<!-- POST방식을 사용하기 위해 form 태그를 이용한다. -->
<!doctype html>
<html>
<head>
<meta charset= "utf-8" />
<title>POST방식을 알기위한 form태그 </title>
</head>
<body>
  <h1>간단한 입력폼 </h1>
  <form name ="data" method = "post" action = "post.php">
  <label for = "email">email</label>
  <input type="email" name ="email" id="email" placeholder ="이메일 주소 입력" />
  <label for = "password">비밀번호</label>
  <input type ="password" name ="password" id = "password" placeholder="비밀번호 입력"/>
  <input type ="submit" value ="전달"/>
  <!-- 이사이트에서 입력한 값들은 action에 명시된 페이지로 전달.
  GET방식과 같이 POST방식의 값은 $_POST를 사용하여 전달받음.
  $_POST는 데이터형이 배열이며, []의 괄호 안에는 input 태그 속 name값이 인덱스로 사용됨.
</form>
</body>
</html>
