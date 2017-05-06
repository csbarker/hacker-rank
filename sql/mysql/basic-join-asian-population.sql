/* https://www.hackerrank.com/challenges/asian-population */
SELECT SUM(ci.population)
FROM city ci
    INNER JOIN country c ON ci.countrycode = c.code
WHERE c.continent = 'Asia'