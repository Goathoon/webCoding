--2개 이상의 테이블을 다루는데 사용되는 JOIN --

create table prodReview (
    prodReviewID int unsigned auto_increment comment '리뷰의 고유 번호',
    myMemberID int unsigned comment '리뷰를 작성한 회원번호',
    content tinytext comment '리뷰 내용',
    regTime datetime not null comment '리뷰 작성 날짜',
    primary key(prodReviewID))
    charset=utf8 comment ='상품 리뷰';
