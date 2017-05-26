/* https://www.hackerrank.com/challenges/contest-leaderboard */
SELECT a.hacker_id, a.name, SUM(a.score) as score
FROM (
    SELECT h.hacker_id, h.name, MAX(score) as score
    FROM hackers h
        INNER JOIN submissions s ON s.hacker_id = h.hacker_id
    GROUP BY hacker_id, challenge_id, name
	HAVING score > 0
) a
GROUP BY a.hacker_id, a.name
ORDER BY score DESC, hacker_id