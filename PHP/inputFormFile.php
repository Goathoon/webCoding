<!DOCTYPE html>
<html>
<head>
<meta charset= "utf-8" />
<title>텍스트 입력하기</title>
<style>
textarea{float:left;width:500px;height:100px}
input{clear:both;float:left}
</style>
</head>
<body>
  <h1>입력한 테스트를 파일에 저장하기 </h1>
  <form name ="myText" method = "post" action = "makingFile.php">
    <textarea name = "myInputText"></textarea> <!-- 여러 라인을 파일에 쓰기위해 textarea 태그 사용-->
    <input type ="submit" value = "입력" />
  </form>
</body>
</html>
