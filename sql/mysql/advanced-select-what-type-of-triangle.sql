/* https://www.hackerrank.com/challenges/what-type-of-triangle */
SELECT
    CASE 
        WHEN (a + b) <= c THEN 'Not A Triangle'
        WHEN a != b AND b != c AND c != a THEN 'Scalene'
        WHEN a = b AND b = c THEN 'Equilateral'
        WHEN a = b OR b = c OR c = a THEN 'Isosceles'
    END
FROM triangles