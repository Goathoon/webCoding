<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <h1>파일 업로드</h1>
  <form name = "fileUpload" method = "post" action = "file.php" enctype = "multipart/form-data">
  <!--enctype은 파일을 업로드하는 폼을 만들어야할 경우 form태그의 속성으로 필요하다 -->
  <input type ="file" name ="myImage" />
  <input type ="submit" value ="파일등록" />
</form>
</body>
</html>
