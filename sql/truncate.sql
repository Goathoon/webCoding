--DELETE 를 사용하여 레코드삭제하는것과 다른 점은 DELETE문은 레코드를 지우는 기능만 하므로, 사용된 primary key를 다시 배정받을 수 없지만, TRUNCATE문은 테이블을 처음 만든 상태로 만듭니다.

TRUNCATE myMember;
--myMember 테이블 초기화


----------------------------------------------JOIN 을 위한 밑작업입니다. truncate랑 상관 없음. ----------------------------------------------
INSERT INTO myMember(userId, name, password, phone, email, birthDay, gender, regTime)
VALUES ('everdevelHost', '김태영', 'mm281118', '010-1234-5678', 'everdevel@everdevel.com', '1928-11-18','m',now());

INSERT INTO myMember(userId, name, password, phone,email,birthDay, regTime)
VALUES ('dreamLights', '김태헌', 'djflkaj14783', '010-1234-5678', 'notnull@everdevel.com','1940-11-18',now());

INSERT INTO myMember(userId, name, password, phone, email, birthDay, gender, regTime)
VALUES ('tiger', '이지형', 'dlwlgud85', '010-1234-5678', 'tigger@everdevel.com', '1985-11-18','m',now());

INSERT INTO myMember(userId, name, password, phone, email, birthDay, gender, regTime)
VALUES ('nelly', '전윤동', 'wjsdbsehd83', '010-1234-5678', 'nelly@everdevel.com', '1983-04-27','m',now());

INSERT INTO myMember(userId, name, password, phone, email, birthDay, gender, regTime)
VALUES ('cooper', '노진우', 'shwlsdn87', '010-1234-5678', 'cooper@everdevel.com', '1987-02-01','m',now());

INSERT INTO myMember(userId, name, password, phone, email, birthDay, gender, regTime)
VALUES ('linu', '백창인', 'qorckddls81', '010-1234-5678', 'linu@everdevel.com', '1981-12-25','m',now());

INSERT INTO myMember(userId, name, password, phone, email, birthDay, gender, regTime)
VALUES ('hanje', '한정은', 'gkswjddms88', '010-1234-5678', 'hanje@everdevel.com', '1988-04-08','w',now());

INSERT INTO myMember(userId, name, password, phone, email, birthDay, gender, regTime)
VALUES ('stella', '이정미', 'dlwjdal84', '010-1234-5678', 'stella@everdevel.com', '1984-06-25','w',now());
-------------------------------------------------------------------------------------------------------------------------------------------