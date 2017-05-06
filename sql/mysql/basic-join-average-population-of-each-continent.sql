/* https://www.hackerrank.com/challenges/average-population-of-each-continent */
SELECT c.continent, FLOOR(AVG(ci.population))
FROM city ci
    INNER JOIN country c ON c.code = ci.countrycode
GROUP BY c.continent