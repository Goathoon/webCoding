<!-- jQuery 에서 POST 와 GET을 봤잖아요.
GET은 데이터를 url에 붙여 전달하는 방식임
보안상 좋진 않음.
그리고 get은 데이터를 불러올떄 사용하는 방식임.
GET 방식의 값을 받으려면 $_GET 이라는 글로벌 변수를 사용해야함.

url 이 http://www.everdevel.com?type=first&mobile=ok일때, GET 방식의 type변수를 사용하려면
$_GET[type]을 사용해야함. mobile 변수를 사용하려면 $_GET[mobile]을 사용해야함-->
<?php //GET방식의 데이터를 받는 예제임.
  echo "GET['type']은 ".$_GET['type']."<br />";
  echo "GET['mobile']은 ".$_GET['mobile']."<br />";
  //불러올라면 localhost/PHP/get.php?type=taehoon&mobile=notok 이런식의 사이트를 입력해야 get으로 데이터 불러옴.
?>
