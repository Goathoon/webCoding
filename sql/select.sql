SELECT name, userId FROM myMember;
--name, userId 만 myMember table에서 불러오기

SELECT * FROM myMember;
--모든 필드를 다 불러오기 

SELECT * FROM myMember WHERE myMemberID = 1;
-- 회원번호 1번인 회원정보만 불러오기

SELECT * FROM myMember WHERE email LIKE '%everdevel%';
--이메일에 everdevel이라는 텍스트가 있고, 앞 뒤에 어떠한 텍스트가 있는 경우 텍스트의 앞 뒤로 %를 붙인다.

SELECT * FROM myMember WHERE email LIKE 'everdevel%';
--이메일에 everdevel 이라는 텍스트가 있고, 앞에는 아무것도 없는 데이터를 불러올떄 쓰는 코드 반대로도 응용 가능 하겠죠?

SELECT * FROM myMember WHERE myMemberID >= 1 AND myMemberID <=3;
--눈치 있께 바로 보고 압시다.

SELECT * FROM myMember WHERE name LIKE '김%' OR name LIKE '이%';