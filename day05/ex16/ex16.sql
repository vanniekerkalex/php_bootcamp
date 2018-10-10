SELECT
	COUNT(date) AS 'movies'
FROM
	db_avan_ni.member_history
WHERE
	DATE(date) <= '2007-07-7'
AND
	DATE(date) >= '2006-10-30'
OR
	date LIKE '%12-24%';