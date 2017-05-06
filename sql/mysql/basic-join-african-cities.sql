/* https://www.hackerrank.com/challenges/african-cities */
SELECT ci.name
FROM city ci
    INNER JOIN country c ON c.code = ci.countrycode
WHERE c.continent = 'Africa'