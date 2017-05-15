/* https://www.hackerrank.com/challenges/the-blunder */
SELECT CEIL(AVG(salary) - (
    SELECT AVG(a.salary)
    FROM (
        SELECT REPLACE(salary, 0, '') as salary
        FROM employees
    )a
))
FROM employees