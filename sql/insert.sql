INSERT INTO myMember(userId,name,password,phone,email,birthDay,gender,regTime)
VALUES('everdevelHost','김태훈','mm281118','010-3591-8229','everdevel@everdevel.com','1997-06-06','m',now());
--now()는 현재시간을 뜻하고, 명시한 필드중에 myMemberID가 없는 이유는, auto_increment 가 설정 되어있기 때문입니다.

--2번쨰 INSERT
INSERT INTO myMember(userId, name, password,phone,birthDay,regTime)
VALUES('jake', '김태훈', 'djflkaj14783','010-1234-5678','1997-06-06',now());
--warning이 발생하는 이유는 email에 아무런 값(null)값이 입력되어있지 않기 때문이다. 만일 not null이 적용되지 않았다면 warning이 뜨지 않는다.