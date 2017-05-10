/* https://www.hackerrank.com/challenges/harry-potter-and-wands */
SELECT w.id, wp.age, w.coins_needed, w.power
FROM wands w
    INNER JOIN wands_property wp ON wp.code = w.code
WHERE wp.is_evil = 0 
	AND w.coins_needed = (
		SELECT MIN(coins_needed)
		FROM wands w1
			JOIN wands_property wp1 ON wp1.code = w1.code
		WHERE w1.power = w.power and wp1.age = wp.age
	)
ORDER BY power DESC, age DESC