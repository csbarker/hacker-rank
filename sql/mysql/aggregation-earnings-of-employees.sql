/* https://www.hackerrank.com/challenges/earnings-of-employees */
SELECT a.salary, (
    SELECT COUNT(e.employee_id)
    FROM employee e
    WHERE salary * months = a.salary
)
FROM (
    SELECT MAX(salary * months) as salary
    FROM employee
)a