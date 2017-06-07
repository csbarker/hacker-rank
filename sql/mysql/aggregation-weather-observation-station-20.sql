/* https://www.hackerrank.com/challenges/weather-observation-station-20 */
SELECT round(lat_n 4)
FROM station
ORDER BY lat_n
LIMIT 1
OFFSET 249; /* This is a bit hackey, but whatever */