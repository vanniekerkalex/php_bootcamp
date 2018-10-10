SELECT
	COUNT(name) AS 'nb_susc',
	FLOOR(AVG(price)) AS 'ave_susc',
	(SUM(duration_sub) % 42) AS 'ft'
FROM
	db_avan_ni.subscription;