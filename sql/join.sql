--prodReview 테이블에는 리뷰 작성자의 이름정보가 없다. 만약 누군가가 리뷰를 볼 수 있는 페이지를 만들어 달라고 하면서, 리뷰 작성자의 이름도 함께 보이게 해주세여라고 요청햇다면
-- join을 이용하여 충분히 해결할 수 있다. 즉, JOIN명령문은 2개 이상의 테이블을 연결해 주는 기능을 합니당.

--SELECT 필드명 FROM 테이블명 엘리어스 JOIN 연결할 테이블명 엘리어스 ON(두 테이블의 연결고리 역할을 할 필드 조건문) 
--엘리어스라는것은 테이블명의 별명을 짓는 것임. 왜 굳이 이것을 하냐?
--필드명이 다른테이블 속에 공통인자일 수 있기 때문이요. 구분 필수.

SELECT m.name, r.content, r.regTime FROM myMember m JOIN prodReview r ON (m.myMemberID = r.myMemberID);
--FROM ~~ JOIN ~~ 는 별명짓기라고 할 수 있겠죠 ??? 그리고 ON은 두 테이블 합칠때의 공통된 기준을 의미합니다. MEMBERID가 같아야 의미가 있겠죠?

--regTime 이 어떤 테이블의 regTime인지 좀 더 명확히 표시하고 싶다면 AS를 이용하여 reviewRegTime으로 필드명을 임시로 변경하여 표시되도록 할 수 있습니다.
SELECT m.name, r.content, r.regTime AS reviewRegTime FROM myMember m Join prodReview r ON (m.myMemberID = r.myMemberID);

--만일, 회원이름을 모두 표시하고, 해당 회원의 리뷰가 있다면 리뷰를 보여주고, 그렇지않다면 없는 값을 표시하는 데이터를 출력하려면 JOIN 대신 LEFT JOIN을 사용합시다.
SELECT m.name, r.content, r.regTime FROM myMember m LEFT JOIN prodReview r ON(r.myMemberID = m.myMemberID);
--LEFT JOIN 이든 RIGHT JOIN이든 기준이 되는 테이블을 지정함. LEFTJOIN하면, myMember 테이블의 아이디 값을 기준으로 하므로 다보여지고,
--RIGHT JOIN하면 prodReview 테이블의 아이디 값을 기준으로 보여짐.
