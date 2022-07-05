-- 데이터 베이스의 레코드를 더욱 빠른 속도로 불러오게 하기 위하여 인덱스 사용
alter table myMember add INDEX(name); -- 인덱스 추가하는 방법이잖아요!! myMember 테이블의 name 필드에 인덱스를 추가.
-- 주의할 것. 필드를 추가할 떄와 명령문이 같으므로 혼동하지 않아야 한다. 필드명을 입력하면 필드가 추가되지만, INDEX를 적으면 인덱스를 적용한다.

-- 요약하자면, 이미 존재하는 테이블의 인덱스가 추가되어 있지 않은 필드에 인덱스를 추가하려면 ALTER 명령문을 사용해야함.

--결과는 name필드에 MUL이 적용된 것을 확인할 수 있음.


------------------------------ 테이블 생성 시에 인덱스를 적용하는 방법 (UNIQUE 도 생성시 설정할 수 있음)--------------------------------------
create table testTable(
    myMemberID int unsigned auto_increment comment '고객의 고유 번호',
    userId varchar(15) not null comment '고객의 아이디',
    name varchar(10) not null comment '고객명',
    password varchar(30) not null comment '고객의 비밀번호',
    email varchar(30) not null comment '고객의 이메일 주소',
    -- 여기가 설정하는 부분임 --
    INDEX(name),
    UNIQUE(email),
    primary key(myMemberID))
charset=utf8 comment='테스트 테이블';