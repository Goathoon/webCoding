-- 이미 입력한 데이터를 변경하기 위하여 사용하는 UPDATE문.

UPDATE myMember SET phone = 0 WHERE myMemberID =4;
--myMmeberID 가 4번인 고객의 휴대전화 번호를 0으로 변경.

UPDATE myMember SET phone = '010-1234-5678', userId = 'sheldon' WHERE myMemberID = 4;
--4번 회원의 휴대전화 번호를 010-1234-5678 로 저장하고, 아이디를 cooper에서 sheldon으로 변경

UPDATE myMember SET phone = 0;
--모든 회원의 휴대전화 번호를 0 으로 변경할게용

UPDATE myMember SET phone = phone+3;
--필드를 지정한 후 대입하는 곳에 필드명을 입력하면 기존의 필드에 있는 값을 출력, 그 후 3을 더한값이 대입이 된다 이말.

UPDATE myMember SET phone = '010-1234-5678';
--모든 회원의 휴대전화 번호를 원래? 대로 바꿉시당 