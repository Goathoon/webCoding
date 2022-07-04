--join은 일치하는 특정 필드를 기준으로 테이블과 테이블을 연결했다면,
--union은 사용하려는 테이블들을 하나의 테이블인 것처럼 사용하게 해주는 기능을 제공.

-- ************** 유의할점 *****************
-- select로 두 테이블에서 필드 불러올 때, 테이블 당 불러오는 필드의 수가 같아야 합니다!! --

(select name, email from dropOutOld) UNION (select name, email FROM dropOutNew);
--겹치는 친구는 또 union 하지 않음. 합집합의 개념으로 생각해요.
--만일 중복된 정보도 함꼐 보려면 UNION 대신에, UNION ALL을 사용합니다.

(select name, email from dropOutOld) UNION ALL(select name, email FROM dropOutNew);