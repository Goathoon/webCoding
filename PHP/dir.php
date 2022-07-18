<?php
  /* -------------------- 디렉터리 함수 정리 -----------------------
  1.$dirCheck = is_dir("./images/");
  해당 위치에 images 폴더가 있다면 true를 반환, 없다면 false

  2.$opendir = opendir("./images/");
  해당 위치에 images 폴더를 여는 데에 성공 했다면 true를 아니면 false

  3.$opendir = opendir("./images/");
  $readFile = readdir($opendir) 또는 readdir(opendir("./images/")) 은 동일.
  readdir() 함수는 폴더 안의 파일을 읽을 때 사용. 아규먼트로 opendir()함수의 결과로 리턴값을 넣거나 값을 대입한 변수를 입력.
  readdir은 폴더 안의 파일명을 반환

  4.$opendir = opendir("./images/");
  closedir($opendir);
  closedir() 함수는 열었던 디렉터리를 닫을 때 사용한다. 아규먼트로 opendir()의 값을 담은 변수를 사용.
  //-----------------------------------------------------------------------*/


  //체크할 디렉터리를 대입
  $dir = "./images";

  //폴더가 있는지 확인
  if(is_dir($dir)){
    $opendir = opendir($dir);
    if($opendir == true){
      while(($file = readdir($opendir)) != false){ //readdir()은 실행되는 횟수마다 횟수에 맞는 폴더의 내용을 순서대로 반환한다.
        echo $file."<br />";
      }
    }
    // 폴더를 열지 못했을 떄
    else{
      echo "해당 폴더를 열지 못했습니다.";
      exit;
    }
  }

  //폴더가 없을 경우
  else{
    echo "해당 폴더가 없습니다.";
    exit;
  }
?>
