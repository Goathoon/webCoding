DELETE FROM myMember WHERE myMemberId = 4;
--4번 회원의 레코드 삭제

DELETE FROM myMember WHERE myMemberId IN(1,2);
--IN 절을 사용하여 myMemberID가 1,2인 레코드를 의미하고, 이 레코드들을 삭제합니다.

