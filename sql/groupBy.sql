--그룹별 집계는 특정 집단의 수치를 집계함수를 이용하여 값을 표시하는 것.
--예를들어 student 테이블에서 반별로 학생들의 영어 평균값을 구할 떄에는 GROUP BY 를 사용한다.

select class, avg(english) FROM schoolRecord WHERE class IN(1,2,3,4) group by class;

select class, sum(math) FROM schoolRecord WHERE class IN(1,2,3,4) group by class;

--수학점수가 150점 이상인 결과만 출력하는 방법??? -> WHERE 대신 HAVING 이용합니다.
SELECT class, sum(math) FROM schoolRecord Where class IN(1,2,3,4) group by class HAVING sum(math) >=150;