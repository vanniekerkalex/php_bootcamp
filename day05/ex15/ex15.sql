SELECT
	TRIM(TRAILING '0' FROM REVERSE(phone_number)) AS 'rebmunenohp'
FROM
	db_avan_ni.distrib
WHERE
	phone_number LIKE '05%';