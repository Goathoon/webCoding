/* schoolRecord 테이블에서 영어 점수가 가장 높은 사람의 레코드를 출력하려면 어떻게 해야 할까유?
조건문에 english = max(english)를 입력하면 될 것 같지만, error 발생
이유는 max(english)값을 알기 위해서는 전체의 영어점수를 파악해야 하고, 그 중 가장 높은 값을 구해야 하기 떄문이다.
집계함수는 필드를 입력하는 부분에서 사용할 수 있다.*/

/* 이런 경우 서브쿼리를 사용합니다. 서브 쿼리란, 쿼리문 안에서 또 다른 쿼리문을 사용하는 것을 의미합니다.
서브쿼리를 사용하여 가장 높은 영어 점수를 구한 후 그 점수를 조건문에 대입. */

select * from schoolRecord WHERE english = (select max(english) from schoolRecord); --서브 쿼리 사용시 꼭 괄호로 닫아줄것.


-----------------------------------------------------------------------------------------------------------------------
--SELECT 문에 사용하는 쿼리문에 대해 알아봅시다.
--학생들의 모든 점수를 출력하고 ,옆에 필드를 더 만들어서 모든 학생들의 영어 점수 평균을 출력하는 것을 쿼리문으로 만들어 봅시다.
-- 우선 영어 점수 평균을 구하는 서브쿼리문을 만듭시다. 필드명은 englishAVG 로 하겠습니다.
(SELECT avg(English) From schoolRecord) as englishAVG;

SELECT *, (SELECT avg(English) FROM schoolRecord) as englishAVG FROM schoolRecord; --엘리어스 englishAVG를 활용하여, 필드명 englishAVG로 정함. 