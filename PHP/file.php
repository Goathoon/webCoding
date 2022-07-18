<?php
  //임시 저장된 정보
  $myTempFile = $_FILES['myImage']['tmp_name']; //이거 var_dump($_FILES)에서 출력되는 tmp_name 필드의 정보를 추출한거임. 즉, 변수 $_FILES의 정보로 넘어온 파일의 임시 위치값 대입

  //파일 타입 및 확장자 구하기
  $fileTypeExtension = explode("/",$_FILES['myImage']['type']); //var_dump()로 확인시 "image/png" 가 출력
  //explode()함수는 특정한 문자열을 기준으로 배열을 나누는데,
  //이 때, '/'를 기준으로 앞에는 파일타입, 뒤에는 확장자를 갖는다.

  //파일 타입
  $fileType = $fileTypeExtension[0];
  //파일 확장자
  $extension = $fileTypeExtension[1];

  //이미지 파일이 맞는지 확인
  if($fileType == 'image'){
    //허용할 확장자를 jpg, bmp, gif, png로 정함. 그 외는 업로드 불가.
    if($extension == 'jpeg' || $extension == 'bmp' || $extension == 'gif' || $extension == 'png'){
      //임시 파일을 옮길 저장 위치와 파일명
      $myFile = "./images/happyCat.{$extension}";
      //임시 저장된 파일을 우리가 저장할 위치와 파일명으로 옮김
      //move_upload_file(업로드할 파일의 임시 위치, 옮길 위치 및 파일명)
      $imageUpload = move_uploaded_file($myTempFile, $myFile); //myFile이 happyCat으로 고정되어 있기 떄문에 어떤 파일을 선택올리더라도, 항상 happyCat만 올라감.

      //업로드 성공 여부 확인
      if($imageUpload == true){
        echo "파일이 정상적으로 업로드되었습니다.";
        echo "<img src='{$myFile}' width = '100'/>";
      }else{
        echo "파일 업로드에 실패했습니다. ";
      }
    }
    //확장자가 jpg, bmp, gif,png가 아닐 때
    else{
      echo "허용하는 확장자는 jpg,bmp,gif,png입니다.";
      exit;
    }
  }
  // type이 image가 아닐 때
  else{
    echo "이미지 파일이 아닙니다. ";
    exit;
  }
?>
