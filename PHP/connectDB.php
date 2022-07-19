<?php
  //MySQL에 접속하여 데이터의 추가, 삭제를 했던 작업들을 PHP와 연동하여 진행하자.
  //먼저 데이터베이스와 연동하려면, 데이터베이스에 접속하는 프로그램을 만들어야 함.
  //PHP에서는 이미 만들어져 있는 mysqli라는 클래스가 존재. 이 mysqli라는 클래스는 PHP가 MySQL에 접속할 수 있는 기능 소유.

  //우리는 데이터베이스에 접근하기 위해 유저명과 비밀번호를 사용. PHP에 접근하려면 데이터베이스의 위치와 사용할
  //데이터베이스의명이 더 필요하다.

  //----------데이터 베이스 접속에 필요한 정보들을 변수에 입력 ------------
  $host = "localhost";
  $user = "root";
  $pw = "root";
  $dbName = "myFirstDB";
  //---------------------------------------------------------------------

  //mysqli라는 클래스의 생성자에 데이터베이스에 필요한 정보들을 입력하였음. 벼수 순서 신경쓸 것.
  $dbConnect = new mysqli($host,$user,$pw,$dbName);

  //인코딩을 utf-8로 세팅.
  $dbConnect->set_charset("utf8");

  if(mysqli_connect_errno()){//데이터베이스에 잘 접속이 되었는지 여부를 알기 위해 사용.
    echo "데이터베이스 접속 실패";
    echo mysqli_connect_error();//어떠한 원인인지 알기위해 사용한 함수.
  }
?>