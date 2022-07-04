select count(class) FROM schoolRecord;
--null 값은 뺴고 6개 나옵니다.

select count(*) FROM schoolRecord;
--값이 null이라도 포함한답니다.(모든 레코드의 수를 표시합니다.)