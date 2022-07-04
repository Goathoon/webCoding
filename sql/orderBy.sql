select studentID, english FROM schoolRecord order by english desc;
--영어점수를 높은순에서 낮은순으로 표시합니다.
select studentID, english FROM schoolRecord order by english asc;
--낮은순에서 높은순으로 표시합니다. 만약 같은점수가 있다면, studentID가 작은순부터 큰 순으로 표시됩니다.
select class, sum(math) from schoolRecord where class in(1,2,3,4) group by class order by sum(math) desc;