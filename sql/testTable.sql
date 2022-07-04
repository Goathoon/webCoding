create table testTable(
myMemberID int unsigned auto_increment comment '고객의 고유 번호',
userId varchar(15) not null comment '고객 아이디',
name varchar(10) not null comment '고객명',
password varchar(30) not null comment '고객의 비밀번호',
phone varchar(13) not null comment '고객의 휴대전화 번호',
email varchar(30) not null comment '고객의 이메일 주소',
birthDay char(10) not null comment '고객의 생일',
regTime datetime not null comment '회원가입 시간',
primary key(myMemberID))
charset=utf8 comment='고객 정보 테이블';    