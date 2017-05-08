/* https://www.hackerrank.com/challenges/full-score */
SELECT a.hacker_id, h.name
FROM (
    SELECT s.hacker_id, COUNT(s.score) as count
    FROM submissions s
        INNER JOIN challenges c ON c.challenge_id = s.challenge_id
        INNER JOIN difficulty d ON d.difficulty_level = c.difficulty_level
    WHERE s.score = d.score
    GROUP BY s.hacker_id
    HAVING COUNT(s.score) > 1
)a
    INNER JOIN hackers h ON h.hacker_id = a.hacker_id
ORDER BY a.count DESC, a.hacker_id ASC