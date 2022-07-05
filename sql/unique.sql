--테이블의 대표 필드에 primary key를 적용하면 해당 필드에는 같은 값이 들어가지 않는다.
-- 이와 같은 역할을 하는 기능에는 UNIQUE가 있따.
-- primary key는 단 한 번만 사용할 수 있고, 사용할 경우 해당 필드는 해당 테이블의 기준이 되는 필드가 되지만
-- UNIQUE는 같은 값이 들어가지 않게만 하는 기능을 갖고 있다. (예를들어 이메일같은 느낌)

alter table myMember modify email varchar(30) NOT NULL UNIQUE comment '고객의 이메일 주소';

--unique활용을 위한 데이터 입력
insert into myMember(userId, name, password,phone,email,birthDay, gender,regTime)
Values('paper','페퍼','페퍼데스','010-1234-5678','everdevel@everdevel.com','2015-11-18','m',now());
--unique로 설정 하였으므로, duplicate 오류 발생