<?php
  //fread()와 fgets()의 차이점은, fgets()의 함수는 줄 바뀜을 만나면 가져오는 것을 종료한다는 것이다. 따라서 한 줄만 가져옴.
  //불러올 용량은 어느정도의 용량에서 줄 바뀜이 일어날지 알 수 없으므로 충분한 용량 제시하는 것이 좋다.
  $filePathName = "./myFiles/largeRow.php";
  if(file_exists($filePathName)){
    $fp = fopen($filePathName,'r');
    //읽어 올 용량 설정 상황에 따라 다른 값을 넣어야 함
    $readByte = 512;
    if($fp){
      while(($fr = fgets($fp,$readByte)) != false){
        echo $fr."<br />";
      }
    }
  }
  else{
    echo "파일이 존재하지 않습니다.";
  }
?>
