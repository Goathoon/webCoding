$(document).ready(function(){ //페이지의 로드가 완료 되었을 때 jQuery가 작동하도록 합니다.
  //이곳에 jQuery 소스 작성
  //[가입하기]버튼
  var signUpBtn = $('#signUpBtn');
  //함수 내에서 var을 붙이지 않으면 모두 글로벌 변수로 지정된다. 그리고 함수 내에서 var을 붙이면 로컬 변수로 지정됩니다. 함수 밖에서는 항상 global
  //회원가입폼
  signup = $('#signup');
  //로그인폼
  loginForm = $('#loginForm');
  //내가 만드는 첫 웹서비스에 어서오세요.
  introSite = $('#introSite');

  //[가입하기] 버튼 클릭 이벤트
  signUpBtn.click(function(){
    //로그인 폼 숨기기
    loginForm.slideUp(); //PC화면에서도 당연히 사라집니다.
    //회원가입 폼 보이기
    signup.slideDown();
    //내가 만드는 첫 웹서비스에 어서오세요.-문구 숨기기
    introSite.slideUp();
});
  //[로그인하기] 버튼
  var goToLoginBtn = $('#goToLoginBtn');
  //[로그인하기] 버튼 클릭 이벤트
  goToLoginBtn.click(function(){
    //로그인 폼 보이기
    loginForm.slideDown();
    //회원가입 폼 숨기기
    signup.slideUp();
    //내가 만드는 첫 웹서비스에 어서오세요 - 문구 보이기
    introSite.slideDown();
  });

  //성별 컨트롤
  //[여성] 버튼
  var genderWoman = $('#gMW');
  //[남성] 버튼
  var genderMan = $('#gMM');
  //[여성]버튼 클릭 이벤트
  genderWoman.click(function(){
    //배경색과 텍스트의 색 초기화 함수 호출
    genderBgInit();
    $(this).css('background','#64cbf9');
    //this 활용하면 클릭한것만 변합니다.
    $(this).css('color','#fff');
  });
  //[남성] 버튼 클릭 이벤트
  genderMan.click(function(){
    genderBgInit();
    $(this).css('background','#64cbf9');
    $(this).css('color','#fff');
  });

  //모바일 첫 화면에서 가입하기 버튼(#signUpBtn) 누르면
  //회원 가입 폼으로 전환되고, 그 가입버튼은 (#signUpSubmit)임
  //JQuery로 CSS의 설정값을 변경하면 CSS가 inline 형식으로 적용되어
  //external형식의 미디어쿼리로 적용된 값보다 우선순위가 높아서
  //external에 있는 로그인 폼의 display:block이 적용되지 않음.
  //따라서, pc화면에서의 로그인 폼과, '내가 만드는 첫 웹서비스에 어서오세요'의
  //문구가 보이도록 만들어야함.

  toGoToShort = false; //웹브라우저 창의 가로길이가 1200px 이상일 때
  //회원가입 폼이 보이도록 설정되어 있는 변수이다.

  //배경색과 텍스트 색 초기화 함수
  function genderBgInit(){ //genderMan은 함수 내 지역변수입니다.
    genderMan.css('background', '#fff');
    genderWoman.css('background','#fff');
    genderMan.css('color','#000');
    genderWoman.css('color','#000');
  }
});

$(window).resize(function(){
  if(window.innerWidth>=1200){
    loginForm.slideDown();
    signup.slideDown();
    introSite.slideDown();
    toGoToShort = true;
  }
  else//1200px보다 작을때, signup 위로 올림.(모바일폼)
  {
    if(toGoToShort == true){
      signup.slideUp();
    }
  }
});
