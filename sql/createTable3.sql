CREATE TABLE schoolRecord(
    studentID int(10) unsigned not null auto_increment comment '학생 번호',
    class tinyint unsigned comment '소속 클래스(반)',
    english tinyint unsigned not null comment '영어 점수',
    math tinyint unsigned not null comment '수학 점수',
    science tinyint unsigned not null comment '과학 점수',
    japanese tinyint unsigned not null comment '일본어 점수',
    coding tinyint unsigned not null comment '코딩 점수',
    primary key (studentID)
) charset =utf8 comment ='성적 정보';