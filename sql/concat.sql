-- 테이블의 서로 다른 필드에 있는 값을 합쳐서 출력한다. concat를 활용
select concat(name,'의 이메일 주소는 ', email, '입니다.') from myMember;
-- 만일 이메일이 안적혀있는 친구가 있으면 조건문을 활용.
select concat(name,'의 이메일 주소는 ', email, '입니다.') from myMember where email !="";