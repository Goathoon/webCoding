--불러올 게시판 수를 조절하는 것임 -> 속도에 영향을 줍니다. 따라서 limit로 불러올 레코드 수를 지정합니다.

select * from myMember limit 3;

select * from schoolRecord order by english desc limit 4; --limit은 항상 마지막에 !!

--여러 커뮤니티 사이트의 게시판 페이지를 살펴보면 처음에 20개의 게시물을 출력하고 [다음] 버튼을 누르면 그 다음 순번의 20개의 게시물을 보여줌.
--이를 구현하려면 limit에 2개의 값을 적용해야 합니다.
--limit에 값을 하나 사용하는 경우 -> 그 값은 개수 그 자체로 사용된다.
--limit에 값을 두개 사용하는 경우 -> 첫번쨰 값은 그 다음 불러올 레코드의 순번이며, 이 순번은 1부터 수를 세지않고 0부터 센다(배열 index랑 비슷). 두번쨰 값은 불러올 수를 의미함.


--첫 번쨰 페이지에서 작동하는 쿼리문
select * from myMember limit 2;
--두 번쨰 페이지에서 작동하는 쿼리문
select * from myMember limit 2,2; --1,2를 지나 3에 위치한 아이디부터 시작합니다.
--세 번째 페이지에서 작동하는 쿼리문
select * from myMember limit 4,2;