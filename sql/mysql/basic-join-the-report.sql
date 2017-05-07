/* https://www.hackerrank.com/challenges/the-report */
SELECT IF(g.grade < 8, NULL, s.name), g.grade, s.marks
FROM students s
    JOIN grades g ON s.marks BETWEEN g.min_mark AND g.max_mark
ORDER BY grade DESC, name ASC