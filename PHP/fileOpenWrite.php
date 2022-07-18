<?php
  //파일에 쓸 내용
  $content = "Hello World!"; //파일에 쓸 내용
  //내용을 저장할 파일명
  $fileName = "helloWorld.txt"; //생성하거나 읽을 파일명
  //파일 열기
  $fp = fopen('./myFiles/'.$fileName,'w'); //해당 위치에 myFiles라는 폴더가 존재하지않으면 실행되지 않음.
  //파일 쓰기
  $fw = fwrite($fp, $content); //첫번째 아규먼트는 파일 정보, 두번째는 파일에 쓸 내용
  //파일 쓰기 성공 여부 확인
  if($fw == false){
    echo "파일 쓰기에 실패했습니다. ";
  }else{
    echo "파일 쓰기 완료";
  }
  //파일 닫기
  fclose($fp);
?>
