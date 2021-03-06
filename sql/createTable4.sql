create table dropOutOld(
    dropOutOldID int unsigned not null auto_increment comment '예전 탈퇴회원 번호',
    name varchar(10) not null comment '탈퇴 회원 이름',
    email varchar(30) not null comment '탈퇴 회원 이메일',
    primary key(dropOutOldID))
    charset=utf8 comment '2016년 탈퇴 회원';

create table dropOutNew(
    dropOutNewID int unsigned not null auto_increment comment '예전 탈퇴회원 번호',
    name varchar(10) not null comment '탈퇴 회원 이름',
    email varchar(30) not null comment '탈퇴 회원 이메일',
    primary key(dropOutNewID))
    charset=utf8 comment '2017년 탈퇴 회원';