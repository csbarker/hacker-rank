/* https://www.hackerrank.com/challenges/challenges/problem */
SELECT a.hacker_id, a.name, a.total
FROM (
        SELECT h.hacker_id, h.name, COUNT(c.challenge_id) AS total
        FROM hackers h, challenges c
        WHERE h.hacker_id = c.hacker_id
        GROUP BY h.hacker_id, h.name
        ORDER BY total DESC, h.hacker_id ASC
) a
WHERE a.total NOT IN (
	SELECT a.total
	FROM (
		SELECT a.total, COUNT(a.total) AS dup_cnt
		FROM (
			SELECT h.hacker_id, h.name, COUNT(c.challenge_id) AS total
			FROM hackers h, challenges c
			WHERE h.hacker_id = c.hacker_id
			GROUP BY h.hacker_id, h.name
			ORDER BY total DESC, h.hacker_id ASC
		) a
		WHERE a.total < (
			SELECT COUNT(c.challenge_id) AS total
			FROM challenges c
			GROUP BY c.hacker_id
			ORDER BY total desc
			LIMIT 1
		)
		GROUP BY a.total
	) a
	WHERE a.dup_cnt > 1
);